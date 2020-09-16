<<<<<<< HEAD
/*! elementor - v3.0.8.1 - 14-09-2020 */
=======
<<<<<<< HEAD
/*! elementor - v3.0.8.1 - 14-09-2020 */
=======
/*! elementor - v3.0.7 - 09-09-2020 */
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
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
/******/ 	return __webpack_require__(__webpack_require__.s = 712);
/******/ })
/************************************************************************/
/******/ ({

<<<<<<< HEAD
/***/ 106:
=======
<<<<<<< HEAD
/***/ 106:
=======
/***/ 103:
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
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
/***/ 108:
=======
<<<<<<< HEAD
/***/ 108:
=======
/***/ 105:
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
/***/ (function(module, exports, __webpack_require__) {

"use strict";

<<<<<<< HEAD
var at = __webpack_require__(146)(true);
=======
<<<<<<< HEAD
var at = __webpack_require__(146)(true);
=======
var at = __webpack_require__(144)(true);
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li

 // `AdvanceStringIndex` abstract operation
// https://tc39.github.io/ecma262/#sec-advancestringindex
module.exports = function (S, index, unicode) {
  return index + (unicode ? at(S, index).length : 1);
};


/***/ }),

<<<<<<< HEAD
/***/ 109:
=======
<<<<<<< HEAD
/***/ 109:
=======
/***/ 106:
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
/***/ (function(module, exports, __webpack_require__) {

"use strict";

// 21.2.5.3 get RegExp.prototype.flags
<<<<<<< HEAD
var anObject = __webpack_require__(20);
=======
<<<<<<< HEAD
var anObject = __webpack_require__(20);
=======
var anObject = __webpack_require__(18);
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
module.exports = function () {
  var that = anObject(this);
  var result = '';
  if (that.global) result += 'g';
  if (that.ignoreCase) result += 'i';
  if (that.multiline) result += 'm';
  if (that.unicode) result += 'u';
  if (that.sticky) result += 'y';
  return result;
};


/***/ }),

<<<<<<< HEAD
/***/ 113:
/***/ (function(module, exports, __webpack_require__) {

var isObject = __webpack_require__(30);
var document = __webpack_require__(18).document;
=======
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
>>>>>>> yanzhou-li
// typeof document.createElement is 'object' in old IE
var is = isObject(document) && isObject(document.createElement);
module.exports = function (it) {
  return is ? document.createElement(it) : {};
};


/***/ }),

<<<<<<< HEAD
/***/ 114:
=======
<<<<<<< HEAD
/***/ 114:
=======
/***/ 110:
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
/***/ (function(module, exports) {

module.exports = false;


/***/ }),

<<<<<<< HEAD
/***/ 116:
/***/ (function(module, exports, __webpack_require__) {

// getting tag from 19.1.3.6 Object.prototype.toString()
var cof = __webpack_require__(50);
var TAG = __webpack_require__(13)('toStringTag');
=======
<<<<<<< HEAD
/***/ 116:
/***/ (function(module, exports, __webpack_require__) {

// getting tag from 19.1.3.6 Object.prototype.toString()
var cof = __webpack_require__(50);
var TAG = __webpack_require__(13)('toStringTag');
=======
/***/ 113:
/***/ (function(module, exports, __webpack_require__) {

// getting tag from 19.1.3.6 Object.prototype.toString()
var cof = __webpack_require__(46);
var TAG = __webpack_require__(12)('toStringTag');
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
// ES3 wrong here
var ARG = cof(function () { return arguments; }()) == 'Arguments';

// fallback for IE11 Script Access Denied error
var tryGet = function (it, key) {
  try {
    return it[key];
  } catch (e) { /* empty */ }
};

module.exports = function (it) {
  var O, T, B;
  return it === undefined ? 'Undefined' : it === null ? 'Null'
    // @@toStringTag case
    : typeof (T = tryGet(O = Object(it), TAG)) == 'string' ? T
    // builtinTag case
    : ARG ? cof(O)
    // ES3 arguments fallback
    : (B = cof(O)) == 'Object' && typeof O.callee == 'function' ? 'Arguments' : B;
};


/***/ }),

<<<<<<< HEAD
/***/ 121:
/***/ (function(module, exports, __webpack_require__) {

// fallback for non-array-like ES3 and non-enumerable old V8 strings
var cof = __webpack_require__(50);
=======
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
>>>>>>> yanzhou-li
// eslint-disable-next-line no-prototype-builtins
module.exports = Object('z').propertyIsEnumerable(0) ? Object : function (it) {
  return cof(it) == 'String' ? it.split('') : Object(it);
};


/***/ }),

<<<<<<< HEAD
/***/ 123:
=======
<<<<<<< HEAD
/***/ 123:
=======
/***/ 122:
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
/***/ (function(module, exports, __webpack_require__) {

// 7.2.8 IsRegExp(argument)
var isObject = __webpack_require__(30);
<<<<<<< HEAD
var cof = __webpack_require__(50);
var MATCH = __webpack_require__(13)('match');
=======
<<<<<<< HEAD
var cof = __webpack_require__(50);
var MATCH = __webpack_require__(13)('match');
=======
var cof = __webpack_require__(46);
var MATCH = __webpack_require__(12)('match');
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
module.exports = function (it) {
  var isRegExp;
  return isObject(it) && ((isRegExp = it[MATCH]) !== undefined ? !!isRegExp : cof(it) == 'RegExp');
};


/***/ }),

<<<<<<< HEAD
/***/ 124:
=======
<<<<<<< HEAD
/***/ 124:
=======
/***/ 123:
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
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
>>>>>>> yanzhou-li
});


/***/ }),

<<<<<<< HEAD
/***/ 146:
/***/ (function(module, exports, __webpack_require__) {

var toInteger = __webpack_require__(59);
var defined = __webpack_require__(43);
=======
<<<<<<< HEAD
/***/ 146:
/***/ (function(module, exports, __webpack_require__) {

var toInteger = __webpack_require__(59);
var defined = __webpack_require__(43);
=======
/***/ 144:
/***/ (function(module, exports, __webpack_require__) {

var toInteger = __webpack_require__(57);
var defined = __webpack_require__(42);
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
// true  -> String#at
// false -> String#codePointAt
module.exports = function (TO_STRING) {
  return function (that, pos) {
    var s = String(defined(that));
    var i = toInteger(pos);
    var l = s.length;
    var a, b;
    if (i < 0 || i >= l) return TO_STRING ? '' : undefined;
    a = s.charCodeAt(i);
    return a < 0xd800 || a > 0xdbff || i + 1 === l || (b = s.charCodeAt(i + 1)) < 0xdc00 || b > 0xdfff
      ? TO_STRING ? s.charAt(i) : a
      : TO_STRING ? s.slice(i, i + 2) : (a - 0xd800 << 10) + (b - 0xdc00) + 0x10000;
  };
};


/***/ }),

<<<<<<< HEAD
/***/ 147:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(76)('native-function-to-string', Function.toString);
=======
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
/***/ 154:
/***/ (function(module, exports, __webpack_require__) {

// 7.3.20 SpeciesConstructor(O, defaultConstructor)
var anObject = __webpack_require__(18);
var aFunction = __webpack_require__(91);
var SPECIES = __webpack_require__(12)('species');
module.exports = function (O, D) {
  var C = anObject(O).constructor;
  var S;
  return C === undefined || (S = anObject(C)[SPECIES]) == undefined ? D : aFunction(S);
};
>>>>>>> yanzhou-li


/***/ }),

<<<<<<< HEAD
/***/ 18:
=======
/***/ 17:
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
/***/ (function(module, exports) {

// https://github.com/zloirock/core-js/issues/86#issuecomment-115759028
var global = module.exports = typeof window != 'undefined' && window.Math == Math
  ? window : typeof self != 'undefined' && self.Math == Math ? self
  // eslint-disable-next-line no-new-func
  : Function('return this')();
if (typeof __g == 'number') __g = global; // eslint-disable-line no-undef


/***/ }),

<<<<<<< HEAD
/***/ 180:
/***/ (function(module, exports, __webpack_require__) {

// 7.3.20 SpeciesConstructor(O, defaultConstructor)
var anObject = __webpack_require__(20);
var aFunction = __webpack_require__(95);
var SPECIES = __webpack_require__(13)('species');
module.exports = function (O, D) {
  var C = anObject(O).constructor;
  var S;
  return C === undefined || (S = anObject(C)[SPECIES]) == undefined ? D : aFunction(S);
=======
<<<<<<< HEAD
/***/ 180:
/***/ (function(module, exports, __webpack_require__) {

// 7.3.20 SpeciesConstructor(O, defaultConstructor)
var anObject = __webpack_require__(20);
var aFunction = __webpack_require__(95);
var SPECIES = __webpack_require__(13)('species');
module.exports = function (O, D) {
  var C = anObject(O).constructor;
  var S;
  return C === undefined || (S = anObject(C)[SPECIES]) == undefined ? D : aFunction(S);
=======
/***/ 18:
/***/ (function(module, exports, __webpack_require__) {

var isObject = __webpack_require__(30);
module.exports = function (it) {
  if (!isObject(it)) throw TypeError(it + ' is not an object!');
  return it;
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
};


/***/ }),

<<<<<<< HEAD
/***/ 189:
=======
<<<<<<< HEAD
/***/ 189:
=======
/***/ 182:
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
/***/ (function(module, exports, __webpack_require__) {

// 0 -> Array#forEach
// 1 -> Array#map
// 2 -> Array#filter
// 3 -> Array#some
// 4 -> Array#every
// 5 -> Array#find
// 6 -> Array#findIndex
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> yanzhou-li
var ctx = __webpack_require__(80);
var IObject = __webpack_require__(121);
var toObject = __webpack_require__(99);
var toLength = __webpack_require__(45);
<<<<<<< HEAD
=======
=======
var ctx = __webpack_require__(73);
var IObject = __webpack_require__(120);
var toObject = __webpack_require__(96);
var toLength = __webpack_require__(43);
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
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
/***/ 196:
=======
<<<<<<< HEAD
/***/ 196:
=======
/***/ 190:
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
/***/ (function(module, exports, __webpack_require__) {

"use strict";

<<<<<<< HEAD
var regexpExec = __webpack_require__(92);
__webpack_require__(37)({
=======
<<<<<<< HEAD
var regexpExec = __webpack_require__(92);
__webpack_require__(37)({
=======
var regexpExec = __webpack_require__(90);
__webpack_require__(34)({
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
  target: 'RegExp',
  proto: true,
  forced: regexpExec !== /./.exec
}, {
  exec: regexpExec
});


/***/ }),

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> yanzhou-li
/***/ 20:
/***/ (function(module, exports, __webpack_require__) {

var isObject = __webpack_require__(30);
module.exports = function (it) {
  if (!isObject(it)) throw TypeError(it + ' is not an object!');
  return it;
};


/***/ }),

<<<<<<< HEAD
=======
=======
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
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
<<<<<<< HEAD
var SPECIES = __webpack_require__(13)('species');
=======
var SPECIES = __webpack_require__(12)('species');
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li

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
<<<<<<< HEAD
var cof = __webpack_require__(50);
=======
var cof = __webpack_require__(46);
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
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
<<<<<<< HEAD
var $export = __webpack_require__(37);
var $find = __webpack_require__(189)(5);
=======
var $export = __webpack_require__(34);
var $find = __webpack_require__(182)(5);
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
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
<<<<<<< HEAD
__webpack_require__(89)(KEY);
=======
__webpack_require__(87)(KEY);
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li


/***/ }),

/***/ 27:
/***/ (function(module, exports, __webpack_require__) {

// Thank's IE8 for his funny defineProperty
<<<<<<< HEAD
module.exports = !__webpack_require__(35)(function () {
=======
<<<<<<< HEAD
module.exports = !__webpack_require__(35)(function () {
=======
module.exports = !__webpack_require__(33)(function () {
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
  return Object.defineProperty({}, 'a', { get: function () { return 7; } }).a != 7;
});


/***/ }),

/***/ 29:
/***/ (function(module, exports, __webpack_require__) {

<<<<<<< HEAD
var dP = __webpack_require__(49);
var createDesc = __webpack_require__(106);
=======
<<<<<<< HEAD
var dP = __webpack_require__(49);
var createDesc = __webpack_require__(106);
=======
var dP = __webpack_require__(45);
var createDesc = __webpack_require__(103);
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
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
=======
<<<<<<< HEAD
=======
/***/ 33:
/***/ (function(module, exports) {

module.exports = function (exec) {
  try {
    return !!exec();
  } catch (e) {
    return true;
  }
};


/***/ }),

>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
/***/ 334:
/***/ (function(module, exports, __webpack_require__) {

"use strict";


<<<<<<< HEAD
var anObject = __webpack_require__(20);
var sameValue = __webpack_require__(386);
var regExpExec = __webpack_require__(97);

// @@search logic
__webpack_require__(98)('search', 1, function (defined, SEARCH, $search, maybeCallNative) {
=======
<<<<<<< HEAD
var anObject = __webpack_require__(20);
var sameValue = __webpack_require__(386);
var regExpExec = __webpack_require__(97);

// @@search logic
__webpack_require__(98)('search', 1, function (defined, SEARCH, $search, maybeCallNative) {
=======
var anObject = __webpack_require__(18);
var sameValue = __webpack_require__(386);
var regExpExec = __webpack_require__(94);

// @@search logic
__webpack_require__(95)('search', 1, function (defined, SEARCH, $search, maybeCallNative) {
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
  return [
    // `String.prototype.search` method
    // https://tc39.github.io/ecma262/#sec-string.prototype.search
    function search(regexp) {
      var O = defined(this);
      var fn = regexp == undefined ? undefined : regexp[SEARCH];
      return fn !== undefined ? fn.call(regexp, O) : new RegExp(regexp)[SEARCH](String(O));
    },
    // `RegExp.prototype[@@search]` method
    // https://tc39.github.io/ecma262/#sec-regexp.prototype-@@search
    function (regexp) {
      var res = maybeCallNative($search, regexp, this);
      if (res.done) return res.value;
      var rx = anObject(regexp);
      var S = String(this);
      var previousLastIndex = rx.lastIndex;
      if (!sameValue(previousLastIndex, 0)) rx.lastIndex = 0;
      var result = regExpExec(rx, S);
      if (!sameValue(rx.lastIndex, previousLastIndex)) rx.lastIndex = previousLastIndex;
      return result === null ? -1 : result.index;
    }
  ];
});


/***/ }),

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> yanzhou-li
/***/ 35:
/***/ (function(module, exports) {

module.exports = function (exec) {
  try {
    return !!exec();
  } catch (e) {
    return true;
  }
};


/***/ }),

/***/ 37:
<<<<<<< HEAD
/***/ (function(module, exports, __webpack_require__) {

var global = __webpack_require__(18);
var core = __webpack_require__(57);
var hide = __webpack_require__(29);
var redefine = __webpack_require__(39);
var ctx = __webpack_require__(80);
=======
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
>>>>>>> yanzhou-li
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
=======
<<<<<<< HEAD
>>>>>>> yanzhou-li
/***/ 386:
/***/ (function(module, exports) {

// 7.2.9 SameValue(x, y)
module.exports = Object.is || function is(x, y) {
  // eslint-disable-next-line no-self-compare
  return x === y ? x !== 0 || 1 / x === 1 / y : x != x && y != y;
};


/***/ }),

/***/ 39:
<<<<<<< HEAD
=======
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
>>>>>>> yanzhou-li
/***/ (function(module, exports, __webpack_require__) {

var global = __webpack_require__(18);
var hide = __webpack_require__(29);
<<<<<<< HEAD
var has = __webpack_require__(64);
var SRC = __webpack_require__(77)('src');
var $toString = __webpack_require__(147);
var TO_STRING = 'toString';
var TPL = ('' + $toString).split(TO_STRING);

__webpack_require__(57).inspectSource = function (it) {
=======
var has = __webpack_require__(61);
var SRC = __webpack_require__(68)('src');
var $toString = __webpack_require__(145);
var TO_STRING = 'toString';
var TPL = ('' + $toString).split(TO_STRING);

__webpack_require__(54).inspectSource = function (it) {
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
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
<<<<<<< HEAD
/***/ 43:
=======
/***/ 386:
/***/ (function(module, exports) {

// 7.2.9 SameValue(x, y)
module.exports = Object.is || function is(x, y) {
  // eslint-disable-next-line no-self-compare
  return x === y ? x !== 0 || 1 / x === 1 / y : x != x && y != y;
};


/***/ }),

/***/ 42:
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
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
>>>>>>> yanzhou-li
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
>>>>>>> yanzhou-li
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
<<<<<<< HEAD
/***/ 50:
=======
/***/ 46:
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
/***/ (function(module, exports) {

var toString = {}.toString;

module.exports = function (it) {
  return toString.call(it).slice(8, -1);
};


/***/ }),

<<<<<<< HEAD
/***/ 57:
=======
<<<<<<< HEAD
/***/ 57:
=======
/***/ 54:
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
/***/ (function(module, exports) {

var core = module.exports = { version: '2.6.11' };
if (typeof __e == 'number') __e = core; // eslint-disable-line no-undef


/***/ }),

<<<<<<< HEAD
/***/ 59:
=======
<<<<<<< HEAD
/***/ 59:
=======
/***/ 57:
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
/***/ (function(module, exports) {

// 7.1.4 ToInteger
var ceil = Math.ceil;
var floor = Math.floor;
module.exports = function (it) {
  return isNaN(it = +it) ? 0 : (it > 0 ? floor : ceil)(it);
};


/***/ }),

<<<<<<< HEAD
/***/ 60:
=======
<<<<<<< HEAD
/***/ 60:
=======
/***/ 58:
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
/***/ (function(module, exports, __webpack_require__) {

"use strict";


<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> yanzhou-li
var anObject = __webpack_require__(20);
var toObject = __webpack_require__(99);
var toLength = __webpack_require__(45);
var toInteger = __webpack_require__(59);
var advanceStringIndex = __webpack_require__(108);
var regExpExec = __webpack_require__(97);
<<<<<<< HEAD
=======
=======
var anObject = __webpack_require__(18);
var toObject = __webpack_require__(96);
var toLength = __webpack_require__(43);
var toInteger = __webpack_require__(57);
var advanceStringIndex = __webpack_require__(105);
var regExpExec = __webpack_require__(94);
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
var max = Math.max;
var min = Math.min;
var floor = Math.floor;
var SUBSTITUTION_SYMBOLS = /\$([$&`']|\d\d?|<[^>]*>)/g;
var SUBSTITUTION_SYMBOLS_NO_NAMED = /\$([$&`']|\d\d?)/g;

var maybeToString = function (it) {
  return it === undefined ? it : String(it);
};

// @@replace logic
<<<<<<< HEAD
__webpack_require__(98)('replace', 2, function (defined, REPLACE, $replace, maybeCallNative) {
=======
<<<<<<< HEAD
__webpack_require__(98)('replace', 2, function (defined, REPLACE, $replace, maybeCallNative) {
=======
__webpack_require__(95)('replace', 2, function (defined, REPLACE, $replace, maybeCallNative) {
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
  return [
    // `String.prototype.replace` method
    // https://tc39.github.io/ecma262/#sec-string.prototype.replace
    function replace(searchValue, replaceValue) {
      var O = defined(this);
      var fn = searchValue == undefined ? undefined : searchValue[REPLACE];
      return fn !== undefined
        ? fn.call(searchValue, O, replaceValue)
        : $replace.call(String(O), searchValue, replaceValue);
    },
    // `RegExp.prototype[@@replace]` method
    // https://tc39.github.io/ecma262/#sec-regexp.prototype-@@replace
    function (regexp, replaceValue) {
      var res = maybeCallNative($replace, regexp, this, replaceValue);
      if (res.done) return res.value;

      var rx = anObject(regexp);
      var S = String(this);
      var functionalReplace = typeof replaceValue === 'function';
      if (!functionalReplace) replaceValue = String(replaceValue);
      var global = rx.global;
      if (global) {
        var fullUnicode = rx.unicode;
        rx.lastIndex = 0;
      }
      var results = [];
      while (true) {
        var result = regExpExec(rx, S);
        if (result === null) break;
        results.push(result);
        if (!global) break;
        var matchStr = String(result[0]);
        if (matchStr === '') rx.lastIndex = advanceStringIndex(S, toLength(rx.lastIndex), fullUnicode);
      }
      var accumulatedResult = '';
      var nextSourcePosition = 0;
      for (var i = 0; i < results.length; i++) {
        result = results[i];
        var matched = String(result[0]);
        var position = max(min(toInteger(result.index), S.length), 0);
        var captures = [];
        // NOTE: This is equivalent to
        //   captures = result.slice(1).map(maybeToString)
        // but for some reason `nativeSlice.call(result, 1, result.length)` (called in
        // the slice polyfill when slicing native arrays) "doesn't work" in safari 9 and
        // causes a crash (https://pastebin.com/N21QzeQA) when trying to debug it.
        for (var j = 1; j < result.length; j++) captures.push(maybeToString(result[j]));
        var namedCaptures = result.groups;
        if (functionalReplace) {
          var replacerArgs = [matched].concat(captures, position, S);
          if (namedCaptures !== undefined) replacerArgs.push(namedCaptures);
          var replacement = String(replaceValue.apply(undefined, replacerArgs));
        } else {
          replacement = getSubstitution(matched, S, position, captures, namedCaptures, replaceValue);
        }
        if (position >= nextSourcePosition) {
          accumulatedResult += S.slice(nextSourcePosition, position) + replacement;
          nextSourcePosition = position + matched.length;
        }
      }
      return accumulatedResult + S.slice(nextSourcePosition);
    }
  ];

    // https://tc39.github.io/ecma262/#sec-getsubstitution
  function getSubstitution(matched, str, position, captures, namedCaptures, replacement) {
    var tailPos = position + matched.length;
    var m = captures.length;
    var symbols = SUBSTITUTION_SYMBOLS_NO_NAMED;
    if (namedCaptures !== undefined) {
      namedCaptures = toObject(namedCaptures);
      symbols = SUBSTITUTION_SYMBOLS;
    }
    return $replace.call(replacement, symbols, function (match, ch) {
      var capture;
      switch (ch.charAt(0)) {
        case '$': return '$';
        case '&': return matched;
        case '`': return str.slice(0, position);
        case "'": return str.slice(tailPos);
        case '<':
          capture = namedCaptures[ch.slice(1, -1)];
          break;
        default: // \d\d?
          var n = +ch;
          if (n === 0) return match;
          if (n > m) {
            var f = floor(n / 10);
            if (f === 0) return match;
            if (f <= m) return captures[f - 1] === undefined ? ch.charAt(1) : captures[f - 1] + ch.charAt(1);
            return match;
          }
          capture = captures[n - 1];
      }
      return capture === undefined ? '' : capture;
    });
  }
});


/***/ }),

<<<<<<< HEAD
/***/ 64:
=======
<<<<<<< HEAD
/***/ 64:
=======
/***/ 61:
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
/***/ (function(module, exports) {

var hasOwnProperty = {}.hasOwnProperty;
module.exports = function (it, key) {
  return hasOwnProperty.call(it, key);
};


/***/ }),

<<<<<<< HEAD
=======
<<<<<<< HEAD
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

>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
/***/ 712:
/***/ (function(module, exports, __webpack_require__) {

"use strict";


<<<<<<< HEAD
__webpack_require__(60);
=======
<<<<<<< HEAD
__webpack_require__(60);

__webpack_require__(334);

__webpack_require__(81);

__webpack_require__(26);
=======
__webpack_require__(58);
>>>>>>> yanzhou-li

__webpack_require__(334);

__webpack_require__(81);

__webpack_require__(25);
>>>>>>> origin/KyungYul-Noh

(function ($) {
  var ElementorAdmin = elementorModules.ViewModule.extend({
    maintenanceMode: null,
    config: elementorAdminConfig,
    getDefaultElements: function getDefaultElements() {
      var elements = {
        $switchMode: $('#elementor-switch-mode'),
        $goToEditLink: $('#elementor-go-to-edit-page-link'),
        $switchModeInput: $('#elementor-switch-mode-input'),
        $switchModeButton: $('#elementor-switch-mode-button'),
        $elementorLoader: $('.elementor-loader'),
        $builderEditor: $('#elementor-editor'),
        $importButton: $('#elementor-import-template-trigger'),
        $importArea: $('#elementor-import-template-area'),
        $settingsForm: $('#elementor-settings-form'),
        $settingsTabsWrapper: $('#elementor-settings-tabs-wrapper'),
        $menuGetHelpLink: $('a[href="admin.php?page=go_knowledge_base_site"]'),
        $reMigrateGlobalsButton: $('.elementor-re-migrate-globals-button')
      };
      elements.$settingsFormPages = elements.$settingsForm.find('.elementor-settings-form-page');
      elements.$activeSettingsPage = elements.$settingsFormPages.filter('.elementor-active');
      elements.$settingsTabs = elements.$settingsTabsWrapper.children();
      elements.$activeSettingsTab = elements.$settingsTabs.filter('.nav-tab-active');
      return elements;
    },
    toggleStatus: function toggleStatus() {
      var isElementorMode = this.isElementorMode();
      elementorCommon.elements.$body.toggleClass('elementor-editor-active', isElementorMode).toggleClass('elementor-editor-inactive', !isElementorMode);
    },
    bindEvents: function bindEvents() {
      var self = this;
      self.elements.$switchModeButton.on('click', function (event) {
        event.preventDefault();

        if (self.isElementorMode()) {
          elementorCommon.dialogsManager.createWidget('confirm', {
            message: self.translate('back_to_wordpress_editor_message'),
            headerMessage: self.translate('back_to_wordpress_editor_header'),
            strings: {
              confirm: self.translate('yes'),
              cancel: self.translate('cancel')
            },
            defaultOption: 'confirm',
            onConfirm: function onConfirm() {
              self.elements.$switchModeInput.val('');
              self.toggleStatus();
            }
          }).show();
        } else {
          self.elements.$switchModeInput.val(true);
          var $wpTitle = $('#title');

          if (!$wpTitle.val()) {
            $wpTitle.val('Elementor #' + $('#post_ID').val());
          }

          if (wp.autosave) {
            wp.autosave.server.triggerSave();
          }

          self.animateLoader();
          $(document).on('heartbeat-tick.autosave', function () {
            elementorCommon.elements.$window.off('beforeunload.edit-post');
            location.href = self.elements.$goToEditLink.attr('href');
          });
          self.toggleStatus();
        }
      });
      self.elements.$goToEditLink.on('click', function () {
        self.animateLoader();
      });
      $('div.notice.elementor-message-dismissed').on('click', 'button.notice-dismiss, .elementor-button-notice-dismiss', function (event) {
        event.preventDefault();
        $.post(ajaxurl, {
          action: 'elementor_set_admin_notice_viewed',
          notice_id: $(this).closest('.elementor-message-dismissed').data('notice_id')
        });
        var $wrapperElm = $(this).closest('.elementor-message-dismissed');
        $wrapperElm.fadeTo(100, 0, function () {
          $wrapperElm.slideUp(100, function () {
            $wrapperElm.remove();
          });
        });
      });
      $('#elementor-clear-cache-button').on('click', function (event) {
        event.preventDefault();
        var $thisButton = $(this);
        $thisButton.removeClass('success').addClass('loading');
        $.post(ajaxurl, {
          action: 'elementor_clear_cache',
          _nonce: $thisButton.data('nonce')
        }).done(function () {
          $thisButton.removeClass('loading').addClass('success');
        });
      });
      $('#elementor-library-sync-button').on('click', function (event) {
        event.preventDefault();
        var $thisButton = $(this);
        $thisButton.removeClass('success').addClass('loading');
        $.post(ajaxurl, {
          action: 'elementor_reset_library',
          _nonce: $thisButton.data('nonce')
        }).done(function () {
          $thisButton.removeClass('loading').addClass('success');
        });
      });
      $('#elementor-replace-url-button').on('click', function (event) {
        event.preventDefault();
        var $this = $(this),
            $tr = $this.parents('tr'),
            $from = $tr.find('[name="from"]'),
            $to = $tr.find('[name="to"]');
        $this.removeClass('success').addClass('loading');
        $.post(ajaxurl, {
          action: 'elementor_replace_url',
          from: $from.val(),
          to: $to.val(),
          _nonce: $this.data('nonce')
        }).done(function (response) {
          $this.removeClass('loading');

          if (response.success) {
            $this.addClass('success');
          }

          elementorCommon.dialogsManager.createWidget('alert', {
            message: response.data
          }).show();
        });
      });
      $('#elementor_upgrade_fa_button').on('click', function (event) {
        event.preventDefault();
        var $updateButton = $(this);
        $updateButton.addClass('loading');
        elementorCommon.dialogsManager.createWidget('confirm', {
          id: 'confirm_fa_migration_admin_modal',
          message: self.translate('confirm_fa_migration_admin_modal_body'),
          headerMessage: self.translate('confirm_fa_migration_admin_modal_head'),
          strings: {
            confirm: self.translate('yes'),
            cancel: self.translate('cancel')
          },
          defaultOption: 'confirm',
          onConfirm: function onConfirm() {
            $updateButton.removeClass('error').addClass('loading');
            $.post(ajaxurl, $updateButton.data()).done(function (response) {
              $updateButton.removeClass('loading').addClass('success');
              $('#elementor_upgrade_fa_button').parent().append(response.data.message);
              var redirectTo = (location.search.split('redirect_to=')[1] || '').split('&')[0];

              if (redirectTo) {
                location.href = decodeURIComponent(redirectTo);
                return;
              }

              history.go(-1);
            }).fail(function () {
              $updateButton.removeClass('loading').addClass('error');
            });
          },
          onCancel: function onCancel() {
            $updateButton.removeClass('loading').addClass('error');
          }
        }).show();
      });
      self.elements.$settingsTabs.on({
        click: function click(event) {
          event.preventDefault();
          event.currentTarget.focus(); // Safari does not focus the tab automatically
        },
        focus: function focus() {
          // Using focus event to enable navigation by tab key
          var hrefWithoutHash = location.href.replace(/#.*/, '');
          history.pushState({}, '', hrefWithoutHash + this.hash);
          self.goToSettingsTabFromHash();
        }
      });
      $('select.elementor-rollback-select').on('change', function () {
        var $this = $(this),
            $rollbackButton = $this.next('.elementor-rollback-button'),
            placeholderText = $rollbackButton.data('placeholder-text'),
            placeholderUrl = $rollbackButton.data('placeholder-url');
        $rollbackButton.html(placeholderText.replace('{VERSION}', $this.val()));
        $rollbackButton.attr('href', placeholderUrl.replace('VERSION', $this.val()));
      }).trigger('change');
      $('.elementor-rollback-button').on('click', function (event) {
        event.preventDefault();
        var $this = $(this);
        elementorCommon.dialogsManager.createWidget('confirm', {
          headerMessage: self.translate('rollback_to_previous_version'),
          message: self.translate('rollback_confirm'),
          strings: {
            confirm: self.translate('yes'),
            cancel: self.translate('cancel')
          },
          onConfirm: function onConfirm() {
            $this.addClass('loading');
            location.href = $this.attr('href');
          }
        }).show();
      });
      self.elements.$reMigrateGlobalsButton.on('click', function (event) {
        event.preventDefault();
        var $this = $(event.currentTarget);
        elementorCommon.dialogsManager.createWidget('confirm', {
          headerMessage: self.translate('re_migrate_globals'),
          message: self.translate('re_migrate_globals_confirm'),
          strings: {
            confirm: self.translate('yes'),
            cancel: self.translate('cancel')
          },
          onConfirm: function onConfirm() {
            $this.removeClass('success').addClass('loading');
            elementorCommon.ajax.addRequest('re_migrate_globals', {
              success: function success() {
                return $this.removeClass('loading').addClass('success');
              }
            });
          }
        }).show();
      });
      $('.elementor_css_print_method select').on('change', function () {
        var $descriptions = $('.elementor-css-print-method-description');
        $descriptions.hide();
        $descriptions.filter('[data-value="' + $(this).val() + '"]').show();
      }).trigger('change');
    },
    onInit: function onInit() {
      elementorModules.ViewModule.prototype.onInit.apply(this, arguments);
      this.initTemplatesImport();
      this.initMaintenanceMode();
      this.goToSettingsTabFromHash();
      this.openGetHelpInNewTab();
      this.roleManager.init();
    },
    openGetHelpInNewTab: function openGetHelpInNewTab() {
      this.elements.$menuGetHelpLink.attr('target', '_blank');
    },
    initTemplatesImport: function initTemplatesImport() {
      if (!elementorCommon.elements.$body.hasClass('post-type-elementor_library')) {
        return;
      }

      var self = this,
          $importButton = self.elements.$importButton,
          $importArea = self.elements.$importArea;
      self.elements.$formAnchor = $('h1');
      $('#wpbody-content').find('.page-title-action:last').after($importButton);
      self.elements.$formAnchor.after($importArea);
      $importButton.on('click', function () {
        $('#elementor-import-template-area').toggle();
      });
    },
    initMaintenanceMode: function initMaintenanceMode() {
      var MaintenanceMode = __webpack_require__(713);

      this.maintenanceMode = new MaintenanceMode();
    },
    isElementorMode: function isElementorMode() {
      return !!this.elements.$switchModeInput.val();
    },
    animateLoader: function animateLoader() {
      this.elements.$goToEditLink.addClass('elementor-animate');
    },
    goToSettingsTabFromHash: function goToSettingsTabFromHash() {
      var hash = location.hash.slice(1);

      if (hash) {
        this.goToSettingsTab(hash);
      }
    },
    goToSettingsTab: function goToSettingsTab(tabName) {
      var $pages = this.elements.$settingsFormPages;

      if (!$pages.length) {
        return;
      }

      var $activePage = $pages.filter('#' + tabName);
      this.elements.$activeSettingsPage.removeClass('elementor-active');
      this.elements.$activeSettingsTab.removeClass('nav-tab-active');
      var $activeTab = this.elements.$settingsTabs.filter('#elementor-settings-' + tabName);
      $activePage.addClass('elementor-active');
      $activeTab.addClass('nav-tab-active');
      this.elements.$settingsForm.attr('action', 'options.php#' + tabName);
      this.elements.$activeSettingsPage = $activePage;
      this.elements.$activeSettingsTab = $activeTab;
    },
    translate: function translate(stringKey, templateArgs) {
      return elementorCommon.translate(stringKey, null, templateArgs, this.config.i18n);
    },
    roleManager: {
      selectors: {
        body: 'elementor-role-manager',
        row: '.elementor-role-row',
        label: '.elementor-role-label',
        excludedIndicator: '.elementor-role-excluded-indicator',
        excludedField: 'input[name="elementor_exclude_user_roles[]"]',
        controlsContainer: '.elementor-role-controls',
        toggleHandle: '.elementor-role-toggle',
        arrowUp: 'dashicons-arrow-up',
        arrowDown: 'dashicons-arrow-down'
      },
      toggle: function toggle($trigger) {
        var self = this,
            $row = $trigger.closest(self.selectors.row),
            $toggleHandleIcon = $row.find(self.selectors.toggleHandle).find('.dashicons'),
            $controls = $row.find(self.selectors.controlsContainer);
        $controls.toggleClass('hidden');

        if ($controls.hasClass('hidden')) {
          $toggleHandleIcon.removeClass(self.selectors.arrowUp).addClass(self.selectors.arrowDown);
        } else {
          $toggleHandleIcon.removeClass(self.selectors.arrowDown).addClass(self.selectors.arrowUp);
        }

        self.updateLabel($row);
      },
      updateLabel: function updateLabel($row) {
        var self = this,
            $indicator = $row.find(self.selectors.excludedIndicator),
            excluded = $row.find(self.selectors.excludedField).is(':checked');

        if (excluded) {
          $indicator.html($indicator.data('excluded-label'));
        } else {
          $indicator.html('');
        }

        self.setAdvancedState($row, excluded);
      },
      setAdvancedState: function setAdvancedState($row, state) {
        var self = this,
            $controls = $row.find('input[type="checkbox"]').not(self.selectors.excludedField);
        $controls.each(function (index, input) {
          $(input).prop('disabled', state);
        });
      },
      bind: function bind() {
        var self = this;
        $(document).on('click', self.selectors.label + ',' + self.selectors.toggleHandle, function (event) {
          event.stopPropagation();
          event.preventDefault();
          self.toggle($(this));
        }).on('change', self.selectors.excludedField, function () {
          self.updateLabel($(this).closest(self.selectors.row));
        });
      },
      init: function init() {
        var self = this;

        if (!$('body[class*="' + self.selectors.body + '"]').length) {
          return;
        }

        self.bind();
        $(self.selectors.row).each(function (index, row) {
          self.updateLabel($(row));
        });
      }
    }
  });
  $(function () {
    window.elementorAdmin = new ElementorAdmin();
    elementorCommon.elements.$window.trigger('elementor/admin/init');
  });
})(jQuery);

/***/ }),

/***/ 713:
/***/ (function(module, exports, __webpack_require__) {

"use strict";


<<<<<<< HEAD
__webpack_require__(26);
=======
__webpack_require__(25);
>>>>>>> origin/KyungYul-Noh

module.exports = elementorModules.ViewModule.extend({
  getDefaultSettings: function getDefaultSettings() {
    return {
      selectors: {
        modeSelect: '.elementor_maintenance_mode_mode select',
        maintenanceModeTable: '#tab-maintenance_mode table',
        maintenanceModeDescriptions: '.elementor-maintenance-mode-description',
        excludeModeSelect: '.elementor_maintenance_mode_exclude_mode select',
        excludeRolesArea: '.elementor_maintenance_mode_exclude_roles',
        templateSelect: '.elementor_maintenance_mode_template_id select',
        editTemplateButton: '.elementor-edit-template',
        maintenanceModeError: '.elementor-maintenance-mode-error'
      },
      classes: {
        isEnabled: 'elementor-maintenance-mode-is-enabled'
      }
    };
  },
  getDefaultElements: function getDefaultElements() {
    var elements = {},
        selectors = this.getSettings('selectors');
    elements.$modeSelect = jQuery(selectors.modeSelect);
    elements.$maintenanceModeTable = elements.$modeSelect.parents(selectors.maintenanceModeTable);
    elements.$excludeModeSelect = elements.$maintenanceModeTable.find(selectors.excludeModeSelect);
    elements.$excludeRolesArea = elements.$maintenanceModeTable.find(selectors.excludeRolesArea);
    elements.$templateSelect = elements.$maintenanceModeTable.find(selectors.templateSelect);
    elements.$editTemplateButton = elements.$maintenanceModeTable.find(selectors.editTemplateButton);
    elements.$maintenanceModeDescriptions = elements.$maintenanceModeTable.find(selectors.maintenanceModeDescriptions);
    elements.$maintenanceModeError = elements.$maintenanceModeTable.find(selectors.maintenanceModeError);
    return elements;
  },
  handleModeSelectChange: function handleModeSelectChange() {
    var settings = this.getSettings(),
        elements = this.elements;
    elements.$maintenanceModeTable.toggleClass(settings.classes.isEnabled, !!elements.$modeSelect.val());
    elements.$maintenanceModeDescriptions.hide();
    elements.$maintenanceModeDescriptions.filter('[data-value="' + elements.$modeSelect.val() + '"]').show();
  },
  handleExcludeModeSelectChange: function handleExcludeModeSelectChange() {
    var elements = this.elements;
    elements.$excludeRolesArea.toggle('custom' === elements.$excludeModeSelect.val());
  },
  handleTemplateSelectChange: function handleTemplateSelectChange() {
    var elements = this.elements;
    var templateID = elements.$templateSelect.val();

    if (!templateID) {
      elements.$editTemplateButton.hide();
      elements.$maintenanceModeError.show();
      return;
    }

    var editUrl = elementorAdmin.config.home_url + '?p=' + templateID + '&elementor';
    elements.$editTemplateButton.prop('href', editUrl).show();
    elements.$maintenanceModeError.hide();
  },
  bindEvents: function bindEvents() {
    var elements = this.elements;
    elements.$modeSelect.on('change', this.handleModeSelectChange.bind(this));
    elements.$excludeModeSelect.on('change', this.handleExcludeModeSelectChange.bind(this));
    elements.$templateSelect.on('change', this.handleTemplateSelectChange.bind(this));
  },
  onAdminInit: function onAdminInit() {
    this.handleModeSelectChange();
    this.handleExcludeModeSelectChange();
    this.handleTemplateSelectChange();
  },
  onInit: function onInit() {
    elementorModules.ViewModule.prototype.onInit.apply(this, arguments);
    elementorCommon.elements.$window.on('elementor/admin/init', this.onAdminInit);
  }
});

/***/ }),

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> yanzhou-li
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
<<<<<<< HEAD
/***/ (function(module, exports, __webpack_require__) {

// optional / simple context binding
var aFunction = __webpack_require__(95);
=======
/***/ (function(module, exports, __webpack_require__) {

// optional / simple context binding
var aFunction = __webpack_require__(95);
=======
/***/ 73:
/***/ (function(module, exports, __webpack_require__) {

// optional / simple context binding
var aFunction = __webpack_require__(91);
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
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

<<<<<<< HEAD
/***/ 81:
=======
<<<<<<< HEAD
/***/ 81:
=======
/***/ 80:
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
/***/ (function(module, exports, __webpack_require__) {

"use strict";


<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> yanzhou-li
var isRegExp = __webpack_require__(123);
var anObject = __webpack_require__(20);
var speciesConstructor = __webpack_require__(180);
var advanceStringIndex = __webpack_require__(108);
var toLength = __webpack_require__(45);
var callRegExpExec = __webpack_require__(97);
var regexpExec = __webpack_require__(92);
var fails = __webpack_require__(35);
<<<<<<< HEAD
=======
=======
var isRegExp = __webpack_require__(122);
var anObject = __webpack_require__(18);
var speciesConstructor = __webpack_require__(154);
var advanceStringIndex = __webpack_require__(105);
var toLength = __webpack_require__(43);
var callRegExpExec = __webpack_require__(94);
var regexpExec = __webpack_require__(90);
var fails = __webpack_require__(33);
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
var $min = Math.min;
var $push = [].push;
var $SPLIT = 'split';
var LENGTH = 'length';
var LAST_INDEX = 'lastIndex';
var MAX_UINT32 = 0xffffffff;

// babel-minify transpiles RegExp('x', 'y') -> /x/y and it causes SyntaxError
var SUPPORTS_Y = !fails(function () { RegExp(MAX_UINT32, 'y'); });

// @@split logic
<<<<<<< HEAD
__webpack_require__(98)('split', 2, function (defined, SPLIT, $split, maybeCallNative) {
=======
<<<<<<< HEAD
__webpack_require__(98)('split', 2, function (defined, SPLIT, $split, maybeCallNative) {
=======
__webpack_require__(95)('split', 2, function (defined, SPLIT, $split, maybeCallNative) {
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
  var internalSplit;
  if (
    'abbc'[$SPLIT](/(b)*/)[1] == 'c' ||
    'test'[$SPLIT](/(?:)/, -1)[LENGTH] != 4 ||
    'ab'[$SPLIT](/(?:ab)*/)[LENGTH] != 2 ||
    '.'[$SPLIT](/(.?)(.?)/)[LENGTH] != 4 ||
    '.'[$SPLIT](/()()/)[LENGTH] > 1 ||
    ''[$SPLIT](/.?/)[LENGTH]
  ) {
    // based on es5-shim implementation, need to rework it
    internalSplit = function (separator, limit) {
      var string = String(this);
      if (separator === undefined && limit === 0) return [];
      // If `separator` is not a regex, use native split
      if (!isRegExp(separator)) return $split.call(string, separator, limit);
      var output = [];
      var flags = (separator.ignoreCase ? 'i' : '') +
                  (separator.multiline ? 'm' : '') +
                  (separator.unicode ? 'u' : '') +
                  (separator.sticky ? 'y' : '');
      var lastLastIndex = 0;
      var splitLimit = limit === undefined ? MAX_UINT32 : limit >>> 0;
      // Make `global` and avoid `lastIndex` issues by working with a copy
      var separatorCopy = new RegExp(separator.source, flags + 'g');
      var match, lastIndex, lastLength;
      while (match = regexpExec.call(separatorCopy, string)) {
        lastIndex = separatorCopy[LAST_INDEX];
        if (lastIndex > lastLastIndex) {
          output.push(string.slice(lastLastIndex, match.index));
          if (match[LENGTH] > 1 && match.index < string[LENGTH]) $push.apply(output, match.slice(1));
          lastLength = match[0][LENGTH];
          lastLastIndex = lastIndex;
          if (output[LENGTH] >= splitLimit) break;
        }
        if (separatorCopy[LAST_INDEX] === match.index) separatorCopy[LAST_INDEX]++; // Avoid an infinite loop
      }
      if (lastLastIndex === string[LENGTH]) {
        if (lastLength || !separatorCopy.test('')) output.push('');
      } else output.push(string.slice(lastLastIndex));
      return output[LENGTH] > splitLimit ? output.slice(0, splitLimit) : output;
    };
  // Chakra, V8
  } else if ('0'[$SPLIT](undefined, 0)[LENGTH]) {
    internalSplit = function (separator, limit) {
      return separator === undefined && limit === 0 ? [] : $split.call(this, separator, limit);
    };
  } else {
    internalSplit = $split;
  }

  return [
    // `String.prototype.split` method
    // https://tc39.github.io/ecma262/#sec-string.prototype.split
    function split(separator, limit) {
      var O = defined(this);
      var splitter = separator == undefined ? undefined : separator[SPLIT];
      return splitter !== undefined
        ? splitter.call(separator, O, limit)
        : internalSplit.call(String(O), separator, limit);
    },
    // `RegExp.prototype[@@split]` method
    // https://tc39.github.io/ecma262/#sec-regexp.prototype-@@split
    //
    // NOTE: This cannot be properly polyfilled in engines that don't support
    // the 'y' flag.
    function (regexp, limit) {
      var res = maybeCallNative(internalSplit, regexp, this, limit, internalSplit !== $split);
      if (res.done) return res.value;

      var rx = anObject(regexp);
      var S = String(this);
      var C = speciesConstructor(rx, RegExp);

      var unicodeMatching = rx.unicode;
      var flags = (rx.ignoreCase ? 'i' : '') +
                  (rx.multiline ? 'm' : '') +
                  (rx.unicode ? 'u' : '') +
                  (SUPPORTS_Y ? 'y' : 'g');

      // ^(? + rx + ) is needed, in combination with some S slicing, to
      // simulate the 'y' flag.
      var splitter = new C(SUPPORTS_Y ? rx : '^(?:' + rx.source + ')', flags);
      var lim = limit === undefined ? MAX_UINT32 : limit >>> 0;
      if (lim === 0) return [];
      if (S.length === 0) return callRegExpExec(splitter, S) === null ? [S] : [];
      var p = 0;
      var q = 0;
      var A = [];
      while (q < S.length) {
        splitter.lastIndex = SUPPORTS_Y ? q : 0;
        var z = callRegExpExec(splitter, SUPPORTS_Y ? S : S.slice(q));
        var e;
        if (
          z === null ||
          (e = $min(toLength(splitter.lastIndex + (SUPPORTS_Y ? 0 : q)), S.length)) === p
        ) {
          q = advanceStringIndex(S, q, unicodeMatching);
        } else {
          A.push(S.slice(p, q));
          if (A.length === lim) return A;
          for (var i = 1; i <= z.length - 1; i++) {
            A.push(z[i]);
            if (A.length === lim) return A;
          }
          q = p = e;
        }
      }
      A.push(S.slice(p));
      return A;
    }
  ];
});


/***/ }),

<<<<<<< HEAD
/***/ 89:
/***/ (function(module, exports, __webpack_require__) {

// 22.1.3.31 Array.prototype[@@unscopables]
var UNSCOPABLES = __webpack_require__(13)('unscopables');
=======
<<<<<<< HEAD
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
>>>>>>> yanzhou-li
var ArrayProto = Array.prototype;
if (ArrayProto[UNSCOPABLES] == undefined) __webpack_require__(29)(ArrayProto, UNSCOPABLES, {});
module.exports = function (key) {
  ArrayProto[UNSCOPABLES][key] = true;
};


/***/ }),

<<<<<<< HEAD
/***/ 92:
=======
<<<<<<< HEAD
/***/ 92:
=======
/***/ 90:
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
/***/ (function(module, exports, __webpack_require__) {

"use strict";


<<<<<<< HEAD
var regexpFlags = __webpack_require__(109);
=======
<<<<<<< HEAD
var regexpFlags = __webpack_require__(109);
=======
var regexpFlags = __webpack_require__(106);
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li

var nativeExec = RegExp.prototype.exec;
// This always refers to the native implementation, because the
// String#replace polyfill uses ./fix-regexp-well-known-symbol-logic.js,
// which loads this file before patching the method.
var nativeReplace = String.prototype.replace;

var patchedExec = nativeExec;

var LAST_INDEX = 'lastIndex';

var UPDATES_LAST_INDEX_WRONG = (function () {
  var re1 = /a/,
      re2 = /b*/g;
  nativeExec.call(re1, 'a');
  nativeExec.call(re2, 'a');
  return re1[LAST_INDEX] !== 0 || re2[LAST_INDEX] !== 0;
})();

// nonparticipating capturing group, copied from es5-shim's String#split patch.
var NPCG_INCLUDED = /()??/.exec('')[1] !== undefined;

var PATCH = UPDATES_LAST_INDEX_WRONG || NPCG_INCLUDED;

if (PATCH) {
  patchedExec = function exec(str) {
    var re = this;
    var lastIndex, reCopy, match, i;

    if (NPCG_INCLUDED) {
      reCopy = new RegExp('^' + re.source + '$(?!\\s)', regexpFlags.call(re));
    }
    if (UPDATES_LAST_INDEX_WRONG) lastIndex = re[LAST_INDEX];

    match = nativeExec.call(re, str);

    if (UPDATES_LAST_INDEX_WRONG && match) {
      re[LAST_INDEX] = re.global ? match.index + match[0].length : lastIndex;
    }
    if (NPCG_INCLUDED && match && match.length > 1) {
      // Fix browsers whose `exec` methods don't consistently return `undefined`
      // for NPCG, like IE8. NOTE: This doesn' work for /(.?)?/
      // eslint-disable-next-line no-loop-func
      nativeReplace.call(match[0], reCopy, function () {
        for (i = 1; i < arguments.length - 2; i++) {
          if (arguments[i] === undefined) match[i] = undefined;
        }
      });
    }

    return match;
  };
}

module.exports = patchedExec;


/***/ }),

<<<<<<< HEAD
/***/ 95:
=======
<<<<<<< HEAD
/***/ 95:
=======
/***/ 91:
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
/***/ (function(module, exports) {

module.exports = function (it) {
  if (typeof it != 'function') throw TypeError(it + ' is not a function!');
  return it;
};


/***/ }),

<<<<<<< HEAD
/***/ 97:
=======
<<<<<<< HEAD
/***/ 97:
=======
/***/ 94:
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
/***/ (function(module, exports, __webpack_require__) {

"use strict";


<<<<<<< HEAD
var classof = __webpack_require__(116);
=======
<<<<<<< HEAD
var classof = __webpack_require__(116);
=======
var classof = __webpack_require__(113);
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
var builtinExec = RegExp.prototype.exec;

 // `RegExpExec` abstract operation
// https://tc39.github.io/ecma262/#sec-regexpexec
module.exports = function (R, S) {
  var exec = R.exec;
  if (typeof exec === 'function') {
    var result = exec.call(R, S);
    if (typeof result !== 'object') {
      throw new TypeError('RegExp exec method returned something other than an Object or null');
    }
    return result;
  }
  if (classof(R) !== 'RegExp') {
    throw new TypeError('RegExp#exec called on incompatible receiver');
  }
  return builtinExec.call(R, S);
};


/***/ }),

<<<<<<< HEAD
/***/ 98:
=======
<<<<<<< HEAD
/***/ 98:
=======
/***/ 95:
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
/***/ (function(module, exports, __webpack_require__) {

"use strict";

<<<<<<< HEAD
__webpack_require__(196);
var redefine = __webpack_require__(39);
var hide = __webpack_require__(29);
var fails = __webpack_require__(35);
var defined = __webpack_require__(43);
var wks = __webpack_require__(13);
var regexpExec = __webpack_require__(92);
=======
<<<<<<< HEAD
__webpack_require__(196);
var redefine = __webpack_require__(39);
var hide = __webpack_require__(29);
var fails = __webpack_require__(35);
var defined = __webpack_require__(43);
var wks = __webpack_require__(13);
var regexpExec = __webpack_require__(92);
=======
__webpack_require__(190);
var redefine = __webpack_require__(37);
var hide = __webpack_require__(29);
var fails = __webpack_require__(33);
var defined = __webpack_require__(42);
var wks = __webpack_require__(12);
var regexpExec = __webpack_require__(90);
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li

var SPECIES = wks('species');

var REPLACE_SUPPORTS_NAMED_GROUPS = !fails(function () {
  // #replace needs built-in support for named groups.
  // #match works fine because it just return the exec results, even if it has
  // a "grops" property.
  var re = /./;
  re.exec = function () {
    var result = [];
    result.groups = { a: '7' };
    return result;
  };
  return ''.replace(re, '$<a>') !== '7';
});

var SPLIT_WORKS_WITH_OVERWRITTEN_EXEC = (function () {
  // Chrome 51 has a buggy "split" implementation when RegExp#exec !== nativeExec
  var re = /(?:)/;
  var originalExec = re.exec;
  re.exec = function () { return originalExec.apply(this, arguments); };
  var result = 'ab'.split(re);
  return result.length === 2 && result[0] === 'a' && result[1] === 'b';
})();

module.exports = function (KEY, length, exec) {
  var SYMBOL = wks(KEY);

  var DELEGATES_TO_SYMBOL = !fails(function () {
    // String methods call symbol-named RegEp methods
    var O = {};
    O[SYMBOL] = function () { return 7; };
    return ''[KEY](O) != 7;
  });

  var DELEGATES_TO_EXEC = DELEGATES_TO_SYMBOL ? !fails(function () {
    // Symbol-named RegExp methods call .exec
    var execCalled = false;
    var re = /a/;
    re.exec = function () { execCalled = true; return null; };
    if (KEY === 'split') {
      // RegExp[@@split] doesn't call the regex's exec method, but first creates
      // a new one. We need to return the patched regex when creating the new one.
      re.constructor = {};
      re.constructor[SPECIES] = function () { return re; };
    }
    re[SYMBOL]('');
    return !execCalled;
  }) : undefined;

  if (
    !DELEGATES_TO_SYMBOL ||
    !DELEGATES_TO_EXEC ||
    (KEY === 'replace' && !REPLACE_SUPPORTS_NAMED_GROUPS) ||
    (KEY === 'split' && !SPLIT_WORKS_WITH_OVERWRITTEN_EXEC)
  ) {
    var nativeRegExpMethod = /./[SYMBOL];
    var fns = exec(
      defined,
      SYMBOL,
      ''[KEY],
      function maybeCallNative(nativeMethod, regexp, str, arg2, forceStringMethod) {
        if (regexp.exec === regexpExec) {
          if (DELEGATES_TO_SYMBOL && !forceStringMethod) {
            // The native String method already delegates to @@method (this
            // polyfilled function), leasing to infinite recursion.
            // We avoid it by directly calling the native @@method method.
            return { done: true, value: nativeRegExpMethod.call(regexp, str, arg2) };
          }
          return { done: true, value: nativeMethod.call(str, regexp, arg2) };
        }
        return { done: false };
      }
    );
    var strfn = fns[0];
    var rxfn = fns[1];

    redefine(String.prototype, KEY, strfn);
    hide(RegExp.prototype, SYMBOL, length == 2
      // 21.2.5.8 RegExp.prototype[@@replace](string, replaceValue)
      // 21.2.5.11 RegExp.prototype[@@split](string, limit)
      ? function (string, arg) { return rxfn.call(string, this, arg); }
      // 21.2.5.6 RegExp.prototype[@@match](string)
      // 21.2.5.9 RegExp.prototype[@@search](string)
      : function (string) { return rxfn.call(string, this); }
    );
  }
};


/***/ }),

<<<<<<< HEAD
/***/ 99:
/***/ (function(module, exports, __webpack_require__) {

// 7.1.13 ToObject(argument)
var defined = __webpack_require__(43);
=======
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
>>>>>>> yanzhou-li
module.exports = function (it) {
  return Object(defined(it));
};


/***/ })

/******/ });
//# sourceMappingURL=admin.js.map