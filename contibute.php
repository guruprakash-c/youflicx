<?php 
error_reporting(E_ALL);
date_default_timezone_set('Asia/Kolkata');
ob_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <title>Contribute <?=html_entity_decode('&ndash; Youflicx.') ?></title>
    <?php require_once './_views/_head.php'; ?>
</head>
<body class="nojs">
    <noscript>Please enable javascript in your browser.</noscript>
    <header><?php require_once './_views/_header.php'; ?></header>
    <main></main>
    <footer><?php require_once './_views/_footer.php'; ?></footer>
    <?php require_once './_views/_scripts.php'; ?>
</body>
</html>