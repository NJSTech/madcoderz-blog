$(function() {
    "use strict";
    $(function() {
        $("#menu").metisMenu();
    }), $(".scroolbar-notification").slimScroll({
        height: "300px",
        color: "rgb(236, 230, 230)",
        disableFadeOut: !0,
        borderRadius: 0,
        size: "5px",
        alwaysVisible: !0
    }), 
    // $(".table-body").slimScroll({
    //     height: "460px",
    //     color: "rgb(236, 230, 230)",
    //     disableFadeOut: !0,
    //     borderRadius: 0,
    //     size: "5px",
    //     alwaysVisible: !0
    // }),
    $(".quicknote").slimScroll({
        height: "350px",
        color: "rgb(236, 230, 230)",
        disableFadeOut: !0,
        borderRadius: 0,
        size: "4px",
        allowPageScroll: !0,
        alwaysVisible: !1
    }), $(".inbox-chat").slimScroll({
        height: "290px",
        color: "rgb(236, 230, 230)",
        disableFadeOut: !0,
        borderRadius: 0,
        size: "2px",
        allowPageScroll: !0,
        alwaysVisible: !1
    }), $(".message-chat-list").slimScroll({
        height: "650px",
        color: "rgb(236, 230, 230)",
        disableFadeOut: !0,
        borderRadius: 0,
        size: "0px",
        allowPageScroll: !0,
        alwaysVisible: !1
    }), $(".chat-window").slimScroll({
        height: "650px",
        color: "rgb(236, 230, 230)",
        disableFadeOut: !0,
        borderRadius: 0,
        size: "0px",
        allowPageScroll: !0,
        alwaysVisible: !1
    }), $(".sidebar-toggle").on("click", function() {
        var i = window.innerWidth;
        i > 990 ? $("#app").removeClass("mini-app") : i < 990 && $("#app").toggleClass("mini-app")
    }), $(function() {
        var i = window.innerWidth;
        i > 990 ? $("#app").removeClass("mini-app") : i < 990 && $(".mini-sidebar").removeClass("container-fluid")
    }), window.addEventListener("resize", function(i) {
        var e = window.innerWidth;
        e > 990 ? ($("#app").removeClass("mini-app"), $(".mini-sidebar").addClass("container-fluid")) : e < 990 && $(".mini-sidebar").removeClass("container-fluid")
    }), $("#preview_image").on("change", function() {
        var i = $(".image-preview");
        this.files && $.each(this.files, function(e, a) {
            if (!/\.(jpe?g|png|gif)$/i.test(a.name)) return alert(a.name + " is not an image");
            var l = new FileReader;
            $(l).on("load", function() {
                i.append("<span class='upload-wrapper'><span class='upload-wrapper-delete'>X</span><img src='" + this.result + "'></span>")
            }), l.readAsDataURL(a), $(document).on("click", ".upload-wrapper-delete", function(i) {
                $(this).parents(".upload-wrapper").remove(), $(this).remove()
            })
        })
    })
});