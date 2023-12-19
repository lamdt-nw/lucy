<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<?php
    $seo_title = $seo_title ?? ($page->title ?? ($web_information->information->seo_title ?? ''));
    $seo_keyword = $seo_keyword ?? ($page->keyword ?? ($web_information->information->seo_keyword ?? ''));
    $seo_description = $seo_description ?? ($page->description ?? ($web_information->information->seo_description ?? ''));
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>
      <?php echo e($seo_title); ?>

    </title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="robots" content="index, follow" />
	<meta http-equiv="Content-Language" content="vi" />
	<meta name="copyright" content="Copyright" />
	<meta name="description" content="<?php echo e($seo_description); ?>" />
	<meta name="keywords" content="<?php echo e($seo_keyword); ?>" />
    <script>
      window._wpemojiSettings = {
        "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
        "ext": ".png",
        "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
        "svgExt": ".svg",
        "source": {
          "concatemoji": "https:\/\/themesflat.co\/kitmellis\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.1"
        }
      };
      /*! This file is auto-generated */
      !
      function(i, n) {
        var o, s, e;
        function c(e) {
          try {
            var t = {
              supportTests: e,
              timestamp: (new Date).valueOf()
            };
            sessionStorage.setItem(o, JSON.stringify(t))
          } catch(e) {}
        }
        function p(e, t, n) {
          e.clearRect(0, 0, e.canvas.width, e.canvas.height),
          e.fillText(t, 0, 0);
          var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
          r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
          return t.every(function(e, t) {
            return e === r[t]
          })
        }
        function u(e, t, n) {
          switch (t) {
          case "flag":
            return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
          case "emoji":
            return ! n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff", "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
          }
          return ! 1
        }
        function f(e, t, n) {
          var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"),
          a = r.getContext("2d", {
            willReadFrequently: !0
          }),
          o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
          return e.forEach(function(e) {
            o[e] = t(a, e, n)
          }),
          o
        }
        function t(e) {
          var t = i.createElement("script");
          t.src = e,
          t.defer = !0,
          i.head.appendChild(t)
        }
        "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
          everything: !0,
          everythingExceptFlag: !0
        },
        e = new Promise(function(e) {
          i.addEventListener("DOMContentLoaded", e, {
            once: !0
          })
        }), new Promise(function(t) {
          var n = function() {
            try {
              var e = JSON.parse(sessionStorage.getItem(o));
              if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
            } catch(e) {}
            return null
          } ();
          if (!n) {
            if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
              var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));",
              r = new Blob([e], {
                type: "text/javascript"
              }),
              a = new Worker(URL.createObjectURL(r), {
                name: "wpTestEmojiSupports"
              });
              return void(a.onmessage = function(e) {
                c(n = e.data),
                a.terminate(),
                t(n)
              })
            } catch(e) {}
            c(n = f(s, u, p))
          }
          t(n)
        }).then(function(e) {
          for (var t in e) n.supports[t] = e[t],
          n.supports.everything = n.supports.everything && n.supports[t],
          "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
          n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag,
          n.DOMReady = !1,
          n.readyCallback = function() {
            n.DOMReady = !0
          }
        }).then(function() {
          return e
        }).then(function() {
          var e;
          n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
        }))
      } ((window, document), window._wpemojiSettings);
    </script>
    <link rel='stylesheet' id='iziModal-css' href="<?php echo e(asset('themes/frontend/css/iziModal.css')); ?>"
    media='all' />
    <link rel='stylesheet' id='tf-font-awesome-css' href="<?php echo e(asset('themes/frontend/css/all.min.css')); ?>"
    media='all' />
    <link rel='stylesheet' id='tf-regular-css' href="<?php echo e(asset('themes/frontend/css/regular.min.css')); ?>"
    media='all' />
    <link rel='stylesheet' id='tf-style-css' href="<?php echo e(asset('themes/frontend/css/tf-style.css')); ?>"
    media='all' />
    <style id='wp-emoji-styles-inline-css'>
      img.wp-smiley, img.emoji { display: inline !important; border: none !important;
      box-shadow: none !important; height: 1em !important; width: 1em !important;
      margin: 0 0.07em !important; vertical-align: -0.1em !important; background:
      none !important; padding: 0 !important; }
    </style>
    <link rel='stylesheet' id='wp-block-library-css' href="<?php echo e(asset('themes/frontend/css/style2.min.css')); ?>"
    media='all' />
    <style id='classic-theme-styles-inline-css'>
      /*! This file is auto-generated */ .wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em
      + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
    </style>
    <style id='global-styles-inline-css'>
      body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray:
      #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink:
      #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange:
      #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan:
      #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue:
      #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple:
      #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1)
      0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan:
      linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange:
      linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red:
      linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray:
      linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum:
      linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186)
      40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple:
      linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux:
      linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62)
      100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112)
      0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean:
      linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181)
      100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128)
      0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129)
      0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium:
      20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large:
      42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40:
      1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70:
      3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural:
      6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px
      rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0,
      0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255,
      255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px
      0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap:
      0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start:
      0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start:
      2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left:
      auto !important;margin-right: auto !important;}body .is-layout-constrained
      > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body
      .is-layout-constrained > .alignright{float: right;margin-inline-start:
      2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left:
      auto !important;margin-right: auto !important;}body .is-layout-constrained
      > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width:
      var(--wp--style--global--content-size);margin-left: auto !important;margin-right:
      auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body
      .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items:
      center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display:
      grid;}body .is-layout-grid > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap:
      2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap:
      1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color:
      var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color:
      var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color:
      var(--wp--preset--color--white) !important;}.has-pale-pink-color{color:
      var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color:
      var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color:
      var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color:
      var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color:
      var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color:
      var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color:
      var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color:
      var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color:
      var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color:
      var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color:
      var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color:
      var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color:
      var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color:
      var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color:
      var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color:
      var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color:
      var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color:
      var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color:
      var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color:
      var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color:
      var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color:
      var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color:
      var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color:
      var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color:
      var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color:
      var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color:
      var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color:
      var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color:
      var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color:
      var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color:
      var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color:
      var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color:
      var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background:
      var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background:
      var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background:
      var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange)
      !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background:
      var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background:
      var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background:
      var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background:
      var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background:
      var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background:
      var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background:
      var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background:
      var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background:
      var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size:
      var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size:
      var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size:
      var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size:
      var(--wp--preset--font-size--x-large) !important;} .wp-block-navigation
      a:where(:not(.wp-element-button)){color: inherit;} :where(.wp-block-post-template.is-layout-flex){gap:
      1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;} :where(.wp-block-columns.is-layout-flex){gap:
      2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;} .wp-block-pullquote{font-size:
      1.5em;line-height: 1.6;}
    </style>
    <link rel='stylesheet' id='template-kit-export-css' href="<?php echo e(asset('themes/frontend/css/template-kit-export-public.min.css')); ?>"
    media='all' />
    <link rel='stylesheet' id='woocommerce-layout-css' href="<?php echo e(asset('themes/frontend/css/woocommerce-layout.css')); ?>"
    media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css' href="<?php echo e(asset('themes/frontend/css/woocommerce-smallscreen.css')); ?>"
    media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css' href="<?php echo e(asset('themes/frontend/css/woocommerce.css')); ?>"
    media='all' />
    <style id='woocommerce-inline-inline-css'>
      .woocommerce form .form-row .required { visibility: visible; }
    </style>
    <link rel='stylesheet' id='text-editor-style-css' href="<?php echo e(asset('themes/frontend/css/text-editor.css')); ?>"
    media='all' />
    <link rel='stylesheet' id='hello-elementor-css' href="<?php echo e(asset('themes/frontend/css/style.min.css')); ?>"
    media='all' />
    <link rel='stylesheet' id='hello-elementor-theme-style-css' href="<?php echo e(asset('themes/frontend/css/theme.min.css')); ?>"
    media='all' />
    <link rel='stylesheet' id='elementor-frontend-css' href="<?php echo e(asset('themes/frontend/css/frontend-lite.min.css')); ?>"
    media='all' />
    <link rel='stylesheet' id='elementor-post-5-css' href="<?php echo e(asset('themes/frontend/css/post-5.css')); ?>"
    media='all' />
    <link rel='stylesheet' id='elementor-icons-ekiticons-css' href="<?php echo e(asset('themes/frontend/css/ekiticons.css')); ?>"
    media='all' />
    <link rel='stylesheet' id='elementor-icons-css' href="<?php echo e(asset('themes/frontend/css/elementor-icons.min.css')); ?>"
    media='all' />
    <link rel='stylesheet' id='swiper-css' href="<?php echo e(asset('themes/frontend/css/swiper.min.css')); ?>"
    media='all' />
    <link rel='stylesheet' id='elementor-post-1856-css' href="<?php echo e(asset('themes/frontend/css/post-1856.css')); ?>"
    media='all' />
    <link rel='stylesheet' id='font-awesome-5-all-css' href="<?php echo e(asset('themes/frontend/css/all.min.css')); ?>"
    media='all' />
    <link rel='stylesheet' id='font-awesome-4-shim-css' href="<?php echo e(asset('themes/frontend/css/v4-shims.min.css')); ?>"
    media='all' />
    <link rel='stylesheet' id='ekit-widget-styles-css' href="<?php echo e(asset('themes/frontend/css/widget-styles.css')); ?>"
    media='all' />
    <link rel='stylesheet' id='ekit-responsive-css' href="<?php echo e(asset('themes/frontend/css/responsive.css')); ?>"
    media='all' />
    <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Libre+Baskerville%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CManrope%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CParisienne%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.4.1'
    media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css' href="<?php echo e(asset('themes/frontend/css/fontawesome.min.css')); ?>"
    media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css' href="<?php echo e(asset('themes/frontend/css/solid.min.css')); ?>"
    media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-brands-css' href="<?php echo e(asset('themes/frontend/css/brands.min.css')); ?>"
    media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script src="<?php echo e(asset('themes/frontend/js/jquery.min.js')); ?>" id="jquery-core-js">
    </script>
    
    <script src="<?php echo e(asset('themes/frontend/js/jquery-migrate.min.js')); ?>" id="jquery-migrate-js">
    </script>

    <script src="<?php echo e(asset('themes/frontend/js/swiper.min.js')); ?>" id="tf-swiper-js">
    </script>
    <script src="<?php echo e(asset('themes/frontend/js/template-kit-export-public.min.js')); ?>" id="template-kit-export-js">
    </script>
    <script src="<?php echo e(asset('themes/frontend/js/v4-shims.min.js')); ?>" id="font-awesome-4-shim-js">
    </script>
    <link rel="https://api.w.org/" href="https://themesflat.co/kitmellis/wp-json/"
    />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://themesflat.co/kitmellis/xmlrpc.php?rsd"
    />
    <meta name="generator" content="Laravel 8.0" />
    <meta name="generator" content="Laravel 8.0" />
    <link rel="canonical" href="<?php echo e(url('/')); ?>"
    />

    <meta name="generator" content="Elementor 3.17.1; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
    <link rel="icon" href="<?php echo e($web_information->image->favicon ?? ''); ?>"
    sizes="32x32" />
    <link rel="icon" href="<?php echo e($web_information->image->favicon ?? ''); ?>"
    sizes="192x192" />
    <link rel="apple-touch-icon" href="<?php echo e($web_information->image->favicon ?? ''); ?>"
    />
    <meta name="msapplication-TileImage" content="<?php echo e($web_information->image->favicon ?? ''); ?>"
    />

    <link rel="stylesheet" href="<?php echo e(asset('themes/frontend/css/widget-icon-list.min.css')); ?>">

    <?php if(isset($web_information->source_code->css)): ?>
	  <style>
	    <?php echo $web_information->source_code->css; ?>

	  </style>
	<?php endif; ?>
  
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('themes/frontend/css/slick.css')); ?>"/>

  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('themes/frontend/css/slick-theme.css')); ?>"/>
