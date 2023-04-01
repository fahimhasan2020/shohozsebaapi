(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[0],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/inc/SideNavBar.vue?vue&type=script&lang=js&":
/*!********************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/Pages/inc/SideNavBar.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ({
  components: {},
  data: function data() {
    return {
      roles: [],
      userView: '',
      userBlock: ''
    };
  },
  props: {},
  computed: {
    //
  },
  created: function created() {
    //
  },
  mounted: function mounted() {
    var _this = this;
    this.$page.auth.user.roles.map(function (item) {
      _this.roles.push(item.slug);
    });
  },
  methods: {
    subToggle: function subToggle(value) {
      if (value === 'user' & this.userView === '') {
        this.userView = 'subdrop';
        this.userBlock = 'blocka';
      } else if (value === 'user' & this.userView !== '') {
        this.userView = '';
        this.userBlock = '';
      }
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/inc/SideNavBar.vue?vue&type=template&id=2f1cc63e&scoped=true&":
/*!******************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib/loaders/templateLoader.js??ref--6!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/Pages/inc/SideNavBar.vue?vue&type=template&id=2f1cc63e&scoped=true& ***!
  \******************************************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function render() {
  var _vm = this,
    _c = _vm._self._c;
  return _c("div", {
    staticClass: "left side-menu"
  }, [_c("div", {
    staticClass: "sidebar-inner slimscrollleft"
  }, [_c("div", {
    attrs: {
      id: "sidebar-menu"
    }
  }, [_c("ul", [_c("li", {
    staticClass: "menu-title"
  }, [_vm._v("Navigation")]), _vm._v(" "), _vm._m(0), _vm._v(" "), _c("li", {
    staticClass: "has_sub"
  }, [_c("inertia-link", {
    staticClass: "waves-effect",
    attrs: {
      href: "/admins/dashboard"
    }
  }, [_c("i", {
    staticClass: "mdi mdi-view-dashboard"
  }), _c("span", [_vm._v(" Dashboard ")])])], 1), _vm._v(" "), _c("li", {
    staticClass: "has_sub"
  }, [_vm._m(1), _vm._v(" "), _c("ul", {
    staticClass: "list-unstyled"
  }, [_c("li", [_c("inertia-link", {
    attrs: {
      href: "/admins/mail"
    }
  }, [_vm._v("Mail")])], 1), _vm._v(" "), _c("li", [_c("inertia-link", {
    attrs: {
      href: "/admins/email/support"
    }
  }, [_vm._v("Support")])], 1), _vm._v(" "), _c("li", [_c("inertia-link", {
    attrs: {
      href: "/admins/email/contact"
    }
  }, [_vm._v("Contacts")])], 1)])]), _vm._v(" "), _vm.roles.includes("developper") || _vm.roles.includes("superadmin") || _vm.roles.includes("admin") ? _c("li", {
    staticClass: "has_sub",
    on: {
      click: function click($event) {
        return _vm.subToggle("user");
      }
    }
  }, [_c("a", {
    "class": ["waves-effect", _vm.userView],
    attrs: {
      href: "javascript:void(0);"
    }
  }, [_c("i", {
    staticClass: "mdi mdi-account"
  }), _vm._v(" "), _c("span", [_vm._v(" User ")]), _vm._v(" "), _c("span", {
    staticClass: "menu-arrow"
  })]), _vm._v(" "), _c("ul", {
    "class": ["list-unstyled", _vm.userBlock]
  }, [_vm.roles.includes("developper") || _vm.roles.includes("superadmin") ? _c("li", [_c("inertia-link", {
    attrs: {
      href: "/admins/admin"
    }
  }, [_vm._v("Admin")])], 1) : _vm._e(), _vm._v(" "), _vm.roles.includes("developper") || _vm.roles.includes("superadmin") || _vm.roles.includes("admin") ? _c("li", [_c("inertia-link", {
    attrs: {
      href: "/admins/user"
    }
  }, [_vm._v("User")])], 1) : _vm._e()])]) : _vm._e(), _vm._v(" "), _c("li", {
    staticClass: "menu-title"
  }, [_vm._v("SHOP")]), _vm._v(" "), _vm._m(2), _vm._v(" "), _c("li", {
    staticClass: "menu-title"
  }, [_vm._v("PUSH NOTIFICATIONS")]), _vm._v(" "), _vm._m(3), _vm._v(" "), _c("li", {
    staticClass: "menu-title"
  }, [_vm._v("Marketing")]), _vm._v(" "), _vm._m(4)])]), _vm._v(" "), _c("div", {
    staticClass: "clearfix"
  }), _vm._v(" "), _vm._m(5)])]);
};
var staticRenderFns = [function () {
  var _vm = this,
    _c = _vm._self._c;
  return _c("li", [_c("a", {
    staticClass: "waves-effect",
    attrs: {
      href: "/"
    }
  }, [_c("i", {
    staticClass: "mdi mdi-home"
  }), _vm._v(" "), _c("span", [_vm._v("Home")])])]);
}, function () {
  var _vm = this,
    _c = _vm._self._c;
  return _c("a", {
    staticClass: "waves-effect",
    attrs: {
      href: "javascript:void(0);"
    }
  }, [_c("i", {
    staticClass: "mdi mdi-contact-mail"
  }), _vm._v(" "), _c("span", [_vm._v(" Mails ")]), _vm._v(" "), _c("span", {
    staticClass: "menu-arrow"
  })]);
}, function () {
  var _vm = this,
    _c = _vm._self._c;
  return _c("li", {
    staticClass: "has_sub"
  }, [_c("a", {
    staticClass: "waves-effect",
    attrs: {
      href: "javascript:void(0);"
    }
  }, [_c("i", {
    staticClass: "mdi mdi-share"
  }), _c("span", [_vm._v("E-COMMERCE")]), _vm._v(" "), _c("span", {
    staticClass: "menu-arrow"
  })]), _vm._v(" "), _c("ul", {
    staticClass: "list-unstyled"
  }, [_c("li", [_c("a", {
    attrs: {
      href: "javascript:void(0);"
    }
  }, [_vm._v("Orders")])]), _vm._v(" "), _c("li", [_c("a", {
    attrs: {
      href: "javascript:void(0);"
    }
  }, [_vm._v("Vendors")])]), _vm._v(" "), _c("li", [_c("a", {
    attrs: {
      href: "javascript:void(0);"
    }
  }, [_vm._v("Products")])]), _vm._v(" "), _c("li", [_c("a", {
    attrs: {
      href: "javascript:void(0);"
    }
  }, [_vm._v("Categories")])]), _vm._v(" "), _c("li", [_c("a", {
    attrs: {
      href: "javascript:void(0);"
    }
  }, [_vm._v("Settings")])])])]);
}, function () {
  var _vm = this,
    _c = _vm._self._c;
  return _c("li", {
    staticClass: "has_sub"
  }, [_c("a", {
    staticClass: "waves-effect",
    attrs: {
      href: "javascript:void(0);"
    }
  }, [_c("i", {
    staticClass: "mdi mdi-share"
  }), _c("span", [_vm._v("Mass Marketing")]), _vm._v(" "), _c("span", {
    staticClass: "menu-arrow"
  })]), _vm._v(" "), _c("ul", {
    staticClass: "list-unstyled"
  }, [_c("li", [_c("a", {
    attrs: {
      href: "javascript:void(0);"
    }
  }, [_vm._v("USER TOKENS")])]), _vm._v(" "), _c("li", [_c("a", {
    attrs: {
      href: "javascript:void(0);"
    }
  }, [_vm._v("NOTIFICATION QUEUES")])]), _vm._v(" "), _c("li", [_c("a", {
    attrs: {
      href: "javascript:void(0);"
    }
  }, [_vm._v("RANDOM NOTIFICATFIONS")])]), _vm._v(" "), _c("li", [_c("a", {
    attrs: {
      href: "javascript:void(0);"
    }
  }, [_vm._v("CATEGORIES")])]), _vm._v(" "), _c("li", [_c("a", {
    attrs: {
      href: "javascript:void(0);"
    }
  }, [_vm._v("Settings")])])])]);
}, function () {
  var _vm = this,
    _c = _vm._self._c;
  return _c("li", {
    staticClass: "has_sub"
  }, [_c("a", {
    staticClass: "waves-effect",
    attrs: {
      href: "javascript:void(0);"
    }
  }, [_c("i", {
    staticClass: "mdi mdi-share"
  }), _c("span", [_vm._v(" Social site ")]), _vm._v(" "), _c("span", {
    staticClass: "menu-arrow"
  })]), _vm._v(" "), _c("ul", {
    staticClass: "list-unstyled"
  }, [_c("li", [_c("a", {
    attrs: {
      href: "javascript:void(0);"
    }
  }, [_vm._v("Social Media")])]), _vm._v(" "), _c("li", [_c("a", {
    attrs: {
      href: "javascript:void(0);"
    }
  }, [_vm._v("You tube")])]), _vm._v(" "), _c("li", [_c("a", {
    attrs: {
      href: "javascript:void(0);"
    }
  }, [_vm._v("Blogs Sharing")])])])]);
}, function () {
  var _vm = this,
    _c = _vm._self._c;
  return _c("div", {
    staticClass: "help-box"
  }, [_c("h5", {
    staticClass: "text-muted m-t-0"
  }, [_vm._v("For Help ?")]), _vm._v(" "), _c("p", {}, [_c("span", {
    staticClass: "text-custom"
  }, [_vm._v("Email:")]), _vm._v(" "), _c("br"), _vm._v(" fahim@bizbrainers.com")]), _vm._v(" "), _c("p", {
    staticClass: "m-b-0"
  }, [_c("span", {
    staticClass: "text-custom"
  }, [_vm._v("Call:")]), _vm._v(" "), _c("br"), _vm._v(" (+880) 171 143 2259")])]);
}];
render._withStripped = true;


/***/ }),

