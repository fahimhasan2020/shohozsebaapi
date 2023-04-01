(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[2],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/inc/Layout.vue?vue&type=script&lang=js&":
/*!****************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/Pages/inc/Layout.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _TopNavBar__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./TopNavBar */ "./resources/js/Pages/inc/TopNavBar.vue");
/* harmony import */ var _SideNavBar__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./SideNavBar */ "./resources/js/Pages/inc/SideNavBar.vue");
/* harmony import */ var _Mixins_MobileDetection__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../Mixins/MobileDetection */ "./resources/js/Mixins/MobileDetection.js");



/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      mobile: ''
    };
  },
  mixins: [_Mixins_MobileDetection__WEBPACK_IMPORTED_MODULE_2__["default"]],
  props: {
    title: String
  },
  components: {
    topy: _TopNavBar__WEBPACK_IMPORTED_MODULE_0__["default"],
    sidy: _SideNavBar__WEBPACK_IMPORTED_MODULE_1__["default"]
  },
  computed: {
    success: function success() {
      return this.$page.success;
    },
    errors: function errors() {
      return this.$page.errors;
    },
    fault: function fault() {
      return this.$page.fault;
    }
  },
  watch: {
    title: {
      immediate: true,
      handler: function handler(title) {
        document.title = title;
      }
    },
    success: function success() {
      if (this.$page.success != null) {
        this.$toast.open({
          message: this.success,
          type: "success",
          position: "top-right",
          duration: 5000,
          dismissible: true
        });
        this.$page.success = null;
      }
    },
    errors: function errors() {
      if (Object.keys(this.errors).length > 0) {
        for (var i = 0; i < this.errors[Object.keys(this.errors)[0]].length; i++) {
          this.$toast.open({
            message: this.errors[Object.keys(this.errors)[0]][i],
            type: "error",
            position: "top-right",
            duration: 5000,
            dismissible: true
          });
        }
        this.errors = [];
      }
    },
    fault: function fault() {
      if (this.$page.fault != null) {
        this.$toast.open({
          message: this.fault,
          type: "error",
          position: "top-right",
          duration: 5000,
          dismissible: true
        });
        this.$page.fault = null;
      }
    }
  },
  mounted: function mounted() {
    if (this.isMobile()) {
      this.mobile = 'forced enlarged';
    } else {
      this.mobile = '';
    }
  },
  methods: {}
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/inc/Layout.vue?vue&type=template&id=6abfaf64&":
/*!**************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib/loaders/templateLoader.js??ref--6!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/Pages/inc/Layout.vue?vue&type=template&id=6abfaf64& ***!
  \**************************************************************************************************************************************************************************************************************************************/
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
    staticClass: "fixed-left"
  }, [_c("div", {
    "class": _vm.mobile,
    attrs: {
      id: "wrapper"
    }
  }, [_c("topy"), _vm._v(" "), _c("sidy"), _vm._v(" "), _vm._t("default"), _vm._v(" "), _c("footer", {
    staticClass: "footer text-right bg-white"
  }, [_vm._v("\n            Copyright © 2020 demo site , developed by Biz Brainers.\n        ")])], 2)]);
};
var staticRenderFns = [];
render._withStripped = true;


/***/ }),

/***/ "./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/inc/Layout.vue?vue&type=style&index=0&id=6abfaf64&lang=css&":
/*!***********************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader??ref--6-1!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--6-2!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/Pages/inc/Layout.vue?vue&type=style&index=0&id=6abfaf64&lang=css& ***!
  \***********************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(/*! ../../../../node_modules/css-loader/lib/css-base.js */ "./node_modules/css-loader/lib/css-base.js")(false);
// imports
exports.i(__webpack_require__(/*! -!../../../../node_modules/css-loader??ref--6-1!../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!vue-toast-notification/dist/theme-default.css */ "./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/vue-toast-notification/dist/theme-default.css"), "");

// module
exports.push([module.i, "\n", ""]);

// exports


/***/ }),

