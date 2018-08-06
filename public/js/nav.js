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
/******/ 	return __webpack_require__(__webpack_require__.s = 5);
/******/ })
/************************************************************************/
/******/ ({

/***/ 5:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(6);


/***/ }),

/***/ 6:
/***/ (function(module, exports) {



$(function () {

  var root = 'https://jkwan.info';

  $('.thumbnail-nav .item-link').on('click', function (event) {
    event.preventDefault();
    var skill = $(this).attr('title');
    var request_uri = $(this).attr('href');
    var dataset = $(this).attr('dataset');

    $('.thumbnail-nav .item-link').removeClass('active');
    $(this).addClass('active');

    $.ajax({
      url: root + request_uri,
      method: 'GET'
    }).then(function (data) {
      if (dataset == "project") {
        var project = JSON.parse(data);
        $('.title').html(project.title);
        $('.subtitle').html(project.subtitle);
        $('.starting').html(project.starting_date);
        $('.ending').html(project.ending_date);
        $('.description').html(project.description);
        $('.url').html(project.url);
      } else if (dataset == 'work') {
        var work = JSON.parse(data);
        $('.company_name').html(work.company_name);
        $('.position').html(work.position);
        $('.location').html(work.location);
        $('.starting').html(work.starting_date);
        $('.ending').html(work.ending_date);
        $('.description').html(work.description);
      } else {
        console.log($(this));
        $('.skill').html('<h1>' + skill + '</h1>');
        $('.projects').html("");
        $('.works').html("");
        var works = data.works;
        var projects = data.projects;
        if (!$.isEmptyObject(works)) {
          $('.works').append("<h3>Realted Works</h3>");
          for (var _work in works) {
            var line = "<a href='/works/" + works[_work] + "'>" + _work + "</a><br/>";
            $('.works').append(line);
          }
        }

        if (!$.isEmptyObject(projects)) {
          $('.projects').append("<h3>Realted Projects</h3>");
          for (var _project in projects) {
            var _line = "<a href='/projects/" + projects[_project] + "'>" + _project + "</a><br/>";
            $('.projects').append(_line);
          }
        }
      }
    });
  });
});

/***/ })

/******/ });