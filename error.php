<?php
date_default_timezone_set("America/Detroit");
$hdr = '404';
if (!empty($_GET['err'])) {
    $hdr = $_GET['err'];
}
header('X-PHP-Response-Code: '.$hdr, true, $hdr);
http_response_code($hdr);
?>
<meta name="robots" content="noimageindex, nofollow, nosnippet"/>
<p><strong><?=$hdr ?>.</strong> That's an error</p>
<p>The requested page was not found/something went wrong on this server.</p>
<p class="text-muted">That's all we know</p>
<img src="./assets/err.svg" class="align-self-center ms-3" width="300" height="300" alt="" title="" />
<?php 
exit();
?>