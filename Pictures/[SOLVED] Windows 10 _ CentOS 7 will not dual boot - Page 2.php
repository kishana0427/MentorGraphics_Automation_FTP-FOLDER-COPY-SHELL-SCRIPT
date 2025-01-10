<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta name="keywords" content="Windows,10,CentOS,7,will,not,dual,boot,[SOLVED] Windows 10 / CentOS 7 will not dual boot, Linux,how to,tutorial,operating system,linux,red hat,mandrake,security,linux help,installation,question,forum" />
<meta name="description" content="Originally Posted by walterbyrd Maybe I would do better with something more recent? Rocky Linux, Oracle Linux, Fedora, or Stream CentOS? No, you need" />

<style type="text/css" id="vbulletin_css">
/**
* vBulletin 3.8.10 Beta 1 CSS
* Style: 'LQ Style - child of default'; Style ID: 7
*/
body
{
	background: #FFFFFF;
	color: #000000;
	font: 10pt Verdana,Arial,Helvetica,sans-serif;
	margin: 5px 10px 10px 10px;
	padding: 0px;
}
a:link, body_alink
{
	color: #22229C;
}
a:visited, body_avisited
{
	color: #22229C;
}
a:hover, a:active, body_ahover
{
	color: #FF3300;
}
.page
{
	background: #FFFFFF;
	color: #000000;
	border:0px
}
.tborder
{
	background: #FFFFFF;
	color: #000000;
	border: 1px solid #0B198C;
}
.tcat
{
	background: #354F81 url(https://www.linuxquestions.org/questions/images/gradients/gradient_tcat.gif) repeat-x top left;
	color: #FFFFFF;
	font-weight: bold;
}
.tcat a:link, .tcat_alink
{
	color: #ffffff;
	text-decoration: none;
}
.tcat a:visited, .tcat_avisited
{
	color: #ffffff;
	text-decoration: none;
}
.tcat a:hover, .tcat a:active, .tcat_ahover
{
	color: #FFFF66;
	text-decoration: underline;
}
.thead
{
	background: #354F81 url(https://www.linuxquestions.org/questions/images/gradients/gradient_thead.gif) repeat-x top left;
	color: #FFFFFF;
	font-size: 11px;
	font-weight: bold;
}
.thead a:link, .thead_alink
{
	color: #FFFFFF;
}
.thead a:visited, .thead_avisited
{
	color: #FFFFFF;
}
.thead a:hover, .thead a:active, .thead_ahover
{
	color: #FFFF00;
}
.tfoot
{
	background: #3E5C92;
	color: #E0E0F6;
}
.tfoot a:link, .tfoot_alink
{
	color: #E0E0F6;
}
.tfoot a:visited, .tfoot_avisited
{
	color: #E0E0F6;
}
.tfoot a:hover, .tfoot a:active, .tfoot_ahover
{
	color: #FFFF66;
}
.alt1, .alt1Active
{
	background: #E6E6E6;
	color: #000000;
	font-size: 10pt;
	padding:3px;
}
.alt2, .alt2Active
{
	background: #CFD9FF;
	color: #000000;
	font-size: 10pt;
	padding:3px;
}
.inlinemod
{
	background: #FFFFCC;
	color: #000000;
}
.wysiwyg
{
	background: #F5F5FF;
	color: #000000;
	font-size: 10pt;
}
textarea, .bginput
{
	font-size: 10pt;
}
.bginput option, .bginput optgroup
{
	font-size: 10pt;
}
.button
{
	font-size: 11px;
}
select
{
	font-size: 11px;
}
option, optgroup
{
	font-size: 11px;
}
.smallfont
{
	font-size: 11px;
}
.time
{
	color: #666686;
}
.navbar
{
	font-size: 11px;
}
.highlight
{
	color: #FF0000;
	font-weight: bold;
}
.fjsel
{
	background: #3E5C92;
	color: #E0E0F6;
}
.fjdpth0
{
	background: #F7F7F7;
	color: #000000;
}
.panel
{
	background: #E6E6E6;
	color: #000000;
	border: 2px outset;
}
.panelsurround
{
	background: #D5D8E5;
	color: #000000;
}
legend
{
	color: #22229C;
	font-size: 11px;
}
.vbmenu_control
{
	background: #354F81 url(https://www.linuxquestions.org/questions/images/gradients/gradient_tcat.gif) repeat-x top left;
	color: #FFFFFF;
	font-size: 11px;
	font-weight: bold;
	padding: 3px 6px 3px 6px;
	white-space: nowrap;
}
.vbmenu_control a:link, .vbmenu_control_alink
{
	color: #FFFFFF;
	text-decoration: none;
}
.vbmenu_control a:visited, .vbmenu_control_avisited
{
	color: #FFFFFF;
	text-decoration: none;
}
.vbmenu_control a:hover, .vbmenu_control a:active, .vbmenu_control_ahover
{
	color: #FFFFFF;
	text-decoration: underline;
}
.vbmenu_popup
{
	background: #FFFFFF;
	color: #000000;
	border: 1px solid #0B198C;
}
.vbmenu_option
{
	background: #BBC7CE;
	color: #000000;
	font-size: 11px;
	white-space: nowrap;
	cursor: pointer;
}
.vbmenu_option a:link, .vbmenu_option_alink
{
	color: #22229C;
	text-decoration: none;
}
.vbmenu_option a:visited, .vbmenu_option_avisited
{
	color: #22229C;
	text-decoration: none;
}
.vbmenu_option a:hover, .vbmenu_option a:active, .vbmenu_option_ahover
{
	color: #FFFFFF;
	text-decoration: none;
}
.vbmenu_hilite
{
	background: #8A949E;
	color: #FFFFFF;
	font-size: 11px;
	white-space: nowrap;
	cursor: pointer;
}
.vbmenu_hilite a:link, .vbmenu_hilite_alink
{
	color: #FFFFFF;
	text-decoration: none;
}
.vbmenu_hilite a:visited, .vbmenu_hilite_avisited
{
	color: #FFFFFF;
	text-decoration: none;
}
.vbmenu_hilite a:hover, .vbmenu_hilite a:active, .vbmenu_hilite_ahover
{
	color: #FFFFFF;
	text-decoration: none;
}
/* ***** styling for 'big' usernames on postbit etc. ***** */
.bigusername { font-size: 12pt; }

/* ***** small padding on 'thead' elements ***** */
td.thead, div.thead { padding: 4px; }

/* ***** basic styles for multi-page nav elements */
.pagenav a { text-decoration: none; }
.pagenav td { padding: 2px 4px 2px 4px; }

/* ***** define margin and font-size for elements inside panels ***** */
.fieldset { margin-bottom: 6px; }
.fieldset, .fieldset td, .fieldset p, .fieldset li { font-size: 11px; }

