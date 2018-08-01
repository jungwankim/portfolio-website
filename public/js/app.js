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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
module.exports = __webpack_require__(2);


/***/ }),
/* 1 */
/***/ (function(module, exports) {


/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

var hash = {};

$.fn.inViewItem = function () {
  var stack = [];
  var currentY = window.scrollY;
  $.each(hash, function (select, value) {
    if (currentY >= value) {
      stack.push(select);
      return true;
    } else {
      return false;
    }
  });
  return stack.pop();
};

$(function () {
  var navHeight = $('.navbar').height();
  var items = $(".navbar-nav .nav-link");

  $.each(items, function () {
    hash[$(this)[0].hash] = $($(this)[0].hash).offset().top - navHeight;
  });

  $(window).scroll(function () {
    var selectedItem = $('body').inViewItem();
    $(".navbar .active").removeClass("active");
    $(".navbar .nav-link").filter("[href='" + selectedItem + "']").addClass("active");
  });

  $(".navbar-nav .nav-link").on("click", function (event) {
    event.preventDefault();
    $(".navbar .active").removeClass("active");
    $(this).addClass("active");
    $('.navbar-collapse').hide();
    $('.dropdown-menu').hide();
    var topValue = hash[$(this)[0].hash];
    window.scrollTo({ top: topValue, behavior: "smooth" });
  });

  $(".navbar-brand").on("click", function (event) {
    event.preventDefault();
    $('.navbar-collapse').hide();
    $('.dropdown-menu').hide();
    $(".navbar .active").removeClass("active");
    window.scrollTo({ top: 0, behavior: "smooth" });
  });

  $(".navbar-toggler").on("click", function (event) {
    event.preventDefault();
    $('.navbar-collapse').toggle();
  });

  $(".dropdown-toggle").on("click", function (event) {
    event.preventDefault();
    $('.dropdown-menu').toggle();
  });

  if (navigator.userAgent.match(/(iPod|iPhone|iPad)/)) {
    $('.paraxify').removeClass('paraxify');
  }
});

/***/ }),
/* 2 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })
/******/ ]);