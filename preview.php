<?php
error_reporting(E_ALL);
date_default_timezone_set('Asia/Kolkata');
ini_set('allow_url_include',1);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>Youflicx.</title>
    <?php require_once './_views/_head.php'; ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/plyr/3.6.4/plyr.min.css" rel="stylesheet" />
</head>

<body class="nojs container">
    <noscript>Please enable javascript in your browser.</noscript>
    <header><?php require_once './_views/_header.php'; ?></header>
    <main class="container-fluid">
        <section class="row">
            <article class="col-md-8 col-sm-8 col-lg-8">
                <?php 
                    $url=bin2hex("http://localhost:81/Development/youflicx/preview");//bin2hex("https://preview.colorlib.com/theme/medica/");
                ?>
                <div class="d-flex align-items-start">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-dsk-tab" data-bs-toggle="pill" title="Desktop" data-bs-target="#v-pills-dsk" type="button" role="tab" aria-controls="v-pills-dsk" aria-selected="true"><i class="la la-desktop la-2x align-middle"></i></button>
                        <button class="nav-link" id="v-pills-mob-tab" data-bs-toggle="pill" title="Mobile" data-bs-target="#v-pills-mob" type="button" role="tab" aria-controls="v-pills-mob" aria-selected="false"><i class="la la-mobile la-2x align-middle"></i></button>
                        <button class="nav-link" id="v-pills-tblt-tab" data-bs-toggle="pill" title="Tablet" data-bs-target="#v-pills-tblt" type="button" role="tab" aria-controls="v-pills-tblt" aria-selected="false"><i class="la la-tablet la-2x align-middle"></i></button>
                    </div>
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-dsk" role="tabpanel" aria-labelledby="v-pills-dsk-tab">
                            <!--Desktop Mode-->
                            <iframe id="iframe" scrolling="no" border="0" style="height: 255vh; width: 75vw" src="./previewer?v=<?=$url ?>" frameborder="0"></iframe>
                        </div>
                        <div class="tab-pane fade" id="v-pills-mob" role="tabpanel" aria-labelledby="v-pills-mob-tab">
                            <!--Mobile Mode-->
                            <iframe id="iframe" scrolling="no" border="0" style="height: 100vh; width: 30vw" src="./previewer?v=<?=$url ?>" frameborder="0"></iframe>
                        </div>
                        <div class="tab-pane fade" id="v-pills-tblt" role="tabpanel" aria-labelledby="v-pills-tblt-tab">
                            <!--Tablet Mode-->
                            <iframe id="iframe" scrolling="no" border="0" style="height: 200vh; width: 60vw" src="./previewer?v=<?=$url ?>" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </article>
        </section>
        <?php if (!empty($_GET['v'])) { ?>
            <?php require_once './_views/_subscription.php'; ?>
        <?php } ?>
    </main>
    <footer class="bg-primary text-white"><?php require_once './_views/_footer.php'; ?></footer>
    <?php require_once './_views/_scripts.php'; ?>
    <?php if (!empty($_GET['v'])) { ?>
        <script type="text/javascript">
            var isSubscribed = '';
            var options = {
                backdrop: false,
                keyboard: false
            }
            var subModal = new bootstrap.Modal(document.getElementById('subscribemdl'), options);

            if (isSubscribed == undefined || isSubscribed == null || isSubscribed == '') {
                subModal.show();
            } else {
                subModal.hide();
            }
        </script>
    <?php } ?>
    <script>
        $(document).ready(function(){
            var iSrc = $('#iframe').attr('src');
            if(window.innerWidth <= 800  &&  window.innerHeight <= 600){
                location.href = iSrc; 
            }
        });
    </script>
</body>
</html>