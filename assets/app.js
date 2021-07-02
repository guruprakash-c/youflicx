(function() {
    'use strict'
    const player = new Plyr('#player');
    var tinyslider = function () {
        var postsSlide = document.querySelectorAll(".posts-slide");
        var genreSlide = document.querySelectorAll(".genre-slide");
        if (postsSlide.length > 0) {
            var tnsPostsSlider = tns({ container: "#posts-slide", mode: "carousel", speed: 700, items: 1, autoplay: true, controls: false, nav: true, autoplayButtonOutput: false });
        }
        if (genreSlide.length > 0) {
            var tnsPostsSlider = tns({ container: "#genre-slide", mode: "gallery", speed: 700, items: 3, autoplay: true, controls: true, nav: false, autoplayButtonOutput: false });
        }
    };
    tinyslider();
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    });
})()