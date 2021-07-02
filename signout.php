<?php 
error_reporting(0);
ob_start();
date_default_timezone_set("America/Detroit");

if(!isset($_SESSION)) session_start();

unset($_SESSION['devstcrcode']);
unset($_SESSION['devstcr']);
unset($_SESSION['devstcrr']);
unset($_COOKIE['devstcr']);
session_destroy();
unset($_SESSION);
if(empty($_SESSION)) header('Location: ./index');
?>
<meta name="robots" content="noimageindex, nofollow, nosnippet" />