#!/usr/bin/env python3

import os
import re
import fcntl
import struct
import time
import signal
import traceback
import subprocess

def read_null_sep(f):
    with open(f, 'rb') as ifp:
        data = ifp.read()
    return data.rstrip(b'\0').split(b'\0')

def read_env(p):
    d = read_null_sep(os.path.join('/proc/', p, 'environ'))
    rv = dict()
    for i in d:
        idx = i.index(b'=')
        rv[i[:idx].decode('utf-8')] = i[idx + 1:].decode('utf-8')
    return rv

def read_args(p):
    d = read_null_sep(os.path.join('/proc/', p, 'cmdline'))
    return [arg.decode('utf-8') for arg in d]

def get_user_proc_list():
    items = os.listdir("/proc/")
    numpat = re.compile(r"^\d+$")
    allprocs = filter(numpat.match, items)
    myuid = os.getuid()
    
    rv = []
    for p in allprocs:
        try:
            if os.stat(os.path.join('/proc/', p)).st_uid == myuid:
                rv.append(p)
        except:
            pass
    return rv

def wine_lock_file(prefix):
    wpstat = os.stat(prefix)
    serverlock = f"/tmp/.wine-{os.getuid()}/server-{wpstat.st_dev}-{wpstat.st_ino}/lock"
    return serverlock

def main():
    foundserver = None

    # check if my server is running
    if 'WINEPREFIX' not in os.environ:
        print("ERROR: variable WINEPREFIX not defined")
        return 3
    winepath = os.environ['WINEPREFIX']

    if not os.path.exists(winepath):
        return 0
    serverlock = wine_lock_file(winepath)

    if os.path.isfile(serverlock):
        f = os.open(serverlock, os.O_WRONLY)

        # type, whence, start, len, pid
        lockdata = struct.pack('hhlll', fcntl.F_WRLCK, 0, 0, 0, 0)
        rv = fcntl.fcntl(f, fcntl.F_GETLK, lockdata)
        rvs = struct.unpack('hhlll', rv[:32])

        if rvs[0] != fcntl.F_UNLCK:
            foundserver = rvs[4]
        
    if foundserver is None:
        return
    
    serverenv = read_env(str(foundserver))
    if 'DISPLAY' not in serverenv:
        raise Exception("Server has no DISPLAY set")
    if 'DISPLAY' not in os.environ:
        raise Exception("No DISPLAY is set")

    if serverenv['DISPLAY'] == os.environ['DISPLAY']:
        # we're probably ok, though it's technically possible to
        #   destroy and then create a new display and end up with the
        #   same number
        return

    print("\nWARNING: found incompatible displays:")
    print(f"\tserver has:\tDISPLAY={serverenv['DISPLAY']}")
    print(f"\tlocal is:\tDISPLAY={os.environ['DISPLAY']}")
    print()

    upl = get_user_proc_list()

    found_wine_procs = []
    for p in upl:
        try:
            parg = read_args(p)

            try:
                bin_path = os.readlink(os.path.join('/proc/', p, 'exe'))
            except:
                bin_path = None
                continue

            binbasename = os.path.basename(bin_path)
            if re.match(r"^wine\d*-preloader$", binbasename):
                if not re.search(r"\\(services|winedevice|plugplay|explorer)\.exe", parg[0]):
                    found_wine_procs.append((p, parg))
        except:
            pass
    if not found_wine_procs:
        print("INFO: wineserver is running but no processes found.")
        print(" attempting orderly shutdown")
        p = subprocess.Popen("$TANNER_PATH/wine/bin/wineboot -e", shell=True)
        p.wait()
        
    
    print("Running programs:")
    all_procs_safe_to_kill = True
    for (p, parg) in found_wine_procs:
        base = parg[0]
        idx = base.rfind('\\')
        if idx > 0:
            base = base[idx + 1:]
        idx = base.rfind('/')
        if idx > 0:
            base = base[idx + 1:]
        if base not in ('tnotify.exe', 'oaFSLockD.exe'):
            all_procs_safe_to_kill = False
            print('   ', base)
        else:
            print('   ', base, '(ignored)')
    print()
    if not all_procs_safe_to_kill:
        print("ERROR: found process(es) running in another window session.  Please close these before starting a new session.")
        return 1

    print("Killing safe processes")
    for (p, parg) in found_wine_procs:
        try:
            os.kill(int(p, 10), signal.SIGTERM)
        except:
            pass

    print("Waiting for wineserver to exit:")
    start_wait = time.time()
    while True:
        # type, whence, start, len, pid
        lockdata = struct.pack('hhlll', fcntl.F_WRLCK, 0, 0, 0, 0)
        rv = fcntl.fcntl(f, fcntl.F_GETLK, lockdata)
        rvs = struct.unpack('hhlll', rv[:32])

        if rvs[0] != fcntl.F_UNLCK:
            sys.stdout.write('.')
            sys.stdout.flush()
            time.sleep(0.25)
            if time.time() > (start_wait + 20):
                print("\nERROR: timed out waiting for wineserver to exit")
                return 2
        else:
            sys.stdout.write('\n')
            sys.stdout.flush()
            break
    print("Success")

if __name__ == "__main__":
    rv = None
    try:
        rv = main()
    except:
        traceback.print_exc()
    if rv is not None:
        sys.exit(rv)