/* ***** don't change the following ***** */
form { display: inline; }
label { cursor: default; }
.normal { font-weight: normal; }
.inlineimg { vertical-align: middle; }
ul.lqrightmenu a{text-decoration:none;font-size:10pt}
ul.lqrightmenu{padding-left:10px;margin-left:10px;font-size:4pt}
div.lqitemlabel{font-size:12pt;font-weight:bold}
.lqvsmallfont{font-size:8pt}
.alt1 .bbcodeblock{background-color:#CFD9FF}
.alt2 .bbcodeblock{background-color:#E6E6E6}

td.lqtags{font-size:8pt}
</style>
<link rel="stylesheet" type="text/css" href="//www.linuxquestions.org/questions/clientscript/vbulletin_important.css?v=3810b1" />

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/yui/2.9.0/yahoo-dom-event/yahoo-dom-event.js?v=3810b1"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/yui/2.9.0/connection/connection-min.js?v=3810b1"></script>
<script type="text/javascript">
<!--
var SESSIONURL = "";
var SECURITYTOKEN = "guest";
var IMGDIR_MISC = "https://www.linuxquestions.org/questions/images/misc";
var vb_disable_ajax = parseInt("0", 10);
// -->
</script>
<script type="text/javascript" src="https://www.linuxquestions.org/questions/clientscript/vbulletin_global.js?v=3810b1"></script>
<script type="text/javascript" src="https://www.linuxquestions.org/questions/clientscript/vbulletin_menu.js?v=3810b1"></script>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="alternate" type="application/rss+xml" title="LQ Latest Threads" href="/syndicate/lqlatest.xml" />
<link rel="alternate" type="application/rss+xml" title="LQ News and Articles" href="/syndicate/lqnews.rss" />
<link rel="alternate" type="application/rss+xml" title="LQ Zero Reply Threads" href="/syndicate/lqnoreplies.xml" />
<link rel="search" type="application/opensearchdescription+xml" title="LinuxQuestions.org" href="https://www.linuxquestions.org/lq-osd.xml" />
<script type="text/javascript" src="//rev.linuxquestions.org/www/delivery/spcjs.php?id=2"></script>
<script data-ad-client="ca-pub-4420048478783872" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
 (function(h,o,u,n,d) {
   h=h[d]=h[d]||{q:[],onReady:function(c){h.q.push(c)}}
   d=o.createElement(u);d.async=1;d.src=n
   n=o.getElementsByTagName(u)[0];n.parentNode.insertBefore(d,n)
})(window,document,'script','https://www.datadoghq-browser-agent.com/datadog-rum.js','DD_RUM')
  DD_RUM.onReady(function() {
    DD_RUM.init({
      clientToken: 'pubdfe3d3f97883d30bebd7d86fb4401f1d',
      applicationId: '86c29c7b-d36b-44bb-a819-211494f32b57',
      site: 'datadoghq.com',
      service: 'LQ',
      sampleRate: 100,
      trackInteractions: true,
    })
  })
</script>

<meta property="og:image" content="http://images.linuxquestions.org/lqthumb.png" />
<meta property="og:title" content="Windows 10 / CentOS 7 will not dual boot" />


<title>[SOLVED] Windows 10 / CentOS 7 will not dual boot - Page 2</title>
<style type="text/css" id="vbulletin_showthread_css">
	<!--
	
	#links div { white-space: nowrap; }
	#links img { vertical-align: middle; }
	-->
	</style>
<script type="text/javascript"><!--
window.google_analytics_uacct = 'UA-71419-4'; var _gaq = _gaq || []; _gaq.push(['_setAccount', 'UA-71419-4'], ['_trackPageview'], ['_trackPageLoadTime']); (function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();
//--></script>
</head>
<body onload="if (document.body.scrollIntoView &amp;&amp; (window.location.href.indexOf('#') == -1 || window.location.href.indexOf('#post') &gt; -1)) { fetch_object('currentPost').scrollIntoView(true); }">
<div id="header"></div>

<a name="top"></a>
<table border="0" width="100%" cellpadding="0" cellspacing="0" align="center">
<tr>
<td align="left"><a href="/questions/"><img src="https://www.linuxquestions.org/questions/images/LinuxQuestions.png" border="0" alt="LinuxQuestions.org" /></a></td>
<td align="right">
<div align="right">Welcome to the most active <strong><a href="https://www.linuxquestions.org/questions/">Linux Forum</a></strong> on the web.</div>
</td>
</tr>
</table>




<div align="center">
<div class="page" style="width:100%; text-align:left">
<div style="padding:0px 0px 0px 0px" align="left">
<div class="vbmenu_popup" id="vbbloglinks_menu" style="display:none;margin-top:3px" align="left">
<table cellpadding="4" cellspacing="1" border="0">
<tr>
<td class="thead"><a href="blog/">Blogs</a></td>
</tr>
<tr>
<td class="vbmenu_option"><a href="blog/recent-entries/">Recent Entries</a></td>
</tr>
<tr>
<td class="vbmenu_option"><a href="blog/best-entries/">Best Entries</a></td>
</tr>
<tr>
<td class="vbmenu_option"><a href="blog/best-blogs/">Best Blogs</a></td>
</tr>
<tr>
<td class="vbmenu_option"><a href="blog/all/">Blog List</a></td>
</tr>
<tr>
<td class="vbmenu_option"><a rel="nofollow" href="blog_search.php?do=search">Search Blogs</a></td>
</tr>
</table>
</div>
<script type="text/javascript">
<!--
function log_out()
{
    ht = document.getElementsByTagName("html");
    ht[0].style.filter = "progid:DXImageTransform.Microsoft.BasicImage(grayscale=1)";
    if (confirm('Are you sure you want to log out?'))
    {
        return true;
    }
    else
    {
        ht[0].style.filter = "";
        return false;
    }
}
//-->
</script>
<div style="text-align:center;margin-bottom:15px" align="center">
<script type="text/javascript"><!--// <![CDATA[
    OA_show(7);
// ]]> --></script><noscript><a target='_blank' href='https://rev.linuxquestions.org/www/delivery/ck.php?n=b1fb49f'><img border='0' alt='' src='https://rev.linuxquestions.org/www/delivery/avw.php?zoneid=7&amp;n=b1fb49f' /></a></noscript></div>
<div id="995afa2479" class="pagefair-acceptable"></div>

<table cellpadding="0" cellspacing="0" border="0" width="100%" align="center">
<tr>
<td class="page" valign="top">


<div align="center">
<table class="tborder" cellpadding="3" cellspacing="0" border="0" width="100%" align="center" style="border-top-width:0px">
<tr align="center">
<td class="vbmenu_control"><a href="/" accesskey="1">Home</a></td>
<td class="vbmenu_control"><a href="/questions/">Forums</a></td>

<td class="vbmenu_control"><a href="/linux/answers/">Tutorials</a></td>
<td class="vbmenu_control"><a href="/linux/articles/">Articles</a></td>
<td class="vbmenu_control"><a href="register.php" rel="nofollow">Register</a></td>
<td id="navbar_search" class="vbmenu_control"><a href="/questions/search.php" accesskey="4" rel="nofollow">Search</a> <script type="text/javascript"> vbmenu_register("navbar_search"); </script></td>
</tr>
</table>
</div>



<div class="vbmenu_popup" id="navbar_search_menu" style="display:none">
<table cellpadding="4" cellspacing="1" border="0">
<tr>
<td class="thead">Search Forums</td>
</tr>
<tr>
<td class="vbmenu_option" title="nohilite">
<form action="/questions/search.php" method="post">
<input type="hidden" name="do" value="process" />
<input type="hidden" name="showposts" value="1" />
<input type="hidden" name="quicksearch" value="1" />
<input type="hidden" name="s" value />
<input type="hidden" name="searchdate" value="560" />
<input type="hidden" name="beforeafter" value="after" />
<input type="hidden" name="securitytoken" value="guest" />
<input type="text" class="bginput" name="query" size="20" /><input type="submit" class="button" value="Go" /><br/>
</form>
</td>
</tr>
<tr>
<td class="vbmenu_option"><a href="/questions/search.php" accesskey="4" rel="nofollow">Advanced Search</a></td>
</tr>
<tr>
<td class="thead">Search Tags</td>
</tr>
<tr>
<td class="vbmenu_option" title="nohilite"><form action="/questions/search.php" method="post"><input type="text" class="bginput" name="tag" size="20" /><input type="hidden" name="do" value="process" /><input type="hidden" name="posttags" value="1" /><input type="hidden" name="s" value />
<input type="hidden" name="securitytoken" value="guest" /><input type="submit" class="button" value="Go" /><br/></form>
</td>
</tr>
<tr>
<td class="thead">Search LQ Wiki</td>
</tr>

<tr>
<td class="thead">Search Tutorials/Articles</td>
</tr>
<tr>
<td class="vbmenu_option" title="nohilite">
<form action="/linux/search/node" method="post">
<input name="op" value="Search" type="hidden">
<input class="bginput" name="edit[keys]" size="20" type="text"><input type="submit" class="button" value="Go" /><br/>
</form>
</td>
</tr>
<tr>
<td class="thead">Search Reviews</td>
</tr>
<tr>
<td class="vbmenu_option" title="nohilite">
<form method="get" action="/reviews/showcat.php">
<input name="cat" value="all" type="hidden">
<input name="stype" value="1" type="hidden">
<input name="si" size="20" class="bginput" type="text"><input type="submit" class="button" value="Go" /><br/>
</form>
</td>
</tr>
<tr>
<td class="thead">Search ISOs</td>
</tr>

</table>
</div>



<div class="vbmenu_popup" id="pagenav_menu" style="display:none">
<table cellpadding="4" cellspacing="1" border="0">
<tr>
<td class="thead" nowrap="nowrap">Go to Page...</td>
</tr>
<tr>
<td class="vbmenu_option" title="nohilite">
<form action="/questions/" method="get" onsubmit="return this.gotopage()" id="pagenav_form">
<input type="text" class="bginput" id="pagenav_itxt" style="font-size:11px" size="4" />
<input type="button" class="button" id="pagenav_ibtn" value="Go" />
</form>
</td>
</tr>
</table>
</div>


<table class="tborder" cellpadding="3" cellspacing="1" border="0" width="100%" align="center" style="border-top:0px">
<tr>
<td class="alt1" width="100%">
<table cellpadding="0" cellspacing="0" border="0">
<tr valign="bottom">
<td><a href="#" onclick="history.back(1); return false;"><img src="https://www.linuxquestions.org/questions/images/misc/navbits_start.gif" alt="Go Back" border="0" /></a></td>
<td>&nbsp;</td>
<td width="100%"><span class="navbar"><a href="/" accesskey="1">LinuxQuestions.org</a></span>
<span class="navbar">&gt; <a href="/questions/" accesskey="1">Forums</a></span>
<span class="navbar">&gt; <a href="linux-forums-50/">Linux Forums</a></span>
<span class="navbar">&gt; <a href="linux-distributions-5/">Linux - Distributions</a></span>
<span class="navbar">&gt; <a href="centos-111/">CentOS</a></span>
</td>
</tr>
<tr>
<td class="navbar" style="font-size:10pt; padding-top:1px" colspan="3"><a href="centos-111/windows-10-centos-7-will-not-dual-boot-4175707964/page2.html#post6331391"><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/misc/navbits_finallink.gif" alt="Reload this Page" border="0" /></a> <strong>
[SOLVED] Windows 10 / CentOS 7 will not dual boot
</strong></td>
</tr>
</table>
</td>
<td class="alt2" nowrap="nowrap" style="padding:0px">

<form action="https://www.linuxquestions.org/questions/login.php" method="post" onsubmit="md5hash(vb_login_password, vb_login_md5password, vb_login_md5password_utf, 0)">
<script type="text/javascript" src="/questions/clientscript/vbulletin_md5.js?v=3810b1"></script>
<table cellpadding="0" cellspacing="3" border="0">
<tr>
<td class="smallfont">User Name</td>
<td><input type="text" class="bginput" style="font-size: 11px" name="vb_login_username" id="navbar_username" size="10" accesskey="u" tabindex="101" value="User Name" onfocus="if (this.value == 'User Name') this.value = '';" /></td>
<td class="smallfont" colspan="2" nowrap="nowrap"><label for="cb_cookieuser_navbar"><input type="checkbox" name="cookieuser" value="1" tabindex="103" id="cb_cookieuser_navbar" accesskey="c" checked="checked" />Remember Me?</label></td>
</tr>
<tr>
<td class="smallfont">Password</td>
<td><input type="password" class="bginput" style="font-size: 11px" name="vb_login_password" size="10" accesskey="p" tabindex="102" /></td>
<td><input type="submit" class="button" value="Log in" tabindex="104" title="Enter your username and password in the boxes provided to login, or click the 'register' button to create a profile for yourself." accesskey="s" /></td>
</tr>
</table>
<input type="hidden" name="s" value />
<input type="hidden" name="securitytoken" value="guest" />
<input type="hidden" name="do" value="login" />
<input type="hidden" name="vb_login_md5password" />
<input type="hidden" name="vb_login_md5password_utf" />
</form>

</td>
</tr>
</table>

<table class="tborder" cellpadding="3" cellspacing="1" border="0" width="100%" align="center" style="border-top:0px">
<tr>
<td class="alt1" width="100%"><strong>CentOS</strong> <span class="smallfont">This forum is for the discussion of CentOS Linux. Note: This forum does not have any official participation.</span></td>
</tr>
</table>
<br/>
<table class="tborder" cellpadding="3" cellspacing="1" border="0" width="100%" align="center">
<tr>
<td class="thead">Notices</td>
</tr>
<tr>
<td class="alt1"><div class="navbar_notice" id="navbar_notice_1">
Welcome to <strong>LinuxQuestions.org</strong>, a friendly and active Linux Community. <br/><br/>
You are currently viewing LQ as a guest. By joining our community you will have the ability to post topics, receive our newsletter, use the advanced search, subscribe to threads and access many other special features. Registration is quick, simple and absolutely free. <a href="/questions/register.php"><strong>Join our community</strong></a> today!<br/><br/>
<strong>Note that registered members see fewer ads, and ContentLink is completely disabled once you log in.</strong><br/><br/>
Are you new to LinuxQuestions.org? Visit the following links:<br/>
<a href="/linux/answers/LinuxQuestions_org/How_to_Use_LinuxQuestions_org">Site Howto</a> |
<a href="/questions/faq.php">Site FAQ</a> |
<a href="/linux/sitemap.html">Sitemap</a> |
<a href="/questions/register.php">Register Now</a>
<br/><br/>If you have any problems with the registration process or your account login, please <a href="/questions/sendmessage.php">contact us</a>. If you need to reset your password, <a rel="nofollow" href="/questions/login.php?do=lostpw">click here</a>.<br/><br/>
<strong>Having a problem logging in? Please visit <a href="/removecookies.php">this page</a> to clear all LQ-related cookies.</strong>
</div><div class="navbar_notice" id="navbar_notice_18">
<br/>

Get a <a href="https://www.shells.com/l/en-US/linux-questions-org-exclusive?_a=RCzIFy" rel="nofollow" target="_blank">virtual cloud desktop</a> with the Linux distro that you want in less than five minutes with Shells! With over 10 pre-installed distros to choose from, the worry-free installation life is here! Whether you are a digital nomad or just looking for flexibility, Shells can put your Linux machine on the device that you want to use.
<br/></br />
Exclusive for LQ members, get up to 45% off per month. <a href="https://www.shells.com/l/en-US/linux-questions-org-exclusive?_a=RCzIFy" rel="nofollow">Click here</a> for more info.
<br/></br />
</div> <div style="text-align: center; width: 100%"> <br/>
<ins data-revive-zoneid="5" data-revive-id="76817acf98579866f1f153c2e69a73a9"></ins>
<script async src="//rev.linuxquestions.org/www/delivery/asyncjs.php"></script></div></td>
</tr>
</table>
<br/>

<div class="KonaBody">
<a name="poststop" id="poststop"></a>

<table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin-bottom:3px">
<tr valign="bottom">
<td class="smallfont"><a href="newreply.php?do=newreply&amp;noquote=1&amp;p=6329879" rel="nofollow"><img src="https://www.linuxquestions.org/questions/images/buttons/reply.gif" alt="Reply" border="0" /></a></td>
<td align="right"><div class="pagenav" align="right">
<table class="tborder" cellpadding="3" cellspacing="1" border="0">
<tr>
<td class="vbmenu_control" style="font-weight:normal">Page 2 of 2</td>
<td class="alt1"><a rel="prev" class="smallfont" href="centos-111/windows-10-centos-7-will-not-dual-boot-4175707964/" title="Prev Page - Results 1 to 15 of 26">&lt;</a></td>
<td class="alt1"><a class="smallfont" href="centos-111/windows-10-centos-7-will-not-dual-boot-4175707964/" title="Show results 1 to 15 of 26">1</a></td> <td class="alt2"><span class="smallfont" title="Showing results 16 to 26 of 26"><strong>2</strong></span></td>
<td class="vbmenu_control" title="showthread.php?t=4175707964"><a name="PageNav"></a></td>
</tr>
</table>
</div></td>
</tr>
</table>


<table class="tborder" cellpadding="3" cellspacing="1" border="0" width="100%" align="center" style="border-bottom-width:0px">
<tr>
<td class="tcat" width="100%">
&nbsp;
</div>
</td>
<td class="vbmenu_control" id="threadsearch" nowrap="nowrap">
<a rel="nofollow" href="centos-111/windows-10-centos-7-will-not-dual-boot-4175707964/page2.html?nojs=1#goto_threadsearch">Search this Thread</a>
<script type="text/javascript"> vbmenu_register("threadsearch"); </script>
</td>
</tr>
</table>

<div id="posts">

<div align="center">
<div class="page" style="width:100%; text-align:left">
<div style="padding:0px 0px 0px 0px" align="left">
<div id="edit6329879" style="padding:0px 0px 3px 0px">

<table id="post6329879" class="tborder" cellpadding="3" cellspacing="0" border="0" width="100%" align="center">
<tr>
<td class="thead" style="font-weight:normal; border: 1px solid #FFFFFF; border-right: 0px">

<a name="post6329879"><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/statusicon/post_old.gif" alt="Old" border="0" /></a>
02-15-2022, 12:29 PM

</td>
<td class="thead" style="font-weight:normal; border: 1px solid #FFFFFF; border-left: 0px" align="right">
&nbsp;
#<a href="centos-111/windows-10-centos-7-will-not-dual-boot-4175707964/page2.html#post6329879" rel="nofollow" id="postcount6329879" name="16"><strong>16</strong></a>
</td>
</tr>
<tr valign="top">
<td class="alt1" width="175" style="border: 1px solid #FFFFFF; border-top: 0px; border-bottom: 0px">
<div id="postmenu_6329879">
<div class="bigusername">
<!-- google_ad_section_start(weight=ignore) -->pan64<!-- google_ad_section_end --></div>
</div>
<div class="smallfont">LQ Addict</div>
<div class="smallfont">
&nbsp;<br/>
<div>Registered: Mar 2012</div>
<div>Location: Hungary</div>
<div>Distribution: debian/ubuntu/suse ...</div>
<div>
Posts: 22,267
</div>
<br/><div><span id="repdisplay_6329879_642915">Rep: <img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_pos.gif" alt="Reputation: 7420" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_pos.gif" alt="Reputation: 7420" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_pos.gif" alt="Reputation: 7420" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_pos.gif" alt="Reputation: 7420" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_pos.gif" alt="Reputation: 7420" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 7420" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 7420" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 7420" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 7420" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 7420" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 7420" border="0" /> </span></div>
<div> </div>
</div>
</td>
<td class="alt1" id="td_post_6329879" style="border-right: 1px solid #FFFFFF">

<div style="float: right; margin-left: 5px; margin-bottom: 5px; margin-top: -3px; margin-right: -3px">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<ins class="adsbygoogle" style="display:inline-block;width:336px;height:280px" data-ad-client="ca-pub-4420048478783872" data-ad-slot="7020975802"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<br/>
<script language="javascript" type="text/javascript">
document.write('[<a href="https://www.linuxquestions.org/questions/lqlogin.php">Log in</a> to <strong>get rid</strong> of this advertisement]');
</script>
</div>
<div id="post_message_6329879"><!-- google_ad_section_start --><div style="margin:20px; margin-top:5px; ">
<div class="smallfont" style="margin-bottom:2px">Quote:</div>
<table cellpadding="3" cellspacing="0" border="0" width="100%">
<tr>
<td class="bbcodeblock" style="border:1px inset">
<div>
Originally Posted by <strong>walterbyrd</strong>
<a href="centos-111/windows-10-centos-7-will-not-dual-boot-4175707964-post6329860/#post6329860" rel="nofollow"><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/buttons/viewpost.gif" border="0" alt="View Post" /></a>
</div>
<div style="font-style:italic">Maybe I would do better with something more recent? Rocky Linux, Oracle Linux, Fedora, or Stream CentOS?</div>
</td>
</tr>
</table>
</div>No, you need to fix that grub error. I think it is just a typo:<br/>
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="bbcodeblock" dir="ltr" style="
		margin: 0px;
		margin-right: -99999px;
		padding: 3px;
		border: 1px inset;
		width: 98%;
		height: 66px;
		text-align: left;
		overflow: auto">grub2-mkconfig -o / boot/grub2/grub.cfg
                   ^ no space here, should be
grub2-mkconfig -o /boot/grub2/grub.cfg</pre>
</div><!-- google_ad_section_end --></div>

</td>
</tr>
<tr>
<td class="alt1" style="border: 1px solid #FFFFFF; border-top: 0px">
&nbsp;
</td>
<td class="alt1" align="right" style="border: 1px solid #FFFFFF; border-left: 0px; border-top: 0px">

<div id="helpfulanswers_box_6329879">
1 members found this post helpful.
</div>

</td>
</tr>
</table>
<div align="center"> </div>

<div class="vbmenu_popup" id="postmenu_6329879_menu" style="display:none">
<table cellpadding="4" cellspacing="1" border="0">
<tr>
<td class="thead">pan64</td>
</tr>
<tr><td class="vbmenu_option"><a rel="nofollow" href="user/pan64-642915/">View Public Profile</a></td></tr>
<tr><td class="vbmenu_option"><a href="/questions/blog/pan64-642915/">View LQ Blog</a></td></tr>
<tr><td class="vbmenu_option"><a rel="nofollow" href="/reviews/showcat.php?cat=myprod&amp;ppuser=642915">View Review Entries</a></td></tr>
<tr><td class="vbmenu_option"><a href="/questions/search.php?do=finduser&amp;u=642915" rel="nofollow">Find More Posts by pan64</a></td></tr>
</table>
</div>

</div>
</div>
</div>
</div>



<div align="center">
<div class="page" style="width:100%; text-align:left">
<div style="padding:0px 0px 0px 0px" align="left">
<div id="edit6329881" style="padding:0px 0px 3px 0px">

<table id="post6329881" class="tborder" cellpadding="3" cellspacing="0" border="0" width="100%" align="center">
<tr>
<td class="thead" style="font-weight:normal; border: 1px solid #FFFFFF; border-right: 0px">

<a name="post6329881"><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/statusicon/post_old.gif" alt="Old" border="0" /></a>
02-15-2022, 12:38 PM

</td>
<td class="thead" style="font-weight:normal; border: 1px solid #FFFFFF; border-left: 0px" align="right">
&nbsp;
#<a href="centos-111/windows-10-centos-7-will-not-dual-boot-4175707964/page2.html#post6329881" rel="nofollow" id="postcount6329881" name="17"><strong>17</strong></a>
</td>
</tr>
<tr valign="top">
<td class="alt2" width="175" style="border: 1px solid #FFFFFF; border-top: 0px; border-bottom: 0px">
<div id="postmenu_6329881">
<div class="bigusername">
<!-- google_ad_section_start(weight=ignore) -->colorpurple21859<!-- google_ad_section_end --></div>
</div>
<div class="smallfont">LQ Veteran</div>
<div class="smallfont">
&nbsp;<br/>
<div>Registered: Jan 2008</div>
<div>Location: florida panhandle</div>
<div>Distribution: Slackware Debian, Fedora, others</div>
<div>
Posts: 7,480
</div>
<br/><div><span id="repdisplay_6329881_385635">Rep: <img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_pos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_pos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_pos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_pos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_pos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 1620" border="0" /> </span></div>
<div> </div>
</div>
</td>
<td class="alt2" id="td_post_6329881" style="border-right: 1px solid #FFFFFF">

<div id="post_message_6329881"><!-- google_ad_section_start -->I fixed the typo, sorry about that.<!-- google_ad_section_end --></div>

</td>
</tr>
<tr>
<td class="alt2" style="border: 1px solid #FFFFFF; border-top: 0px">
&nbsp;
</td>
<td class="alt2" align="right" style="border: 1px solid #FFFFFF; border-left: 0px; border-top: 0px">

<div id="helpfulanswers_box_6329881">
</div>

</td>
</tr>
</table>

<div class="vbmenu_popup" id="postmenu_6329881_menu" style="display:none">
<table cellpadding="4" cellspacing="1" border="0">
<tr>
<td class="thead">colorpurple21859</td>
</tr>
<tr><td class="vbmenu_option"><a rel="nofollow" href="user/colorpurple21859-385635/">View Public Profile</a></td></tr>
<tr><td class="vbmenu_option"><a href="/questions/blog/colorpurple21859-385635/">View LQ Blog</a></td></tr>
<tr><td class="vbmenu_option"><a rel="nofollow" href="/reviews/showcat.php?cat=myprod&amp;ppuser=385635">View Review Entries</a></td></tr>
<tr><td class="vbmenu_option"><a href="/questions/search.php?do=finduser&amp;u=385635" rel="nofollow">Find More Posts by colorpurple21859</a></td></tr>
</table>
</div>

</div>
</div>
</div>
</div>



<div align="center">
<div class="page" style="width:100%; text-align:left">
<div style="padding:0px 0px 0px 0px" align="left">
<div id="edit6329927" style="padding:0px 0px 3px 0px">

<table id="post6329927" class="tborder" cellpadding="3" cellspacing="0" border="0" width="100%" align="center">
<tr>
<td class="thead" style="font-weight:normal; border: 1px solid #FFFFFF; border-right: 0px">

<a name="post6329927"><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/statusicon/post_old.gif" alt="Old" border="0" /></a>
02-15-2022, 03:16 PM

</td>
<td class="thead" style="font-weight:normal; border: 1px solid #FFFFFF; border-left: 0px" align="right">
&nbsp;
#<a href="centos-111/windows-10-centos-7-will-not-dual-boot-4175707964/page2.html#post6329927" rel="nofollow" id="postcount6329927" name="18"><strong>18</strong></a>
</td>
</tr>
<tr valign="top">
<td class="alt1" width="175" style="border: 1px solid #FFFFFF; border-top: 0px; border-bottom: 0px">
<div id="postmenu_6329927">
<div class="bigusername">
<!-- google_ad_section_start(weight=ignore) -->walterbyrd<!-- google_ad_section_end --></div>
</div>
<div class="smallfont">Member</div>
<div class="smallfont">
&nbsp;<br/>
<div>Registered: Apr 2004</div>
<div>
Posts: 734
</div>

<br/><strong>Original Poster</strong>

<br/><div><span id="repdisplay_6329927_108115">Rep: <img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_pos.gif" alt="Reputation: 46" border="0" /> </span></div>
<div> </div>
</div>
</td>
<td class="alt1" id="td_post_6329927" style="border-right: 1px solid #FFFFFF">

<div id="post_message_6329927"><!-- google_ad_section_start --><div style="margin:20px; margin-top:5px; ">
<div class="smallfont" style="margin-bottom:2px">Quote:</div>
<table cellpadding="3" cellspacing="0" border="0" width="100%">
<tr>
<td class="bbcodeblock" style="border:1px inset">
<div>
Originally Posted by <strong>pan64</strong>
<a href="centos-111/windows-10-centos-7-will-not-dual-boot-4175707964/page2.html#post6329879" rel="nofollow"><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/buttons/viewpost.gif" border="0" alt="View Post" /></a>
</div>
<div style="font-style:italic">No, you need to fix that grub error. I think it is just a typo:<br/>
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="bbcodeblock" dir="ltr" style="
		margin: 0px;
		margin-right: -99999px;
		padding: 3px;
		border: 1px inset;
		width: 98%;
		height: 66px;
		text-align: left;
		overflow: auto">grub2-mkconfig -o / boot/grub2/grub.cfg
                   ^ no space here, should be
grub2-mkconfig -o /boot/grub2/grub.cfg</pre>
</div></div>
</td>
</tr>
</table>
</div><div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="bbcodeblock" dir="ltr" style="
		margin: 0px;
		margin-right: -99999px;
		padding: 3px;
		border: 1px inset;
		width: 98%;
		height: 162px;
		text-align: left;
		overflow: auto"># grub2-mkconfig -o /boot/grub2/grub.cfg
Generating grub configuration file ...
Found linux image: /boot/vmlinuz-3.10.0-1160.el7.x86_64
Found initrd image: /boot/initramfs-3.10.0-1160.el7.x86_64.img
Found linux image: /boot/vmlinuz-0-rescue-1495fd8baa4e4037ace10e1effc2d33a
Found initrd image: /boot/initramfs-0-rescue-1495fd8baa4e4037ace10e1effc2d33a.img
Found linux image: /boot/vmlinuz-0-rescue-f88f9bcae7074473912b27834c137add
Found initrd image: /boot/initramfs-0-rescue-f88f9bcae7074473912b27834c137add.img
done</pre>
</div>Did that. Then I did a full shutdown. Then restarted. Sadly, still will not dual boot.<!-- google_ad_section_end --></div>


<div class="smallfont">
<hr size="1" style="color:#FFFFFF" />
<em>
Last edited by walterbyrd; 02-15-2022 at <span class="time">03:27 PM</span>.
</em>
</div>

</td>
</tr>
<tr>
<td class="alt1" style="border: 1px solid #FFFFFF; border-top: 0px">
&nbsp;
</td>
<td class="alt1" align="right" style="border: 1px solid #FFFFFF; border-left: 0px; border-top: 0px">

<div id="helpfulanswers_box_6329927">
</div>

</td>
</tr>
</table>

<div class="vbmenu_popup" id="postmenu_6329927_menu" style="display:none">
<table cellpadding="4" cellspacing="1" border="0">
<tr>
<td class="thead">walterbyrd</td>
</tr>
<tr><td class="vbmenu_option"><a rel="nofollow" href="user/walterbyrd-108115/">View Public Profile</a></td></tr>
<tr><td class="vbmenu_option"><a href="/questions/blog/walterbyrd-108115/">View LQ Blog</a></td></tr>
<tr><td class="vbmenu_option"><a rel="nofollow" href="/reviews/showcat.php?cat=myprod&amp;ppuser=108115">View Review Entries</a></td></tr>
<tr><td class="vbmenu_option"><a href="/questions/search.php?do=finduser&amp;u=108115" rel="nofollow">Find More Posts by walterbyrd</a></td></tr>
</table>
</div>

</div>
</div>
</div>
</div>



<div align="center">
<div class="page" style="width:100%; text-align:left">
<div style="padding:0px 0px 0px 0px" align="left">
<div id="edit6329941" style="padding:0px 0px 3px 0px">

<table id="post6329941" class="tborder" cellpadding="3" cellspacing="0" border="0" width="100%" align="center">
<tr>
<td class="thead" style="font-weight:normal; border: 1px solid #FFFFFF; border-right: 0px">

<a name="post6329941"><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/statusicon/post_old.gif" alt="Old" border="0" /></a>
02-15-2022, 03:55 PM

</td>
<td class="thead" style="font-weight:normal; border: 1px solid #FFFFFF; border-left: 0px" align="right">
&nbsp;
#<a href="centos-111/windows-10-centos-7-will-not-dual-boot-4175707964/page2.html#post6329941" rel="nofollow" id="postcount6329941" name="19"><strong>19</strong></a>
</td>
</tr>
<tr valign="top">
<td class="alt2" width="175" style="border: 1px solid #FFFFFF; border-top: 0px; border-bottom: 0px">
<div id="postmenu_6329941">
<div class="bigusername">
<!-- google_ad_section_start(weight=ignore) -->colorpurple21859<!-- google_ad_section_end --></div>
</div>
<div class="smallfont">LQ Veteran</div>
<div class="smallfont">
&nbsp;<br/>
<div>Registered: Jan 2008</div>
<div>Location: florida panhandle</div>
<div>Distribution: Slackware Debian, Fedora, others</div>
<div>
Posts: 7,480
</div>
<br/><div><span id="repdisplay_6329941_385635">Rep: <img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_pos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_pos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_pos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_pos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_pos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 1620" border="0" /> </span></div>
<div> </div>
</div>
</td>
<td class="alt2" id="td_post_6329941" style="border-right: 1px solid #FFFFFF">

<div id="post_message_6329941"><!-- google_ad_section_start -->Did you add the osprober line to /etc/default/grub<!-- google_ad_section_end --></div>

</td>
</tr>
<tr>
<td class="alt2" style="border: 1px solid #FFFFFF; border-top: 0px">
&nbsp;
</td>
<td class="alt2" align="right" style="border: 1px solid #FFFFFF; border-left: 0px; border-top: 0px">

<div id="helpfulanswers_box_6329941">
</div>

</td>
</tr>
</table>

<div class="vbmenu_popup" id="postmenu_6329941_menu" style="display:none">
<table cellpadding="4" cellspacing="1" border="0">
<tr>
<td class="thead">colorpurple21859</td>
</tr>
<tr><td class="vbmenu_option"><a rel="nofollow" href="user/colorpurple21859-385635/">View Public Profile</a></td></tr>
<tr><td class="vbmenu_option"><a href="/questions/blog/colorpurple21859-385635/">View LQ Blog</a></td></tr>
<tr><td class="vbmenu_option"><a rel="nofollow" href="/reviews/showcat.php?cat=myprod&amp;ppuser=385635">View Review Entries</a></td></tr>
<tr><td class="vbmenu_option"><a href="/questions/search.php?do=finduser&amp;u=385635" rel="nofollow">Find More Posts by colorpurple21859</a></td></tr>
</table>
</div>

</div>
</div>
</div>
</div>



<div align="center">
<div class="page" style="width:100%; text-align:left">
<div style="padding:0px 0px 0px 0px" align="left">
<div id="edit6329948" style="padding:0px 0px 3px 0px">

<table id="post6329948" class="tborder" cellpadding="3" cellspacing="0" border="0" width="100%" align="center">
<tr>
<td class="thead" style="font-weight:normal; border: 1px solid #FFFFFF; border-right: 0px">

<a name="post6329948"><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/statusicon/post_old.gif" alt="Old" border="0" /></a>
02-15-2022, 04:26 PM

</td>
<td class="thead" style="font-weight:normal; border: 1px solid #FFFFFF; border-left: 0px" align="right">
&nbsp;
#<a href="centos-111/windows-10-centos-7-will-not-dual-boot-4175707964/page2.html#post6329948" rel="nofollow" id="postcount6329948" name="20"><strong>20</strong></a>
</td>
</tr>
<tr valign="top">
<td class="alt1" width="175" style="border: 1px solid #FFFFFF; border-top: 0px; border-bottom: 0px">
<div id="postmenu_6329948">
<div class="bigusername">
<!-- google_ad_section_start(weight=ignore) -->walterbyrd<!-- google_ad_section_end --></div>
</div>
<div class="smallfont">Member</div>
<div class="smallfont">
&nbsp;<br/>
<div>Registered: Apr 2004</div>
<div>
Posts: 734
</div>

<br/><strong>Original Poster</strong>

<br/><div><span id="repdisplay_6329948_108115">Rep: <img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_pos.gif" alt="Reputation: 46" border="0" /> </span></div>
<div> </div>
</div>
</td>
<td class="alt1" id="td_post_6329948" style="border-right: 1px solid #FFFFFF">

<div id="post_message_6329948"><!-- google_ad_section_start --><div style="margin:20px; margin-top:5px; ">
<div class="smallfont" style="margin-bottom:2px">Quote:</div>
<table cellpadding="3" cellspacing="0" border="0" width="100%">
<tr>
<td class="bbcodeblock" style="border:1px inset">
<div>
Originally Posted by <strong>colorpurple21859</strong>
<a href="centos-111/windows-10-centos-7-will-not-dual-boot-4175707964/page2.html#post6329941" rel="nofollow"><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/buttons/viewpost.gif" border="0" alt="View Post" /></a>
</div>
<div style="font-style:italic">Did you add the osprober line to /etc/default/grub</div>
</td>
</tr>
</table>
</div>Yes.<br/>
<br/>
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="bbcodeblock" dir="ltr" style="
		margin: 0px;
		margin-right: -99999px;
		padding: 3px;
		border: 1px inset;
		width: 98%;
		height: 146px;
		text-align: left;
		overflow: auto">GRUB_TIMEOUT=5
GRUB_DISTRIBUTOR=&quot;$(sed 's, release .*$,,g' /etc/system-release)&quot;
GRUB_DEFAULT=saved
GRUB_DISABLE_SUBMENU=true
GRUB_TERMINAL_OUTPUT=&quot;console&quot;
GRUB_CMDLINE_LINUX=&quot;crashkernel=auto rhgb quiet&quot;
GRUB_DISABLE_RECOVERY=&quot;true&quot;
GRUB_DISABLE_OS_PROBER=false</pre>
</div>Maybe I should re-install grub?<!-- google_ad_section_end --></div>

</td>
</tr>
<tr>
<td class="alt1" style="border: 1px solid #FFFFFF; border-top: 0px">
&nbsp;
</td>
<td class="alt1" align="right" style="border: 1px solid #FFFFFF; border-left: 0px; border-top: 0px">

<div id="helpfulanswers_box_6329948">
</div>

</td>
</tr>
</table>

<div class="vbmenu_popup" id="postmenu_6329948_menu" style="display:none">
<table cellpadding="4" cellspacing="1" border="0">
<tr>
<td class="thead">walterbyrd</td>
</tr>
<tr><td class="vbmenu_option"><a rel="nofollow" href="user/walterbyrd-108115/">View Public Profile</a></td></tr>
<tr><td class="vbmenu_option"><a href="/questions/blog/walterbyrd-108115/">View LQ Blog</a></td></tr>
<tr><td class="vbmenu_option"><a rel="nofollow" href="/reviews/showcat.php?cat=myprod&amp;ppuser=108115">View Review Entries</a></td></tr>
<tr><td class="vbmenu_option"><a href="/questions/search.php?do=finduser&amp;u=108115" rel="nofollow">Find More Posts by walterbyrd</a></td></tr>
</table>
</div>

</div>
</div>
</div>
</div>



<div align="center">
<div class="page" style="width:100%; text-align:left">
<div style="padding:0px 0px 0px 0px" align="left">
<div id="edit6330017" style="padding:0px 0px 3px 0px">

<table id="post6330017" class="tborder" cellpadding="3" cellspacing="0" border="0" width="100%" align="center">
<tr>
<td class="thead" style="font-weight:normal; border: 1px solid #FFFFFF; border-right: 0px">

<a name="post6330017"><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/statusicon/post_old.gif" alt="Old" border="0" /></a>
02-15-2022, 07:31 PM

</td>
<td class="thead" style="font-weight:normal; border: 1px solid #FFFFFF; border-left: 0px" align="right">
&nbsp;
#<a href="centos-111/windows-10-centos-7-will-not-dual-boot-4175707964/page2.html#post6330017" rel="nofollow" id="postcount6330017" name="21"><strong>21</strong></a>
</td>
</tr>
<tr valign="top">
<td class="alt2" width="175" style="border: 1px solid #FFFFFF; border-top: 0px; border-bottom: 0px">
<div id="postmenu_6330017">
<div class="bigusername">
<!-- google_ad_section_start(weight=ignore) -->colorpurple21859<!-- google_ad_section_end --></div>
</div>
<div class="smallfont">LQ Veteran</div>
<div class="smallfont">
&nbsp;<br/>
<div>Registered: Jan 2008</div>
<div>Location: florida panhandle</div>
<div>Distribution: Slackware Debian, Fedora, others</div>
<div>
Posts: 7,480
</div>
<br/><div><span id="repdisplay_6330017_385635">Rep: <img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_pos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_pos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_pos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_pos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_pos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 1620" border="0" /> </span></div>
<div> </div>
</div>
</td>
<td class="alt2" id="td_post_6330017" style="border-right: 1px solid #FFFFFF">

<div id="post_message_6330017"><!-- google_ad_section_start -->add this to /etc/grub.d/40_custom<br/>
<br/>
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="bbcodeblock" dir="ltr" style="
		margin: 0px;
		margin-right: -99999px;
		padding: 3px;
		border: 1px inset;
		width: 98%;
		height: 98px;
		text-align: left;
		overflow: auto">menuentry 'Windows' --class windows {
set root=(hd0,1)
ntldr /bootmgr
boot
}</pre>
</div>rerun <div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="bbcodeblock" dir="ltr" style="
		margin: 0px;
		margin-right: -99999px;
		padding: 3px;
		border: 1px inset;
		width: 98%;
		height: 34px;
		text-align: left;
		overflow: auto">grub2-mkconfig -o /boot/grub2/grub.cfg</pre>
</div><!-- google_ad_section_end --></div>

</td>
</tr>
<tr>
<td class="alt2" style="border: 1px solid #FFFFFF; border-top: 0px">
&nbsp;
</td>
<td class="alt2" align="right" style="border: 1px solid #FFFFFF; border-left: 0px; border-top: 0px">

<div id="helpfulanswers_box_6330017">
1 members found this post helpful.
</div>

</td>
</tr>
</table>

<div class="vbmenu_popup" id="postmenu_6330017_menu" style="display:none">
<table cellpadding="4" cellspacing="1" border="0">
<tr>
<td class="thead">colorpurple21859</td>
</tr>
<tr><td class="vbmenu_option"><a rel="nofollow" href="user/colorpurple21859-385635/">View Public Profile</a></td></tr>
<tr><td class="vbmenu_option"><a href="/questions/blog/colorpurple21859-385635/">View LQ Blog</a></td></tr>
<tr><td class="vbmenu_option"><a rel="nofollow" href="/reviews/showcat.php?cat=myprod&amp;ppuser=385635">View Review Entries</a></td></tr>
<tr><td class="vbmenu_option"><a href="/questions/search.php?do=finduser&amp;u=385635" rel="nofollow">Find More Posts by colorpurple21859</a></td></tr>
</table>
</div>

</div>
</div>
</div>
</div>



<div align="center">
<div class="page" style="width:100%; text-align:left">
<div style="padding:0px 0px 0px 0px" align="left">
<div id="edit6330324" style="padding:0px 0px 3px 0px">

<table id="post6330324" class="tborder" cellpadding="3" cellspacing="0" border="0" width="100%" align="center">
<tr>
<td class="thead" style="font-weight:normal; border: 1px solid #FFFFFF; border-right: 0px">

<a name="post6330324"><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/statusicon/post_old.gif" alt="Old" border="0" /></a>
02-16-2022, 12:06 PM

</td>
<td class="thead" style="font-weight:normal; border: 1px solid #FFFFFF; border-left: 0px" align="right">
&nbsp;
#<a href="centos-111/windows-10-centos-7-will-not-dual-boot-4175707964/page2.html#post6330324" rel="nofollow" id="postcount6330324" name="22"><strong>22</strong></a>
</td>
</tr>
<tr valign="top">
<td class="alt1" width="175" style="border: 1px solid #FFFFFF; border-top: 0px; border-bottom: 0px">
<div id="postmenu_6330324">
<div class="bigusername">
<!-- google_ad_section_start(weight=ignore) -->walterbyrd<!-- google_ad_section_end --></div>
</div>
<div class="smallfont">Member</div>
<div class="smallfont">
&nbsp;<br/>
<div>Registered: Apr 2004</div>
<div>
Posts: 734
</div>

<br/><strong>Original Poster</strong>

<br/><div><span id="repdisplay_6330324_108115">Rep: <img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_pos.gif" alt="Reputation: 46" border="0" /> </span></div>
<div> </div>
</div>
</td>
<td class="alt1" id="td_post_6330324" style="border-right: 1px solid #FFFFFF">

<div id="post_message_6330324"><!-- google_ad_section_start -->That seemed to do it. Thank you. I will mark this solved.<!-- google_ad_section_end --></div>

</td>
</tr>
<tr>
<td class="alt1" style="border: 1px solid #FFFFFF; border-top: 0px">
&nbsp;
</td>
<td class="alt1" align="right" style="border: 1px solid #FFFFFF; border-left: 0px; border-top: 0px">

<div id="helpfulanswers_box_6330324">
</div>

</td>
</tr>
</table>

<div class="vbmenu_popup" id="postmenu_6330324_menu" style="display:none">
<table cellpadding="4" cellspacing="1" border="0">
<tr>
<td class="thead">walterbyrd</td>
</tr>
<tr><td class="vbmenu_option"><a rel="nofollow" href="user/walterbyrd-108115/">View Public Profile</a></td></tr>
<tr><td class="vbmenu_option"><a href="/questions/blog/walterbyrd-108115/">View LQ Blog</a></td></tr>
<tr><td class="vbmenu_option"><a rel="nofollow" href="/reviews/showcat.php?cat=myprod&amp;ppuser=108115">View Review Entries</a></td></tr>
<tr><td class="vbmenu_option"><a href="/questions/search.php?do=finduser&amp;u=108115" rel="nofollow">Find More Posts by walterbyrd</a></td></tr>
</table>
</div>

</div>
</div>
</div>
</div>



<div align="center">
<div class="page" style="width:100%; text-align:left">
<div style="padding:0px 0px 0px 0px" align="left">
<div id="edit6330333" style="padding:0px 0px 3px 0px">

<table id="post6330333" class="tborder" cellpadding="3" cellspacing="0" border="0" width="100%" align="center">
<tr>
<td class="thead" style="font-weight:normal; border: 1px solid #FFFFFF; border-right: 0px">

<a name="post6330333"><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/statusicon/post_old.gif" alt="Old" border="0" /></a>
02-16-2022, 12:49 PM

</td>
<td class="thead" style="font-weight:normal; border: 1px solid #FFFFFF; border-left: 0px" align="right">
&nbsp;
#<a href="centos-111/windows-10-centos-7-will-not-dual-boot-4175707964/page2.html#post6330333" rel="nofollow" id="postcount6330333" name="23"><strong>23</strong></a>
</td>
</tr>
<tr valign="top">
<td class="alt2" width="175" style="border: 1px solid #FFFFFF; border-top: 0px; border-bottom: 0px">
<div id="postmenu_6330333">
<div class="bigusername">
<!-- google_ad_section_start(weight=ignore) -->colorpurple21859<!-- google_ad_section_end --></div>
</div>
<div class="smallfont">LQ Veteran</div>
<div class="smallfont">
&nbsp;<br/>
<div>Registered: Jan 2008</div>
<div>Location: florida panhandle</div>
<div>Distribution: Slackware Debian, Fedora, others</div>
<div>
Posts: 7,480
</div>
<br/><div><span id="repdisplay_6330333_385635">Rep: <img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_pos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_pos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_pos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_pos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_pos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 1620" border="0" /> </span></div>
<div> </div>
</div>
</td>
<td class="alt2" id="td_post_6330333" style="border-right: 1px solid #FFFFFF">

<div id="post_message_6330333"><!-- google_ad_section_start -->You're Welcome<!-- google_ad_section_end --></div>

</td>
</tr>
<tr>
<td class="alt2" style="border: 1px solid #FFFFFF; border-top: 0px">
&nbsp;
</td>
<td class="alt2" align="right" style="border: 1px solid #FFFFFF; border-left: 0px; border-top: 0px">

<div id="helpfulanswers_box_6330333">
</div>

</td>
</tr>
</table>

<div class="vbmenu_popup" id="postmenu_6330333_menu" style="display:none">
<table cellpadding="4" cellspacing="1" border="0">
<tr>
<td class="thead">colorpurple21859</td>
</tr>
<tr><td class="vbmenu_option"><a rel="nofollow" href="user/colorpurple21859-385635/">View Public Profile</a></td></tr>
<tr><td class="vbmenu_option"><a href="/questions/blog/colorpurple21859-385635/">View LQ Blog</a></td></tr>
<tr><td class="vbmenu_option"><a rel="nofollow" href="/reviews/showcat.php?cat=myprod&amp;ppuser=385635">View Review Entries</a></td></tr>
<tr><td class="vbmenu_option"><a href="/questions/search.php?do=finduser&amp;u=385635" rel="nofollow">Find More Posts by colorpurple21859</a></td></tr>
</table>
</div>

</div>
</div>
</div>
</div>



<div align="center">
<div class="page" style="width:100%; text-align:left">
<div style="padding:0px 0px 0px 0px" align="left">
<div id="edit6330345" style="padding:0px 0px 3px 0px">

<table id="post6330345" class="tborder" cellpadding="3" cellspacing="0" border="0" width="100%" align="center">
<tr>
<td class="thead" style="font-weight:normal; border: 1px solid #FFFFFF; border-right: 0px">

<a name="post6330345"><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/statusicon/post_old.gif" alt="Old" border="0" /></a>
02-16-2022, 01:44 PM

</td>
<td class="thead" style="font-weight:normal; border: 1px solid #FFFFFF; border-left: 0px" align="right">
&nbsp;
#<a href="centos-111/windows-10-centos-7-will-not-dual-boot-4175707964/page2.html#post6330345" rel="nofollow" id="postcount6330345" name="24"><strong>24</strong></a>
</td>
</tr>
<tr valign="top">
<td class="alt1" width="175" style="border: 1px solid #FFFFFF; border-top: 0px; border-bottom: 0px">
<div id="postmenu_6330345">
<div class="bigusername">
<!-- google_ad_section_start(weight=ignore) -->pan64<!-- google_ad_section_end --></div>
</div>
<div class="smallfont">LQ Addict</div>
<div class="smallfont">
&nbsp;<br/>
<div>Registered: Mar 2012</div>
<div>Location: Hungary</div>
<div>Distribution: debian/ubuntu/suse ...</div>
<div>
Posts: 22,267
</div>
<br/><div><span id="repdisplay_6330345_642915">Rep: <img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_pos.gif" alt="Reputation: 7420" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_pos.gif" alt="Reputation: 7420" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_pos.gif" alt="Reputation: 7420" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_pos.gif" alt="Reputation: 7420" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_pos.gif" alt="Reputation: 7420" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 7420" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 7420" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 7420" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 7420" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 7420" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 7420" border="0" /> </span></div>
<div> </div>
</div>
</td>
<td class="alt1" id="td_post_6330345" style="border-right: 1px solid #FFFFFF">

<div id="post_message_6330345"><!-- google_ad_section_start --><div style="margin:20px; margin-top:5px; ">
<div class="smallfont" style="margin-bottom:2px">Quote:</div>
<table cellpadding="3" cellspacing="0" border="0" width="100%">
<tr>
<td class="bbcodeblock" style="border:1px inset">
<div>
Originally Posted by <strong>colorpurple21859</strong>
<a href="centos-111/windows-10-centos-7-will-not-dual-boot-4175707964/page2.html#post6330017" rel="nofollow"><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/buttons/viewpost.gif" border="0" alt="View Post" /></a>
</div>
<div style="font-style:italic">add this to /etc/grub.d/40_custom<br/>
<br/>
<div style="margin:20px; margin-top:5px">
<div class="smallfont" style="margin-bottom:2px">Code:</div>
<pre class="bbcodeblock" dir="ltr" style="
		margin: 0px;
		margin-right: -99999px;
		padding: 3px;
		border: 1px inset;
		width: 98%;
		height: 98px;
		text-align: left;
		overflow: auto">menuentry 'Windows' --class windows {
set root=(hd0,1)
ntldr /bootmgr
boot
}</pre>
</div></div>
</td>
</tr>
</table>
</div>What a magic. Interesting, for me grub works without this.<!-- google_ad_section_end --></div>

</td>
</tr>
<tr>
<td class="alt1" style="border: 1px solid #FFFFFF; border-top: 0px">
&nbsp;
</td>
<td class="alt1" align="right" style="border: 1px solid #FFFFFF; border-left: 0px; border-top: 0px">

<div id="helpfulanswers_box_6330345">
</div>

</td>
</tr>
</table>

<div class="vbmenu_popup" id="postmenu_6330345_menu" style="display:none">
<table cellpadding="4" cellspacing="1" border="0">
<tr>
<td class="thead">pan64</td>
</tr>
<tr><td class="vbmenu_option"><a rel="nofollow" href="user/pan64-642915/">View Public Profile</a></td></tr>
<tr><td class="vbmenu_option"><a href="/questions/blog/pan64-642915/">View LQ Blog</a></td></tr>
<tr><td class="vbmenu_option"><a rel="nofollow" href="/reviews/showcat.php?cat=myprod&amp;ppuser=642915">View Review Entries</a></td></tr>
<tr><td class="vbmenu_option"><a href="/questions/search.php?do=finduser&amp;u=642915" rel="nofollow">Find More Posts by pan64</a></td></tr>
</table>
</div>

</div>
</div>
</div>
</div>



<div align="center">
<div class="page" style="width:100%; text-align:left">
<div style="padding:0px 0px 0px 0px" align="left">
<div id="edit6330373" style="padding:0px 0px 3px 0px">

<table id="post6330373" class="tborder" cellpadding="3" cellspacing="0" border="0" width="100%" align="center">
<tr>
<td class="thead" style="font-weight:normal; border: 1px solid #FFFFFF; border-right: 0px">

<a name="post6330373"><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/statusicon/post_old.gif" alt="Old" border="0" /></a>
02-16-2022, 03:01 PM

</td>
<td class="thead" style="font-weight:normal; border: 1px solid #FFFFFF; border-left: 0px" align="right">
&nbsp;
#<a href="centos-111/windows-10-centos-7-will-not-dual-boot-4175707964/page2.html#post6330373" rel="nofollow" id="postcount6330373" name="25"><strong>25</strong></a>
</td>
</tr>
<tr valign="top">
<td class="alt2" width="175" style="border: 1px solid #FFFFFF; border-top: 0px; border-bottom: 0px">
<div id="postmenu_6330373">
<div class="bigusername">
<!-- google_ad_section_start(weight=ignore) -->colorpurple21859<!-- google_ad_section_end --></div>
</div>
<div class="smallfont">LQ Veteran</div>
<div class="smallfont">
&nbsp;<br/>
<div>Registered: Jan 2008</div>
<div>Location: florida panhandle</div>
<div>Distribution: Slackware Debian, Fedora, others</div>
<div>
Posts: 7,480
</div>
<br/><div><span id="repdisplay_6330373_385635">Rep: <img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_pos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_pos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_pos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_pos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_pos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 1620" border="0" /><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_highpos.gif" alt="Reputation: 1620" border="0" /> </span></div>
<div> </div>
</div>
</td>
<td class="alt2" id="td_post_6330373" style="border-right: 1px solid #FFFFFF">

<div id="post_message_6330373"><!-- google_ad_section_start -->Works for me too, however, every so often there is a thread about grub not finding windows.<!-- google_ad_section_end --></div>

</td>
</tr>
<tr>
<td class="alt2" style="border: 1px solid #FFFFFF; border-top: 0px">
&nbsp;
</td>
<td class="alt2" align="right" style="border: 1px solid #FFFFFF; border-left: 0px; border-top: 0px">

<div id="helpfulanswers_box_6330373">
</div>

</td>
</tr>
</table>

<div class="vbmenu_popup" id="postmenu_6330373_menu" style="display:none">
<table cellpadding="4" cellspacing="1" border="0">
<tr>
<td class="thead">colorpurple21859</td>
</tr>
<tr><td class="vbmenu_option"><a rel="nofollow" href="user/colorpurple21859-385635/">View Public Profile</a></td></tr>
<tr><td class="vbmenu_option"><a href="/questions/blog/colorpurple21859-385635/">View LQ Blog</a></td></tr>
<tr><td class="vbmenu_option"><a rel="nofollow" href="/reviews/showcat.php?cat=myprod&amp;ppuser=385635">View Review Entries</a></td></tr>
<tr><td class="vbmenu_option"><a href="/questions/search.php?do=finduser&amp;u=385635" rel="nofollow">Find More Posts by colorpurple21859</a></td></tr>
</table>
</div>

</div>
</div>
</div>
</div>



<div align="center">
<div class="page" style="width:100%; text-align:left">
<div style="padding:0px 0px 0px 0px" align="left">
<div id="edit6331391" style="padding:0px 0px 3px 0px">
<table id="post6331391" class="tborder" cellpadding="3" cellspacing="0" border="0" width="100%" align="center">
<tr>
<td class="thead" style="font-weight:normal; border: 1px solid #FFFFFF; border-right: 0px" id="currentPost">

<a name="post6331391"><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/statusicon/post_old.gif" alt="Old" border="0" /></a>
02-19-2022, 08:43 PM

</td>
<td class="thead" style="font-weight:normal; border: 1px solid #FFFFFF; border-left: 0px" align="right">
&nbsp;
#<a href="centos-111/windows-10-centos-7-will-not-dual-boot-4175707964/page2.html#post6331391" rel="nofollow" id="postcount6331391" name="26"><strong>26</strong></a>
</td>
</tr>
<tr valign="top">
<td class="alt1" width="175" style="border: 1px solid #FFFFFF; border-top: 0px; border-bottom: 0px">
<div id="postmenu_6331391">
<div class="bigusername">
<!-- google_ad_section_start(weight=ignore) -->walterbyrd<!-- google_ad_section_end --></div>
</div>
<div class="smallfont">Member</div>
<div class="smallfont">
&nbsp;<br/>
<div>Registered: Apr 2004</div>
<div>
Posts: 734
</div>

<br/><strong>Original Poster</strong>

<br/><div><span id="repdisplay_6331391_108115">Rep: <img class="inlineimg" src="https://www.linuxquestions.org/questions/images/reputation/reputation_pos.gif" alt="Reputation: 46" border="0" /> </span></div>
<div> </div>
</div>
</td>
<td class="alt1" id="td_post_6331391" style="border-right: 1px solid #FFFFFF">

<div id="post_message_6331391"><!-- google_ad_section_start -->I have only had this problem with RHEL and CentOS. Grub seems to work in other distros.<!-- google_ad_section_end --></div>

</td>
</tr>
<tr>
<td class="alt1" style="border: 1px solid #FFFFFF; border-top: 0px">
&nbsp;
</td>
<td class="alt1" align="right" style="border: 1px solid #FFFFFF; border-left: 0px; border-top: 0px">

<div id="helpfulanswers_box_6331391">
</div>

</td>
</tr>
</table>

<div class="vbmenu_popup" id="postmenu_6331391_menu" style="display:none">
<table cellpadding="4" cellspacing="1" border="0">
<tr>
<td class="thead">walterbyrd</td>
</tr>
<tr><td class="vbmenu_option"><a rel="nofollow" href="user/walterbyrd-108115/">View Public Profile</a></td></tr>
<tr><td class="vbmenu_option"><a href="/questions/blog/walterbyrd-108115/">View LQ Blog</a></td></tr>
<tr><td class="vbmenu_option"><a rel="nofollow" href="/reviews/showcat.php?cat=myprod&amp;ppuser=108115">View Review Entries</a></td></tr>
<tr><td class="vbmenu_option"><a href="/questions/search.php?do=finduser&amp;u=108115" rel="nofollow">Find More Posts by walterbyrd</a></td></tr>
</table>
</div>

</div>
</div>
</div>
</div>

<div id="lastpost"></div></div>
<div align="center"><script type="text/javascript"><!--// <![CDATA[
    OA_show(11);
// ]]> --></script><noscript><a target='_blank' href='https://rev.linuxquestions.org/www/delivery/ck.php?n=b4ceb16'><img border='0' alt='' src='https://rev.linuxquestions.org/www/delivery/avw.php?zoneid=11&amp;n=b4ceb16' /></a></noscript><span style="float: left; margin-left: 20%;"><script type="text/javascript"><!--// <![CDATA[
    OA_show(6);
// ]]> --></script><noscript><a target='_blank' href='https://rev.linuxquestions.org/www/delivery/ck.php?n=8bad058'><img border='0' alt='' src='https://rev.linuxquestions.org/www/delivery/avw.php?zoneid=6&amp;n=8bad058' /></a></noscript></span>&nbsp;&nbsp;<span style="float: left;margin-left: 20px;"></span></div><br/>
<div style="clear: both;"><br/></div>


<div align="center">
<div class="page" style="width:100%; text-align:left">
<div style="padding:0px 0px 0px 0px" align="left">


<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr valign="top">
<td class="smallfont"><a href="newreply.php?do=newreply&amp;noquote=1&amp;p=6331391" rel="nofollow"><img src="https://www.linuxquestions.org/questions/images/buttons/reply.gif" alt="Reply" border="0" /></a></td>
<td align="right"><div class="pagenav" align="right">
<table class="tborder" cellpadding="3" cellspacing="1" border="0">
<tr>
<td class="vbmenu_control" style="font-weight:normal">Page 2 of 2</td>
<td class="alt1"><a rel="prev" class="smallfont" href="centos-111/windows-10-centos-7-will-not-dual-boot-4175707964/" title="Prev Page - Results 1 to 15 of 26">&lt;</a></td>
<td class="alt1"><a class="smallfont" href="centos-111/windows-10-centos-7-will-not-dual-boot-4175707964/" title="Show results 1 to 15 of 26">1</a></td> <td class="alt2"><span class="smallfont" title="Showing results 16 to 26 of 26"><strong>2</strong></span></td>
<td class="vbmenu_control" title="showthread.php?t=4175707964"><a name="PageNav"></a></td>
</tr>
</table>
</div>
</td>
</tr>
</table>


<script type="text/javascript" src="clientscript/vbulletin_lightbox.js?v=3810b1"></script>
<script type="text/javascript">
	<!--
	vBulletin.register_control("vB_Lightbox_Container", "posts", 1);
	//-->
	</script>

<br/>
<br/>



<br/>

<div class="vbmenu_popup" id="threadtools_menu" style="display:none">
<form action="postings.php?t=4175707964&amp;pollid=" method="post" name="threadadminform">
<table cellpadding="4" cellspacing="1" border="0">
<tr>
<td class="thead">Thread Tools<a name="goto_threadtools"></a></td>
</tr>
<tr>
<td class="vbmenu_option"><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/buttons/printer.gif" alt="Show Printable Version" /> <a href="centos-111/windows-10-centos-7-will-not-dual-boot-4175707964-print/" accesskey="3" rel="nofollow">Show Printable Version</a></td>
</tr>
<tr>
<td class="vbmenu_option"><img class="inlineimg" src="https://www.linuxquestions.org/questions/images/buttons/sendtofriend.gif" alt="Email this Page" /> <a href="sendmessage.php?do=sendtofriend&amp;t=4175707964" rel="nofollow">Email this Page</a></td>
</tr>
</table>
</form>
</div>



<div class="vbmenu_popup" id="threadsearch_menu" style="display:none">
<form action="search.php?do=process&amp;searchthreadid=4175707964" method="post">
<table cellpadding="4" cellspacing="1" border="0">
<tr>
<td class="thead">Search this Thread<a name="goto_threadsearch"></a></td>
</tr>
<tr>
<td class="vbmenu_option" title="nohilite">
<input type="hidden" name="s" value />
<input type="hidden" name="securitytoken" value="guest" />
<input type="hidden" name="do" value="process" />
<input type="hidden" name="searchthreadid" value="4175707964" />
<input type="text" class="bginput" name="query" size="25" /><input type="submit" class="button" value="Go" /><br/>
</td>
</tr>
<tr>
<td class="vbmenu_option"><a rel="nofollow" href="search.php?searchthreadid=4175707964">Advanced Search</a></td>
</tr>
</table>
</form>
</div>




<table cellpadding="0" cellspacing="0" border="0" width="100%" align="center">
<tr valign="bottom">
<td class="smallfont" align="left">
<table class="tborder" cellpadding="3" cellspacing="1" border="0" width="210">
<thead>
<tr>
<td class="thead">
<a style="float:right" href="#top" onclick="return toggle_collapse('forumrules')"><img id="collapseimg_forumrules" src="https://www.linuxquestions.org/questions/images/buttons/collapse_thead.gif" alt border="0" /></a>
Posting Rules
</td>
</tr>
</thead>
<tbody id="collapseobj_forumrules" style>
<tr>
<td class="alt1" nowrap="nowrap"><div class="smallfont">
<div>You <strong>may not</strong> post new threads</div>
<div>You <strong>may not</strong> post replies</div>
<div>You <strong>may not</strong> post attachments</div>
<div>You <strong>may not</strong> edit your posts</div>
<hr/>
<div><a rel="nofollow" href="misc.php?do=bbcode" target="_blank">BB code</a> is <strong>On</strong></div>
<div><a rel="nofollow" href="misc.php?do=showsmilies" target="_blank">Smilies</a> are <strong>On</strong></div>
<div><a rel="nofollow" href="misc.php?do=bbcode#imgcode" target="_blank">[IMG]</a> code is <strong>On</strong></div>
<div>HTML code is <strong>Off</strong></div>
<hr/>
<div><a rel="nofollow" href="misc.php?do=showrules" target="_blank">Forum Rules</a></div>
</div></td>
</tr>
</tbody>
</table>
</td>
<td class="smallfont" align="right">
<table cellpadding="0" cellspacing="0" border="0">
<tr>
<td>
</td>
</tr>
</table>
</td>
</tr>
</table>

<br/>
<input type="hidden" name="IL_IN_TAG" value="1" />
<br/>
<table class="tborder" cellpadding="3" cellspacing="1" border="0" width="100%" align="center">
<thead>
<tr>
<td class="tcat" width="100%" colspan="5">
<a style="float:right" href="#top" onclick="return toggle_collapse('similarthreads')"><img id="collapseimg_similarthreads" src="https://www.linuxquestions.org/questions/images/buttons/collapse_tcat.gif" alt border="0" /></a>
Similar Threads<a name="similarthreads"></a>
</td>
</tr>
</thead>
<tbody id="collapseobj_similarthreads" style>
<tr class="thead" align="center">
<td class="thead" width="40%">Thread</td>
<td class="thead" width="15%" nowrap="nowrap">Thread Starter</td>
<td class="thead" width="20%">Forum</td>
<td class="thead" width="5%">Replies</td>
<td class="thead" width="20%">Last Post</td>
</tr>
<tr>
<td class="alt1" align="left">
<span class="smallfont"> <a href="linux-newbie-8/centos-7-unable-to-boot-or-dual-boot-with-windows-10-missing-ssd-and-os-prober-doesn%27t-find-windows-10-a-4175650129/" title="Hello guys.  
 
I installed Centos7 on my HDD while I have windows installed on my SSD. 
When I tried to set up dual boot. Grub is malfunctioning for..." target="_blank">(Centos 7) Unable to boot or Dual boot with Windows 10. Missing SSD. &amp; os-prober doesn't find windows 10</a></span>
</td>
<td class="alt2" nowrap="nowrap"><span class="smallfont">lowell2753@gmail.com</span></td>
<td class="alt1" nowrap="nowrap"><span class="smallfont">Linux - Newbie</span></td>
<td class="alt2" align="center"><span class="smallfont">5</span></td>
<td class="alt1" align="right"><span class="smallfont">03-14-2019 <span class="time">07:01 PM</span></span></td>
</tr><tr>
<td class="alt1" align="left">
<span class="smallfont"> <a href="linuxquestions-org-member-intro-24/tried-centos-7-dual-boot-with-windows-10-not-went-will-as-could-not-boot-windows-10-help-needed-4175641375/" title="I am a iOS developer for the last 3 years. I started using centos 7 before 3 weeks with intention to learn linux environment and server side. When i..." target="_blank">Tried centos 7 dual boot with windows 10 not went will as could not boot windows 10...help needed</a></span>
</td>
<td class="alt2" nowrap="nowrap"><span class="smallfont">rajeshm79</span></td>
<td class="alt1" nowrap="nowrap"><span class="smallfont">LinuxQuestions.org Member Intro</span></td>
<td class="alt2" align="center"><span class="smallfont">0</span></td>
<td class="alt1" align="right"><span class="smallfont">10-29-2018 <span class="time">01:11 PM</span></span></td>
</tr><tr>
<td class="alt1" align="left">
<span class="smallfont">[SOLVED] <a href="linux-newbie-8/dual-boot-without-windows-windows-10-uefi-dual-boot-with-metamorphose-panther-debian-kde-4175616607/" title="Friends, I used W10 64bits UEFI and decided to install a Debian distro Metamorphose on separated partition sd5(windows sd4... other sdx as windows..." target="_blank">Dual boot without windows - Windows 10 UEFI dual boot with Metamorphose Panther(Debian/KDE)</a></span>
</td>
<td class="alt2" nowrap="nowrap"><span class="smallfont">mithidieri</span></td>
<td class="alt1" nowrap="nowrap"><span class="smallfont">Linux - Newbie</span></td>
<td class="alt2" align="center"><span class="smallfont">7</span></td>
<td class="alt1" align="right"><span class="smallfont">11-03-2017 <span class="time">12:10 AM</span></span></td>
</tr>
</tbody>
</table>
<br/>
<span class="navbar"><a href="/" accesskey="1">LinuxQuestions.org</a></span>
<span class="navbar">&gt; <a href="/questions/" accesskey="1">Forums</a></span>
<span class="navbar">&gt; <a href="linux-forums-50/">Linux Forums</a></span>
<span class="navbar">&gt; <a href="linux-distributions-5/">Linux - Distributions</a></span>
<span class="navbar">&gt; <a href="centos-111/">CentOS</a></span>

</div>
</div>
</div>


</div>
<br/>
<div class="smallfont" align="center">All times are GMT -5. The time now is <span class="time">03:35 AM</span>.</div>
<br/>

<form action="/questions/" method="get">
<table cellpadding="3" cellspacing="0" border="0" width="100%" class="page" align="center">
<tr>
<td class="tfoot" align="right" width="100%">
<div class="smallfont">
<strong>
<a href="/questions/sendmessage.php" rel="nofollow">Contact Us</a> -
<a href="/linux/adinfo.html">Advertising Info</a> -
<a href="/linux/rules.html">Rules</a> - <a href="/linux/privacy.html">Privacy</a> -
<a href="http://www.zazzle.com/linuxquestions* " rel="nofollow">LQ Merchandise</a> -
<a href="/linux/donation.html">Donations</a> -
<a href="/linux/member.html">Contributing Member</a> -
<a href="/linux/sitemap.html" rel="nofollow">LQ Sitemap</a> -
</strong>
</div>
</td>
</tr>
</table>
</form>

</td>
<td width="165px" class="page" style="padding-left:5px" valign="top">
<table style="margin-bottom:5px" cellpadding="2" cellspacing="0" border="0" width="100%" class="tborder" align="center">
<tr><td class="vbmenu_control">Main Menu</td></tr>
<tr><td class="alt1">
<ul class="lqrightmenu">
<li><a href="/questions/">Linux Forum</a></li>
<li><a href="/questions/search.php">Search</a></li>
<li><a href="tags/" rel="nofollow">LQ Tags</a></li>
<li><a href="/linux/answers/">Linux Tutorials</a></li>
<li><a href="https://deals.linuxquestions.org/" target="_blank">LQ Deals</a></li>
<li><a href="http://wiki.linuxquestions.org/">Linux Wiki</a></li>

<li><a href="http://iso.linuxquestions.org/">Download Linux</a></li>

<li><a href="groups/">Social Groups</a></li>
<li><a href="/questions/blog/">LQ Blogs</a></li>

</ul>
<div align="center"><a href="centos-111/windows-10-centos-7-will-not-dual-boot-4175707964/page2.html#main_cont">(Con't)</a></div>
</td></tr>
</table>
<div style="text-align:center;margin-bottom:5px">
<table style="margin-bottom:5px" cellpadding="2" cellspacing="0" border="0" width="100%" class="tborder" align="center">
<tr><td class="vbmenu_control">Advertisement</td></tr></table></div>
<div style="text-align:center;margin-bottom:5px" class="alt1">
<script type="text/javascript"><!--// <![CDATA[
    OA_show(9);
// ]]> --></script><noscript><a target='_blank' href='https://rev.linuxquestions.org/www/delivery/ck.php?n=e407561'><img border='0' alt='' src='https://rev.linuxquestions.org/www/delivery/avw.php?zoneid=9&amp;n=e407561' /></a></noscript>
</div>

<table style="margin-bottom:5px" cellpadding="2" cellspacing="0" border="0" width="100%" class="tborder" align="center">
<tr><td class="vbmenu_control">My LQ</td></tr>
<tr><td class="alt1"><ul class="lqrightmenu">
<li><a href="https://www.linuxquestions.org/questions/lqlogin.php">Login</a></li>
<li><a href="/questions/register.php">Register</a></li>
</ul>
<div style="text-align:center;margin-bottom:5px" class="alt1">
<script type="text/javascript"><!--// <![CDATA[
    OA_show(3);
// ]]> --></script><noscript><a target='_blank' href='https://rev.linuxquestions.org/www/delivery/ck.php?n=8cac360'><img border='0' alt='' src='https://rev.linuxquestions.org/www/delivery/avw.php?zoneid=3&amp;n=8cac360' /></a></noscript>
</div>
</td></tr>
</table>
<table style="margin-bottom:5px" cellpadding="2" cellspacing="0" border="0" width="100%" class="tborder" align="center">
<tr><td class="vbmenu_control">Write for LQ</td></tr>
<tr><td class="alt1">
LinuxQuestions.org is looking for people interested in writing
Editorials, Articles, Reviews, and more. If you'd like to contribute
content, <a href="/questions/sendmessage.php">let us know</a>.
</td></tr>
</table>
<table style="margin-bottom:5px" cellpadding="2" cellspacing="0" border="0" width="100%" class="tborder" align="center">
<tr><td class="vbmenu_control" id="main_cont">Main Menu</td></tr>
<tr><td class="alt1">
<ul class="lqrightmenu">
<li><a href="/questions/calendar.php">LQ Calendar</a></li>
<li><a href="/linux/rules.html">LQ Rules</a></li>
<li><a href="/linux/sitemap.html">LQ Sitemap</a></li>
<li><a href="/questions/faq.php">Site FAQ</a></li>
<li><a rel="nofollow" href="/questions/search.php?do=getnew">View New Posts</a></li>
<li><a rel="nofollow" href="/questions/lqsearch.php?do=getnew&amp;daysprune=7">View Latest Posts</a></li>
<li><a rel="nofollow" href="/questions/lqsearch.php?do=noreplies">Zero Reply Threads</a></li>
<li><a href="http://wiki.linuxquestions.org/wiki/Special:Wantedpages">LQ Wiki Most Wanted</a></li>
<li><a href="http://jeremy.linuxquestions.org/">Jeremy's Blog</a></li>
<li><a href="/questions/project.php">Report LQ Bug</a></li>
</ul>
</td></tr>
</table>
<table style="margin-bottom:5px" cellpadding="2" cellspacing="0" border="0" width="100%" class="tborder" align="center">
<tr><td class="vbmenu_control">Syndicate</td></tr>
<tr><td class="alt1">
<a href="http://www.linuxquestions.org/syndicate/lqlatest.xml"><img src="https://www.linuxquestions.org/questions/images/misc/rss.gif" alt="RSS1" border="0" width="16" height="16" /></a>&nbsp; Latest Threads<br/>
<a href="http://www.linuxquestions.org/syndicate/lqnews.rss"><img src="https://www.linuxquestions.org/questions/images/misc/rss.gif" alt="RSS1" border="0" width="16" height="16" /></a>&nbsp; LQ News<br/>

<div class="smallfont">Twitter: <a href="http://twitter.com/linuxquestions" rel="nofollow">@linuxquestions</a><br/>
</div>
</td></tr>
</table>
</td>
</tr>
</table>

</div>
</div>
</div>

<div align="center">
<div class="smallfont" align="center">
<a href="http://www.lqconsulting.com/">Open Source Consulting</a> |
<a href="http://www.lqconsulting.com/client/check.php">Domain Registration</a>
</div><br/><br/>
<div class="smallfont" align="center">
</div>
</div>
<script type="text/javascript">
<!--
	// Main vBulletin Javascript Initialization
	vBulletin_init();
//-->
</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=G-2K5S76M65W"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2K5S76M65W');
</script>

<div style="display:none">


</div>

<script type="text/javascript">
//<![CDATA[

window.orig_onload = window.onload;
window.onload = function() {
var cpost=document.location.hash.substring(1);var cpost2='';if(cpost && (typeof fetch_object != 'undefined')){ var ispost=cpost.substring(0,4)=='post';if(ispost)cpost2='post_'+cpost.substring(4);if((cobj = fetch_object(cpost))||(cobj = fetch_object(cpost2))){cobj.scrollIntoView(true);}else if(ispost){cpostno = cpost.substring(4,cpost.length);if(parseInt(cpostno)>0){location.replace('https://www.linuxquestions.org/questions/showthread.php?p='+cpostno);};} }

if(typeof window.orig_onload == "function") window.orig_onload();
}

//]]>
</script>
</body>
</html>