webpackJsonp([0],[
/* 0 */,
/* 1 */,
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

var _canvasData;

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

window.Vue = __webpack_require__(1);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('bookcard', __webpack_require__(18));

new Vue({
  el: '#BookCard'
});

// new Vue({
//   el:'#CarouselCard',
// });

Vue.component('canvasComponent', {
  template: '#canvasChart',

  data: function data() {
    var sortOrders = {}; //定义sortOrders为空字典
    //forEach为columns的每一个元素执行函数内部操作
    this.columns.forEach(function (key) {
      //将columns的元素设定为key值,value值都为1
      sortOrders[key] = 1;
    });
    return {
      sortKey: '',
      sortOrders: sortOrders,
      items: {}
    };
  },
  props: {
    canvasData: Array,
    columns: Array,
    filterKey: String
  },
  methods: {
    //sortBy[key]理解: 当click时执行该函数,sortBy为一个函数方法,接受key参数
    sortBy: function sortBy(key) {
      //并将参数赋值给内部变量
      this.sortKey = key;
      //更新排序序列,调用sortOrders将key代表的列反序
      console.log(this.sortOrders[key]); // 1
      this.sortOrders[key] = this.sortOrders[key] * -1;
      console.log(this.sortOrders[key]); // -1
    }

  },
  computed: {
    filterI: function filterI() {
      var _this = this;

      return this.canvasData.filter(function (item) {
        return item.name.match(_this.filterKey);
      });
    }

  }
});

new Vue({
  el: '#filterTest',
  data: {
    'keywords': [{ "id": "9", "name": "missy", "phone": "21324234532" }, { "id": "3", "name": "Mahama", "phone": "345604542" }, { "id": "2", "name": "Bernard", "phone": "241242542" }],

    canvasData: (_canvasData = { "空间": 34, "微博": 30, "指导": 29, "小明": 28, "图书馆": 27, "PHP": 26, "项目": 25, "健康": 24, "JS": 23, 'html': 22, '各镇': 22, '勋章': 21, '信息': 20, '开发': 19, '设计': 18, '开幕式': 17, '浏览器': 16, '身份': 15, '图片': 14, '中国': 13, '伟大': 12, '地方': 11, '噩梦': 10, '回复': 9 }, _defineProperty(_canvasData, '\u7A7A\u95F4', 8), _defineProperty(_canvasData, '请问', 7), _defineProperty(_canvasData, '类库', 6), _defineProperty(_canvasData, '激活', 5), _defineProperty(_canvasData, '规范', 4), _defineProperty(_canvasData, '微软', 3), _defineProperty(_canvasData, '分割', 2), _defineProperty(_canvasData, '不错', 1), _defineProperty(_canvasData, '多个', 1), _defineProperty(_canvasData, '斯蒂芬', 1), _defineProperty(_canvasData, '\u5206\u5272', 1), _defineProperty(_canvasData, '回过头', 1), _defineProperty(_canvasData, '慈悲', 1), _defineProperty(_canvasData, 'svg', 1), _defineProperty(_canvasData, '三个', 1), _defineProperty(_canvasData, '十多个', 1), _defineProperty(_canvasData, '语句', 1), _defineProperty(_canvasData, '写错', 1), _defineProperty(_canvasData, '别冲动', 1), _defineProperty(_canvasData, '\u8BF7\u95EE', 1), _defineProperty(_canvasData, '细长的', 1), _defineProperty(_canvasData, '风光', 1), _defineProperty(_canvasData, '梵蒂冈', 1), _defineProperty(_canvasData, '成办', 1), _defineProperty(_canvasData, '这些', 1), _defineProperty(_canvasData, '是的', 1), _defineProperty(_canvasData, '风格化', 1), _defineProperty(_canvasData, '儿童歌', 1), _defineProperty(_canvasData, '所得税', 1), _defineProperty(_canvasData, '阿斯顿', 1), _defineProperty(_canvasData, '\u65AF\u8482\u82AC', 1), _defineProperty(_canvasData, '电饭锅', 1), _defineProperty(_canvasData, '很规范', 1), _defineProperty(_canvasData, '车秩序', 1), _defineProperty(_canvasData, '上网', 1), _defineProperty(_canvasData, '过负荷', 1), _defineProperty(_canvasData, '放到', 1), _defineProperty(_canvasData, '\u7535\u996D\u9505', 1), _defineProperty(_canvasData, '东方红', 1), _defineProperty(_canvasData, '\u98CE\u683C\u5316', 1), _defineProperty(_canvasData, '\u8BF7\u95EE', 1), _defineProperty(_canvasData, '人头', 1), _defineProperty(_canvasData, '让他', 1), _defineProperty(_canvasData, '分隔', 1), _defineProperty(_canvasData, '大概', 1), _defineProperty(_canvasData, '福利', 1), _defineProperty(_canvasData, '\u6FC0\u6D3B', 1), _defineProperty(_canvasData, '断食', 1), _defineProperty(_canvasData, '风格', 1), _defineProperty(_canvasData, '瓦尔特', 1), _defineProperty(_canvasData, '对方', 1), _defineProperty(_canvasData, '\u8BF7\u95EE', 1), _defineProperty(_canvasData, '而', 1), _defineProperty(_canvasData, '\u4EBA\u5934', 1), _defineProperty(_canvasData, '统一', 1), _defineProperty(_canvasData, '一份', 1), _defineProperty(_canvasData, '\u653E\u5230', 1), _defineProperty(_canvasData, '\u653E\u5230', 1), _defineProperty(_canvasData, '\u653E\u5230', 1), _defineProperty(_canvasData, '\u653E\u5230', 1), _defineProperty(_canvasData, '\u4E0A\u7F51', 1), _defineProperty(_canvasData, '我是', 1), _defineProperty(_canvasData, '的', 1), _defineProperty(_canvasData, '耳朵', 1), _defineProperty(_canvasData, '发热', 1), _defineProperty(_canvasData, '乳房', 1), _defineProperty(_canvasData, '跟他', 1), _defineProperty(_canvasData, '通过', 1), _defineProperty(_canvasData, '还好用', 1), _defineProperty(_canvasData, '雅黑', 1), _defineProperty(_canvasData, '聚聚', 1), _defineProperty(_canvasData, '看过', 1), _defineProperty(_canvasData, '似的', 1), _defineProperty(_canvasData, '独', 1), _defineProperty(_canvasData, '明年', 1), _defineProperty(_canvasData, '手头紧', 1), _defineProperty(_canvasData, '换个', 1), _defineProperty(_canvasData, '数据', 1), _defineProperty(_canvasData, '导入', 1), _defineProperty(_canvasData, '回归', 1), _canvasData),
    gridColumns: ['id', 'name', 'phone'],
    searchQuery: ''
  }

});

/***/ }),
/* 3 */,
/* 4 */,
/* 5 */,
/* 6 */,
/* 7 */,
/* 8 */,
/* 9 */,
/* 10 */,
/* 11 */,
/* 12 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 13 */,
/* 14 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    mounted: function mounted() {
        console.log('Component be mounted!');
    },

    props: {
        books: Array,
        auth: Object
    }
});

/***/ }),
/* 15 */,
/* 16 */,
/* 17 */,
/* 18 */
/***/ (function(module, exports, __webpack_require__) {

var Component = __webpack_require__(19)(
  /* script */
  __webpack_require__(14),
  /* template */
  __webpack_require__(20),
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "D:\\CodeForFun\\Homestead\\Code\\library\\resources\\assets\\js\\components\\BookCard.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] BookCard.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-3c2838fc", Component.options)
  } else {
    hotAPI.reload("data-v-3c2838fc", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),
/* 19 */
/***/ (function(module, exports) {

// this module is a runtime utility for cleaner component module output and will
// be included in the final webpack user bundle

module.exports = function normalizeComponent (
  rawScriptExports,
  compiledTemplate,
  scopeId,
  cssModules
) {
  var esModule
  var scriptExports = rawScriptExports = rawScriptExports || {}

  // ES6 modules interop
  var type = typeof rawScriptExports.default
  if (type === 'object' || type === 'function') {
    esModule = rawScriptExports
    scriptExports = rawScriptExports.default
  }

  // Vue.extend constructor export interop
  var options = typeof scriptExports === 'function'
    ? scriptExports.options
    : scriptExports

  // render functions
  if (compiledTemplate) {
    options.render = compiledTemplate.render
    options.staticRenderFns = compiledTemplate.staticRenderFns
  }

  // scopedId
  if (scopeId) {
    options._scopeId = scopeId
  }

  // inject cssModules
  if (cssModules) {
    var computed = Object.create(options.computed || null)
    Object.keys(cssModules).forEach(function (key) {
      var module = cssModules[key]
      computed[key] = function () { return module }
    })
    options.computed = computed
  }

  return {
    esModule: esModule,
    exports: scriptExports,
    options: options
  }
}


/***/ }),
/* 20 */
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "container"
  }, _vm._l((_vm.books), function(book) {
    return _c('div', {
      staticClass: "col-sm-6 col-md-4"
    }, [_c('div', {
      staticClass: "thumbnail"
    }, [_c('img', {
      attrs: {
        "data-src": "holder.js/300x300",
        "alt": "..."
      }
    }), _vm._v(" "), _c('div', {
      staticClass: "caption"
    }, [_c('div', {
      attrs: {
        "id": "BookCard"
      }
    }), _vm._v(" "), _c('h3', [_vm._v(_vm._s(book.title) + " ")]), _vm._v(" "), _c('br'), _vm._v(" "), _vm._m(0, true), _vm._v(" "), _c('p', [_c('a', {
      staticClass: "btn btn-success",
      attrs: {
        "href": 'books/borrow/' + book.id
      }
    }, [_vm._v("Purchase")])]), _vm._v(" "), (_vm.auth) ? _c('div', [_c('p', [_c('a', {
      staticClass: "btn btn-info",
      attrs: {
        "href": 'books/edit/' + book.id,
        "role": "button"
      }
    }, [_vm._v("Edit")]), _vm._v(" "), _c('a', {
      staticClass: "btn btn-info",
      attrs: {
        "href": 'books/delete/' + book.id,
        "role": "button"
      }
    }, [_vm._v("Delete")])])]) : _vm._e(), _vm._v(" "), _c('p', [_c('span', {
      staticClass: "label label-primary"
    }, [_vm._v(" " + _vm._s(book.tech_field) + " ")])]), _vm._v(" "), _c('div', {
      staticClass: "progress"
    }, [_c('div', {
      staticClass: "progress-bar progress-bar-striped active",
      style: ({
        width: book.progress + '%'
      }),
      attrs: {
        "role": "progressbar",
        "aria-valuenow": "45",
        "aria-valuemin": "0",
        "aria-valuemax": "100"
      }
    }, [_vm._v("\r\n  " + _vm._s(book.progress) + "%\r\n  ")])])])])])
  }))
},staticRenderFns: [function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('p', [_c('span', {
    staticClass: "label label-primary"
  })])
}]}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-3c2838fc", module.exports)
  }
}

/***/ }),
/* 21 */,
/* 22 */,
/* 23 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(2);
module.exports = __webpack_require__(12);


/***/ })
],[23]);