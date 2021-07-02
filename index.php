<?php
error_reporting(E_ALL);
date_default_timezone_set('Asia/Kolkata');
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
            <aside class="col-md-4 col-sm-4 col-lg-4 border-end">
                <section class="searchbar collapse" id="searchbar">
                    <?php require_once './_views/_search.php'; ?>
                    <p class="text-end"><a class="text-muted" data-bs-toggle="collapse" href="#searchfilters" aria-expanded="false" aria-controls="searchfilters">
                            <i class="la la-filter me-1"></i>Filter<i class="la la-angle-down ms-1"></i>
                        </a>
                    </p>
                    <div class="collapse" id="searchfilters">
                        <div class="card card-body overflow-auto" style="height: 120px;">
                            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                        </div>
                    </div>
                </section>
                <?php if (!empty($_GET['v'])) { ?>
                    <section class="videolist">
                        <h1 class="h5 fw-bolder">Related Videos</h1>
                        <div class="d-flex mt-3 mb-3 border-bottom py-2">
                            <div class="flex-shrink-0">
                                <img src="https://source.unsplash.com/random/800x500" width="105" height="105" class="img-responsive rounded-circle bordered-0" alt="" />
                            </div>
                            <div class="flex-grow-1 ms-1">
                                <h6 class="h6 text-wrap mt-0 mb-0"><a href="#">Lorem ipsum dolor sit amet consectetur</a></h6>
                                <p class="meta text-wrap mt-0 mb-0 text-muted"><a href="#">Genre name</a> &middot; <time>3 weeks ago</time></p>
                                <p class="desc mt-0 mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, nostrum ipsa nam incidunt cum non...</p>
                            </div>
                        </div>
                        <div class="d-flex mt-3 mb-3 border-bottom py-2">
                            <div class="flex-shrink-0">
                                <img src="https://source.unsplash.com/random/800x500" width="105" height="105" class="img-responsive rounded-circle bordered-0" alt="" />
                            </div>
                            <div class="flex-grow-1 ms-1">
                                <h6 class="h6 text-wrap mt-0 mb-0"><a href="#">Lorem ipsum dolor sit amet consectetur</a></h6>
                                <p class="meta text-wrap mt-0 mb-0 text-muted"><a href="#">Genre name</a> &middot; <time>3 weeks ago</time></p>
                                <p class="desc mt-0 mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, nostrum ipsa nam incidunt cum non...</p>
                            </div>
                        </div>
                        <div class="d-flex mt-3 mb-3 border-bottom py-2">
                            <div class="flex-shrink-0">
                                <img src="https://source.unsplash.com/random/800x500" width="105" height="105" class="img-responsive rounded-circle bordered-0" alt="" />
                            </div>
                            <div class="flex-grow-1 ms-1">
                                <h6 class="h6 text-wrap mt-0 mb-0"><a href="#">Lorem ipsum dolor sit amet consectetur</a></h6>
                                <p class="meta text-wrap mt-0 mb-0 text-muted"><a href="#">Genre name</a> &middot; <time>3 weeks ago</time></p>
                                <p class="desc mt-0 mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, nostrum ipsa nam incidunt cum non...</p>
                            </div>
                        </div>
                        <div class="d-flex mt-3 mb-3 border-bottom py-2">
                            <div class="flex-shrink-0">
                                <img src="https://source.unsplash.com/random/800x500" width="105" height="105" class="img-responsive rounded-circle bordered-0" alt="" />
                            </div>
                            <div class="flex-grow-1 ms-1">
                                <h6 class="h6 text-wrap mt-0 mb-0"><a href="#">Lorem ipsum dolor sit amet consectetur</a></h6>
                                <p class="meta text-wrap mt-0 mb-0 text-muted"><a href="#">Genre name</a> &middot; <time>3 weeks ago</time></p>
                                <p class="desc mt-0 mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, nostrum ipsa nam incidunt cum non...</p>
                            </div>
                        </div>
                    </section>
                <?php } else { ?>
                    <section class="videolist">
                        <h1 class="h5 fw-bold">Recently Added</h1>
                        <div class="d-flex mt-3 mb-3 border-bottom py-2">
                            <div class="flex-shrink-0">
                                <img src="https://source.unsplash.com/random/800x500" width="105" height="105" class="img-responsive rounded-circle bordered-0" alt="" />
                            </div>
                            <div class="flex-grow-1 ms-1">
                                <h6 class="h6 text-wrap mt-0 mb-0"><a href="#">Lorem ipsum dolor sit amet consectetur</a></h6>
                                <p class="meta text-wrap mt-0 mb-0 text-muted"><a href="#">Genre name</a> &middot; <time>3 weeks ago</time></p>
                                <p class="desc mt-0 mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, nostrum ipsa nam incidunt cum non...</p>
                            </div>
                        </div>
                        <div class="d-flex mt-3 mb-3 border-bottom py-2">
                            <div class="flex-shrink-0">
                                <img src="https://source.unsplash.com/random/800x500" width="105" height="105" class="img-responsive rounded-circle bordered-0" alt="" />
                            </div>
                            <div class="flex-grow-1 ms-1">
                                <h6 class="h6 text-wrap mt-0 mb-0"><a href="#">Lorem ipsum dolor sit amet consectetur</a></h6>
                                <p class="meta text-wrap mt-0 mb-0 text-muted"><a href="#">Genre name</a> &middot; <time>3 weeks ago</time></p>
                                <p class="desc mt-0 mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, nostrum ipsa nam incidunt cum non...</p>
                            </div>
                        </div>
                        <div class="d-flex mt-3 mb-3 border-bottom py-2">
                            <div class="flex-shrink-0">
                                <img src="https://source.unsplash.com/random/800x500" width="105" height="105" class="img-responsive rounded-circle bordered-0" alt="" />
                            </div>
                            <div class="flex-grow-1 ms-1">
                                <h6 class="h6 text-wrap mt-0 mb-0"><a href="#">Lorem ipsum dolor sit amet consectetur</a></h6>
                                <p class="meta text-wrap mt-0 mb-0 text-muted"><a href="#">Genre name</a> &middot; <time>3 weeks ago</time></p>
                                <p class="desc mt-0 mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, nostrum ipsa nam incidunt cum non...</p>
                            </div>
                        </div>
                        <div class="d-flex mt-3 mb-3 border-bottom py-2">
                            <div class="flex-shrink-0">
                                <img src="https://source.unsplash.com/random/800x500" width="105" height="105" class="img-responsive rounded-circle bordered-0" alt="" />
                            </div>
                            <div class="flex-grow-1 ms-1">
                                <h6 class="h6 text-wrap mt-0 mb-0"><a href="#">Lorem ipsum dolor sit amet consectetur</a></h6>
                                <p class="meta text-wrap mt-0 mb-0 text-muted"><a href="#">Genre name</a> &middot; <time>3 weeks ago</time></p>
                                <p class="desc mt-0 mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, nostrum ipsa nam incidunt cum non...</p>
                            </div>
                        </div>
                    </section>
                <?php } ?>
            </aside>
            <article class="col-md-8 col-sm-8 col-lg-8">
                <?php if (!empty($_GET['v'])) { ?>
                    <h1>Lorem ipsum dolor sit amet consectetur adipisicing elitquae laboriosam excepturi amet</h1>
                    <div id="player" data-plyr-provider="youtube" data-plyr-embed-id="bTqVqk7FSmY"></div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero voluptatem necessitatibus optio animi dolores non aliquam alias mollitia eveniet sit, voluptate sed in totam provident repellat voluptatibus neque ratione fugiat.</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero voluptatem necessitatibus optio animi dolores non aliquam alias mollitia eveniet sit, voluptate sed in totam provident repellat voluptatibus neque ratione fugiat.</p>
                <?php } else { ?>
                    <div class="posts-slide-wrap">
                        <div class="posts-slide" id="posts-slide">
                            <article class="item">
                                <div class="post-entry d-lg-flex">
                                    <div class="me-lg-5 thumbnail mb-4 mb-lg-0">
                                        <a href="./post?p=<?= ($postSlideRow['ID']) ?>" rel="bookmark" hreflang="en_US">
                                            <img src="https://preview.colorlib.com/theme/magdesign/images/post_lg_2.jpg" alt="" title="" class="img-fluid" />
                                        </a>
                                    </div>
                                    <div class="content align-self-center">
                                        <div class="post-meta mb-3">
                                            Genre &mdash;
                                            <span class="date">2 weeks ago</span>
                                        </div>
                                        <h2 class="heading"><a href="./index?v=1" rel="bookmark" hreflang="en_US">Lorem ipsum dolor sit amet consectetur</a></h2>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, nostrum ipsa nam incidunt cum non...</p>
                                    </div>
                                </div>
                            </article>
                            <article class="item">
                                <div class="post-entry d-lg-flex">
                                    <div class="me-lg-5 thumbnail mb-4 mb-lg-0">
                                        <a href="./post?p=<?= ($postSlideRow['ID']) ?>" rel="bookmark" hreflang="en_US">
                                            <img src="https://preview.colorlib.com/theme/magdesign/images/post_lg_1.jpg" alt="" title="" class="img-fluid" />
                                        </a>
                                    </div>
                                    <div class="content align-self-center">
                                        <div class="post-meta mb-3">
                                            Genre &mdash;
                                            <span class="date">2 weeks ago</span>
                                        </div>
                                        <h2 class="heading"><a href="./index?v=1" rel="bookmark" hreflang="en_US">Lorem ipsum dolor sit amet consectetur</a></h2>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, nostrum ipsa nam incidunt cum non...</p>
                                    </div>
                                </div>
                            </article>
                            <article class="item">
                                <div class="post-entry d-lg-flex">
                                    <div class="me-lg-5 thumbnail mb-4 mb-lg-0">
                                        <a href="./post?p=<?= ($postSlideRow['ID']) ?>" rel="bookmark" hreflang="en_US">
                                            <img src="https://preview.colorlib.com/theme/magdesign/images/post_lg_3.jpg" alt="" title="" class="img-fluid" />
                                        </a>
                                    </div>
                                    <div class="content align-self-center">
                                        <div class="post-meta mb-3">
                                            Genre &mdash;
                                            <span class="date">2 weeks ago</span>
                                        </div>
                                        <h2 class="heading"><a href="./index?v=1" rel="bookmark" hreflang="en_US">Lorem ipsum dolor sit amet consectetur</a></h2>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, nostrum ipsa nam incidunt cum non...</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="genre-slide-wrap mt-3 mb-1">
                        <h1 class="h5">Genres</h1>
                        <div class="genre-slide row mt-1 mb-4" id="genre-slide">
                            <article class="item col-md-3">
                                <div class="post-entry d-lg-flex">
                                    <div class="me-lg-1 thumbnail mb-4 mb-lg-0">
                                        <a href="./post?p=<?= ($postSlideRow['ID']) ?>" rel="bookmark" hreflang="en_US">
                                            <img src="https://preview.colorlib.com/theme/magdesign/images/post_lg_2.jpg" alt="" title="" class="img-fluid" />
                                        </a>
                                    </div>
                                    <div class="content align-self-center">
                                        <h5 class="heading"><a href="./index?v=1" rel="bookmark" hreflang="en_US">Horror</a></h5>
                                    </div>
                                </div>
                            </article>
                            <article class="item col-md-3">
                                <div class="post-entry d-lg-flex">
                                    <div class="me-lg-1 thumbnail mb-4 mb-lg-0">
                                        <a href="./post?p=" rel="bookmark" hreflang="en_US">
                                            <img src="https://preview.colorlib.com/theme/magdesign/images/post_lg_1.jpg" alt="" title="" class="img-fluid" />
                                        </a>
                                    </div>
                                    <div class="content align-self-center">
                                        <h5 class="heading"><a href="./index?v=1" rel="bookmark" hreflang="en_US">Sitcom</a></h5>
                                    </div>
                                </div>
                            </article>
                            <article class="item col-md-3">
                                <div class="post-entry d-lg-flex">
                                    <div class="me-lg-1 thumbnail mb-4 mb-lg-0">
                                        <a href="./post?p=" rel="bookmark" hreflang="en_US">
                                            <img src="https://preview.colorlib.com/theme/magdesign/images/post_lg_3.jpg" alt="" title="" class="img-fluid" />
                                        </a>
                                    </div>
                                    <div class="content align-self-center">
                                        <h5 class="heading"><a href="./index?v=1" rel="bookmark" hreflang="en_US">Romance</a></h5>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="text-center">
                            <a href="#" role="button" class="btn btn-lg text-decoration-none btn-primary">Show more<i class="la la-angle-right ms-1"></i></a>
                        </div>
                    </div>
                <?php } ?>
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
</body>

</html>