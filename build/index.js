/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/modules/NavStopScroll.js":
/*!**************************************!*\
  !*** ./src/modules/NavStopScroll.js ***!
  \**************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
class NavStopScroll {
  constructor() {
    this.body = document.querySelector('body');
    this.menuIcon = document.querySelector('.navigation__checkbox');
    this.menu = document.querySelector('.menu');
    // this.window = window;
    // this.topPosition;
    this.events();
  }
  events() {
    this.menuIcon.addEventListener('click', () => this.toggleStopScroll());
    this.menu.addEventListener('click', e => this.resetModal(e));
  }
  toggleStopScroll() {
    if (this.menuIcon.checked) {
      this.body.classList.add('stop-scroll');
    } else {
      this.body.classList.remove('stop-scroll');
    }
  }
  resetModal(e) {
    if (e.target.classList.contains('navigation__link')) this.menuIcon.checked = false;
  }
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (NavStopScroll);

/***/ }),

/***/ "./src/modules/StickyHeader.js":
/*!*************************************!*\
  !*** ./src/modules/StickyHeader.js ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
class StickyHeader {
  constructor() {
    this.navRoot = document.querySelector('.header');
    this.navBar = document.querySelector('.header__container');
    this.options = {
      root: null,
      rootMargin: "120px",
      threshold: 1
    };
    this.navObserver = new IntersectionObserver(this.stick.bind(this), this.options);
    this.events();
  }
  events() {
    this.navObserver.observe(this.navRoot);
  }
  stick(entries) {
    const [entry] = entries;
    if (!entry.isIntersecting) {
      this.navBar.classList.add('header__container--fixed');
    } else {
      this.navBar.classList.remove('header__container--fixed');
    }
  }
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (StickyHeader);

/***/ }),

/***/ "./css/styles.scss":
/*!*************************!*\
  !*** ./css/styles.scss ***!
  \*************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry needs to be wrapped in an IIFE because it needs to be isolated against other modules in the chunk.
(() => {
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _css_styles_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../css/styles.scss */ "./css/styles.scss");
/* harmony import */ var _modules_StickyHeader__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./modules/StickyHeader */ "./src/modules/StickyHeader.js");
/* harmony import */ var _modules_NavStopScroll_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./modules/NavStopScroll.js */ "./src/modules/NavStopScroll.js");



new _modules_StickyHeader__WEBPACK_IMPORTED_MODULE_1__["default"]();
let navStopScroll = new _modules_NavStopScroll_js__WEBPACK_IMPORTED_MODULE_2__["default"]();
})();

/******/ })()
;
//# sourceMappingURL=index.js.map