/***/ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/inc/Layout.vue?vue&type=style&index=0&id=6abfaf64&lang=css&":
/*!***************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader!./node_modules/css-loader??ref--6-1!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--6-2!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/Pages/inc/Layout.vue?vue&type=style&index=0&id=6abfaf64&lang=css& ***!
  \***************************************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {


var content = __webpack_require__(/*! !../../../../node_modules/css-loader??ref--6-1!../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../node_modules/postcss-loader/src??ref--6-2!../../../../node_modules/vue-loader/lib??vue-loader-options!./Layout.vue?vue&type=style&index=0&id=6abfaf64&lang=css& */ "./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/inc/Layout.vue?vue&type=style&index=0&id=6abfaf64&lang=css&");

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

/***/ "./resources/js/Mixins/Dashboard.js":
/*!******************************************!*\
  !*** ./resources/js/Mixins/Dashboard.js ***!
  \******************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);

var $ = jquery__WEBPACK_IMPORTED_MODULE_0___default.a;
/* harmony default export */ __webpack_exports__["default"] = ({
  components: {},
  data: function data() {
    return {
      //
    };
  },
  props: {
    //
  },
  computed: {
    //
  },
  created: function created() {
    //
  },
  mounted: function mounted() {
    !function ($) {
      "use strict";

      /**
       Portlet Widget
       */
      var Portlet = function Portlet() {
        this.$body = $("body"), this.$portletIdentifier = ".portlet", this.$portletCloser = '.portlet a[data-toggle="remove"]', this.$portletRefresher = '.portlet a[data-toggle="reload"]';
      };

      //on init
      Portlet.prototype.init = function () {
        // Panel closest
        var $this = this;
        $(document).on("click", this.$portletCloser, function (ev) {
          ev.preventDefault();
          var $portlet = $(this).closest($this.$portletIdentifier);
          var $portlet_parent = $portlet.parent();
          $portlet.slideUp("slow", function () {
            $(this).remove();
          });
          if ($portlet_parent.children().length == 0) {
            $portlet_parent.slideUp("slow", function () {
              $(this).remove();
            });
          }
        });

        // Panel Reload
        $(document).on("click", this.$portletRefresher, function (ev) {
          ev.preventDefault();
          var $portlet = $(this).closest($this.$portletIdentifier);
          // This is just a simulation, nothing is going to be reloaded
          $portlet.append('<div class="panel-disabled"><div class="portlet-loader"></div></div>');
          var $pd = $portlet.find('.panel-disabled');
          setTimeout(function () {
            $pd.fadeOut('fast', function () {
              $pd.remove();
            });
          }, 500 + 300 * (Math.random() * 5));
        });
      },
      //
      $.Portlet = new Portlet(), $.Portlet.Constructor = Portlet;
    }(window.jQuery),
    /**
     * Components
     */
    function ($) {
      "use strict";

      var Components = function Components() {};

      //initializing tooltip
      Components.prototype.initTooltipPlugin = function () {
        $.fn.tooltip && $('[data-toggle="tooltip"]').tooltip();
      },
      //initializing popover
      Components.prototype.initPopoverPlugin = function () {
        $.fn.popover && $('[data-toggle="popover"]').popover();
      },
      //initializing custom modal
      Components.prototype.initCustomModalPlugin = function () {
        $('[data-plugin="custommodal"]').on('click', function (e) {
          Custombox.open({
            target: $(this).attr("href"),
            effect: $(this).attr("data-animation"),
            overlaySpeed: $(this).attr("data-overlaySpeed"),
            overlayColor: $(this).attr("data-overlayColor")
          });
          e.preventDefault();
        });
      },
      //initializing nicescroll
      Components.prototype.initNiceScrollPlugin = function () {
        //You can change the color of scroll bar here
        $.fn.niceScroll && $(".nicescroll").niceScroll({
          cursorcolor: '#98a6ad',
          cursorwidth: '6px',
          cursorborderradius: '5px'
        });
      },
      //initializing Slimscroll
      Components.prototype.initSlimScrollPlugin = function () {
        //You can change the color of scroll bar here
        $.fn.slimScroll && $(".slimscroll-alt").slimScroll({
          position: 'right',
          size: "5px",
          color: '#98a6ad',
          wheelStep: 10
        });
      },
      //range slider
      Components.prototype.initRangeSlider = function () {
        $.fn.slider && $('[data-plugin="range-slider"]').slider({});
      },
      /* -------------
       * Form related controls
       */
      //switch
      Components.prototype.initSwitchery = function () {
        $('[data-plugin="switchery"]').each(function (idx, obj) {
          new Switchery($(this)[0], $(this).data());
        });
      },
      //multiselect
      Components.prototype.initMultiSelect = function () {
        if ($('[data-plugin="multiselect"]').length > 0) $('[data-plugin="multiselect"]').multiSelect($(this).data());
      },
      /* -------------
      * small charts related widgets
      */
      //peity charts
      Components.prototype.initPeityCharts = function () {
        $('[data-plugin="peity-pie"]').each(function (idx, obj) {
          var colors = $(this).attr('data-colors') ? $(this).attr('data-colors').split(",") : [];
          var width = $(this).attr('data-width') ? $(this).attr('data-width') : 20; //default is 20
          var height = $(this).attr('data-height') ? $(this).attr('data-height') : 20; //default is 20
          $(this).peity("pie", {
            fill: colors,
            width: width,
            height: height
          });
        });
        //donut
        $('[data-plugin="peity-donut"]').each(function (idx, obj) {
          var colors = $(this).attr('data-colors') ? $(this).attr('data-colors').split(",") : [];
          var width = $(this).attr('data-width') ? $(this).attr('data-width') : 20; //default is 20
          var height = $(this).attr('data-height') ? $(this).attr('data-height') : 20; //default is 20
          $(this).peity("donut", {
            fill: colors,
            width: width,
            height: height
          });
        });
        $('[data-plugin="peity-donut-alt"]').each(function (idx, obj) {
          $(this).peity("donut");
        });

        // line
        $('[data-plugin="peity-line"]').each(function (idx, obj) {
          $(this).peity("line", $(this).data());
        });

        // bar
        $('[data-plugin="peity-bar"]').each(function (idx, obj) {
          var colors = $(this).attr('data-colors') ? $(this).attr('data-colors').split(",") : [];
          var width = $(this).attr('data-width') ? $(this).attr('data-width') : 20; //default is 20
          var height = $(this).attr('data-height') ? $(this).attr('data-height') : 20; //default is 20
          $(this).peity("bar", {
            fill: colors,
            width: width,
            height: height
          });
        });
      }, Components.prototype.initKnob = function () {
        $('[data-plugin="knob"]').each(function (idx, obj) {
          $(this).knob();
        });
      }, Components.prototype.initCircliful = function () {
        $('[data-plugin="circliful"]').each(function (idx, obj) {
          $(this).circliful();
        });
      }, Components.prototype.initCounterUp = function () {
        var delay = $(this).attr('data-delay') ? $(this).attr('data-delay') : 100; //default is 100
        var time = $(this).attr('data-time') ? $(this).attr('data-time') : 1200; //default is 1200
        $('[data-plugin="counterup"]').each(function (idx, obj) {
          $(this).counterUp({
            delay: 100,
            time: 1200
          });
        });
      },
      //initilizing
      Components.prototype.init = function () {
        var $this = this;
        this.initTooltipPlugin(), this.initPopoverPlugin(), this.initNiceScrollPlugin(), this.initSlimScrollPlugin(), this.initCustomModalPlugin(), this.initRangeSlider(), this.initSwitchery(), this.initMultiSelect(), this.initPeityCharts(), this.initKnob(), this.initCircliful(), this.initCounterUp(),
        //creating portles
        $.Portlet.init();
      }, $.Components = new Components(), $.Components.Constructor = Components;
    }(window.jQuery),
    //initializing main application module
    function ($) {
      "use strict";

      $.Components.init();
    }(window.jQuery);
    !function ($) {
      "use strict";

      var Sidemenu = function Sidemenu() {
        this.$body = $("body"), this.$openLeftBtn = $(".open-left"), this.$menuItem = $("#sidebar-menu a");
      };
      Sidemenu.prototype.openLeftBar = function () {
        $("#wrapper").toggleClass("enlarged");
        $("#wrapper").addClass("forced");
        if ($("#wrapper").hasClass("enlarged") && $("body").hasClass("fixed-left")) {
          $("body").removeClass("fixed-left").addClass("fixed-left-void");
        } else if (!$("#wrapper").hasClass("enlarged") && $("body").hasClass("fixed-left-void")) {
          $("body").removeClass("fixed-left-void").addClass("fixed-left");
        }
        if ($("#wrapper").hasClass("enlarged")) {
          $(".left ul").removeAttr("style");
        } else {
          $(".subdrop").siblings("ul:first").show();
        }
        toggle_slimscroll(".slimscrollleft");
        $("body").trigger("resize");
      },
      //menu item click
      Sidemenu.prototype.menuItemClick = function (e) {
        if (!$("#wrapper").hasClass("enlarged")) {
          if ($(this).parent().hasClass("has_sub")) {}
          if (!$(this).hasClass("subdrop")) {
            // hide any open menus and remove all other classes
            $("ul", $(this).parents("ul:first")).slideUp(350);
            $("a", $(this).parents("ul:first")).removeClass("subdrop");
            $("#sidebar-menu .pull-right i").removeClass("md-remove").addClass("md-add");

            // open our new menu and add the open class
            $(this).next("ul").slideDown(350);
            $(this).addClass("subdrop");
            $(".pull-right i", $(this).parents(".has_sub:last")).removeClass("md-add").addClass("md-remove");
            $(".pull-right i", $(this).siblings("ul")).removeClass("md-remove").addClass("md-add");
          } else if ($(this).hasClass("subdrop")) {
            $(this).removeClass("subdrop");
            $(this).next("ul").slideUp(350);
            $(".pull-right i", $(this).parent()).removeClass("md-remove").addClass("md-add");
          }
        }
      },
      //init sidemenu
      Sidemenu.prototype.init = function () {
        var $this = this;
        var ua = navigator.userAgent,
          event = ua.match(/iP/i) ? "touchstart" : "click";

        //bind on click
        this.$openLeftBtn.on(event, function (e) {
          e.stopPropagation();
          $this.openLeftBar();
        });

        // LEFT SIDE MAIN NAVIGATION
        $this.$menuItem.on(event, $this.menuItemClick);

        // NAVIGATION HIGHLIGHT & OPEN PARENT
        $("#sidebar-menu ul li.has_sub a.active").parents("li:last").children("a:first").addClass("active").trigger("click");
      },
      //init Sidemenu
      $.Sidemenu = new Sidemenu(), $.Sidemenu.Constructor = Sidemenu;
    }(window.jQuery), function ($) {
      "use strict";

      var FullScreen = function FullScreen() {
        this.$body = $("body"), this.$fullscreenBtn = $("#btn-fullscreen");
      };

      //turn on full screen
      // Thanks to http://davidwalsh.name/fullscreen
      FullScreen.prototype.launchFullscreen = function (element) {
        if (element.requestFullscreen) {
          element.requestFullscreen();
        } else if (element.mozRequestFullScreen) {
          element.mozRequestFullScreen();
        } else if (element.webkitRequestFullscreen) {
          element.webkitRequestFullscreen();
        } else if (element.msRequestFullscreen) {
          element.msRequestFullscreen();
        }
      }, FullScreen.prototype.exitFullscreen = function () {
        if (document.exitFullscreen) {
          document.exitFullscreen();
        } else if (document.mozCancelFullScreen) {
          document.mozCancelFullScreen();
        } else if (document.webkitExitFullscreen) {
          document.webkitExitFullscreen();
        }
      },
      //toggle screen
      FullScreen.prototype.toggle_fullscreen = function () {
        var $this = this;
        var fullscreenEnabled = document.fullscreenEnabled || document.mozFullScreenEnabled || document.webkitFullscreenEnabled;
        if (fullscreenEnabled) {
          if (!document.fullscreenElement && !document.mozFullScreenElement && !document.webkitFullscreenElement && !document.msFullscreenElement) {
            $this.launchFullscreen(document.documentElement);
          } else {
            $this.exitFullscreen();
          }
        }
      },
      //init sidemenu
      FullScreen.prototype.init = function () {
        var $this = this;
        //bind
        $this.$fullscreenBtn.on('click', function () {
          $this.toggle_fullscreen();
        });
      },
      //init FullScreen
      $.FullScreen = new FullScreen(), $.FullScreen.Constructor = FullScreen;
    }(window.jQuery),
    //main app module
    function ($) {
      "use strict";

      var App = function App() {
        this.VERSION = "1.6.1", this.AUTHOR = "Coderthemes", this.SUPPORT = "coderthemes@gmail.com", this.pageScrollElement = "html, body", this.$body = $("body");
      };

      //on doc load
      App.prototype.onDocReady = function (e) {
        FastClick.attach(document.body);
        resizefunc.push("initscrolls");
        resizefunc.push("changeptype");
        $('.animate-number').each(function () {
          $(this).animateNumbers($(this).attr("data-value"), true, parseInt($(this).attr("data-duration")));
        });

        //RUN RESIZE ITEMS
        $(window).resize(debounce(resizeitems, 100));
        $("body").trigger("resize");

        // right side-bar toggle
        $('.right-bar-toggle').on('click', function (e) {
          $('#wrapper').toggleClass('right-bar-enabled');
        });
      },
      //initilizing
      App.prototype.init = function () {
        var $this = this;
        //document load initialization
        $(document).ready($this.onDocReady);
        //init side bar - left
        $.Sidemenu.init();
        //init fullscreen
        $.FullScreen.init();
      }, $.App = new App(), $.App.Constructor = App;
    }(window.jQuery),
    //initializing main application module
    function ($) {
      "use strict";

      $.App.init();
    }(window.jQuery);

    /* ------------ some utility functions ----------------------- */
    //this full screen
    var toggle_fullscreen = function toggle_fullscreen() {};
    function executeFunctionByName(functionName, context /*, args */) {
      var args = [].slice.call(arguments).splice(2);
      var namespaces = functionName.split(".");
      var func = namespaces.pop();
      for (var i = 0; i < namespaces.length; i++) {
        context = context[namespaces[i]];
      }
      return context[func].apply(this, args);
    }
    var w, h, dw, dh;
    var changeptype = function changeptype() {
      w = $(window).width();
      h = $(window).height();
      dw = $(document).width();
      dh = $(document).height();
      if (jQuery.browser.mobile === true) {
        $("body").addClass("mobile").removeClass("fixed-left");
      }
      if (!$("#wrapper").hasClass("forced")) {
        if (w > 1024) {
          $("body").removeClass("smallscreen").addClass("widescreen");
          $("#wrapper").removeClass("enlarged");
        } else {
          $("body").removeClass("widescreen").addClass("smallscreen");
          $("#wrapper").addClass("enlarged");
          $(".left ul").removeAttr("style");
        }
        if ($("#wrapper").hasClass("enlarged") && $("body").hasClass("fixed-left")) {
          $("body").removeClass("fixed-left").addClass("fixed-left-void");
        } else if (!$("#wrapper").hasClass("enlarged") && $("body").hasClass("fixed-left-void")) {
          $("body").removeClass("fixed-left-void").addClass("fixed-left");
        }
      }
      toggle_slimscroll(".slimscrollleft");
    };
    var debounce = function debounce(func, wait, immediate) {
      var timeout, result;
      return function () {
        var context = this,
          args = arguments;
        var later = function later() {
          timeout = null;
          if (!immediate) result = func.apply(context, args);
        };
        var callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) result = func.apply(context, args);
        return result;
      };
    };
    function resizeitems() {
      if ($.isArray(resizefunc)) {
        for (i = 0; i < resizefunc.length; i++) {
          window[resizefunc[i]]();
        }
      }
    }
    function initscrolls() {
      if (jQuery.browser.mobile !== true) {
        //SLIM SCROLL
        $('.slimscroller').slimscroll({
          height: 'auto',
          size: "5px"
        });
        $('.slimscrollleft').slimScroll({
          height: 'auto',
          position: 'right',
          size: "5px",
          color: '#dcdcdc',
          wheelStep: 5
        });
      }
    }
    function toggle_slimscroll(item) {
      if ($("#wrapper").hasClass("enlarged")) {
        $(item).css("overflow", "inherit").parent().css("overflow", "inherit");
        $(item).siblings(".slimScrollBar").css("visibility", "hidden");
      } else {
        $(item).css("overflow", "hidden").parent().css("overflow", "hidden");
        $(item).siblings(".slimScrollBar").css("visibility", "visible");
      }
    }

    // === following js will activate the menu in left side bar based on url ====
    $(document).ready(function () {
      $("#sidebar-menu a").each(function () {
        var pageUrl = window.location.href.split(/[?#]/)[0];
        if (this.href == pageUrl) {
          $(this).addClass("active");
          $(this).parent().addClass("active"); // add active to li of the current link
          $(this).parent().parent().prev().addClass("active"); // add active class to an anchor
          $(this).parent().parent().prev().click(); // click the item to make it drop
        }
      });
    });
  },

  methods: {
    //
  }
});

/***/ }),

