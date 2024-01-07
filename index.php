<html lang="en">
<head>
<link rel="stylesheet" href="/assets/styles/cd.css" />
<script type="text/javascript" src="/assets/javascript/cd.js"></script>
<script type="text/javascript">
function init() {
<?php
if ( !isset($_SESSION['cookies_allowed']) ) {
    echo('
    if ( !CookieChecker.isAllowed() )
        document.getElementById(\'cookie_banner\').style.display="block";
    ');
}
?>
}
</script>
</head>
<body onload="javascript:init();">
<div id="cookie_banner">
<div id="cookie_banner_inner">
<h1>We use cookies...</h1>
Hi, we like to make use of cookies to enhance your web experience. This allows us to do alot of cool stuff such as persist sessions between tabs and remember that you are logged in should you leave our web service and later return. Some of these are essential to the smooth operation of our service.<br /><br />More detail may be obtained through our <a href="/assets/documents/privacy_policy.pdf" target="_blank">Privacy Policy</a>.
<br /><br />
<div id="cookier_banner_buttons">
<button class="cookie_banner_button" name="button" type="button" value="Disagree" onclick="javascript:CookieChecker.disagree();window.location='/allow-cookies/';">Only Essential</button>
<button class="cookie_banner_button" name="button" type="button" value="Agree" onclick="javascript:CookieChecker.agree();window.location='/allow-cookies/yes/';">Allow Full Use</button>
</div>
</div>
</div>
</body>
</html>