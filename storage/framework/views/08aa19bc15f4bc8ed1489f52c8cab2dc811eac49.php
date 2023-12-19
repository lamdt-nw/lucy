<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<?php
    $seo_title = $seo_title ?? ($page->title ?? ($web_information->information->seo_title ?? ''));
    $seo_keyword = $seo_keyword ?? ($page->keyword ?? ($web_information->information->seo_keyword ?? ''));
    $seo_description = $seo_description ?? ($page->description ?? ($web_information->information->seo_description ?? ''));
?>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>
      <?php echo e($seo_title); ?>

    </title>
    <meta name="copyright" content="Copyright" />
    <meta name="title" content="<?php echo e($seo_title); ?>" />
    <meta name="description" content="<?php echo e($seo_description); ?>" />
    <meta name="keywords" content="<?php echo e($seo_keyword); ?>" />
    <meta name="robots" content="max-image-preview:large">
    <link rel="dns-prefetch" href="https://fonts.googleapis.com/">
    <link rel="dns-prefetch" href="https://use.fontawesome.com/">
    <link rel="alternate" type="application/rss+xml" title="Immigway » Feed"
    href="https://demo.bravisthemes.com/immigway/feed/">
    <link rel="alternate" type="application/rss+xml" title="Immigway » Comments Feed"
    href="https://demo.bravisthemes.com/immigway/comments/feed/">
    <script type="text/javascript">
      /* <![CDATA[ */
      window._wpemojiSettings = {
        "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
        "ext": ".png",
        "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
        "svgExt": ".svg",
        "source": {
          "concatemoji": "https:\/\/demo.bravisthemes.com\/immigway\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.1"
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
      /* ]]> */
      
    </script>
    <style id="wp-emoji-styles-inline-css" type="text/css">
      img.wp-smiley, img.emoji { display: inline !important; border: none !important;
      box-shadow: none !important; height: 1em !important; width: 1em !important;
      margin: 0 0.07em !important; vertical-align: -0.1em !important; background:
      none !important; padding: 0 !important; }
    </style>
    <link rel="stylesheet" id="wp-block-library-css" href="<?php echo e(asset('themes/frontend/css/style.min.css')); ?>" type="text/css" media="all">
    <style id="classic-theme-styles-inline-css" type="text/css">
      /*! This file is auto-generated */ .wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em
      + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
    </style>
    <style id="global-styles-inline-css" type="text/css">
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
    <link rel="stylesheet" id="redux-extendify-styles-css" href="<?php echo e(asset('themes/frontend/css/redux-extendify-styles.min.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="booked-tooltipster-css" href="<?php echo e(asset('themes/frontend/css/booked-tooltipster.min.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="booked-tooltipster-theme-css" href="<?php echo e(asset('themes/frontend/css/booked-tooltipster-theme.min.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="booked-animations-css" href="<?php echo e(asset('themes/frontend/css/booked-animations.min.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="booked-css-css" href="<?php echo e(asset('themes/frontend/css/booked-css.min.css')); ?>"
    type="text/css" media="all">
    <style id="booked-css-inline-css" type="text/css">
      #ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar
      tbody td a.ui-state-active,#ui-datepicker-div.booked_custom_date_picker
      table.ui-datepicker-calendar tbody td a.ui-state-active:hover,body #booked-profile-page
      input[type=submit].button-primary:hover,body .booked-list-view button.button:hover,
      body .booked-list-view input[type=submit].button-primary:hover,body div.booked-calendar
      input[type=submit].button-primary:hover,body .booked-modal input[type=submit].button-primary:hover,body
      div.booked-calendar .bc-head,body div.booked-calendar .bc-head .bc-col,body
      div.booked-calendar .booked-appt-list .timeslot .timeslot-people button:hover,body
      #booked-profile-page .booked-profile-header,body #booked-profile-page .booked-tabs
      li.active a,body #booked-profile-page .booked-tabs li.active a:hover,body
      #booked-profile-page .appt-block .google-cal-button > a:hover,#ui-datepicker-div.booked_custom_date_picker
      .ui-datepicker-header{ background:#e13833 !important; }body #booked-profile-page
      input[type=submit].button-primary:hover,body div.booked-calendar input[type=submit].button-primary:hover,body
      .booked-list-view button.button:hover, body .booked-list-view input[type=submit].button-primary:hover,body
      .booked-modal input[type=submit].button-primary:hover,body div.booked-calendar
      .bc-head .bc-col,body div.booked-calendar .booked-appt-list .timeslot .timeslot-people
      button:hover,body #booked-profile-page .booked-profile-header,body #booked-profile-page
      .appt-block .google-cal-button > a:hover{ border-color:#e13833 !important;
      }body div.booked-calendar .bc-row.days,body div.booked-calendar .bc-row.days
      .bc-col,body .booked-calendarSwitcher.calendar,body #booked-profile-page
      .booked-tabs,#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar
      thead,#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar
      thead th{ background:#162842 !important; }body div.booked-calendar .bc-row.days
      .bc-col,body #booked-profile-page .booked-tabs{ border-color:#162842 !important;
      }#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar
      tbody td.ui-datepicker-today a,#ui-datepicker-div.booked_custom_date_picker
      table.ui-datepicker-calendar tbody td.ui-datepicker-today a:hover,body
      #booked-profile-page input[type=submit].button-primary,body div.booked-calendar
      input[type=submit].button-primary,body .booked-list-view button.button,
      body .booked-list-view input[type=submit].button-primary,body .booked-list-view
      button.button, body .booked-list-view input[type=submit].button-primary,body
      .booked-modal input[type=submit].button-primary,body div.booked-calendar
      .booked-appt-list .timeslot .timeslot-people button,body #booked-profile-page
      .booked-profile-appt-list .appt-block.approved .status-block,body #booked-profile-page
      .appt-block .google-cal-button > a,body .booked-modal p.booked-title-bar,body
      div.booked-calendar .bc-col:hover .date span,body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active,body
      .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active:hover,.booked-ms-modal
      .booked-book-appt,body #booked-profile-page .booked-tabs li a .counter{
      background:#e13833; }body #booked-profile-page input[type=submit].button-primary,body
      div.booked-calendar input[type=submit].button-primary,body .booked-list-view
      button.button, body .booked-list-view input[type=submit].button-primary,body
      .booked-list-view button.button, body .booked-list-view input[type=submit].button-primary,body
      .booked-modal input[type=submit].button-primary,body #booked-profile-page
      .appt-block .google-cal-button > a,body div.booked-calendar .booked-appt-list
      .timeslot .timeslot-people button,body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active,body
      .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active:hover{
      border-color:#e13833; }body .booked-modal .bm-window p i.fa,body .booked-modal
      .bm-window a,body .booked-appt-list .booked-public-appointment-title,body
      .booked-modal .bm-window p.appointment-title,.booked-ms-modal.visible:hover
      .booked-book-appt{ color:#e13833; }.booked-appt-list .timeslot.has-title
      .booked-public-appointment-title { color:inherit; }
    </style>
    <link rel="stylesheet" id="pxl-main-css-css" href="<?php echo e(asset('themes/frontend/css/pxl-main-css.min.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="font-awesome-pro-css" href="<?php echo e(asset('themes/frontend/css/all.min.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="contact-form-7-css" href="<?php echo e(asset('themes/frontend/css/contact-form-7.min.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="woocommerce-layout-css" href="<?php echo e(asset('themes/frontend/css/woocommerce-layout.min.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="woocommerce-smallscreen-css" href="<?php echo e(asset('themes/frontend/css/woocommerce-smallscreen.min.css')); ?>"
    type="text/css" media="only screen and (max-width: 768px)">
    <link rel="stylesheet" id="woocommerce-general-css" href="<?php echo e(asset('themes/frontend/css/woocommerce-general.min.css')); ?>"
    type="text/css" media="all">
    <style id="woocommerce-inline-inline-css" type="text/css">
      .woocommerce form .form-row .required { visibility: visible; }
    </style>
    <link rel="stylesheet" id="ppress-frontend-css" href="<?php echo e(asset('themes/frontend/css/frontend.min.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="ppress-flatpickr-css" href="<?php echo e(asset('themes/frontend/css/flatpickr.min.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="ppress-select2-css" href="<?php echo e(asset('themes/frontend/css/select2.min.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="elementor-icons-css" href="<?php echo e(asset('themes/frontend/css/elementor-icons.min.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="elementor-frontend-css" href="<?php echo e(asset('themes/frontend/css/custom-frontend-lite.min.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="swiper-css" href="<?php echo e(asset('themes/frontend/css/swiper.min.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-7-css" href="<?php echo e(asset('themes/frontend/css/post-7.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="elementor-global-css" href="<?php echo e(asset('themes/frontend/css/global.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-215-css" href="<?php echo e(asset('themes/frontend/css/post-215.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-2876-css" href="<?php echo e(asset('themes/frontend/css/post-2876.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-3635-css" href="<?php echo e(asset('themes/frontend/css/post-3635.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-126-css" href="<?php echo e(asset('themes/frontend/css/post-126.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-2042-css" href="<?php echo e(asset('themes/frontend/css/post-2042.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-2058-css" href="<?php echo e(asset('themes/frontend/css/post-2058.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-2059-css" href="<?php echo e(asset('themes/frontend/css/post-2059.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-2802-css" href="<?php echo e(asset('themes/frontend/css/post-2802.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-2842-css" href="<?php echo e(asset('themes/frontend/css/post-2842.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-2907-css" href="<?php echo e(asset('themes/frontend/css/post-2907.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-2958-css" href="<?php echo e(asset('themes/frontend/css/post-2958.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-2957-css" href="<?php echo e(asset('themes/frontend/css/post-2957.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-2988-css" href="<?php echo e(asset('themes/frontend/css/post-2988.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-2987-css" href="<?php echo e(asset('themes/frontend/css/post-2987.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-3005-css" href="<?php echo e(asset('themes/frontend/css/post-3005.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-3004-css" href="<?php echo e(asset('themes/frontend/css/post-3004.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-3250-css" href="<?php echo e(asset('themes/frontend/css/post-3250.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-3249-css" href="<?php echo e(asset('themes/frontend/css/post-3249.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-2339-css" href="<?php echo e(asset('themes/frontend/css/post-2339.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-3830-css" href="<?php echo e(asset('themes/frontend/css/post-3830.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-3835-css" href="<?php echo e(asset('themes/frontend/css/post-3835.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-3834-css" href="<?php echo e(asset('themes/frontend/css/post-3834.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-4313-css" href="<?php echo e(asset('themes/frontend/css/post-4313.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="hint-css" href="<?php echo e(asset('themes/frontend/css/hint.min.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="perfect-scrollbar-css" href="<?php echo e(asset('themes/frontend/css/perfect-scrollbar.min.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="perfect-scrollbar-wpc-css" href="<?php echo e(asset('themes/frontend/css/perfect-scrollbar-wpc.min.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="woosc-frontend-css" href="<?php echo e(asset('themes/frontend/css/woosc-frontend.min.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="woosw-icons-css" href="<?php echo e(asset('themes/frontend/css/woosw-icons.min.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="woosw-frontend-css" href="<?php echo e(asset('themes/frontend/css/woosw-frontend.min.css')); ?>"
    type="text/css" media="all">
    <style id="woosw-frontend-inline-css" type="text/css">
      .woosw-popup .woosw-popup-inner .woosw-popup-content .woosw-popup-content-bot
      .woosw-notice { background-color: #5fbd74; } .woosw-popup .woosw-popup-inner
      .woosw-popup-content .woosw-popup-content-bot .woosw-popup-content-bot-inner
      a:hover { color: #5fbd74; border-color: #5fbd74; }
    </style>
    <link rel="stylesheet" id="magnific-popup-css" href="<?php echo e(asset('themes/frontend/css/magnific-popup.min.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="wow-animate-css" href="<?php echo e(asset('themes/frontend/css/animate.min.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="flaticon-css" href="<?php echo e(asset('themes/frontend/css/flaticon.min.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="pxl-caseicon-css" href="<?php echo e(asset('themes/frontend/css/pxl-caseicon.min.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="pxl-grid-css" href="<?php echo e(asset('themes/frontend/css/pxl-grid.min.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="pxl-style-css" href="<?php echo e(asset('themes/frontend/css/pxl-style.min.css')); ?>"
    type="text/css" media="all">
    <style id="pxl-style-inline-css" type="text/css">
      :root{--primary-color: #e13833;--secondary-color: #162842;--third-color:
      #666666;--body-bg-color: #fff;--primary-color-rgb: 225,56,51;--secondary-color-rgb:
      22,40,66;--third-color-rgb: 102,102,102;--body-bg-color-rgb: 255,255,255;--link-color:
      #E13833;--link-color-hover: #162842;--link-color-active: #162842;--gradient-color-from:
      #00C6FF;--gradient-color-to: #0072FF;} @media  screen and (min-width: 1200px)
      { }
    </style>
    <link rel="stylesheet" id="pxl-base-css" href="<?php echo e(asset('themes/frontend/css/pxl-base.min.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="pxl-google-fonts-css" href="<?php echo e(asset('themes/frontend/css/css2')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="booked-wc-fe-styles-css" href="<?php echo e(asset('themes/frontend/css/booked-wc-fe-styles.min.css')); ?>"
    type="text/css" media="all">
    <link rel="stylesheet" id="font-awesome-official-css" href="<?php echo e(asset('themes/frontend/css/all.css')); ?>"
    type="text/css" media="all" integrity="sha384-blOohCVdhjmtROpu8+CfTnUWham9nkX7P7OZQMst+RUnhtoY/9qemFAkIKOYxDI3"
    crossorigin="anonymous">
    <link rel="stylesheet" id="font-awesome-official-v4shim-css" href="<?php echo e(asset('themes/frontend/css/v4-shims.css')); ?>"
    type="text/css" media="all" integrity="sha384-IqMDcR2qh8kGcGdRrxwop5R2GiUY5h8aDR/LhYxPYiXh3sAAGGDkFvFqWgFvTsTd"
    crossorigin="anonymous">
    <link rel="stylesheet" id="google-fonts-1-css" href="<?php echo e(asset('themes/frontend/css/css')); ?>"
    type="text/css" media="all">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <script type="text/javascript" src="<?php echo e(asset('themes/frontend/js/jquery.min.js')); ?>"
    id="jquery-core-js">
    </script>
    <script type="text/javascript" src="<?php echo e(asset('themes/frontend/js/jquery-migrate.min.js')); ?>"
    id="jquery-migrate-js">
    </script>
    <script type="text/javascript" src="<?php echo e(asset('themes/frontend/js/flatpickr.min.js')); ?>"
    id="ppress-flatpickr-js">
    </script>
    <script type="text/javascript" src="<?php echo e(asset('themes/frontend/js/select2.min.js')); ?>"
    id="ppress-select2-js">
    </script>
    <script type="text/javascript" id="booked-wc-fe-functions-js-extra">
      /* <![CDATA[ */
      var booked_wc_variables = {
        "prefix": "booked_wc_",
        "ajaxurl": "https:\/\/demo.bravisthemes.com\/immigway\/wp-admin\/admin-ajax.php",
        "i18n_confirm_appt_edit": "Are you sure you want to change the appointment date? By doing so, the appointment date will need to be approved again.",
        "i18n_pay": "Are you sure you want to add the appointment to cart and go to checkout?",
        "i18n_mark_paid": "Are you sure you want to mark this appointment as \"Paid\"?",
        "i18n_paid": "Paid",
        "i18n_awaiting_payment": "Awaiting Payment",
        "checkout_page": "https:\/\/demo.bravisthemes.com\/immigway\/checkout\/"
      };
      /* ]]> */
      
    </script>
    <script type="text/javascript" src="<?php echo e(asset('themes/frontend/js/booked-wc-fe-functions.min.js')); ?>"
    id="booked-wc-fe-functions-js">
    </script>
    <link rel="https://api.w.org/" href="https://demo.bravisthemes.com/immigway/wp-json/">
    <link rel="alternate" type="application/json" href="https://demo.bravisthemes.com/immigway/wp-json/wp/v2/pages/215">
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://demo.bravisthemes.com/immigway/xmlrpc.php?rsd">
    <meta name="generator" content="WordPress 6.4.1">
    <meta name="generator" content="WooCommerce 8.2.2">
    <link rel="canonical" href="https://demo.bravisthemes.com/immigway/home-02/">
    <link rel="shortlink" href="https://demo.bravisthemes.com/immigway/?p=215">
    <link rel="alternate" type="application/json+oembed" href="https://demo.bravisthemes.com/immigway/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.bravisthemes.com%2Fimmigway%2Fhome-02%2F">
    <link rel="alternate" type="text/xml+oembed" href="https://demo.bravisthemes.com/immigway/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.bravisthemes.com%2Fimmigway%2Fhome-02%2F&amp;format=xml">
    <meta name="generator" content="Redux 4.4.9">
    
    <link rel="icon" type="image/png" href="https://demo.bravisthemes.com/immigway/wp-content/uploads/2023/10/logo-1.png">
    <noscript>
      <style>
        .woocommerce-product-gallery{ opacity: 1 !important; }
      </style>
    </noscript>
    
    <script>
      function setREVStartSize(e) {
        //window.requestAnimationFrame(function() {
        window.RSIW = window.RSIW === undefined ? window.innerWidth: window.RSIW;
        window.RSIH = window.RSIH === undefined ? window.innerHeight: window.RSIH;
        try {
          var pw = document.getElementById(e.c).parentNode.offsetWidth,
          newh;
          pw = pw === 0 || isNaN(pw) || (e.l == "fullwidth" || e.layout == "fullwidth") ? window.RSIW: pw;
          e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
          e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
          e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
          e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
          e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
          e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
          e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
          if (e.layout === "fullscreen" || e.l === "fullscreen") newh = Math.max(e.mh, window.RSIH);
          else {
            e.gw = Array.isArray(e.gw) ? e.gw: [e.gw];
            for (var i in e.rl) if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
            e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh: e.el;
            e.gh = Array.isArray(e.gh) ? e.gh: [e.gh];
            for (var i in e.rl) if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];
            var nl = new Array(e.rl.length),
            ix = 0,
            sl;
            e.tabw = e.tabhide >= pw ? 0 : e.tabw;
            e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
            e.tabh = e.tabhide >= pw ? 0 : e.tabh;
            e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
            for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
            sl = nl[0];
            for (var i in nl) if (sl > nl[i] && nl[i] > 0) {
              sl = nl[i];
              ix = i;
            }
            var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
            newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
          }
          var el = document.getElementById(e.c);
          if (el !== null && el) el.style.height = newh + "px";
          el = document.getElementById(e.c + "_wrapper");
          if (el !== null && el) {
            el.style.height = newh + "px";
            el.style.display = "block";
          }
        } catch(e) {
          console.log("Failure at Presize of Slider:" + e)
        }
        //});
      };
    </script>
    <style type="text/css">
    </style>
    <style type="text/css" id="notify-bootstrap">
      .notifyjs-bootstrap-base { font-weight: bold; padding: 8px 15px 8px 14px;
      text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5); background-color: #fcf8e3;
      border: 1px solid #fbeed5; -webkit-border-radius: 4px; -moz-border-radius:
      4px; border-radius: 4px; white-space: nowrap; padding-left: 25px; background-repeat:
      no-repeat; background-position: 3px 7px; } .notifyjs-bootstrap-error {
      color: #B94A48; background-color: #F2DEDE; border-color: #EED3D7; background-image:
      url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAtRJREFUeNqkVc1u00AQHq+dOD+0poIQfkIjalW0SEGqRMuRnHos3DjwAH0ArlyQeANOOSMeAA5VjyBxKBQhgSpVUKKQNGloFdw4cWw2jtfMOna6JOUArDTazXi/b3dm55socPqQhFka++aHBsI8GsopRJERNFlY88FCEk9Yiwf8RhgRyaHFQpPHCDmZG5oX2ui2yilkcTT1AcDsbYC1NMAyOi7zTX2Agx7A9luAl88BauiiQ/cJaZQfIpAlngDcvZZMrl8vFPK5+XktrWlx3/ehZ5r9+t6e+WVnp1pxnNIjgBe4/6dAysQc8dsmHwPcW9C0h3fW1hans1ltwJhy0GxK7XZbUlMp5Ww2eyan6+ft/f2FAqXGK4CvQk5HueFz7D6GOZtIrK+srupdx1GRBBqNBtzc2AiMr7nPplRdKhb1q6q6zjFhrklEFOUutoQ50xcX86ZlqaZpQrfbBdu2R6/G19zX6XSgh6RX5ubyHCM8nqSID6ICrGiZjGYYxojEsiw4PDwMSL5VKsC8Yf4VRYFzMzMaxwjlJSlCyAQ9l0CW44PBADzXhe7xMdi9HtTrdYjFYkDQL0cn4Xdq2/EAE+InCnvADTf2eah4Sx9vExQjkqXT6aAERICMewd/UAp/IeYANM2joxt+q5VI+ieq2i0Wg3l6DNzHwTERPgo1ko7XBXj3vdlsT2F+UuhIhYkp7u7CarkcrFOCtR3H5JiwbAIeImjT/YQKKBtGjRFCU5IUgFRe7fF4cCNVIPMYo3VKqxwjyNAXNepuopyqnld602qVsfRpEkkz+GFL1wPj6ySXBpJtWVa5xlhpcyhBNwpZHmtX8AGgfIExo0ZpzkWVTBGiXCSEaHh62/PoR0p/vHaczxXGnj4bSo+G78lELU80h1uogBwWLf5YlsPmgDEd4M236xjm+8nm4IuE/9u+/PH2JXZfbwz4zw1WbO+SQPpXfwG/BBgAhCNZiSb/pOQAAAAASUVORK5CYII=);
      } .notifyjs-bootstrap-success { color: #468847; background-color: #DFF0D8;
      border-color: #D6E9C6; background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAutJREFUeNq0lctPE0Ecx38zu/RFS1EryqtgJFA08YCiMZIAQQ4eRG8eDGdPJiYeTIwHTfwPiAcvXIwXLwoXPaDxkWgQ6islKlJLSQWLUraPLTv7Gme32zoF9KSTfLO7v53vZ3d/M7/fIth+IO6INt2jjoA7bjHCJoAlzCRw59YwHYjBnfMPqAKWQYKjGkfCJqAF0xwZjipQtA3MxeSG87VhOOYegVrUCy7UZM9S6TLIdAamySTclZdYhFhRHloGYg7mgZv1Zzztvgud7V1tbQ2twYA34LJmF4p5dXF1KTufnE+SxeJtuCZNsLDCQU0+RyKTF27Unw101l8e6hns3u0PBalORVVVkcaEKBJDgV3+cGM4tKKmI+ohlIGnygKX00rSBfszz/n2uXv81wd6+rt1orsZCHRdr1Imk2F2Kob3hutSxW8thsd8AXNaln9D7CTfA6O+0UgkMuwVvEFFUbbAcrkcTA8+AtOk8E6KiQiDmMFSDqZItAzEVQviRkdDdaFgPp8HSZKAEAL5Qh7Sq2lIJBJwv2scUqkUnKoZgNhcDKhKg5aH+1IkcouCAdFGAQsuWZYhOjwFHQ96oagWgRoUov1T9kRBEODAwxM2QtEUl+Wp+Ln9VRo6BcMw4ErHRYjH4/B26AlQoQQTRdHWwcd9AH57+UAXddvDD37DmrBBV34WfqiXPl61g+vr6xA9zsGeM9gOdsNXkgpEtTwVvwOklXLKm6+/p5ezwk4B+j6droBs2CsGa/gNs6RIxazl4Tc25mpTgw/apPR1LYlNRFAzgsOxkyXYLIM1V8NMwyAkJSctD1eGVKiq5wWjSPdjmeTkiKvVW4f2YPHWl3GAVq6ymcyCTgovM3FzyRiDe2TaKcEKsLpJvNHjZgPNqEtyi6mZIm4SRFyLMUsONSSdkPeFtY1n0mczoY3BHTLhwPRy9/lzcziCw9ACI+yql0VLzcGAZbYSM5CCSZg1/9oc/nn7+i8N9p/8An4JMADxhH+xHfuiKwAAAABJRU5ErkJggg==);
      } .notifyjs-bootstrap-info { color: #3A87AD; background-color: #D9EDF7;
      border-color: #BCE8F1; background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QYFAhkSsdes/QAAA8dJREFUOMvVlGtMW2UYx//POaWHXg6lLaW0ypAtw1UCgbniNOLcVOLmAjHZolOYlxmTGXVZdAnRfXQm+7SoU4mXaOaiZsEpC9FkiQs6Z6bdCnNYruM6KNBw6YWewzl9z+sHImEWv+vz7XmT95f/+3/+7wP814v+efDOV3/SoX3lHAA+6ODeUFfMfjOWMADgdk+eEKz0pF7aQdMAcOKLLjrcVMVX3xdWN29/GhYP7SvnP0cWfS8caSkfHZsPE9Fgnt02JNutQ0QYHB2dDz9/pKX8QjjuO9xUxd/66HdxTeCHZ3rojQObGQBcuNjfplkD3b19Y/6MrimSaKgSMmpGU5WevmE/swa6Oy73tQHA0Rdr2Mmv/6A1n9w9suQ7097Z9lM4FlTgTDrzZTu4StXVfpiI48rVcUDM5cmEksrFnHxfpTtU/3BFQzCQF/2bYVoNbH7zmItbSoMj40JSzmMyX5qDvriA7QdrIIpA+3cdsMpu0nXI8cV0MtKXCPZev+gCEM1S2NHPvWfP/hL+7FSr3+0p5RBEyhEN5JCKYr8XnASMT0xBNyzQGQeI8fjsGD39RMPk7se2bd5ZtTyoFYXftF6y37gx7NeUtJJOTFlAHDZLDuILU3j3+H5oOrD3yWbIztugaAzgnBKJuBLpGfQrS8wO4FZgV+c1IxaLgWVU0tMLEETCos4xMzEIv9cJXQcyagIwigDGwJgOAtHAwAhisQUjy0ORGERiELgG4iakkzo4MYAxcM5hAMi1WWG1yYCJIcMUaBkVRLdGeSU2995TLWzcUAzONJ7J6FBVBYIggMzmFbvdBV44Corg8vjhzC+EJEl8U1kJtgYrhCzgc/vvTwXKSib1paRFVRVORDAJAsw5FuTaJEhWM2SHB3mOAlhkNxwuLzeJsGwqWzf5TFNdKgtY5qHp6ZFf67Y/sAVadCaVY5YACDDb3Oi4NIjLnWMw2QthCBIsVhsUTU9tvXsjeq9+X1d75/KEs4LNOfcdf/+HthMnvwxOD0wmHaXr7ZItn2wuH2SnBzbZAbPJwpPx+VQuzcm7dgRCB57a1uBzUDRL4bfnI0RE0eaXd9W89mpjqHZnUI5Hh2l2dkZZUhOqpi2qSmpOmZ64Tuu9qlz/SEXo6MEHa3wOip46F1n7633eekV8ds8Wxjn37Wl63VVa+ej5oeEZ/82ZBETJjpJ1Rbij2D3Z/1trXUvLsblCK0XfOx0SX2kMsn9dX+d+7Kf6h8o4AIykuffjT8L20LU+w4AZd5VvEPY+XpWqLV327HR7DzXuDnD8r+ovkBehJ8i+y8YAAAAASUVORK5CYII=);
      } .notifyjs-bootstrap-warn { color: #C09853; background-color: #FCF8E3;
      border-color: #FBEED5; background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAMAAAC6V+0/AAABJlBMVEXr6eb/2oD/wi7/xjr/0mP/ykf/tQD/vBj/3o7/uQ//vyL/twebhgD/4pzX1K3z8e349vK6tHCilCWbiQymn0jGworr6dXQza3HxcKkn1vWvV/5uRfk4dXZ1bD18+/52YebiAmyr5S9mhCzrWq5t6ufjRH54aLs0oS+qD751XqPhAybhwXsujG3sm+Zk0PTwG6Shg+PhhObhwOPgQL4zV2nlyrf27uLfgCPhRHu7OmLgAafkyiWkD3l49ibiAfTs0C+lgCniwD4sgDJxqOilzDWowWFfAH08uebig6qpFHBvH/aw26FfQTQzsvy8OyEfz20r3jAvaKbhgG9q0nc2LbZxXanoUu/u5WSggCtp1anpJKdmFz/zlX/1nGJiYmuq5Dx7+sAAADoPUZSAAAAAXRSTlMAQObYZgAAAAFiS0dEAIgFHUgAAAAJcEhZcwAACxMAAAsTAQCanBgAAAAHdElNRQfdBgUBGhh4aah5AAAAlklEQVQY02NgoBIIE8EUcwn1FkIXM1Tj5dDUQhPU502Mi7XXQxGz5uVIjGOJUUUW81HnYEyMi2HVcUOICQZzMMYmxrEyMylJwgUt5BljWRLjmJm4pI1hYp5SQLGYxDgmLnZOVxuooClIDKgXKMbN5ggV1ACLJcaBxNgcoiGCBiZwdWxOETBDrTyEFey0jYJ4eHjMGWgEAIpRFRCUt08qAAAAAElFTkSuQmCC);
      }
    </style>
    <script src="<?php echo e(asset('themes/frontend/js/wp-emoji-release.min.js')); ?>" defer="">
    </script>
    <style type="text/css" id="core-notify">
      .notifyjs-corner { position: fixed; margin: 5px; z-index: 1050; } .notifyjs-corner
      .notifyjs-wrapper, .notifyjs-corner .notifyjs-container { position: relative;
      display: block; height: inherit; width: inherit; margin: 3px; } .notifyjs-wrapper
      { z-index: 1; position: absolute; display: inline-block; height: 0; width:
      0; } .notifyjs-container { display: none; z-index: 1; position: absolute;
      } .notifyjs-hidable { cursor: pointer; } [data-notify-text],[data-notify-html]
      { position: relative; } .notifyjs-arrow { position: absolute; z-index:
      2; width: 0; height: 0; }
    </style>
    
    <?php if(isset($web_information->source_code->css)): ?>
    <style>
      <?php echo $web_information->source_code->css; ?>

    </style>
   <?php endif; ?>

  </head>
  

<body class="page-template-default page page-id-215 theme-immigway woocommerce-js pxl-redux-page body-default-font heading-default-font bd-px-header--transparent site-color-gradient woocommerce-layout-grid elementor-default elementor-kit-7 elementor-page elementor-page-215 e--ua-isTouchDevice e--ua-blink e--ua-chrome e--ua-webkit pxl-header-sticky"
  style="" data-elementor-device-mode="desktop">
    <div id="pxl-wapper" class="pxl-wapper">
      <div id="pxl-loadding" class="pxl-loader pxl-loader-gradient style-default is-loaded">
        <div class="pxl-loader-effect">
          <div class="pxl-circle-1">
          </div>
          <div class="pxl-circle-2">
          </div>
        </div>
      </div>

      <?php echo $__env->make('frontend.element.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <?php echo $__env->yieldContent('content'); ?>

      <?php echo $__env->make('frontend.element.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('frontend.panels.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</body>
</html>
<?php /**PATH E:\xampp74\htdocs\duhoc\resources\views/frontend/layouts/default.blade.php ENDPATH**/ ?>