/***/ "./resources/js/Mixins/MobileDetection.js":
/*!************************************************!*\
  !*** ./resources/js/Mixins/MobileDetection.js ***!
  \************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ({
  components: {},
  data: function data() {
    return {
      //
    };
  },
  props: {
    //
  },
  computed: {
    //
  },
  created: function created() {
    //
  },
  mounted: function mounted() {
    //
  },
  methods: {
    isMobile: function isMobile() {
      var check = false;
      (function (a) {
        if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))) check = true;
      })(navigator.userAgent || navigator.vendor || window.opera);
      return check;
    }
  }
});

/***/ }),

/***/ "./resources/js/Pages/inc/Layout.vue":
/*!*******************************************!*\
  !*** ./resources/js/Pages/inc/Layout.vue ***!
  \*******************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Layout_vue_vue_type_template_id_6abfaf64___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Layout.vue?vue&type=template&id=6abfaf64& */ "./resources/js/Pages/inc/Layout.vue?vue&type=template&id=6abfaf64&");
/* harmony import */ var _Layout_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Layout.vue?vue&type=script&lang=js& */ "./resources/js/Pages/inc/Layout.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _Layout_vue_vue_type_style_index_0_id_6abfaf64_lang_css___WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./Layout.vue?vue&type=style&index=0&id=6abfaf64&lang=css& */ "./resources/js/Pages/inc/Layout.vue?vue&type=style&index=0&id=6abfaf64&lang=css&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");