</script>
</head>
  
<body class="envato_tk_templates-template envato_tk_templates-template-elementor_header_footer single single-envato_tk_templates postid-1856 theme-hello-elementor woocommerce-no-js elementor-default elementor-template-full-width elementor-kit-5 elementor-page elementor-page-1856">
    <div id="page" class="hfeed site">

    	<?php echo $__env->make('frontend.element.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    	
    		<?php echo $__env->yieldContent('content'); ?>
    	

    	<?php echo $__env->make('frontend.element.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		  <?php echo $__env->make('frontend.panels.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		  <script type="text/javascript" src="<?php echo e(asset('themes/frontend/js/slick.min.js')); ?>"></script>

      <script type="text/javascript">

  jQuery(document).ready(function(){

    jQuery('.autoplay').slick({

  dots: true,

  infinite: false,

  prevArrow: false,

  nextArrow: false,

  speed: 300,

  slidesToShow: 3,

  slidesToScroll: 1,

  responsive: [

    {

      breakpoint: 1024,

      settings: {

        slidesToShow: 3,

        slidesToScroll: 1,

        infinite: true,

        prevArrow: false,

        nextArrow: false,

        dots: true

      }

    },

    {

      breakpoint: 600,

      settings: {

        slidesToShow: 1,

        slidesToScroll: 1,

        prevArrow: false,

        nextArrow: false

      }

    },

    {

      breakpoint: 480,

      settings: {

        slidesToShow: 1,

        slidesToScroll: 1

      }

    }

    // You can unslick at a given breakpoint now by adding:

    // settings: "unslick"

    // instead of a settings object

  ]

}); 

  jQuery('.autoplay1').slick({

  dots: true,

  infinite: true,

  prevArrow: false,

  nextArrow: false,

  autoplay: true,
  
  autoplaySpeed: 2000,

  speed: 300,

  slidesToShow: 3,

  slidesToScroll: 1,

  responsive: [

    {

      breakpoint: 1024,

      settings: {

        slidesToShow: 3,

        slidesToScroll: 1,

        infinite: true,

        prevArrow: false,

        nextArrow: false,

        dots: true,


      }

    },

    {

      breakpoint: 600,

      settings: {

        slidesToShow: 1,

        slidesToScroll: 1,

        prevArrow: false,

        nextArrow: false

      }

    },

    {

      breakpoint: 480,

      settings: {

        slidesToShow: 1,

        slidesToScroll: 1

      }

    }

    // You can unslick at a given breakpoint now by adding:

    // settings: "unslick"

    // instead of a settings object

  ]

}); 

});

</script>  

    </div>
</body>

</html><?php /**PATH E:\xampp74\htdocs\logistics\resources\views/frontend/layouts/default.blade.php ENDPATH**/ ?>