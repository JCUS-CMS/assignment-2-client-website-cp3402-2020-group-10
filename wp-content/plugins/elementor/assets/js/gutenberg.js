<<<<<<< HEAD
/*! elementor - v3.0.8.1 - 14-09-2020 */
=======
/*! elementor - v3.0.7 - 09-09-2020 */
>>>>>>> origin/KyungYul-Noh
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
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
<<<<<<< HEAD
/******/ 	return __webpack_require__(__webpack_require__.s = 745);
=======
/******/ 	return __webpack_require__(__webpack_require__.s = 744);
>>>>>>> origin/KyungYul-Noh
/******/ })
/************************************************************************/
/******/ ({

<<<<<<< HEAD
/***/ 106:
=======
/***/ 103:
>>>>>>> origin/KyungYul-Noh
/***/ (function(module, exports) {

module.exports = function (bitmap, value) {
  return {
    enumerable: !(bitmap & 1),
    configurable: !(bitmap & 2),
    writable: !(bitmap & 4),
    value: value
  };
};


/***/ }),

<<<<<<< HEAD
/***/ 113:
/***/ (function(module, exports, __webpack_require__) {

var isObject = __webpack_require__(30);
var document = __webpack_require__(18).document;
=======
/***/ 109:
/***/ (function(module, exports, __webpack_require__) {

var isObject = __webpack_require__(30);
var document = __webpack_require__(17).document;
>>>>>>> origin/KyungYul-Noh
// typeof document.createElement is 'object' in old IE
var is = isObject(document) && isObject(document.createElement);
module.exports = function (it) {
  return is ? document.createElement(it) : {};
};


/***/ }),

<<<<<<< HEAD
/***/ 114:
=======
/***/ 110:
>>>>>>> origin/KyungYul-Noh
/***/ (function(module, exports) {

module.exports = false;


/***/ }),

<<<<<<< HEAD
/***/ 121:
/***/ (function(module, exports, __webpack_require__) {

// fallback for non-array-like ES3 and non-enumerable old V8 strings
var cof = __webpack_require__(50);
=======
/***/ 12:
/***/ (function(module, exports, __webpack_require__) {

var store = __webpack_require__(67)('wks');
var uid = __webpack_require__(68);
var Symbol = __webpack_require__(17).Symbol;
var USE_SYMBOL = typeof Symbol == 'function';

var $exports = module.exports = function (name) {
  return store[name] || (store[name] =
    USE_SYMBOL && Symbol[name] || (USE_SYMBOL ? Symbol : uid)('Symbol.' + name));
};

$exports.store = store;


/***/ }),

/***/ 120:
/***/ (function(module, exports, __webpack_require__) {

// fallback for non-array-like ES3 and non-enumerable old V8 strings
var cof = __webpack_require__(46);
>>>>>>> origin/KyungYul-Noh
// eslint-disable-next-line no-prototype-builtins
module.exports = Object('z').propertyIsEnumerable(0) ? Object : function (it) {
  return cof(it) == 'String' ? it.split('') : Object(it);
};


/***/ }),

<<<<<<< HEAD
/***/ 124:
=======
/***/ 123:
>>>>>>> origin/KyungYul-Noh
/***/ (function(module, exports, __webpack_require__) {

// 7.1.1 ToPrimitive(input [, PreferredType])
var isObject = __webpack_require__(30);
// instead of the ES6 spec version, we didn't implement @@toPrimitive case
// and the second argument - flag - preferred type is a string
module.exports = function (it, S) {
  if (!isObject(it)) return it;
  var fn, val;
  if (S && typeof (fn = it.toString) == 'function' && !isObject(val = fn.call(it))) return val;
  if (typeof (fn = it.valueOf) == 'function' && !isObject(val = fn.call(it))) return val;
  if (!S && typeof (fn = it.toString) == 'function' && !isObject(val = fn.call(it))) return val;
  throw TypeError("Can't convert object to primitive value");
};


/***/ }),

<<<<<<< HEAD
/***/ 13:
/***/ (function(module, exports, __webpack_require__) {

var store = __webpack_require__(76)('wks');
var uid = __webpack_require__(77);
var Symbol = __webpack_require__(18).Symbol;
var USE_SYMBOL = typeof Symbol == 'function';

var $exports = module.exports = function (name) {
  return store[name] || (store[name] =
    USE_SYMBOL && Symbol[name] || (USE_SYMBOL ? Symbol : uid)('Symbol.' + name));
};

$exports.store = store;


/***/ }),

/***/ 131:
/***/ (function(module, exports, __webpack_require__) {

module.exports = !__webpack_require__(27) && !__webpack_require__(35)(function () {
  return Object.defineProperty(__webpack_require__(113)('div'), 'a', { get: function () { return 7; } }).a != 7;
=======
/***/ 129:
/***/ (function(module, exports, __webpack_require__) {

module.exports = !__webpack_require__(27) && !__webpack_require__(33)(function () {
  return Object.defineProperty(__webpack_require__(109)('div'), 'a', { get: function () { return 7; } }).a != 7;
>>>>>>> origin/KyungYul-Noh
});


/***/ }),

<<<<<<< HEAD
/***/ 147:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(76)('native-function-to-string', Function.toString);
=======
/***/ 145:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(67)('native-function-to-string', Function.toString);
>>>>>>> origin/KyungYul-Noh


/***/ }),

<<<<<<< HEAD
/***/ 18:
=======
/***/ 17:
>>>>>>> origin/KyungYul-Noh
/***/ (function(module, exports) {

// https://github.com/zloirock/core-js/issues/86#issuecomment-115759028
var global = module.exports = typeof window != 'undefined' && window.Math == Math
  ? window : typeof self != 'undefined' && self.Math == Math ? self
  // eslint-disable-next-line no-new-func
  : Function('return this')();
if (typeof __g == 'number') __g = global; // eslint-disable-line no-undef


/***/ }),

<<<<<<< HEAD
/***/ 189:
=======
/***/ 18:
/***/ (function(module, exports, __webpack_require__) {

var isObject = __webpack_require__(30);
module.exports = function (it) {
  if (!isObject(it)) throw TypeError(it + ' is not an object!');
  return it;
};


/***/ }),

/***/ 182:
>>>>>>> origin/KyungYul-Noh
/***/ (function(module, exports, __webpack_require__) {

// 0 -> Array#forEach
// 1 -> Array#map
// 2 -> Array#filter
// 3 -> Array#some
// 4 -> Array#every
// 5 -> Array#find
// 6 -> Array#findIndex
<<<<<<< HEAD
var ctx = __webpack_require__(80);
var IObject = __webpack_require__(121);
var toObject = __webpack_require__(99);
var toLength = __webpack_require__(45);
=======
var ctx = __webpack_require__(73);
var IObject = __webpack_require__(120);
var toObject = __webpack_require__(96);
var toLength = __webpack_require__(43);
>>>>>>> origin/KyungYul-Noh
var asc = __webpack_require__(216);
module.exports = function (TYPE, $create) {
  var IS_MAP = TYPE == 1;
  var IS_FILTER = TYPE == 2;
  var IS_SOME = TYPE == 3;
  var IS_EVERY = TYPE == 4;
  var IS_FIND_INDEX = TYPE == 6;
  var NO_HOLES = TYPE == 5 || IS_FIND_INDEX;
  var create = $create || asc;
  return function ($this, callbackfn, that) {
    var O = toObject($this);
    var self = IObject(O);
    var f = ctx(callbackfn, that, 3);
    var length = toLength(self.length);
    var index = 0;
    var result = IS_MAP ? create($this, length) : IS_FILTER ? create($this, 0) : undefined;
    var val, res;
    for (;length > index; index++) if (NO_HOLES || index in self) {
      val = self[index];
      res = f(val, index, O);
      if (TYPE) {
        if (IS_MAP) result[index] = res;   // map
        else if (res) switch (TYPE) {
          case 3: return true;             // some
          case 5: return val;              // find
          case 6: return index;            // findIndex
          case 2: result.push(val);        // filter
        } else if (IS_EVERY) return false; // every
      }
    }
    return IS_FIND_INDEX ? -1 : IS_SOME || IS_EVERY ? IS_EVERY : result;
  };
};


/***/ }),

<<<<<<< HEAD
/***/ 20:
/***/ (function(module, exports, __webpack_require__) {

var isObject = __webpack_require__(30);
module.exports = function (it) {
  if (!isObject(it)) throw TypeError(it + ' is not an object!');
  return it;
};


/***/ }),

=======
>>>>>>> origin/KyungYul-Noh
/***/ 216:
/***/ (function(module, exports, __webpack_require__) {

// 9.4.2.3 ArraySpeciesCreate(originalArray, length)
var speciesConstructor = __webpack_require__(217);

module.exports = function (original, length) {
  return new (speciesConstructor(original))(length);
};


/***/ }),

/***/ 217:
/***/ (function(module, exports, __webpack_require__) {

var isObject = __webpack_require__(30);
var isArray = __webpack_require__(218);
<<<<<<< HEAD
var SPECIES = __webpack_require__(13)('species');
=======
var SPECIES = __webpack_require__(12)('species');
>>>>>>> origin/KyungYul-Noh

module.exports = function (original) {
  var C;
  if (isArray(original)) {
    C = original.constructor;
    // cross-realm fallback
    if (typeof C == 'function' && (C === Array || isArray(C.prototype))) C = undefined;
    if (isObject(C)) {
      C = C[SPECIES];
      if (C === null) C = undefined;
    }
  } return C === undefined ? Array : C;
};


/***/ }),

/***/ 218:
/***/ (function(module, exports, __webpack_require__) {

// 7.2.2 IsArray(argument)
<<<<<<< HEAD
var cof = __webpack_require__(50);
=======
var cof = __webpack_require__(46);
>>>>>>> origin/KyungYul-Noh
module.exports = Array.isArray || function isArray(arg) {
  return cof(arg) == 'Array';
};


/***/ }),

<<<<<<< HEAD
/***/ 26:
=======
/***/ 25:
>>>>>>> origin/KyungYul-Noh
/***/ (function(module, exports, __webpack_require__) {

"use strict";

// 22.1.3.8 Array.prototype.find(predicate, thisArg = undefined)
<<<<<<< HEAD
var $export = __webpack_require__(37);
var $find = __webpack_require__(189)(5);
=======
var $export = __webpack_require__(34);
var $find = __webpack_require__(182)(5);
>>>>>>> origin/KyungYul-Noh
var KEY = 'find';
var forced = true;
// Shouldn't skip holes
if (KEY in []) Array(1)[KEY](function () { forced = false; });
$export($export.P + $export.F * forced, 'Array', {
  find: function find(callbackfn /* , that = undefined */) {
    return $find(this, callbackfn, arguments.length > 1 ? arguments[1] : undefined);
  }
});
<<<<<<< HEAD
__webpack_require__(89)(KEY);
=======
__webpack_require__(87)(KEY);
>>>>>>> origin/KyungYul-Noh


/***/ }),

/***/ 27:
/***/ (function(module, exports, __webpack_require__) {

// Thank's IE8 for his funny defineProperty
<<<<<<< HEAD
module.exports = !__webpack_require__(35)(function () {
=======
module.exports = !__webpack_require__(33)(function () {
>>>>>>> origin/KyungYul-Noh
  return Object.defineProperty({}, 'a', { get: function () { return 7; } }).a != 7;
});


/***/ }),

/***/ 29:
/***/ (function(module, exports, __webpack_require__) {

<<<<<<< HEAD
var dP = __webpack_require__(49);
var createDesc = __webpack_require__(106);
=======
var dP = __webpack_require__(45);
var createDesc = __webpack_require__(103);
>>>>>>> origin/KyungYul-Noh
module.exports = __webpack_require__(27) ? function (object, key, value) {
  return dP.f(object, key, createDesc(1, value));
} : function (object, key, value) {
  object[key] = value;
  return object;
};


/***/ }),

/***/ 30:
/***/ (function(module, exports) {

module.exports = function (it) {
  return typeof it === 'object' ? it !== null : typeof it === 'function';
};


/***/ }),

<<<<<<< HEAD
/***/ 35:
=======
/***/ 33:
>>>>>>> origin/KyungYul-Noh
/***/ (function(module, exports) {

module.exports = function (exec) {
  try {
    return !!exec();
  } catch (e) {
    return true;
  }
};


/***/ }),

<<<<<<< HEAD
/***/ 37:
/***/ (function(module, exports, __webpack_require__) {

var global = __webpack_require__(18);
var core = __webpack_require__(57);
var hide = __webpack_require__(29);
var redefine = __webpack_require__(39);
var ctx = __webpack_require__(80);
=======
/***/ 34:
/***/ (function(module, exports, __webpack_require__) {

var global = __webpack_require__(17);
var core = __webpack_require__(54);
var hide = __webpack_require__(29);
var redefine = __webpack_require__(37);
var ctx = __webpack_require__(73);
>>>>>>> origin/KyungYul-Noh
var PROTOTYPE = 'prototype';

var $export = function (type, name, source) {
  var IS_FORCED = type & $export.F;
  var IS_GLOBAL = type & $export.G;
  var IS_STATIC = type & $export.S;
  var IS_PROTO = type & $export.P;
  var IS_BIND = type & $export.B;
  var target = IS_GLOBAL ? global : IS_STATIC ? global[name] || (global[name] = {}) : (global[name] || {})[PROTOTYPE];
  var exports = IS_GLOBAL ? core : core[name] || (core[name] = {});
  var expProto = exports[PROTOTYPE] || (exports[PROTOTYPE] = {});
  var key, own, out, exp;
  if (IS_GLOBAL) source = name;
  for (key in source) {
    // contains in native
    own = !IS_FORCED && target && target[key] !== undefined;
    // export native or passed
    out = (own ? target : source)[key];
    // bind timers to global for call from export context
    exp = IS_BIND && own ? ctx(out, global) : IS_PROTO && typeof out == 'function' ? ctx(Function.call, out) : out;
    // extend global
    if (target) redefine(target, key, out, type & $export.U);
    // export
    if (exports[key] != out) hide(exports, key, exp);
    if (IS_PROTO && expProto[key] != out) expProto[key] = out;
  }
};
global.core = core;
// type bitmap
$export.F = 1;   // forced
$export.G = 2;   // global
$export.S = 4;   // static
$export.P = 8;   // proto
$export.B = 16;  // bind
$export.W = 32;  // wrap
$export.U = 64;  // safe
$export.R = 128; // real proto method for `library`
module.exports = $export;


/***/ }),

<<<<<<< HEAD
/***/ 39:
/***/ (function(module, exports, __webpack_require__) {

var global = __webpack_require__(18);
var hide = __webpack_require__(29);
var has = __webpack_require__(64);
var SRC = __webpack_require__(77)('src');
var $toString = __webpack_require__(147);
var TO_STRING = 'toString';
var TPL = ('' + $toString).split(TO_STRING);

__webpack_require__(57).inspectSource = function (it) {
=======
/***/ 37:
/***/ (function(module, exports, __webpack_require__) {

var global = __webpack_require__(17);
var hide = __webpack_require__(29);
var has = __webpack_require__(61);
var SRC = __webpack_require__(68)('src');
var $toString = __webpack_require__(145);
var TO_STRING = 'toString';
var TPL = ('' + $toString).split(TO_STRING);

__webpack_require__(54).inspectSource = function (it) {
>>>>>>> origin/KyungYul-Noh
  return $toString.call(it);
};

(module.exports = function (O, key, val, safe) {
  var isFunction = typeof val == 'function';
  if (isFunction) has(val, 'name') || hide(val, 'name', key);
  if (O[key] === val) return;
  if (isFunction) has(val, SRC) || hide(val, SRC, O[key] ? '' + O[key] : TPL.join(String(key)));
  if (O === global) {
    O[key] = val;
  } else if (!safe) {
    delete O[key];
    hide(O, key, val);
  } else if (O[key]) {
    O[key] = val;
  } else {
    hide(O, key, val);
  }
// add fake Function#toString for correct work wrapped methods / constructors with methods like LoDash isNative
})(Function.prototype, TO_STRING, function toString() {
  return typeof this == 'function' && this[SRC] || $toString.call(this);
});


/***/ }),

<<<<<<< HEAD
/***/ 43:
=======
/***/ 42:
>>>>>>> origin/KyungYul-Noh
/***/ (function(module, exports) {

// 7.2.1 RequireObjectCoercible(argument)
module.exports = function (it) {
  if (it == undefined) throw TypeError("Can't call method on  " + it);
  return it;
};


/***/ }),

<<<<<<< HEAD
/***/ 45:
/***/ (function(module, exports, __webpack_require__) {

// 7.1.15 ToLength
var toInteger = __webpack_require__(59);
=======
/***/ 43:
/***/ (function(module, exports, __webpack_require__) {

// 7.1.15 ToLength
var toInteger = __webpack_require__(57);
>>>>>>> origin/KyungYul-Noh
var min = Math.min;
module.exports = function (it) {
  return it > 0 ? min(toInteger(it), 0x1fffffffffffff) : 0; // pow(2, 53) - 1 == 9007199254740991
};


/***/ }),

<<<<<<< HEAD
/***/ 49:
/***/ (function(module, exports, __webpack_require__) {

var anObject = __webpack_require__(20);
var IE8_DOM_DEFINE = __webpack_require__(131);
var toPrimitive = __webpack_require__(124);
=======
/***/ 45:
/***/ (function(module, exports, __webpack_require__) {

var anObject = __webpack_require__(18);
var IE8_DOM_DEFINE = __webpack_require__(129);
var toPrimitive = __webpack_require__(123);
>>>>>>> origin/KyungYul-Noh
var dP = Object.defineProperty;

exports.f = __webpack_require__(27) ? Object.defineProperty : function defineProperty(O, P, Attributes) {
  anObject(O);
  P = toPrimitive(P, true);
  anObject(Attributes);
  if (IE8_DOM_DEFINE) try {
    return dP(O, P, Attributes);
  } catch (e) { /* empty */ }
  if ('get' in Attributes || 'set' in Attributes) throw TypeError('Accessors not supported!');
  if ('value' in Attributes) O[P] = Attributes.value;
  return O;
};


/***/ }),

<<<<<<< HEAD
/***/ 50:
=======
/***/ 46:
>>>>>>> origin/KyungYul-Noh
/***/ (function(module, exports) {

var toString = {}.toString;

module.exports = function (it) {
  return toString.call(it).slice(8, -1);
};


/***/ }),

<<<<<<< HEAD
/***/ 57:
=======
/***/ 54:
>>>>>>> origin/KyungYul-Noh
/***/ (function(module, exports) {

var core = module.exports = { version: '2.6.11' };
if (typeof __e == 'number') __e = core; // eslint-disable-line no-undef


/***/ }),

<<<<<<< HEAD
/***/ 59:
=======
/***/ 57:
>>>>>>> origin/KyungYul-Noh
/***/ (function(module, exports) {

// 7.1.4 ToInteger
var ceil = Math.ceil;
var floor = Math.floor;
module.exports = function (it) {
  return isNaN(it = +it) ? 0 : (it > 0 ? floor : ceil)(it);
};


/***/ }),

<<<<<<< HEAD
/***/ 64:
=======
/***/ 61:
>>>>>>> origin/KyungYul-Noh
/***/ (function(module, exports) {

var hasOwnProperty = {}.hasOwnProperty;
module.exports = function (it, key) {
  return hasOwnProperty.call(it, key);
};


/***/ }),

<<<<<<< HEAD
/***/ 745:
=======
/***/ 67:
/***/ (function(module, exports, __webpack_require__) {

var core = __webpack_require__(54);
var global = __webpack_require__(17);
var SHARED = '__core-js_shared__';
var store = global[SHARED] || (global[SHARED] = {});

(module.exports = function (key, value) {
  return store[key] || (store[key] = value !== undefined ? value : {});
})('versions', []).push({
  version: core.version,
  mode: __webpack_require__(110) ? 'pure' : 'global',
  copyright: '© 2019 Denis Pushkarev (zloirock.ru)'
});


/***/ }),

/***/ 68:
/***/ (function(module, exports) {

var id = 0;
var px = Math.random();
module.exports = function (key) {
  return 'Symbol('.concat(key === undefined ? '' : key, ')_', (++id + px).toString(36));
};


/***/ }),

/***/ 73:
/***/ (function(module, exports, __webpack_require__) {

// optional / simple context binding
var aFunction = __webpack_require__(91);
module.exports = function (fn, that, length) {
  aFunction(fn);
  if (that === undefined) return fn;
  switch (length) {
    case 1: return function (a) {
      return fn.call(that, a);
    };
    case 2: return function (a, b) {
      return fn.call(that, a, b);
    };
    case 3: return function (a, b, c) {
      return fn.call(that, a, b, c);
    };
  }
  return function (/* ...args */) {
    return fn.apply(that, arguments);
  };
};


/***/ }),

/***/ 744:
>>>>>>> origin/KyungYul-Noh
/***/ (function(module, exports, __webpack_require__) {

"use strict";


<<<<<<< HEAD
__webpack_require__(26);
=======
__webpack_require__(25);
>>>>>>> origin/KyungYul-Noh

/* global jQuery, ElementorGutenbergSettings */
(function ($) {
  'use strict';

  var ElementorGutenbergApp = {
    cacheElements: function cacheElements() {
      var self = this;
      self.isElementorMode = ElementorGutenbergSettings.isElementorMode;
      self.cache = {};
      self.cache.$gutenberg = $('#editor');
      self.cache.$switchMode = $($('#elementor-gutenberg-button-switch-mode').html());
      self.cache.$switchModeButton = self.cache.$switchMode.find('#elementor-switch-mode-button');
      self.bindEvents();
      self.toggleStatus();
      wp.data.subscribe(function () {
        setTimeout(function () {
          self.buildPanel();
        }, 1);
      });
    },
    buildPanel: function buildPanel() {
      var self = this;

      if (!self.cache.$gutenberg.find('#elementor-switch-mode').length) {
        self.cache.$gutenberg.find('.edit-post-header-toolbar').append(self.cache.$switchMode);
      }

      if (!$('#elementor-editor').length) {
        self.cache.$editorPanel = $($('#elementor-gutenberg-panel').html()); // TODO: `editor-block-list__layout` class for WP < 5.3 support.

        self.cache.$gurenbergBlockList = self.cache.$gutenberg.find('.editor-block-list__layout, .editor-post-text-editor, .block-editor-block-list__layout');
        self.cache.$gurenbergBlockList.after(self.cache.$editorPanel);
        self.cache.$editorPanelButton = self.cache.$editorPanel.find('#elementor-go-to-edit-page-link');
        self.cache.$editorPanelButton.on('click', function (event) {
          event.preventDefault();
          self.animateLoader();
          var documentTitle = wp.data.select('core/editor').getEditedPostAttribute('title');

          if (!documentTitle) {
            wp.data.dispatch('core/editor').editPost({
              title: 'Elementor #' + $('#post_ID').val()
            });
          }

          wp.data.dispatch('core/editor').savePost();
          self.redirectWhenSave();
        });
      }
    },
    bindEvents: function bindEvents() {
      var self = this;
      self.cache.$switchModeButton.on('click', function () {
        if (self.isElementorMode) {
          elementorCommon.dialogsManager.createWidget('confirm', {
            message: elementorAdmin.translate('back_to_wordpress_editor_message'),
            headerMessage: elementorAdmin.translate('back_to_wordpress_editor_header'),
            strings: {
              confirm: elementorAdmin.translate('yes'),
              cancel: elementorAdmin.translate('cancel')
            },
            defaultOption: 'confirm',
            onConfirm: function onConfirm() {
              var wpEditor = wp.data.dispatch('core/editor');
              wpEditor.editPost({
                gutenberg_elementor_mode: false
              });
              wpEditor.savePost();
              self.isElementorMode = !self.isElementorMode;
              self.toggleStatus();
            }
          }).show();
        } else {
          self.isElementorMode = !self.isElementorMode;
          self.toggleStatus();
          self.cache.$editorPanelButton.trigger('click');
        }
      });
    },
    redirectWhenSave: function redirectWhenSave() {
      var self = this;
      setTimeout(function () {
        if (wp.data.select('core/editor').isSavingPost()) {
          self.redirectWhenSave();
        } else {
          location.href = ElementorGutenbergSettings.editLink;
        }
      }, 300);
    },
    animateLoader: function animateLoader() {
      this.cache.$editorPanelButton.addClass('elementor-animate');
    },
    toggleStatus: function toggleStatus() {
      jQuery('body').toggleClass('elementor-editor-active', this.isElementorMode).toggleClass('elementor-editor-inactive', !this.isElementorMode);
    },
    init: function init() {
      this.cacheElements();
    }
  };
  $(function () {
    ElementorGutenbergApp.init();
  });
})(jQuery);

/***/ }),

<<<<<<< HEAD
/***/ 76:
/***/ (function(module, exports, __webpack_require__) {

var core = __webpack_require__(57);
var global = __webpack_require__(18);
var SHARED = '__core-js_shared__';
var store = global[SHARED] || (global[SHARED] = {});

(module.exports = function (key, value) {
  return store[key] || (store[key] = value !== undefined ? value : {});
})('versions', []).push({
  version: core.version,
  mode: __webpack_require__(114) ? 'pure' : 'global',
  copyright: '© 2019 Denis Pushkarev (zloirock.ru)'
});


/***/ }),

/***/ 77:
/***/ (function(module, exports) {

var id = 0;
var px = Math.random();
module.exports = function (key) {
  return 'Symbol('.concat(key === undefined ? '' : key, ')_', (++id + px).toString(36));
};


/***/ }),

/***/ 80:
/***/ (function(module, exports, __webpack_require__) {

// optional / simple context binding
var aFunction = __webpack_require__(95);
module.exports = function (fn, that, length) {
  aFunction(fn);
  if (that === undefined) return fn;
  switch (length) {
    case 1: return function (a) {
      return fn.call(that, a);
    };
    case 2: return function (a, b) {
      return fn.call(that, a, b);
    };
    case 3: return function (a, b, c) {
      return fn.call(that, a, b, c);
    };
  }
  return function (/* ...args */) {
    return fn.apply(that, arguments);
  };
};


/***/ }),

/***/ 89:
/***/ (function(module, exports, __webpack_require__) {

// 22.1.3.31 Array.prototype[@@unscopables]
var UNSCOPABLES = __webpack_require__(13)('unscopables');
=======
/***/ 87:
/***/ (function(module, exports, __webpack_require__) {

// 22.1.3.31 Array.prototype[@@unscopables]
var UNSCOPABLES = __webpack_require__(12)('unscopables');
>>>>>>> origin/KyungYul-Noh
var ArrayProto = Array.prototype;
if (ArrayProto[UNSCOPABLES] == undefined) __webpack_require__(29)(ArrayProto, UNSCOPABLES, {});
module.exports = function (key) {
  ArrayProto[UNSCOPABLES][key] = true;
};


/***/ }),

<<<<<<< HEAD
/***/ 95:
=======
/***/ 91:
>>>>>>> origin/KyungYul-Noh
/***/ (function(module, exports) {

module.exports = function (it) {
  if (typeof it != 'function') throw TypeError(it + ' is not a function!');
  return it;
};


/***/ }),

<<<<<<< HEAD
/***/ 99:
/***/ (function(module, exports, __webpack_require__) {

// 7.1.13 ToObject(argument)
var defined = __webpack_require__(43);
=======
/***/ 96:
/***/ (function(module, exports, __webpack_require__) {

// 7.1.13 ToObject(argument)
var defined = __webpack_require__(42);
>>>>>>> origin/KyungYul-Noh
module.exports = function (it) {
  return Object(defined(it));
};


/***/ })

/******/ });
//# sourceMappingURL=gutenberg.js.map