/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__["default"])(
  _Layout_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Layout_vue_vue_type_template_id_6abfaf64___WEBPACK_IMPORTED_MODULE_0__["render"],
  _Layout_vue_vue_type_template_id_6abfaf64___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/Pages/inc/Layout.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/Pages/inc/Layout.vue?vue&type=script&lang=js&":
/*!********************************************************************!*\
  !*** ./resources/js/Pages/inc/Layout.vue?vue&type=script&lang=js& ***!
  \********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Layout_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./Layout.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/inc/Layout.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Layout_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/Pages/inc/Layout.vue?vue&type=style&index=0&id=6abfaf64&lang=css&":
/*!****************************************************************************************!*\
  !*** ./resources/js/Pages/inc/Layout.vue?vue&type=style&index=0&id=6abfaf64&lang=css& ***!
  \****************************************************************************************/
/*! no static exports found */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Layout_vue_vue_type_style_index_0_id_6abfaf64_lang_css___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/style-loader!../../../../node_modules/css-loader??ref--6-1!../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../node_modules/postcss-loader/src??ref--6-2!../../../../node_modules/vue-loader/lib??vue-loader-options!./Layout.vue?vue&type=style&index=0&id=6abfaf64&lang=css& */ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/inc/Layout.vue?vue&type=style&index=0&id=6abfaf64&lang=css&");
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Layout_vue_vue_type_style_index_0_id_6abfaf64_lang_css___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Layout_vue_vue_type_style_index_0_id_6abfaf64_lang_css___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Layout_vue_vue_type_style_index_0_id_6abfaf64_lang_css___WEBPACK_IMPORTED_MODULE_0__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Layout_vue_vue_type_style_index_0_id_6abfaf64_lang_css___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));


/***/ }),

/***/ "./resources/js/Pages/inc/Layout.vue?vue&type=template&id=6abfaf64&":
/*!**************************************************************************!*\
  !*** ./resources/js/Pages/inc/Layout.vue?vue&type=template&id=6abfaf64& ***!
  \**************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_loaders_templateLoader_js_ref_6_node_modules_vue_loader_lib_index_js_vue_loader_options_Layout_vue_vue_type_template_id_6abfaf64___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??ref--6!../../../../node_modules/vue-loader/lib??vue-loader-options!./Layout.vue?vue&type=template&id=6abfaf64& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/inc/Layout.vue?vue&type=template&id=6abfaf64&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_loaders_templateLoader_js_ref_6_node_modules_vue_loader_lib_index_js_vue_loader_options_Layout_vue_vue_type_template_id_6abfaf64___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_loaders_templateLoader_js_ref_6_node_modules_vue_loader_lib_index_js_vue_loader_options_Layout_vue_vue_type_template_id_6abfaf64___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);