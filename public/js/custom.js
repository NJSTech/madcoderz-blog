/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/custom.js":
/*!********************************!*\
  !*** ./resources/js/custom.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(function () {
  "use strict";

  var a = $("body");
  $(window).on("load", function () {
    a.addClass("loaded");
  }), "1" === a.attr("data-preloader") ? a.append($("<div class='preloader preloader-1'><div><span></span></div></div>")) : "2" === a.attr("data-preloader") ? a.append($("<div class='preloader preloader-2'><div><svg class='loader-circular' viewBox='25 25 50 50'><circle class='loader-path' cx='50' cy='50' r='20' fill='none' stroke-width='2' stroke-miterlimit='10'/></svg></div></div>")) : "3" === a.attr("data-preloader") ? a.append($("<div class='preloader preloader-3'><div><span></span><span></span><span></span></div></div>")) : "4" === a.attr("data-preloader") ? a.append($("<div class='preloader preloader-4'><div><span></span></div></div>")) : "5" === a.attr("data-preloader") ? a.append($("<div class='preloader preloader-5'><div><span></span><span></span><span></span></div></div>")) : "6" === a.attr("data-preloader") ? a.append($("<div class='preloader preloader-6'><div><span></span><span></span><span></span></div></div>")) : "7" === a.attr("data-preloader") ? a.append($("<div class='preloader preloader-7'><div><span></span><span></span><span></span><span></span><span></span></div></div>")) : "8" === a.attr("data-preloader") ? a.append($("<div class='preloader preloader-8'><div><span></span><span></span><span></span><span></span></div></div>")) : "9" === a.attr("data-preloader") ? a.append($("<div class='preloader preloader-9'><div><span class='spinner-box'><span></span><span></div></div>")) : "10" === a.attr("data-preloader") ? a.append($("<div class='preloader preloader-10'><div><h6 class='heading-uppercase'>Loading</h6><span class='spinner'></span></div></div>")) : "11" === a.attr("data-preloader") && a.append($("<div class='preloader preloader-11'><div><span class='spinner'><span></div></div>"));
  var e = $(".nav"),
      o = $(".nav-toggle-btn");
  o.on("click", function (a) {
    var o = $(".nav-dropdown"),
        s = $(".sub-dropdown"),
        n = $(".dropdown-menu"),
        r = $(".sub-dropdown-menu");
    e.hasClass("nav-show") ? (e.removeClass("nav-show"), n.hasClass("dropdown-menu-show") && (n.removeClass("dropdown-menu-show"), o.removeClass("dropdown-minus")), r.hasClass("sub-dropdown-menu-show") && (r.removeClass("sub-dropdown-menu-show"), s.removeClass("sub-dropdown-minus"))) : e.addClass("nav-show"), a.stopPropagation();
  }), o.on("click", function () {
    o.hasClass("nav-toggle-close") ? o.removeClass("nav-toggle-close") : o.addClass("nav-toggle-close");
  });
  var s = $(".nav-dropdown .nav-link"),
      n = $(".sub-dropdown a");

  if (s.on("click", function () {
    var a = $(this).parent(".nav-dropdown").children(".dropdown-menu");
    a.hasClass("dropdown-menu-show") ? a.removeClass("dropdown-menu-show") : a.addClass("dropdown-menu-show");
  }), n.on("click", function (a) {
    var e = $(this).parent(".sub-dropdown").children(".sub-dropdown-menu");
    e.hasClass("sub-dropdown-menu-show") ? e.removeClass("sub-dropdown-menu-show") : e.addClass("sub-dropdown-menu-show"), a.stopPropagation();
  }), s.on("click", function () {
    var a = $(this).parent(".nav-dropdown").children(".dropdown-menu"),
        e = $(this).parent(".nav-dropdown");
    a.hasClass("dropdown-menu-show") ? e.addClass("dropdown-minus") : e.removeClass("dropdown-minus");
  }), n.on("click", function () {
    var a = $(this).parent(".sub-dropdown").children(".sub-dropdown-menu"),
        e = $(this).parent(".sub-dropdown");
    a.hasClass("sub-dropdown-menu-show") ? e.addClass("sub-dropdown-minus") : e.removeClass("sub-dropdown-minus");
  }), $(document).on("click", function (a) {
    if (0 === $(a.target).closest(".nav").length) {
      if (e.hasClass("nav-show")) {
        var s = $(".dropdown-menu"),
            n = $(".sub-dropdown-menu");
        e.removeClass("nav-show"), s.hasClass("dropdown-menu-show") && (s.removeClass("dropdown-menu-show"), $(".nav-dropdown").removeClass("dropdown-minus")), n.hasClass("sub-dropdown-menu-show") && (n.removeClass("sub-dropdown-menu-show"), $(".sub-dropdown").removeClass("sub-dropdown-minus"));
      }

      o.hasClass("nav-toggle-close") && o.removeClass("nav-toggle-close");
    }
  }), $(".navbar a[href='#']").on("click", function (a) {
    a.preventDefault();
  }), e.hasClass("mr-auto") && o.addClass("left"), $(".navbar-sticky").length) {
    var r = $(".navbar-sticky"),
        t = r.offset().top;
    $(window).on("scroll", function () {
      var a = $(".navbar-placeholder");
      $(window).scrollTop() >= t ? (r.addClass("navbar-sticky-apply"), a.addClass("navbar-placeholder-padding")) : (r.removeClass("navbar-sticky-apply"), a.removeClass("navbar-placeholder-padding")), $(window).scrollTop() >= t + 20 ? r.addClass("navbar-shrink") : r.removeClass("navbar-shrink");
    }), $("<div class='navbar-placeholder'></div>").insertAfter(".navbar-sticky");
  }

  var l = $(".fullscreen-menu"),
      d = $(".fullscreen-toggle-btn");
  d.on("click", function (a) {
    l.hasClass("fullscreen-menu-show") ? l.removeClass("fullscreen-menu-show") : l.addClass("fullscreen-menu-show"), a.stopPropagation();
  }), d.on("click", function () {
    d.hasClass("fullscreen-toggle-hide") ? d.removeClass("fullscreen-toggle-hide") : d.addClass("fullscreen-toggle-hide");
  }), $(document).on("click", function () {
    l.hasClass("fullscreen-menu-show") && (l.removeClass("fullscreen-menu-show"), d.removeClass("fullscreen-toggle-hide"));
  }), $(".nav-megadropdown").on("click", function () {
    var a = $(this).children(".mega-menu"),
        e = $(this).children(".nav-link");
    a.hasClass("mega-menu-show") ? (a.removeClass("mega-menu-show"), e.removeClass("nav-link-minus")) : (a.addClass("mega-menu-show"), e.addClass("nav-link-minus"));
  });
  var i = $(".mega-menu");
  o.on("click", function () {
    i.hasClass("mega-menu-show") && (i.removeClass("mega-menu-show"), $(".nav-link").removeClass("nav-link-minus"));
  }), $(document).on("click", function (a) {
    0 === $(a.target).closest(".nav").length && i.hasClass("mega-menu-show") && (i.removeClass("mega-menu-show"), $(".nav-link").removeClass("nav-link-minus"));
  }), $(".sidebar-dropdown-link").on("click", function () {
    var a = $(this).parent().children(".sidebar-dropdown"),
        e = $(this);
    a.hasClass("sidebar-dropdown-show") ? (a.removeClass("sidebar-dropdown-show"), e.removeClass("minus")) : (a.addClass("sidebar-dropdown-show"), e.addClass("minus"));
  });
  var c = $(".sidebar-nav-toggle"),
      p = $(".sidebar-nav-content");
  c.on("click", function () {
    c.hasClass("sidebar-nav-toggle-close") ? (c.removeClass("sidebar-nav-toggle-close"), p.removeClass("sidebar-nav-show")) : (c.addClass("sidebar-nav-toggle-close"), p.addClass("sidebar-nav-show"));
  }), $(".sidebar-menu a[href='#']").on("click", function (a) {
    a.preventDefault();
  });
  var u = $(".search-wrapper");
  $(".search-toggle").on("click", function (a) {
    u.hasClass("search-wrapper-show") ? u.removeClass("search-wrapper-show") : u.addClass("search-wrapper-show"), a.stopPropagation();
  }), $(document).on("click", function (a) {
    0 === $(a.target).closest(".search-wrapper div[class^='col-']").length && u.hasClass("search-wrapper-show") && u.removeClass("search-wrapper-show");
  });
  var v = $(".navbar-fixed");
  $(window).on("scroll", function () {
    $(window).scrollTop() >= 10 ? v.addClass("navbar-shrink") : v.removeClass("navbar-shrink");
  });
  var h = $("html,body");
  $(".scrolldown-btn, .scrolldown, .navbar a").on("click", function (a) {
    h.animate({
      scrollTop: $(this.hash).offset().top
    }, 700, "easeInOutQuart"), a.preventDefault();
  });
  var m = $(".scrolltotop");
  $(window).on("scroll", function () {
    $(this).scrollTop() > 700 ? m.addClass("scrolltotop-show") : m.removeClass("scrolltotop-show");
  }), m.on("click", function () {
    return h.animate({
      scrollTop: 0
    }, 600, "easeInOutQuart"), !1;
  }), $(".owl-carousel").each(function () {
    var a = $(this),
        e = {
      items: a.data("owl-items"),
      margin: a.data("owl-margin"),
      loop: a.data("owl-loop"),
      center: a.data("owl-center"),
      mouseDrag: a.data("owl-mouseDrag"),
      touchDrag: a.data("owl-touchDrag"),
      pullDrag: a.data("owl-pullDrag"),
      freeDrag: a.data("owl-freeDrag"),
      stagePadding: a.data("owl-stagePadding"),
      autoWidth: a.data("owl-autoWidth"),
      startPosition: a.data("owl-startPosition"),
      URLhashListener: a.data("owl-URLhashListener"),
      nav: a.data("owl-nav"),
      rewind: a.data("owl-rewind"),
      navElement: a.data("owl-navElement"),
      slideBy: a.data("owl-slideBy"),
      dots: a.data("owl-dots"),
      dotsEach: a.data("owl-dotsEach"),
      autoplay: a.data("owl-autoplay"),
      autoplayTimeout: a.data("owl-autoplayTimeout"),
      smartSpeed: a.data("owl-smartSpeed"),
      fluidSpeed: a.data("owl-fluidSpeed"),
      autoplaySpeed: a.data("owl-autoplaySpeed"),
      navSpeed: a.data("owl-navSpeed"),
      dotsSpeed: a.data("owl-dotsSpeed"),
      dragEndSpeed: a.data("owl-dragEndSpeed"),
      callback: a.data("owl-callback"),
      video: a.data("owl-video"),
      videoHeight: a.data("owl-videoHeight"),
      videoWidth: a.data("owl-videoWidth"),
      itemElement: a.data("owl-itemElement"),
      stageElement: a.data("owl-stageElement"),
      navContainer: a.data("owl-navContainer"),
      dotsContainer: a.data("owl-dotsContainer")
    },
        o = {
      responsive: {
        0: {
          items: a.data("owl-xs")
        },
        576: {
          items: a.data("owl-sm")
        },
        768: {
          items: a.data("owl-md")
        },
        992: {
          items: a.data("owl-lg")
        },
        1200: {
          items: a.data("owl-xl")
        }
      }
    };
    a.owlCarousel($.extend({
      rewind: !0,
      navText: ["<i class='icon-control-start'></i>", "<i class='icon-control-end'></i>"],
      autoHeight: !0,
      autoplayTimeout: 4e3,
      autoplayHoverPause: !0
    }, e, o));
  });
  var w = $("#homePortfolioPrev");
  $("#homePortfolioNext").on("click", function () {
    $("#homePortfolioSlider").trigger("next.owl.carousel", [300]);
  }), w.on("click", function () {
    $("#homePortfolioSlider").trigger("prev.owl.carousel", [300]);
  });
  var g = $(".blog-masonry").imagesLoaded(function () {
    g.masonry({
      itemSelector: ".blog-post-box"
    });
  }),
      f = $(".masonry").imagesLoaded(function () {
    f.masonry({
      itemSelector: ".masonry-item"
    });
  });
  $(".lightbox-image").each(function () {
    $(this).magnificPopup({
      type: "image",
      fixedContentPos: !1,
      removalDelay: 200,
      closeOnContentClick: !0,
      image: {
        titleSrc: "data-image-title"
      }
    });
  }), $(".gallery-wrapper").each(function () {
    $(this).magnificPopup({
      delegate: "a",
      removalDelay: "200",
      type: "image",
      fixedContentPos: !1,
      gallery: {
        enabled: !0
      },
      image: {
        titleSrc: "data-gallery-title"
      }
    });
  }), $(".popup-youtube").each(function () {
    var a = $(this),
        e = a.attr("data-youtube-src");
    a.magnificPopup({
      items: {
        src: e
      },
      type: "iframe",
      fixedContentPos: !1,
      removalDelay: 200,
      preloader: !1,
      iframe: {
        patterns: {
          youtube: {
            index: "youtube.com/",
            id: "v=",
            src: e
          }
        },
        srcAction: "iframe_src"
      }
    });
  }), $(".popup-vimeo").each(function () {
    var a = $(this),
        e = a.attr("data-vimeo-src");
    a.magnificPopup({
      items: {
        src: e
      },
      type: "iframe",
      fixedContentPos: !1,
      removalDelay: 200,
      preloader: !1,
      iframe: {
        patterns: {
          vimeo: {
            index: "vimeo.com/",
            id: "/",
            src: e
          }
        },
        srcAction: "iframe_src"
      }
    });
  }), $(".countdown").each(function () {
    var a = $(this).attr("data-countdown");
    $(this).countdown(a, function (a) {
      $(this).html(a.strftime('<div><h2 class="font-weight-normal">%D</h2><h6 class="heading-uppercase">Days</h6></div><div><h2 class="font-weight-normal">%H</h2><h6 class="heading-uppercase">Hours</h6></div><div><h2 class="font-weight-normal">%M</h2><h6 class="heading-uppercase">Minutes</h6></div><div><h2 class="font-weight-normal">%S</h2><h6 class="heading-uppercase">Seconds</h6></div>'));
    });
  }), $(".countdown-basic").each(function () {
    var a = $(this).attr("data-countdown");
    $(this).countdown(a, function (a) {
      $(this).html(a.strftime("%D days %H:%M:%S"));
    });
  }), $(".accordion-title").each(function () {
    var a = $(this);

    if (a.on("click", function () {
      var e = a.parent("li"),
          o = this.nextElementSibling;
      e.hasClass("active") ? (e.removeClass("active"), o.style.maxHeight = null) : (e.addClass("active"), a.closest(".accordion").hasClass("accordion-oneopen") && (a.closest(".accordion").children("li").removeClass("active"), e.addClass("active"), a.parents(".accordion-oneopen").find(".accordion-content").css("max-height", "0")), o.style.maxHeight = o.scrollHeight + "px");
    }), a.parents(".accordion").find("li").hasClass("active")) {
      var e = a.parents(".accordion").find("li.active").children(".accordion-content"),
          o = e.prop("scrollHeight");
      e.css({
        "max-height": o + "px"
      });
    }
  }), $(".product-quantity .button-circle").on("click", function () {
    var a = $(this),
        e = a.parent().find("input").val();
    if ($(this).hasClass("inc")) var o = parseFloat(e) + 1;else if (e > 1) o = parseFloat(e) - 1;else o = 1;
    a.parent().find("input").val(o);
  }), $(".return-login-btn").on("click", function () {
    var a = $(".return-login");
    a.hasClass("return-login-show") ? a.removeClass("return-login-show") : a.addClass("return-login-show");
  });
  var C = $(".create-account-toggle input");
  C.on("click", function () {
    var a = $(".create-account-box");
    C.is(":checked") ? a.addClass("create-account-box-show") : a.removeClass("create-account-box-show");
  });
  var b,
      k,
      y,
      x,
      S = $(".gmap");
  if (S.length) for (var P = 0; P < S.length; P++) {
    y = (b = S[P]).dataset.latitude, x = b.dataset.longitude, k = "#" + b.id, new GMaps({
      el: k,
      lat: y,
      lng: x,
      zoom: 16,
      scrollwheel: !1,
      styles: []
    }).addMarker({
      lat: y,
      lng: x
    });
  }
  $("#contactform").on("submit", function (a) {
    var e = $("#name").val(),
        o = $("#email").val(),
        s = $("#subject").val(),
        n = $("#message").val();
    ("" === e && $("#name").addClass("error-color"), "" === o && $("#email").addClass("error-color"), "" === s && $("#subject").addClass("error-color"), "" === n) ? $("#message").addClass("error-color") : ($.ajax({
      url: "../../assets/php/contact-form.php",
      data: $(this).serialize(),
      type: "POST",
      success: function success(a) {
        $("#success").addClass("show-result"), $("#contactform").each(function () {
          this.reset();
        });
      },
      error: function error(a) {
        $("#error").addClass("show-result");
      }
    }), $("#contactform input, #contactform textarea").removeClass("error-color"));
    a.preventDefault();
  });
});

/***/ }),

/***/ "./resources/js/home.js":
/*!******************************!*\
  !*** ./resources/js/home.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {



/***/ }),

/***/ 2:
/*!*************************************************************!*\
  !*** multi ./resources/js/custom.js ./resources/js/home.js ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! F:\madcoderz\htdocs\madcoderz-blog\resources\js\custom.js */"./resources/js/custom.js");
module.exports = __webpack_require__(/*! F:\madcoderz\htdocs\madcoderz-blog\resources\js\home.js */"./resources/js/home.js");


/***/ })

/******/ });