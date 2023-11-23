!(function (n) {
  "use strict";
  function c() {
    for (var e = document.getElementById("topnav-menu-content").getElementsByTagName("a"), t = 0, n = e.length; t < n; t++)
      "nav-item dropdown active" === e[t].parentElement.getAttribute("class") && (e[t].parentElement.classList.remove("active"), e[t].nextElementSibling.classList.remove("show"));
  }
  function t(e) {
    1 == n("#light-mode-switch").prop("checked") && "light-mode-switch" === e
      ? (n("html").removeAttr("dir"),
        n("#dark-mode-switch").prop("checked", !1),
        n("#rtl-mode-switch").prop("checked", !1),
        n("#bootstrap-style").attr( "href", "http://localhost/sekolah/admin/assets/css/bootstrap.min.css"),
        n("#app-style").attr( "href", "http://localhost/sekolah/admin/assets/css/app.min.css"),
        sessionStorage.setItem("is_visited", "light-mode-switch"))
      : 1 == n("#dark-mode-switch").prop("checked") && "dark-mode-switch" === e
      ? (n("html").removeAttr("dir"),
        n("#light-mode-switch").prop("checked", !1),
        n("#rtl-mode-switch").prop("checked", !1),
        n("#bootstrap-style").attr( "href", "http://localhost/sekolah/admin/assets/css/bootstrap-dark.min.css"),
        n("#app-style").attr( "href", "http://localhost/sekolah/admin/assets/css/app-dark.min.css"),
        sessionStorage.setItem("is_visited", "dark-mode-switch"))
      : 1 == n("#rtl-mode-switch").prop("checked") &&
        "rtl-mode-switch" === e &&
        (n("#light-mode-switch").prop("checked", !1),
        n("#dark-mode-switch").prop("checked", !1),
        n("#bootstrap-style").attr( "href", "http://localhost/sekolah/admin/assets/css/bootstrap-rtl.min.css"),
        n("#app-style").attr( "href", "http://localhost/sekolah/admin/assets/css/app-rtl.min.css"),
        n("html").attr("dir", "rtl"),
        sessionStorage.setItem("is_visited", "rtl-mode-switch"));
  }
  function e() {
    var e = document.querySelectorAll(".counter_value");
    e.forEach(function (s) {
      !(function e() {
        var t = +s.getAttribute("data-target"),
          n = +s.innerText,
          c = t / 250;
        n < t ? ((s.innerText = (n + c).toFixed(0)), setTimeout(e, 1)) : (s.innerText = t);
      })();
    });
  }
  function s() {
    document.webkitIsFullScreen || document.mozFullScreen || document.msFullscreenElement || (console.log("pressed"), n("body").removeClass("fullscreen-enable"));
  }
  var a;
  n("#side-menu").metisMenu(),
    n("#vertical-menu-btn").on("click", function (e) {
      e.preventDefault(), n("body").toggleClass("sidebar-enable"), 992 <= n(window).width() ? n("body").toggleClass("vertical-collpsed") : n("body").removeClass("vertical-collpsed");
    }),
    n("body,html").click(function (e) {
      var t = n("#vertical-menu-btn");
      t.is(e.target) || 0 !== t.has(e.target).length || e.target.closest("div.vertical-menu") || n("body").removeClass("sidebar-enable");
    }),
    n("#sidebar-menu a").each(function () {
      var e = window.location.href.split(/[?#]/)[0];
      this.href == e &&
        (n(this).addClass("active"),
        n(this).parent().addClass("mm-active"),
        n(this).parent().parent().addClass("mm-show"),
        n(this).parent().parent().prev().addClass("mm-active"),
        n(this).parent().parent().parent().addClass("mm-active"),
        n(this).parent().parent().parent().parent().addClass("mm-show"),
        n(this).parent().parent().parent().parent().parent().addClass("mm-active"));
    }),
    n(".navbar-nav a").each(function () {
      var e = window.location.href.split(/[?#]/)[0];
      this.href == e &&
        (n(this).addClass("active"),
        n(this).parent().addClass("active"),
        n(this).parent().parent().addClass("active"),
        n(this).parent().parent().parent().addClass("active"),
        n(this).parent().parent().parent().parent().addClass("active"),
        n(this).parent().parent().parent().parent().parent().addClass("active"));
    }),
    n(document).ready(function () {
      var e;
      0 < n("#sidebar-menu").length &&
        0 < n("#sidebar-menu .mm-active .active").length &&
        300 < (e = n("#sidebar-menu .mm-active .active").offset().top) &&
        ((e -= 300), n(".vertical-menu .simplebar-content-wrapper").animate({ scrollTop: e }, "slow"));
    }),
    n('[data-toggle="fullscreen"]').on("click", function (e) {
      e.preventDefault(),
        n("body").toggleClass("fullscreen-enable"),
        document.fullscreenElement || document.mozFullScreenElement || document.webkitFullscreenElement
          ? document.cancelFullScreen
            ? document.cancelFullScreen()
            : document.mozCancelFullScreen
            ? document.mozCancelFullScreen()
            : document.webkitCancelFullScreen && document.webkitCancelFullScreen()
          : document.documentElement.requestFullscreen
          ? document.documentElement.requestFullscreen()
          : document.documentElement.mozRequestFullScreen
          ? document.documentElement.mozRequestFullScreen()
          : document.documentElement.webkitRequestFullscreen && document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
    }),
    document.addEventListener("fullscreenchange", s),
    document.addEventListener("webkitfullscreenchange", s),
    document.addEventListener("mozfullscreenchange", s),
    n(".right-bar-toggle").on("click", function (e) {
      n("body").toggleClass("right-bar-enabled");
    }),
    n(document).on("click", "body", function (e) {
      0 < n(e.target).closest(".right-bar-toggle, .right-bar").length || n("body").removeClass("right-bar-enabled");
    }),
    (function () {
      if (document.getElementById("topnav-menu-content")) {
        for (var e = document.getElementById("topnav-menu-content").getElementsByTagName("a"), t = 0, n = e.length; t < n; t++)
          e[t].onclick = function (e) {
            "#" === e.target.getAttribute("href") && (e.target.parentElement.classList.toggle("active"), e.target.nextElementSibling.classList.toggle("show"));
          };
        window.addEventListener("resize", c);
      }
    })(),
    [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]')).map(function (e) {
      return new bootstrap.Tooltip(e);
    }),
    [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]')).map(function (e) {
      return new bootstrap.Popover(e);
    }),
    n(window).on("load", function () {
      n("#status").fadeOut(), n("#preloader").delay(350).fadeOut("slow");
    }),
    window.sessionStorage && ((a = sessionStorage.getItem("is_visited")) ? (n(".right-bar input:checkbox").prop("checked", !1), n("#" + a).prop("checked", !0), t(a)) : sessionStorage.setItem("is_visited", "light-mode-switch")),
    n("#light-mode-switch, #dark-mode-switch, #rtl-mode-switch").on("change", function (e) {
      t(e.target.id);
    }),
    e(),
    n("#checkAll").on("change", function () {
      n(".table-check .form-check-input").prop("checked", n(this).prop("checked"));
    }),
    n(".table-check .form-check-input").change(function () {
      n(".table-check .form-check-input:checked").length == n(".table-check .form-check-input").length ? n("#checkAll").prop("checked", !0) : n("#checkAll").prop("checked", !1);
    }),
    Waves.init();
})(jQuery);
