$(document).ready(function() {
    $("#search-header").click(function() {
        var setOpenClose = $("#form-content").attr("style");
        // console.log(setOpenClose);
        if (setOpenClose == "display:none") {
            $("#form-content").attr("style", "display:block");
        } else {
            $("#form-content").attr("style", "display:none");
        }
    });
    $(".search-mobile").click(function() {
        var setOpenClose = $("#form-content").attr("style");
        if (setOpenClose == "display:none") {
            $("#form-content").attr("style", "display:block");
            $("#menu-mobile").attr("style", "display:none");
        } else {
            $("#form-content").attr("style", "display:none");

        }
    });
    $("#hambugBtn").click(function() {
        var setOpenClose = $("#menu-mobile").attr("style");
        if (setOpenClose == "display:none") {
            $("#menu-mobile").attr("style", "display:block");
            $("#form-content").attr("style", "display:none");
        } else {
            $("#menu-mobile").attr("style", "display:none");

        }
    });
    var offset = $("#form-content").offset();
    var w = $(window);
    w.scroll(function() {
        z = offset.top - w.scrollTop();
        // console.log(z);
        if (z <= (-600)) {
            $("#form-content").attr("style", "display:none");
        }
    });
});