<?php

session_start();

if ( !isset($_REQUEST['!']) )
    die();
$mode = strip_tags($_REQUEST['!']);
if ( strlen($mode) == 0 )
    die();

/* use: $cookies_allowed to determine if cookie permission given; 
   also check integer (0 - basic, 1 - full use) */
$cookies_allowed = false;
if ( isset($_SESSION['cookies_allowed']) )
    $cookies_allowed = strcmp($_SESSION['cookies_allowed'], '1') == 0;

if ( strcmp($mode, 'set_cookie_use') == 0 && isset($_SERVER['HTTP_REFERER']) )
{
    $_SESSION['cookies_allowed'] = isset($_REQUEST['allow']) ? '1' : '0';
    header('Location: '. isset($_SERVER['HTTP_REFERER'] ? $_SERVER['HTTP_REFERER'] : '/');
    exit;
}

?>