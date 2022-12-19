$(document).ready(function () {
    if ($(window).width() < 1024) {
        $(window).scroll(function () {
            var pos_body = $("html,body").scrollTop();
            if (pos_body > 70) {
                $(".header").addClass("sticky");
            } else if (pos_body <= 0) {
                $(".header").removeClass("sticky");
            }
        });
    }
    if ($(window).width() > 1024) {
        $(window).scroll(function () {
            var pos_body = $("html,body").scrollTop();
            if (pos_body > 170) {
                $(".header").addClass("sticky");
            } else if (pos_body <= 0) {
                $(".header").removeClass("sticky");
            }
        });
    }
});