/***/ "./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/inc/SideNavBar.vue?vue&type=style&index=0&id=2f1cc63e&scoped=true&lang=css&":
/*!***************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader??ref--6-1!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--6-2!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/Pages/inc/SideNavBar.vue?vue&type=style&index=0&id=2f1cc63e&scoped=true&lang=css& ***!
  \***************************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(/*! ../../../../node_modules/css-loader/lib/css-base.js */ "./node_modules/css-loader/lib/css-base.js")(false);
// imports


// module
exports.push([module.i, "\n.blocka[data-v-2f1cc63e]{\n    display: block !important;\n}\n", ""]);

// exports


/***/ }),

/***/ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/inc/SideNavBar.vue?vue&type=style&index=0&id=2f1cc63e&scoped=true&lang=css&":
/*!*******************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader!./node_modules/css-loader??ref--6-1!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--6-2!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/Pages/inc/SideNavBar.vue?vue&type=style&index=0&id=2f1cc63e&scoped=true&lang=css& ***!
  \*******************************************************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {


var content = __webpack_require__(/*! !../../../../node_modules/css-loader??ref--6-1!../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../node_modules/postcss-loader/src??ref--6-2!../../../../node_modules/vue-loader/lib??vue-loader-options!./SideNavBar.vue?vue&type=style&index=0&id=2f1cc63e&scoped=true&lang=css& */ "./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/inc/SideNavBar.vue?vue&type=style&index=0&id=2f1cc63e&scoped=true&lang=css&");

