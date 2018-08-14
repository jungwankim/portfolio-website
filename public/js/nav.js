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
  var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
  var root = 'https://portfolio.app';

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
        $('.related-skills').html("");
        var _iteratorNormalCompletion = true;
        var _didIteratorError = false;
        var _iteratorError = undefined;

        try {
          for (var _iterator = project.skill_tags[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
            var skillTag = _step.value;

            $('.related-skills').append("<a class='skill-tag' href='/skills/" + skillTag + "' title='" + skillTag + "'>" + skillTag + "</a>");
          }
        } catch (err) {
          _didIteratorError = true;
          _iteratorError = err;
        } finally {
          try {
            if (!_iteratorNormalCompletion && _iterator.return) {
              _iterator.return();
            }
          } finally {
            if (_didIteratorError) {
              throw _iteratorError;
            }
          }
        }

        if (project.starting_date) {
          $('.starting').html(project.starting_date);
          $('.ending').html(project.ending_date);
        }

        $('.description').html(project.description);
        if (!$.isEmptyObject(project.url)) {
          $('.url').html("<a href='" + project.url + "' title='repository'>Git Repository</a>");
        } else {
          $('.url').html("");
        }
      } else if (dataset == 'work') {
        var work = JSON.parse(data);
        var startingDate = new Date(work.starting_date);
        var endingDate = new Date(work.ending_date);
        $('.company_name').html(work.company_name);
        $('.position').html(work.position);
        $('.location').html(work.location);
        $('.related-skills').html("");
        var _iteratorNormalCompletion2 = true;
        var _didIteratorError2 = false;
        var _iteratorError2 = undefined;

        try {
          for (var _iterator2 = work.skill_tags[Symbol.iterator](), _step2; !(_iteratorNormalCompletion2 = (_step2 = _iterator2.next()).done); _iteratorNormalCompletion2 = true) {
            var _skillTag = _step2.value;

            $('.related-skills').append("<a class='skill-tag' href='/skills/" + _skillTag + "' title='" + _skillTag + "'>" + _skillTag + "</a>");
          }
        } catch (err) {
          _didIteratorError2 = true;
          _iteratorError2 = err;
        } finally {
          try {
            if (!_iteratorNormalCompletion2 && _iterator2.return) {
              _iterator2.return();
            }
          } finally {
            if (_didIteratorError2) {
              throw _iteratorError2;
            }
          }
        }

        $('.starting').html(monthNames[startingDate.getUTCMonth()] + " " + startingDate.getFullYear() + " ~ " + monthNames[endingDate.getUTCMonth()] + " " + endingDate.getFullYear());
        $('.description').html(work.description);
      } else {
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