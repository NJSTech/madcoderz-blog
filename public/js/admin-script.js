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
/******/ 	return __webpack_require__(__webpack_require__.s = 3);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/admin-script.js":
/*!**************************************!*\
  !*** ./resources/js/admin-script.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(function () {
  "use strict";

  $(function () {
    $("#menu").metisMenu();
  }), $(".scroolbar-notification").slimScroll({
    height: "300px",
    color: "rgb(236, 230, 230)",
    disableFadeOut: !0,
    borderRadius: 0,
    size: "5px",
    alwaysVisible: !0
  }), $(".table-body").slimScroll({
    height: "460px",
    color: "rgb(236, 230, 230)",
    disableFadeOut: !0,
    borderRadius: 0,
    size: "5px",
    alwaysVisible: !0
  }), $(".quicknote").slimScroll({
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
  }), $(".sidebar-toggle").on("click", function () {
    var i = window.innerWidth;
    i > 990 ? $("#app").removeClass("mini-app") : i < 990 && $("#app").toggleClass("mini-app");
  }), $(function () {
    var i = window.innerWidth;
    i > 990 ? $("#app").removeClass("mini-app") : i < 990 && $(".mini-sidebar").removeClass("container-fluid");
  }), window.addEventListener("resize", function (i) {
    var e = window.innerWidth;
    e > 990 ? ($("#app").removeClass("mini-app"), $(".mini-sidebar").addClass("container-fluid")) : e < 990 && $(".mini-sidebar").removeClass("container-fluid");
  }), $("#preview_image").on("change", function () {
    var i = $(".image-preview");
    this.files && $.each(this.files, function (e, a) {
      if (!/\.(jpe?g|png|gif)$/i.test(a.name)) return alert(a.name + " is not an image");
      var l = new FileReader();
      $(l).on("load", function () {
        i.append("<span class='upload-wrapper'><span class='upload-wrapper-delete'>X</span><img src='" + this.result + "'></span>");
      }), l.readAsDataURL(a), $(document).on("click", ".upload-wrapper-delete", function (i) {
        $(this).parents(".upload-wrapper").remove(), $(this).remove();
      });
    });
  });
});

/***/ }),

/***/ "./resources/js/category.js":
/*!**********************************!*\
  !*** ./resources/js/category.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(function () {
  "use strict";

  $(document).on('click', '.category-destroy', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    var url = 'categories/destroy/' + id;
    Swal.fire({
      title: 'Are you sure?',
      // text: "You won't be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then(function (result) {
      if (result.value) {
        Swal.fire('Deleted!', 'Your file has been deleted.', 'success');
        $.ajax({
          type: "get",
          url: url,
          // data: {id:id},
          success: function success(data) {
            setTimeout(function () {
              location.reload();
            }, 2000);
          }
        });
      }
    });
  });
});

/***/ }),

/***/ "./resources/js/dashboard.js":
/*!***********************************!*\
  !*** ./resources/js/dashboard.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

//title:Demo code for dashboard
$(function () {
  /* ChartJS
   * -------
   * Data and config for chartjs
   */
  'use strict';
});

/***/ }),

/***/ "./resources/js/tag.js":
/*!*****************************!*\
  !*** ./resources/js/tag.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

<<<<<<< HEAD
throw new Error("Module build failed (from ./node_modules/babel-loader/lib/index.js):\nError: ENOENT: no such file or directory, open 'F:\\madcoderz\\htdocs\\madcoderz-blog\\resources\\js\\tag.js'");
=======
$(function () {
  "use strict";

  $(document).on('click', '.tag-destroy', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    var url = 'tags/destroy/' + id;
    Swal.fire({
      title: 'Are you sure?',
      // text: "You won't be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then(function (result) {
      if (result.value) {
        Swal.fire('Deleted!', 'Your file has been deleted.', 'success');
        $.ajax({
          type: "GET",
          url: url,
          // data: {id:id},
          success: function success(data) {
            setTimeout(function () {
              location.reload();
            }, 2000);
          }
        });
      }
    });
  });
});
>>>>>>> nj-dev

/***/ }),

/***/ 3:
/*!*************************************************************************************************************************!*\
  !*** multi ./resources/js/admin-script.js ./resources/js/dashboard.js ./resources/js/category.js ./resources/js/tag.js ***!
  \*************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! F:\madcoderz\htdocs\madcoderz-blog\resources\js\admin-script.js */"./resources/js/admin-script.js");
__webpack_require__(/*! F:\madcoderz\htdocs\madcoderz-blog\resources\js\dashboard.js */"./resources/js/dashboard.js");
__webpack_require__(/*! F:\madcoderz\htdocs\madcoderz-blog\resources\js\category.js */"./resources/js/category.js");
module.exports = __webpack_require__(/*! F:\madcoderz\htdocs\madcoderz-blog\resources\js\tag.js */"./resources/js/tag.js");


/***/ })

/******/ });