if(typeof content === 'string') content = [[module.i, content, '']];

var transform;
var insertInto;



var options = {"hmr":true}

options.transform = transform
options.insertInto = undefined;

var update = __webpack_require__(/*! ../../../../node_modules/style-loader/lib/addStyles.js */ "./node_modules/style-loader/lib/addStyles.js")(content, options);

if(content.locals) module.exports = content.locals;

if(false) {}

/***/ }),

/***/ "./resources/js/Pages/inc/SideNavBar.vue":
/*!***********************************************!*\
  !*** ./resources/js/Pages/inc/SideNavBar.vue ***!
  \***********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _SideNavBar_vue_vue_type_template_id_2f1cc63e_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./SideNavBar.vue?vue&type=template&id=2f1cc63e&scoped=true& */ "./resources/js/Pages/inc/SideNavBar.vue?vue&type=template&id=2f1cc63e&scoped=true&");
/* harmony import */ var _SideNavBar_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./SideNavBar.vue?vue&type=script&lang=js& */ "./resources/js/Pages/inc/SideNavBar.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _SideNavBar_vue_vue_type_style_index_0_id_2f1cc63e_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./SideNavBar.vue?vue&type=style&index=0&id=2f1cc63e&scoped=true&lang=css& */ "./resources/js/Pages/inc/SideNavBar.vue?vue&type=style&index=0&id=2f1cc63e&scoped=true&lang=css&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");






