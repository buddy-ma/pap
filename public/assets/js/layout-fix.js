    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 400) {
            $("header").addClass("fixed");
            document.getElementById("logo").src = "assets/images/logo/en_wh_art.png";
        } else {
            $("header").removeClass("fixed");
            document.getElementById("logo").src = "assets/images/logo/en_art.png";
        }
    });
