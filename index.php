<!DOCTYPE html>
<html lang="en-US">
<?php
if (!empty($_GET) && $_GET['correo'] == 1) {
    echo "<script>alert('Correo enviado con exito')</script>";
}
?>
<!-- Mirrored from ld-wp.template-help.com/wordpress_62555/4/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 May 2020 15:50:42 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <script src="../../../cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script>
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="xmlrpc.php">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>Nubex ST</title>
    <style type="text/css" media="screen">
        #ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td a.ui-state-active,
        #ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td a.ui-state-active:hover,
        body #booked-profile-page input[type=submit].button-primary:hover,
        body .booked-list-view button.button:hover,
        body .booked-list-view input[type=submit].button-primary:hover,
        body table.booked-calendar input[type=submit].button-primary:hover,
        body .booked-modal input[type=submit].button-primary:hover,
        body table.booked-calendar th,
        body table.booked-calendar thead,
        body table.booked-calendar thead th,
        body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button:hover,
        body #booked-profile-page .booked-profile-header,
        body #booked-profile-page .booked-tabs li.active a,
        body #booked-profile-page .booked-tabs li.active a:hover,
        body #booked-profile-page .appt-block .google-cal-button>a:hover,
        #ui-datepicker-div.booked_custom_date_picker .ui-datepicker-header {
            background: #c4f2d4 !important;
        }

        body #booked-profile-page input[type=submit].button-primary:hover,
        body table.booked-calendar input[type=submit].button-primary:hover,
        body .booked-list-view button.button:hover,
        body .booked-list-view input[type=submit].button-primary:hover,
        body .booked-modal input[type=submit].button-primary:hover,
        body table.booked-calendar th,
        body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button:hover,
        body #booked-profile-page .booked-profile-header,
        body #booked-profile-page .appt-block .google-cal-button>a:hover {
            border-color: #c4f2d4 !important;
        }

        body table.booked-calendar tr.days,
        body table.booked-calendar tr.days th,
        body .booked-calendarSwitcher.calendar,
        body #booked-profile-page .booked-tabs,
        #ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar thead,
        #ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar thead th {
            background: #039146 !important;
        }

        body table.booked-calendar tr.days th,
        body #booked-profile-page .booked-tabs {
            border-color: #039146 !important;
        }

        #ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td.ui-datepicker-today a,
        #ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td.ui-datepicker-today a:hover,
        body #booked-profile-page input[type=submit].button-primary,
        body table.booked-calendar input[type=submit].button-primary,
        body .booked-list-view button.button,
        body .booked-list-view input[type=submit].button-primary,
        body .booked-list-view button.button,
        body .booked-list-view input[type=submit].button-primary,
        body .booked-modal input[type=submit].button-primary,
        body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button,
        body #booked-profile-page .booked-profile-appt-list .appt-block.approved .status-block,
        body #booked-profile-page .appt-block .google-cal-button>a,
        body .booked-modal p.booked-title-bar,
        body table.booked-calendar td:hover .date span,
        body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active,
        body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active:hover,
        .booked-ms-modal .booked-book-appt

        /* Multi-Slot Booking */
            {
            background: #56c477;
        }

        body #booked-profile-page input[type=submit].button-primary,
        body table.booked-calendar input[type=submit].button-primary,
        body .booked-list-view button.button,
        body .booked-list-view input[type=submit].button-primary,
        body .booked-list-view button.button,
        body .booked-list-view input[type=submit].button-primary,
        body .booked-modal input[type=submit].button-primary,
        body #booked-profile-page .appt-block .google-cal-button>a,
        body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button,
        body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active,
        body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active:hover {
            border-color: #56c477;
        }

        body .booked-modal .bm-window p i.fa,
        body .booked-modal .bm-window a,
        body .booked-appt-list .booked-public-appointment-title,
        body .booked-modal .bm-window p.appointment-title,
        .booked-ms-modal.visible:hover .booked-book-appt {
            color: #56c477;
        }

        .booked-appt-list .timeslot.has-title .booked-public-appointment-title {
            color: inherit;
        }
    </style>
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
    <link rel='dns-prefetch' href='http://s.w.org/' />
    <link rel="alternate" type="application/rss+xml" title="JohnnyGo &raquo; Feed" href="feed/index.html" />
    <link rel="alternate" type="application/rss+xml" title="JohnnyGo &raquo; Comments Feed" href="comments/feed/index.html" />
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/ld-wp.template-help.com\/wordpress_62555\/4\/default\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.8"
            }
        };
        ! function(a, b, c) {
            function d(a, b) {
                var c = String.fromCharCode;
                l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, a), 0, 0);
                var d = k.toDataURL();
                l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, b), 0, 0);
                var e = k.toDataURL();
                return d === e
            }

            function e(a) {
                var b;
                if (!l || !l.fillText) return !1;
                switch (l.textBaseline = "top", l.font = "600 32px Arial", a) {
                    case "flag":
                        return !(b = d([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819])) && (b = d([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]), !b);
                    case "emoji":
                        return b = d([55358, 56760, 9792, 65039], [55358, 56760, 8203, 9792, 65039]), !b
                }
                return !1
            }

            function f(a) {
                var c = b.createElement("script");
                c.src = a, c.defer = c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
            }
            var g, h, i, j, k = b.createElement("canvas"),
                l = k.getContext && k.getContext("2d");
            for (j = Array("flag", "emoji"), c.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, i = 0; i < j.length; i++) c.supports[j[i]] = e(j[i]), c.supports.everything = c.supports.everything && c.supports[j[i]], "flag" !== j[i] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[j[i]]);
            c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function() {
                c.DOMReady = !0
            }, c.supports.everything || (h = function() {
                c.readyCallback()
            }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", h, !1), a.addEventListener("load", h, !1)) : (a.attachEvent("onload", h), b.attachEvent("onreadystatechange", function() {
                "complete" === b.readyState && c.readyCallback()
            })), g = c.source || {}, g.concatemoji ? f(g.concatemoji) : g.wpemoji && g.twemoji && (f(g.twemoji), f(g.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='nucleo-outline-css' href='wp-content/themes/johnnygo/assets/css/nucleo-outline8a54.css?ver=1.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css' href='wp-content/plugins/cherry-socialize/assets/css/font-awesome.min1849.css?ver=4.7.0' type='text/css' media='all' />
    <link rel='stylesheet' id='cherry-socialize-public-css' href='wp-content/plugins/cherry-socialize/assets/css/publicc358.css?ver=1.1.3' type='text/css' media='all' />
    <link rel='stylesheet' id='jquery-swiper-css' href='wp-content/plugins/cherry-testi/includes/swiper/css/swiper.minccfb.css?ver=3.4.2' type='text/css' media='all' />
    <link rel='stylesheet' id='cherry-testi-css' href='wp-content/plugins/cherry-testi/public/assets/css/stylec756.css?ver=1.1.0.5' type='text/css' media='all' />
    <link rel='stylesheet' id='cherry-trending-posts-css' href='wp-content/plugins/cherry-trending-posts/assets/css/stylef269.css?ver=1.0.1' type='text/css' media='all' />
    <link rel='stylesheet' id='tm-woocommerce-package-css' href='wp-content/plugins/tm-woocommerce-package/assets/css/tm-woocommerce-package9e1e.css?ver=1.3.2' type='text/css' media='all' />
    <link rel='stylesheet' id='jquery-rd-material-tabs-css' href='wp-content/plugins/tm-woocommerce-package/assets/css/rd-material-tabs8a54.css?ver=1.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='jquery-slider-pro-css' href='wp-content/themes/johnnygo/assets/css/slider-pro.min9030.css?ver=1.2.4' type='text/css' media='all' />
    <link rel='stylesheet' id='booked-icons-css' href='wp-content/plugins/booked/assets/css/icons53cf.css?ver=2.1' type='text/css' media='all' />
    <link rel='stylesheet' id='booked-tooltipster-css' href='wp-content/plugins/booked/assets/js/tooltipster/css/tooltipster9b70.css?ver=3.3.0' type='text/css' media='all' />
    <link rel='stylesheet' id='booked-tooltipster-theme-css' href='wp-content/plugins/booked/assets/js/tooltipster/css/themes/tooltipster-light9b70.css?ver=3.3.0' type='text/css' media='all' />
    <link rel='stylesheet' id='booked-animations-css' href='wp-content/plugins/booked/assets/css/animations53cf.css?ver=2.1' type='text/css' media='all' />
    <link rel='stylesheet' id='booked-styles-css' href='wp-content/plugins/booked/assets/css/styles53cf.css?ver=2.1' type='text/css' media='all' />
    <link rel='stylesheet' id='booked-responsive-css' href='wp-content/plugins/booked/assets/css/responsive53cf.css?ver=2.1' type='text/css' media='all' />
    <link rel='stylesheet' id='cherry-services-css' href='wp-content/plugins/cherry-services-list/public/assets/css/cherry-services6dbf.css?ver=1.4.7' type='text/css' media='all' />
    <link rel='stylesheet' id='cherry-services-theme-css' href='wp-content/plugins/cherry-services-list/public/assets/css/cherry-services-theme6dbf.css?ver=1.4.7' type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css' href='wp-content/plugins/contact-form-7/includes/css/stylesce52.css?ver=5.0.2' type='text/css' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css' href='wp-content/plugins/rev-slider/public/assets/css/settingsc225.css?ver=5.4.1' type='text/css' media='all' />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rs-demo-id {}
    </style>
    <link rel='stylesheet' id='woocommerce-layout-css' href='wp-content/plugins/woocommerce/assets/css/woocommerce-layout5589.css?ver=3.4.1' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css' href='wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen5589.css?ver=3.4.1' type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css' href='wp-content/plugins/woocommerce/assets/css/woocommerce5589.css?ver=3.4.1' type='text/css' media='all' />
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='wsl-widget-css' href='wp-content/plugins/wordpress-social-login/assets/css/style5010.css?ver=4.9.8' type='text/css' media='all' />
    <link rel='stylesheet' id='dashicons-css' href='wp-includes/css/dashicons.min5010.css?ver=4.9.8' type='text/css' media='all' />
    <link rel='stylesheet' id='tm-woocompare-css' href='wp-content/plugins/tm-woocommerce-compare-wishlist/assets/css/tm-woocompare5010.css?ver=4.9.8' type='text/css' media='all' />
    <link rel='stylesheet' id='tm-woowishlist-css' href='wp-content/plugins/tm-woocommerce-compare-wishlist/assets/css/tm-woowishlist5010.css?ver=4.9.8' type='text/css' media='all' />
    <link rel='stylesheet' id='tm-timeline-css-css' href='wp-content/plugins/tm-timeline/css/tm-timelinec64e.css?ver=1.1.1' type='text/css' media='all' />
    <link rel='stylesheet' id='tm-pg-material-icons-css' href='wp-content/plugins/tm-photo-gallery/media/css/material-icons.css' type='text/css' media='all' />
    <link rel='stylesheet' id='tm-pg-fontello-css' href='wp-content/plugins/tm-photo-gallery/media/css/frontend/fontello.css' type='text/css' media='all' />
    <link rel='stylesheet' id='tm-pg-lightgallery-css' href='wp-content/plugins/tm-photo-gallery/media/css/frontend/lightgallery.css' type='text/css' media='all' />
    <link rel='stylesheet' id='tm-pg-style-frontend-css' href='wp-content/plugins/tm-photo-gallery/media/css/frontend/style-frontend.css' type='text/css' media='all' />
    <link rel='stylesheet' id='johnnygo-woocommerce-styles-css' href='wp-content/themes/johnnygo/assets/css/style-woocommerce8a54.css?ver=1.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='cherry-handler-css-css' href='wp-content/plugins/cherry-services-list/cherry-framework/modules/cherry-handler/assets/css/cherry-handler-styles.min8c67.css?ver=1.5.11' type='text/css' media='all' />
    <link rel='stylesheet' id='magnific-popup-css' href='wp-content/themes/johnnygo/assets/css/magnific-popup.minf488.css?ver=1.1.0' type='text/css' media='all' />
    <link rel='stylesheet' id='cherry-projects-styles-css' href='wp-content/plugins/cherry-projects/public/assets/css/styles58c4.css?ver=1.2.13' type='text/css' media='all' />
    <link rel='stylesheet' id='cherry-google-fonts-johnnygo-css' href='http://fonts.googleapis.com/css?family=Archivo%3A400%2C500%7CRoboto%3A400%7CMontserrat%3A600&amp;subset=latin&amp;ver=4.9.8' type='text/css' media='all' />
    <link rel='stylesheet' id='jet-elements-css' href='wp-content/plugins/jet-elements/assets/css/jet-elements71b1.css?ver=1.15.6' type='text/css' media='all' />
    <link rel='stylesheet' id='jet-elements-skin-css' href='wp-content/plugins/jet-elements/assets/css/jet-elements-skin71b1.css?ver=1.15.6' type='text/css' media='all' />
    <link rel='stylesheet' id='tm-wc-ajax-filters-widget-css' href='wp-content/plugins/tm-woocommerce-ajax-filters/assets/css/tm-wc-ajax-filters-widget5010.css?ver=4.9.8' type='text/css' media='all' />
    <link rel='stylesheet' id='tm-mega-menu-css' href='wp-content/plugins/tm-mega-menu/public/assets/css/style8daf.css?ver=1.1.4' type='text/css' media='all' />
    <style id='tm-mega-menu-inline-css' type='text/css'>
        .sub-menu {
            transition-duration: 300ms;
        }
    </style>
    <link rel='stylesheet' id='elementor-icons-css' href='wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.minb2f9.css?ver=4.3.0' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-animations-css' href='wp-content/plugins/elementor/assets/lib/animations/animations.mine64e.css?ver=2.5.11' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css' href='wp-content/plugins/elementor/assets/css/frontend.mine64e.css?ver=2.5.11' type='text/css' media='all' />
    <style id='elementor-frontend-inline-css' type='text/css'>
        .elementor-section.elementor-section-boxed>.elementor-container {
            max-width: 1200px;
        }

        .elementor-278 .elementor-element.elementor-element-dfc040d .elementor-element-populated a {
            color: #D2B4DE;
        }

        .elementor-278 .elementor-element.elementor-element-dfc040d .elementor-element-populated a:hover {
            color: #ffffff;
        }

        .elementor-278 .elementor-element.elementor-element-a9dd064 {
            color: #abf8fb;
            font-size: 46px;
            font-weight: 500;
            line-height: 1.3em;
        }

        .elementor-278 .elementor-element.elementor-element-b366555 .elementor-spacer-inner {
            height: 16px;
        }

        .elementor-278 .elementor-element.elementor-element-9a83f17>.elementor-widget-container {
            padding: 0px 0px 0px 2px;
        }

        .elementor-278 .elementor-element.elementor-element-7d27fc6 .elementor-spacer-inner {
            height: 52px;
        }

        .elementor-278 .elementor-element.elementor-element-f9f1635 .jet-animated-box {
            height: 198px;
        }

        .elementor-278 .elementor-element.elementor-element-f9f1635 .jet-animated-box__icon--front {
            justify-content: center;
            order: 1;
        }

        .elementor-278 .elementor-element.elementor-element-f9f1635 .jet-animated-box__icon--back {
            justify-content: center;
            order: 1;
        }

        .elementor-278 .elementor-element.elementor-element-f9f1635 .jet-animated-box__title--front {
            align-self: center;
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-f9f1635 .jet-animated-box__title--back {
            align-self: center;
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-f9f1635 .jet-animated-box__subtitle--front {
            align-self: center;
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-f9f1635 .jet-animated-box__subtitle--back {
            align-self: center;
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-f9f1635 .jet-animated-box__description--front {
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-f9f1635 .jet-animated-box__description--back {
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-f9f1635 .jet-animated-box__button {
            align-self: center;
        }

        .elementor-278 .elementor-element.elementor-element-f9f1635 .jet-animated-box__front .jet-animated-box__overlay {
            opacity: 0;
        }

        .elementor-278 .elementor-element.elementor-element-f9f1635 .jet-animated-box__back .jet-animated-box__overlay {
            opacity: 0;
        }

        .elementor-278 .elementor-element.elementor-element-f9f1635 .jet-animated-box__front .jet-animated-box__content {
            order: 2;
        }

        .elementor-278 .elementor-element.elementor-element-f9f1635 .jet-animated-box__front .jet-animated-box__inner {
            justify-content: center;
        }

        .elementor-278 .elementor-element.elementor-element-f9f1635 .jet-animated-box__back .jet-animated-box__content {
            order: 2;
        }

        .elementor-278 .elementor-element.elementor-element-f9f1635 .jet-animated-box__back .jet-animated-box__inner {
            justify-content: center;
        }

        .elementor-278 .elementor-element.elementor-element-56843bb .elementor-spacer-inner {
            height: 20px;
        }

        .elementor-278 .elementor-element.elementor-element-5d163ef .jet-animated-box {
            height: 198px;
        }

        .elementor-278 .elementor-element.elementor-element-5d163ef .jet-animated-box__icon--front {
            justify-content: center;
            order: 1;
        }

        .elementor-278 .elementor-element.elementor-element-5d163ef .jet-animated-box__icon--back {
            justify-content: center;
            order: 1;
        }

        .elementor-278 .elementor-element.elementor-element-5d163ef .jet-animated-box__title--front {
            align-self: center;
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-5d163ef .jet-animated-box__title--back {
            align-self: center;
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-5d163ef .jet-animated-box__subtitle--front {
            align-self: center;
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-5d163ef .jet-animated-box__subtitle--back {
            align-self: center;
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-5d163ef .jet-animated-box__description--front {
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-5d163ef .jet-animated-box__description--back {
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-5d163ef .jet-animated-box__button {
            align-self: center;
        }

        .elementor-278 .elementor-element.elementor-element-5d163ef .jet-animated-box__front .jet-animated-box__overlay {
            opacity: 0;
        }

        .elementor-278 .elementor-element.elementor-element-5d163ef .jet-animated-box__back .jet-animated-box__overlay {
            opacity: 0;
        }

        .elementor-278 .elementor-element.elementor-element-5d163ef .jet-animated-box__front .jet-animated-box__content {
            order: 2;
        }

        .elementor-278 .elementor-element.elementor-element-5d163ef .jet-animated-box__front .jet-animated-box__inner {
            justify-content: center;
        }

        .elementor-278 .elementor-element.elementor-element-5d163ef .jet-animated-box__back .jet-animated-box__content {
            order: 2;
        }

        .elementor-278 .elementor-element.elementor-element-5d163ef .jet-animated-box__back .jet-animated-box__inner {
            justify-content: center;
        }

        .elementor-278 .elementor-element.elementor-element-92e7be6 .elementor-spacer-inner {
            height: 20px;
        }

        .elementor-278 .elementor-element.elementor-element-b492522 .jet-animated-box {
            height: 198px;
        }

        .elementor-278 .elementor-element.elementor-element-b492522 .jet-animated-box__icon--front {
            justify-content: center;
            order: 1;
        }

        .elementor-278 .elementor-element.elementor-element-b492522 .jet-animated-box__icon--back {
            justify-content: center;
            order: 1;
        }

        .elementor-278 .elementor-element.elementor-element-b492522 .jet-animated-box__title--front {
            align-self: center;
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-b492522 .jet-animated-box__title--back {
            align-self: center;
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-b492522 .jet-animated-box__subtitle--front {
            align-self: center;
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-b492522 .jet-animated-box__subtitle--back {
            align-self: center;
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-b492522 .jet-animated-box__description--front {
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-b492522 .jet-animated-box__description--back {
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-b492522 .jet-animated-box__button {
            align-self: center;
        }

        .elementor-278 .elementor-element.elementor-element-b492522 .jet-animated-box__front .jet-animated-box__overlay {
            opacity: 0;
        }

        .elementor-278 .elementor-element.elementor-element-b492522 .jet-animated-box__back .jet-animated-box__overlay {
            opacity: 0;
        }

        .elementor-278 .elementor-element.elementor-element-b492522 .jet-animated-box__front .jet-animated-box__content {
            order: 2;
        }

        .elementor-278 .elementor-element.elementor-element-b492522 .jet-animated-box__front .jet-animated-box__inner {
            justify-content: center;
        }

        .elementor-278 .elementor-element.elementor-element-b492522 .jet-animated-box__back .jet-animated-box__content {
            order: 2;
        }

        .elementor-278 .elementor-element.elementor-element-b492522 .jet-animated-box__back .jet-animated-box__inner {
            justify-content: center;
        }

        .elementor-278 .elementor-element.elementor-element-038b40c:not(.elementor-motion-effects-element-type-background),
        .elementor-278 .elementor-element.elementor-element-038b40c>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-image: url("wp-content/uploads/2018/03/homepage-section-1-bg.png");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .elementor-278 .elementor-element.elementor-element-038b40c {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 69px 0px 60px 0px;
        }

        .elementor-278 .elementor-element.elementor-element-038b40c>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-278 .elementor-element.elementor-element-3384d6c .elementor-heading-title {
            letter-spacing: 0.6px;
        }

        .elementor-278 .elementor-element.elementor-element-3384d6c>.elementor-widget-container {
            margin: 0px 0px 0px -4px;
        }

        .elementor-278 .elementor-element.elementor-element-a9c784f .elementor-spacer-inner {
            height: 29px;
        }

        .elementor-278 .elementor-element.elementor-element-a0fee40>.elementor-element-populated {
            padding: 0px 31px 0px 16px;
        }

        .elementor-278 .elementor-element.elementor-element-8799a8b .elementor-image img {
            border-radius: 2px 2px 2px 2px;
        }

        .elementor-278 .elementor-element.elementor-element-065ae22.elementor-widget-heading .elementor-heading-title {
            color: #03ABFF;
        }

        .elementor-278 .elementor-element.elementor-element-065ae22>.elementor-widget-container {
            margin: 24px 0px 15px 0px;
        }

        .elementor-278 .elementor-element.elementor-element-52915e0 .elementor-spacer-inner {
            height: 20px;
        }

        .elementor-278 .elementor-element.elementor-element-5bcdf38>.elementor-element-populated {
            padding: 0px 39px 0px 8px;
        }

        .elementor-278 .elementor-element.elementor-element-4a4487a .elementor-image img {
            border-radius: 2px 2px 2px 2px;
        }

        .elementor-278 .elementor-element.elementor-element-036b675.elementor-widget-heading .elementor-heading-title {
            color: #03ABFF;
        }

        .elementor-278 .elementor-element.elementor-element-036b675>.elementor-widget-container {
            margin: 24px 0px 15px 0px;
        }

        .elementor-278 .elementor-element.elementor-element-18973f4 .elementor-spacer-inner {
            height: 10px;
        }

        .elementor-278 .elementor-element.elementor-element-c0dc6fe>.elementor-element-populated {
            padding: 0px 0px 0px 0px;
        }

        .elementor-278 .elementor-element.elementor-element-782c585 {
            text-align: right;
        }

        .elementor-278 .elementor-element.elementor-element-936c0ec>.elementor-element-populated {
            padding: 0px 0px 0px 0px;
        }

        .elementor-278 .elementor-element.elementor-element-a830ad1.elementor-column .elementor-column-wrap {
            align-items: flex-end;
        }

        .elementor-278 .elementor-element.elementor-element-a830ad1.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
            align-content: flex-end;
        }

        .elementor-278 .elementor-element.elementor-element-a830ad1>.elementor-element-populated {
            padding: 0px 0px 0px 15px;
        }

        .elementor-278 .elementor-element.elementor-element-5896f60 {
            text-align: left;
        }

        .elementor-278 .elementor-element.elementor-element-vzcbsmt:not(.elementor-motion-effects-element-type-background)>.elementor-element-populated,
        .elementor-278 .elementor-element.elementor-element-vzcbsmt>.elementor-column-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #03ABFF;
        }

        .elementor-278 .elementor-element.elementor-element-vzcbsmt>.elementor-element-populated,
        .elementor-278 .elementor-element.elementor-element-vzcbsmt>.elementor-element-populated>.elementor-background-overlay {
            border-radius: 2px 2px 2px 2px;
        }

        .elementor-278 .elementor-element.elementor-element-vzcbsmt>.elementor-element-populated {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin: 10px 22px 0px 0px;
            padding: 22px 30px 30px 30px;
        }

        .elementor-278 .elementor-element.elementor-element-vzcbsmt>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-278 .elementor-element.elementor-element-vzcbsmt {
            z-index: 10;
        }

        .elementor-278 .elementor-element.elementor-element-kv51509 .elementor-spacer-inner {
            height: 4px;
        }

        .elementor-278 .elementor-element.elementor-element-5xofw4v .elementor-spacer-inner {
            height: 23px;
        }

        .elementor-278 .elementor-element.elementor-element-153rk87 .wpcf7 span.wpcf7-not-valid-tip {
            text-align: left;
            display: block;
        }

        .elementor-278 .elementor-element.elementor-element-153rk87 .wpcf7 input.wpcf7-submit {
            text-decoration: none;
            display: block;
            width: 100%;
        }

        .elementor-278 .elementor-element.elementor-element-153rk87 .wpcf7 input.wpcf7-submit:hover {
            text-decoration: none;
        }

        .elementor-278 .elementor-element.elementor-element-153rk87 .wpcf7 input.wpcf7-submit:focus {
            text-decoration: none;
        }

        .elementor-278 .elementor-element.elementor-element-153rk87 .wpcf7 div.wpcf7-response-output {
            text-align: left;
        }

        .elementor-278 .elementor-element.elementor-element-nt1x0hn {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 71px 0px 83px 0px;
            z-index: 2;
        }

        .elementor-278 .elementor-element.elementor-element-nt1x0hn>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-278 .elementor-element.elementor-element-36328ab {
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-902da1f .elementor-spacer-inner {
            height: 30px;
        }

        .elementor-278 .elementor-element.elementor-element-baad6a7:not(.elementor-motion-effects-element-type-background),
        .elementor-278 .elementor-element.elementor-element-baad6a7>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #f0f4f7;
        }

        .elementor-278 .elementor-element.elementor-element-baad6a7 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 69px 0px 40px 0px;
        }

        .elementor-278 .elementor-element.elementor-element-baad6a7>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-278 .elementor-element.elementor-element-b0f9219 {
            text-align: left;
        }

        .elementor-278 .elementor-element.elementor-element-e4174ef>.elementor-widget-container {
            margin: 16px 0px 36px 0px;
        }

        .elementor-278 .elementor-element.elementor-element-4fc4d11 .jet-download,
        .elementor-278 .elementor-element.elementor-element-4fc4d11 .jet-download__text {
            text-align: left;
        }

        .elementor-278 .elementor-element.elementor-element-9977108>.elementor-element-populated {
            padding: 0px 15px 0px 46px;
        }

        .elementor-278 .elementor-element.elementor-element-e2a3ddf .elementor-icon-list-icon {
            width: 18px;
        }

        .elementor-278 .elementor-element.elementor-element-e2a3ddf .elementor-icon-list-icon i {
            font-size: 18px;
        }

        .elementor-278 .elementor-element.elementor-element-33e6e0d>.elementor-element-populated {
            padding: 0px 15px 0px 30px;
        }

        .elementor-278 .elementor-element.elementor-element-760e00d .elementor-icon-list-icon {
            width: 18px;
        }

        .elementor-278 .elementor-element.elementor-element-760e00d .elementor-icon-list-icon i {
            font-size: 18px;
        }

        .elementor-278 .elementor-element.elementor-element-3e82538>.elementor-element-populated {
            padding: 0px 15px 0px 15px;
        }

        .elementor-278 .elementor-element.elementor-element-801d7ff .elementor-icon-list-icon {
            width: 18px;
        }

        .elementor-278 .elementor-element.elementor-element-801d7ff .elementor-icon-list-icon i {
            font-size: 18px;
        }

        .elementor-278 .elementor-element.elementor-element-a3bf062 {
            padding: 3px 0px 0px 0px;
        }

        .elementor-278 .elementor-element.elementor-element-003ae1b {
            padding: 75px 0px 116px 0px;
        }

        .elementor-278 .elementor-element.elementor-element-146d6e8>.elementor-widget-container {
            margin: -107px -45px 0px 0px;
        }

        .elementor-278 .elementor-element.elementor-element-84fe68c.elementor-widget-heading .elementor-heading-title {
            color: #abf8fb;
        }

        .elementor-278 .elementor-element.elementor-element-1cc7ca3>.elementor-widget-container {
            margin: 4px 0px 27px 0px;
        }

        .elementor-278 .elementor-element.elementor-element-88d1d17:not(.elementor-motion-effects-element-type-background),
        .elementor-278 .elementor-element.elementor-element-88d1d17>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-image: url("wp-content/uploads/2018/03/section-gradient-bg-1.png");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .elementor-278 .elementor-element.elementor-element-88d1d17 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 76px 0px 0px 0px;
        }

        .elementor-278 .elementor-element.elementor-element-88d1d17>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-278 .elementor-element.elementor-element-c9981e4 {
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-fc7ecd1 .elementor-spacer-inner {
            height: 38px;
        }

        .elementor-278 .elementor-element.elementor-element-8ffbb58.elementor-position-right .elementor-icon-box-icon {
            margin-left: 17px;
        }

        .elementor-278 .elementor-element.elementor-element-8ffbb58.elementor-position-left .elementor-icon-box-icon {
            margin-right: 17px;
        }

        .elementor-278 .elementor-element.elementor-element-8ffbb58.elementor-position-top .elementor-icon-box-icon {
            margin-bottom: 17px;
        }

        .elementor-278 .elementor-element.elementor-element-8ffbb58 .elementor-icon i {
            transform: rotate(0deg);
        }

        .elementor-278 .elementor-element.elementor-element-8ffbb58 .elementor-icon-box-title {
            margin-bottom: 8px;
        }

        .elementor-278 .elementor-element.elementor-element-8ffbb58>.elementor-widget-container {
            margin: 0px 0px 20px 0px;
            padding: 0px 35px 0px 0px;
        }

        .elementor-278 .elementor-element.elementor-element-0648dfc.elementor-position-right .elementor-icon-box-icon {
            margin-left: 17px;
        }

        .elementor-278 .elementor-element.elementor-element-0648dfc.elementor-position-left .elementor-icon-box-icon {
            margin-right: 17px;
        }

        .elementor-278 .elementor-element.elementor-element-0648dfc.elementor-position-top .elementor-icon-box-icon {
            margin-bottom: 17px;
        }

        .elementor-278 .elementor-element.elementor-element-0648dfc .elementor-icon i {
            transform: rotate(0deg);
        }

        .elementor-278 .elementor-element.elementor-element-0648dfc .elementor-icon-box-title {
            margin-bottom: 8px;
        }

        .elementor-278 .elementor-element.elementor-element-0648dfc>.elementor-widget-container {
            margin: 0px 0px 20px 0px;
            padding: 0px 35px 0px 0px;
        }

        .elementor-278 .elementor-element.elementor-element-52d91b2.elementor-position-right .elementor-icon-box-icon {
            margin-left: 17px;
        }

        .elementor-278 .elementor-element.elementor-element-52d91b2.elementor-position-left .elementor-icon-box-icon {
            margin-right: 17px;
        }

        .elementor-278 .elementor-element.elementor-element-52d91b2.elementor-position-top .elementor-icon-box-icon {
            margin-bottom: 17px;
        }

        .elementor-278 .elementor-element.elementor-element-52d91b2 .elementor-icon i {
            transform: rotate(0deg);
        }

        .elementor-278 .elementor-element.elementor-element-52d91b2 .elementor-icon-box-title {
            margin-bottom: 8px;
        }

        .elementor-278 .elementor-element.elementor-element-52d91b2>.elementor-widget-container {
            margin: 0px 0px 20px 0px;
            padding: 0px 35px 0px 0px;
        }

        .elementor-278 .elementor-element.elementor-element-08917d7.elementor-position-right .elementor-icon-box-icon {
            margin-left: 17px;
        }

        .elementor-278 .elementor-element.elementor-element-08917d7.elementor-position-left .elementor-icon-box-icon {
            margin-right: 17px;
        }

        .elementor-278 .elementor-element.elementor-element-08917d7.elementor-position-top .elementor-icon-box-icon {
            margin-bottom: 17px;
        }

        .elementor-278 .elementor-element.elementor-element-08917d7 .elementor-icon i {
            transform: rotate(0deg);
        }

        .elementor-278 .elementor-element.elementor-element-08917d7 .elementor-icon-box-title {
            margin-bottom: 8px;
        }

        .elementor-278 .elementor-element.elementor-element-08917d7>.elementor-widget-container {
            margin: 0px 0px 20px 0px;
            padding: 0px 35px 0px 0px;
        }

        .elementor-278 .elementor-element.elementor-element-4479f48.elementor-position-right .elementor-icon-box-icon {
            margin-left: 17px;
        }

        .elementor-278 .elementor-element.elementor-element-4479f48.elementor-position-left .elementor-icon-box-icon {
            margin-right: 17px;
        }

        .elementor-278 .elementor-element.elementor-element-4479f48.elementor-position-top .elementor-icon-box-icon {
            margin-bottom: 17px;
        }

        .elementor-278 .elementor-element.elementor-element-4479f48 .elementor-icon i {
            transform: rotate(0deg);
        }

        .elementor-278 .elementor-element.elementor-element-4479f48 .elementor-icon-box-title {
            margin-bottom: 8px;
        }

        .elementor-278 .elementor-element.elementor-element-4479f48>.elementor-widget-container {
            margin: 0px 0px 20px 0px;
            padding: 0px 35px 0px 0px;
        }

        .elementor-278 .elementor-element.elementor-element-71d197f.elementor-position-right .elementor-icon-box-icon {
            margin-left: 17px;
        }

        .elementor-278 .elementor-element.elementor-element-71d197f.elementor-position-left .elementor-icon-box-icon {
            margin-right: 17px;
        }

        .elementor-278 .elementor-element.elementor-element-71d197f.elementor-position-top .elementor-icon-box-icon {
            margin-bottom: 17px;
        }

        .elementor-278 .elementor-element.elementor-element-71d197f .elementor-icon i {
            transform: rotate(0deg);
        }

        .elementor-278 .elementor-element.elementor-element-71d197f .elementor-icon-box-title {
            margin-bottom: 8px;
        }

        .elementor-278 .elementor-element.elementor-element-71d197f>.elementor-widget-container {
            margin: 0px 0px 20px 0px;
            padding: 0px 35px 0px 0px;
        }

        .elementor-278 .elementor-element.elementor-element-b80219c:not(.elementor-motion-effects-element-type-background),
        .elementor-278 .elementor-element.elementor-element-b80219c>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #f0f4f7;
        }

        .elementor-278 .elementor-element.elementor-element-b80219c {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 70px 0px 45px 0px;
        }

        .elementor-278 .elementor-element.elementor-element-b80219c>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-278 .elementor-element.elementor-element-9iakdcd {
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-9iakdcd>.elementor-widget-container {
            margin: 0px 0px 13px 0px;
        }

        .elementor-278 .elementor-element.elementor-element-ae73725 {
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-681d3a0 .elementor-spacer-inner {
            height: 37px;
        }

        .elementor-278 .elementor-element.elementor-element-1c7f3d0>.elementor-element-populated {
            padding: 0px 0px 0px 0px;
        }

        .elementor-278 .elementor-element.elementor-element-d2771b9 {
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-d2771b9 .elementor-image img {
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-278 .elementor-element.elementor-element-f024937 .jet-headline {
            justify-content: center;
        }

        .elementor-278 .elementor-element.elementor-element-f024937 .jet-headline>.jet-headline__link {
            justify-content: center;
        }

        .elementor-278 .elementor-element.elementor-element-f024937 .jet-headline__first .jet-headline__label {
            color: #232c3d;
            font-family: "Archivo", Sans-serif;
            font-size: 28px;
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-f024937 .jet-headline__first {
            background-color: #B3E1F2;
            border-radius: 50% 50% 50% 50%;
            padding: 10px 25px 10px 25px;
            align-self: center;
        }

        .elementor-278 .elementor-element.elementor-element-f024937 .jet-headline__second {
            align-self: center;
        }

        .elementor-278 .elementor-element.elementor-element-f024937 .jet-headline__second .jet-headline__label {
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-f024937>.elementor-widget-container {
            margin: -41px 0px 0px 20px;
        }

        .elementor-278 .elementor-element.elementor-element-168330d {
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-168330d.elementor-widget-heading .elementor-heading-title {
            color: #03ABFF;
        }

        .elementor-278 .elementor-element.elementor-element-168330d>.elementor-widget-container {
            margin: 18px 0px 15px 0px;
        }

        .elementor-278 .elementor-element.elementor-element-1c882cb .elementor-text-editor {
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-1c882cb>.elementor-widget-container {
            padding: 0px 15px 0px 15px;
        }

        .elementor-278 .elementor-element.elementor-element-e0bff1c>.elementor-element-populated {
            padding: 0px 0px 0px 0px;
        }

        .elementor-278 .elementor-element.elementor-element-2433503 .elementor-image img {
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-278 .elementor-element.elementor-element-a1e69f9 .jet-headline {
            justify-content: center;
        }

        .elementor-278 .elementor-element.elementor-element-a1e69f9 .jet-headline>.jet-headline__link {
            justify-content: center;
        }

        .elementor-278 .elementor-element.elementor-element-a1e69f9 .jet-headline__first .jet-headline__label {
            color: #232c3d;
            font-family: "Archivo", Sans-serif;
            font-size: 28px;
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-a1e69f9 .jet-headline__first {
            background-color: #B3E1F2;
            border-radius: 50% 50% 50% 50%;
            padding: 10px 25px 10px 25px;
            align-self: center;
        }

        .elementor-278 .elementor-element.elementor-element-a1e69f9 .jet-headline__second {
            align-self: center;
        }

        .elementor-278 .elementor-element.elementor-element-a1e69f9 .jet-headline__second .jet-headline__label {
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-a1e69f9>.elementor-widget-container {
            margin: -41px 0px 0px 20px;
        }

        .elementor-278 .elementor-element.elementor-element-eb6c042 {
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-eb6c042.elementor-widget-heading .elementor-heading-title {
            color: #03ABFF;
        }

        .elementor-278 .elementor-element.elementor-element-eb6c042>.elementor-widget-container {
            margin: 18px 0px 15px 0px;
        }

        .elementor-278 .elementor-element.elementor-element-2cbcdaa .elementor-text-editor {
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-2cbcdaa>.elementor-widget-container {
            padding: 0px 15px 0px 15px;
        }

        .elementor-278 .elementor-element.elementor-element-17f0b38>.elementor-element-populated {
            padding: 0px 0px 0px 0px;
        }

        .elementor-278 .elementor-element.elementor-element-8467bdf .elementor-image img {
            border-radius: 50% 50% 50% 50%;
        }

        .elementor-278 .elementor-element.elementor-element-461cecc .jet-headline {
            justify-content: center;
        }

        .elementor-278 .elementor-element.elementor-element-461cecc .jet-headline>.jet-headline__link {
            justify-content: center;
        }

        .elementor-278 .elementor-element.elementor-element-461cecc .jet-headline__first .jet-headline__label {
            color: #232c3d;
            font-family: "Archivo", Sans-serif;
            font-size: 28px;
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-461cecc .jet-headline__first {
            background-color: #B3E1F2;
            border-radius: 50% 50% 50% 50%;
            padding: 10px 25px 10px 25px;
            align-self: center;
        }

        .elementor-278 .elementor-element.elementor-element-461cecc .jet-headline__second {
            align-self: center;
        }

        .elementor-278 .elementor-element.elementor-element-461cecc .jet-headline__second .jet-headline__label {
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-461cecc>.elementor-widget-container {
            margin: -41px 0px 0px 20px;
        }

        .elementor-278 .elementor-element.elementor-element-545bfdc {
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-545bfdc.elementor-widget-heading .elementor-heading-title {
            color: #03ABFF;
        }

        .elementor-278 .elementor-element.elementor-element-545bfdc>.elementor-widget-container {
            margin: 18px 0px 15px 0px;
        }

        .elementor-278 .elementor-element.elementor-element-9f26bff .elementor-text-editor {
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-9f26bff>.elementor-widget-container {
            padding: 0px 15px 0px 15px;
        }

        .elementor-278 .elementor-element.elementor-element-pe3hk02 {
            padding: 71px 0px 40px 0px;
        }

        .elementor-278 .elementor-element.elementor-element-293450b>.elementor-element-populated {
            padding: 0px 0px 0px 0px;
        }

        .elementor-278 .elementor-element.elementor-element-9ee2b76 {
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-9ee2b76>.elementor-widget-container {
            margin: 0px 0px 14px 0px;
        }

        .elementor-278 .elementor-element.elementor-element-a2b287b {
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-7013134 .elementor-spacer-inner {
            height: 37px;
        }

        .elementor-278 .elementor-element.elementor-element-7f2425f {
            padding: 27px 0px 40px 0px;
        }

        .elementor-278 .elementor-element.elementor-element-d562ceb {
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-3c73609 .elementor-spacer-inner {
            height: 29px;
        }

        .elementor-278 .elementor-element.elementor-element-2uarfuy .elementor-spacer-inner {
            height: 11px;
        }

        .elementor-278 .elementor-element.elementor-element-e3igif2 {
            padding: 29px 0px 56px 0px;
        }

        .elementor-278 .elementor-element.elementor-element-bao87bb {
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-9faab62 .elementor-spacer-inner {
            height: 29px;
        }

        .elementor-278 .elementor-element.elementor-element-7f98951:not(.elementor-motion-effects-element-type-background),
        .elementor-278 .elementor-element.elementor-element-7f98951>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #232c3d;
        }

        .elementor-278 .elementor-element.elementor-element-7f98951 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 71px 0px 32px 0px;
        }

        .elementor-278 .elementor-element.elementor-element-7f98951>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-278 .elementor-element.elementor-element-553dcc6 {
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-be9593f>.elementor-widget-container {
            margin: 6px 0px 0px 0px;
        }

        .elementor-278 .elementor-element.elementor-element-ff27652 .elementor-spacer-inner {
            height: 11px;
        }

        .elementor-278 .elementor-element.elementor-element-8678510 {
            padding: 72px 0px 45px 0px;
        }

        .elementor-278 .elementor-element.elementor-element-mlhtit3 {
            text-align: center;
        }

        .elementor-278 .elementor-element.elementor-element-xbkn7pf .elementor-spacer-inner {
            height: 29px;
        }

        .elementor-278 .elementor-element.elementor-element-num2fin .brands-list .brands-list__item-img-wrap {
            text-align: left;
        }

        .elementor-278 .elementor-element.elementor-element-num2fin .brands-list .brands-list__item-name {
            text-align: left;
        }

        .elementor-278 .elementor-element.elementor-element-num2fin .brands-list .brands-list__item-desc {
            text-align: left;
        }

        .elementor-278 .elementor-element.elementor-element-kmvzmxh:not(.elementor-motion-effects-element-type-background),
        .elementor-278 .elementor-element.elementor-element-kmvzmxh>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #f0f4f7;
        }

        .elementor-278 .elementor-element.elementor-element-kmvzmxh {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 71px 0px 77px 0px;
        }

        .elementor-278 .elementor-element.elementor-element-kmvzmxh>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-278 .elementor-element.elementor-element-0658b29.elementor-widget-heading .elementor-heading-title {
            color: #abf8fb;
        }

        .elementor-278 .elementor-element.elementor-element-2f055ee>.elementor-widget-container {
            margin: 4px 0px 27px 0px;
        }

        .elementor-278 .elementor-element.elementor-element-6447085 {
            text-align: left;
        }

        .elementor-278 .elementor-element.elementor-element-6447085>.elementor-widget-container {
            margin: -109px 0px 0px 0px;
        }

        .elementor-278 .elementor-element.elementor-element-0c8f4fe:not(.elementor-motion-effects-element-type-background),
        .elementor-278 .elementor-element.elementor-element-0c8f4fe>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #f0f4f7;
            background-image: url("wp-content/uploads/2018/03/section-gradient-bg-2.png");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .elementor-278 .elementor-element.elementor-element-0c8f4fe {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 76px 0px 0px 0px;
        }

        .elementor-278 .elementor-element.elementor-element-0c8f4fe>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-278 .elementor-element.elementor-element-l9uq5rv.elementor-view-stacked .elementor-icon:hover {
            background-color: #00D1FF;
        }

        .elementor-278 .elementor-element.elementor-element-l9uq5rv.elementor-view-framed .elementor-icon:hover,
        .elementor-278 .elementor-element.elementor-element-l9uq5rv.elementor-view-default .elementor-icon:hover {
            color: #00D1FF;
            border-color: #00D1FF;
        }

        .elementor-278 .elementor-element.elementor-element-l9uq5rv.elementor-position-right .elementor-icon-box-icon {
            margin-left: 18px;
        }

        .elementor-278 .elementor-element.elementor-element-l9uq5rv.elementor-position-left .elementor-icon-box-icon {
            margin-right: 18px;
        }

        .elementor-278 .elementor-element.elementor-element-l9uq5rv.elementor-position-top .elementor-icon-box-icon {
            margin-bottom: 18px;
        }

        .elementor-278 .elementor-element.elementor-element-l9uq5rv .elementor-icon i {
            transform: rotate(0deg);
        }

        .elementor-278 .elementor-element.elementor-element-l9uq5rv .elementor-icon-box-title {
            margin-bottom: 0px;
        }

        .elementor-278 .elementor-element.elementor-element-l9uq5rv .elementor-icon-box-content .elementor-icon-box-title {
            color: #959aa1;
        }

        .elementor-278 .elementor-element.elementor-element-l9uq5rv .elementor-icon-box-content .elementor-icon-box-description {
            color: #ffffff;
            font-size: 16px;
        }

        .elementor-278 .elementor-element.elementor-element-88fa8x9 .elementor-spacer-inner {
            height: 0px;
        }

        .elementor-278 .elementor-element.elementor-element-abp6o6r.elementor-view-stacked .elementor-icon:hover {
            background-color: #00D1FF;
        }

        .elementor-278 .elementor-element.elementor-element-abp6o6r.elementor-view-framed .elementor-icon:hover,
        .elementor-278 .elementor-element.elementor-element-abp6o6r.elementor-view-default .elementor-icon:hover {
            color: #00D1FF;
            border-color: #00D1FF;
        }

        .elementor-278 .elementor-element.elementor-element-abp6o6r.elementor-position-right .elementor-icon-box-icon {
            margin-left: 18px;
        }

        .elementor-278 .elementor-element.elementor-element-abp6o6r.elementor-position-left .elementor-icon-box-icon {
            margin-right: 18px;
        }

        .elementor-278 .elementor-element.elementor-element-abp6o6r.elementor-position-top .elementor-icon-box-icon {
            margin-bottom: 18px;
        }

        .elementor-278 .elementor-element.elementor-element-abp6o6r .elementor-icon i {
            transform: rotate(0deg);
        }

        .elementor-278 .elementor-element.elementor-element-abp6o6r .elementor-icon-box-title {
            margin-bottom: 0px;
        }

        .elementor-278 .elementor-element.elementor-element-abp6o6r .elementor-icon-box-content .elementor-icon-box-title {
            color: #959aa1;
        }

        .elementor-278 .elementor-element.elementor-element-abp6o6r .elementor-icon-box-content .elementor-icon-box-description {
            color: #ffffff;
            font-size: 16px;
        }

        .elementor-278 .elementor-element.elementor-element-6hk595t .elementor-spacer-inner {
            height: 0px;
        }

        .elementor-278 .elementor-element.elementor-element-mz5d608 .elementor-element-populated a {
            color: #03ABFF;
        }

        .elementor-278 .elementor-element.elementor-element-mz5d608 .elementor-element-populated a:hover {
            color: #00D1FF;
        }

        .elementor-278 .elementor-element.elementor-element-wwmgtkr.elementor-view-stacked .elementor-icon:hover {
            background-color: #00D1FF;
        }

        .elementor-278 .elementor-element.elementor-element-wwmgtkr.elementor-view-framed .elementor-icon:hover,
        .elementor-278 .elementor-element.elementor-element-wwmgtkr.elementor-view-default .elementor-icon:hover {
            color: #00D1FF;
            border-color: #00D1FF;
        }

        .elementor-278 .elementor-element.elementor-element-wwmgtkr.elementor-position-right .elementor-icon-box-icon {
            margin-left: 18px;
        }

        .elementor-278 .elementor-element.elementor-element-wwmgtkr.elementor-position-left .elementor-icon-box-icon {
            margin-right: 18px;
        }

        .elementor-278 .elementor-element.elementor-element-wwmgtkr.elementor-position-top .elementor-icon-box-icon {
            margin-bottom: 18px;
        }

        .elementor-278 .elementor-element.elementor-element-wwmgtkr .elementor-icon i {
            transform: rotate(0deg);
        }

        .elementor-278 .elementor-element.elementor-element-wwmgtkr .elementor-icon-box-title {
            margin-bottom: 0px;
        }

        .elementor-278 .elementor-element.elementor-element-wwmgtkr .elementor-icon-box-content .elementor-icon-box-title {
            color: #959aa1;
        }

        .elementor-278 .elementor-element.elementor-element-wwmgtkr .elementor-icon-box-content .elementor-icon-box-description {
            color: #ffffff;
            font-size: 16px;
        }

        .elementor-278 .elementor-element.elementor-element-wpamcq0:not(.elementor-motion-effects-element-type-background),
        .elementor-278 .elementor-element.elementor-element-wpamcq0>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #232c3d;
        }

        .elementor-278 .elementor-element.elementor-element-wpamcq0 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 41px 0px 33px 0px;
        }

        .elementor-278 .elementor-element.elementor-element-wpamcq0>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        @media(max-width:1024px) {
            .elementor-278 .elementor-element.elementor-element-5mha4yj>.elementor-element-populated {
                margin: 0px 0px 0px 20px;
                padding: 40px 20px 0px 20px;
            }

            .elementor-278 .elementor-element.elementor-element-vzcbsmt>.elementor-element-populated {
                margin: 0px 20px 0px 0px;
                padding: 20px 30px 50px 30px;
            }

            .elementor-278 .elementor-element.elementor-element-nt1x0hn {
                padding: 20px 0px 20px 0px;
            }

            .elementor-278 .elementor-element.elementor-element-a3bf062 {
                margin-top: 25px;
                margin-bottom: 0px;
            }

            .elementor-278 .elementor-element.elementor-element-8ffbb58>.elementor-widget-container {
                padding: 0px 0px 0px 0px;
            }

            .elementor-278 .elementor-element.elementor-element-0648dfc>.elementor-widget-container {
                padding: 0px 0px 0px 0px;
            }

            .elementor-278 .elementor-element.elementor-element-52d91b2>.elementor-widget-container {
                padding: 0px 0px 0px 0px;
            }

            .elementor-278 .elementor-element.elementor-element-08917d7>.elementor-widget-container {
                padding: 0px 0px 0px 0px;
            }

            .elementor-278 .elementor-element.elementor-element-4479f48>.elementor-widget-container {
                padding: 0px 0px 0px 0px;
            }

            .elementor-278 .elementor-element.elementor-element-71d197f>.elementor-widget-container {
                padding: 0px 0px 0px 0px;
            }

            .elementor-278 .elementor-element.elementor-element-x27ixlx>.elementor-element-populated {
                padding: 0px 15px 0px 15px;
            }

            .elementor-278 .elementor-element.elementor-element-88fa8x9 .elementor-spacer-inner {
                height: 0px;
            }

            .elementor-278 .elementor-element.elementor-element-fy8jpz8>.elementor-element-populated {
                padding: 0px 15px 0px 15px;
            }

            .elementor-278 .elementor-element.elementor-element-6hk595t .elementor-spacer-inner {
                height: 0px;
            }

            .elementor-278 .elementor-element.elementor-element-mz5d608>.elementor-element-populated {
                padding: 0px 25px 0px 0px;
            }
        }

        @media(min-width:768px) {
            .elementor-278 .elementor-element.elementor-element-d437805 {
                width: 69%;
            }

            .elementor-278 .elementor-element.elementor-element-c323589 {
                width: 31%;
            }

            .elementor-278 .elementor-element.elementor-element-5mha4yj {
                width: 68%;
            }

            .elementor-278 .elementor-element.elementor-element-c0dc6fe {
                width: 13%;
            }

            .elementor-278 .elementor-element.elementor-element-936c0ec {
                width: 14%;
            }

            .elementor-278 .elementor-element.elementor-element-a830ad1 {
                width: 72.662%;
            }

            .elementor-278 .elementor-element.elementor-element-vzcbsmt {
                width: 32%;
            }

            .elementor-278 .elementor-element.elementor-element-3db9e0f {
                width: 31%;
            }

            .elementor-278 .elementor-element.elementor-element-605cf22 {
                width: 69%;
            }

            .elementor-278 .elementor-element.elementor-element-e6c0c51 {
                width: 33%;
            }

            .elementor-278 .elementor-element.elementor-element-53fcf0b {
                width: 67%;
            }

            .elementor-278 .elementor-element.elementor-element-634868b {
                width: 67%;
            }

            .elementor-278 .elementor-element.elementor-element-4b8a457 {
                width: 33%;
            }
        }

        @media(max-width:1024px) and (min-width:768px) {
            .elementor-278 .elementor-element.elementor-element-5mha4yj.elementor-column {
                width: 60%;
            }

            .elementor-278 .elementor-element.elementor-element-vzcbsmt.elementor-column {
                width: 40%;
            }

            .elementor-278 .elementor-element.elementor-element-3db9e0f.elementor-column {
                width: 100%;
            }

            .elementor-278 .elementor-element.elementor-element-605cf22.elementor-column {
                width: 100%;
            }

            .elementor-278 .elementor-element.elementor-element-e6c0c51.elementor-column {
                width: 40%;
            }

            .elementor-278 .elementor-element.elementor-element-53fcf0b.elementor-column {
                width: 60%;
            }

            .elementor-278 .elementor-element.elementor-element-634868b.elementor-column {
                width: 60%;
            }

            .elementor-278 .elementor-element.elementor-element-4b8a457.elementor-column {
                width: 40%;
            }
        }

        @media(max-width:767px) {
            .elementor-278 .elementor-element.elementor-element-5mha4yj>.elementor-element-populated {
                margin: 20px 0px 0px 20px;
                padding: 40px 20px 20px 20px;
            }

            .elementor-278 .elementor-element.elementor-element-a0fee40>.elementor-element-populated {
                padding: 0px 20px 0px 0px;
            }

            .elementor-278 .elementor-element.elementor-element-5bcdf38>.elementor-element-populated {
                padding: 0px 20px 0px 0px;
            }

            .elementor-278 .elementor-element.elementor-element-c0dc6fe>.elementor-element-populated {
                padding: 0px 20px 20px 0px;
            }

            .elementor-278 .elementor-element.elementor-element-782c585 {
                text-align: center;
            }

            .elementor-278 .elementor-element.elementor-element-936c0ec>.elementor-element-populated {
                padding: 0px 20px 20px 0px;
            }

            .elementor-278 .elementor-element.elementor-element-a830ad1>.elementor-element-populated {
                padding: 0px 20px 0px 0px;
            }

            .elementor-278 .elementor-element.elementor-element-5896f60 {
                text-align: center;
            }

            .elementor-278 .elementor-element.elementor-element-vzcbsmt>.elementor-element-populated {
                margin: 0px 10px 0px 10px;
                padding: 25px 30px 50px 30px;
            }

            .elementor-278 .elementor-element.elementor-element-nt1x0hn {
                padding: 50px 0px 50px 0px;
            }

            .elementor-278 .elementor-element.elementor-element-9977108>.elementor-element-populated {
                padding: 0px 20px 20px 20px;
            }

            .elementor-278 .elementor-element.elementor-element-33e6e0d>.elementor-element-populated {
                padding: 0px 20px 20px 20px;
            }

            .elementor-278 .elementor-element.elementor-element-3e82538>.elementor-element-populated {
                padding: 0px 20px 0px 20px;
            }

            .elementor-278 .elementor-element.elementor-element-146d6e8>.elementor-widget-container {
                margin: -107px 0px 0px 0px;
            }

            .elementor-278 .elementor-element.elementor-element-53fcf0b>.elementor-element-populated {
                margin: 20px 0px 35px 0px;
                padding: 20px 20px 20px 20px;
            }

            .elementor-278 .elementor-element.elementor-element-8ffbb58 .elementor-icon-box-icon {
                margin-bottom: 17px;
            }

            .elementor-278 .elementor-element.elementor-element-0648dfc .elementor-icon-box-icon {
                margin-bottom: 17px;
            }

            .elementor-278 .elementor-element.elementor-element-52d91b2 .elementor-icon-box-icon {
                margin-bottom: 17px;
            }

            .elementor-278 .elementor-element.elementor-element-08917d7 .elementor-icon-box-icon {
                margin-bottom: 17px;
            }

            .elementor-278 .elementor-element.elementor-element-4479f48 .elementor-icon-box-icon {
                margin-bottom: 17px;
            }

            .elementor-278 .elementor-element.elementor-element-71d197f .elementor-icon-box-icon {
                margin-bottom: 17px;
            }

            .elementor-278 .elementor-element.elementor-element-1c882cb>.elementor-widget-container {
                margin: 0px 0px 35px 0px;
            }

            .elementor-278 .elementor-element.elementor-element-2cbcdaa>.elementor-widget-container {
                margin: 0px 0px 35px 0px;
            }

            .elementor-278 .elementor-element.elementor-element-6447085>.elementor-widget-container {
                margin: 35px 0px 0px 0px;
            }

            .elementor-278 .elementor-element.elementor-element-x27ixlx>.elementor-element-populated {
                padding: 0px 0px 0px 0px;
            }

            .elementor-278 .elementor-element.elementor-element-l9uq5rv .elementor-icon-box-icon {
                margin-bottom: 18px;
            }

            .elementor-278 .elementor-element.elementor-element-88fa8x9 .elementor-spacer-inner {
                height: 30px;
            }

            .elementor-278 .elementor-element.elementor-element-fy8jpz8>.elementor-element-populated {
                padding: 0px 0px 0px 0px;
            }

            .elementor-278 .elementor-element.elementor-element-abp6o6r .elementor-icon-box-icon {
                margin-bottom: 18px;
            }

            .elementor-278 .elementor-element.elementor-element-6hk595t .elementor-spacer-inner {
                height: 30px;
            }

            .elementor-278 .elementor-element.elementor-element-mz5d608>.elementor-element-populated {
                padding: 0px 0px 0px 0px;
            }

            .elementor-278 .elementor-element.elementor-element-wwmgtkr .elementor-icon-box-icon {
                margin-bottom: 18px;
            }
        }
    </style>
    <link rel='stylesheet' id='tm-products-carousel-widget-styles-css' href='wp-content/plugins/tm-woocommerce-package/assets/css/tm-products-carousel-widget9e1e.css?ver=1.3.2' type='text/css' media='all' />
    <link rel='stylesheet' id='cherry-popups-font-awesome-css' href='wp-content/plugins/cherry-popups/assets/css/font-awesome.min1849.css?ver=4.7.0' type='text/css' media='all' />
    <link rel='stylesheet' id='cherry-popups-styles-css' href='wp-content/plugins/cherry-popups/assets/css/cherry-popups-styles3ec8.css?ver=1.1.6' type='text/css' media='all' />
    <link rel='stylesheet' id='cherry-team-css' href='wp-content/plugins/cherry-team-members/public/assets/css/cherry-team47a7.css?ver=1.4.5' type='text/css' media='all' />
    <link rel='stylesheet' id='cherry-team-grid-css' href='wp-content/plugins/cherry-team-members/public/assets/css/cherry-team-grid47a7.css?ver=1.4.5' type='text/css' media='all' />
    <link rel='stylesheet' id='nucleo-mini-css' href='wp-content/themes/johnnygo/assets/css/nucleo-mini8a54.css?ver=1.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='johnnygo-theme-style-css' href='wp-content/themes/johnnygo/style8a54.css?ver=1.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='johnnygo-skin-style-css' href='wp-content/themes/johnnygo/skins/default/style-skin8a54.css?ver=1.0.0' type='text/css' media='all' />
    <style id='johnnygo-skin-style-inline-css' type='text/css'>
        /* #Typography */
        html {
            font-size: 87%;
        }

        body {
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 1.643;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            text-align: left;
            color: #969ba2;
        }

        h1,
        .h1-style {
            font-style: normal;
            font-weight: 500;
            font-size: 39px;
            line-height: 1.19;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            text-align: inherit;
            color: #232c3d;
        }

        h2,
        .h2-style {
            font-style: normal;
            font-weight: 500;
            font-size: 28px;
            line-height: 1.3;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            text-align: inherit;
            color: #232c3d;
        }

        h3,
        .h3-style {
            font-style: normal;
            font-weight: 500;
            font-size: 24px;
            line-height: 1.313;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            text-align: inherit;
            color: #FF9000
        }

        h4,
        .h4-style {
            font-style: normal;
            font-weight: 500;
            font-size: 22px;
            line-height: 1.45;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            text-align: inherit;
            color: #ffffff;
        }

        h5,
        .h5-style {
            font-style: normal;
            font-weight: 500;
            font-size: 18px;
            line-height: 1.44;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            text-align: inherit;
            color: #232c3d;
        }

        h6,
        .h6-style {
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 1.44;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            text-align: inherit;
            color: #232c3d;
        }

        @media (min-width: 1200px) {

            h1,
            .h1-style {
                font-size: 64px;
            }

            h2,
            .h2-style {
                font-size: 46px;
            }

            h3,
            .h3-style {
                font-size: 32px;
            }
        }

        a,
        h1 a:hover,
        h2 a:hover,
        h3 a:hover,
        h4 a:hover,
        h5 a:hover,
        h6 a:hover {
            color: #03ABFF;
        }

        a:hover {
            color: #232c3d;
        }

        /* #Invert Color Scheme */
        .invert {
            color: #959aa1;
        }

        .invert h1 {
            color: #ffffff;
        }

        .invert h2 {
            color: #ffffff;
        }

        .invert h3 {
            color: #ffffff;
        }

        .invert h4 {
            color: #ffffff;
        }

        .invert h5 {
            color: #ffffff;
        }

        .invert h6 {
            color: #ffffff;
        }

        .invert a {
            color: #03ABFF;
        }

        .invert a:hover {
            color: #ffffff;
        }

        a[href*="mailto:"] {
            color: #03ABFF;
        }

        a[href*="mailto:"]:hover {
            color: #00D1FF;
        }

        a[href*="tel:"],
        a[href*="callto:"] {
            color: #969ba2;
        }

        a[href*="tel:"]:hover,
        a[href*="callto:"]:hover {
            color: #03ABFF;
        }

        /* #Layout */
        @media (min-width: 1200px) {
            .site .container {
                max-width: 1200px;
            }
        }

        /* #Pages */
        .not-found .page-title,
        .error-404 .page-content h2 {
            color: #03ABFF;
        }

        .invert.error-404 .page-content h2 {
            color: #ffffff;
        }

        /* #404 page */
        body.error404 .site-content {
            background-color: #ffffff;
        }

        /* #Elements */
        blockquote {
            font-style: normal;
            font-weight: 500;
            font-size: 22px;
            line-height: 1.45;
            font-family: Archivo, sans-serif;
            color: #03ABFF;
            background-color: #f0f4f7;
        }

        .invert blockquote {
            color: #ffffff;
        }

        blockquote:before {
            color: #03ABFF;
        }

        blockquote cite {
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 1.643;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
        }

        blockquote cite,
        blockquote cite a {
            color: #232c3d;
        }

        code {
            color: #ffffff;
            background-color: #305893;
            font-family: Archivo, sans-serif;
        }

        .single-post .post>.entry-content>p:first-of-type:first-letter,
        .dropcaps {
            background-color: #03ABFF;
            color: #ffffff;
            font-family: Archivo, sans-serif;
        }

        hr {
            background-color: #f0f4f7;
        }

        /* List */
        .hentry ol>li:before,
        .hentry ul:not([class])>li:before,
        .comment-content ol>li:before,
        .comment-content ul:not([class])>li:before {
            color: #03ABFF;
        }

        dl {
            font-family: Archivo, sans-serif;
        }

        /* Page preloader */
        .preloader-path {
            stroke: #03ABFF;
        }

        /* #ToTop button */
        #toTop {
            color: #ffffff;
            background-color: #03ABFF;
        }

        #toTop:hover {
            background-color: #00D1FF;
        }

        /* #Header */
        .header-container {
            background-color: #ffffff;
            background-repeat: no-repeat;
            background-attachment: scroll;
            background-size: cover;
            ;
            background-position: center;
        }

        .site-header.style-5 .header-nav-wrapper:before {
            background-color: #03ABFF;
        }

        .site-header.style-1 .header-container_wrap> :not(:first-child),
        .site-header.style-2 .header-nav-wrapper,
        .site-header.style-3 .header-container__flex-wrap,
        .site-header.style-4 .header-components__contact-button,
        .site-header.style-6 .header-components__contact-button,
        .site-header.style-7 .header-components__contact-button {
            border-color: #e3e9ee;
        }

        .site-header.style-1.transparent .header-container_wrap> :not(:first-child),
        .site-header.style-2.transparent .header-nav-wrapper,
        .site-header.style-3.transparent .header-container__flex-wrap,
        .site-header.style-4.transparent .header-components__contact-button,
        .site-header.style-6.transparent .header-components__contact-button,
        .site-header.style-7.transparent .header-components__contact-button {
            border-color: rgba(255, 255, 255, 0.2);
        }

        /* ##Logo */
        .site-logo--text {
            font-style: normal;
            font-weight: 600;
            font-size: 24px;
            font-family: Montserrat, sans-serif;
        }

        .site-logo__link,
        .site-logo__link:hover {
            color: #232c3d;
        }

        .invert .site-description {
            color: #ffffff;
        }

        /* ##Top Panel */
        .top-panel {
            background-color: #232c3d;
        }

        /* ##Invert Header Style*/
        .invert.top-panel,
        .invert.header-container {
            color: #969ba2;
        }

        /* #Form buttons */
        form button,
        form input[type='button'],
        form input[type='reset'],
        form input[type='submit'] {
            font-weight: 500;
            font-size: 12px;
            font-family: Archivo, sans-serif;
        }

        /* #Fields */
        input[type='text'],
        input[type='email'],
        input[type='url'],
        input[type='password'],
        input[type='search'],
        input[type='number'],
        input[type='tel'],
        input[type='range'],
        input[type='date'],
        input[type='month'],
        input[type='week'],
        input[type='time'],
        input[type='datetime'],
        input[type='datetime-local'],
        input[type='color'],
        select,
        textarea,
        .wpcf7 .wpcf7-form-control-wrap[class*="file-"] {
            background-color: #ffffff;
            border-color: #e3e9ee;
            color: #969ba2;
        }

        input[type='text']:focus,
        input[type='email']:focus,
        input[type='url']:focus,
        input[type='password']:focus,
        input[type='search']:focus,
        input[type='number']:focus,
        input[type='tel']:focus,
        input[type='range']:focus,
        input[type='date']:focus,
        input[type='month']:focus,
        input[type='week']:focus,
        input[type='time']:focus,
        input[type='datetime']:focus,
        input[type='datetime-local']:focus,
        input[type='color']:focus,
        select:focus,
        textarea:focus {
            border-color: #e3e9ee;
            color: #232c3d;
            box-shadow: inset 0 0 0 1px #e3e9ee;
        }

        /* #Search Form */
        .search-form__field {
            color: #969ba2;
        }

        .search-form__toggle,
        .site-header .search-form__input-wrap::before {
            color: #232c3d;
        }

        .site-header .search-form .search-form__submit,
        .site-header .invert .search-form .search-form__submit:hover {
            color: #03ABFF;
        }

        @media (min-width: 600px) {

            .site-header .search-form .search-form__submit:hover,
            .site-header.style-5 .search-form .search-form__submit:hover {
                color: #232c3d;
            }
        }

        .search-form__close {
            color: #d2d2d3;
        }

        .invert .search-form__toggle:not(:hover),
        .invert .search-form__close:not(:hover),
        .site-header .invert .search-form__input-wrap::before,
        .site-header .invert .search-form .search-form__submit:not(:hover) {
            color: #ffffff;
        }

        .search-form__toggle:hover,
        .search-form__close:hover {
            color: #03ABFF;
        }

        .invert .search-form__toggle:hover,
        .invert .search-form__close:hover {
            color: #03ABFF;
        }

        .transparent .invert .search-form__close:hover {
            color: #03ABFF;
        }

        @media (min-width: 600px) {

            .invert .search-form__toggle:hover,
            .invert .search-form__close:hover {
                color: #232c3d;
            }
        }

        .widget_search .search-form__submit,
        .widget_search .search-form__submit.btn {
            color: #232c3d;
        }

        .widget_search .search-form__submit:hover,
        .widget_search .search-form__submit.btn:hover {
            color: #03ABFF;
        }

        .invert .search-form__field,
        .invert .search-form__field:focus {
            color: #ffffff;
        }

        /* #Comment, Contact, Password Forms */
        [class^="comment-form-"] i {
            color: #e3e9ee;
        }

        .wpcf7-submit,
        .post-password-form label+input {
            color: #ffffff;
            background-color: #03ABFF;
        }

        .wpcf7-submit.btn-accent-2 {
            color: #ffffff;
            background-color: #00D1FF;
        }

        .wpcf7-submit:hover,
        .post-password-form label+input:hover {
            background-color: #00D1FF;
        }

        .wpcf7-submit.btn-accent-2:hover {
            color: #ffffff;
            background-color: #03ABFF;
        }

        .wpcf7-submit:active,
        .post-password-form label+input:active {
            background-color: rgb(229, 223, 67);
        }

        .wpcf7-submit.btn-accent-2:active {
            background-color: rgb(47, 110, 191);
        }

        .input-with-icon>i {
            color: #969ba2;
        }

        .invert ::-webkit-input-placeholder {
            color: #ffffff;
        }

        .invert ::-moz-placeholder {
            color: #ffffff;
        }

        .invert :-moz-placeholder {
            color: #ffffff;
        }

        .invert :-ms-input-placeholder {
            color: #ffffff;
        }

        .wpcf7 .wpcf7-not-valid:focus::-webkit-input-placeholder {
            color: #969ba2;
        }

        .wpcf7 .wpcf7-not-valid:focus::-moz-placeholder {
            color: #969ba2;
        }

        .wpcf7 .wpcf7-not-valid:focus:-moz-placeholder {
            color: #969ba2;
        }

        .wpcf7 .wpcf7-not-valid:focus:-ms-input-placeholder {
            color: #969ba2;
        }

        .wpcf7 input[type='date'].wpcf7-not-valid:focus {
            color: #969ba2;
        }

        .social-list a {
            color: #969ba2;
        }

        .social-list a:hover {
            color: #03ABFF;
        }

        .invert .social-list a {
            color: #f0f4f7;
        }

        .invert .social-list a:hover {
            color: #03ABFF;
        }

        /* #Menus */
        .footer-menu {
            font-family: Archivo, sans-serif;
        }

        @media (min-width: 600px) {
            .main-navigation .menu>li>a {
                font-style: normal;
                font-weight: 400;
                font-size: 13px;
                line-height: 2;
                font-family: Montserrat, sans-serif;
                letter-spacing: 0.04em;
            }
        }

        /* #Main Menu */
        .main-navigation .menu>li>a {
            color: #232c3d;
        }

        .main-navigation .menu>li>a:hover,
        .main-navigation .menu>li.menu-hover>a,
        .main-navigation .menu>li.tm-mega-menu-hover>a,
        .main-navigation .menu>li.current_page_item>a,
        .main-navigation .menu>li.current_page_ancestor>a,
        .main-navigation .menu>li.current-menu-item>a,
        .main-navigation .menu>li.current-menu-ancestor>a {
            color: #03ABFF;
        }

        .main-navigation .menu .menu-item-has-children>a:after {
            color: #969ba2;
        }

        .invert .main-navigation .menu>li>a,
        .invert .main-navigation .menu>.menu-item-has-children>a:after {
            color: #ffffff;
        }

        @media (min-width: 600px) {

            .invert .main-navigation .menu>li>a:hover,
            .invert .main-navigation .menu>li.menu-hover>a,
            .invert .main-navigation .menu>li.tm-mega-menu-hover>a,
            .invert .main-navigation .menu>li.current_page_item>a,
            .invert .main-navigation .menu>li.current_page_ancestor>a,
            .invert .main-navigation .menu>li.current-menu-item>a,
            .invert .main-navigation .menu>li.current-menu-ancestor>a {
                color: #03ABFF;
            }

            .site-header.style-5 .invert .main-navigation.main-menu-style-1 .menu>li>a:hover,
            .site-header.style-5 .invert .main-navigation.main-menu-style-1 .menu>li.menu-hover>a,
            .site-header.style-5 .invert .main-navigation.main-menu-style-1 .menu>li.tm-mega-menu-hover>a,
            .site-header.style-5 .invert .main-navigation.main-menu-style-1 .menu>li.current_page_item>a,
            .site-header.style-5 .invert .main-navigation.main-menu-style-1 .menu>li.current_page_ancestor>a,
            .site-header.style-5 .invert .main-navigation.main-menu-style-1 .menu>li.current-menu-item>a,
            .site-header.style-5 .invert .main-navigation.main-menu-style-1 .menu>li.current-menu-ancestor>a {
                color: #232c3d;
            }

            .main-navigation.main-menu-style-2 .menu>li>a:hover,
            .main-navigation.main-menu-style-2 .menu>li.menu-hover>a,
            .main-navigation.main-menu-style-2 .menu>li.tm-mega-menu-hover>a,
            .main-navigation.main-menu-style-2 .menu>li.current_page_item>a,
            .main-navigation.main-menu-style-2 .menu>li.current_page_ancestor>a,
            .main-navigation.main-menu-style-2 .menu>li.current-menu-item>a,
            .main-navigation.main-menu-style-2 .menu>li.current-menu-ancestor>a {
                color: #ffffff;
                background-color: #00D1FF;
            }
        }

        .main-navigation .sub-menu {
            background-color: #ffffff;
        }

        .main-navigation .sub-menu a {
            color: #969ba2;
        }

        .main-navigation .sub-menu a:hover,
        .main-navigation .sub-menu li.menu-hover>a,
        .main-navigation .sub-menu li.tm-mega-menu-hover>a,
        .main-navigation .sub-menu li.current_page_item>a,
        .main-navigation .sub-menu li.current_page_ancestor>a,
        .main-navigation .sub-menu li.current-menu-item>a,
        .main-navigation .sub-menu li.current-menu-ancestor>a {
            color: #03ABFF;
        }

        @media (min-width: 600px) {
            .invert .main-navigation .sub-menu {
                background-color: #232c3d;
            }
        }

        /* #Vertical-Mobile menu */
        #site-navigation.main-navigation.vertical-menu ul.menu li a,
        #site-navigation.main-navigation.mobile-menu ul.menu li a,
        #site-navigation.main-navigation.vertical-menu .navigation-button i {
            color: #ffffff;
        }

        #site-navigation.main-navigation.mobile-menu ul.menu li a:hover,
        #site-navigation.main-navigation.mobile-menu ul.menu li.tm-mega-menu-hover>a,
        #site-navigation.main-navigation.mobile-menu ul.menu li.current_page_item>a,
        #site-navigation.main-navigation.mobile-menu ul.menu li.current-menu-item>a,
        #site-navigation.main-navigation.vertical-menu ul.menu li a:hover,
        #site-navigation.main-navigation.vertical-menu ul.menu li.tm-mega-menu-hover>a,
        #site-navigation.main-navigation.vertical-menu ul.menu li.current_page_item>a,
        #site-navigation.main-navigation.vertical-menu ul.menu li.current-menu-item>a,
        #site-navigation.main-navigation.vertical-menu ul.menu .menu-item-has-children a:after,
        #site-navigation.main-navigation.mobile-menu ul.menu li a .sub-menu-toggle,
        #site-navigation.main-navigation.vertical-menu .navigation-button .navigation-button__text,
        #site-navigation.main-navigation.vertical-menu .navigation-button:hover i {
            color: #00D1FF;
        }

        /* ##Menu toggle */
        .menu-toggle .menu-toggle-inner {
            background-color: #232c3d;
        }

        .invert .menu-toggle:not(:hover) .menu-toggle-inner {
            background-color: #ffffff;
        }

        .menu-toggle:hover .menu-toggle-inner {
            background-color: #03ABFF;
        }

        /* ##Menu-item desc */
        .menu-item__desc {
            color: #969ba2;
        }

        /* #Footer Menu */
        .footer-menu a {
            color: #232c3d;
        }

        .footer-menu a:hover,
        .footer-menu li.current-menu-item a,
        .footer-menu li.current_page_item a {
            color: #03ABFF;
        }

        .invert .footer-menu a {
            color: #03ABFF;
        }

        .invert.first-row-regular .footer-menu a {
            color: #232c3d;
        }

        .invert .footer-menu a:hover,
        .invert .footer-menu li.current-menu-item a,
        .invert .footer-menu li.current_page_item a {
            color: #ffffff;
        }

        .invert.first-row-regular .footer-menu a:hover,
        .invert.first-row-regular .footer-menu li.current-menu-item a,
        .invert.first-row-regular .footer-menu li.current_page_item a {
            color: #03ABFF;
        }

        /* #Top Menu */
        .invert .top-panel__menu .menu-item a {
            color: #03ABFF;
        }

        .invert .top-panel__menu .menu-item a:hover,
        .invert .top-panel__menu .menu-item.current-menu-item a,
        .invert .top-panel__menu .menu-item.current_page_item a {
            color: #ffffff;
        }

        /*# TM Mega menu */
        nav.main-navigation>.tm-mega-menu.mega-menu-mobile-on .mega-menu-mobile-arrow i,
        nav.main-navigation .mega-menu-arrow {
            color: #969ba2;
        }

        @media (min-width: 600px) {

            nav.main-navigation.main-menu-style-2 .menu>li.current-menu-item>a>.mega-menu-arrow,
            nav.main-navigation.main-menu-style-2 .menu>li:hover>a>.mega-menu-arrow,
            nav.main-navigation.main-menu-style-2 .menu>li.menu-hover>a>.mega-menu-arrow {
                color: #ffffff;
            }
        }

        .invert nav.main-navigation .menu>li>a>.mega-menu-arrow {
            color: #ffffff;
        }

        nav.main-navigation>.tm-mega-menu .tm-mega-menu-sub.mega-sub .tm-mega-menu-sub-item.sub-column-title>a {
            line-height: 1.643;
        }

        @media (min-width: 600px) {
            nav.main-navigation>.tm-mega-menu .tm-mega-menu-sub.mega-sub .tm-mega-menu-sub-item.sub-column-title>a {
                font-style: normal;
                font-weight: 500;
                font-size: 18px;
                line-height: 1.44;
                font-family: Archivo, sans-serif;
                letter-spacing: 0em;
                color: #232c3d;
            }

            .invert nav.main-navigation>.tm-mega-menu .tm-mega-menu-sub.mega-sub .tm-mega-menu-sub-item.sub-column-title>a {
                color: #ffffff;
            }
        }

        nav.main-navigation>.tm-mega-menu .tm-mega-menu-sub.mega-sub>.tm-mega-menu-sub-item+.tm-mega-menu-sub-item::before {
            background-color: #e3e9ee;
        }

        .invert nav.main-navigation>.tm-mega-menu .tm-mega-menu-sub.mega-sub>.tm-mega-menu-sub-item+.tm-mega-menu-sub-item::before {
            background-color: rgba(255, 255, 255, 0.15);
        }

        /* #Post */
        .hentry {
            border-color: #e3e9ee;
        }

        .posts-list__item-content,
        .posts-list--search .posts-list__item {
            border-color: #e3e9ee;
        }

        /* #Sidebar */
        .position-one-right-sidebar .site-content_wrap .sidebar::before,
        .position-one-left-sidebar .site-content_wrap .sidebar::before,
        .position-one-right-sidebar .site-content_wrap .single-service::before,
        .position-one-left-sidebar .site-content_wrap .single-service::before,
        .position-one-right-sidebar .site-content_wrap .single-project::before,
        .position-one-left-sidebar .site-content_wrap .single-project::before {
            background-color: #e3e9ee;
        }

        /* #Sticky label */
        .sticky__label {
            background-color: #00D1FF;
            color: #ffffff;
        }

        .posts-list--default-fullwidth-image .posts-list__item:hover .sticky__label,
        .posts-list--masonry .posts-list__item:hover .sticky__label,
        .posts-list--grid .posts-list__item:hover .sticky__label,
        .posts-list--vertical-justify .posts-list__item:hover .sticky__label {
            background-color: #00D1FF;
        }

        /* #Entry Meta */
        .entry-meta,
        .entry-meta-container,
        .post__cats,
        .posted-by,
        .cherry-trend-views,
        .cherry-trend-rating {
            font-style: normal;
            font-weight: 400;
            font-size: 12px;
            line-height: 2;
            font-family: Roboto, sans-serif;
            letter-spacing: 0em;
        }

        .single-post .post__date-circle .post__date-link,
        .posts-list .post__date-circle .post__date-link,
        .posts-list__item.has-thumb .post__date-link,
        .posts-list__item.format-gallery .post__date-link,
        .posts-list__item.format-image .post__date-link,
        .posts-list__item.format-video .post__date-link {
            background-color: #f0f4f7;
        }

        .single-post .post__date-circle .post__date-link:hover,
        .posts-list .post__date-circle .post__date-link:hover,
        .posts-list__item.has-thumb .post__date-link:hover,
        .posts-list__item.format-gallery .post__date-link:hover,
        .posts-list__item.format-image .post__date-link:hover,
        .posts-list__item.format-video .post__date-link:hover {
            background-color: #03ABFF;
        }

        .post__date-day {
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 1.313;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            color: #03ABFF;
        }

        .post__date-circle .post__date-day {
            font-size: 29px;
        }

        .post__date-month {
            font-style: normal;
            font-weight: 500;
            font-size: 13px;
            line-height: 1.44;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            color: #232c3d;
        }

        .single-post .post__date-link:hover .post__date-day,
        .single-post .post__date-link:hover .post__date-month,
        .posts-list .post__date-link:hover .post__date-day,
        .posts-list .post__date-link:hover .post__date-month {
            color: #ffffff;
        }

        .posted-by a:hover,
        .post__date a {
            color: #969ba2;
        }

        .posted-by a,
        .post__date a:hover {
            color: #03ABFF;
        }

        .invert .posted-by a {
            color: #03ABFF;
        }

        .invert .post__date a,
        .invert .post__comments a {
            color: #959aa1;
        }

        .invert .posted-by a:hover,
        .invert .post__date a:hover,
        .invert .post__comments a:hover {
            color: #ffffff;
        }

        .post__cats a,
        .post__tags a,
        .post__comments a,
        .cherry-trend-views__count {
            color: #232c3d;
        }

        .post__cats a:hover,
        .post__tags a:hover,
        .post__comments a:hover {
            color: #03ABFF;
        }

        .invert .post__cats a,
        .invert .post__tags a,
        .invert .post__comments a {
            color: #ffffff;
        }

        .invert .post__cats a:hover,
        .invert .post__tags a:hover,
        .invert .post__comments a:hover {
            color: #03ABFF;
        }

        .single-post__full-width-section .post__cats a:not(:hover) {
            color: #03ABFF;
        }

        .post__comments i,
        .cherry-trend-views__count:before {
            color: rgb(201, 206, 213);
        }

        .invert .post__comments i {
            color: #03ABFF;
        }

        /* #Post Format */
        .format-audio .post-featured-content,
        .format-quote .post-featured-content,
        .format-link .post-featured-content,
        .single-post .mejs-container-wrapper {
            background-color: #f0f4f7;
        }

        .post-format-quote,
        .post-format-quote a:not(:hover) {
            color: #03ABFF;
        }

        .post-format-quote cite a:not(:hover) {
            color: #232c3d;
        }

        .posts-list--default-modern .post-format-quote {
            font-style: normal;
            font-weight: 500;
            font-size: 24px;
            line-height: 1.313;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
        }

        @media (min-width: 1200px) {
            .posts-list--default-modern .post-format-quote {
                font-size: 32px;
            }
        }

        .post-featured-content .post-format-link {
            color: #03ABFF;
        }

        .post-featured-content .post-format-link:hover {
            color: #232c3d;
        }

        /* #Single posts */
        .single-post .site-main> :not(.post) {
            border-color: #e3e9ee;
        }

        .single-post__full-width-section.invert {
            color: #ffffff;
        }

        /* #Comments */
        .comment-list>.comment+.comment,
        .comment-list>.comment+.pingback,
        .comment-list>.pingback+.comment,
        .comment-list>.pingback+.pingback,
        .comment-list .children>.comment,
        .comment-respond,
        .comment-list .comment-respond {
            border-color: #e3e9ee;
        }

        .comment-metadata {
            font-style: normal;
            font-weight: 400;
            font-size: 12px;
            line-height: 2;
            font-family: Roboto, sans-serif;
        }

        .comment-metadata .url {
            color: #232c3d;
        }

        .comment-metadata .url:after,
        .comment-metadata .url:hover {
            color: #03ABFF;
        }

        .comment .comment-date__link:hover {
            color: #03ABFF;
        }

        .comment-reply-link {
            font-family: Archivo, sans-serif;
        }

        #cancel-comment-reply-link {
            color: #03ABFF;
            line-height: calc(1.44 * 16px);
        }

        #cancel-comment-reply-link:hover {
            color: #232c3d;
        }

        /* Audio list */
        /*temp*/
        .wp-playlist.wp-audio-playlist.wp-playlist-light {
            border-color: #f0f4f7;
        }

        .wp-playlist.wp-audio-playlist.wp-playlist-light .wp-playlist-caption {
            color: #969ba2;
        }

        .wp-playlist.wp-audio-playlist .wp-playlist-current-item .wp-playlist-caption .wp-playlist-item-title {
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 1.44;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            color: #232c3d;
        }

        .wp-playlist.wp-audio-playlist.wp-playlist-dark .wp-playlist-current-item .wp-playlist-caption .wp-playlist-item-title {
            color: #ffffff;
        }

        /* #wp-video */
        .mejs-video .mejs-overlay-button:before {
            color: #ffffff;
        }

        .mejs-video .mejs-overlay-button:hover:after {
            background: #03ABFF;
        }

        /* #Paginations */
        .pagination {
            border-color: #e3e9ee;
        }

        .site-content .page-links a,
        #content .nav-links .page-numbers,
        .tm-pg_front_gallery-navigation .tm_pg_nav-links a.tm_pg_page-numbers {
            color: #969ba2;
            border-color: #e3e9ee;
        }

        .site-content .page-links a:hover,
        .site-content .page-links>.page-links__item,
        #content .nav-links a.page-numbers:not(.next):not(.prev):hover,
        #content .nav-links .page-numbers.current,
        .tm-pg_front_gallery-navigation .tm_pg_nav-links a.tm_pg_page-numbers:not(.current):not(.next):not(.prev):hover,
        .tm-pg_front_gallery-navigation .tm_pg_nav-links a.tm_pg_page-numbers.current {
            color: #ffffff;
            background-color: #03ABFF;
            border-color: #03ABFF;
        }

        #content .nav-links .page-numbers.next,
        #content .nav-links .page-numbers.prev,
        .tm-pg_front_gallery-navigation .tm_pg_nav-links a.tm_pg_page-numbers.next,
        .tm-pg_front_gallery-navigation .tm_pg_nav-links a.tm_pg_page-numbers.prev {
            color: #03ABFF;
            font-style: normal;
            font-weight: 500;
            font-size: 12px;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
        }

        #content .nav-links .page-numbers.next:hover,
        #content .nav-links .page-numbers.prev:hover,
        .tm-pg_front_gallery-navigation .tm_pg_nav-links a.tm_pg_page-numbers.next:hover,
        .tm-pg_front_gallery-navigation .tm_pg_nav-links a.tm_pg_page-numbers.prev:hover {
            color: #00D1FF;
        }

        .comment-navigation a,
        .posts-navigation a,
        .post-navigation a {
            font-weight: 500;
            font-size: 12px;
            font-family: Archivo, sans-serif;
            color: #ffffff;
            background-color: #03ABFF;
        }

        .comment-navigation a:hover,
        .posts-navigation a:hover,
        .post-navigation a:hover,
        .comment-navigation .nav-text,
        .posts-navigation .nav-text,
        .post-navigation .nav-text {
            background-color: #305893;
        }

        /* #Breadcrumbs */
        .breadcrumbs {
            background-color: #f0f4f7;
        }

        .breadcrumbs:before {
            background-repeat: repeat;
            background-attachment: scroll;
            background-size: auto;
            opacity: 1;
        }

        .breadcrumbs__item,
        .breadcrumbs__browse {
            font-style: normal;
            font-weight: 400;
            font-size: 12px;
            line-height: 1.75;
            font-family: Roboto, sans-serif;
            letter-spacing: 0em;
        }

        .breadcrumbs__browse,
        .breadcrumbs__item,
        .breadcrumbs__item a {
            color: #969ba2;
        }

        /* #Footer */
        .site-footer {
            background-color: #232c3d;
        }

        .site-footer.style-1 .site-info-first-row {
            background-color: #ffffff;
        }

        .footer-area-wrap {
            background-color: #f0f4f7;
        }

        /* ##Invert Footer Style*/
        .invert.footer-area-wrap,
        .invert.footer-container {
            color: #959aa1;
        }

        /* #Magnific Popup*/
        .mfp-iframe-holder .mfp-close,
        .mfp-image-holder .mfp-close {
            color: rgb(214, 219, 226);
        }

        .mfp-iframe-holder .mfp-close:hover,
        .mfp-image-holder .mfp-close:hover {
            color: #d2d2d3;
        }

        .mfp-iframe-holder .mfp-arrow:before,
        .mfp-iframe-holder .mfp-arrow:after,
        .mfp-image-holder .mfp-arrow:before,
        .mfp-image-holder .mfp-arrow:after {
            background-color: rgb(214, 219, 226);
        }

        .mfp-iframe-holder .mfp-arrow:hover:before,
        .mfp-iframe-holder .mfp-arrow:hover:after,
        .mfp-image-holder .mfp-arrow:hover:before,
        .mfp-image-holder .mfp-arrow:hover:after {
            background-color: #d2d2d3;
        }

        /* #Swiper navigation*/
        .swiper-pagination-bullet {
            background-color: #d2d2d3;
        }

        .swiper-pagination-bullet-active,
        .swiper-pagination-bullet:hover {
            background-color: #232c3d;
        }

        .swiper-button-next:not(.swiper-button-disabled),
        .swiper-button-prev:not(.swiper-button-disabled) {
            color: #ffffff;
            background-color: #03ABFF;
        }

        .swiper-button-next:not(.swiper-button-disabled):hover,
        .swiper-button-prev:not(.swiper-button-disabled):hover {
            color: #232c3d;
            background-color: #ffffff;
        }

        /*Contact block*/
        .contact-block__icon {
            color: #03ABFF;
        }

        .invert .contact-block__icon {
            color: #ffffff;
        }

        .invert .contact-block__text,
        .invert .contact-block__text a {
            color: #959aa1;
        }

        .invert .contact-block__text a:hover {
            color: #00D1FF;
        }

        .contact-block.contact-block--header {
            font-family: Archivo, sans-serif;
        }

        .contact-block.contact-block--header {
            color: #232c3d;
        }

        .contact-block.contact-block--header,
        .contact-block.contact-block--header a[href^="tel:"] {
            color: #232c3d;
        }

        .contact-block.contact-block--header a[href^="tel:"]:hover {
            color: #03ABFF;
        }

        .invert .contact-block.contact-block--header .contact-block__icon {
            color: #03ABFF;
        }

        .invert .contact-block.contact-block--header,
        .invert .contact-block.contact-block--header a[href^="tel:"],
        .invert .contact-block.contact-block--header .contact-block__text,
        .invert .contact-block.contact-block--header .contact-block__text a {
            color: #ffffff;
        }

        .invert .contact-block.contact-block--header .contact-block__text a:hover,
        .invert .contact-block.contact-block--header a[href^="tel:"]:hover {
            color: #03ABFF;
        }

        /*Tables*/
        .hentry table:not([class]) tbody tr:nth-child(odd) {
            background-color: #f0f4f7;
        }

        .hentry table:not([class]) tbody tr th {
            color: #232c3d;
        }

        .hentry table:not([class]) th+td,
        .hentry table:not([class]) td+td,
        .hentry table:not([class]) th+th,
        .hentry table:not([class]) td+th {
            border-color: #e3e9ee;
        }

        /*Title decoration*/
        .title-decoration::before {
            background: linear-gradient(-45deg, transparent 8px, #d2d2d3 0), linear-gradient(45deg, transparent 8px, #d2d2d3 0);
        }

        .title-decoration::after {
            background: linear-gradient(-45deg, transparent 8px, #ffffff 0), linear-gradient(45deg, transparent 8px, #ffffff 0);
        }

        .title-decoration__big::before {
            background: linear-gradient(-45deg, transparent 15px, #d2d2d3 0), linear-gradient(45deg, transparent 15px, #d2d2d3 0);
        }

        .title-decoration__big::after {
            background: linear-gradient(-45deg, transparent 15px, #ffffff 0), linear-gradient(45deg, transparent 15px, #ffffff 0);
        }

        .footer-area .title-decoration::after {
            background: linear-gradient(-45deg, transparent 8px, #f0f4f7 0), linear-gradient(45deg, transparent 8px, #f0f4f7 0);
        }

        /* #Button Appearance Styles */
        .btn,
        .btn-link,
        .link,
        a[href*="?media_dl="] {
            font-weight: 400;
            font-size: 13px;
            font-family: Archivo, sans-serif;
        }

        .btn.btn-accent-1,
        .btn.btn-primary,
        .btn-downloader,
        a[href*="?media_dl="] {
            color: #ffffff;
            background-color: #03ABFF;
        }

        .btn.btn-accent-1:hover,
        .btn.btn-primary:hover,
        .btn-downloader:hover,
        a[href*="?media_dl="]:hover {
            color: #ffffff;
            background-color: #00D1FF;
        }

        .btn.btn-accent-1:active,
        .btn.btn-primary:active {
            background-color: rgb(229, 223, 67);
        }

        .btn.btn-accent-2 {
            color: #ffffff;
            background-color: #00D1FF;
        }

        .btn.btn-accent-2:hover {
            color: #ffffff;
            background-color: #03ABFF;
        }

        .btn.btn-accent-2:active {
            background-color: rgb(47, 110, 191);
        }

        .btn.btn-accent-3 {
            color: #03ABFF;
            background-color: #f0f4f7;
        }

        .btn.btn-accent-3:hover {
            color: #ffffff;
            background-color: #03ABFF;
        }

        .btn.btn-accent-3:active {
            background-color: rgb(47, 110, 191);
        }

        .btn-downloader.btn-downloader-invert,
        a[href*="?media_dl="].btn-downloader-invert {
            color: #03ABFF;
            background-color: #ffffff;
        }

        .btn-downloader.btn-downloader-invert:hover,
        a[href*="?media_dl="].btn-downloader-invert:hover {
            color: #ffffff;
            background-color: #03ABFF;
        }

        .sidebar .widget+.widget {
            border-color: #e3e9ee;
        }

        /* #Widget Calendar */
        .widget_calendar thead,
        .widget_calendar tbody {
            color: #969ba2;
        }

        .widget_calendar caption {
            color: #ffffff;
            background-color: #03ABFF;
            font-family: Archivo, sans-serif;
            font-size: 16px;
        }

        .widget_calendar th {
            color: #232c3d;
        }

        .widget_calendar th:after {
            background-color: #f0f4f7;
        }

        .widget_calendar tbody td:not(.pad) {
            color: #969ba2;
        }

        .widget_calendar tbody td a {
            color: #ffffff;
            background-color: #03ABFF;
        }

        .widget_calendar tbody td a:hover {
            color: #ffffff;
            background-color: #232c3d;
        }

        .widget_calendar tbody td#today {
            color: #03ABFF;
        }

        .widget_calendar tfoot a:before {
            color: rgba(255, 255, 255, 0.3);
        }

        .widget_calendar tfoot a:hover:before {
            color: #ffffff;
        }

        /* #Widget Tag Cloud */
        .tagcloud a {
            border-color: #e3e9ee;
            color: #969ba2;
        }

        .tagcloud a:hover {
            background-color: #03ABFF;
            border-color: #03ABFF;
            color: #ffffff;
        }

        /* #Widget Recent Posts - Comments*/
        .widget_recent_entries a,
        .widget_recent_comments a,
        .widget_recent_comments .comment-author-link {
            color: #03ABFF;
        }

        .widget_recent_comments li>a {
            color: #232c3d;
        }

        .widget_recent_entries a:hover,
        .widget_recent_comments a:hover,
        .widget_recent_comments li>a:hover {
            color: #305893;
        }

        /* #Widget Archive - Categories */
        .widget_archive label:before,
        .widget_categories label:before {
            color: #232c3d;
        }

        .widget_categories a,
        .widget_archive a {
            color: #03ABFF;
        }

        .widget_categories a:hover,
        .widget_archive a:hover {
            color: #305893;
        }

        .invert .widget_categories a,
        .invert .widget_archive a {
            color: #959aa1;
        }

        .invert .widget_categories a,
        .invert .widget_archive a {
            color: #03ABFF;
        }

        /* #Widgets misc */
        .widget_archive ul,
        .widget_categories ul,
        .widget_recent_entries ul,
        .widget_recent_comments ul,
        a.rsswidget,
        .tagcloud a {}

        /* #Widget date style */
        .widget_recent_entries .post-date,
        .rss-date {
            font-style: normal;
            font-weight: 400;
            font-size: 12px;
            line-height: 2;
            font-family: Roboto, sans-serif;
            letter-spacing: 0em;
            color: #969ba2;
        }

        .widget_nav_menu ul li a {
            color: #969ba2;
        }

        .widget_nav_menu ul li a:hover {
            color: #03ABFF;
        }

        .widget_nav_menu ul li a::before {
            color: #03ABFF;
        }

        .widget_nav_menu ul li a:hover::before {
            color: #232c3d;
        }

        .invert .widget_nav_menu ul li a {
            color: #959aa1;
        }

        .invert .widget_nav_menu ul li a:hover {
            color: #03ABFF;
        }

        .invert .widget_nav_menu ul li a::before {
            color: #03ABFF;
        }

        .invert .widget_nav_menu ul li a:hover::before {
            color: #ffffff;
        }

        .widget-taxonomy-tiles__content::before {
            background-color: #03ABFF;
        }

        .widget-taxonomy-tiles__inner:hover .widget-taxonomy-tiles__content::before {
            background-color: #232c3d;
        }

        .invert .widget-taxonomy-tiles__title a,
        .invert .widget-taxonomy-tiles__post-count,
        .invert .widget-taxonomy-tiles__desc {
            color: #ffffff;
        }

        .invert .widget-taxonomy-tiles__title a:hover {
            color: #03ABFF;
        }

        .invert .widget-image-grid__content:hover {
            background-color: rgba(35, 44, 61, 0.9);
        }

        .invert .widget-image-grid__inner,
        .invert .widget-image-grid__inner a {
            color: #ffffff;
        }

        .invert .widget-image-grid__inner a:hover {
            color: #03ABFF;
        }

        .smart-slider__instance .sp-arrow,
        .smart-slider__instance .sp-thumbnail-arrow {
            color: #232c3d;
            background-color: #ffffff;
        }

        .smart-slider__instance .sp-arrow:hover,
        .smart-slider__instance .sp-thumbnail-arrow:hover {
            color: #ffffff;
            background-color: #03ABFF;
        }

        .smart-slider__instance .sp-button {
            background-color: #d2d2d3;
        }

        .smart-slider__instance .sp-button:hover,
        .smart-slider__instance .sp-button.sp-selected-button {
            background-color: #232c3d;
        }

        .smart-slider__instance .sp-full-screen-button {
            color: #ffffff;
        }

        .smart-slider__instance .sp-full-screen-button:hover {
            color: #03ABFF;
        }

        .sp-thumbnails-container {
            background-color: rgba(35, 44, 61, 0.85);
        }

        h2.sp-title {
            font-style: normal;
            font-weight: 500;
            line-height: 1.45;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
        }

        .smart-slider__instance .sp-title a,
        .smart-slider__instance .sp-content-container .sp-content {
            color: #ffffff;
        }

        .cs-instagram__cover {
            background-color: rgba(72, 135, 216, 0.8);
        }

        .cs-instagram--widget .cs-instagram__caption {
            color: #00D1FF;
        }

        .invert .cs-instagram--widget .cs-instagram__caption {
            color: #ffffff;
        }

        /* #Custom posts*/
        .sidebar .widget-custom-posts .entry-title,
        .footer-area:not(.footer-area--fullwidth) .widget-custom-posts .entry-title {
            font-style: normal;
            font-size: 14px;
            line-height: 1.643;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
        }

        .widget-custom-posts .entry-title a {
            color: #232c3d;
        }

        .widget-custom-posts .entry-title a:hover {
            color: #03ABFF;
        }

        .invert .widget-custom-posts .entry-title a {
            color: #ffffff;
        }

        .invert .widget-custom-posts .entry-title a:hover {
            color: #03ABFF;
        }

        @media (min-width: 1200px) {

            .full-width-header-area .custom-posts .post-content-wrap *,
            .after-content-full-width-area .custom-posts .post-content-wrap *,
            .before-content-area .custom-posts .post-content-wrap *,
            .before-loop-area .custom-posts .post-content-wrap *,
            .after-loop-area .custom-posts .post-content-wrap *,
            .after-content-area .custom-posts .post-content-wrap *,
            .full-width-header-area .custom-posts .post-content-wrap .btn-link .btn__text:hover,
            .after-content-full-width-area .custom-posts .post-content-wrap .btn-link .btn__text:hover,
            .before-content-area .custom-posts .post-content-wrap .btn-link .btn__text:hover,
            .before-loop-area .custom-posts .post-content-wrap .btn-link .btn__text:hover,
            .after-loop-area .custom-posts .post-content-wrap .btn-link .btn__text:hover,
            .after-content-area .custom-posts .post-content-wrap .btn-link .btn__text:hover {
                color: #ffffff;
            }

            .full-width-header-area .custom-posts .post-content-wrap a:hover,
            .after-content-full-width-area .custom-posts .post-content-wrap a:hover,
            .before-content-area .custom-posts .post-content-wrap a:hover,
            .before-loop-area .custom-posts .post-content-wrap a:hover,
            .after-loop-area .custom-posts .post-content-wrap a:hover,
            .after-content-area .custom-posts .post-content-wrap a:hover,
            .full-width-header-area .custom-posts .post-content-wrap .btn-link .btn__text,
            .after-content-full-width-area .custom-posts .post-content-wrap .btn-link .btn__text,
            .before-content-area .custom-posts .post-content-wrap .btn-link .btn__text,
            .before-loop-area .custom-posts .post-content-wrap .btn-link .btn__text,
            .after-loop-area .custom-posts .post-content-wrap .btn-link .btn__text,
            .after-content-area .custom-posts .post-content-wrap .btn-link .btn__text {
                color: #03ABFF;
            }
        }

        .full-width-header-area .custom-posts .post-content-wrap::before,
        .after-content-full-width-area .custom-posts .post-content-wrap::before,
        .before-content-area .custom-posts .post-content-wrap::before,
        .before-loop-area .custom-posts .post-content-wrap::before,
        .after-loop-area .custom-posts .post-content-wrap::before,
        .after-content-area .custom-posts .post-content-wrap::before {
            background-color: #232c3d;
        }

        .widget-playlist-slider .sp-next-thumbnail-arrow:before,
        .widget-playlist-slider .sp-next-thumbnail-arrow:after,
        .widget-playlist-slider .sp-previous-thumbnail-arrow:before,
        .widget-playlist-slider .sp-previous-thumbnail-arrow:after,
        .widget-playlist-slider .sp-arrow.sp-previous-arrow:before,
        .widget-playlist-slider .sp-arrow.sp-previous-arrow:after,
        .widget-playlist-slider .sp-arrow.sp-next-arrow:before,
        .widget-playlist-slider .sp-arrow.sp-next-arrow:after {
            background-color: #03ABFF;
        }

        .widget-playlist-slider .sp-right-thumbnails .sp-thumbnail-container:hover,
        .widget-playlist-slider .sp-thumbnail-container.sp-selected-thumbnail .sp-thumbnail::after {
            background-color: #232c3d;
        }

        .widget-playlist-slider .sp-right-thumbnails .sp-thumbnail-container.sp-selected-thumbnail {
            background-color: #03ABFF;
        }

        .widget-playlist-slider .sp-right-thumbnails .sp-thumbnail-container.sp-selected-thumbnail .sp-thumbnail-text {
            border-color: #00D1FF;
        }

        .widget-playlist-slider .sp-thumbnail-title {
            color: #232c3d;
        }

        .widget-playlist-slider .sp-thumbnail::after {
            background-color: #d2d2d3;
        }

        .widget-playlist-slider .sp-thumbnail-container:hover .sp-thumbnail .entry-meta,
        .widget-playlist-slider .sp-thumbnail-container:hover .sp-thumbnail .entry-meta i,
        .widget-playlist-slider .sp-thumbnail-container:hover .sp-thumbnail .posted-by,
        .widget-playlist-slider .sp-thumbnail-container:hover .sp-thumbnail .sp-thumbnail-title,
        .widget-playlist-slider .sp-thumbnail-container.sp-selected-thumbnail .sp-thumbnail .entry-meta,
        .widget-playlist-slider .sp-thumbnail-container.sp-selected-thumbnail .sp-thumbnail .entry-meta i,
        .widget-playlist-slider .sp-thumbnail-container.sp-selected-thumbnail .sp-thumbnail .posted-by,
        .widget-playlist-slider .sp-thumbnail-container.sp-selected-thumbnail .sp-thumbnail .sp-thumbnail-title {
            color: #ffffff;
        }

        .widget-playlist-slider .sp-has-pointer .sp-selected-thumbnail:before,
        .widget-playlist-slider .sp-has-pointer .sp-selected-thumbnail:after {
            border-bottom-color: #03ABFF;
        }

        .widget-playlist-slider .sp-right-thumbnails .sp-thumbnail-text {
            border-color: #f0f4f7;
        }

        .widget-playlist-slider .invert,
        .widget-playlist-slider .invert a,
        .widget-playlist-slider .invert .post__comments i {
            color: #ffffff;
        }

        .widget-playlist-slider .invert a:hover {
            color: #03ABFF;
        }

        @media (min-width: 1200px) {

            .full-width-header-area .widget-fpblock__item-featured .widget-fpblock__item-title,
            .after-content-full-width-area .widget-fpblock__item-featured .widget-fpblock__item-title,
            .before-content-area .widget-fpblock__item-featured .widget-fpblock__item-title,
            .after-content-area .widget-fpblock__item-featured .widget-fpblock__item-title {
                font-style: normal;
                font-weight: 500;
                font-size: 32px;
                line-height: 1.313;
                font-family: Archivo, sans-serif;
                letter-spacing: 0em;
            }
        }

        .invert.widget-fpblock__item,
        .invert.widget-fpblock__item a {
            color: #ffffff;
        }

        .invert.widget-fpblock__item a:hover {
            color: #03ABFF;
        }

        /* #News-smart-box */
        .news-smart-box__navigation-wrapper {
            border-color: #e3e9ee;
        }

        .news-smart-box__instance .mini-type::before {
            background-color: #e3e9ee;
        }

        .news-smart-box__navigation-terms-list-item {
            font-style: normal;
            font-weight: 500;
            font-size: 12px;
            line-height: 1.44;
            font-family: Archivo, sans-serif;
            color: #232c3d;
        }

        .news-smart-box__navigation-terms-list-item:hover,
        .news-smart-box__navigation-terms-list-item.is-active {
            color: #03ABFF;
        }

        .news-smart-box__instance .double-bounce-1,
        .news-smart-box__instance .double-bounce-2 {
            background-color: #03ABFF;
        }

        /* #Contact-information*/
        .contact-information-widget__inner {
            font-family: Archivo, sans-serif;
        }

        .contact-information-widget .icon {
            color: #d2d2d3;
        }

        .invert .contact-information-widget .icon {
            color: rgb(221, 225, 228);
        }

        /*Dynamic styles for Woo-elements */
        header .woocommerce-currency-switcher-form ul.dd-options {
            background-color: #232c3d;
        }

        /* * Woo-elements * Listing line Products */
        .products .product h3,
        .tm-categories-carousel-widget-container h3,
        .products .product-category h3,
        .tm-woowishlist-widget-product h3,
        .tm-woocompare-widget-product h3 {
            font-style: normal;
            font-weight: 500;
            font-size: 14px;
            line-height: 1.44;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            text-align: inherit;
            color: #232c3d;
        }

        .woocommerce .products .product .price,
        .woocommerce div.product .woocommerce-variation-price span.price,
        .woocommerce div.product span.price,
        .woocommerce .price,
        .woocommerce div.product p.price,
        .woocommerce.widget .woocs_price_code,
        .woocommerce div.product p.price ins,
        .woocommerce div.product span.price ins {
            color: #03ABFF;
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 1.44;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
        }

        .tm_banners_grid_widget_banner_title {
            font-style: normal;
            font-weight: 500;
            font-size: 32px;
            line-height: 1.313;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            text-align: inherit;
            color: #232c3d;
        }

        .products .product-category .title_count_block>span,
        .tm-categories-carousel-widget-container .tm-categories-carousel-widget-wrapper .title_count_block>span {
            color: #969ba2;
        }

        .products .product-category>a h3:hover,
        .tm-categories-carousel-widget-container h3:hover,
        .products .product-category>a .title_count_block>span:hover,
        .tm-categories-carousel-widget-container .tm-categories-carousel-widget-wrapper .title_count_block>span:hover {
            color: #03ABFF;
        }

        .products .product.product-list h3,
        .related h4,
        .woocommerce-checkout .woocommerce-info,
        .woocommerce-checkout-payment .payment_methods li label,
        .woocommerce-checkout h2,
        .tm_custom_menu_widget h3 {
            font-style: normal;
            font-weight: 500;
            font-size: 18px;
            line-height: 1.44;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            text-align: inherit;
            color: #232c3d;
        }

        .woocommerce-checkout h3 {
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 1.44;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            text-align: inherit;
            color: #232c3d;
        }

        .woocommerce .site-main .page-title {
            font-style: normal;
            font-weight: 500;
            font-size: 32px;
            line-height: 1.313;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            text-align: inherit;
            color: #232c3d;
        }

        /* * Woo-elements * Woocommerce carousel-category-products */
        .tm-categories-carousel-widget-container .swiper-button-next,
        .tm-categories-carousel-widget-container .swiper-button-prev,
        .woocommerce .tablesaw-bar .tablesaw-advance a.tablesaw-nav-btn,
        .woocommerce-product-search label i {
            color: rgb(214, 219, 226);
        }

        .tm-categories-carousel-widget-container .swiper-button-next:hover,
        .tm-categories-carousel-widget-container .swiper-button-prev:hover,
        .woocommerce .tablesaw-bar .tablesaw-advance a.tablesaw-nav-btn:hover {
            color: #03ABFF;
        }

        .woocommerce .swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet {
            background-color: #00D1FF;
        }

        .woocommerce .swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet-active,
        .woocommerce .swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet:hover,
        .site-header-cart .cart-contents .count {
            background-color: #03ABFF;
        }

        .tm_about_store_widget span {
            font-style: normal;
            font-weight: 500;
            font-size: 22px;
            line-height: 1.45;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
        }

        #tm_builder_outer_content .tm_pb_widget_area .tm_about_store_widget h3.widget-title {
            font-style: normal;
            font-weight: 500;
            font-size: 46px;
            line-height: 1.3;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
        }

        #tm_builder_outer_content .tm_pb_widget_area .widget.tm_about_store_widget,
        .tm_about_store_widget,
        #tm_builder_outer_content .tm_pb_widget_area .tm_about_store_widget h3.widget-title {
            color: #ffffff;
        }

        /* * Woo-elements * Woocommerce price styles */
        .woocommerce .products .product .price,
        .woocommerce div.product span.price,
        .woocommerce div.product p.price,
        .woocommerce-cart .woocommerce .amount,
        .woocommerce-checkout .woocommerce .amount,
        .widget .woocs_price_code ins,
        .price,
        .cart_list li .quantity .amount {
            color: #03ABFF;
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 1.44;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
        }

        .cart_list li .quantity .amount {
            color: #03ABFF;
        }

        .woocommerce.widget_shopping_cart .total,
        .widget_shopping_cart_content .total,
        .woocommerce.widget_shopping_cart .total strong {
            color: #232c3d;
            font-style: normal;
            font-weight: 500;
            font-size: 18px;
            line-height: 1.44;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
        }

        .invert .woocommerce.widget_shopping_cart .total strong {
            color: #ffffff;
        }

        .widget_shopping_cart_content .buttons a.button,
        .woocommerce.widget_shopping_cart .buttons a.button {
            font-weight: 500;
            font-size: 12px;
            font-family: Archivo, sans-serif;
        }

        .woocommerce .products .product .price del,
        .woocommerce div.product p.price del,
        .woocommerce div.product span.price del,
        .widget .woocs_price_code del {
            color: #03ABFF;
        }

        /* * Woo-elements * Woocommerce product widgets */
        .search-form.woocommerce-product-search button[type=submit] {
            background: #03ABFF;
            color: #ffffff;
        }

        .tm-categories-carousel-widget-container .tm-categories-carousel-widget-wrapper .title_count_block a>span,
        .tm-categories-carousel-widget-container .tm-categories-carousel-widget-wrapper .title_count_block h3 a {
            color: #ffffff;
        }

        .tm-categories-carousel-widget-container .tm-categories-carousel-widget-wrapper .title_count_block h3 a:hover {
            color: #305893;
        }

        .woocommerce .products-categories .product.swiper-slide .title_count_block {
            background: rgba(72, 135, 216, 0.5);
        }

        .woocommerce .products-categories .product.swiper-slide:hover .title_count_block {
            background: rgba(35, 44, 61, 0.5);
        }

        .search-form.woocommerce-product-search button[type=submit]:hover {
            background: #305893;
        }

        .woocommerce.widget .product-title,
        .woocommerce.widget .product-title a,
        .woocommerce ul.cart_list li>a,
        .woocommerce ul.product_list_widget li>a,
        .woocommerce-mini-cart-item.mini_cart_item a {
            font-style: normal;
            font-weight: 500;
            font-size: 13px;
            line-height: 1.3104;
            font-family: Archivo, sans-serif;
            color: #232c3d;
        }

        .invert .woocommerce ul.product_list_widget li>a {
            color: #ffffff;
        }

        .woocommerce.widget .product-title a:hover,
        .woocommerce ul.cart_list li>a:hover,
        .woocommerce ul.product_list_widget li>a:hover {
            color: #03ABFF;
        }

        /* Styles for product-categories */
        .woocommerce>ul>li .product-widget-categories,
        .woocommerce>ul>li .product-widget-categories a,
        .woocommerce>ul span.reviewer,
        .woocommerce .widget_layered_nav ul li a {
            color: #969ba2;
        }

        .woocommerce .widget_layered_nav ul li a:hover {
            color: #03ABFF;
        }

        .woocommerce .widget_layered_nav ul li span {
            color: #03ABFF;
        }

        .woocommerce.widget_shopping_cart .total span,
        .widget_shopping_cart_content .total span,
        .woocommerce>ul>li .product-widget-categories a:hover,
        .woocommerce.widget_shopping_cart ul.cart_list>li dl dt {
            color: #03ABFF;
        }

        .invert .site-header-cart .shopping_cart-dropdown-wrap .shopping_cart-header>* {
            color: #ffffff;
        }

        .invert .woocommerce.widget_shopping_cart .cart_list li.empty {
            color: #969ba2;
        }

        /* * Woo-elements * Compare and wishlist buttons */
        .woocommerce .tm-woocompare-button,
        .woocommerce .tm-woowishlist-button {
            border-color: rgb(214, 219, 226);
        }

        .woocommerce .tm-woocompare-button:hover,
        .woocommerce .tm-woowishlist-button:hover {
            border-color: #03ABFF;
        }

        .woocommerce .tm-woocompare-page-button.button.alt,
        .woocommerce .tm-woowishlist-page-button.button.btn {
            color: rgb(214, 219, 226);
        }

        .woocommerce .tm-woocompare-page-button.button.alt:hover,
        .woocommerce .tm-woowishlist-page-button.button.btn:hover {
            color: #00D1FF;
        }

        .woocommerce button.button.btn {
            color: rgb(214, 219, 226);
        }

        .woocommerce button.button.btn:hover {
            color: #03ABFF;
            background-color: #03ABFF;
        }

        /* * Woo-elements * Sale-timer styles */
        .tm-products-sale-end-date span {
            background-color: #959aa1;
            color: #969ba2;
            font-weight: 500;
            font-size: 12px;
            font-family: Archivo, sans-serif;
        }

        /* * Woo-elements * Styles for tags and categories list -- loop product */
        .product-categories li,
        .product-categories li a,
        .product-widget-tags li,
        .product-widget-tags li a {
            color: #969ba2;
        }

        .product-categories li a:hover,
        .product-widget-tags li a:hover {
            color: #03ABFF;
        }

        .widget.widget_product_categories .product-categories li a:hover,
        .widget.widget_product_categories .product-categories li.current-cat a {
            color: #00D1FF;
        }

        .shop-sidebar .widget.widget_product_categories .product-categories li span {
            color: #03ABFF;
        }

        .shop-sidebar .widget.widget_product_categories .product-categories li a:hover {
            color: #03ABFF;
        }

        .woocommerce .widget_price_filter .price_slider_amount .button {
            color: #03ABFF;
            background: #00D1FF;
            border-color: #00D1FF;
        }

        .woocommerce .widget_price_filter .price_slider_amount .button:hover {
            background-color: #00D1FF;
            border-color: #00D1FF;
            color: #03ABFF;
        }

        .woocommerce .widget_price_filter .price_slider_wrapper .ui-slider .ui-slider-range {
            background: #03ABFF;
        }

        .woocommerce .widget_price_filter .price_slider_wrapper .ui-widget-content {
            background: #232c3d;
        }

        .woocommerce .widget_price_filter .price_slider_wrapper .ui-slider .ui-slider-handle {
            background: #03ABFF;
        }

        /** Woo-elements* wishlist*/
        .woocommerce.tm-woowishlist .tm-woowishlist-item .tm-woocomerce-list__product-title a {
            font-family: Archivo, sans-serif;
            color: #232c3d;
        }

        .woocommerce.tm-woowishlist .tm-woowishlist-item .stock {
            font-family: Archivo, sans-serif;
        }

        .woocommerce.tm-woowishlist .tm-woowishlist-item .stock.out-of-stock {
            color: #ffffff;
            background: #305893;
        }

        .woocommerce.tm-woowishlist .tm-woowishlist-item .stock.in-stock {
            background: #232c3d;
        }

        /* * Woo-elements * Compare */
        .woocommerce.tm-woocompare-list .tm-woocompare-wrapper table.tm-woocompare-table tbody tr:nth-child(even),
        .woocommerce.single-product div.woocommerce-tabs .woocommerce-Tabs-panel--additional_information table.shop_attributes tbody tr:nth-child(odd) {
            background: rgb(248, 248, 249);
        }

        body div.woocommerce.tm-woocompare-list .tm-woocompare-wrapper table.tm-woocompare-table tbody tr:nth-child(2) {
            background: #ffffff;
        }

        .woocommerce.single-product div.woocommerce-tabs .woocommerce-Tabs-panel--additional_information table.shop_attributes tbody tr th {
            color: #232c3d;
        }

        /* * Woo-elements * Buttons woo styles */
        .woocommerce a.button,
        .woocommerce button.button,
        .woocommerce button.button.tm-woocompare-empty,
        .woocommerce input.button,
        .woocommerce #respond input#submit.alt,
        .woocommerce a.button.alt,
        .woocommerce-mini-cart__buttons a.button.wc-forward,
        .woocommerce button.button.alt,
        .woocommerce input.button.alt,
        .woocommerce a.button.add_to_cart_button.loading:hover,
        .woocommerce button.button.btn.tm-wc-ajax-load-more-button,
        .woocommerce-cart .woocommerce table.shop_table.shop_table_responsive tbody tr td.actions .header-btn {
            color: #ffffff;
            background-color: #03ABFF;
            border-color: #03ABFF;
            font-weight: 500;
            font-size: 12px;
            font-family: Archivo, sans-serif;
        }

        .woocommerce.single-product .woocommerce-Reviews ol.commentlist li.comment .comment-text .meta .woocommerce-review__author {
            color: #232c3d;
        }

        .woocommerce #respond input#submit,
        .woocommerce table.shop_table tbody tr td.actions input.btn {
            color: #ffffff;
            background-color: #00D1FF;
            border-color: #00D1FF;
        }

        .input-button-with-icon>i {
            color: #ffffff;
        }

        .woocommerce-mini-cart__buttons a.button.wc-forward:hover,
        .woocommerce #respond input#submit:hover,
        .woocommerce table.shop_table tbody tr td.actions input.btn:hover {
            color: #232c3d;
            background-color: #00D1FF;
            border-color: #00D1FF;
        }

        .woocommerce #payment #place_order,
        .woocommerce-page #payment #place_order:hover {
            color: #ffffff;
            background-color: #03ABFF;
            border-color: #03ABFF;
        }

        .woocommerce a.button:hover,
        .woocommerce button.button:hover,
        .woocommerce button.button.tm-woocompare-empty:hover,
        .woocommerce input.button:hover,
        .woocommerce #respond input#submit.alt:hover,
        .woocommerce a.button.alt:hover,
        .woocommerce button.button.alt:hover,
        .woocommerce input.button.alt:hover,
        .woocommerce button.button.btn.tm-wc-ajax-load-more-button:hover,
        .woocommerce-cart .woocommerce table.shop_table.shop_table_responsive tbody tr td.actions .header-btn:hover,
        .woocommerce-checkout .checkout_coupon .button:hover,
        .woocommerce #payment #place_order,
        .woocommerce-page #payment #place_order {
            background-color: #305893;
            border-color: #305893;
            color: #ffffff;
        }

        .tm-wc-ajax-products-wrapper .tm-wc-ajax-filters-wrapper .tm-wc-ajax-filters-attribute,
        .tm-wc-ajax-products-wrapper .tm-wc-ajax-filters-wrapper .tm-wc-ajax-filters-price {
            background: #ffffff;
        }

        .tm-wc-ajax-products-wrapper .tm-wc-ajax-filters-wrapper .tm-wc-ajax-filters-attribute .tm-wc-ajax-filters-dismiss:hover:after,
        .tm-wc-ajax-products-wrapper .tm-wc-ajax-filters-wrapper .tm-wc-ajax-filters-price .tm-wc-ajax-filters-dismiss:hover:after {
            color: #232c3d;
        }

        .woocommerce a.button.product_type_variable:hover {
            background-color: #305893;
            border-color: #305893;
            color: #ffffff;
        }

        .tm-wc-ajax-products-wrapper .tm-wc-ajax-filters-wrapper .tm-wc-ajax-filters-price:hover,
        .tm-wc-ajax-products-wrapper .tm-wc-ajax-filters-wrapper .tm-wc-ajax-filters-attribute:hover {
            color: #03ABFF;
        }

        .woocommerce a.button.product_type_variable:hover:after {
            color: #ffffff;
        }

        /*disable button syles*/
        .woocommerce #respond input#submit.alt.disabled,
        .woocommerce #respond input#submit.alt.disabled:hover,
        .woocommerce #respond input#submit.alt:disabled,
        .woocommerce #respond input#submit.alt:disabled:hover,
        .woocommerce #respond input#submit.alt:disabled[disabled],
        .woocommerce #respond input#submit.alt:disabled[disabled]:hover,
        .woocommerce a.button.alt.disabled,
        .woocommerce a.button.alt.disabled:hover,
        .woocommerce a.button.alt:disabled,
        .woocommerce a.button.alt:disabled:hover,
        .woocommerce a.button.alt:disabled[disabled],
        .woocommerce a.button.alt:disabled[disabled]:hover,
        .woocommerce button.button.alt.disabled,
        .woocommerce button.button.alt.disabled:hover,
        .woocommerce button.button.alt:disabled,
        .woocommerce button.button.alt:disabled:hover,
        .woocommerce button.button.alt:disabled[disabled],
        .woocommerce button.button.alt:disabled[disabled]:hover,
        .woocommerce input.button.alt.disabled,
        .woocommerce input.button.alt.disabled:hover,
        .woocommerce input.button.alt:disabled,
        .woocommerce input.button.alt:disabled:hover,
        .woocommerce input.button:disabled,
        .woocommerce input.button:disabled[disabled],
        .woocommerce input.button:disabled:hover,
        .woocommerce input.button:disabled[disabled]:hover,
        .woocommerce input.button.alt:disabled[disabled],
        .woocommerce input.button.alt:disabled[disabled]:hover,
        .woocommerce-cart table.cart input.header-btn:disabled {
            background-color: rgb(47, 110, 191);
            color: #03ABFF;
        }

        .woocommerce .wishlist_compare_button_block button.button.btn {
            background: #ffffff;
        }

        .woocommerce .wishlist_compare_button_block button.button.btn:hover {
            color: #305893;
        }

        .woocommerce a.button.add_to_cart_button.added,
        .woocommerce a.button.add_to_cart_button.loading {
            background: #305893;
        }

        /* * Woo-elements * Woo-Badge styles */
        .woocommerce span.featured,
        .woocommerce span.onsale,
        .woocommerce span.new {
            color: #ffffff;
        }

        .woocommerce span.onsale {
            background-color: #ff3a4c;
        }

        .woocommerce span.featured {
            background-color: #fcfa06;
        }

        .woocommerce span.new {
            background-color: #04e2f6;
        }

        /* * Woo-elements * Grid-list toggle buttons */
        .tm-woo-grid-list-toggle-button .tm-woo-grid-list-toggler {
            color: #d2d2d3;
        }

        .tm-wc-ajax-products-wrapper .tm-woo-grid-list-toggle-button-wrapper .tm-woo-grid-list-toggle-button .tm-woo-grid-list-toggler.disabled,
        .tm-wc-ajax-products-wrapper .tm-woo-grid-list-toggle-button-wrapper .tm-woo-grid-list-toggle-button .tm-woo-grid-list-toggler:hover {
            color: #e3e9ee;
        }

        .tm-wc-ajax-products-wrapper .tm-woo-grid-list-toggle-button-wrapper .tm-woo-grid-list-toggle-button .tm-woo-grid-list-toggler:hover {
            color: #03ABFF;
        }

        /* * Woo-elements * Single-product styles */
        .single-product div.product h1.product_title {
            font-style: normal;
            font-weight: 500;
            font-size: 22px;
            line-height: 1.45;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            text-align: inherit;
            color: #232c3d;
        }

        .woocommerce.single-product #content div.product .product_meta,
        .woocommerce-currency-switcher-form .dd-container .dd-selected label,
        .woocommerce.single-product #content div.product .product_meta a {
            color: #969ba2;
        }

        .woocommerce.single-product #content div.product .product_meta a:hover {
            color: #03ABFF;
        }

        .woocommerce table.shop_attributes th {
            color: #969ba2;
        }

        body .tm-wc-ajax-products-wrapper .tm-woo-grid-list-toggle-button-wrapper .tm-woo-grid-list-toggle-button .tm-woo-grid-list-toggler.disabled span,
        body .tm-wc-ajax-products-wrapper .tm-woo-grid-list-toggle-button-wrapper .tm-woo-grid-list-toggle-button .tm-woo-grid-list-toggler:hover span {
            color: #ffffff;
            background: #03ABFF;
            border-color: #03ABFF;
        }

        .tm-wc-ajax-products-wrapper .tm-woo-grid-list-toggle-button-wrapper .tm-woo-grid-list-toggle-button .tm-woo-grid-list-toggler.tm-woo-grid-list-toggle-button-grid .dashicons:before,
        .tm-wc-ajax-products-wrapper .tm-woo-grid-list-toggle-button-wrapper .tm-woo-grid-list-toggle-button .tm-woo-grid-list-toggler.tm-woo-grid-list-toggle-button-list .dashicons:before {
            color: #232c3d;
        }

        .product_meta>* {
            color: #232c3d;
        }

        .product_meta>* span {
            color: #969ba2;
        }

        .tm-wc-ajax-products-wrapper .tm-woo-grid-list-toggle-button-wrapper .tm-woo-grid-list-toggle-button .tm-woo-grid-list-toggler.tm-woo-grid-list-toggle-button-grid.disabled .dashicons:before,
        .tm-wc-ajax-products-wrapper .tm-woo-grid-list-toggle-button-wrapper .tm-woo-grid-list-toggle-button .tm-woo-grid-list-toggler.tm-woo-grid-list-toggle-button-list.disabled .dashicons:before,
        .tm-wc-ajax-products-wrapper .tm-woo-grid-list-toggle-button-wrapper .tm-woo-grid-list-toggle-button .tm-woo-grid-list-toggler.tm-woo-grid-list-toggle-button-grid:hover .dashicons:before,
        .tm-wc-ajax-products-wrapper .tm-woo-grid-list-toggle-button-wrapper .tm-woo-grid-list-toggle-button .tm-woo-grid-list-toggler.tm-woo-grid-list-toggle-button-list:hover .dashicons:before {
            color: #ffffff;
        }

        .woocommerce nav.woocommerce-pagination a.next span,
        .woocommerce nav.woocommerce-pagination a.prev span {
            font-family: Archivo, sans-serif;
        }

        /* * Woo-elements * SmartBox widget */
        .tm-products-smart-box-widget__rd-material-tabs .product h3 {
            font-family: Archivo, sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 1.643;
            letter-spacing: 0em;
        }

        .rd-material-tab.rd-material-tab-active a,
        .tm_custom_menu_widget .menu li a,
        .tm-products-smart-box-widget__rd-material-tabs .product h3:hover,
        .widget.tm_products_smart_box_widget .rd-material-tabs__list .rd-material-tab a:hover,
        .widget.tm_products_smart_box_widget .rd-material-tabs__list .rd-material-tab a:hover:before,
        .widget.tm_products_smart_box_widget .rd-material-tabs__list .rd-material-tab.rd-material-tab-active a,
        .widget.tm_products_smart_box_widget .rd-material-tabs__list .rd-material-tab.rd-material-tab-active a:before {
            color: #03ABFF;
        }

        .tm_custom_menu_widget .menu li a:hover,
        .widget.tm_products_smart_box_widget .rd-material-tabs__list .rd-material-tab a,
        .widget.tm_products_smart_box_widget .rd-material-tabs__list .rd-material-tab a:before {
            color: #00D1FF;
        }

        .tm-products-smart-box-widget__rd-material-tabs .product span.price:hover,
        .tm-products-smart-box-widget__rd-material-tabs .product span.price:hover ins,
        .tm-products-smart-box-widget__rd-material-tabs .product span.price:hover del {
            color: #969ba2;
        }

        .tm-products-smart-box-widget__rd-material-tabs .product .price del .amount {
            font-size: 12px;
        }

        .tm-products-smart-box-widget__rd-material-tabs .product .price del .amount,
        .tm-products-smart-box-widget__rd-material-tabs .product .price del {
            font-family: Archivo, sans-serif;
        }

        /** * Woo-elements * Woo-elements * Cart page * */
        .tm-woowishlist-remove,
        .tm-woocompare-remove {
            color: rgb(217, 222, 229);
        }

        .tm-woowishlist-remove:hover,
        .tm-woocompare-remove:hover {
            color: #03ABFF;
        }

        .woocommerce a.remove {
            color: rgb(217, 222, 229) !important;
        }

        .woocommerce a.remove:hover {
            color: #03ABFF !important;
        }

        .woocommerce table.shop_table thead tr,
        .woocommerce table.shop_table tbody tr.cart_item:nth-child(even),
        .woocommerce table.shop_table tbody tr.order_item:nth-child(even) {
            background-color: #ffffff;
        }

        .woocommerce table.shop_table tbody tr.cart_item,
        .woocommerce table.shop_table tbody tr.order_item {
            background-color: #ffffff;
        }

        .woocommerce table.shop_table tbody tr td.product-name {
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 1.643;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            text-align: left;
            color: #969ba2;
        }

        .woocommerce-cart .woocommerce table.shop_table.shop_table_responsive tr.cart-subtotal th,
        .woocommerce-cart .woocommerce table.shop_table.shop_table_responsive tr.cart-subtotal .woocommerce-Price-amount {
            font-style: normal;
            font-weight: 500;
            font-size: 18px;
            line-height: 1.44;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
        }

        .woocommerce-cart .woocommerce table.shop_table.shop_table_responsive tr.order-total th,
        .woocommerce-cart .woocommerce table.shop_table.shop_table_responsive tr.order-total .woocommerce-Price-amount {
            font-style: normal;
            font-weight: 500;
            font-size: 22px;
            line-height: 1.45;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
        }

        .woocommerce table.shop_table.woocommerce-checkout-review-order-table tbody tr td strong.product-quantity,
        table.order_details tbody tr td strong.product-quantity,
        .woocommerce table.shop_table tbody tr td.product-name a:hover {
            color: #03ABFF;
        }

        .woocommerce table.shop_table thead th,
        .cart-collaterals div.cart_totals table tbody tr,
        .cart-collaterals div.cart_totals table tbody td,
        .cart-collaterals div.cart_totals table tbody td,
        .cart-collaterals div.cart_totals table tbody th,
        table.shop_table.woocommerce-checkout-review-order-table tfoot tr.tax-total th,
        table.shop_table.woocommerce-checkout-review-order-table tfoot tr.tax-rate th,
        table.shop_table.woocommerce-checkout-review-order-table tfoot tr.cart-subtotal th,
        table.shop_table.woocommerce-checkout-review-order-table tfoot tr.order-total th,
        .woocommerce table.shop_table.woocommerce-checkout-review-order-table tbody tr td,
        table.order_details tfoot tr,
        .woocommerce .order_details li strong,
        .woocommerce table.shop_table tbody tr td.product-name a {
            color: #232c3d;
        }

        .tm-wc-ajax-products-wrapper .tm-wc-ajax-filters-wrapper .tm-wc-ajax-filters-reset.button {
            color: #03ABFF;
            font-family: Archivo, sans-serif;
        }

        .tm-wc-ajax-products-wrapper .tm-wc-ajax-filters-wrapper .tm-wc-ajax-filters-reset.button:hover {
            color: #232c3d;
        }

        #content .nav-links .page-numbers.next:hover,
        #content .nav-links .page-numbers.prev:hover,
        .tm-pg_front_gallery-navigation .tm_pg_nav-links a.tm_pg_page-numbers.next:hover,
        .tm-pg_front_gallery-navigation .tm_pg_nav-links a.tm_pg_page-numbers.prev:hover {
            color: #232c3d;
        }

        .woocommerce-cart .woocommerce table.shop_table.shop_table_responsive tbody tr td .mini_cart_item_title a {
            font-family: Archivo, sans-serif;
            font-weight: 500;
        }

        .woocommerce-cart .woocommerce table.shop_table.shop_table_responsive tbody tr td .mini_cart_item_title a:hover {
            color: #03ABFF;
        }

        .woocommerce-cart .woocommerce table.shop_table.shop_table_responsive tbody tr td.actions .shopping_tag::before {
            color: #d2d2d3;
        }

        /** * Woo-elements * Checkout page * */
        .woocommerce-cart .woocommerce div.cart_totals .wc-proceed-to-checkout .checkout-button {
            background: #03ABFF;
        }

        .woocommerce-cart .woocommerce div.cart_totals .wc-proceed-to-checkout .checkout-button:hover {
            background: #305893;
        }

        .woocommerce-checkout .woocommerce .showcoupon,
        .woocommerce-checkout .woocommerce .showlogin {
            color: #03ABFF;
        }

        .woocommerce-checkout .woocommerce .woocommerce-form-login .lost_password a {
            font-family: Archivo, sans-serif;
        }

        .woocommerce-checkout .woocommerce .showcoupon:hover,
        .woocommerce-checkout .woocommerce .showlogin:hover {
            color: #232c3d;
        }

        .woocommerce-checkout .woocommerce-info>a,
        .woocommerce form.login .form-row label.inline,
        .woocommerce form .form-row .select2-container.country_to_state .select2-choice,
        .woocommerce form .form-row.create-account label.checkbox,
        .woocommerce div.product form.cart .variations label {
            color: #969ba2;
        }

        .woocommerce-checkout .woocommerce-info>a:hover,
        .woocommerce form.login .form-row label.inline:hover,
        .woocommerce form .form-row.create-account label.checkbox:hover,
        .woocommerce form .form-row .required {
            color: #03ABFF;
        }

        #add_payment_method #payment,
        .woocommerce-cart #payment,
        .woocommerce-checkout #payment {
            background-color: #ffffff;
        }

        .woocommerce form label,
        #add_payment_method #payment div.payment_box,
        .woocommerce-cart #payment div.payment_box,
        .woocommerce-checkout #payment div.payment_box {
            color: #969ba2;
        }

        /** * Woo-elements * Account page * */
        .woocommerce-account.logged-in .entry-content .woocommerce {
            background-color: #ffffff;
        }

        .woocommerce-account.logged-in .entry-content .woocommerce .woocommerce-MyAccount-content {
            background-color: #ffffff;
        }

        .woocommerce-account.logged-in .woocommerce-MyAccount-navigation,
        .woocommerce-checkout h2 {
            font-family: Archivo, sans-serif;
            font-style: normal;
            font-weight: 500;
            font-size: 13px;
            line-height: 1.44;
            letter-spacing: 0em;
        }

        .woocommerce-checkout h2 {
            color: #232c3d;
        }

        @media (min-width: 1200px) {
            .woocommerce-account.logged-in .woocommerce-MyAccount-navigation {
                font-size: 16px;
            }
        }

        .woocommerce-account.logged-in .woocommerce-MyAccount-navigation a {
            color: #00D1FF;
        }

        .woocommerce-account.logged-in .woocommerce-MyAccount-navigation a:hover,
        .woocommerce-account.logged-in .woocommerce-MyAccount-navigation .is-active a {
            color: #03ABFF;
        }

        /** * Woo-elements * Wishlist&Compare style * */
        .tm-woocompare-table .tm-woocomerce-list__product-title a {
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 1.44;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            text-align: inherit;
            color: #232c3d;
        }

        .woocommerce.tm-woocompare-list .tm-woocompare-wrapper table.tm-woocompare-table tr th.title {
            color: #232c3d;
        }

        .tm-woowishlist .tm-woowishlist-item .tm-woocomerce-list__product-title a.tm-woocompare-list table.tm-woocompare-table .tm-woocompare-row .title {
            color: #969ba2;
        }

        .tm-woowishlist .tm-woowishlist-item .tm-woocomerce-list__product-title a:hover,
        .tm-woocompare-table .tm-woocomerce-list__product-title a:hover {
            color: #03ABFF;
        }

        .woocommerce .loader:before,
        .woocommerce .blockUI.blockOverlay:before,
        .woocommerce .blockUI.blockOverlay:before {
            border-top-color: #03ABFF;
            border-right-color: #03ABFF;
        }

        .woocommerce-store-notice,
        p.demo_store {
            background-color: #00D1FF;
        }

        .products .product.product-list h3 {
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 1.44;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            text-align: inherit;
            color: #232c3d;
        }

        .woocommerce .products .product.product-list .price,
        .woocommerce div.product.product-list span.price,
        .woocommerce .products .product.product-list .price del,
        .woocommerce div.product.product-list span.price del,
        .woocommerce .products .product.product-list .price ins,
        .woocommerce div.product.product-list span.price ins {
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 1.44;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            text-align: inherit;
        }

        .woocommerce.single-product div.product .woo-social-buttons>span.custom a,
        .woocommerce .single-product div.product .woo-social-buttons>span.custom a {
            color: #969ba2;
        }

        .woocommerce.single-product div.product .woo-social-buttons>span.custom a:hover,
        .woocommerce .single-product div.product .woo-social-buttons>span.custom a:hover {
            color: #00D1FF;
        }

        .woocommerce.single-product div.product .summary .wishlist_compare_button_block .button.button.btn:hover,
        .woocommerce .single-product div.product .summary .wishlist_compare_button_block .button.button.btn:hover {
            color: #03ABFF;
            background: #ffffff;
        }

        .woocommerce.single-product div.product .summary .wishlist_compare_button_block .button.button.btn.alt,
        .woocommerce .single-product div.product .summary .wishlist_compare_button_block .button.button.btn.alt {
            color: #969ba2;
        }

        .woocommerce.single-product div.product .summary .wishlist_compare_button_block .button.button.btn.alt:hover,
        .woocommerce .single-product div.product .summary .wishlist_compare_button_block .button.button.btn.alt:hover {
            color: #03ABFF;
        }

        .woocommerce.single-product div.product h1.product_title,
        .woocommerce .single-product div.product h1.product_title {
            font-style: normal;
            font-weight: 500;
            font-size: 22px;
            line-height: 1.45;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            text-align: inherit;
            color: #232c3d;
        }

        .woocommerce div.product .single_product_wrapper p.price,
        .woocommerce div.product .single_product_wrapper p.price ins,
        .woocommerce div.product .single_product_wrapper p.price del {
            font-style: normal;
            font-weight: 500;
            font-size: 32px;
            line-height: 1.313;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            text-align: inherit;
            color: #03ABFF;
        }

        .woocommerce.single-product #content div.product .product_meta a {
            font-weight: 500;
        }

        .woocommerce div.product .woocommerce-tabs ul.tabs li a {
            color: #232c3d;
        }

        .woocommerce.single-product div.woocommerce-tabs .wc-tab ul>li::before {
            color: #03ABFF;
        }

        .woocommerce.single-product div.product .woocommerce-tabs .tabs li.active a,
        .woocommerce.single-product div.product .woocommerce-tabs .tabs li:hover a,
        .woocommerce .single-product div.product .woocommerce-tabs .tabs li.active a,
        .woocommerce .single-product div.product .woocommerce-tabs .tabs li:hover a {
            color: #03ABFF;
        }

        .woocommerce.single-product div.product form.cart .button,
        .woocommerce .single-product div.product form.cart .button {
            color: #ffffff;
            background-color: #00D1FF;
            border-color: #00D1FF;
        }

        .woocommerce.single-product div.product form.cart .button:hover,
        .woocommerce .single-product div.product form.cart .button:hover {
            color: #ffffff;
        }

        .woocommerce.single-product div.product .summary .wishlist_compare_button_block .tm-woowishlist-page-button,
        .woocommerce .single-product div.product .summary .wishlist_compare_button_block .tm-woowishlist-page-button {
            color: #969ba2;
        }

        .site-header-cart .site-header-cart__wrapper i {
            color: #232c3d;
        }

        .invert .site-header-cart .site-header-cart__wrapper i {
            color: #ffffff;
        }

        .site-header-cart .site-header-cart__wrapper .cart-contents:hover i {
            color: #03ABFF;
        }

        .site-header-cart .cart-contents:hover .count {
            background-color: #00D1FF;
            color: #232c3d;
        }

        .invert .site-header-cart__wrapper .shopping_cart-dropdown-wrap {
            background: #232c3d;
        }

        .invert .site-header-cart .site-header-cart__wrapper .cart-contents:hover i {
            color: #03ABFF;
        }

        .site-header.style-5 .invert .site-header-cart .site-header-cart__wrapper .cart-contents:hover i {
            color: #232c3d;
        }

        .invert .site-header-cart .cart-contents .count {
            background-color: #ffffff;
            color: #03ABFF;
        }

        .invert .woocommerce.widget_shopping_cart .total span {
            color: #959aa1;
        }

        .woocommerce.widget_shopping_cart .total {
            border-top-color: #e3e9ee;
        }

        .invert .woocommerce.widget_shopping_cart .total {
            border-top-color: rgba(255, 255, 255, 0.15);
        }

        /** * Woo-elements * Quick View * */
        .products .product .block_product_thumbnail .tm-quick-view a {
            font-family: Archivo, sans-serif;
            color: #ffffff;
            border-color: #ffffff;
        }

        .products .product .block_product_thumbnail .tm-quick-view a:hover {
            background: #305893;
            border-color: #305893;
        }

        .products .product .block_product_thumbnail>a::before {
            background: rgba(35, 44, 61, 0.8);
        }

        .woocommerce-message {
            background: rgba(48, 88, 147, 0.2);
        }

        /** * Woo-elements * Single product * */
        .woocommerce-info .woocommerce-Button.button,
        .single-product .woocommerce-message .button,
        .woocommerce-message:before {
            color: #305893;
        }

        .woocommerce.single-product .single_product_wrapper .images div.enlarge {
            background: #ffffff;
        }

        .woocommerce.single-product .single_product_wrapper .images div.enlarge:hover {
            background: #232c3d;
            border-color: #232c3d;
            color: #ffffff;
        }

        .woocommerce-info .woocommerce-Button.button:hover,
        .single-product .woocommerce-message .button:hover {
            color: #232c3d;
        }

        .woocommerce.single-product .single_product_wrapper .entry-summary .woocommerce-variation-add-to-cart.variations_button .quantity span,
        .woocommerce.single-product div.product form.cart div.quantity span,
        .woocommerce .single-product div.product form.cart div.quantity span {
            border-color: #e3e9ee;
            color: #969ba2;
        }

        .woocommerce.single-product div.woocommerce-tabs .woocommerce-Tabs-panel #commentform p.form-submit #submit {
            background: #03ABFF;
        }

        .woocommerce.single-product div.woocommerce-tabs .woocommerce-Tabs-panel #commentform p.form-submit #submit:hover {
            background: #305893;
        }

        .woocommerce.single-product .single_product_wrapper .entry-summary .woocommerce-variation-add-to-cart.variations_button .quantity span::before,
        .woocommerce.single-product div.product form.cart div.quantity span::before,
        .woocommerce .single-product div.product form.cart div.quantity span::before {
            color: #e3e9ee;
        }

        .woocommerce #reviews .comment-form-rating label {
            color: #232c3d;
        }

        .woocommerce.single-product .single_product_wrapper .entry-summary .woocommerce-variation-add-to-cart.variations_button .quantity span:hover::before,
        .woocommerce.single-product div.product form.cart div.quantity span:hover::before,
        .woocommerce .single-product div.product form.cart div.quantity span:hover::before {
            color: #232c3d;
        }

        .woocommerce.single-product div.product form.cart .button,
        .woocommerce .single-product div.product form.cart .button {
            background: #03ABFF;
        }

        .woocommerce.single-product div.product form.cart .button:hover,
        .woocommerce .single-product div.product form.cart .button:hover {
            background: #305893;
        }

        .woocommerce.single-product div.product .single_product_wrapper .images div.thumbnails .thumbnail.selected::before,
        .woocommerce.single-product div.product .single_product_wrapper .images div.thumbnails .thumbnail:hover::before {
            border-color: #e3e9ee;
        }

        .woocommerce div.product .woocommerce-tabs ul.tabs li a {
            font-family: Archivo, sans-serif;
        }

        .woocommerce.single-product div.woocommerce-tabs ul.tabs li {
            border-color: #e3e9ee;
            background: rgb(245, 251, 255);
        }

        .elementor-widget-wp-widget-woocommerce_recent_reviews .product_list_widget li a {
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 1.44;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            text-align: inherit;
            color: #232c3d;
        }

        .elementor-widget-wp-widget-woocommerce_product_categories ul li .count {
            color: #03ABFF;
        }

        .elementor-widget-wp-widget-tm_woocommerce_wishlist .button.tm-woowishlist-page-button {
            color: #ffffff;
            background-color: #03ABFF;
            border-color: #03ABFF;
            font-weight: 500;
            font-size: 12px;
            font-family: Archivo, sans-serif;
        }

        .elementor-widget-wp-widget-tm_woocommerce_wishlist .button.tm-woowishlist-page-button:hover {
            color: #ffffff;
            background-color: #305893;
            border-color: #305893;
        }

        .woocommerce-account.logged-in .entry-content>.woocommerce .woocommerce-MyAccount-navigation li a {
            border: 1px solid #e3e9ee;
            color: #232c3d;
        }

        .woocommerce-account.logged-in .entry-content>.woocommerce .woocommerce-MyAccount-navigation li a:hover {
            color: #ffffff;
            background: #232c3d;
            border-color: #232c3d;
        }

        .woocommerce-account.logged-in .entry-content>.woocommerce .order-number,
        .woocommerce-account.logged-in .entry-content>.woocommerce .order-date,
        .woocommerce-account.logged-in .entry-content>.woocommerce .order-status {
            color: #03ABFF;
        }

        .woocommerce-account.logged-in .entry-content>.woocommerce .woocommerce-table--order-details tfoot td,
        .woocommerce-account.logged-in .entry-content>.woocommerce .woocommerce-table--order-details tfoot td .amount {
            color: #969ba2;
        }

        .woocommerce-account.logged-in form.edit-account fieldset legend,
        .woocommerce-account.logged-in form.edit-account .form-row label {
            color: #232c3d;
        }

        @media (min-width: 900px) {
            .woocommerce-account.logged-in .entry-content>.woocommerce .woocommerce-MyAccount-navigation {
                border-right: 1px solid #e3e9ee;
            }
        }

        #page .woocommerce-order .woocommerce-table--order-details tfoot tr td,
        #page .woocommerce-order .woocommerce-table--order-details tfoot tr td span,
        #page .woocommerce-order .woocommerce-table--order-details tbody tr td.product-total span {
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 1.643;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            text-align: left;
            color: #969ba2;
        }

        .tm-wc-ajax-products-wrapper .woocommerce-ordering select,
        .tm-wc-ajax-products-wrapper .tm-woo-grid-list-toggle-button-wrapper .tm-woo-grid-list-toggle-button .tm-woo-grid-list-toggler .dashicons {
            border-color: #e3e9ee;
        }

        body .booked-calendarSwitcher.calendar {
            background-color: #03ABFF !important;
        }

        body .booked-calendarSwitcher.calendar select {
            background-color: #959aa1 !important;
            color: #00D1FF;
        }

        .booked-calendar-shortcode-wrap .booked-calendar thead tr th .monthName {
            font-style: normal;
            font-weight: 500;
            font-size: 24px;
            line-height: 1.313;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            color: #232c3d;
        }

        @media (min-width: 1200px) {
            .booked-calendar-shortcode-wrap .booked-calendar thead tr th .monthName {
                font-size: 32px;
            }
        }

        .booked-calendar thead tr th .monthName::before {
            background: linear-gradient(-45deg, transparent 15px, #d2d2d3 0), linear-gradient(45deg, transparent 15px, #d2d2d3 0);
        }

        .booked-calendar thead tr th .monthName::after {
            background: linear-gradient(-45deg, transparent 15px, #ffffff 0), linear-gradient(45deg, transparent 15px, #ffffff 0);
        }

        .booked-calendar-shortcode-wrap .booked-calendar thead tr th .backToMonth {
            font-family: Archivo, sans-serif;
            color: #03ABFF;
        }

        .booked-calendar-shortcode-wrap .booked-calendar thead tr th .backToMonth:hover,
        .buddypress #buddypress .ac-form .ac-reply-content input:hover {
            color: #232c3d;
        }

        .booked-calendar-shortcode-wrap .booked-calendar thead tr th .page-right,
        .booked-calendar-shortcode-wrap .booked-calendar thead tr th .page-left {
            background-color: #f0f4f7;
        }

        .booked-calendar-shortcode-wrap .booked-calendar thead tr th .page-right i,
        .booked-calendar-shortcode-wrap .booked-calendar thead tr th .page-left i {
            color: #232c3d;
        }

        .booked-calendar-shortcode-wrap .booked-calendar thead tr th .page-right:hover,
        .booked-calendar-shortcode-wrap .booked-calendar thead tr th .page-left:hover {
            background-color: #03ABFF;
        }

        .booked-calendar-shortcode-wrap .booked-calendar thead tr th .page-right:hover i,
        .booked-calendar-shortcode-wrap .booked-calendar thead tr th .page-left:hover i,
        .buddypress #buddypress .ac-form .ac-reply-content input {
            color: #ffffff;
        }

        .booked-calendar-shortcode-wrap .booked-calendar thead tr.days th {
            color: #03ABFF !important;
            font-style: normal;
            font-weight: 500;
            font-size: 18px;
            line-height: 1.44;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
        }

        .booked-calendar-shortcode-wrap .booked-calendar tbody tr td .date {
            background-color: #f0f4f7 !important;
        }

        .booked-calendar-shortcode-wrap .booked-calendar tbody tr td .date .number {
            color: rgba(150, 155, 162, 0.3);
            font-style: normal;
            font-weight: 500;
            font-size: 22px;
            line-height: 1.45;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
        }

        .booked-calendar-shortcode-wrap .booked-calendar tbody tr td.prev-date .date .number {
            color: rgba(35, 44, 61, 0.4) !important;
        }

        body .booked-calendar-shortcode-wrap .booked-calendar tbody tr td.active .date,
        body .booked-calendar-shortcode-wrap .booked-calendar tbody tr td.active,
        body .booked-calendar-shortcode-wrap .booked-calendar tbody tr td.active:hover .date,
        .booked-calendar-shortcode-wrap .booked-calendar tbody tr td.active .date::after {
            background-color: #ffffff !important;
        }

        .booked-calendar-shortcode-wrap .booked-calendar tbody tr td .date.tooltipster .number,
        body .booked-calendar-shortcode-wrap .booked-calendar tbody tr td.active .date .number,
        body .booked-calendar-shortcode-wrap .booked-calendar tbody tr td.active:hover .date .number {
            color: #232c3d;
        }

        .booked-calendar-shortcode-wrap .booked-calendar tbody tr td .date.tooltipster {
            border-color: #e3e9ee;
        }

        body .booked-calendar-shortcode-wrap .booked-calendar tbody tr td.active .date .number {
            color: #03ABFF;
        }

        .booked-calendar-shortcode-wrap .booked-calendar tbody tr td .date.tooltipster:hover .number {
            color: #ffffff;
        }

        .booked-calendar-shortcode-wrap .booked-calendar tbody tr td .date.tooltipster:hover {
            background-color: #232c3d !important;
        }

        .booked-calendar-shortcode-wrap .booked-calendar tbody tr.entryBlock h2 {
            color: #232c3d;
            font-style: normal;
            font-weight: 500;
            font-size: 18px;
            line-height: 1.44;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
        }

        .booked-calendar-shortcode-wrap .booked-calendar tbody tr.entryBlock .timeslot+.timeslot {
            border-color: #e3e9ee;
        }

        .booked-calendar-shortcode-wrap .booked-calendar tbody tr.entryBlock .timeslot-time::before {
            background-color: #e3e9ee;
        }

        .booked-calendar-shortcode-wrap .booked-calendar tbody tr.entryBlock .timeslot-time i.fa {
            color: #03ABFF;
        }

        .booked-calendar-shortcode-wrap .booked-calendar tbody tr.entryBlock .timeslot-range {
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 1.44;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            color: #232c3d;
        }

        .booked-calendar-shortcode-wrap .booked-calendar tbody tr.entryBlock .timeslot-people .button,
        body .booked-modal .bm-window .booked-form .field>input.button {
            font-weight: 500;
            font-size: 12px;
            font-family: Archivo, sans-serif;
            color: #ffffff;
            background-color: #03ABFF;
        }

        body .booked-modal .bm-window .field button {
            font-weight: 500;
            font-size: 12px;
            font-family: Archivo, sans-serif !important;
            color: #ffffff !important;
            background-color: #03ABFF !important;
        }

        body .booked-calendar-shortcode-wrap .booked-calendar tbody tr.entryBlock .timeslot-people .button:hover,
        body .booked-modal .bm-window .booked-form .field>input.button:hover {
            color: #ffffff;
            background-color: #00D1FF !important;
        }

        body .booked-modal .bm-window .field button:hover {
            color: #ffffff !important;
            background-color: #00D1FF !important;
        }

        body .booked-modal .bm-window p.booked-title-bar,
        body .booked-modal .bm-window .booked-form p.booked-calendar-name,
        body .booked-modal .bm-window .booked-form p.title {
            font-family: Archivo, sans-serif;
            color: #00D1FF;
        }

        body .booked-modal .bm-window .condition-block .field label,
        body .booked-modal .bm-window p.booked-title-bar small {
            font-style: normal;
            font-weight: 500;
            font-size: 18px;
            line-height: 1.44;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            color: #232c3d;
        }

        body .booked-modal .bm-window a.close i {
            color: #03ABFF;
        }

        body .booked-modal .bm-window a.close:hover i {
            color: #232c3d;
        }

        @media (min-width: 900px) {
            body .booked-modal .bm-window a.close i {
                color: #ffffff;
            }

            body .booked-modal .bm-window a.close:hover i {
                color: #03ABFF;
            }
        }

        body .booked-modal .bm-window a.close:hover i,
        body .booked-modal .bm-window .booked-form p.name b i,
        body .booked-modal .bm-window .appointment-info i.fa,
        body .booked-modal .bm-window .condition-block .field label i {
            color: #03ABFF;
        }

        body .booked-modal .bm-window .booked-form #customerChoices,
        body .booked-modal .bm-window .booked-appointments,
        body .booked-modal .bm-window .field input[type^='text'],
        body .booked-modal .bm-window .field input[type^='email'],
        body .booked-modal .bm-window .field input[type^='password'] {
            border-color: #e3e9ee;
        }

        body .booked-modal .bm-window .booked-appointments .appointment-info {
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 1.44;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            color: #232c3d;
        }

        body .booked-modal div.bm-window p,
        body .booked-modal .bm-window .condition-block .field p,
        body .booked-modal .bm-window .booked-form p.name b,
        body .booked-modal .bm-window .booked-form #customerChoices label {
            font-family: Archivo, sans-serif;
            color: #969ba2;
        }

        body .booked-modal .bm-window .booked-appointments .calendar-name {
            color: #232c3d;
        }

        body .booked-modal .bm-window .condition-block .field label.field-label,
        body .booked-modal .bm-window .condition-block .field p {
            font-weight: 400;
        }

        body .booked-modal .bm-window .condition-block .field input[type^='text'],
        body .booked-modal .bm-window .condition-block .field input[type^='email'],
        body .booked-modal .bm-window .condition-block .field input[type^='password'],
        .booked-calendar-shortcode-wrap .booked-calendar tbody tr td.blur:hover .date {
            background-color: #f0f4f7;
        }

        body .booked-modal .bm-window,
        body .booked-modal .bm-window p.booked-title-bar {
            background-color: #959aa1;
        }

        body .booked-modal .bm-window .field button {
            background-color: #00D1FF;
            color: #959aa1;
            font-family: Archivo, sans-serif;
        }

        body .booked-modal .bm-window .field button:hover {
            background-color: #03ABFF;
        }

        .booked-profile-appt-list .calendar-name,
        .booked-profile-appt-list i {
            color: #03ABFF;
        }

        .booked-profile-appt-list .calendar-name strong {
            color: #00D1FF;
        }

        body .booked-calendar-shortcode-wrap .booked-calendar-wrap.small table.booked-calendar tbody tr.week td.active .date .number {
            color: #969ba2;
        }

        body .booked-calendar-shortcode-wrap .booked-calendar tbody tr.entryBlock .timeslot-time .timeslot-title {
            color: #00D1FF !important;
        }

        .booked-calendar-shortcode-wrap .booked-calendar tbody tr td.prev-date.today .date,
        body #booked-profile-page .booked-tabs {
            background-color: #00D1FF !important;
        }

        .booked-calendar-shortcode-wrap .booked-calendar tbody tr td.prev-date.today .date .number {
            color: #959aa1 !important;
        }

        body .booked-modal .bm-window .booked-scrollable,
        body .booked-modal .bm-window,
        body .booked-modal .bm-window p.booked-title-bar {
            background-color: #ffffff;
        }

        body #booked-profile-page .booked-profile-header {
            background-color: #03ABFF !important;
        }

        body #booked-profile-page .booked-profile-header .booked-logout-button:hover,
        body #booked-profile-page #profile-appointments .booked-form-notice,
        body #booked-profile-page label {
            color: #00D1FF;
        }

        body #booked-profile-page .booked-tabs li.active a,
        body #booked-profile-page .booked-tabs li a:hover,
        body #booked-profile-page .booked-tabs li.active a:hover {
            background-color: #03ABFF !important;
        }

        body #booked-profile-page #profile-appointments .booked-no-margin {
            color: #969ba2;
        }

        body #booked-profile-page #profile-edit #booked-page-form .form-submit input[type^="submit"],
        body #booked-profile-page .login-submit input[type^="submit"],
        body #booked-profile-page .wp-user-form input[type^="submit"] {
            background-color: #03ABFF;
            border-color: #03ABFF;
        }

        body #booked-profile-page #profile-edit #booked-page-form .form-submit input[type^="submit"]:hover,
        body #booked-profile-page .login-submit input[type^="submit"]:hover,
        body #booked-profile-page .wp-user-form input[type^="submit"]:hover {
            background-color: #00D1FF !important;
            border-color: #00D1FF;
        }

        body #booked-profile-page label {
            font-weight: 400 !important;
        }

        body #booked-profile-page #profile-appointments .booked-form-notice {
            font-weight: 400;
            font-style: normal;
        }

        body #booked-profile-page #profile-edit h4 {
            font-weight: 500;
        }

        body .booked-modal .bm-window a {
            color: #03ABFF;
        }

        body .booked-modal .bm-window a:hover {
            color: #232c3d;
        }

        .tm_timeline .tm_timeline__event .tm_timeline__event__dot {
            border-color: #00D1FF;
        }

        .tm_timeline__event__description {
            font-size: 14px;
        }

        .tm_timeline .tm_timeline__event .tm_timeline__event__date {
            font-style: normal;
            font-weight: 500;
            font-size: 11px;
            line-height: 1.44;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            text-align: inherit;
            color: #969ba2;
        }

        .tm_timeline .tm_timeline__event .tm_timeline__event__title,
        .tm_timeline .tm_timeline__event .tm_timeline__event__title a {
            font-style: normal;
            font-weight: 500;
            font-size: 22px;
            line-height: 1.45;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            text-align: inherit;
            color: #232c3d;
        }

        .tm_timeline .tm_timeline__event .tm_timeline__event__title a:hover {
            color: #00D1FF;
        }

        .tm_timeline.tm_timeline-layout-vertical .tm_timeline__event__description {
            font-weight: 400;
        }

        .single-timeline_post .timeline_post>.entry-content>p:first-of-type:first-letter {
            background-color: #03ABFF;
            color: #959aa1;
        }

        .tm_timeline .tm_timeline__tense {
            background-color: #00D1FF;
        }

        .tm_timeline.tm_timeline-layout-vertical .tm_timeline__body-tense {
            border-left-color: #00D1FF;
        }

        .tm_timeline:hover .tm_timeline__control:hover,
        .entry-content .tm_timeline:hover .tm_timeline__control:hover,
        .tm_timeline:hover .tm_timeline__control,
        .entry-content .tm_timeline:hover .tm_timeline__control:hover .tm_timeline:hover .tm_timeline__control,
        .tm_timeline__control,
        .tm_timeline__control:hover,
        .tm_timeline__control:active,
        .tm_timeline__control:focus,
        .entry-content .tm_timeline__control,
        .entry-content .tm_timeline__control:hover,
        .entry-content .tm_timeline__control:active,
        .entry-content .tm_timeline__control:focus {
            color: #ffffff;
        }

        .tm_timeline .tm_timeline__control:before {
            background-color: #00D1FF;
            box-shadow: 0 0 16px 2px rgba(254, 248, 92, 0.7)
        }

        .cherry-team.team-wrap.template-grid-boxes .team-listing_content:before {
            background-color: rgba(254, 248, 92, 0.9);
        }

        .cherry-team.team-wrap.template-grid-boxes .team-listing_content a:hover {
            color: #03ABFF;
        }

        .team-container .cherry-team-filter {
            font-family: Archivo, sans-serif;
        }

        .team-container .cherry-team-filter_link {
            color: #969ba2;
        }

        .team-container .cherry-team-filter_link:hover,
        .team-container .cherry-team-filter_item.active .cherry-team-filter_link,
        .team-listing .team-meta_item {
            color: #03ABFF;
        }

        .team-meta-position,
        .team-single-item .team-meta-location i,
        .team-single-item .team-meta-phone i,
        .team-single-item .team-meta-email i {
            color: #03ABFF;
        }

        .team-meta-title,
        .team-single-item .team-meta-location,
        .team-single-item .team-meta-phone,
        .team-single-item .team-meta-email {
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 1.44px;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            color: #232c3d;
        }

        .team-skills_label {
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: calc(1.45 * 22px);
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            color: #232c3d;
        }

        .team-skills_line:before {
            font-style: normal;
            font-weight: 500;
            font-size: 22px;
            line-height: 1.45;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            color: #232c3d;
        }

        .cherry-team.team-wrap .team-socials_link:hover {
            color: #232c3d;
        }

        .cherry-team.team-wrap .team-listing .team-listing_photo__overflow {
            background-color: rgba(35, 44, 61, 0.85);
        }

        .invert .team-listing_name a {
            color: #ffffff;
        }

        .invert .team-listing_name a:hover {
            color: #00D1FF;
        }

        .cherry-services .service-icon {
            color: rgb(221, 225, 228);
        }

        .services-container .cherry-services-filter {
            font-family: Archivo, sans-serif;
        }

        .services-container .cherry-services-filter_link {
            color: #969ba2;
        }

        .services-container .cherry-services-filter_link:hover,
        .services-container .cherry-services-filter_item.active .cherry-services-filter_link {
            color: #03ABFF;
        }

        .cherry-services .title_wrap a {
            color: #03ABFF;
        }

        .cherry-services .title_wrap a:hover {
            color: #232c3d;
        }

        .cherry-services .cherry-spinner-double-bounce .cherry-double-bounce1,
        .cherry-services .cherry-spinner-double-bounce .cherry-double-bounce2 {
            background-color: #03ABFF;
        }

        .template-default .services-item .title_wrap a,
        .template-default-description .services-item .title_wrap a {
            color: #232c3d;
        }

        .template-default .services-item-inner,
        .template-default-description .services-item-inner,
        .template-sidebar-media-icon .services-item-inner {
            border-color: #e3e9ee;
        }

        .template-media-icon .services-item-inner {
            background-color: #ffffff;
        }

        .template-sidebar-media-icon .services-item-inner:hover {
            background-color: #232c3d;
        }

        .template-media-icon .services-item .title_wrap a:hover,
        .template-default .services-item .title_wrap a:hover,
        .template-default-description .services-item .title_wrap a:hover {
            color: #232c3d;
        }

        .template-media-icon .services-item .service-icon i,
        .template-sidebar-media-icon .services-item .service-icon i {
            color: #969ba2;
        }

        .template-default-icon .services-item-inner .service-icon {
            border-color: #03ABFF;
            color: #ffffff;
        }

        .template-default-icon .services-item-inner .service-icon:after {
            background-color: #03ABFF;
        }

        .template-default-icon .services-item-inner .services-item-floated-content h4 {
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 1.44;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
        }

        .template-default-icon .services-item-inner .services-item-floated-content h4 a {
            color: #232c3d;
        }

        .template-default-icon .services-item-inner .services-item-floated-content h4 a:hover {
            color: #03ABFF;
        }

        .template-sidebar-media-icon .services-item-inner:hover .title_wrap a {
            color: #ffffff;
        }

        .template-media-icon .services-item .title_wrap a,
        .template-sidebar-media-icon .services-item .title_wrap a {
            color: #03ABFF;
        }

        .template-media-icon-bg .title_wrap a,
        .template-media-icon-bg .services-item-inner .content_wrap,
        .template-media-icon-bg .services-item-inner .service-icon {
            color: #ffffff;
        }

        .template-media-icon-bg .services-item-inner:hover .title_wrap a,
        .template-media-icon-bg .services-item-inner:hover .content_wrap {
            color: #232c3d;
        }

        .template-media-icon-bg .services-item-inner:hover .service-icon {
            color: #03ABFF;
        }

        .template-media-icon-bg .services-item-inner:hover .title_wrap a:hover {
            color: #03ABFF;
        }

        .template-media-icon-bg .services-item-overflow::after {
            background-color: #03ABFF;
        }

        .template-media-icon-bg .services-item-inner:hover .services-item-overflow::after {
            background-color: #ffffff;
        }

        .template-media-icon-bg-2 .services-item-inner {
            background-color: #ffffff;
            border-color: #e3e9ee;
        }

        .template-media-icon-bg-2 .services-item-inner:hover {
            border-color: #03ABFF;
        }

        .template-media-icon-bg-2 .services-item-inner:hover .services-item-inner,
        .template-media-icon-bg-2 .services-item-inner:hover .title_wrap a,
        .template-media-icon-bg-2 .services-item-inner:hover .content_wrap p,
        .template-media-icon-bg-2 .services-item-inner:hover .btn-link {
            color: #ffffff;
        }

        .template-media-icon-bg-2 .services-item .service-icon {
            background-color: #03ABFF;
            color: #ffffff;
        }

        .template-media-icon-bg-2 .services-item .services-item-inner:hover .service-icon {
            background-color: #ffffff;
            color: #03ABFF;
        }

        .template-media-icon-bg-2 .services-item-inner:before {
            background-color: #03ABFF;
        }

        .template-media-icon-bg-2 .title_wrap a {
            color: #232c3d;
        }

        .template-media-icon-bg-2 .title_wrap a:hover,
        .template-media-icon-bg-2 .btn-link:hover {
            color: #232c3d;
        }

        .services-macros .tm-testi__title-main {
            font-style: normal;
            font-weight: 500;
            font-size: 22px;
            line-height: 1.45;
            font-family: Archivo, sans-serif;
            color: #232c3d;
        }

        .template-default .services-item ul li,
        .template-default-description .services-item ul li {
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 1.44;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            color: #03ABFF;
        }

        .tm-testi__title-sup,
        .tm-testi__item-name,
        .tm-testi--default-4 .tm-testi__item-body {
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 1.44;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
        }

        .tm-testi__title-sup,
        .tm-testi__item-name {
            color: #232c3d;
        }

        .tm-testi--default-invert .tm-testi__title-sup,
        .tm-testi--default-invert .tm-testi__item-name {
            color: #ffffff;
        }

        .tm-testi__item-body,
        .tm-testi__item-meta-content,
        .tm-testi--default-2 .tm-testi__title-sup,
        .tm-testi--default-2 .tm-testi__item-name,
        .tm-testi--default-4 .tm-testi__title-sup,
        .tm-testi--default-4 .tm-testi__item-name {
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 1.643;
            font-family: Archivo, sans-serif;
            color: #969ba2;
        }

        .tm-testi__item-body {
            background-color: #ffffff;
        }

        .tm-testi__item-body:after {
            border-color: #f0f4f7 transparent transparent transparent;
        }

        .tm-testi--default-white .tm-testi__item-body {
            background-color: #ffffff;
        }

        .tm-testi--default-white .tm-testi__item-body:after {
            border-color: #ffffff transparent transparent transparent;
        }

        .tm-testi__item-meta-content,
        .tm-testi--default-4 .tm-testi__item-body p:before {
            color: #03ABFF;
        }

        .tm-testi__item-body:before,
        .tm-testi--speech-bubble .tm-testi__item-body p:before {
            color: #03ABFF;
        }

        .tm-testi__item-avatar,
        .elementor .tm-testi__item-avatar {
            border-color: #e3e9ee;
        }

        .tm-testi--speech-bubble .tm-testi__item-body {
            border-color: #f0f4f7;
        }

        .tm-testi--speech-bubble .tm-testi__item-body:after {
            border-top-color: #f0f4f7;
        }

        .tm-testi .swiper-container-3d .swiper-slide-shadow-left,
        .tm-testi .swiper-container-3d .swiper-slide-shadow-right {
            background-color: #f0f4f7;
        }

        .tm-testi__wrap.invert .tm-testi__title-sup,
        .tm-testi__wrap.invert .tm-testi__title-main,
        .tm-testi__wrap.invert .tm-testi__title-sub,
        .tm-testi__wrap.invert .tm-testi__item-body,
        .tm-testi__wrap.invert .tm-testi__item-body::before,
        .tm-testi__wrap.invert .tm-testi__title-sup,
        .tm-testi__wrap.invert .tm-testi__item-name,
        .tm-testi__wrap.invert .tm-testi__item-meta-content,
        .tm-testi__wrap.invert .tm-testi__item-meta-content cite,
        .tm-testi__wrap.invert .tm-testi__item footer .tm-testi__item-meta-content> :not(:last-child)::after {
            color: #ffffff;
        }

        .tm-testi__wrap.tm-testi--default-4.invert .tm-testi__title-sup,
        .tm-testi__wrap.tm-testi--default-4.invert .tm-testi__item-name,
        .tm-testi__wrap.tm-testi--default-4.invert .tm-testi__item-meta-content,
        .tm-testi__wrap.tm-testi--default-4.invert .tm-testi__item-meta-content cite,
        .tm-testi__wrap.tm-testi--default-4.invert .tm-testi__item footer .tm-testi__item-meta-content> :not(:last-child)::after {
            color: #03ABFF;
        }

        .tm-testi--default-2 .tm-testi__item-body {
            font-style: normal;
            font-weight: 500;
            font-size: 22px;
            line-height: 1.45;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
        }

        .elementor .tm-testi--default-5 .tm-testi-slider__prev.swiper-button-prev::before,
        .elementor .tm-testi--default-5 .tm-testi-slider__next.swiper-button-next::before,
        .elementor .tm-testi--default-white .tm-testi-slider__prev.swiper-button-prev:hover::before,
        .elementor .tm-testi--default-white .tm-testi-slider__next.swiper-button-next:hover::before,
        .elementor .tm-testi--default-invert .tm-testi-slider__prev.swiper-button-prev:hover::before,
        .elementor .tm-testi--default-invert .tm-testi-slider__next.swiper-button-next:hover::before {
            color: #232c3d;
            background-color: #f0f4f7;
        }

        .elementor .tm-testi--default-5 .tm-testi-slider__prev.swiper-button-prev:hover::before,
        .elementor .tm-testi--default-5 .tm-testi-slider__next.swiper-button-next:hover::before,
        .elementor .tm-testi--default-white .tm-testi-slider__prev.swiper-button-prev::before,
        .elementor .tm-testi--default-white .tm-testi-slider__next.swiper-button-next::before,
        .elementor .tm-testi--default-invert .tm-testi-slider__prev.swiper-button-prev::before,
        .elementor .tm-testi--default-invert .tm-testi-slider__next.swiper-button-next::before {
            color: #ffffff;
            background-color: #03ABFF;
        }

        .elementor .tm-testi--default-2 .tm-testi-slider__prev.swiper-button-prev::before,
        .elementor .tm-testi--default-2 .tm-testi-slider__next.swiper-button-next::before {
            color: #232c3d;
            background-color: #ffffff;
        }

        .elementor .tm-testi--default-2 .tm-testi-slider__prev.swiper-button-prev:hover::before,
        .elementor .tm-testi--default-2 .tm-testi-slider__next.swiper-button-next:hover::before {
            color: #03ABFF;
            background-color: #ffffff;
        }

        .elementor .tm-testi--default-invert .swiper-pagination-bullet {
            background-color: #ffffff;
        }

        .elementor .tm-testi--default-invert .swiper-pagination-bullet.swiper-pagination-bullet-active,
        .elementor .tm-testi--default-invert .swiper-pagination-bullet:hover {
            background-color: #03ABFF;
        }

        .tm-testi--default-3 .tm-testi__item-body {
            border-color: #e3e9ee;
        }

        .tm-testi--default .tm-testi__item-body {
            background-color: #e3e9ee;
        }

        .tm-testi--default .tm-testi__item-body:after {
            border-color: #e3e9ee transparent transparent transparent;
        }

        .cherry-projects-wrapper,
        .cherry-projects-single-post,
        .cherry-projects-single-details-list ul li,
        .cherry-projects-terms-wrapper {
            color: #969ba2;
        }

        .cherry-projects-wrapper ul.projects-filters-list li,
        .cherry-projects-wrapper ul.order-filters li {
            font-style: normal;
            font-weight: 500;
            font-size: 12px;
            line-height: 1.44;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            text-align: inherit;
            color: #232c3d;
        }

        .cherry-projects-wrapper .cherry-spinner-double-bounce .cherry-double-bounce1,
        .cherry-projects-wrapper .cherry-spinner-double-bounce .cherry-double-bounce2,
        .cherry-projects-terms-wrapper .cherry-spinner-double-bounce .cherry-double-bounce1,
        .cherry-projects-terms-wrapper .cherry-spinner-double-bounce .cherry-double-bounce2,
        .cherry-projects-wrapper ul.order-filters>li ul {
            background-color: #03ABFF;
        }

        .cherry-projects-wrapper .projects-filters ul.projects-filters-list li span {
            color: #232c3d;
        }

        .invert .cherry-projects-wrapper .projects-filters ul.projects-filters-list li span {
            color: #ffffff;
        }

        .cherry-projects-wrapper .projects-filters ul.projects-filters-list li.active span,
        .cherry-projects-wrapper .projects-filters ul.projects-filters-list li span:hover,
        .cherry-projects-wrapper ul.order-filters>li span.current {
            color: #03ABFF;
        }

        .invert .cherry-projects-wrapper .projects-filters ul.projects-filters-list li.active span,
        .invert .cherry-projects-wrapper .projects-filters ul.projects-filters-list li span:hover,
        .invert .cherry-projects-wrapper ul.order-filters>li span.current {
            color: #03ABFF;
        }

        .cherry-projects-wrapper .projects-item-instance .hover-content,
        .cherry-projects-terms-wrapper .projects-terms-container .hover-content {
            background-color: rgba(72, 135, 216, 0.9);
        }

        .cherry-projects-wrapper .projects-item-instance .simple-icon,
        .cherry-projects-terms-wrapper .projects-terms-container .simple-icon {
            color: #ffffff;
        }

        .cherry-projects-wrapper .projects-item-instance .simple-icon:hover,
        .cherry-projects-terms-wrapper .projects-terms-container .simple-icon:hover {
            color: #03ABFF;
        }

        .cherry-projects-wrapper ul.order-filters>li ul li:hover span {
            color: #232c3d;
        }

        .cherry-projects-wrapper .projects-pagination,
        .projects-pagination .page-navigation span {
            color: #e3e9ee;
        }

        .cherry-projects-wrapper .projects-pagination .page-link span {
            color: #969ba2;
            border-color: #e3e9ee;
        }

        .invert .cherry-projects-wrapper .projects-pagination .page-link span {
            color: #ffffff;
            border-color: #ffffff;
        }

        .projects-pagination ul.page-link li:hover span,
        .projects-pagination ul.page-link li.active span,
        .invert .projects-pagination ul.page-link li:hover span,
        .invert .projects-pagination ul.page-link li.active span {
            color: #ffffff;
            background-color: #03ABFF;
            border-color: #03ABFF;
        }

        .cherry-projects-wrapper .projects-pagination .page-navigation span {
            color: #03ABFF;
            font-style: normal;
            font-weight: 500;
            font-size: 12px;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
        }

        .cherry-projects-wrapper .projects-pagination .page-navigation span:hover {
            color: #00D1FF;
        }

        .cherry-projects-wrapper .projects-ajax-button-wrapper .projects-ajax-button span {
            color: #03ABFF;
            background-color: #f0f4f7;
            font-weight: 500;
            font-size: 12px;
            font-family: Archivo, sans-serif;
        }

        .cherry-projects-wrapper .projects-ajax-button-wrapper .projects-ajax-button span:hover {
            color: #ffffff;
            background-color: #03ABFF;
        }

        .cherry-projects-single__title .post-terms {
            font-family: Roboto, sans-serif;
        }

        .cherry-projects-single-post .featured-image a .cover,
        .cherry-projects-single-post .additional-image a .cover,
        .cherry-projects-wrapper .projects-item-instance .featured-image a .cover {
            background-color: rgba(35, 44, 61, 0.85);
        }

        .cherry-projects-single-post .featured-image a:before,
        .cherry-projects-single-post .additional-image a:before,
        .cherry-projects-wrapper .projects-item-instance .featured-image a:before {
            color: #03ABFF;
        }

        .cherry-projects-single .cherry-projects-single-details-list ul li:nth-child(odd) {
            background-color: #f0f4f7;
        }

        .cherry-projects-single .cherry-projects-single-details-list ul li span::after {
            background-color: #e3e9ee;
        }

        .cherry-projects-single .cherry-projects-single-details-list ul li span,
        .cherry-projects-single .post-terms a {
            color: #232c3d;
        }

        .cherry-projects-single .post-terms a:hover {
            color: #03ABFF;
        }

        .cherry-projects-single-skills-list .cherry-skill-item .skill-bar span {
            background-color: #03ABFF;
        }

        .cherry-projects-single-skills-list .cherry-skill-item .skill-bar span em {
            color: #959aa1;
        }

        .cherry-projects-slider__instance .sp-arrow,
        .cherry-projects-slider__instance .slider-pro .sp-full-screen-button {
            background-color: #ffffff;
            color: #232c3d;
        }

        .cherry-projects-slider__instance .sp-next-arrow:hover,
        .cherry-projects-slider__instance .sp-previous-arrow:hover,
        .cherry-projects-slider__instance .slider-pro .sp-full-screen-button:hover {
            background-color: #03ABFF;
            color: #ffffff;
        }

        .cherry-projects-slider__instance .sp-image-container:before {
            background: linear-gradient(to top, rgba(210, 210, 211, 0), rgba(210, 210, 211, 0.5));
        }

        .cherry-projects-terms-wrapper .projects-terms-container.grid-layout .project-terms-content,
        .cherry-projects-terms-wrapper .projects-terms-container.masonry-layout .project-terms-content,
        .cherry-projects-terms-wrapper .projects-terms-container.cascading-grid-layout .project-terms-content {
            background-color: #03ABFF;
        }

        .cherry-projects-terms-wrapper .projects-terms-container.grid-layout .projects-terms-item:hover .project-terms-content,
        .cherry-projects-terms-wrapper .projects-terms-container.masonry-layout .projects-terms-item:hover .project-terms-content,
        .cherry-projects-terms-wrapper .projects-terms-container.cascading-grid-layout .projects-terms-item:hover .project-terms-content {
            background-color: #00D1FF;
        }

        /*Skin templates*/
        .terms-grid-skin1 .featured-image .cover {
            background-color: rgba(254, 248, 92, 0.6);
        }

        .terms-grid-skin1:hover .cover,
        .cherry-projects-wrapper .projects-item-instance .grid-default-skin1 a .cover {
            background-color: rgba(254, 248, 92, 0.95);
        }

        .cherry-projects-terms-wrapper .projects-terms-container .terms-grid-skin1 .term-permalink span {
            font-family: Archivo, sans-serif;
        }

        .cherry-projects-wrapper .projects-item-instance .grid-default-skin1 .simple-icon:hover,
        .cherry-projects-terms-wrapper .projects-terms-container .terms-grid-skin1 .simple-icon:hover {
            color: #03ABFF;
        }

        /*Project Container*/
        .projects-container .projects-item .overflow-content a,
        .projects-container .projects-item .overflow-content .project-entry-content {
            color: #ffffff;
        }

        .projects-container .projects-item .overflow-content a:hover {
            color: #03ABFF;
        }

        .projects-container .projects-item .project-content a.btn:hover {
            color: #ffffff;
        }

        .projects-container .projects-item .project-content.style-3 a.post-author {
            color: #03ABFF;
        }

        .projects-container .projects-item .project-content.style-3 a.post-date,
        .projects-container .projects-item .project-content.style-3 .post-terms a:hover {
            color: #969ba2;
        }

        .projects-container .projects-item .project-content.style-3 .post-terms a,
        .projects-container .projects-item .project-content.style-3 a.post-date:hover,
        .projects-container .projects-item .project-content.style-3 a.post-author:hover {
            color: #232c3d;
        }

        .projects-container .projects-item .project-content.style-3 .project-entry-title {
            font-style: normal;
            font-weight: 500;
            font-size: 22px;
            line-height: 1.45;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            text-align: inherit;
        }

        .projects-container .projects-item .project-content.style-3 .project-entry-title a {
            color: #232c3d;
        }

        .projects-container .projects-item .project-content.style-3 .project-entry-title a:hover {
            color: #03ABFF;
        }

        .projects-container .projects-item h5 {
            font-style: normal;
            font-weight: 500;
            font-size: 22px;
            line-height: 1.45;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            text-align: inherit;
        }

        .cherry-projects-single .cherry-projects-single-skills-list .cherry-skill-item .skill-bar:before {
            font-style: normal;
            font-weight: 500;
            font-size: 22px;
            line-height: 1.45;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            text-align: inherit;
            color: #232c3d;
        }

        .cherry-projects-single .cherry-projects-single-skills-list .cherry-skill-item .skill-label {
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 1.44;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            text-align: inherit;
            color: #232c3d;
        }

        .cherry-projects-single .post__date-link {
            background-color: #f0f4f7;
        }

        .cherry-projects-single .post__date-link:hover {
            background-color: #03ABFF;
        }

        .cherry-projects-single .post__date-link:hover .post__date-day,
        .cherry-projects-single .post__date-link:hover .post__date-month {
            color: #ffffff;
        }

        .project-terms-content.invert a {
            color: #ffffff;
        }

        .cherry-popup-wrapper .cherry-popup-close-button span {
            color: #232c3d;
        }

        @media (min-width: 600px) {
            .cherry-popup-wrapper .cherry-popup-close-button span {
                color: #ffffff;
                background-color: #00D1FF;
            }

            .cherry-popup-wrapper .cherry-popup-close-button:hover span {
                color: #00D1FF;
                background-color: #ffffff;
            }

            .cherry-popup-wrapper.popup-type-default .cherry-popup-close-button span {
                color: #ffffff;
                background-color: #03ABFF;
            }

            .cherry-popup-wrapper.popup-type-default .cherry-popup-close-button:hover span {
                color: #03ABFF;
                background-color: #ffffff;
            }
        }

        .cherry-popup-wrapper .cherry-popup-title h4 {
            color: #232c3d;
        }

        .cherry-popup-wrapper input[type='text'],
        .cherry-popup-wrapper input[type='email'],
        .cherry-popup-wrapper input[type='url'],
        .cherry-popup-wrapper input[type='password'],
        .cherry-popup-wrapper input[type='search'],
        .cherry-popup-wrapper input[type='number'],
        .cherry-popup-wrapper input[type='tel'],
        .cherry-popup-wrapper input[type='range'],
        .cherry-popup-wrapper input[type='date'],
        .cherry-popup-wrapper input[type='month'],
        .cherry-popup-wrapper input[type='week'],
        .cherry-popup-wrapper input[type='time'],
        .cherry-popup-wrapper input[type='datetime'],
        .cherry-popup-wrapper input[type='datetime-local'],
        .cherry-popup-wrapper input[type='color'],
        .cherry-popup-wrapper .cherry-popup-check .marker {
            background-color: #f0f4f7;
            border-color: #e3e9ee;
        }

        .cherry-popup-wrapper input[type='text']:focus,
        .cherry-popup-wrapper input[type='email']:focus,
        .cherry-popup-wrapper input[type='url']:focus,
        .cherry-popup-wrapper input[type='password']:focus,
        .cherry-popup-wrapper input[type='search']:focus,
        .cherry-popup-wrapper input[type='number']:focus,
        .cherry-popup-wrapper input[type='tel']:focus,
        .cherry-popup-wrapper input[type='range']:focus,
        .cherry-popup-wrapper input[type='date']:focus,
        .cherry-popup-wrapper input[type='month']:focus,
        .cherry-popup-wrapper input[type='week']:focus,
        .cherry-popup-wrapper input[type='time']:focus,
        .cherry-popup-wrapper input[type='datetime']:focus,
        .cherry-popup-wrapper input[type='datetime-local']:focus,
        .cherry-popup-wrapper input[type='color']:focus,
        .cherry-popup-wrapper.invert .cherry-popup-check .marker {
            background-color: #ffffff;
        }

        .cherry-popup-wrapper.invert .cherry-popup-check .marker {
            border-color: #ffffff;
        }

        .cherry-popup-wrapper .cherry-popup-check.checked .marker,
        .cherry-popup-wrapper.invert .cherry-popup-check.checked .marker {
            background-color: #03ABFF;
            border-color: #03ABFF;
        }

        .popup-type-login .cherry-popup-login__login-in,
        .popup-type-signup .cherry-popup-register__sign-up,
        .popup-type-default .cherry-popup-subscribe__submit,
        .popup-type-subscribe .cherry-popup-subscribe__submit,
        .cherry-popup .wp-social-login-widget .wp-social-login-provider-list .wp-social-login-provider {
            font-style: normal;
            font-weight: 500;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
        }

        .popup-type-login .cherry-popup-login__login-in,
        .popup-type-signup .cherry-popup-register__sign-up,
        .popup-type-default .cherry-popup-subscribe__submit,
        .popup-type-subscribe .cherry-popup-subscribe__submit {
            color: #ffffff;
            background-color: #03ABFF;
        }

        .popup-type-login .cherry-popup-login__login-in:hover,
        .popup-type-signup .cherry-popup-register__sign-up:hover {
            color: #ffffff;
            background-color: #00D1FF;
        }

        .popup-type-login .cherry-popup-login__login-in:active,
        .popup-type-signup .cherry-popup-register__sign-up:active {
            background-color: rgb(229, 223, 67);
        }

        .popup-type-default .cherry-popup-subscribe__submit:hover,
        .popup-type-subscribe .cherry-popup-subscribe__submit:hover {
            color: #ffffff;
            background-color: #232c3d;
        }

        .popup-type-default .cherry-popup-subscribe__submit:active,
        .popup-type-subscribe .cherry-popup-subscribe__submit:active {
            background-color: rgb(10, 19, 36);
        }

        .cherry-popup.invert .cherry-popup-title h4,
        .cherry-popup.invert .cherry-popup-content,
        .cherry-popup.invert .cherry-popup-check .label {
            color: #ffffff;
        }

        .cherry-popup.invert .cherry-popup-subscribe__input:focus {
            border-color: rgb(229, 223, 67);
            box-shadow: inset 0 0 0 1px rgb(229, 223, 67);
        }

        .cherry-popup.invert ::-webkit-input-placeholder {
            color: #969ba2;
        }

        .cherry-popup.invert ::-moz-placeholder {
            color: #969ba2;
        }

        .cherry-popup.invert :-moz-placeholder {
            color: #969ba2;
        }

        .cherry-popup.invert :-ms-input-placeholder {
            color: #969ba2;
        }

        .header-search .cherry-search form.cherry-search__form button.search-submit {
            color: #03ABFF;
        }

        .header-search .cherry-search form.cherry-search__form button.search-submit:hover {
            color: #232c3d;
        }

        .mobile-panel .cherry-search__label:before,
        .mobile-panel .header-search .cherry-search form.cherry-search__form button.search-submit {
            color: #ffffff;
        }

        .invert .cherry-search__label:before,
        .invert .header-search .cherry-search form.cherry-search__form button.search-submit,
        .mobile-panel .header-search .cherry-search form.cherry-search__form button.search-submit:hover {
            color: #ffffff;
        }

        .cherry-search__label:before,
        .invert .header-search .cherry-search form.cherry-search__form button.search-submit:hover {
            color: #232c3d;
        }

        .transparent .invert .header-search .cherry-search form.cherry-search__form button.search-submit:hover {
            color: #03ABFF;
        }

        .cherry-search .cherry-search__item-title {
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 1.44;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            color: #232c3d;
        }

        .cherry-search .cherry-search__results-item a:hover .cherry-search__item-title,
        .cherry-search .cherry-search__item-author em {
            color: #03ABFF;
        }

        .cherry-search .cherry-search__item-content,
        .cherry-search .cherry-search__item-author {
            color: #969ba2;
        }

        .cherry-search .cherry-search__more-button {
            font-weight: 500;
            font-size: 12px;
            font-family: Archivo, sans-serif;
            color: #ffffff;
            background-color: #03ABFF;
        }

        .cherry-search .cherry-search__more-button:hover {
            color: #ffffff;
            background-color: #305893;
        }

        .cherry-search .cherry-search__more-button:active {
            background-color: rgb(229, 223, 67);
        }

        /* #Tm Photo Gallery */
        .tm-pg_front_gallery .tm_pg_gallery-item_label {
            font-style: normal;
            font-weight: 500;
            font-size: 10px;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            background-color: #03ABFF;
        }

        svg [id^="preloader"] .stop-color {
            stop-color: #03ABFF;
        }

        .tm-pg_front_gallery .tm_pg_gallery-item_link::after,
        .tm-pg_front_gallery-tabs li.active a,
        .tm-pg_front_gallery-tabs li:hover a {
            color: #03ABFF;
        }

        .tm-pg_front_gallery .tm_pg_gallery-item_label,
        .tm_pg_gallery-item_icon,
        .tm-pg_front_gallery .tm_pg_gallery-item_title,
        .tm-pg_front_gallery .tm_pg_gallery-item_counter,
        .tm-pg_front_gallery .tm_pg_gallery-item_description {
            color: #ffffff;
        }

        .tm-pg_front_gallery .tm_pg_gallery-item_title {
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            letter-spacing: 0em;
        }

        .tm-pg_front_gallery .tm_pg_gallery-item_counter {
            font-style: normal;
            font-weight: 400;
            font-family: Roboto, sans-serif;
            font-size: 12px;
            letter-spacing: 0em;
        }

        .tm-pg_front_gallery .tm_pg_gallery-item_description {
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 1.643;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
        }

        .tm-pg_front_gallery-grid .tm_pg_gallery-item_link:before,
        .tm-pg_front_gallery-masonry .tm_pg_gallery-item_link:before,
        .tm-pg_front_gallery-justify .tm_pg_gallery-item_link:before,
        .tm-pg_front_gallery .tm-pg_front_gallery-masonry .tm_pg_gallery-item-wrapper:before,
        .tm-pg_front_gallery .tm-pg_front_gallery-grid .tm_pg_gallery-item-wrapper:before,
        .tm-pg_front_gallery .tm-pg_front_gallery-justify .tm_pg_gallery-item-wrapper:before {
            background-color: rgba(35, 44, 61, 0.85);
        }

        .tm-pg_front_gallery-tabs li a {
            font-style: normal;
            font-size: 12px;
            font-weight: 500;
            font-family: Archivo, sans-serif;
            color: #232c3d;
        }

        .lg-backdrop {
            background-color: rgba(35, 44, 61, 0.85);
        }

        .lg-outer,
        .lg-outer .lg-thumb-outer,
        .lg-outer.lg-fullscreen-on .lg-progress-bar .lg-progress {
            background-color: #959aa1;
        }

        .lg-outer .lg-progress-bar .lg-progress {
            background-color: #03ABFF;
        }

        .lg-outer.lg-fullscreen-on .lg-toolbar .lg-icon:after,
        .lg-outer .lg-toolbar .lg-icon:after,
        .lg-outer .lg-thumb-outer .lg-icon:after {
            color: #ffffff;
        }

        .lg-outer.lg-fullscreen-on .lg-toolbar .lg-icon:hover:after,
        .lg-outer .lg-toolbar .lg-icon:hover:after,
        .lg-outer .lg-thumb-outer .lg-icon:hover:after {
            color: #03ABFF;
        }

        .lg-outer .lg-actions .lg-icon.lg-prev:after,
        .lg-outer .lg-actions .lg-icon.lg-next:before {
            background-color: #03ABFF;
            color: #ffffff;
        }

        .lg-outer .lg-actions .lg-icon.lg-prev:hover:after,
        .lg-outer .lg-actions .lg-icon.lg-next:hover:before {
            background-color: #ffffff;
            color: #232c3d;
        }

        .tm_pg_gallery-item_link_show-more span {
            font-style: normal;
            font-size: 16px;
            font-weight: 500;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            color: #232c3d;
        }

        .tm_pb_module .filter-select__list {
            background-color: #ffffff;
        }

        @media (min-width: 1200px) {
            .lg-outer:not(.lg-fullscreen-on) .lg-inner {
                max-width: 1200px;
            }
        }

        .tm-pg_front_gallery .load-more-button .btn {
            color: #03ABFF;
            background-color: #f0f4f7;
        }

        .tm-pg_front_gallery .load-more-button .btn:hover {
            color: #ffffff;
            background-color: #03ABFF;
        }

        .elementor-widget-heading h1.elementor-heading-title {
            line-height: 1.19;
        }

        .elementor-widget-heading h1.elementor-heading-title.elementor-size-small {
            font-size: 52px;
        }

        .elementor-widget-heading h1.elementor-heading-title.elementor-size-medium {
            font-size: 64px;
        }

        .elementor-widget-heading h1.elementor-heading-title.elementor-size-large {
            font-size: 77px;
        }

        .elementor-widget-heading h1.elementor-heading-title.elementor-size-xl {
            font-size: 90px;
        }

        .elementor-widget-heading h1.elementor-heading-title.elementor-size-xxl {
            font-size: 103px;
        }

        .elementor-widget-heading h2.elementor-heading-title {
            line-height: 1.3;
        }

        .elementor-widget-heading h2.elementor-heading-title.elementor-size-small {
            font-size: 37px;
        }

        .elementor-widget-heading h2.elementor-heading-title.elementor-size-medium {
            font-size: 46px;
        }

        .elementor-widget-heading h2.elementor-heading-title.elementor-size-large {
            font-size: 56px;
        }

        .elementor-widget-heading h2.elementor-heading-title.elementor-size-xl {
            font-size: 65px;
        }

        .elementor-widget-heading h2.elementor-heading-title.elementor-size-xxl {
            font-size: 74px;
        }

        .elementor-widget-heading h3.elementor-heading-title {
            line-height: 1.313;
        }

        .elementor-widget-heading h3.elementor-heading-title.elementor-size-small {
            font-size: 26px;
        }

        .elementor-widget-heading h3.elementor-heading-title.elementor-size-medium {
            font-size: 32px;
        }

        .elementor-widget-heading h3.elementor-heading-title.elementor-size-large {
            font-size: 39px;
        }

        .elementor-widget-heading h3.elementor-heading-title.elementor-size-xl {
            font-size: 45px;
        }

        .elementor-widget-heading h3.elementor-heading-title.elementor-size-xxl {
            font-size: 52px;
        }

        .elementor-widget-heading h4.elementor-heading-title {
            line-height: 1.45;
        }

        .elementor-widget-heading h4.elementor-heading-title.elementor-size-small {
            font-size: 18px;
        }

        .elementor-widget-heading h4.elementor-heading-title.elementor-size-medium {
            font-size: 22px;
        }

        .elementor-widget-heading h4.elementor-heading-title.elementor-size-large {
            font-size: 27px;
        }

        .elementor-widget-heading h4.elementor-heading-title.elementor-size-xl {
            font-size: 31px;
        }

        .elementor-widget-heading h4.elementor-heading-title.elementor-size-xxl {
            font-size: 36px;
        }

        .elementor-widget-heading h5.elementor-heading-title {
            line-height: 1.44;
        }

        .elementor-widget-heading h5.elementor-heading-title.elementor-size-small {
            font-size: 15px;
        }

        .elementor-widget-heading h5.elementor-heading-title.elementor-size-medium {
            font-size: 18px;
        }

        .elementor-widget-heading h5.elementor-heading-title.elementor-size-large {
            font-size: 22px;
        }

        .elementor-widget-heading h5.elementor-heading-title.elementor-size-xl {
            font-size: 26px;
        }

        .elementor-widget-heading h5.elementor-heading-title.elementor-size-xxl {
            font-size: 29px;
        }

        .elementor-widget-heading h6.elementor-heading-title {
            line-height: 1.44;
        }

        .elementor-widget-heading h6.elementor-heading-title.elementor-size-small {
            font-size: 13px;
        }

        .elementor-widget-heading h6.elementor-heading-title.elementor-size-medium {
            font-size: 16px;
        }

        .elementor-widget-heading h6.elementor-heading-title.elementor-size-large {
            font-size: 20px;
        }

        .elementor-widget-heading h6.elementor-heading-title.elementor-size-xl {
            font-size: 23px;
        }

        .elementor-widget-heading h6.elementor-heading-title.elementor-size-xxl {
            font-size: 26px;
        }

        .elementor-widget-heading div.elementor-heading-title,
        .elementor-widget-heading span.elementor-heading-title,
        .elementor-widget-heading p.elementor-heading-title {
            line-height: 1.643;
        }

        .elementor-widget-heading div.elementor-heading-title.elementor-size-small,
        .elementor-widget-heading span.elementor-heading-title.elementor-size-small,
        .elementor-widget-heading p.elementor-heading-title.elementor-size-small {
            font-size: 12px;
        }

        .elementor-widget-heading div.elementor-heading-title.elementor-size-medium,
        .elementor-widget-heading span.elementor-heading-title.elementor-size-medium,
        .elementor-widget-heading p.elementor-heading-title.elementor-size-medium {
            font-size: 14px;
        }

        .elementor-widget-heading div.elementor-heading-title.elementor-size-large,
        .elementor-widget-heading span.elementor-heading-title.elementor-size-large,
        .elementor-widget-heading p.elementor-heading-title.elementor-size-large {
            font-size: 17px;
        }

        .elementor-widget-heading div.elementor-heading-title.elementor-size-xl,
        .elementor-widget-heading span.elementor-heading-title.elementor-size-xl,
        .elementor-widget-heading p.elementor-heading-title.elementor-size-xl {
            font-size: 20px;
        }

        .elementor-widget-heading div.elementor-heading-title.elementor-size-xxl,
        .elementor-widget-heading span.elementor-heading-title.elementor-size-xxl,
        .elementor-widget-heading p.elementor-heading-title.elementor-size-xxl {
            font-size: 23px;
        }

        .elementor-widget-heading .elementor-heading-title>a {
            color: #03ABFF;
        }

        .elementor-widget-heading .elementor-heading-title>a:hover {
            color: #232c3d;
        }

        .elementor-button-wrapper,
        .elementor-button,
        .elementor-button.elementor-size-md {
            font-weight: 500;
            font-size: 13px;
            font-family: Archivo, sans-serif;
        }

        .elementor-button {
            color: #ffffff;
            background-color: #03ABFF;
        }

        .elementor-button:hover {
            color: #ffffff;
            background-color: #00D1FF;
        }

        .elementor-button:active {
            background-color: rgb(229, 223, 67);
        }

        .invert .elementor-button {
            color: #232c3d;
            background-color: #00D1FF;
        }

        .invert .elementor-button i {
            color: #03ABFF;
        }

        .invert .elementor-button:hover {
            color: #ffffff;
            background-color: #305893;
        }

        .invert .elementor-button:hover i {
            color: #ffffff;
        }

        .elementor-element.elementor-button-warning .elementor-button {
            color: #ffffff;
            background-color: #00D1FF;
        }

        .elementor-element.elementor-button-warning .elementor-button:hover {
            color: #ffffff;
            background-color: #03ABFF;
        }

        .elementor-element.elementor-button-warning .elementor-button:active {
            background-color: rgb(47, 110, 191);
        }

        .elementor-element.elementor-button-info .elementor-button {
            color: #232c3d;
            background-color: #ffffff;
        }

        .elementor-element.elementor-button-info .elementor-button:hover {
            color: #ffffff;
            background-color: #00D1FF;
        }

        .elementor-element.elementor-button-info .elementor-button:active {
            background-color: rgb(229, 223, 67);
        }

        .elementor-element.elementor-button-info .elementor-button-icon {
            color: #03ABFF;
        }

        .elementor-element.elementor-button-info .elementor-button:hover .elementor-button-icon {
            color: #ffffff;
        }

        .elementor-widget-icon-list .elementor-icon-list-icon {
            color: #03ABFF;
        }

        .elementor-icon,
        .elementor-view-framed .elementor-icon {
            color: #03ABFF;
        }

        .elementor-view-stacked .elementor-icon {
            color: #ffffff;
        }

        .elementor-view-stacked .elementor-icon {
            background-color: #03ABFF;
        }

        .elementor-widget-icon-box .elementor-widget-container {
            border-color: #e3e9ee;
        }

        .elementor-accordion .elementor-accordion-item,
        .elementor-toggle .elementor-toggle-title,
        .elementor-toggle .elementor-tab-title,
        .elementor-toggle .elementor-tab-content,
        .elementor-widget-tabs .elementor-tabs-content-wrapper,
        .elementor-widget-tabs .elementor-tabs-content-wrapper .elementor-tab-content {
            border-color: #e3e9ee;
        }

        .elementor-accordion .elementor-accordion-title,
        .elementor-toggle .elementor-toggle-title {
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 1.44;
            font-family: Archivo, sans-serif;
            color: #232c3d;
        }

        .elementor-accordion .elementor-accordion-title:after,
        .elementor-toggle .elementor-toggle-title:after {
            background-color: rgba(240, 244, 247, 0.5);
        }

        .elementor-accordion .elementor-accordion-title .elementor-accordion-icon,
        .elementor-toggle .elementor-toggle-title .elementor-toggle-icon {
            color: #03ABFF;
        }

        .elementor-widget-toggle .elementor-widget-container {
            border-color: #e3e9ee;
        }

        .elementor-testimonial-wrapper .elementor-testimonial-name {
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 1.44;
            font-family: Archivo, sans-serif;
            color: #232c3d;
        }

        .elementor-testimonial-wrapper .elementor-testimonial-content {
            background-color: #f0f4f7;
        }

        .elementor-testimonial-wrapper .elementor-testimonial-content::after {
            border-color: #f0f4f7 transparent transparent transparent;
        }

        .invert .elementor-testimonial-wrapper .elementor-testimonial-content {
            background-color: #232c3d;
        }

        .invert .elementor-testimonial-wrapper .elementor-testimonial-content::after {
            border-color: #232c3d transparent transparent transparent;
        }

        .elementor-testimonial-wrapper .elementor-testimonial-content::before,
        .elementor-testimonial-wrapper .elementor-testimonial-job {
            color: #03ABFF;
        }

        .elementor-progress-wrapper {
            background-color: #232c3d;
        }

        .elementor-progress-bar,
        .elementor-widget-progress .elementor-progress-wrapper.progress-info .elementor-progress-bar {
            background-color: #03ABFF;
            color: #ffffff;
        }

        .elementor-widget-progress .elementor-progress-wrapper.progress-warning .elementor-progress-bar {
            background-color: #00D1FF;
        }

        .elementor-widget-progress .elementor-progress-wrapper.progress-info {
            background-color: #f0f4f7;
        }

        .elementor-widget-progress .elementor-title,
        .elementor-progress-percentage {
            font-style: normal;
            font-weight: 500;
            font-family: Archivo, sans-serif;
        }

        .elementor-widget-progress .elementor-title {
            font-size: 16px;
            line-height: 1.44;
            color: #232c3d;
        }

        .jet-elements .featured-table .pricing-table__heading {
            background-color: #03ABFF;
        }

        .jet-elements .featured-table .pricing-table__heading,
        .jet-elements .featured-table .pricing-table__title,
        .jet-elements .featured-table .pricing-table__subtitle,
        .jet-elements .featured-table .pricing-table__price {
            color: #ffffff;
        }

        .jet-elements .pricing-table__title {
            font-style: normal;
            font-weight: 500;
            font-size: 22px;
            line-height: 1.45;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
        }

        .jet-elements .pricing-table__subtitle {
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 1.643;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
        }

        .pricing-table__icon i {
            background-color: #00D1FF;
            color: #ffffff;
        }

        .jet-elements .pricing-table__price-val,
        .jet-elements .pricing-table__price-prefix {
            font-style: normal;
            font-weight: 500;
            font-size: 28px;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
        }

        @media (min-width: 1200px) {

            .jet-elements .pricing-table__price-val,
            .jet-elements .pricing-table__price-prefix {
                font-size: 46px;
            }
        }

        .elementor-jet-pricing-table .featured-table.pricing-table>div:nth-last-child(2):not(.pricing-table__heading),
        .elementor-jet-pricing-table .featured-table.pricing-table>div:last-child:not(.pricing-table__heading),
        .pricing-table:not(.featured-table) .pricing-table__heading {
            border-color: #e3e9ee;
        }

        .elementor-jet-pricing-table .featured-table.pricing-table>div:nth-last-child(2):not(.pricing-table__heading),
        .elementor-jet-pricing-table .featured-table.pricing-table>div:last-child:not(.pricing-table__heading) {
            background-color: #ffffff;
        }

        .pricing-table .pricing-table__features,
        .pricing-table .pricing-table__action {
            background-color: #f0f4f7;
        }

        .pricing-table .pricing-table__subtitle {
            color: #969ba2;
        }

        .pricing-feature .item-bullet,
        .pricing-table__features .pricing-feature:not(.item-included) .pricing-feature__inner {
            color: #e3e9ee;
        }

        .pricing-feature.item-included .item-bullet {
            color: #03ABFF;
        }

        .pricing-table:not(.featured-table) .pricing-table__price-val,
        .pricing-table:not(.featured-table) .pricing-table__price-prefix,
        .pricing-table:not(.featured-table) .pricing-table__price-suffix {
            color: #03ABFF;
        }

        .brands-list__item-name {
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 1.44;
            font-family: Archivo, sans-serif;
            color: #232c3d;
        }

        .elementor-jet-brands .brands-list__item .brands-list__item-link {
            border-color: #e3e9ee;
        }

        .brands-list__item-desc {
            color: #969ba2;
        }

        .elementor-slick-slider .slick-slider .slick-next,
        .elementor-slick-slider .slick-slider .slick-prev,
        .elementor-slick-slider .slick-next,
        .elementor-slick-slider .slick-prev,
        .elementor .swiper-button-prev,
        .elementor .swiper-button-next {
            color: #232c3d;
            background-color: #ffffff;
        }

        .elementor-slick-slider .slick-slider .slick-next:hover,
        .elementor-slick-slider .slick-slider .slick-prev:hover,
        .elementor-slick-slider .slick-next:hover,
        .elementor-slick-slider .slick-prev:hover,
        .elementor .swiper-button-prev:hover,
        .elementor .swiper-button-next:hover {
            color: #ffffff;
            background-color: #03ABFF;
        }

        .elementor-slick-slider ul.slick-dots li button::before,
        .elementor .swiper-pagination-bullet {
            background-color: #d2d2d3;
        }

        .elementor-slick-slider ul.slick-dots li:hover button::before,
        .elementor-slick-slider ul.slick-dots li.slick-active button::before,
        .elementor .swiper-pagination-bullet.swiper-pagination-bullet-active,
        .elementor .swiper-pagination-bullet:hover {
            background-color: #232c3d;
        }

        .elementor-widget-tabs .elementor-tab-desktop-title {
            border-color: #e3e9ee;
            background-color: #f0f4f7;
            color: #232c3d;
            font-style: normal;
            font-weight: 500;
            font-size: 12px;
            line-height: 1.44;
            font-family: Archivo, sans-serif;
        }

        .elementor-widget-tabs .elementor-tab-desktop-title:hover,
        .elementor-widget-tabs .elementor-tab-desktop-title.elementor-active {
            color: #03ABFF;
            background-color: #ffffff;
        }

        .elementor-widget-tabs .elementor-tab-desktop-title,
        .elementor-widget-tabs .elementor-tab-desktop-title.elementor-active,
        .elementor-widget-tabs.elementor-tabs-view-horizontal .elementor-tabs-borderless .elementor-tabs-content-wrapper,
        .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tabs-borderless .elementor-tabs-content-wrapper {
            border-color: #e3e9ee;
        }

        .elementor-widget-tabs.elementor-tabs-view-icon_horizontal .elementor-tab-desktop-title,
        .elementor-widget-tabs.elementor-tabs-view-icon_vertical .elementor-tab-desktop-title {
            font-size: 16px;
        }

        .elementor-widget-tabs.elementor-tabs-view-icon_horizontal .elementor-tab-title__icon,
        .elementor-widget-tabs.elementor-tabs-view-icon_vertical .elementor-tab-title__icon {
            color: #03ABFF;
        }

        .elementor-widget-tabs.elementor-tabs-view-icon_horizontal .elementor-tab-title:hover,
        .elementor-widget-tabs.elementor-tabs-view-icon_horizontal .elementor-tab-title.active,
        .elementor-widget-tabs.elementor-tabs-view-icon_vertical .elementor-tab-title:hover,
        .elementor-widget-tabs.elementor-tabs-view-icon_vertical .elementor-tab-title.active {
            color: #ffffff;
        }

        .elementor-widget-tabs.elementor-tabs-view-icon_horizontal .elementor-tab-title::after,
        .elementor-widget-tabs.elementor-tabs-view-icon_vertical .elementor-tab-title::after {
            background-color: #232c3d;
        }

        .elementor-widget-tabs.elementor-tabs-view-icon_horizontal .elementor-tabs-wrapper .elementor-tab-title::before {
            border-color: #232c3d transparent transparent transparent;
        }

        .elementor-widget-tabs.elementor-tabs-view-icon_vertical .elementor-tabs-wrapper .elementor-tab-title::before {
            border-color: transparent transparent transparent #232c3d;
        }

        .elementor-counter .elementor-counter-number-wrapper {
            font-style: normal;
            font-weight: 500;
            font-size: 28px;
            line-height: 1.3;
            font-family: Archivo, sans-serif;
            color: #232c3d;
        }

        @media (min-width: 1200px) {
            .elementor-counter .elementor-counter-number-wrapper {
                font-size: 46px;
            }
        }

        .elementor-counter .elementor-counter-title,
        .circle-counter__number {
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 1.44;
            font-family: Archivo, sans-serif;
            color: #232c3d;
        }

        .adv-carousel__item-title {
            font-style: normal;
            font-weight: 500;
            font-size: 22px;
            line-height: 1.19;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            color: #232c3d;
        }

        .adv-carousel__item-text {
            font-style: normal;
            font-weight: 500;
            font-size: 18px;
            line-height: 1.44;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            color: #232c3d;
        }

        @media (min-width: 980px) {
            .adv-carousel[data-slider_options*="\"desktop\":1"] .adv-carousel__item-title {
                font-size: 64px;
            }
        }

        @media (min-width: 980px) {

            .adv-carousel__item-title,
            .adv-carousel__item-text {
                color: #ffffff;
            }
        }

        .jet-posts__inner-box .post__date-circle .post__date-link {
            background-color: #f0f4f7;
        }

        .jet-posts__inner-box .post__date-circle .post__date-link:hover {
            background-color: #03ABFF;
        }

        .jet-posts__inner-box .post__date-link:hover .post__date-day,
        .jet-posts__inner-box .post__date-link:hover .post__date-month {
            color: #ffffff;
        }

        .jet-animated-box-icon-inner {
            background-color: #00D1FF;
            color: #ffffff;
        }

        .jet-animated-box__back .jet-animated-box-icon-inner {
            background-color: #ffffff;
        }

        .jet-animated-box__back .jet-animated-box-icon-inner i {
            color: #03ABFF;
        }

        .jet-animated-box .jet-animated-box__title,
        .jet-animated-box .jet-animated-box__subtitle {
            color: #232c3d;
        }

        .jet-animated-box .jet-animated-box__title {
            font-style: normal;
            font-weight: 500;
            font-size: 18px;
            line-height: 1.45;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
        }

        .jet-animated-box .jet-animated-box__subtitle {
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 1.44;
            font-family: Archivo, sans-serif;
            letter-spacing: 0em;
            color: #232c3d;
        }

        .jet-animated-box .jet-animated-box__description {
            color: #969ba2;
            font-size: 14px;
        }

        .jet-animated-box .jet-animated-box__back {
            background-color: #B3E1F2;
        }

        .jet-animated-box .jet-animated-box__back .jet-animated-box__title,
        .jet-animated-box .jet-animated-box__back .jet-animated-box__subtitle,
        .jet-animated-box .jet-animated-box__back .jet-animated-box__description {
            color: #ffffff;
        }

        .jet-animated-box .jet-animated-box__button--back {
            color: #232c3d;
            background-color: #ffffff;
        }

        .jet-animated-box .jet-animated-box__button--back:hover {
            color: #ffffff;
            background-color: #232c3d;
        }

        .elementor-button.jet-download {
            border-color: #e3e9ee;
            background-color: transparent;
            color: #03ABFF;
        }

        .elementor-button.jet-download:hover {
            border-color: #03ABFF;
            color: #ffffff;
            background-color: #03ABFF;
        }

        .invert .elementor-icon,
        .invert .elementor-view-framed .elementor-icon {
            color: #ffffff;
            border-color: #959aa1;
        }

        .elementor-widget-icon-list .elementor-icon-list-text {
            font-weight: 500;
            font-size: 16px;
        }

        .elementor-toggle-item .elementor-tab-title {
            font-weight: 500;
        }

        .elementor-toggle .elementor-tab-title .elementor-toggle-icon,
        .elementor-accordion .elementor-tab-title .elementor-accordion-icon {
            color: #03ABFF;
        }

        .tparrows {
            color: #232c3d;
            background-color: #ffffff;
        }

        .tparrows:hover {
            color: #ffffff;
            background-color: #03ABFF;
        }

        .tp-bullet {
            background-color: rgba(35, 44, 61, 0.2);
        }

        .tp-bullet.selected,
        .tp-bullet:hover {
            background-color: #232c3d;
        }

        .contact-block.contact-block--header .contact-block__text,
        .contact-block.contact-block--header a[href^="tel:"] {
            color: #FF9000
        }

        .contact-block.contact-block--header a[href^="tel:"]:hover {
            color: #232c3d;
        }

        .btn.btn-accent-1,
        .btn.btn-primary,
        .btn-downloader,
        a[href*="?media_dl="] {
            color: #ffffff;
            background-color: #03ABFF;
        }

        .btn.btn-accent-1:hover,
        .btn.btn-primary:hover,
        .btn-downloader:hover,
        a[href*="?media_dl="]:hover {
            background-color: #305893;
        }

        .btn.btn-accent-1:active,
        .btn.btn-primary:active {
            background-color: rgb(47, 110, 191);
        }

        .btn.btn-accent-2 {
            color: #ffffff;
            background-color: #03ABFF;
        }

        .btn.btn-accent-2:hover {
            color: #ffffff;
            background-color: #305893;
        }

        .btn.btn-accent-2:active {
            background-color: rgb(47, 110, 191);
        }

        .header-btn.btn.btn-accent-1 {
            color: #232c3d;
            background-color: #00D1FF;
        }

        .header-btn.btn.btn-accent-1 i {
            color: #03ABFF;
        }

        .header-btn.btn.btn-accent-1:hover {
            background-color: #03ABFF;
            color: #ffffff;
        }

        .header-btn.btn.btn-accent-1:hover i {
            color: #ffffff;
        }

        .contact-block__icon {
            color: #969ba2;
        }

        .invert .contact-block__icon {
            color: #ffffff;
        }

        @media (min-width: 600px) {

            .main-navigation.main-menu-style-2 .menu>li>a:hover,
            .main-navigation.main-menu-style-2 .menu>li.menu-hover>a,
            .main-navigation.main-menu-style-2 .menu>li.tm-mega-menu-hover>a,
            .main-navigation.main-menu-style-2 .menu>li.current_page_item>a,
            .main-navigation.main-menu-style-2 .menu>li.current_page_ancestor>a,
            .main-navigation.main-menu-style-2 .menu>li.current-menu-item>a,
            .main-navigation.main-menu-style-2 .menu>li.current-menu-ancestor>a {
                color: #ffffff;
                background-color: #305893;
            }
        }

        .elementor-button:hover {
            color: #ffffff;
            background-color: #305893;
        }

        .elementor-widget-icon-box .elementor-icon-box-title {
            color: #03ABFF;
        }

        .elementor-icon,
        .elementor-view-framed .elementor-icon {
            color: #969ba2;
        }

        .elementor-icon:hover {
            color: #03ABFF;
        }

        .elementor-element.elementor-button-warning .elementor-button {
            color: #232c3d;
            background-color: #00D1FF;
        }

        .elementor-element.elementor-button-warning .elementor-button:hover {
            color: #ffffff;
            background-color: #03ABFF;
        }

        .elementor-element.elementor-button-warning .elementor-button:active {
            background-color: rgb(47, 110, 191);
        }

        .elementor-widget-icon-list .elementor-icon-list-text {
            color: #03ABFF;
        }

        .elementor-view-stacked .elementor-icon {
            color: #969ba2;
            background-color: #ffffff;
        }

        .elementor-element.elementor-button-info .elementor-button:hover {
            color: #ffffff;
            background-color: #d2d2d3;
        }

        .jet-animated-box .jet-animated-box__back {
            background-color: #B3E1F2;
        }

        .jet-animated-box .jet-animated-box__back .jet-animated-box__title,
        .jet-animated-box .jet-animated-box__back .jet-animated-box__subtitle,
        .jet-animated-box .jet-animated-box__back .jet-animated-box__description {
            color: #232c3d;
        }

        .team-listing_photo__overflow .btn.btn-primary {
            background-color: #00D1FF;
            color: #232c3d;
        }

        .team-listing_photo__overflow .btn.btn-primary:hover {
            background-color: #03ABFF;
            color: #ffffff;
        }

        .jet-elements .featured-table .pricing-table__heading {
            border-color: #00D1FF;
            background-color: #00D1FF;
        }

        .pricing-table .pricing-table__price-val,
        .pricing-table .pricing-table__price-prefix,
        .pricing-table .pricing-table__price-suffix {
            color: #03ABFF;
        }

        .jet-elements .featured-table .pricing-table__heading,
        .jet-elements .featured-table .pricing-table__subtitle,
        .jet-elements .featured-table .pricing-table__price {
            color: #969ba2;
        }

        .jet-elements .featured-table .pricing-table__title {
            color: #232c3d;
        }

        .wpcf7-submit,
        .post-password-form label+input,
        .wpcf7-submit.btn-accent-2 {
            color: #ffffff;
            background-color: #03ABFF;
        }

        .wpcf7-submit:hover,
        .post-password-form label+input:hover {
            background-color: #305893;
        }

        .wpcf7-submit.btn-accent-2:hover {
            color: #ffffff;
            background-color: #305893;
        }

        body .booked-calendar-shortcode-wrap .booked-calendar tbody tr.entryBlock .timeslot-people .button:hover,
        body .booked-modal .bm-window .booked-form .field>input.button:hover {
            color: #ffffff;
            background-color: #305893 !important;
        }

        body .booked-modal .bm-window .field button:hover {
            color: #ffffff !important;
            background-color: #232c3d !important;
        }

        .cherry-popup.invert .cherry-popup-title h4,
        .cherry-popup.invert .cherry-popup-content,
        .cherry-popup.invert .cherry-popup-check .label {
            color: #232c3d;
        }

        /* #ToTop button */
        #toTop {
            color: #ffffff;
            background-color: #03ABFF;
        }

        #toTop:hover {
            background-color: #305893;
        }
    </style>
    <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Archivo%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;ver=4.9.8' type='text/css' media='all' />
    <script type='text/javascript' src='wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1'></script>
    <script type='text/javascript' src='wp-content/plugins/rev-slider/public/assets/js/jquery.themepunch.tools.minc225.js?ver=5.4.1'></script>
    <script type='text/javascript' src='wp-content/plugins/rev-slider/public/assets/js/jquery.themepunch.revolution.minc225.js?ver=5.4.1'></script>
    <link rel='https://api.w.org/' href='wp-json/index.html' />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 4.9.8" />
    <meta name="generator" content="WooCommerce 3.4.1" />
    <link rel="canonical" href="index.html" />
    <link rel='shortlink' href='index.html' />
    <link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed575a.json?url=https%3A%2F%2Fld-wp.template-help.com%2Fwordpress_62555%2F4%2Fdefault%2F" />
    <link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed7b80?url=https%3A%2F%2Fld-wp.template-help.com%2Fwordpress_62555%2F4%2Fdefault%2F&amp;format=xml" />
    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
    <meta name="generator" content="Powered by Slider Revolution 5.4.1 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <link rel="icon" href="wp-content/uploads/2018/03/cropped-Fav-78x78.png" sizes="32x32" />
    <link rel="icon" href="wp-content/uploads/2018/03/cropped-Fav-248x248.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="wp-content/uploads/2018/03/cropped-Fav-248x248.png" />
    <meta name="msapplication-TileImage" content="https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2018/03/cropped-Fav-286x286.png" />
    <!-- Smartsupp Live Chat script -->
    <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = '78cd1e57f0bbf73955752c04de1ca71c523c0879';
        window.smartsupp || (function(d) {
            var s, c, o = smartsupp = function() {
                o._.push(arguments)
            };
            o._ = [];
            s = d.getElementsByTagName('script')[0];
            c = d.createElement('script');
            c.type = 'text/javascript';
            c.charset = 'utf-8';
            c.async = true;
            c.src = 'https://www.smartsuppchat.com/loader.js?';
            s.parentNode.insertBefore(c, s);
        })(document);
    </script>
</head>

<body class="home page-template-default page page-id-278 woocommerce-no-js header-layout-fullwidth content-layout-fullwidth footer-layout-fullwidth blog-default position-fullwidth sidebar-1-3 header-style-2 footer-style-1  skin-default elementor-default elementor-page elementor-page-278">
    <div class="page-preloader-cover">
        <svg class="preloader-icon" width="34" height="38" viewBox="0 0 34 38">
            <path class="preloader-path" stroke-dashoffset="0" d="M29.437 8.114L19.35 2.132c-1.473-.86-3.207-.86-4.68 0L4.153 8.114C2.68 8.974 1.5 10.56 1.5 12.28v11.964c0 1.718 1.22 3.306 2.69 4.165l10.404 5.98c1.47.86 3.362.86 4.834 0l9.97-5.98c1.472-.86 2.102-2.45 2.102-4.168V12.28c0-1.72-.59-3.306-2.063-4.166z">
            </path>
        </svg>
    </div>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
        <header id="masthead" class="site-header style-2 header-btn-visibility" role="banner">
            <div class="mobile-panel invert">
                <div class="mobile-panel__inner">
                    <button class="main-menu-toggle menu-toggle" aria-controls="main-menu" aria-expanded="false"><span class="menu-toggle-box"><span class="menu-toggle-inner"></span></span></button>
                    <div class="header-components">
                        <div class="search-form__toggle"></div>
                        <div class="site-header-cart menu navbar-header-cart menu">
                            <div class="site-header-cart__wrapper">
                                <div class="cart-contents" title="View your shopping cart">
                                    <i class="nc-icon-mini shopping_cart-modern"></i>
                                    <span class="count">0</span>
                                </div>
                                <div class="shopping_cart-dropdown-wrap products_in_cart_0">
                                    <div class="shopping_cart-header">
                                        <h5>My Cart</h5>
                                    </div>
                                    <div class="widget woocommerce widget_shopping_cart">
                                        <div class="widget_shopping_cart_content"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-search">
                    <div id="cherry-search-wrapper-1" class="cherry-search-wrapper" data-args='{"change_standard_search":"true","search_button_icon":"","search_button_text":"Search","search_placeholder_text":"Enter keyword","search_source":["any"],"exclude_source_category":"projects","exclude_source_tags":"","exclude_source_post_format":"","limit_query":"5","results_order_by":"date","results_order":"asc","title_visible":"true","limit_content_word":"45","author_visible":"false","author_prefix":"by","thumbnail_visible":"false","enable_scroll":"true","result_area_height":"500","more_button":"View more","negative_search":"Sorry, but nothing matched your search terms.","server_error":"Sorry, but we cannot handle your search query now. Please, try again later!","id":1}'>
                        <div class="cherry-search ">
                            <form role="search" method="get" class="search-form cherry-search__form " action="https://ld-wp.template-help.com/wordpress_62555/4/default">
                                <label class="cherry-search__label">
                                    <span class="screen-reader-text">Search for:</span>
                                    <input type="search" class="search-field cherry-search__field search-form__field" placeholder="Enter keyword&hellip;" value="" name="s" autocomplete="off" />
                                    <input type="hidden" value='{"search_source":["any"],"results_order":"asc","results_order_by":"date","exclude_source_category":"projects"}' name="settings" />

                                </label>
                                <button type="submit" class="search-submit cherry-search__submit btn btn-primary">

                                    <span class="cherry-search__submite_text">Search</span>
                                </button>


                            </form>
                            <div class="cherry-search__results-list">
                                <ul></ul>
                                <div class="cherry-search__spinner_holder">
                                    <div class="cherry-search__spinner">
                                        <div class="rect1"></div>
                                        <div class="rect2"></div>
                                        <div class="rect3"></div>
                                        <div class="rect4"></div>
                                        <div class="rect5"></div>
                                    </div>
                                </div>
                                <span class="cherry-search__message"></span>
                            </div>

                        </div>
                    </div><span class="search-form__close"></span>
                </div>
            </div>

            <div class="top-panel invert">
                <div class="container">
                    <div class="top-panel__container">
                        <div class="contact-block contact-block--header_top_panel">
                            <div class="contact-block__inner">
                                <div class="contact-block__item contact-block__item--icon"><i class="contact-block__icon nc-icon-outline ui-1_email-84"></i>
                                    <div class="contact-block__value-wrap"><span class="contact-block__text"><a href="mailto:#">cristian.mendez@nubexst.com</a></span></div>
                                </div>
                                <div class="contact-block__item contact-block__item--icon"><i class="contact-block__icon nc-icon-outline location_pin"></i>
                                    <div class="contact-block__value-wrap"><span class="contact-block__text">Ubicación: cra 101 # 82- 57</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="top-panel__wrap-items">
                            <!--				<div class="top-panel__menus">
                                                                                                                                                                                                <div class="social-list social-list--header social-list--icon"><ul id="social-list-1" class="social-list__items inline-list"><li id="menu-item-218" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-218"><a href="https://www.facebook.com/zemezlab/"><span class="screen-reader-text">Facebook</span></a></li>
                                <li id="menu-item-219" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-219"><a href="https://twitter.com/zemezlab"><span class="screen-reader-text">Twitter</span></a></li>
                                <li id="menu-item-220" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-220"><a href="https://www.youtube.com/channel/UCPW43un8VFXHe9LxKpR_2Hg"><span class="screen-reader-text">Youtube</span></a></li>
                                <li id="menu-item-221" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-221"><a href="https://www.instagram.com/zemezlab"><span class="screen-reader-text">Instagram</span></a></li>
                                </ul></div>				</div>-->
                        </div>
                    </div>
                </div>
            </div><!-- .top-panel -->

            <div class="header-container">
                <div class="header-container_wrap container">

                    <div class="header-row__flex">
                        <div class="site-branding">
                            <div class="site-logo site-logo--image"><a class="site-logo__link" href="index.html" rel="home"><img src="wp-content/themes/johnnygo/assets/images/logo.png" alt="JohnnyGo" class="site-link__img" srcset="https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/themes/johnnygo/assets/images/retina-logo.png 2x"></a></div>
                        </div>

                        <div class="header-row__flex header-components__contact-button">
                            <div class="contact-block contact-block--header">
                                <div class="contact-block__inner">
                                    <div class="contact-block__item contact-block__item--icon">
                                        <div class="contact-block__value-wrap"></div>
                                    </div>
                                    <div class="contact-block__item contact-block__item--icon"><i class="contact-block__icon nc-icon-outline tech_mobile-camera"></i>
                                        <div class="contact-block__value-wrap"><span class="contact-block__label">Servicio al Cliente</span><span class="contact-block__text"><a href="tel:#">+ (57) 3112363016</a></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="header-nav-wrapper">
                        <nav id="site-navigation" class="main-navigation main-menu-style-1" role="navigation"><input class="tm-mega-menu-mobile-trigger-box custom-menu" id="trigger-main-menu" type="checkbox" checked>
                            <ul id="main-menu" class="tm-mega-menu menu tm-mega-no-js tm-mega-menu mega-menu-direction-horizontal total-columns-12" data-effect="fade-in" data-direction="horizontal" data-parent-selector=".header-container_wrap" data-mobile-trigger="768" data-duration="300" data-mobile-button="1">
                                <li id="menu-item-274" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-274 tm-mega-menu-top-item item-submenu-position-fullwidth">
                                    <a href="index.php">Inicio</a>
                                </li>
                                <li id="menu-item-276" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-276 tm-mega-menu-top-item item-submenu-position-fullwidth tm-mega-menu-has-children" data-sub-position="fullwidth" data-sub-type="megamenu" data-width-fullscreen="100%" data-width-desktop="100%" data-width-tablet="100%">
                                    <a href="about/index.html">Planes</a>

                                </li>
                                <li id="menu-item-3668" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3668 tm-mega-menu-top-item item-submenu-position-fullwidth tm-mega-menu-has-children" data-sub-position="fullwidth" data-sub-type="megamenu" data-width-fullscreen="100%" data-width-desktop="100%" data-width-tablet="100%">
                                    <a href="about/index_1.html">Facturación Electrónica</a>



                                <li id="menu-item-2424" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2424 tm-mega-menu-top-item item-submenu-position-fullwidth tm-mega-menu-has-children" data-sub-position="fullwidth" data-sub-type="standard" data-width-fullscreen="100%" data-width-desktop="100%" data-width-tablet="100%">
                                    <a href="about/index_3.html">Contacto</a>

                        </nav><!-- #site-navigation -->
                        <!--	<div class="header-components header-components__search-cart"><div class="search-form__toggle"></div><div class="site-header-cart menu navbar-header-cart menu">
                <div class="site-header-cart__wrapper">
                                        <div class="cart-contents" title="View your shopping cart">
                                <i class="nc-icon-mini shopping_cart-modern"></i>
                                <span class="count">0</span>
                        </div>
                                <div class="shopping_cart-dropdown-wrap products_in_cart_0">
                                <div class="shopping_cart-header">
                                        <h5>My Cart</h5>
                                </div>
                                <div class="widget woocommerce widget_shopping_cart"><div class="widget_shopping_cart_content"></div></div>		</div>
                </div>
        </div>
        </div>-->

                        <div class="header-search">
                            <div id="cherry-search-wrapper-2" class="cherry-search-wrapper" data-args='{"change_standard_search":"true","search_button_icon":"","search_button_text":"Search","search_placeholder_text":"Enter keyword","search_source":["any"],"exclude_source_category":"projects","exclude_source_tags":"","exclude_source_post_format":"","limit_query":"5","results_order_by":"date","results_order":"asc","title_visible":"true","limit_content_word":"45","author_visible":"false","author_prefix":"by","thumbnail_visible":"false","enable_scroll":"true","result_area_height":"500","more_button":"View more","negative_search":"Sorry, but nothing matched your search terms.","server_error":"Sorry, but we cannot handle your search query now. Please, try again later!","id":2}'>
                                <div class="cherry-search ">
                                    <form role="search" method="get" class="search-form cherry-search__form " action="https://ld-wp.template-help.com/wordpress_62555/4/default">
                                        <label class="cherry-search__label">
                                            <span class="screen-reader-text">Search for:</span>
                                            <input type="search" class="search-field cherry-search__field search-form__field" placeholder="Enter keyword&hellip;" value="" name="s" autocomplete="off" />
                                            <input type="hidden" value='{"search_source":["any"],"results_order":"asc","results_order_by":"date","exclude_source_category":"projects"}' name="settings" />

                                        </label>
                                        <button type="submit" class="search-submit cherry-search__submit btn btn-primary">

                                            <span class="cherry-search__submite_text">Search</span>
                                        </button>


                                    </form>
                                    <div class="cherry-search__results-list">
                                        <ul></ul>
                                        <div class="cherry-search__spinner_holder">
                                            <div class="cherry-search__spinner">
                                                <div class="rect1"></div>
                                                <div class="rect2"></div>
                                                <div class="rect3"></div>
                                                <div class="rect4"></div>
                                                <div class="rect5"></div>
                                            </div>
                                        </div>
                                        <span class="cherry-search__message"></span>
                                    </div>

                                </div>
                            </div><span class="search-form__close"></span>
                        </div>
                    </div>

                </div>
            </div><!-- .header-container -->
        </header><!-- #masthead -->

        <div id="content" class="site-content">



            <div class="site-content_wrap">


                <div class="row">

                    <div id="primary" class="col-xs-12">


                        <main id="main" class="site-main" role="main">

                            <article id="post-278" class="post-278 page type-page status-publish hentry no-thumb">


                                <header class="entry-header">
                                    <h1 class="entry-title screen-reader-text">Inicio</h1>
                                </header><!-- .entry-header -->

                                <div class="entry-content">
                                    <style id="elementor-post-1365">
                                        .elementor-1365 .elementor-element.elementor-element-pjwxrzm .elementor-spacer-inner {
                                            height: 20px;
                                        }

                                        .elementor-1365 .elementor-element.elementor-element-87orik4 .elementor-icon-list-icon {
                                            width: 14px;
                                        }

                                        .elementor-1365 .elementor-element.elementor-element-87orik4 .elementor-icon-list-icon i {
                                            font-size: 14px;
                                        }

                                        .elementor-1365 .elementor-element.elementor-element-j9vn7nk .elementor-spacer-inner {
                                            height: 20px;
                                        }

                                        .elementor-1365 .elementor-element.elementor-element-180mo0o .elementor-spacer-inner {
                                            height: 40px;
                                        }

                                        .elementor-1365 .elementor-element.elementor-element-1cnjhwh .elementor-spacer-inner {
                                            height: 32px;
                                        }

                                        .elementor-1365 .elementor-element.elementor-element-jgcjxho .elementor-spacer-inner {
                                            height: 32px;
                                        }

                                        .elementor-1365 .elementor-element.elementor-element-m1nluic>.elementor-widget-container {
                                            padding: 0px 0px 12px 0px;
                                            border-radius: 2px 2px 2px 2px;
                                        }

                                        @media(max-width:767px) {
                                            .elementor-1365 .elementor-element.elementor-element-m1nluic>.elementor-widget-container {
                                                padding: 0px 20px 0px 20px;
                                            }
                                        }
                                    </style>
                                    <style id="elementor-post-1364">
                                        .elementor-1364 .elementor-element.elementor-element-jpleoca .elementor-spacer-inner {
                                            height: 20px;
                                        }

                                        .elementor-1364 .elementor-element.elementor-element-ioulsak .elementor-icon-list-icon {
                                            width: 14px;
                                        }

                                        .elementor-1364 .elementor-element.elementor-element-ioulsak .elementor-icon-list-icon i {
                                            font-size: 14px;
                                        }

                                        .elementor-1364 .elementor-element.elementor-element-ltgtjym .elementor-spacer-inner {
                                            height: 20px;
                                        }

                                        .elementor-1364 .elementor-element.elementor-element-tnwnfok .elementor-spacer-inner {
                                            height: 40px;
                                        }

                                        .elementor-1364 .elementor-element.elementor-element-jiohisd .elementor-spacer-inner {
                                            height: 32px;
                                        }

                                        .elementor-1364 .elementor-element.elementor-element-ggglymj .elementor-spacer-inner {
                                            height: 32px;
                                        }

                                        .elementor-1364 .elementor-element.elementor-element-wslmzlc>.elementor-widget-container {
                                            padding: 0px 0px 12px 0px;
                                            border-radius: 2px 2px 2px 2px;
                                        }

                                        @media(max-width:767px) {
                                            .elementor-1364 .elementor-element.elementor-element-wslmzlc>.elementor-widget-container {
                                                padding: 0px 20px 0px 20px;
                                            }
                                        }
                                    </style>
                                    <style id="elementor-post-1360">
                                        .elementor-1360 .elementor-element.elementor-element-gkmxdou .elementor-spacer-inner {
                                            height: 40px;
                                        }

                                        .elementor-1360 .elementor-element.elementor-element-pvibuif .elementor-spacer-inner {
                                            height: 32px;
                                        }

                                        .elementor-1360 .elementor-element.elementor-element-aejuadq .elementor-spacer-inner {
                                            height: 32px;
                                        }

                                        .elementor-1360 .elementor-element.elementor-element-cjotymx>.elementor-widget-container {
                                            padding: 0px 0px 12px 0px;
                                            border-radius: 2px 2px 2px 2px;
                                        }

                                        @media(max-width:767px) {
                                            .elementor-1360 .elementor-element.elementor-element-cjotymx>.elementor-widget-container {
                                                padding: 0px 20px 0px 20px;
                                            }
                                        }
                                    </style>
                                    <style id="elementor-post-904">
                                        .elementor-904 .elementor-element.elementor-element-royzcsu .elementor-spacer-inner {
                                            height: 40px;
                                        }

                                        .elementor-904 .elementor-element.elementor-element-cavnozv .elementor-spacer-inner {
                                            height: 32px;
                                        }

                                        .elementor-904 .elementor-element.elementor-element-bjjsaih .elementor-spacer-inner {
                                            height: 32px;
                                        }

                                        .elementor-904 .elementor-element.elementor-element-dwydtsv>.elementor-widget-container {
                                            padding: 0px 0px 12px 0px;
                                            border-radius: 2px 2px 2px 2px;
                                        }

                                        @media(max-width:767px) {
                                            .elementor-904 .elementor-element.elementor-element-dwydtsv>.elementor-widget-container {
                                                padding: 0px 20px 0px 20px;
                                            }
                                        }
                                    </style>
                                    <div data-elementor-type="post" data-elementor-id="278" class="elementor elementor-278" data-elementor-settings="[]">
                                        <div class="elementor-inner">
                                            <div class="elementor-section-wrap">
                                                <section class="elementor-element elementor-element-038b40c invert elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="038b40c" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-element elementor-element-dfc040d elementor-column elementor-col-100 elementor-top-column" data-id="dfc040d" data-element_type="column">
                                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <section class="elementor-element elementor-element-6b38680 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="6b38680" data-element_type="section">
                                                                            <div class="elementor-container elementor-column-gap-default">
                                                                                <div class="elementor-row">
                                                                                    <div class="elementor-element elementor-element-d437805 elementor-column elementor-col-50 elementor-inner-column" data-id="d437805" data-element_type="column">
                                                                                        <div class="elementor-column-wrap  elementor-element-populated">
                                                                                            <div class="elementor-widget-wrap">
                                                                                                <div class="elementor-element elementor-element-86e6a9b elementor-widget elementor-widget-heading" data-id="86e6a9b" data-element_type="widget" data-widget_type="heading.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <h2 class="elementor-heading-title elementor-size-default">Software de Factutación Electrónica</h2>
                                                                                                        <h5 class="elementor-heading-title elementor-size-default">Software en la nube que te ayudará a administrar tu negocio de una forma más sencilla y eficiente.</h5>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-a9dd064 elementor-widget elementor-widget-text-editor" data-id="a9dd064" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                                                            <p>Llamenos:+(031)7589186</p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-b366555 elementor-widget elementor-widget-spacer" data-id="b366555" data-element_type="widget" data-widget_type="spacer.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-spacer">
                                                                                                            <div class="elementor-spacer-inner"></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-9a83f17 elementor-widget elementor-widget-heading" data-id="9a83f17" data-element_type="widget" data-widget_type="heading.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-c323589 elementor-column elementor-col-50 elementor-inner-column" data-id="c323589" data-element_type="column">
                                                                                        <div class="elementor-column-wrap">
                                                                                            <div class="elementor-widget-wrap">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </section>
                                                                        <div class="elementor-element elementor-element-7d27fc6 elementor-widget elementor-widget-spacer" data-id="7d27fc6" data-element_type="widget" data-widget_type="spacer.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-spacer">
                                                                                    <div class="elementor-spacer-inner"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <section class="elementor-element elementor-element-bab6a82 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="bab6a82" data-element_type="section">
                                                                            <div class="elementor-container elementor-column-gap-default">
                                                                                <div class="elementor-row">
                                                                                    <div class="elementor-element elementor-element-8a16bf8 elementor-column elementor-col-33 elementor-inner-column" data-id="8a16bf8" data-element_type="column">
                                                                                        <div class="elementor-column-wrap  elementor-element-populated">
                                                                                            <div class="elementor-widget-wrap">
                                                                                                <div class="elementor-element elementor-element-f9f1635 elementor-widget elementor-widget-jet-animated-box" data-id="f9f1635" data-element_type="widget" data-widget_type="jet-animated-box.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-jet-animated-box jet-elements">
                                                                                                            <div class="jet-animated-box jet-box-effect-1">
                                                                                                                <div class="jet-animated-box__front">
                                                                                                                    <div class="jet-animated-box__overlay"></div>
                                                                                                                    <div class="jet-animated-box__inner">
                                                                                                                        <div class="jet-animated-box__icon jet-animated-box__icon--front"><img src="wp-content/uploads/2018/03/img1.png" /></div>
                                                                                                                        <div class="jet-animated-box__content">
                                                                                                                            <h3 class="jet-animated-box__title jet-animated-box__title--front">SEGUIMIENTOS</h3>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="jet-animated-box__back">
                                                                                                                    <div class="jet-animated-box__overlay"></div>
                                                                                                                    <div class="jet-animated-box__inner">
                                                                                                                        <div class="jet-animated-box__content">
                                                                                                                            <h3 class="jet-animated-box__title jet-animated-box__title--back"> SEGUIMIENTOS</h3>
                                                                                                                            <p class="jet-animated-box__description jet-animated-box__description--back">Haz seguimiento en línea de los documentos electrónicos emitidos, validando su recepción, aprobación por la DIAN y adquiriente</p>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-56843bb elementor-widget elementor-widget-spacer" data-id="56843bb" data-element_type="widget" data-widget_type="spacer.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-spacer">
                                                                                                            <div class="elementor-spacer-inner"></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-10bd126 elementor-column elementor-col-33 elementor-inner-column" data-id="10bd126" data-element_type="column">
                                                                                        <div class="elementor-column-wrap  elementor-element-populated">
                                                                                            <div class="elementor-widget-wrap">
                                                                                                <div class="elementor-element elementor-element-5d163ef elementor-widget elementor-widget-jet-animated-box" data-id="5d163ef" data-element_type="widget" data-widget_type="jet-animated-box.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-jet-animated-box jet-elements">
                                                                                                            <div class="jet-animated-box jet-box-effect-1">
                                                                                                                <div class="jet-animated-box__front">
                                                                                                                    <div class="jet-animated-box__overlay"></div>
                                                                                                                    <div class="jet-animated-box__inner">
                                                                                                                        <div class="jet-animated-box__icon jet-animated-box__icon--front"><img src="wp-content/uploads/2018/03/img2.png" /></div>
                                                                                                                        <div class="jet-animated-box__content">
                                                                                                                            <h3 class="jet-animated-box__title jet-animated-box__title--front">PROCESOS</h3>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="jet-animated-box__back">
                                                                                                                    <div class="jet-animated-box__overlay"></div>
                                                                                                                    <div class="jet-animated-box__inner">
                                                                                                                        <div class="jet-animated-box__content">
                                                                                                                            <h3 class="jet-animated-box__title jet-animated-box__title--back">PROCESOS</h3>
                                                                                                                            <p class="jet-animated-box__description jet-animated-box__description--back">Emite tus documentos electrónicos y envíalos automáticamente.</p>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-92e7be6 elementor-widget elementor-widget-spacer" data-id="92e7be6" data-element_type="widget" data-widget_type="spacer.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-spacer">
                                                                                                            <div class="elementor-spacer-inner"></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-eaadf93 elementor-column elementor-col-33 elementor-inner-column" data-id="eaadf93" data-element_type="column">
                                                                                        <div class="elementor-column-wrap  elementor-element-populated">
                                                                                            <div class="elementor-widget-wrap">
                                                                                                <div class="elementor-element elementor-element-b492522 elementor-widget elementor-widget-jet-animated-box" data-id="b492522" data-element_type="widget" data-widget_type="jet-animated-box.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-jet-animated-box jet-elements">
                                                                                                            <div class="jet-animated-box jet-box-effect-1">
                                                                                                                <div class="jet-animated-box__front">
                                                                                                                    <div class="jet-animated-box__overlay"></div>
                                                                                                                    <div class="jet-animated-box__inner">
                                                                                                                        <div class="jet-animated-box__icon jet-animated-box__icon--front"><img src="wp-content/uploads/2018/03/img3.png" /></div>
                                                                                                                        <div class="jet-animated-box__content">
                                                                                                                            <h3 class="jet-animated-box__title jet-animated-box__title--front">CONSULTA EL ESTADO DE TUS DOCUMENTOS</h3>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="jet-animated-box__back">
                                                                                                                    <div class="jet-animated-box__overlay"></div>
                                                                                                                    <div class="jet-animated-box__inner">
                                                                                                                        <div class="jet-animated-box__content">
                                                                                                                            <h3 class="jet-animated-box__title jet-animated-box__title--back">CONSULTA EL ESTADO DE TUS DOCUMENTOS</h3>
                                                                                                                            <p class="jet-animated-box__description jet-animated-box__description--back">Detalla el estado de tus documentos, si fue aceptado o rechazado por la DIAN y el adquiriente</p>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </section>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section class="elementor-element elementor-element-nt1x0hn elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="nt1x0hn" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-element elementor-element-5mha4yj elementor-column elementor-col-50 elementor-top-column" data-id="5mha4yj" data-element_type="column">
                                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-3384d6c elementor-widget elementor-widget-heading" data-id="3384d6c" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h3 class="elementor-heading-title elementor-size-default">NUBEX ST</h3>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-a9c784f elementor-widget elementor-widget-spacer" data-id="a9c784f" data-element_type="widget" data-widget_type="spacer.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-spacer">
                                                                                    <div class="elementor-spacer-inner"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <section class="elementor-element elementor-element-7b5caee elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="7b5caee" data-element_type="section">
                                                                            <div class="elementor-container elementor-column-gap-default">
                                                                                <div class="elementor-row">
                                                                                    <div class="elementor-element elementor-element-a0fee40 elementor-column elementor-col-50 elementor-inner-column" data-id="a0fee40" data-element_type="column">
                                                                                        <div class="elementor-column-wrap  elementor-element-populated">
                                                                                            <div class="elementor-widget-wrap">
                                                                                                <div class="elementor-element elementor-element-8799a8b elementor-widget elementor-widget-image" data-id="8799a8b" data-element_type="widget" data-widget_type="image.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-image">
                                                                                                            <img width="360" height="270" src="wp-content/uploads/2018/03/homepage-section-2-img-1-360x270.png" class="attachment-johnnygo-thumb-360-270 size-johnnygo-thumb-360-270" alt="" sizes="(max-width: 360px) 100vw, 360px" /> </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-065ae22 elementor-widget elementor-widget-heading" data-id="065ae22" data-element_type="widget" data-widget_type="heading.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-84569a8 elementor-widget elementor-widget-text-editor" data-id="84569a8" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                                                            <p><b>Nubex ST</b> en los empresarios que aún no cuentan con una solución para emitir <b>Facturas Electrónicas</b> o con grandes recursos económicos para realizar una inversión en Software Contable y Administrativo.</p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-52915e0 elementor-widget elementor-widget-spacer" data-id="52915e0" data-element_type="widget" data-widget_type="spacer.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-spacer">
                                                                                                            <div class="elementor-spacer-inner"></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-5bcdf38 elementor-column elementor-col-50 elementor-inner-column" data-id="5bcdf38" data-element_type="column">
                                                                                        <div class="elementor-column-wrap  elementor-element-populated">
                                                                                            <div class="elementor-widget-wrap">
                                                                                                <div class="elementor-element elementor-element-4a4487a elementor-widget elementor-widget-image" data-id="4a4487a" data-element_type="widget" data-widget_type="image.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-image">
                                                                                                            <img width="360" height="270" src="wp-content/uploads/2018/03/homepage-section-2-img-2-360x270.png" class="attachment-johnnygo-thumb-360-270 size-johnnygo-thumb-360-270" alt="" sizes="(max-width: 360px) 100vw, 360px" /> </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-036b675 elementor-widget elementor-widget-heading" data-id="036b675" data-element_type="widget" data-widget_type="heading.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-bf36a4a elementor-widget elementor-widget-text-editor" data-id="bf36a4a" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                                                            <p>Estamos autorizados y conectados directamente con la <b>DIAN</b>, para tu tranquilidad, tenemos diferentes planes que se ajustan a tu necesidad y presupuesto.
                                                                                                                Entendemos la necesidad que tienes de cumplir con la norma,<b> por eso queremos ayudarte con algunos de nuestros planes o podemos diseñar uno hecho a tu medida.</b></p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </section>
                                                                        <div class="elementor-element elementor-element-18973f4 elementor-widget elementor-widget-spacer" data-id="18973f4" data-element_type="widget" data-widget_type="spacer.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-spacer">
                                                                                    <div class="elementor-spacer-inner"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <section class="elementor-element elementor-element-8bded84 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="8bded84" data-element_type="section">
                                                                            <div class="elementor-container elementor-column-gap-default">
                                                                                <div class="elementor-row">
                                                                                    <div class="elementor-element elementor-element-c0dc6fe elementor-column elementor-col-33 elementor-inner-column" data-id="c0dc6fe" data-element_type="column">
                                                                                        <div class="elementor-column-wrap  elementor-element-populated">
                                                                                            <div class="elementor-widget-wrap">

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-936c0ec elementor-column elementor-col-33 elementor-inner-column" data-id="936c0ec" data-element_type="column">
                                                                                        <div class="elementor-column-wrap  elementor-element-populated">
                                                                                            <div class="elementor-widget-wrap">
                                                                                                <div class="elementor-element elementor-element-f8ebe00 elementor-widget elementor-widget-image" data-id="f8ebe00" data-element_type="widget" data-widget_type="image.default">

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-a830ad1 elementor-column elementor-col-33 elementor-inner-column" data-id="a830ad1" data-element_type="column">
                                                                                        <div class="elementor-column-wrap  elementor-element-populated">
                                                                                            <div class="elementor-widget-wrap">
                                                                                                <div class="elementor-element elementor-element-5896f60 elementor-widget elementor-widget-image" data-id="5896f60" data-element_type="widget" data-widget_type="image.default">

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </section>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-vzcbsmt elementor-column elementor-col-50 elementor-top-column" data-id="vzcbsmt" data-element_type="column">
                                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-5l6o1we elementor-widget elementor-widget-heading" data-id="5l6o1we" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h4 class="elementor-heading-title elementor-size-default" style=" text-align: center ">¿Tienes alguna duda?</h4>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-kv51509 elementor-widget elementor-widget-spacer" data-id="kv51509" data-element_type="widget" data-widget_type="spacer.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-spacer">
                                                                                    <div class="elementor-spacer-inner"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-iqq6we9 elementor-widget elementor-widget-text-editor" data-id="iqq6we9" data-element_type="widget" data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-text-editor elementor-clearfix">
                                                                                    <p style="color:#ffffff;padding-top: 5%">Nuestros expertos te resolverán en poco tiempo.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-5xofw4v elementor-widget elementor-widget-spacer" data-id="5xofw4v" data-element_type="widget" data-widget_type="spacer.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-spacer">
                                                                                    <div class="elementor-spacer-inner"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <form action="correo/envioCorreo.php" method="post" class="wpcf7-form">
                                                                            <div class="elementor-element elementor-element-153rk87 elementor-widget elementor-widget-contact-form-7" data-id="153rk87" data-element_type="widget" data-widget_type="contact-form-7.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <div class="elementor-contact-form-7 jet-elements">
                                                                                        <div role="form" class="wpcf7" id="wpcf7-f3086-p278-o1" lang="en-US" dir="ltr">
                                                                                            <div class="screen-reader-response"></div>

                                                                                            <p><span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Nombre:" /></span></p>
                                                                                            <p><span class="wpcf7-form-control-wrap your-phone"><input type="text" name="your-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Telefono:" /></span></p>
                                                                                            <p><span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Correo electrónico" /></span></p>

                                                                                            <p><span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Comentario"></textarea></span></p>
                                                                                            <p><input type="submit" style="background:#FF9000" value="Enviar" class="wpcf7-form-control wpcf7-submit btn-accent-2" /></p>
                                                                                            <div class="wpcf7-response-output wpcf7-display-none"></div>


                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section class="elementor-element elementor-element-baad6a7 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="baad6a7" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-element elementor-element-4bb4b51 elementor-column elementor-col-100 elementor-top-column" data-id="4bb4b51" data-element_type="column">
                                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-36328ab elementor-widget elementor-widget-heading" data-id="36328ab" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h3 class="elementor-heading-title elementor-size-default">Planes</h3>
                                                                                <p> Elige uno de nuestros planes y empieza a crecer con NUBEX ST </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-902da1f elementor-widget elementor-widget-spacer" data-id="902da1f" data-element_type="widget" data-widget_type="spacer.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-spacer">
                                                                                    <div class="elementor-spacer-inner"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-wtakki0 elementor-widget elementor-widget-cherry_services" data-id="wtakki0" data-element_type="widget" data-widget_type="cherry_services.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-">
                                                                                    <div class="services-container">
                                                                                        <div class="cherry-services services-wrap template-media-icon" data-atts='{"limit":4,"orderby":"date","order":"DESC","category":"","id":"","more":false,"more_text":"More","more_url":"#","ajax_more":false,"show_title":true,"show_media":true,"show_content":true,"show_item_more":true,"item_more_text":"Learn More","show_filters":false,"use_space":true,"use_rows_space":true,"size":"thumbnail","echo":false,"title":"","excerpt_length":"20","wrap_class":"services-wrap","col_xs":1,"col_sm":2,"col_md":4,"col_xl":4,"before_title":"<h2>","after_title":"<\/h2>","pager":false,"paged":1,"template":"media-icon.tmpl","item_class":" services-item","container":"<div class=\"services-listing cherry-services-row\">%s<\/div>"}' data-pages="2" data-page="1" data-cat="">
                                                                                            <div class="services-listing cherry-services-row">
                                                                                                <div id="services-1365" class=" services-item item-1 clearfix odd col-xs-12 col-sm-6 col-md-3 col-xl-3">
                                                                                                    <div style="border-radius:10px; border: 2px solid #03ABFF;" class="services-item-inner">
                                                                                                        <div class="icon_wrap">
                                                                                                            <div class="services-macros"><img src="wp-content/uploads/2018/03/uno.png" /></div>
                                                                                                        </div>
                                                                                                        <div class="title_wrap">
                                                                                                            <h5 class="services-macros"><a href="cherry-services/electrical-services/index.html">$38.000/Mes</a></h5>
                                                                                                        </div>
                                                                                                        <div class="content_wrap">
                                                                                                            <div class="services-macros" style=" text-align: left ">
                                                                                                                <ul>
                                                                                                                    <li>1 Usuario</li>
                                                                                                                    <li>30 Documentos</li>
                                                                                                                    <li>Cotizaciones/CRM</li>
                                                                                                                    <li>Clientes</li>
                                                                                                                    <li>Productos Servicios</li>
                                                                                                                    <li>Reporte de Impuestos</li>
                                                                                                                </ul>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <a href="about/index.html" class="btn btn-primary"> Saber más</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--/.services-item-->
                                                                                                <div id="services-1364" class=" services-item item-2 clearfix even col-xs-12 col-sm-6 col-md-3 col-xl-3">
                                                                                                    <div style="border-radius:10px;border: 2px solid #FF9000;" class="services-item-inner">
                                                                                                        <div class="icon_wrap">
                                                                                                            <div class="services-macros"><img src="wp-content/uploads/2018/03/dos.png" /></div>
                                                                                                        </div>
                                                                                                        <div class="title_wrap">
                                                                                                            <h5 class="services-macros"><a href="cherry-services/plumber-services/index.html">$50.000/Mes</a></h5>
                                                                                                        </div>
                                                                                                        <div class="content_wrap">
                                                                                                            <div class="services-macros" style=" text-align: left ">
                                                                                                                <ul>
                                                                                                                    <li>1 Usuario</li>
                                                                                                                    <li>50 Documentos</li>
                                                                                                                    <li>Cotizaciones/CRM</li>
                                                                                                                    <li>Clientes</li>
                                                                                                                    <li>Productos Servicios</li>
                                                                                                                    <li>Reporte de Impuestos</li>
                                                                                                                </ul>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <a href="about/index.html" class="btn btn-primary">Saber más</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--/.services-item-->
                                                                                                <div id="services-1360" class=" services-item item-3 clearfix odd col-xs-12 col-sm-6 col-md-3 col-xl-3">
                                                                                                    <div style="border-radius:10px;border: 2px solid #97BF19;" class="services-item-inner">
                                                                                                        <div class="icon_wrap">
                                                                                                            <div class="services-macros"><img src="wp-content/uploads/2018/03/tres.png" /></div>
                                                                                                        </div>
                                                                                                        <div class="title_wrap">
                                                                                                            <h5 class="services-macros"><a href="cherry-services/painting-services/index.html">$65.000/Mes</a></h5>
                                                                                                        </div>
                                                                                                        <div class="content_wrap">
                                                                                                            <div class="services-macros" style=" text-align: left ">
                                                                                                                <ul>
                                                                                                                    <li>1 Usuario</li>
                                                                                                                    <li>100 Documentos</li>
                                                                                                                    <li>Cotizaciones/CRM</li>
                                                                                                                    <li>Clientes</li>
                                                                                                                    <li>Productos Servicios</li>
                                                                                                                    <li>Reporte de Impuestos</li>
                                                                                                                </ul>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <a href="about/index.html" class="btn btn-primary">Saber más</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--/.services-item-->
                                                                                                <div id="services-904" class=" services-item item-4 clearfix even col-xs-12 col-sm-6 col-md-3 col-xl-3">
                                                                                                    <div style="border-radius:10px;border: 2px solid #03ABFF;" class="services-item-inner">
                                                                                                        <div class="icon_wrap">
                                                                                                            <div class="services-macros"><img src="wp-content/uploads/2018/03/cuatro.png" /></div>
                                                                                                        </div>
                                                                                                        <div class="title_wrap">
                                                                                                            <h5 class="services-macros"><a href="cherry-services/heating-services/index.html">$80.000/Mes</a></h5>
                                                                                                        </div>
                                                                                                        <div class="content_wrap">
                                                                                                            <div class="services-macros" style=" text-align: left ">
                                                                                                                <ul>
                                                                                                                    <li>1 Usuario</li>
                                                                                                                    <li>500 Documentos</li>
                                                                                                                    <li>Cotizaciones/CRM</li>
                                                                                                                    <li>Clientes</li>
                                                                                                                    <li>Productos Servicios</li>
                                                                                                                    <li>Reporte de Impuestos</li>
                                                                                                                </ul>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <a href="about/index.html" class="btn btn-primary">Saber más</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--/.services-item-->
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section class="elementor-element elementor-element-003ae1b elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="003ae1b" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-element elementor-element-3db9e0f elementor-column elementor-col-50 elementor-top-column" data-id="3db9e0f" data-element_type="column">
                                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-b0f9219 elementor-widget elementor-widget-heading" data-id="b0f9219" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h3 class="elementor-heading-title elementor-size-default">Con NUBEX ST</h3>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-e4174ef elementor-widget elementor-widget-heading" data-id="e4174ef" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h6 class="elementor-heading-title elementor-size-default">Podrás implementar de manera fácil y rápida la Facturación Electrónica</h6>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-4fc4d11 elementor-widget elementor-widget-jet-download-button" data-id="4fc4d11" data-element_type="widget" data-widget_type="jet-download-button.default">
                                                                            <div class="elementor-widget-container"> </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-605cf22 elementor-column elementor-col-50 elementor-top-column" data-id="605cf22" data-element_type="column">
                                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <section class="elementor-element elementor-element-a3bf062 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="a3bf062" data-element_type="section">
                                                                            <div class="elementor-container elementor-column-gap-default">
                                                                                <div class="elementor-row">
                                                                                    <div class="elementor-element elementor-element-9977108 elementor-column elementor-col-33 elementor-inner-column" data-id="9977108" data-element_type="column">
                                                                                        <div class="elementor-column-wrap  elementor-element-populated">
                                                                                            <div class="elementor-widget-wrap">
                                                                                                <div class="elementor-element elementor-element-e2a3ddf elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list" data-id="e2a3ddf" data-element_type="widget" data-widget_type="icon-list.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <ul class="elementor-icon-list-items">
                                                                                                            <li class="elementor-icon-list-item">
                                                                                                                <span class="elementor-icon-list-icon">
                                                                                                                    <i class="fa fa-check" aria-hidden="true"></i>
                                                                                                                </span>
                                                                                                                <span class="elementor-icon-list-text">Completamente integrado, de forma nativa, con NUBEX. ¡No tienes que hacer nada, solo facturar!</span>
                                                                                                            </li>
                                                                                                            <li class="elementor-icon-list-item">
                                                                                                                <span class="elementor-icon-list-icon">
                                                                                                                    <i class="fa fa-check" aria-hidden="true"></i>
                                                                                                                </span>
                                                                                                                <span class="elementor-icon-list-text">Software de facturación electrónica autorizado por la DIAN</span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-33e6e0d elementor-column elementor-col-33 elementor-inner-column" data-id="33e6e0d" data-element_type="column">
                                                                                        <div class="elementor-column-wrap  elementor-element-populated">
                                                                                            <div class="elementor-widget-wrap">
                                                                                                <div class="elementor-element elementor-element-760e00d elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list" data-id="760e00d" data-element_type="widget" data-widget_type="icon-list.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <ul class="elementor-icon-list-items">
                                                                                                            <li class="elementor-icon-list-item">
                                                                                                                <span class="elementor-icon-list-icon">
                                                                                                                    <i class="fa fa-check" aria-hidden="true"></i>
                                                                                                                </span>
                                                                                                                <span class="elementor-icon-list-text">Evita los costos y complejidades de desarrollar engorrosas integraciones</span>
                                                                                                            </li>
                                                                                                            <li class="elementor-icon-list-item">
                                                                                                                <span class="elementor-icon-list-icon">
                                                                                                                    <i class="fa fa-check" aria-hidden="true"></i>
                                                                                                                </span>
                                                                                                                <span class="elementor-icon-list-text">Administra en NUBEX la emisión y recepción de documentos electrónicos</span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-3e82538 elementor-column elementor-col-33 elementor-inner-column" data-id="3e82538" data-element_type="column">
                                                                                        <div class="elementor-column-wrap  elementor-element-populated">
                                                                                            <div class="elementor-widget-wrap">
                                                                                                <div class="elementor-element elementor-element-801d7ff elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list" data-id="801d7ff" data-element_type="widget" data-widget_type="icon-list.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <ul class="elementor-icon-list-items">
                                                                                                            <li class="elementor-icon-list-item">
                                                                                                                <span class="elementor-icon-list-icon">
                                                                                                                    <i class="fa fa-check" aria-hidden="true"></i>
                                                                                                                </span>
                                                                                                                <span class="elementor-icon-list-text">Te incluimos, desde 5 facturas o documentos electrónicos con el plan que elijas.</span>
                                                                                                            </li>
                                                                                                            <li class="elementor-icon-list-item">
                                                                                                                <span class="elementor-icon-list-icon">
                                                                                                                    <i class="fa fa-check" aria-hidden="true"></i>
                                                                                                                </span>
                                                                                                                <span class="elementor-icon-list-text">¡Costos altamente competitivos!</span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </section>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section class="elementor-element elementor-element-88d1d17 invert elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="88d1d17" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-element elementor-element-e6c0c51 elementor-column elementor-col-50 elementor-top-column" data-id="e6c0c51" data-element_type="column">
                                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-146d6e8 elementor-widget elementor-widget-image" data-id="146d6e8" data-element_type="widget" data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-image">
                                                                                    <img width="404" height="349" src="wp-content/uploads/2018/03/man-1.png" class="attachment-large size-large" alt="" sizes="(max-width: 404px) 100vw, 404px" /> </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-53fcf0b elementor-column elementor-col-50 elementor-top-column" data-id="53fcf0b" data-element_type="column">
                                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-84fe68c elementor-widget elementor-widget-heading" data-id="84fe68c" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h5 class="elementor-heading-title elementor-size-default">Con NUBEX ST </h5>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-1cc7ca3 elementor-widget elementor-widget-heading" data-id="1cc7ca3" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2 class="elementor-heading-title elementor-size-default">Nunca había sido tan FÁCIL</h2>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-13e092d elementor-widget elementor-widget-button" data-id="13e092d" data-element_type="widget" data-widget_type="button.default">
                                                                            <div class="elementor-widget-container">
                                                                                <!--<div class="elementor-button-wrapper">
                                                                                                <a href="#" class="elementor-button-link elementor-button elementor-size-md" role="button">
                                                                                                                        <span class="elementor-button-content-wrapper">
                                                                                                                        <span class="elementor-button-icon elementor-align-icon-left">
                                                                                                        <i class="nc-icon-outline education_agenda-bookmark" aria-hidden="true"></i>
                                                                                                </span>
                                                                                                                        <span class="elementor-button-text">Make an Appointment</span>
                                                                                        </span>
                                                                                                                </a>
                                                                                        </div>-->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section class="elementor-element elementor-element-b80219c elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="b80219c" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-element elementor-element-4326ba8 elementor-column elementor-col-100 elementor-top-column" data-id="4326ba8" data-element_type="column">
                                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-c9981e4 elementor-widget elementor-widget-heading" data-id="c9981e4" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h3 class="elementor-heading-title elementor-size-default">¡Software de Facturación Electrónica para tu empresa!</h3>
                                                                                <p>Todas las funciones para administrar, Controlar y crecer tu Pyme</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-fc7ecd1 elementor-widget elementor-widget-spacer" data-id="fc7ecd1" data-element_type="widget" data-widget_type="spacer.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-spacer">
                                                                                    <div class="elementor-spacer-inner"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <section class="elementor-element elementor-element-4bc23a7 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="4bc23a7" data-element_type="section">
                                                                            <div class="elementor-container elementor-column-gap-default">
                                                                                <div class="elementor-row">
                                                                                    <div class="elementor-element elementor-element-2c30af4 elementor-column elementor-col-50 elementor-inner-column" data-id="2c30af4" data-element_type="column">
                                                                                        <div class="elementor-column-wrap  elementor-element-populated">
                                                                                            <div class="elementor-widget-wrap">
                                                                                                <div class="elementor-element elementor-element-0648dfc elementor-view-stacked elementor-position-left elementor-shape-circle elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="8ffbb58" data-element_type="widget" data-widget_type="icon-box.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-icon-box-wrapper">
                                                                                                            <div class="elementor-icon-box-icon">
                                                                                                                <span class="elementor-icon elementor-animation-">
                                                                                                                    <img src="wp-content/uploads/2018/03/1.png" />
                                                                                                                </span>
                                                                                                            </div>
                                                                                                            <div class="elementor-icon-box-content">
                                                                                                                <h6 class="elementor-icon-box-title">
                                                                                                                    <span>Facturas tradicionales</span>
                                                                                                                </h6>
                                                                                                                <p class="elementor-icon-box-description">
                                                                                                                    Crea, envia y administra tus facturas con NUBEX ST. </p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-0648dfc elementor-view-stacked elementor-position-left elementor-shape-circle elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="0648dfc" data-element_type="widget" data-widget_type="icon-box.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-icon-box-wrapper">
                                                                                                            <div class="elementor-icon-box-icon">
                                                                                                                <span class="elementor-icon elementor-animation-">
                                                                                                                    <img src="wp-content/uploads/2018/03/2.png" />
                                                                                                                </span>
                                                                                                            </div>
                                                                                                            <div class="elementor-icon-box-content">
                                                                                                                <h6 class="elementor-icon-box-title">
                                                                                                                    <span>Facturación Electrónica</span>
                                                                                                                </h6>
                                                                                                                <p class="elementor-icon-box-description">Proveedor Autorizado por la DIAN de Facturación Electrónica</p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-52d91b2 elementor-view-stacked elementor-position-left elementor-shape-circle elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="52d91b2" data-element_type="widget" data-widget_type="icon-box.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-icon-box-wrapper">
                                                                                                            <div class="elementor-icon-box-icon">
                                                                                                                <span class="elementor-icon elementor-animation-">
                                                                                                                    <img src="wp-content/uploads/2018/03/3.png" />
                                                                                                                </span>
                                                                                                            </div>
                                                                                                            <div class="elementor-icon-box-content">
                                                                                                                <h6 class="elementor-icon-box-title">
                                                                                                                    <span>Móvil</span>
                                                                                                                </h6>
                                                                                                                <p class="elementor-icon-box-description">Factura en cualquier lugar desde tu móvil</p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-078a463 elementor-column elementor-col-50 elementor-inner-column" data-id="078a463" data-element_type="column">
                                                                                        <div class="elementor-column-wrap  elementor-element-populated">
                                                                                            <div class="elementor-widget-wrap">
                                                                                                <div class="elementor-element elementor-element-08917d7 elementor-view-stacked elementor-position-left elementor-shape-circle elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="08917d7" data-element_type="widget" data-widget_type="icon-box.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-icon-box-wrapper">
                                                                                                            <div class="elementor-icon-box-icon">
                                                                                                                <span class="elementor-icon elementor-animation-">
                                                                                                                    <img src="wp-content/uploads/2018/03/4.png" />
                                                                                                                </span>
                                                                                                            </div>
                                                                                                            <div class="elementor-icon-box-content">
                                                                                                                <h6 class="elementor-icon-box-title">
                                                                                                                    <span>Certificados</span>
                                                                                                                </h6>
                                                                                                                <p class="elementor-icon-box-description">
                                                                                                                    Certificado digital propio para tu empresa</p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-4479f48 elementor-view-stacked elementor-position-left elementor-shape-circle elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="4479f48" data-element_type="widget" data-widget_type="icon-box.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-icon-box-wrapper">
                                                                                                            <div class="elementor-icon-box-icon">
                                                                                                                <span class="elementor-icon elementor-animation-">
                                                                                                                    <img src="wp-content/uploads/2018/03/5.png" />
                                                                                                                </span>
                                                                                                            </div>
                                                                                                            <div class="elementor-icon-box-content">
                                                                                                                <h6 class="elementor-icon-box-title">
                                                                                                                    <span>Contactos</span>
                                                                                                                </h6>
                                                                                                                <p class="elementor-icon-box-description">Ordena la infomación de tus clientes y proveedores</p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-71d197f elementor-view-stacked elementor-position-left elementor-shape-circle elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="71d197f" data-element_type="widget" data-widget_type="icon-box.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-icon-box-wrapper">
                                                                                                            <div class="elementor-icon-box-icon">
                                                                                                                <span class="elementor-icon elementor-animation-">
                                                                                                                    <img src="wp-content/uploads/2018/03/6.png" />
                                                                                                                </span>
                                                                                                            </div>
                                                                                                            <div class="elementor-icon-box-content">
                                                                                                                <h6 class="elementor-icon-box-title">
                                                                                                                    <span>Reportes</span>
                                                                                                                </h6>
                                                                                                                <p class="elementor-icon-box-description">Genera reportes inteligentes y en tiempo real</p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </section>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section class="elementor-element elementor-element-pe3hk02 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="pe3hk02" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-element elementor-element-linc8bs elementor-column elementor-col-100 elementor-top-column" data-id="linc8bs" data-element_type="column">
                                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-9iakdcd elementor-widget elementor-widget-heading" data-id="9iakdcd" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h3 class="elementor-heading-title elementor-size-default">Beneficios</h3>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-ae73725 elementor-widget elementor-widget-heading" data-id="ae73725" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h6 class="elementor-heading-title elementor-size-default">Mediante la adopción de nuestra solución no solo va a ser compatible con la DIAN, sino que también tendrá beneficios inmediatos y medibles en su negocio.sche</h6>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-681d3a0 elementor-widget elementor-widget-spacer" data-id="681d3a0" data-element_type="widget" data-widget_type="spacer.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-spacer">
                                                                                    <div class="elementor-spacer-inner"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <section class="elementor-element elementor-element-ff19db6 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="ff19db6" data-element_type="section">
                                                                            <div class="elementor-container elementor-column-gap-default">
                                                                                <div class="elementor-row">
                                                                                    <div class="elementor-element elementor-element-1c7f3d0 elementor-column elementor-col-33 elementor-inner-column" data-id="1c7f3d0" data-element_type="column">
                                                                                        <div class="elementor-column-wrap  elementor-element-populated">
                                                                                            <div class="elementor-widget-wrap">
                                                                                                <div class="elementor-element elementor-element-d2771b9 elementor-widget elementor-widget-image" data-id="d2771b9" data-element_type="widget" data-widget_type="image.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-image">
                                                                                                            <img width="248" height="248" src="wp-content/uploads/2018/03/homepage-circle-img-3-248x248.png" class="elementor-animation-shrink attachment-johnnygo-thumb-248-248 size-johnnygo-thumb-248-248" alt="" /> </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-f024937 elementor-widget elementor-widget-jet-headline" data-id="f024937" data-element_type="widget" data-widget_type="jet-headline.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="jet-headline jet-headline--direction-horizontal"><span class="jet-headline__part jet-headline__first"><span class="jet-headline__label">1</span></span><span class="jet-headline__space">&nbsp;</span></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-168330d elementor-widget elementor-widget-heading" data-id="168330d" data-element_type="widget" data-widget_type="heading.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <h5 class="elementor-heading-title elementor-size-default">Reducción de costos</h5>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-1c882cb elementor-widget elementor-widget-text-editor" data-id="1c882cb" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                                                            <p>El procesi Electrónico es rápido, reduce errores y elimina el uso de papel. Adicionalmente genera ahorro en gastos de envío, reduce pagos fallidos e intereses de mora, mejorando asi la relación con los clientes.</p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-e0bff1c elementor-column elementor-col-33 elementor-inner-column" data-id="e0bff1c" data-element_type="column">
                                                                                        <div class="elementor-column-wrap  elementor-element-populated">
                                                                                            <div class="elementor-widget-wrap">
                                                                                                <div class="elementor-element elementor-element-2433503 elementor-widget elementor-widget-image" data-id="2433503" data-element_type="widget" data-widget_type="image.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-image">
                                                                                                            <img width="248" height="248" src="wp-content/uploads/2018/03/homepage-circle-img-1-248x248.png" class="elementor-animation-shrink attachment-johnnygo-thumb-248-248 size-johnnygo-thumb-248-248" alt="" /> </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-a1e69f9 elementor-widget elementor-widget-jet-headline" data-id="a1e69f9" data-element_type="widget" data-widget_type="jet-headline.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="jet-headline jet-headline--direction-horizontal"><span class="jet-headline__part jet-headline__first"><span class="jet-headline__label">2</span></span><span class="jet-headline__space">&nbsp;</span></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-eb6c042 elementor-widget elementor-widget-heading" data-id="eb6c042" data-element_type="widget" data-widget_type="heading.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <h5 class="elementor-heading-title elementor-size-default">Automatización de los procesos</h5>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-2cbcdaa elementor-widget elementor-widget-text-editor" data-id="2cbcdaa" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                                                            <p>Aumento de la eficiencia en los procesos de recepción de facturas de proveedores, disminuyendo los errores de procesamiento y validación.</p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-17f0b38 elementor-column elementor-col-33 elementor-inner-column" data-id="17f0b38" data-element_type="column">
                                                                                        <div class="elementor-column-wrap  elementor-element-populated">
                                                                                            <div class="elementor-widget-wrap">
                                                                                                <div class="elementor-element elementor-element-8467bdf elementor-widget elementor-widget-image" data-id="8467bdf" data-element_type="widget" data-widget_type="image.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-image">
                                                                                                            <img width="248" height="248" src="wp-content/uploads/2018/03/homepage-circle-img-2-248x248.png" class="elementor-animation-shrink attachment-johnnygo-thumb-248-248 size-johnnygo-thumb-248-248" alt="" /> </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-461cecc elementor-widget elementor-widget-jet-headline" data-id="461cecc" data-element_type="widget" data-widget_type="jet-headline.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="jet-headline jet-headline--direction-horizontal"><span class="jet-headline__part jet-headline__first"><span class="jet-headline__label">3</span></span><span class="jet-headline__space">&nbsp;</span></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-545bfdc elementor-widget elementor-widget-heading" data-id="545bfdc" data-element_type="widget" data-widget_type="heading.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <h5 class="elementor-heading-title elementor-size-default">Incremento de la eficiencia</h5>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-9f26bff elementor-widget elementor-widget-text-editor" data-id="9f26bff" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                                                            <p>Mejoramiento de la relación con los socios de negocio (clientes y proveedores), a través del intercambio eficiente, seguro y estandarizado de documentos electrónicos.</p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </section>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section class="elementor-element elementor-element-7f2425f elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="7f2425f" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div class="elementor-element elementor-element-293450b elementor-column elementor-col-100 elementor-top-column" data-id="293450b" data-element_type="column">
                                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-7013134 elementor-widget elementor-widget-spacer" data-id="7013134" data-element_type="widget" data-widget_type="spacer.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-spacer">
                                                                                    <div class="elementor-spacer-inner"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <!--				<section class="elementor-element elementor-element-e3igif2 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="e3igif2" data-element_type="section">
                                                                                                                                <div class="elementor-container elementor-column-gap-default">
                                                                                                                <div class="elementor-row">
                                                                                                                <div class="elementor-element elementor-element-376qye4 elementor-column elementor-col-100 elementor-top-column" data-id="376qye4" data-element_type="column">
                                                                                                        <div class="elementor-column-wrap  elementor-element-populated">
                                                                                                                        <div class="elementor-widget-wrap">
                                                                                                                <div class="elementor-element elementor-element-d562ceb elementor-widget elementor-widget-heading" data-id="d562ceb" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                <div class="elementor-widget-container">
                                                                                                        <h3 class="elementor-heading-title elementor-size-default">Testimonios</h3>		</div>
                                                                                                                </div>
                                                                                                                <div class="elementor-element elementor-element-3c73609 elementor-widget elementor-widget-spacer" data-id="3c73609" data-element_type="widget" data-widget_type="spacer.default">
                                                                                                                <div class="elementor-widget-container">
                                                                                                                        <div class="elementor-spacer">
                                                                                                        <div class="elementor-spacer-inner"></div>
                                                                                                </div>
                                                                                                                </div>
                                                                                                                </div>
                                                                                                                <div class="elementor-element elementor-element-bb3ft7a elementor-widget elementor-widget-tm_testimonials" data-id="bb3ft7a" data-element_type="widget" data-widget_type="tm_testimonials.default">
                                                                                                                <div class="elementor-widget-container">
                                                                                                                        <div class="elementor-"><div class='tm-testi'><div id='tm-testi-slider-1' class='tm-testi__wrap tm-testi__wrap--perview-3 tm-testi__wrap--shortcode swiper-container tm-testi-slider tm-testi--default-3' data-atts='{"autoplay":0,"effect":"slide","loop":true,"slidesPerView":3,"spaceBetween":40,"breakpoints":{"1199":{"slidesPerView":3,"spaceBetween":40},"991":{"slidesPerView":2,"spaceBetween":5},"767":{"slidesPerView":1,"spaceBetween":5}},"id":1}'><div class="tm-testi__list swiper-wrapper tm-testi-slider__items"><div class="tm-testi__item swiper-slide tm-testi-slider__item"><div class="tm-testi__inner"><blockquote>
                                                                                        <div class="tm-testi__item-body">
                                                                                                <footer>
                                                                                                        <img width="76" height="76" src="wp-content/uploads/2017/07/testi-1-78x78.jpg" class="tm-testi__item-avatar avatar wp-post-image" alt="" srcset="https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/07/testi-1-78x78.jpg 78w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/07/testi-1-150x150.jpg 150w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/07/testi-1-300x300.jpg 300w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/07/testi-1-460x460.jpg 460w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/07/testi-1-104x104.jpg 104w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/07/testi-1-260x260.jpg 260w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/07/testi-1-248x248.jpg 248w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/07/testi-1.jpg 500w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/07/testi-1-100x100.jpg 100w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/07/testi-1-400x400.jpg 400w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/07/testi-1-286x286.jpg 286w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/07/testi-1-450x450.jpg 450w" sizes="(max-width: 76px) 100vw, 76px" />
                                                                                
                                                                                                        <div class="tm-testi__item-meta-content">
                                                                                                                <cite><span class="tm-testi__item-name">Adam Smith</span></cite>  <span class="tm-testi__item-position">teacher</span> 
                                                                                                        </div>
                                                                                                </footer>
                                                                                
                                                                                                <p>Thanks to JohnnyGo’s team my house is now as good as new! They helped me to renew my roof, fixed the heating system and rewired the house. I’m very grateful as I could never do it alone!&hellip;</p>
                                                                                        </div>
                                                                                </blockquote>
                                                                                </div></div><div class="tm-testi__item swiper-slide tm-testi-slider__item"><div class="tm-testi__inner"><blockquote>
                                                                                        <div class="tm-testi__item-body">
                                                                                                <footer>
                                                                                                        <img width="76" height="76" src="wp-content/uploads/2017/07/testi-4-78x78.jpg" class="tm-testi__item-avatar avatar wp-post-image" alt="" srcset="https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/07/testi-4-78x78.jpg 78w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/07/testi-4-150x150.jpg 150w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/07/testi-4-300x300.jpg 300w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/07/testi-4-460x460.jpg 460w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/07/testi-4-104x104.jpg 104w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/07/testi-4-260x260.jpg 260w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/07/testi-4-248x248.jpg 248w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/07/testi-4.jpg 500w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/07/testi-4-100x100.jpg 100w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/07/testi-4-400x400.jpg 400w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/07/testi-4-286x286.jpg 286w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/07/testi-4-450x450.jpg 450w" sizes="(max-width: 76px) 100vw, 76px" />
                                                                                
                                                                                                        <div class="tm-testi__item-meta-content">
                                                                                                                <cite><span class="tm-testi__item-name">David Jones</span></cite>  <span class="tm-testi__item-position">manager</span> 
                                                                                                        </div>
                                                                                                </footer>
                                                                                
                                                                                                <p>It was my first time to request the assistance of professional maintenance team as previously I used to do everything by myself. They painted my facade carefully and my wife is very pleased that it was done&hellip;</p>
                                                                                        </div>
                                                                                </blockquote>
                                                                                </div></div><div class="tm-testi__item swiper-slide tm-testi-slider__item"><div class="tm-testi__inner"><blockquote>
                                                                                        <div class="tm-testi__item-body">
                                                                                                <footer>
                                                                                                        <img width="76" height="76" src="wp-content/uploads/2017/07/testi-2-78x78.jpg" class="tm-testi__item-avatar avatar wp-post-image" alt="" srcset="https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/07/testi-2-78x78.jpg 78w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/07/testi-2-150x150.jpg 150w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/07/testi-2-300x300.jpg 300w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/07/testi-2-460x460.jpg 460w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/07/testi-2-104x104.jpg 104w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/07/testi-2-260x260.jpg 260w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/07/testi-2-248x248.jpg 248w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/07/testi-2.jpg 500w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/07/testi-2-100x100.jpg 100w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/07/testi-2-400x400.jpg 400w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/07/testi-2-286x286.jpg 286w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/07/testi-2-450x450.jpg 450w" sizes="(max-width: 76px) 100vw, 76px" />
                                                                                
                                                                                                        <div class="tm-testi__item-meta-content">
                                                                                                                <cite><span class="tm-testi__item-name">Mag Richards</span></cite>  <span class="tm-testi__item-position">accountant</span> 
                                                                                                        </div>
                                                                                                </footer>
                                                                                
                                                                                                <p>I was recommended to use JohnnyGo by my co-worker. I needed an emergency help because of insects, and they helped me to resolve this problem so quick! I’ll definitely get back again as they have so many&hellip;</p>
                                                                                        </div>
                                                                                </blockquote>
                                                                                </div></div></div><div id="tm-testi-slider-pagination-1" class="swiper-pagination tm-testi-slider__pags"></div></div></div></div>
                                                                                                                </div>
                                                                                                                </div>
                                                                                                                <div class="elementor-element elementor-element-2uarfuy elementor-widget elementor-widget-spacer" data-id="2uarfuy" data-element_type="widget" data-widget_type="spacer.default">
                                                                                                                <div class="elementor-widget-container">
                                                                                                                        <div class="elementor-spacer">
                                                                                                        <div class="elementor-spacer-inner"></div>
                                                                                                </div>
                                                                                                                </div>
                                                                                                                </div>
                                                                                                                                </div>
                                                                                                        </div>
                                                                                                </div>
                                                                                                                                </div>
                                                                                                        </div>
                                                                                                </section>-->
                                                <!--				<section class="elementor-element elementor-element-7f98951 invert elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="7f98951" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                                                                <div class="elementor-container elementor-column-gap-default">
                                                                                                                <div class="elementor-row">
                                                                                                                <div class="elementor-element elementor-element-5c55ccf elementor-column elementor-col-100 elementor-top-column" data-id="5c55ccf" data-element_type="column">
                                                                                                        <div class="elementor-column-wrap  elementor-element-populated">
                                                                                                                        <div class="elementor-widget-wrap">
                                                                                                                <div class="elementor-element elementor-element-bao87bb elementor-widget elementor-widget-heading" data-id="bao87bb" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                <div class="elementor-widget-container">
                                                                                                        <h3 class="elementor-heading-title elementor-size-default">Our Team</h3>		</div>
                                                                                                                </div>
                                                                                                                <div class="elementor-element elementor-element-9faab62 elementor-widget elementor-widget-spacer" data-id="9faab62" data-element_type="widget" data-widget_type="spacer.default">
                                                                                                                <div class="elementor-widget-container">
                                                                                                                        <div class="elementor-spacer">
                                                                                                        <div class="elementor-spacer-inner"></div>
                                                                                                </div>
                                                                                                                </div>
                                                                                                                </div>
                                                                                                                <div class="elementor-element elementor-element-a02db70 elementor-widget elementor-widget-cherry_team" data-id="a02db70" data-element_type="widget" data-widget_type="cherry_team.default">
                                                                                                                <div class="elementor-widget-container">
                                                                                                                        <div class="elementor-"><div class="team-container"><div class="cherry-team team-wrap template-default" data-atts='{"limit":4,"orderby":"date","order":"DESC","group":"","id":"","more":false,"more_text":"More","more_url":"#","ajax_more":true,"show_name":true,"show_photo":true,"show_desc":true,"show_position":true,"show_social":false,"show_item_more":true,"item_more_text":"","show_filters":false,"use_space":true,"use_rows_space":true,"size":"johnnygo-thumb-260-260","echo":false,"title":"","excerpt_length":"16","wrap_class":"team-wrap","col_xs":1,"col_sm":2,"col_md":2,"col_xl":4,"before_title":"<h2>","after_title":"<\/h2>","pager":false,"paged":1,"template":"default.tmpl","item_class":" team-item","container":"<div class=\"team-listing cherry-team-row\">%s<\/div>"}'  data-pages="2" data-page="1" data-groups=""><div class="team-listing cherry-team-row"><div id="team-623" class=" team-item item-1 clearfix odd col_xs_1 col_sm_2 col_md_2 col_xl_4"><div class="team-listing_photo__wrap">
                                                                                        <div class="team-listing_photo"><a href="team/jim-harris/index.html"><img width="260" height="260" src="wp-content/uploads/2017/03/team-avatar-2-260x260.jpg" class="avatar wp-post-image" alt="Jim Harris" srcset="https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-2.jpg 260w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-2-150x150.jpg 150w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-2-104x104.jpg 104w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-2-78x78.jpg 78w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-2-248x248.jpg 248w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-2-100x100.jpg 100w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-2-300x300.jpg 300w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-2-768x768.jpg 768w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-2-1024x1024.jpg 1024w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-2-460x460.jpg 460w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-2-560x560.jpg 560w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-2-600x600.jpg 600w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-2-400x400.jpg 400w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-2-900x900.jpg 900w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-2-675x675.jpg 675w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-2-286x286.jpg 286w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-2-450x450.jpg 450w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-2-1080x1080.jpg 1080w" sizes="(max-width: 260px) 100vw, 260px" /></a></div>
                                                                                
                                                                                        <div class="team-listing_photo__overflow">
                                                                                                <a href="team/jim-harris/index.html" class="btn btn-primary">Read more</a>
                                                                                        </div>
                                                                                </div>
                                                                                
                                                                                <h6 class="team-listing_name"><a href="team/jim-harris/index.html">Jim Harris</a></h6>
                                                                                <small class="team-listing_position"><span class="team-meta_item position">Senior electrician</span></small>
                                                                                <div class="team-listing_desc">Jim has over 10 years of experience working as an electrician here. Jim  knows about plumbing</div>
                                                                                
                                                                                
                                                                                </div>/.team-item<div id="team-622" class=" team-item item-2 clearfix even col_xs_1 col_sm_2 col_md_2 col_xl_4"><div class="team-listing_photo__wrap">
                                                                                        <div class="team-listing_photo"><a href="team/tom-allen/index.html"><img width="260" height="260" src="wp-content/uploads/2017/03/team-avatar-3-260x260.jpg" class="avatar wp-post-image" alt="Tom Allen" srcset="https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-3.jpg 260w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-3-150x150.jpg 150w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-3-104x104.jpg 104w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-3-78x78.jpg 78w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-3-248x248.jpg 248w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-3-100x100.jpg 100w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-3-300x300.jpg 300w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-3-768x768.jpg 768w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-3-1024x1024.jpg 1024w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-3-460x460.jpg 460w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-3-560x560.jpg 560w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-3-600x600.jpg 600w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-3-400x400.jpg 400w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-3-900x900.jpg 900w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-3-675x675.jpg 675w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-3-286x286.jpg 286w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-3-450x450.jpg 450w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-3-1080x1080.jpg 1080w" sizes="(max-width: 260px) 100vw, 260px" /></a></div>
                                                                                
                                                                                        <div class="team-listing_photo__overflow">
                                                                                                <a href="team/tom-allen/index.html" class="btn btn-primary">Read more</a>
                                                                                        </div>
                                                                                </div>
                                                                                
                                                                                <h6 class="team-listing_name"><a href="team/tom-allen/index.html">Tom Allen</a></h6>
                                                                                <small class="team-listing_position"><span class="team-meta_item position">Plumber</span></small>
                                                                                <div class="team-listing_desc">Tom knows about plumbing everything and even more! He successfully completed apprenticeship program and got a</div>
                                                                                
                                                                                
                                                                                </div>/.team-item<div id="team-621" class=" team-item item-3 clearfix odd col_xs_1 col_sm_2 col_md_2 col_xl_4"><div class="team-listing_photo__wrap">
                                                                                        <div class="team-listing_photo"><a href="team/mark-scott/index.html"><img width="260" height="260" src="wp-content/uploads/2017/03/team-avatar-1-260x260.jpg" class="avatar wp-post-image" alt="Mark Scott" srcset="https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-1.jpg 260w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-1-150x150.jpg 150w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-1-104x104.jpg 104w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-1-78x78.jpg 78w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-1-248x248.jpg 248w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-1-100x100.jpg 100w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-1-300x300.jpg 300w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-1-768x768.jpg 768w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-1-1024x1024.jpg 1024w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-1-460x460.jpg 460w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-1-560x560.jpg 560w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-1-600x600.jpg 600w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-1-400x400.jpg 400w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-1-900x900.jpg 900w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-1-675x675.jpg 675w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-1-286x286.jpg 286w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-1-450x450.jpg 450w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-1-1080x1080.jpg 1080w" sizes="(max-width: 260px) 100vw, 260px" /></a></div>
                                                                                
                                                                                        <div class="team-listing_photo__overflow">
                                                                                                <a href="team/mark-scott/index.html" class="btn btn-primary">Read more</a>
                                                                                        </div>
                                                                                </div>
                                                                                
                                                                                <h6 class="team-listing_name"><a href="team/mark-scott/index.html">Mark Scott</a></h6>
                                                                                <small class="team-listing_position"><span class="team-meta_item position">Painter</span></small>
                                                                                <div class="team-listing_desc">Mark works as a painter for 4 years. He works with paint very delicate. Mark knows</div>
                                                                                
                                                                                
                                                                                </div>/.team-item<div id="team-607" class=" team-item item-4 clearfix even col_xs_1 col_sm_2 col_md_2 col_xl_4"><div class="team-listing_photo__wrap">
                                                                                        <div class="team-listing_photo"><a href="team/nik-cooper/index.html"><img width="260" height="260" src="wp-content/uploads/2017/03/team-avatar-4-260x260.jpg" class="avatar wp-post-image" alt="Nik Cooper" srcset="https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-4.jpg 260w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-4-150x150.jpg 150w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-4-104x104.jpg 104w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-4-78x78.jpg 78w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-4-248x248.jpg 248w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-4-100x100.jpg 100w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-4-300x300.jpg 300w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-4-768x768.jpg 768w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-4-1024x1024.jpg 1024w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-4-460x460.jpg 460w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-4-560x560.jpg 560w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-4-600x600.jpg 600w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-4-400x400.jpg 400w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-4-900x900.jpg 900w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-4-675x675.jpg 675w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-4-286x286.jpg 286w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-4-450x450.jpg 450w, https://ld-wp.template-help.com/wordpress_62555/4/default/wp-content/uploads/2017/03/team-avatar-4-1080x1080.jpg 1080w" sizes="(max-width: 260px) 100vw, 260px" /></a></div>
                                                                                
                                                                                        <div class="team-listing_photo__overflow">
                                                                                                <a href="team/nik-cooper/index.html" class="btn btn-primary">Read more</a>
                                                                                        </div>
                                                                                </div>
                                                                                
                                                                                <h6 class="team-listing_name"><a href="team/nik-cooper/index.html">Nik Cooper</a></h6>
                                                                                <small class="team-listing_position"><span class="team-meta_item position">Housemaid</span></small>
                                                                                <div class="team-listing_desc">Nik ’s motto is “cleanliness is next to godliness”. He works here since 2010. Nik knows</div>
                                                                                
                                                                                
                                                                                </div>/.team-item</div></div></div></div>
                                                                                                                </div>
                                                                                                                </div>
                                                                                                                                </div>
                                                                                                        </div>
                                                                                                </div>
                                                                                                                                </div>
                                                                                                        </div>
                                                                                                </section>-->
                                                <!--				<section class="elementor-element elementor-element-8678510 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="8678510" data-element_type="section">
                                                                                                                                <div class="elementor-container elementor-column-gap-default">
                                                                                                                <div class="elementor-row">
                                                                                                                <div class="elementor-element elementor-element-f179811 elementor-column elementor-col-100 elementor-top-column" data-id="f179811" data-element_type="column">
                                                                                                        <div class="elementor-column-wrap  elementor-element-populated">
                                                                                                                        <div class="elementor-widget-wrap">
                                                                                                                <div class="elementor-element elementor-element-553dcc6 elementor-widget elementor-widget-heading" data-id="553dcc6" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                <div class="elementor-widget-container">
                                                                                                        <h3 class="elementor-heading-title elementor-size-default">Frequently Asked Questions</h3>		</div>
                                                                                                                </div>
                                                                                                                <div class="elementor-element elementor-element-be9593f elementor-widget elementor-widget-toggle" data-id="be9593f" data-element_type="widget" data-widget_type="toggle.default">
                                                                                                                <div class="elementor-widget-container">
                                                                                                                        <div class="elementor-toggle" role="tablist">
                                                                                                                                        <div class="elementor-toggle-item">
                                                                                                                        <h6 id="elementor-tab-title-1991" class="elementor-tab-title" data-tab="1" role="tab" aria-controls="elementor-tab-content-1991">
                                                                                                                                                                                <span class="elementor-toggle-icon elementor-toggle-icon-left" aria-hidden="true">
                                                                                                                                        <i class="elementor-toggle-icon-closed nc-icon-outline arrows-2_small-right"></i>
                                                                                                                                        <i class="elementor-toggle-icon-opened nc-icon-outline arrows-3_small-down"></i>
                                                                                                                                </span>
                                                                                                                                                                                <a href="#">Why does a renovation project cost so much?</a>
                                                                                                                        </h6>
                                                                                                                        <div id="elementor-tab-content-1991" class="elementor-tab-content elementor-clearfix" data-tab="1" role="tabpanel" aria-labelledby="elementor-tab-title-1991"><p>Every renovation project requires a lot of expenses. They include such bulks as materials and labor. Materials, in turns, include tile, mortar, grout, rough plumbing materials, paint and many other. If you need to  make a calculation of your future renovation project, please give us a call or email us, and our manager will help you with this issue.</p></div>
                                                                                                                </div>
                                                                                                                                        <div class="elementor-toggle-item">
                                                                                                                        <h6 id="elementor-tab-title-1992" class="elementor-tab-title" data-tab="2" role="tab" aria-controls="elementor-tab-content-1992">
                                                                                                                                                                                <span class="elementor-toggle-icon elementor-toggle-icon-left" aria-hidden="true">
                                                                                                                                        <i class="elementor-toggle-icon-closed nc-icon-outline arrows-2_small-right"></i>
                                                                                                                                        <i class="elementor-toggle-icon-opened nc-icon-outline arrows-3_small-down"></i>
                                                                                                                                </span>
                                                                                                                                                                                <a href="#">What is the timeline for the project?</a>
                                                                                                                        </h6>
                                                                                                                        <div id="elementor-tab-content-1992" class="elementor-tab-content elementor-clearfix" data-tab="2" role="tabpanel" aria-labelledby="elementor-tab-title-1992"><p>Depending on dimensions of the space and amount of work, it takes from a week to a 2-3 month to complete the renovation project.</p></div>
                                                                                                                </div>
                                                                                                                                        <div class="elementor-toggle-item">
                                                                                                                        <h6 id="elementor-tab-title-1993" class="elementor-tab-title" data-tab="3" role="tab" aria-controls="elementor-tab-content-1993">
                                                                                                                                                                                <span class="elementor-toggle-icon elementor-toggle-icon-left" aria-hidden="true">
                                                                                                                                        <i class="elementor-toggle-icon-closed nc-icon-outline arrows-2_small-right"></i>
                                                                                                                                        <i class="elementor-toggle-icon-opened nc-icon-outline arrows-3_small-down"></i>
                                                                                                                                </span>
                                                                                                                                                                                <a href="#">What is the total budget for construction?</a>
                                                                                                                        </h6>
                                                                                                                        <div id="elementor-tab-content-1993" class="elementor-tab-content elementor-clearfix" data-tab="3" role="tabpanel" aria-labelledby="elementor-tab-title-1993"><p>The total budget may vary as sizes of rooms are very different. For example, approximate budget for a basic bathroom renovation is from $3500 to $5000. If you need detailed calculation of materials and work, please contact our Customer Service Department.</p></div>
                                                                                                                </div>
                                                                                                                                        <div class="elementor-toggle-item">
                                                                                                                        <h6 id="elementor-tab-title-1994" class="elementor-tab-title" data-tab="4" role="tab" aria-controls="elementor-tab-content-1994">
                                                                                                                                                                                <span class="elementor-toggle-icon elementor-toggle-icon-left" aria-hidden="true">
                                                                                                                                        <i class="elementor-toggle-icon-closed nc-icon-outline arrows-2_small-right"></i>
                                                                                                                                        <i class="elementor-toggle-icon-opened nc-icon-outline arrows-3_small-down"></i>
                                                                                                                                </span>
                                                                                                                                                                                <a href="#">How is renovation project initiated?</a>
                                                                                                                        </h6>
                                                                                                                        <div id="elementor-tab-content-1994" class="elementor-tab-content elementor-clearfix" data-tab="4" role="tabpanel" aria-labelledby="elementor-tab-title-1994"><p>Renovation project can be initiated by the clients. If you need to reconstruct your old house, a room or a basement, you need to appeal to us, approve the project and budget and we’ll start working.</p></div>
                                                                                                                </div>
                                                                                                                        </div>
                                                                                                                </div>
                                                                                                                </div>
                                                                                                                <div class="elementor-element elementor-element-ff27652 elementor-widget elementor-widget-spacer" data-id="ff27652" data-element_type="widget" data-widget_type="spacer.default">
                                                                                                                <div class="elementor-widget-container">
                                                                                                                        <div class="elementor-spacer">
                                                                                                        <div class="elementor-spacer-inner"></div>
                                                                                                </div>
                                                                                                                </div>
                                                                                                                </div>
                                                                                                                                </div>
                                                                                                        </div>
                                                                                                </div>
                                                                                                                                </div>
                                                                                                        </div>
                                                                                                </section>-->
                                                <!--				<section class="elementor-element elementor-element-kmvzmxh elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="kmvzmxh" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                                                                <div class="elementor-container elementor-column-gap-default">
                                                                                                                <div class="elementor-row">
                                                                                                                <div class="elementor-element elementor-element-4meb4wm elementor-column elementor-col-100 elementor-top-column" data-id="4meb4wm" data-element_type="column">
                                                                                                        <div class="elementor-column-wrap  elementor-element-populated">
                                                                                                                        <div class="elementor-widget-wrap">
                                                                                                                <div class="elementor-element elementor-element-mlhtit3 elementor-widget elementor-widget-heading" data-id="mlhtit3" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                <div class="elementor-widget-container">
                                                                                                        <h3 class="elementor-heading-title elementor-size-default">We Work With</h3>		</div>
                                                                                                                </div>
                                                                                                                <div class="elementor-element elementor-element-xbkn7pf elementor-widget elementor-widget-spacer" data-id="xbkn7pf" data-element_type="widget" data-widget_type="spacer.default">
                                                                                                                <div class="elementor-widget-container">
                                                                                                                        <div class="elementor-spacer">
                                                                                                        <div class="elementor-spacer-inner"></div>
                                                                                                </div>
                                                                                                                </div>
                                                                                                                </div>
                                                                                                                <div class="elementor-element elementor-element-num2fin elementor-widget elementor-widget-jet-brands" data-id="num2fin" data-element_type="widget" data-widget_type="jet-brands.default">
                                                                                                                <div class="elementor-widget-container">
                                                                                                        <div class="elementor-jet-brands jet-elements"><div class="brands-wrap">
                                                                                        <div class="brands-list col-row"><div class="brands-list__item col-desk-6 col-tab-3 col-mob-2"><img src="wp-content/uploads/2018/03/we-work-with-brand_6.png" alt="thumbnail image" class="brands-list__item-img"></div>
                                                                                <div class="brands-list__item col-desk-6 col-tab-3 col-mob-2"><img src="wp-content/uploads/2018/03/we-work-with-brand_2.png" alt="thumbnail image" class="brands-list__item-img"></div>
                                                                                <div class="brands-list__item col-desk-6 col-tab-3 col-mob-2"><img src="wp-content/uploads/2018/03/we-work-with-brand_4.png" alt="thumbnail image" class="brands-list__item-img"></div>
                                                                                <div class="brands-list__item col-desk-6 col-tab-3 col-mob-2"><img src="wp-content/uploads/2018/03/we-work-with-brand_3.png" alt="thumbnail image" class="brands-list__item-img"></div>
                                                                                <div class="brands-list__item col-desk-6 col-tab-3 col-mob-2"><img src="wp-content/uploads/2018/03/we-work-with-brand_1.png" alt="thumbnail image" class="brands-list__item-img"></div>
                                                                                <div class="brands-list__item col-desk-6 col-tab-3 col-mob-2"><img src="wp-content/uploads/2018/03/we-work-with-brand_5.png" alt="thumbnail image" class="brands-list__item-img"></div>
                                                                                </div></div></div>		</div>
                                                                                                                </div>
                                                                                                                                </div>
                                                                                                        </div>
                                                                                                </div>
                                                                                                                                </div>
                                                                                                        </div>
                                                                                                </section>-->
                                                <section class="elementor-element elementor-element-0c8f4fe invert elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="0c8f4fe" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-element elementor-element-634868b elementor-column elementor-col-50 elementor-top-column" data-id="634868b" data-element_type="column">
                                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-0658b29 elementor-widget elementor-widget-heading" data-id="0658b29" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h5 class="elementor-heading-title elementor-size-default">Cumplir con la facturación electronica desde tu computadora Sí es posible con NUBEX ST.</h5>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-2f055ee elementor-widget elementor-widget-heading" data-id="2f055ee" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2 class="elementor-heading-title elementor-size-default">Las mejores ventas de NUBEX ST ahora en tu Computadora</h2>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-71be757 elementor-widget elementor-widget-button" data-id="71be757" data-element_type="widget" data-widget_type="button.default">
                                                                            <div class="elementor-widget-container">
                                                                                <!--<div class="elementor-button-wrapper">
                                                                                                <a href="booking/index.html" class="elementor-button-link elementor-button elementor-size-md" role="button">
                                                                                                                        <span class="elementor-button-content-wrapper">
                                                                                                                        <span class="elementor-button-icon elementor-align-icon-left">
                                                                                                        <i class="nc-icon-outline education_agenda-bookmark" aria-hidden="true"></i>
                                                                                                </span>
                                                                                                                        <span class="elementor-button-text">Make an Appointment</span>
                                                                                        </span>
                                                                                                                </a>
                                                                                        </div>-->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-4b8a457 elementor-column elementor-col-50 elementor-top-column" data-id="4b8a457" data-element_type="column">
                                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-6447085 elementor-widget elementor-widget-image" data-id="6447085" data-element_type="widget" data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-image">
                                                                                    <img width="345" height="349" src="wp-content/uploads/2018/03/man-2.png" class="attachment-large size-large" alt="" sizes="(max-width: 345px) 100vw, 345px" /> </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section class="elementor-element elementor-element-wpamcq0 invert elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="wpamcq0" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-element elementor-element-x27ixlx elementor-column elementor-col-33 elementor-top-column" data-id="x27ixlx" data-element_type="column">
                                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-l9uq5rv elementor-view-framed elementor-position-left elementor-vertical-align-middle elementor-shape-circle elementor-widget elementor-widget-icon-box" data-id="l9uq5rv" data-element_type="widget" data-widget_type="icon-box.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-icon-box-wrapper">
                                                                                    <div class="elementor-icon-box-icon">
                                                                                        <span class="elementor-icon elementor-animation-">
                                                                                            <i class="nc-icon-outline ui-3_phone" aria-hidden="true"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="elementor-icon-box-content">
                                                                                        <h6 class="elementor-icon-box-title">
                                                                                            <span>Servicio al Cliente:</span>
                                                                                        </h6>
                                                                                        <p class="elementor-icon-box-description">(+57)3112363016</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-88fa8x9 elementor-widget elementor-widget-spacer" data-id="88fa8x9" data-element_type="widget" data-widget_type="spacer.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-spacer">
                                                                                    <div class="elementor-spacer-inner"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div><a href="https://api.whatsapp.com/send?phone=573112363016&text=%C2%A1Buen%20d%C3%ADa!%20cu%C3%A9ntanos,%20en%20que%20te%20podemos%20ayudar"><img style="    width: 5%;position: fixed; left:2%;top: 86%;bottom: 3px;z-index: 200;" src="wp-content/uploads/2018/03/logo.png" /></a></div>

                                                            <!-- Smartsupp Live Chat script -->

                                                            <div class="elementor-element elementor-element-fy8jpz8 elementor-column elementor-col-33 elementor-top-column" data-id="fy8jpz8" data-element_type="column">
                                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-abp6o6r elementor-view-framed elementor-position-left elementor-vertical-align-middle elementor-shape-circle elementor-widget elementor-widget-icon-box" data-id="abp6o6r" data-element_type="widget" data-widget_type="icon-box.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-icon-box-wrapper">
                                                                                    <div class="elementor-icon-box-icon">
                                                                                        <span class="elementor-icon elementor-animation-">
                                                                                            <i class="nc-icon-outline location_pin" aria-hidden="true"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="elementor-icon-box-content">
                                                                                        <h6 class="elementor-icon-box-title">
                                                                                            <span>Ubicación:</span>
                                                                                        </h6>
                                                                                        <p class="elementor-icon-box-description">Corrección: cra 101 # 82- 57</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-6hk595t elementor-widget elementor-widget-spacer" data-id="6hk595t" data-element_type="widget" data-widget_type="spacer.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-spacer">
                                                                                    <div class="elementor-spacer-inner"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-mz5d608 elementor-column elementor-col-33 elementor-top-column" data-id="mz5d608" data-element_type="column">
                                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-wwmgtkr elementor-view-framed elementor-position-left elementor-vertical-align-middle elementor-shape-circle elementor-widget elementor-widget-icon-box" data-id="wwmgtkr" data-element_type="widget" data-widget_type="icon-box.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-icon-box-wrapper">
                                                                                    <div class="elementor-icon-box-icon">
                                                                                        <span class="elementor-icon elementor-animation-">
                                                                                            <i class="nc-icon-outline ui-1_email-84" aria-hidden="true"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="elementor-icon-box-content">
                                                                                        <h6 class="elementor-icon-box-title">
                                                                                            <span>E-mail:</span>
                                                                                        </h6>
                                                                                        <p class="elementor-icon-box-description"><a href="mailto:cristian.mendez@nubexst.com">cristian.mendez@nubexst.com</a></p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .entry-content -->

                                <footer class="entry-footer">
                                </footer><!-- .entry-footer -->

                            </article><!-- #post-## -->

                        </main><!-- #main -->


                    </div><!-- #primary -->


                </div><!-- .row -->


            </div><!-- .site-content_wrap -->



        </div><!-- #content -->

        <footer id="colophon" class="site-footer style-1" role="contentinfo">

            <div class="footer-area-wrap">
                <div class="container">
                    <section id="footer-area" class="footer-area widget-area footer-area--4-cols row">
                        <h5 class="widget-title">Sobre NUBEX ST</h5>
                        <div class="textwidget">
                            <p>NUBEX ST es un software fácil y poderoso, 100% en la nube, ayuda a las compañias o pymes a organizarse y crecer.Ha sido construido con dedicación, una compañia con más de 5 años de experiencia en el desarrollo de la facturación Electrónica</p>
                    </section>
                </div>
            </div>
    </div>
    <div class="site-info container site-info-second-row">
        <div class="site-info-wrap">
            <div class="site-info-block">
                <div class="footer-copyright">© 2020 NUBEX ST, Diseñado por. <a href="http://nygsoft.com/">NyGsoft</a></div>
            </div>
            <!--			<div class="social-list social-list--footer social-list--icon"><ul id="social-list-2" class="social-list__items inline-list"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-218"><a href="https://www.facebook.com/zemezlab/"><span class="screen-reader-text">Facebook</span></a></li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-219"><a href="https://twitter.com/zemezlab"><span class="screen-reader-text">Twitter</span></a></li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-220"><a href="https://www.youtube.com/channel/UCPW43un8VFXHe9LxKpR_2Hg"><span class="screen-reader-text">Youtube</span></a></li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-221"><a href="https://www.instagram.com/zemezlab"><span class="screen-reader-text">Instagram</span></a></li>
                                                    </ul></div>		</div>-->
        </div><!-- .site-info-second-row -->

    </div>

    <!-- #page -->


    <!--<div class="cherry-popup-subscribe"><form method="POST" action="#" class="cherry-popup-subscribe__form"><div class="cherry-popup-subscribe__message"><span></span></div><div class="cherry-popup-subscribe__input-group"><input class="cherry-popup-subscribe__input" type="email" name="subscribe-mail" value="" placeholder="Your email"><div class="cherry-popup-subscribe__submit">Subscribe</div></div></form></div>
                                            <div class="cherry-popup-check cherry-popup-show-again-check"><div class="marker"><span class="dashicons dashicons-yes"></span></div><span class="label">Don&#039;t show again</span></div><div class="cherry-popup-close-button"><span class="dashicons dashicons-no"></span></div></div></div><div class="cherry-popup cherry-popup-wrapper cherry-popup-3818 simple-fade-animation overlay-fill-color-type layout-type-center default-style custom-event-type  popup-type-signup" data-popup-settings='{"id":3818,"use":"custom-event","layout-type":"center","show-hide-animation":"simple-fade","base-style":"default","width":"360","height":"566","padding":"30","container-bg-type":"fill-color","container-color":"#fff","container-opacity":"100","container-image":"","border-radius":"3","content-position":"center","show-once":"false","overlay-type":"fill-color","overlay-color":"#000","overlay-opacity":"50","overlay-image":"","overlay-close-area":"true","open-appear-event":"page-load","load-open-delay":"1","inactive-time":"1","page-scrolling-value":"5","close-appear-event":"outside-viewport","custom-event-type":"click","popup-selector":".cherry-popups-signup-link","template":"default-popup.tmpl","popup-type":"signup","custom-class":""}'><div class="cherry-popup-overlay"></div><div class="cherry-popup-container container-fill-color-type"><div class="cherry-popup-container__inner"><div class="cherry-popup-container__dynamic"><div class="cherry-popup-title"><h4 >Sign up</h4></div>
                                            <div class="cherry-popup-content"></div>
                                            <div class="cherry-popup-register"><form method="POST" action="#" class="cherry-popup-register__form">-->
    <!--
                                                    wsl_render_auth_widget
                                                    WordPress Social Login 2.3.3.
                                                    http://wordpress.org/plugins/wordpress-social-login/
                                            -->

    <style type="text/css">
        .wp-social-login-connect-with {}

        .wp-social-login-provider-list {}

        .wp-social-login-provider-list a {}

        .wp-social-login-provider-list img {}

        .wsl_connect_with_provider {}
    </style>

    <!--<div class="wp-social-login-widget">
                                            
                                                    <div class="wp-social-login-connect-with"></div>
                                            
                                                    <div class="wp-social-login-provider-list">
                                            
                                                            <a rel="nofollow" href="wp-login7617.html?action=wordpress_social_authenticate&amp;mode=login&amp;provider=Facebook&amp;redirect_to=https%3A%2F%2Fld-wp.template-help.com%2Fwordpress_62555%2F4%2Fdefault%2F" title="Connect with Facebook" class="wp-social-login-provider wp-social-login-provider-facebook" data-provider="Facebook">
                                                                    <img alt="Facebook" title="Connect with Facebook" src="wp-content/plugins/wordpress-social-login/assets/img/32x32/wpzoom/facebook.png" />
                                                            </a>
                                            
                                                            <a rel="nofollow" href="wp-login63b5.html?action=wordpress_social_authenticate&amp;mode=login&amp;provider=Google&amp;redirect_to=https%3A%2F%2Fld-wp.template-help.com%2Fwordpress_62555%2F4%2Fdefault%2F" title="Connect with Google" class="wp-social-login-provider wp-social-login-provider-google" data-provider="Google">
                                                                    <img alt="Google" title="Connect with Google" src="wp-content/plugins/wordpress-social-login/assets/img/32x32/wpzoom/google.png" />
                                                            </a>
                                            
                                                            <a rel="nofollow" href="wp-loginf15a.html?action=wordpress_social_authenticate&amp;mode=login&amp;provider=Twitter&amp;redirect_to=https%3A%2F%2Fld-wp.template-help.com%2Fwordpress_62555%2F4%2Fdefault%2F" title="Connect with Twitter" class="wp-social-login-provider wp-social-login-provider-twitter" data-provider="Twitter">
                                                                    <img alt="Twitter" title="Connect with Twitter" src="wp-content/plugins/wordpress-social-login/assets/img/32x32/wpzoom/twitter.png" />
                                                            </a>
                                            
                                                    </div>
                                            
                                                    <div class="wp-social-login-widget-clearing"></div>
                                            
                                            </div>-->

    <!-- wsl_render_auth_widget -->
    <!--
                                            <div class="cherry-popup-signup__new-user"><span>or enter your registration credentials</span></div><div class="cherry-popup-register__input-group"><div class="cherry-popup-register__wrap"><input id="cherry-popup-register-login-input" class="cherry-popup__input cherry-popup-register__input-login" type="text" name="register-login" value="" placeholder="Login" tabindex=1></div><div class="cherry-popup-register__wrap"><input id="cherry-popup-register-mail-input" class="cherry-popup__input cherry-popup-login__input-mail" type="email" name="register-mail" value="" placeholder="Email" tabindex=2></div><div class="cherry-popup-signup__login-user"><span>Already have an account?</span><a href="#" class="cherry-popups-login-link">Log in</a></div><div class="cherry-popup-register__wrap"><div class="cherry-popup-register__sign-up"><span>Sign up</span><div class="cherry-popup-spinner"><div class="cherry-double-bounce1"></div><div class="cherry-double-bounce2"></div></div></div></div></div><div class="cherry-popup-register__message"><span></span></div></form></div>
                                            <div class="cherry-popup-close-button"><span class="dashicons dashicons-no"></span></div><div class="cherry-popup cherry-popup-wrapper cherry-popup-3816 simple-fade-animation overlay-fill-color-type layout-type-center default-style custom-event-type  popup-type-login" data-popup-settings='{"id":3816,"use":"custom-event","layout-type":"center","show-hide-animation":"simple-fade","base-style":"default","width":"360","height":"600","padding":"30","container-bg-type":"fill-color","container-color":"#fff","container-opacity":"100","container-image":"","border-radius":"3","content-position":"center","show-once":"false","overlay-type":"fill-color","overlay-color":"#000","overlay-opacity":"50","overlay-image":"","overlay-close-area":"true","open-appear-event":"page-load","load-open-delay":"1","inactive-time":"1","page-scrolling-value":"5","close-appear-event":"outside-viewport","custom-event-type":"click","popup-selector":".cherry-popups-login-link","template":"default-popup.tmpl","popup-type":"login","custom-class":""}'><div class="cherry-popup-overlay"></div><div class="cherry-popup-container container-fill-color-type"><div class="cherry-popup-container__inner"><div class="cherry-popup-container__dynamic"><div class="cherry-popup-title"><h4 >Login</h4></div>
                                            <div class="cherry-popup-content"></div>
                                            <div class="cherry-popup-login"><form method="POST" action="#" class="cherry-popup-login__form">-->
    <!--
                                                    wsl_render_auth_widget
                                                    WordPress Social Login 2.3.3.
                                                    http://wordpress.org/plugins/wordpress-social-login/
                                            -->

    <style type="text/css">
        .wp-social-login-connect-with {}

        .wp-social-login-provider-list {}

        .wp-social-login-provider-list a {}

        .wp-social-login-provider-list img {}

        .wsl_connect_with_provider {}
    </style>

    <!--<div class="wp-social-login-widget">
                                            
                                                    <div class="wp-social-login-connect-with"></div>
                                            
                                                    <div class="wp-social-login-provider-list">
                                            
                                                            <a rel="nofollow" href="wp-login7617.html?action=wordpress_social_authenticate&amp;mode=login&amp;provider=Facebook&amp;redirect_to=https%3A%2F%2Fld-wp.template-help.com%2Fwordpress_62555%2F4%2Fdefault%2F" title="Connect with Facebook" class="wp-social-login-provider wp-social-login-provider-facebook" data-provider="Facebook">
                                                                    <img alt="Facebook" title="Connect with Facebook" src="wp-content/plugins/wordpress-social-login/assets/img/32x32/wpzoom/facebook.png" />
                                                            </a>
                                            
                                                            <a rel="nofollow" href="wp-login63b5.html?action=wordpress_social_authenticate&amp;mode=login&amp;provider=Google&amp;redirect_to=https%3A%2F%2Fld-wp.template-help.com%2Fwordpress_62555%2F4%2Fdefault%2F" title="Connect with Google" class="wp-social-login-provider wp-social-login-provider-google" data-provider="Google">
                                                                    <img alt="Google" title="Connect with Google" src="wp-content/plugins/wordpress-social-login/assets/img/32x32/wpzoom/google.png" />
                                                            </a>
                                            
                                                            <a rel="nofollow" href="wp-loginf15a.html?action=wordpress_social_authenticate&amp;mode=login&amp;provider=Twitter&amp;redirect_to=https%3A%2F%2Fld-wp.template-help.com%2Fwordpress_62555%2F4%2Fdefault%2F" title="Connect with Twitter" class="wp-social-login-provider wp-social-login-provider-twitter" data-provider="Twitter">
                                                                    <img alt="Twitter" title="Connect with Twitter" src="wp-content/plugins/wordpress-social-login/assets/img/32x32/wpzoom/twitter.png" />
                                                            </a>
                                            
                                                    </div>
                                            
                                                    <div class="wp-social-login-widget-clearing"></div>
                                            
                                            </div>-->

    <!-- wsl_render_auth_widget -->

    <!--<div class="cherry-popup-login__use-mail"><span>or use your login data</span></div><div class="cherry-popup-login__input-group"><div class="cherry-popup-login__wrap"><input id="cherry-popup-user-input" class="cherry-popup__input cherry-popup-login__input-user" type="text" name="login-user" value="" placeholder="Login"></div><div class="cherry-popup-login__wrap"><input id="cherry-popup-pass-input" class="cherry-popup__input cherry-popup-login__input-pass" type="password" name="login-password" value="" placeholder="Password"></div><div class="cherry-popup-login__wrap"><div class="cherry-popup-login__signup-message"><span>Don&#039;t have an account? Click here to</span><a href="#" class="cherry-popups-signup-link">Sign up</a></div></div><div class="cherry-popup-login__wrap"><div class="cherry-popup-check cherry-popup-login__remember"><div class="marker"><span class="dashicons dashicons-yes"></span></div><span class="label">Remember me</span></div></div><div class="cherry-popup-login__wrap"><div class="cherry-popup-login__login-in"><span>Log in</span><div class="cherry-popup-spinner"><div class="cherry-double-bounce1"></div><div class="cherry-double-bounce2"></div></div></div></div></div><div class="cherry-popup-login__message"><span></span></div></form></div>
                                            </div></div><div class="cherry-popup-close-button"><span class="dashicons dashicons-no"></span></div></div></div><script type="text/javascript">/* <![CDATA[ */
                                             var tmQuickViewIds = []
                                            /* ]]> */
                                            </script><script type="text/javascript">/* <![CDATA[ */
                                             var tmQuickViewCSS = []
                                            /* ]]> */
                                            </script>	<script type="text/javascript">
                                                            var c = document.body.className;
                                                            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
                                                            document.body.className = c;
                                                    </script>
                                                    <script type="text/html" id="tmpl-search-form-results-item-1"><li class="cherry-search__results-item">
                                                    <a href="{{{data.link}}}">
                                                            
                                                            <span class="cherry-search__item-attr">
                                                                    <span class="cherry-search__item-title"><strong>{{{data.title}}}</strong></span>
                                                                    <span class="cherry-search__item-content">{{{data.content}}}</span>
                                                                    <span class="cherry-search__item-author">{{{data.author}}}</span>
                                                            </span>
                                                    </a>
                                            </li></script><script type="text/html" id="tmpl-search-form-results-item-2"><li class="cherry-search__results-item">
                                                    <a href="{{{data.link}}}">
                                                            
                                                            <span class="cherry-search__item-attr">
                                                                    <span class="cherry-search__item-title"><strong>{{{data.title}}}</strong></span>
                                                                    <span class="cherry-search__item-content">{{{data.content}}}</span>
                                                                    <span class="cherry-search__item-author">{{{data.author}}}</span>
                                                            </span>
                                                    </a>
                                            </li></script><link rel='stylesheet' id='cherry-search-css'  href='wp-content/plugins/cherry-search/assets/css/min/cherry-search.min6c9a.css?ver=1.1.4.1' type='text/css' media='all' />-->
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wp_load_style = {
            "0": "nucleo-outline.css",
            "1": "cherry-socialize-public.css",
            "2": "cherry-testi.css",
            "3": "cherry-trending-posts.css",
            "4": "tm-woocommerce-package.css",
            "5": "jquery-rd-material-tabs.css",
            "6": "jquery-swiper.css",
            "7": "jquery-slider-pro.css",
            "8": "booked-icons.css",
            "9": "booked-tooltipster.css",
            "10": "booked-tooltipster-theme.css",
            "11": "booked-animations.css",
            "12": "booked-styles.css",
            "13": "booked-responsive.css",
            "14": "cherry-services.css",
            "15": "cherry-services-theme.css",
            "16": "font-awesome.css",
            "17": "contact-form-7.css",
            "18": "rs-plugin-settings.css",
            "19": "woocommerce-layout.css",
            "20": "woocommerce-smallscreen.css",
            "21": "woocommerce-general.css",
            "22": "woocommerce-inline.css",
            "23": "wsl-widget.css",
            "24": "tm-woocompare.css",
            "25": "tm-woowishlist.css",
            "26": "tm-timeline-css.css",
            "28": "tm-pg-material-icons.css",
            "29": "tm-pg-fontello.css",
            "30": "tm-pg-lightgallery.css",
            "31": "tm-pg-style-frontend.css",
            "33": "johnnygo-woocommerce-styles.css",
            "34": "cherry-handler-css.css",
            "35": "dashicons.css",
            "36": "magnific-popup.css",
            "37": "cherry-projects-styles.css",
            "38": "cherry-google-fonts-johnnygo.css",
            "39": "jet-elements.css",
            "40": "jet-elements-skin.css",
            "41": "tm-wc-ajax-filters-widget.css",
            "42": "tm-mega-menu.css",
            "43": "elementor-icons.css",
            "44": "elementor-animations.css",
            "45": "elementor-frontend.css",
            "46": "tm-products-carousel-widget-styles.css",
            "47": "cherry-popups-font-awesome.css",
            "48": "cherry-popups-styles.css",
            "49": "cherry-team.css",
            "50": "cherry-team-grid.css",
            "51": "johnnygo-theme-style.css",
            "52": "johnnygo-skin-style.css",
            "53": "google-fonts-1.css"
        };
        var wp_load_script = ["cherry-js-core.js", "jquery.html", "jquery-ui-datepicker.html", "booked-spin-js.html", "booked-spin-jquery.html", "booked-tooltipster.html", "booked-functions.html", "jquery-swiper.html", "jquery-slider-pro.html", "contact-form-7.html", "tp-tools.html", "revmin.html", "wc-add-to-cart.html", "woocommerce.html", "wc-cart-fragments.html", "tm-woocompare.html", "tm-woowishlist.html", "johnnygo-single-product-init.html", "countdown-script.html", "johnnygo-woo-theme-script.html", "cherry-handler-js.html", "magnific-popup.html", "cherry-projects-single-scripts.html", "cherry-post-formats.html", "tm-wc-ajax-product-filters.html", "tm-mega-menu.html", "tm-products-carousel-widget-init.html", "tm-categories-carousel-widget-init.html", "cherry-popups-scripts.html", "johnnygo-theme-script.js"];
        var cherry_ajax = "87b1248230";
        var ui_init_object = {
            "auto_init": "false",
            "targets": []
        };
        var CherryCollectedCSS = {
            "type": "text\/css",
            "title": "cherry-collected-dynamic-style",
            "css": "#cherry-search-wrapper-1 .cherry-search__results-list {overflow-y:auto; max-height:500px; }#cherry-search-wrapper-2 .cherry-search__results-list {overflow-y:auto; max-height:500px; }.cherry-popup-3820 .cherry-popup-container {width:642px; height:268px; background-color:rgba(254,248,92,1);; border-radius:3px; }.cherry-popup-3820 .cherry-popup-container__inner {padding:30px; justify-content:center; }.cherry-popup-3820 .cherry-popup-overlay {background-color:rgba(0,0,0,0.5);; }.cherry-popup-3818 .cherry-popup-container {width:360px; height:566px; background-color:rgba(255,255,255,1);; border-radius:3px; }.cherry-popup-3818 .cherry-popup-container__inner {padding:30px; justify-content:center; }.cherry-popup-3818 .cherry-popup-overlay {background-color:rgba(0,0,0,0.5);; }.cherry-popup-3816 .cherry-popup-container {width:360px; height:600px; background-color:rgba(255,255,255,1);; border-radius:3px; }.cherry-popup-3816 .cherry-popup-container__inner {padding:30px; justify-content:center; }.cherry-popup-3816 .cherry-popup-overlay {background-color:rgba(0,0,0,0.5);; }"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='wp-content/plugins/cherry-services-list/cherry-framework/modules/cherry-js-core/assets/js/min/cherry-js-core.min8c67.js?ver=1.5.11'></script>
    <script type='text/javascript'>
        function CherryCSSCollector() {
            "use strict";
            var t, e = window.CherryCollectedCSS;
            void 0 !== e && (t = document.createElement("style"), t.setAttribute("title", e.title), t.setAttribute("type", e.type), t.textContent = e.css, document.head.appendChild(t))
        }
        CherryCSSCollector();
    </script>
    <script type='text/javascript' src='wp-includes/js/jquery/ui/core.mine899.js?ver=1.11.4'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/ui/datepicker.mine899.js?ver=1.11.4'></script>
    <script type='text/javascript'>
        jQuery(document).ready(function(jQuery) {
            jQuery.datepicker.setDefaults({
                "closeText": "Close",
                "currentText": "Today",
                "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                "nextText": "Next",
                "prevText": "Previous",
                "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
                "dateFormat": "MM d, yy",
                "firstDay": 1,
                "isRTL": false
            });
        });
    </script>
    <script type='text/javascript' src='wp-content/plugins/booked/assets/js/spin.min7406.js?ver=2.0.1'></script>
    <script type='text/javascript' src='wp-content/plugins/booked/assets/js/spin.jquery7406.js?ver=2.0.1'></script>
    <script type='text/javascript' src='wp-content/plugins/booked/assets/js/tooltipster/js/jquery.tooltipster.min9b70.js?ver=3.3.0'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var booked_js_vars = {
            "ajax_url": "https:\/\/ld-wp.template-help.com\/wordpress_62555\/4\/default\/wp-admin\/admin-ajax.php",
            "profilePage": "",
            "publicAppointments": "",
            "i18n_confirm_appt_delete": "Are you sure you want to cancel this appointment?",
            "i18n_please_wait": "Please wait ...",
            "i18n_wrong_username_pass": "Wrong username\/password combination.",
            "i18n_fill_out_required_fields": "Please fill out all required fields.",
            "i18n_guest_appt_required_fields": "Please enter your name to book an appointment.",
            "i18n_appt_required_fields": "Please enter your name, your email address and choose a password to book an appointment.",
            "i18n_appt_required_fields_guest": "Please fill in all \"Information\" fields.",
            "i18n_password_reset": "Please check your email for instructions on resetting your password.",
            "i18n_password_reset_error": "That username or email is not recognized."
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='wp-content/plugins/booked/assets/js/functions53cf.js?ver=2.1'></script>
    <script type='text/javascript' src='wp-content/plugins/cherry-testi/includes/swiper/js/swiper.jquery.min3d36.js?ver=3.3.1'></script>
    <script type='text/javascript' src='wp-content/themes/johnnygo/assets/js/min/jquery.slider-pro.min9030.js?ver=1.2.4'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wpcf7 = {
            "apiSettings": {
                "root": "https:\/\/ld-wp.template-help.com\/wordpress_62555\/4\/default\/wp-json\/contact-form-7\/v1",
                "namespace": "contact-form-7\/v1"
            },
            "recaptcha": {
                "messages": {
                    "empty": "Please verify that you are not a robot."
                }
            }
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/scriptsce52.js?ver=5.0.2'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wc_add_to_cart_params = {
            "ajax_url": "\/wordpress_62555\/4\/default\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/wordpress_62555\/4\/default\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View cart",
            "cart_url": "https:\/\/ld-wp.template-help.com\/wordpress_62555\/4\/default\/cart\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min5589.js?ver=3.4.1'></script>
    <script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70'></script>
    <script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var woocommerce_params = {
            "ajax_url": "\/wordpress_62555\/4\/default\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/wordpress_62555\/4\/default\/?wc-ajax=%%endpoint%%"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min5589.js?ver=3.4.1'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wc_cart_fragments_params = {
            "ajax_url": "\/wordpress_62555\/4\/default\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/wordpress_62555\/4\/default\/?wc-ajax=%%endpoint%%",
            "cart_hash_key": "wc_cart_hash_42633acf771b74e62868d98a5cbc9a44",
            "fragment_name": "wc_fragments_42633acf771b74e62868d98a5cbc9a44"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min5589.js?ver=3.4.1'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var tmWoocompare = {
            "ajaxurl": "https:\/\/ld-wp.template-help.com\/wordpress_62555\/4\/default\/wp-admin\/admin-ajax.php",
            "compareText": "Add to Compare",
            "removeText": "Remove from Compare",
            "countFormat": "<span class=\"compare-count\">(%count%)<\/span>"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='wp-content/plugins/tm-woocommerce-compare-wishlist/assets/js/tm-woocompare.min3ec8.js?ver=1.1.6'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var tmWoowishlist = {
            "ajaxurl": "https:\/\/ld-wp.template-help.com\/wordpress_62555\/4\/default\/wp-admin\/admin-ajax.php",
            "addText": "Add to Wishlist",
            "addedText": "Added to Wishlist"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='wp-content/plugins/tm-woocommerce-compare-wishlist/assets/js/tm-woowishlist.min3ec8.js?ver=1.1.6'></script>
    <script type='text/javascript' src='wp-content/themes/johnnygo/assets/js/min/easyzoom.min254d.js?ver=2.3.1'></script>
    <script type='text/javascript' src='wp-content/themes/johnnygo/assets/js/single-product8a54.js?ver=1.0.0'></script>
    <script type='text/javascript' src='wp-content/themes/johnnygo/assets/js/min/jquery.countdown.min3c94.js?ver=2.1.0'></script>
    <script type='text/javascript' src='wp-content/themes/johnnygo/assets/js/woo-theme-script8a54.js?ver=1.0.0'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var cherry_subscribe_form_ajax = {
            "action": "cherry_subscribe_form_ajax",
            "nonce": "d12066d822",
            "type": "POST",
            "data_type": "json",
            "is_public": "true",
            "sys_messages": {
                "invalid_base_data": "Unable to process the request without nonce or server error",
                "no_right": "No right for this action",
                "invalid_nonce": "Stop CHEATING!!!",
                "access_is_allowed": "Access is allowed",
                "wait_processing": "Please wait, processing the previous request"
            }
        };
        var cherryHandlerAjaxUrl = {
            "ajax_url": "https:\/\/ld-wp.template-help.com\/wordpress_62555\/4\/default\/wp-admin\/admin-ajax.php"
        };
        var cherry_login_form_ajax = {
            "action": "cherry_login_form_ajax",
            "nonce": "44cdc6a5a2",
            "type": "POST",
            "data_type": "json",
            "is_public": "true",
            "sys_messages": {
                "invalid_base_data": "Unable to process the request without nonce or server error",
                "no_right": "No right for this action",
                "invalid_nonce": "Stop CHEATING!!!",
                "access_is_allowed": "Access is allowed",
                "wait_processing": "Please wait, processing the previous request"
            }
        };
        var cherryHandlerAjaxUrl = {
            "ajax_url": "https:\/\/ld-wp.template-help.com\/wordpress_62555\/4\/default\/wp-admin\/admin-ajax.php"
        };
        var cherry_register_form_ajax = {
            "action": "cherry_register_form_ajax",
            "nonce": "a6fc49a53a",
            "type": "POST",
            "data_type": "json",
            "is_public": "true",
            "sys_messages": {
                "invalid_base_data": "Unable to process the request without nonce or server error",
                "no_right": "No right for this action",
                "invalid_nonce": "Stop CHEATING!!!",
                "access_is_allowed": "Access is allowed",
                "wait_processing": "Please wait, processing the previous request"
            }
        };
        var cherryHandlerAjaxUrl = {
            "ajax_url": "https:\/\/ld-wp.template-help.com\/wordpress_62555\/4\/default\/wp-admin\/admin-ajax.php"
        };
        var cherry_search_public_action = {
            "action": "cherry_search_public_action",
            "nonce": "fb44881e22",
            "type": "GET",
            "data_type": "json",
            "is_public": "true",
            "sys_messages": {
                "invalid_base_data": "Unable to process the request without nonce or server error",
                "no_right": "No right for this action",
                "invalid_nonce": "Stop CHEATING!!!",
                "access_is_allowed": "Access is allowed",
                "wait_processing": "Please wait, processing the previous request"
            }
        };
        var cherryHandlerAjaxUrl = {
            "ajax_url": "https:\/\/ld-wp.template-help.com\/wordpress_62555\/4\/default\/wp-admin\/admin-ajax.php"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='wp-content/plugins/cherry-services-list/cherry-framework/modules/cherry-handler/assets/js/min/cherry-handler.min8c67.js?ver=1.5.11'></script>
    <script type='text/javascript' src='wp-content/themes/johnnygo/assets/js/min/jquery.magnific-popup.minf488.js?ver=1.1.0'></script>
    <script type='text/javascript' src='wp-content/plugins/cherry-projects/public/assets/js/cherry-projects-single-scripts58c4.js?ver=1.2.13'></script>
    <script type='text/javascript' src='wp-content/plugins/cherry-services-list/cherry-framework/modules/cherry-post-formats-api/assets/js/min/cherry-post-formats.min8c67.js?ver=1.5.11'></script>
    <script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/jquery-cookie/jquery.cookie.min330a.js?ver=1.4.1'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var tmWooAjaxProducts = {
            "ajaxurl": "https:\/\/ld-wp.template-help.com\/wordpress_62555\/4\/default\/wp-admin\/admin-ajax.php",
            "ajaxOrderby": "1",
            "ajaxPagination": "1"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='wp-content/plugins/tm-woocommerce-ajax-filters/assets/js/tm-wc-ajax-products.min97de.js?ver=1.0.5'></script>
    <script type='text/javascript' src='wp-content/plugins/tm-woocommerce-ajax-filters/assets/js/tm-wc-ajax-product-filters.min97de.js?ver=1.0.5'></script>
    <script type='text/javascript' src='wp-content/plugins/tm-mega-menu/public/assets/js/script.min8daf.js?ver=1.1.4'></script>
    <script type='text/javascript' src='../../../../cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min3601.js?ver=2.2.0'></script>
    <script type='text/javascript' src='wp-content/plugins/tm-woocommerce-package/assets/js/tm-products-carousel-widget.min9e1e.js?ver=1.3.2'></script>
    <script type='text/javascript' src='wp-content/plugins/tm-woocommerce-package/assets/js/tm-categories-carousel-widget.min9e1e.js?ver=1.3.2'></script>
    <script type='text/javascript' src='wp-content/plugins/cherry-popups/assets/js/cherry-popups-plugin3ec8.js?ver=1.1.6'></script>
    <script type='text/javascript' src='wp-content/plugins/cherry-popups/assets/js/cherry-popups-scripts3ec8.js?ver=1.1.6'></script>
    <script type='text/javascript' src='wp-includes/js/hoverIntent.minc245.js?ver=1.8.1'></script>
    <script type='text/javascript' src='wp-content/themes/johnnygo/assets/js/min/anime.min8a54.js?ver=1.0.0'></script>
    <script type='text/javascript' src='wp-content/themes/johnnygo/assets/js/tilter8a54.js?ver=1.0.0'></script>
    <script type='text/javascript' src='wp-content/themes/johnnygo/assets/js/min/jquery.ui.totop.min7359.js?ver=1.2.0'></script>
    <script type='text/javascript' src='wp-content/themes/johnnygo/assets/js/jquery.stickup7359.js?ver=1.2.0'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var johnnygo = {
            "ajaxurl": "https:\/\/ld-wp.template-help.com\/wordpress_62555\/4\/default\/wp-admin\/admin-ajax.php",
            "labels": {
                "totop_button": "",
                "header_layout": "style-2"
            },
            "more_button_options": {
                "more_button_type": "text",
                "more_button_text": "More",
                "more_button_icon": "arrows-1_minimal-down",
                "more_button_image_url": false,
                "retina_more_button_image_url": null
            },
            "toTop": "1",
            "megaMenu": {
                "isActive": true,
                "location": "main"
            },
            "new_smart_box_nonce": "015d598385"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='wp-content/themes/johnnygo/assets/js/theme-script8a54.js?ver=1.0.0'></script>
    <script type='text/javascript' src='wp-includes/js/wp-embed.min5010.js?ver=4.9.8'></script>
    <script type='text/javascript' src='wp-includes/js/underscore.min4511.js?ver=1.8.3'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var _wpUtilSettings = {
            "ajax": {
                "url": "\/wordpress_62555\/4\/default\/wp-admin\/admin-ajax.php"
            }
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='wp-includes/js/wp-util.min5010.js?ver=4.9.8'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var cherrySearchMessages = {
            "serverError": "Sorry, but we cannot handle your search query now. Please, try again later!"
        };
        var cherrySearchMessages = {
            "serverError": "Sorry, but we cannot handle your search query now. Please, try again later!"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='wp-content/plugins/cherry-search/assets/js/min/cherry-search.min6c9a.js?ver=1.1.4.1'></script>
    <script type='text/javascript' src='wp-content/plugins/cherry-projects/public/assets/js/jquery.waypoints.min58c4.js?ver=1.2.13'></script>
    <script type='text/javascript' src='wp-includes/js/imagesloaded.min55a0.js?ver=3.2.0'></script>
    <script type='text/javascript' src='wp-content/plugins/cherry-projects/public/assets/js/salvattore.mincb18.js?ver=1.0.9'></script>
    <script type='text/javascript' src='wp-content/plugins/cherry-projects/public/assets/js/cherry-projects-plugin58c4.js?ver=1.2.13'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var cherryProjectsObjects = {
            "ajax_url": "https:\/\/ld-wp.template-help.com\/wordpress_62555\/4\/default\/wp-admin\/admin-ajax.php",
            "cascadingListMap": [2, 2, 3, 3, 3, 4, 4, 4, 4],
            "cascadingListMapDevice": {
                "laptop": [1, 2, 2, 3, 3, 3, 4, 4, 4, 4],
                "album_tablet": [1, 2, 2, 3, 3, 3],
                "portrait_tablet": [1, 2, 2],
                "mobile": [1]
            }
        };
        var cherryProjectsObjects = {
            "ajax_url": "https:\/\/ld-wp.template-help.com\/wordpress_62555\/4\/default\/wp-admin\/admin-ajax.php",
            "cascadingListMap": [2, 2, 3, 3, 3, 4, 4, 4, 4],
            "cascadingListMapDevice": {
                "laptop": [1, 2, 2, 3, 3, 3, 4, 4, 4, 4],
                "album_tablet": [1, 2, 2, 3, 3, 3],
                "portrait_tablet": [1, 2, 2],
                "mobile": [1]
            }
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='wp-content/plugins/cherry-projects/public/assets/js/cherry-projects-scripts58c4.js?ver=1.2.13'></script>
    <script type='text/javascript' src='wp-content/plugins/cherry-testi/public/assets/js/public.minc756.js?ver=1.1.0.5'></script>
    <script type='text/javascript' src='wp-content/plugins/elementor/assets/js/frontend-modulese64e.js?ver=2.5.11'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/ui/position.mine899.js?ver=1.11.4'></script>
    <script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/dialog/dialog.min6996.js?ver=4.7.1'></script>
    <script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2'></script>
    <script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/swiper/swiper.min4f24.js?ver=4.4.6'></script>
    <script type='text/javascript'>
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "version": "2.5.11",
            "urls": {
                "assets": "https:\/\/ld-wp.template-help.com\/wordpress_62555\/4\/default\/wp-content\/plugins\/elementor\/assets\/"
            },
            "settings": {
                "page": [],
                "general": {
                    "elementor_enable_lightbox_in_editor": "yes"
                }
            },
            "post": {
                "id": 278,
                "title": "Home",
                "excerpt": ""
            }
        };
    </script>
    <script type='text/javascript' src='wp-content/plugins/elementor/assets/js/frontend.mine64e.js?ver=2.5.11'></script>
    <script type='text/javascript' src='wp-content/plugins/tm-woocommerce-package/assets/js/elementor-compat-front9e1e.js?ver=1.3.2'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var jetElements = {
            "ajaxUrl": "https:\/\/ld-wp.template-help.com\/wordpress_62555\/4\/default\/wp-admin\/admin-ajax.php",
            "messages": {
                "invalidMail": "Please specify a valid e-mail"
            }
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='wp-content/plugins/jet-elements/assets/js/jet-elements71b1.js?ver=1.15.6'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var cherryServices = {
            "ajaxurl": "https:\/\/ld-wp.template-help.com\/wordpress_62555\/4\/default\/wp-admin\/admin-ajax.php",
            "loader": "<div class=\"cherry-spinner cherry-spinner-double-bounce\"><div class=\"cherry-double-bounce1\"><\/div><div class=\"cherry-double-bounce2\"><\/div><\/div>"
        };
        var cherryServices = {
            "ajaxurl": "https:\/\/ld-wp.template-help.com\/wordpress_62555\/4\/default\/wp-admin\/admin-ajax.php",
            "loader": "<div class=\"cherry-spinner cherry-spinner-double-bounce\"><div class=\"cherry-double-bounce1\"><\/div><div class=\"cherry-double-bounce2\"><\/div><\/div>"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='wp-content/plugins/cherry-services-list/public/assets/js/cherry-services8a54.js?ver=1.0.0'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var cherryTeam = {
            "ajaxurl": "https:\/\/ld-wp.template-help.com\/wordpress_62555\/4\/default\/wp-admin\/admin-ajax.php",
            "loader": "<div class=\"cherry-spinner cherry-spinner-double-bounce\"><div class=\"cherry-double-bounce1\"><\/div><div class=\"cherry-double-bounce2\"><\/div><\/div>"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='wp-content/plugins/cherry-team-members/public/assets/js/cherry-team47a7.js?ver=1.4.5'></script>
    <script type='text/javascript' src='wp-content/plugins/tm-woocommerce-package/assets/js/jquery.rd-material-tabs.min20b9.js?ver=1.0.2'></script>

</body><!-- Google Tag Manager --><noscript><iframe src="http://www.googletagmanager.com/ns.html?id=GTM-P9FT69" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src = '../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-P9FT69');
</script><!-- End Google Tag Manager -->

<!-- Mirrored from ld-wp.template-help.com/wordpress_62555/4/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 May 2020 15:53:25 GMT -->

</html>