/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__["default"])(
  _SideNavBar_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _SideNavBar_vue_vue_type_template_id_2f1cc63e_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _SideNavBar_vue_vue_type_template_id_2f1cc63e_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "2f1cc63e",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/Pages/inc/SideNavBar.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/Pages/inc/SideNavBar.vue?vue&type=script&lang=js&":
/*!************************************************************************!*\
  !*** ./resources/js/Pages/inc/SideNavBar.vue?vue&type=script&lang=js& ***!
  \************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_SideNavBar_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./SideNavBar.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/inc/SideNavBar.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_SideNavBar_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/Pages/inc/SideNavBar.vue?vue&type=style&index=0&id=2f1cc63e&scoped=true&lang=css&":
/*!********************************************************************************************************!*\
  !*** ./resources/js/Pages/inc/SideNavBar.vue?vue&type=style&index=0&id=2f1cc63e&scoped=true&lang=css& ***!
  \********************************************************************************************************/
/*! no static exports found */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_SideNavBar_vue_vue_type_style_index_0_id_2f1cc63e_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/style-loader!../../../../node_modules/css-loader??ref--6-1!../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../node_modules/postcss-loader/src??ref--6-2!../../../../node_modules/vue-loader/lib??vue-loader-options!./SideNavBar.vue?vue&type=style&index=0&id=2f1cc63e&scoped=true&lang=css& */ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/inc/SideNavBar.vue?vue&type=style&index=0&id=2f1cc63e&scoped=true&lang=css&");
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_SideNavBar_vue_vue_type_style_index_0_id_2f1cc63e_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_SideNavBar_vue_vue_type_style_index_0_id_2f1cc63e_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_SideNavBar_vue_vue_type_style_index_0_id_2f1cc63e_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_SideNavBar_vue_vue_type_style_index_0_id_2f1cc63e_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));


/***/ }),

/***/ "./resources/js/Pages/inc/SideNavBar.vue?vue&type=template&id=2f1cc63e&scoped=true&":
/*!******************************************************************************************!*\
  !*** ./resources/js/Pages/inc/SideNavBar.vue?vue&type=template&id=2f1cc63e&scoped=true& ***!
  \******************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_loaders_templateLoader_js_ref_6_node_modules_vue_loader_lib_index_js_vue_loader_options_SideNavBar_vue_vue_type_template_id_2f1cc63e_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??ref--6!../../../../node_modules/vue-loader/lib??vue-loader-options!./SideNavBar.vue?vue&type=template&id=2f1cc63e&scoped=true& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/inc/SideNavBar.vue?vue&type=template&id=2f1cc63e&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_loaders_templateLoader_js_ref_6_node_modules_vue_loader_lib_index_js_vue_loader_options_SideNavBar_vue_vue_type_template_id_2f1cc63e_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_loaders_templateLoader_js_ref_6_node_modules_vue_loader_lib_index_js_vue_loader_options_SideNavBar_vue_vue_type_template_id_2f1cc63e_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);