@php
    $settingData = settings();
@endphp

<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <script>
        document.documentElement.className = document.documentElement.className + ' yes-js js_active js'
    </script>
    <title>Nooni &#8211; Elementor WooCommerce WordPress Theme</title>
    <meta name='robots' content='noindex, nofollow' />
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
    <link rel='preconnect' href='https://fonts.gstatic.com/' crossorigin />
    <link rel="alternate" type="application/rss+xml" title="Nooni &raquo; Feed"
        href="https://demo.theme-sky.com/nooni-fashion/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Nooni &raquo; Comments Feed"
        href="https://demo.theme-sky.com/nooni-fashion/comments/feed/" />
    <style id='classic-theme-styles-inline-css' type='text/css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css' type='text/css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel="stylesheet" href="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/cache/minify/e7801.css"
        media="all" />





    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel="stylesheet" href="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/cache/minify/06acf.css"
        media="all" />






    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css?family=Inter:400,500,700&amp;display=swap&amp;ver=1694399027" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Inter:400,500,700&amp;display=swap&amp;ver=1694399027"
        media="print" onload="this.media='all'"><noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Inter:400,500,700&amp;display=swap&amp;ver=1694399027" />
    </noscript>
    <link rel="stylesheet" href="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/cache/minify/94c98.css"
        media="all" />






    <script type="text/template" id="tmpl-variation-template">
	<div class="woocommerce-variation-description"></div>
	<div class="woocommerce-variation-price"></div>
	<div class="woocommerce-variation-availability"></div>
</script>

    <script src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/cache/minify/de34a.js"></script>


    <link rel="https://api.w.org/" href="https://demo.theme-sky.com/nooni-fashion/wp-json/" />
    <link rel="alternate" type="application/json"
        href="https://demo.theme-sky.com/nooni-fashion/wp-json/wp/v2/pages/5327" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD"
        href="https://demo.theme-sky.com/nooni-fashion/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.4.3" />
    <meta name="generator" content="WooCommerce 8.2.1" />
    <link rel="canonical" href="https://demo.theme-sky.com/nooni-fashion/" />
    <link rel='shortlink' href='https://demo.theme-sky.com/nooni-fashion/' />
    <link rel="alternate" type="application/json+oembed"
        href="https://demo.theme-sky.com/nooni-fashion/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.theme-sky.com%2Fnooni-fashion%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="https://demo.theme-sky.com/nooni-fashion/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.theme-sky.com%2Fnooni-fashion%2F&amp;format=xml" />
    <meta name="generator" content="Redux 4.4.8" /> <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <meta name="generator"
        content="Elementor 3.16.6; features: e_dom_optimization, e_optimized_assets_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto">
    <meta name="generator"
        content="Powered by Slider Revolution 6.6.18 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />

</head>

<body
    class="home page-template-default page page-id-5327 theme-nooni woocommerce-no-js wide header-v4 product-label-rectangle product-hover-vertical-style ts_desktop e-lazyload elementor-default elementor-kit-12 elementor-page elementor-page-5327">

    <div id="page" class="hfeed site">


        <!-- Page Slider -->


        @include('Frontend.layouts.header')


        <div id="main" class="wrapper">
            <!-- Page slider -->

            <div class="page-container  no-sidebar">

                <!-- Left Sidebar -->


                <!-- Main Content -->
                <div id="main-content">
                    <div id="primary" class="site-content">
                        <article id="post-5327" class="post-5327 page type-page status-publish hentry">
                            <div data-elementor-type="wp-page" data-elementor-id="5327"
                                class="elementor elementor-5327">

                                <div class="elementor-element elementor-element-6814cc1 e-con-full e-flex e-con e-parent"
                                    data-id="6814cc1" data-element_type="container"
                                    data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                                    data-core-v316-plus="true">
                                    <div class="elementor-element elementor-element-bddad11 elementor-widget elementor-widget-slider_revolution"
                                        data-id="bddad11" data-element_type="widget"
                                        data-widget_type="slider_revolution.default">
                                        <div class="elementor-widget-container">
                                            <div class="wp-block-themepunch-revslider">
                                                <!-- START Fashion 1 REVOLUTION SLIDER 6.6.18 -->
                                                <p class="rs-p-wp-fix"></p>
                                                <rs-module-wrap id="rev_slider_56_1_wrapper" data-source="gallery"
                                                    style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                                                    <rs-module id="rev_slider_56_1" style=""
                                                        data-version="6.6.18">
                                                        <rs-slides style="overflow: hidden; position: absolute;">
                                                            <!-- slider sliders -->
                                                            @foreach ($sliderList as $key => $slide)
                                                                <rs-slide style="position: absolute;"
                                                                    data-key="rs-{{ $key }}"
                                                                    data-thumb="{{ asset($slide->image ?? null) }}"
                                                                    data-in="o:0;y:-100%;" data-out="a:false;">
                                                                    <img decoding="async"
                                                                        src="{{ asset($slide->image ?? null) }}"
                                                                        alt="slide-1-home4" title="slide-1-home4"
                                                                        width="1920" height="1400"
                                                                        class="rev-slidebg tp-rs-img rs-lazyload"
                                                                        data-lazyload="{{ asset($slide->image ?? null) }}"
                                                                        data-bg="p:85% 100%;" data-no-retina>

                                                                    {{-- <rs-group id="slider-56-slide-209-layer-5"
                                                                    data-type="group" data-rsp_ch="on"
                                                                    data-xy="x:l,l,l,c;xo:70px,50px,30px,0;y:m,m,m,t;yo:0,0,0,50px;"
                                                                    data-text="w:normal;s:20,14,10,6;l:0,17,12,7;"
                                                                    data-dim="w:677px,500px,450px,90%;h:328px,260px,220px,230px;"
                                                                    data-frame_0="y:-50,-35,-25,-15;"
                                                                    data-frame_1="e:expo.out;st:600;sp:500;"
                                                                    data-frame_999="y:50,35,25,15;o:0;st:w;sp:1000;sA:9000;"
                                                                    style="z-index:7;"><rs-layer
                                                                        id="slider-56-slide-209-layer-6"
                                                                        data-type="text" data-color="#000000"
                                                                        data-xy="x:l,l,l,c;" data-pos="a"
                                                                        data-text="w:normal;s:18,16,14,15;l:30,20,24,18;ls:1.2px,0px,1px,1px;a:left,left,left,center;"
                                                                        data-rsp_bd="off" data-frame_0="o:1;"
                                                                        data-frame_999="o:1;st:w;sR:8700;"
                                                                        style="z-index:10;font-family:'Inter';">NEW
                                                                        ARRIVALS
                                                                    </rs-layer><rs-layer
                                                                        id="slider-56-slide-209-layer-1"
                                                                        data-type="text" data-color="#000000"
                                                                        data-rsp_ch="on" data-xy="x:l,l,l,c;yo:35px;"
                                                                        data-pos="a"
                                                                        data-text="w:normal;s:72,46,36,40;l:90,56,42,54;ls:5px,3px,2px,3px;a:left,left,left,center;"
                                                                        data-dim="w:auto,auto,100%,100%;"
                                                                        data-frame_0="o:1;"
                                                                        data-frame_999="o:1;st:w;sR:8700;"
                                                                        style="z-index:9;font-family:'Inter';">Discover
                                                                        The<br />
                                                                        Latest Collection
                                                                    </rs-layer><rs-layer
                                                                        id="slider-56-slide-209-layer-2"
                                                                        data-type="text" data-color="#000000"
                                                                        data-xy="x:l,l,l,c;yo:225px,170px,140px,155px;"
                                                                        data-pos="a"
                                                                        data-text="w:normal;s:16,16,14,15;l:30,20,20,24;a:left,left,left,center;"
                                                                        data-dim="w:auto,auto,auto,100%;"
                                                                        data-rsp_bd="off" data-frame_0="o:1;"
                                                                        data-frame_999="o:1;st:w;sR:8700;"
                                                                        style="z-index:7;font-family:'Inter';"><strong>Free
                                                                            Shipping</strong> On Orders $119+
                                                                    </rs-layer><a id="slider-56-slide-209-layer-9"
                                                                        class="rs-layer"
                                                                        href="https://demo.theme-sky.com/nooni-fashion/shop/"
                                                                        target="_self" data-type="text"
                                                                        data-color="#000000"
                                                                        data-xy="x:l,l,l,c;y:t,t,t,b;yo:307px,240px,200px,0;"
                                                                        data-pos="a"
                                                                        data-text="w:normal;s:14,14,14,13;l:18;ls:1px;fw:700;"
                                                                        data-wrpcls="ts-button" data-rsp_bd="off"
                                                                        data-frame_0="o:1;"
                                                                        data-frame_999="o:1;st:w;sR:8700;"
                                                                        style="z-index:6;font-family:'Inter';">SHOP NOW
                                                                    </a></rs-group> --}}
                                                                </rs-slide>
                                                            @endforeach


                                                            <!-- slider sliders -->

                                                        </rs-slides>
                                                        <rs-static-layers>
                                                            <rs-layer id="slider-56-slide-56-layer-0"
                                                                class="rs-layer-static" data-type="shape"
                                                                data-rsp_ch="on" data-xy="x:r;y:m;"
                                                                data-text="w:normal;s:20,14,10,6;l:0,17,12,7;"
                                                                data-dim="w:5%,6%,6%,6%;h:100%;"
                                                                data-vbility="t,f,f,f" data-basealign="slide"
                                                                data-onslides="s:1;" data-frame_999="o:0;st:w;"
                                                                style="z-index:6;background-color:#ffffff;">
                                                            </rs-layer>
                                                        </rs-static-layers>
                                                    </rs-module>
                                                    <script>
                                                        setREVStartSize({
                                                            c: 'rev_slider_56_1',
                                                            rl: [1400, 1280, 991, 480],
                                                            el: [825, 500, 400, 730],
                                                            gw: [1550, 1100, 800, 480],
                                                            gh: [825, 500, 400, 730],
                                                            type: 'standard',
                                                            justify: '',
                                                            layout: 'fullwidth',
                                                            mh: "0"
                                                        });
                                                        if (window.RS_MODULES !== undefined && window.RS_MODULES.modules !== undefined && window.RS_MODULES.modules[
                                                                "revslider561"] !== undefined) {
                                                            window.RS_MODULES.modules["revslider561"].once = false;
                                                            window.revapi56 = undefined;
                                                            if (window.RS_MODULES.checkMinimal !== undefined) window.RS_MODULES.checkMinimal()
                                                        }
                                                    </script>
                                                </rs-module-wrap>

                                                <!-- END REVOLUTION SLIDER -->
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="elementor-element elementor-element-531c096 e-flex e-con-boxed e-con e-parent"
                                    data-id="531c096" data-element_type="container"
                                    data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                                    data-core-v316-plus="true">
                                    <div class="e-con-inner">
                                        <div class="elementor-element elementor-element-d2064b3 elementor-widget elementor-widget-ts-products-in-product-type-tabs"
                                            data-id="d2064b3" data-element_type="widget"
                                            data-widget_type="ts-products-in-product-type-tabs.default">
                                            <div class="elementor-widget-container">
                                                <div class="ts-product-in-product-type-tab-wrapper ts-shortcode ts-product style-tabs-default ts-slider rows-1"
                                                    id="ts-product-in-product-type-tab-894"
                                                    data-atts="{&quot;columns&quot;:5,&quot;rows&quot;:&quot;1&quot;,&quot;limit&quot;:7,&quot;product_cats&quot;:&quot;&quot;,&quot;include_children&quot;:1,&quot;product_type&quot;:&quot;featured&quot;,&quot;show_image&quot;:&quot;1&quot;,&quot;show_title&quot;:&quot;1&quot;,&quot;show_sku&quot;:&quot;0&quot;,&quot;show_price&quot;:&quot;1&quot;,&quot;show_short_desc&quot;:&quot;0&quot;,&quot;show_rating&quot;:&quot;0&quot;,&quot;show_label&quot;:&quot;1&quot;,&quot;show_categories&quot;:&quot;0&quot;,&quot;show_brands&quot;:&quot;0&quot;,&quot;show_add_to_cart&quot;:&quot;1&quot;,&quot;show_color_swatch&quot;:&quot;0&quot;,&quot;number_color_swatch&quot;:null,&quot;is_slider&quot;:&quot;1&quot;,&quot;show_nav&quot;:&quot;&quot;,&quot;auto_play&quot;:&quot;1&quot;}"
                                                    data-nav="" data-autoplay="1" data-columns="5">
                                                    <div class="column-tabs">
                                                        <ul class="tabs">
                                                            <li class="tab-item current" data-id="tab-3b85a40"
                                                                data-product_type="featured">BESTSELLERS</li>
                                                        </ul>

                                                        <div class="shop-more tab-3b85a40" style="">
                                                            <a class="shop-more-button"
                                                                href="https://demo.theme-sky.com/nooni-fashion/shop/?orderby=popularity"
                                                                target="_blank" rel="nofollow">
                                                                See All </a>
                                                        </div>
                                                        <div class="shop-more tab-2b73727" style="display: none">
                                                            <a class="shop-more-button"
                                                                href="https://demo.theme-sky.com/nooni-fashion/shop/?orderby=date"
                                                                target="_blank" rel="nofollow">
                                                                See All </a>
                                                        </div>
                                                    </div>

                                                    <div class="column-content">

                                                        <div
                                                            class="column-products woocommerce columns-5 featured loading">
                                                            <div class="products">
                                                                @foreach ($productList as $product)
                                                                    <section
                                                                        class="product add-to-wishlist-after_add_to_cart type-product post-3578 status-publish first instock product_cat-20th-century product_cat-21th-century product_cat-activities product_cat-body-fit product_cat-casual-clothings product_cat-collections product_cat-women-dresses product_cat-fashion-style product_cat-petite product_cat-spring-collection product_cat-summer-clothings product_cat-summer-collection product_cat-tall product_cat-vacation-wedding product_cat-vintage-collection product_cat-women product_tag-tag-fashion product_tag-trending product_tag-tag-women has-post-thumbnail sale featured shipping-taxable purchasable product-type-variable"
                                                                        data-product_id="3578">
                                                                        <div class="product-wrapper">

                                                                            <div class="thumbnail-wrapper">
                                                                                <a
                                                                                    href="{{url('product-details',[$product->slug])}}">
                                                                                    @php
                                                                                        $productImage=json_decode($product->image)
                                                                                    @endphp
                                                                                    
                                                                                    <figure class="has-back-image"><img
                                                                                            loading="lazy"
                                                                                            decoding="async"
                                                                                            src=""
                                                                                            data-src="{{asset($productImage[0])}}"
                                                                                            class="attachment-shop_catalog wp-post-image ts-lazy-load"
                                                                                           
                                                                                            width="450"
                                                                                            height="572" /><img
                                                                                            loading="lazy"
                                                                                            decoding="async"
                                                                                            src="{{asset($productImage[0])}}"
                                                                                            data-src="{{asset($productImage[0])}}"
                                                                                            class="product-image-back ts-lazy-load"
                                                                                            alt=""
                                                                                            width="450"
                                                                                            height="572" /></figure>
                                                                                </a>
                                                                                <div
                                                                                    class="product-label on-thumbnail">
                                                                                    <span
                                                                                        class="featured"><span>Hot</span></span><span
                                                                                        class="onsale"><span>Sale</span></span>
                                                                                </div>
                                                                                <div class="product-group-button">
                                                                                    <div class="loop-add-to-cart"><a
                                                                                            href="https://demo.theme-sky.com/nooni-fashion/shop/chiffon-wrap-button-detail-maxi-dress/"
                                                                                           
                                                                                            class="button product_type_variable add_to_cart_button"
                                                                                          ><span
                                                                                                class="ts-tooltip button-tooltip">Add
                                                                                                to cart</span></a></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="meta-wrapper">
                                                                                <h3 class="heading-title product-name">
                                                                                    <a
                                                                                        href="https://demo.theme-sky.com/nooni-fashion/shop/chiffon-wrap-button-detail-maxi-dress/">
                                                                                       {{$product->productOne->product_name ?? null}}
                                                                                    </a>
                                                                                </h3>
                                                                                <span class="price"><del
                                                                                        aria-hidden="true"><span
                                                                                            class="woocommerce-Price-amount amount"><bdi><span
                                                                                                    class="woocommerce-Price-currencySymbol">&#36;</span>{{$product->productOne->product_name ?? null}}</bdi></span></del>
                                                                                    <ins><span
                                                                                            class="woocommerce-Price-amount amount"><bdi><span
                                                                                                    class="woocommerce-Price-currencySymbol">&#36;</span>{{$product->productOne->product_name ?? null}}</bdi></span></ins></span>
                                                                                <div class="product-group-button-meta">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                @endforeach

                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="shop-more tab-3b85a40" style="">
                                                        <a class="shop-more-button"
                                                            href="https://demo.theme-sky.com/nooni-fashion/shop/?orderby=popularity"
                                                            target="_blank" rel="nofollow">
                                                            See All </a>
                                                    </div>
                                                    <div class="shop-more tab-2b73727" style="display: none">
                                                        <a class="shop-more-button"
                                                            href="https://demo.theme-sky.com/nooni-fashion/shop/?orderby=date"
                                                            target="_blank" rel="nofollow">
                                                            See All </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-38d3e9e e-flex e-con-boxed e-con e-parent"
                                    data-id="38d3e9e" data-element_type="container"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}"
                                    data-e-bg-lazyload="" data-core-v316-plus="true">
                                    <div class="e-con-inner">
                                        <div class="elementor-element elementor-element-f6eda42 elementor-widget elementor-widget-text-editor"
                                            data-id="f6eda42" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>COAT &amp; JACKETS</p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-02d64c5 elementor-widget elementor-widget-spacer"
                                            data-id="02d64c5" data-element_type="widget"
                                            data-widget_type="spacer.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer">
                                                    <div class="elementor-spacer-inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-7e8d031 elementor-widget__width-initial elementor-widget elementor-widget-heading"
                                            data-id="7e8d031" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">The New
                                                    Fashion Collection</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-01c586f elementor-widget elementor-widget-spacer"
                                            data-id="01c586f" data-element_type="widget"
                                            data-widget_type="spacer.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer">
                                                    <div class="elementor-spacer-inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-027dbef elementor-align-center button-text elementor-widget elementor-widget-button"
                                            data-id="027dbef" data-element_type="widget"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a class="elementor-button elementor-button-link elementor-size-sm"
                                                        href="https://demo.theme-sky.com/nooni-fashion/shop/">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-text">Shop now</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-2c2b635 e-flex e-con-boxed e-con e-parent"
                                    data-id="2c2b635" data-element_type="container"
                                    data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                                    data-core-v316-plus="true">
                                    <div class="e-con-inner">
                                        <div class="elementor-element elementor-element-d9ac2ee title-align--mobilecenter title-align-left elementor-widget elementor-widget-ts-product-deals"
                                            data-id="d9ac2ee" data-element_type="widget"
                                            data-widget_type="ts-product-deals.default">
                                            <div class="elementor-widget-container">
                                                <div class="ts-product-deals-wrapper ts-shortcode ts-product woocommerce columns-3 layout-slider show-counter-today ts-slider rows-1"
                                                    data-nav="" data-autoplay="1" data-columns="3">

                                                    <header class="shortcode-heading-wrapper">

                                                        <h2 class="shortcode-title">
                                                            DEAL OF THE WEEK </h2>

                                                        <div class="ts-countdown style-default">
                                                            <div class="counter-wrapper days-2">
                                                                <div class="days hidden" data-days="00">
                                                                    <div class="number-wrapper">
                                                                        <span class="number">00</span>
                                                                    </div>
                                                                    <div class="ref-wrapper">
                                                                        days </div>
                                                                </div>
                                                                <div class="hours" data-hours="22">
                                                                    <div class="number-wrapper">
                                                                        <span class="number">22</span>
                                                                    </div>
                                                                    <div class="ref-wrapper">
                                                                        hours </div>
                                                                </div>
                                                                <span class="dots">:</span>
                                                                <div class="minutes" data-minutes="17">
                                                                    <div class="number-wrapper">
                                                                        <span class="number">17</span>
                                                                    </div>
                                                                    <div class="ref-wrapper">
                                                                        mins </div>
                                                                </div>
                                                                <span class="dots">:</span>
                                                                <div class="seconds" data-seconds="58">
                                                                    <div class="number-wrapper">
                                                                        <span class="number">58</span>
                                                                    </div>
                                                                    <div class="ref-wrapper">
                                                                        secs </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="shop-more hidden-phone">
                                                            <a class="shop-more-button"
                                                                href="https://demo.theme-sky.com/nooni-fashion/shop/?onsale=yes"
                                                                target="_blank" rel="nofollow">See All</a>
                                                        </div>

                                                    </header>

                                                    <div class="content-wrapper loading">
                                                        <div class="products">



                                                            <section
                                                                class="product add-to-wishlist-after_add_to_cart type-product post-3578 status-publish first instock product_cat-20th-century product_cat-21th-century product_cat-activities product_cat-body-fit product_cat-casual-clothings product_cat-collections product_cat-women-dresses product_cat-fashion-style product_cat-petite product_cat-spring-collection product_cat-summer-clothings product_cat-summer-collection product_cat-tall product_cat-vacation-wedding product_cat-vintage-collection product_cat-women product_tag-tag-fashion product_tag-trending product_tag-tag-women has-post-thumbnail sale featured shipping-taxable purchasable product-type-variable"
                                                                data-product_id="3578">
                                                                <div class="product-wrapper">

                                                                    <div class="thumbnail-wrapper">
                                                                        <a
                                                                            href="https://demo.theme-sky.com/nooni-fashion/shop/chiffon-wrap-button-detail-maxi-dress/">
                                                                            <figure class="has-back-image"><img
                                                                                    loading="lazy" decoding="async"
                                                                                    src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/themes/nooni/images/prod_loading.gif"
                                                                                    data-src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2023/06/38-450x572.jpg"
                                                                                    class="attachment-shop_catalog wp-post-image ts-lazy-load"
                                                                                    alt="" width="450"
                                                                                    height="572" /><img
                                                                                    loading="lazy" decoding="async"
                                                                                    src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/themes/nooni/images/prod_loading.gif"
                                                                                    data-src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2023/06/38_7-450x572.jpg"
                                                                                    class="product-image-back ts-lazy-load"
                                                                                    alt="" width="450"
                                                                                    height="572" />
                                                                            </figure>
                                                                        </a>
                                                                        <div class="product-label on-thumbnail">
                                                                            <span
                                                                                class="featured"><span>Hot</span></span><span
                                                                                class="onsale"><span>Sale</span></span>
                                                                        </div>
                                                                        <div class="product-group-button">
                                                                            <div class="loop-add-to-cart"><a
                                                                                    href="https://demo.theme-sky.com/nooni-fashion/shop/chiffon-wrap-button-detail-maxi-dress/"
                                                                                    data-quantity="1"
                                                                                    class="button product_type_variable add_to_cart_button"
                                                                                    data-product_id="3578"
                                                                                    data-product_sku="0093"
                                                                                    aria-label="Select options for &ldquo;Chiffon Wrap Button Detail Maxi Dress&rdquo;"
                                                                                    rel="nofollow"><span
                                                                                        class="ts-tooltip button-tooltip">Add
                                                                                        to cart</span></a></div>



                                                                        </div>
                                                                    </div>
                                                                    <div class="meta-wrapper">
                                                                        <h3 class="heading-title product-name"><a
                                                                                href="https://demo.theme-sky.com/nooni-fashion/shop/chiffon-wrap-button-detail-maxi-dress/">Chiffon
                                                                                Wrap Button Detail Maxi Dress</a></h3>
                                                                        <span class="price"><del
                                                                                aria-hidden="true"><span
                                                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                                                            class="woocommerce-Price-currencySymbol">&#36;</span>1,259</bdi></span></del>
                                                                            <ins><span
                                                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                                                            class="woocommerce-Price-currencySymbol">&#36;</span>1,009</bdi></span></ins></span>
                                                                        <div class="product-group-button-meta"></div>
                                                                    </div>
                                                                </div>
                                                            </section>

                                                            <section
                                                                class="product add-to-wishlist-after_add_to_cart type-product post-254 status-publish instock product_cat-20th-century product_cat-21th-century product_cat-activities product_cat-body-fit product_cat-casual-clothings product_cat-women-coats-jackets product_cat-collections product_cat-fashion-style product_cat-pastel-collection product_cat-petite product_cat-sport-clothings product_cat-tall product_cat-tops product_cat-winter-collection product_cat-women product_cat-work-clothings has-post-thumbnail sale shipping-taxable purchasable product-type-simple"
                                                                data-product_id="254">
                                                                <div class="product-wrapper">

                                                                    <div class="thumbnail-wrapper">
                                                                        <a
                                                                            href="https://demo.theme-sky.com/nooni-fashion/shop/womens-croptop-jacket/">
                                                                            <figure class="has-back-image"><img
                                                                                    loading="lazy" decoding="async"
                                                                                    src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/themes/nooni/images/prod_loading.gif"
                                                                                    data-src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2023/04/07-450x572.jpg"
                                                                                    class="attachment-shop_catalog wp-post-image ts-lazy-load"
                                                                                    alt="" width="450"
                                                                                    height="572" /><img
                                                                                    loading="lazy" decoding="async"
                                                                                    src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/themes/nooni/images/prod_loading.gif"
                                                                                    data-src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2023/04/24-450x572.jpg"
                                                                                    class="product-image-back ts-lazy-load"
                                                                                    alt="" width="450"
                                                                                    height="572" />
                                                                            </figure>
                                                                        </a>
                                                                        <div class="product-label on-thumbnail">
                                                                            <span
                                                                                class="onsale"><span>Sale</span></span>
                                                                        </div>
                                                                        <div class="product-group-button">
                                                                            <div class="loop-add-to-cart"><a
                                                                                    href="https://demo.theme-sky.com/nooni-fashion/?add-to-cart=254"
                                                                                    data-quantity="1"
                                                                                    class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                    data-product_id="254"
                                                                                    data-product_sku="VNBC3F"
                                                                                    aria-label="Add &ldquo;Women&#039;s Croptop Jacket&rdquo; to your cart"
                                                                                    rel="nofollow"><span
                                                                                        class="ts-tooltip button-tooltip">Add
                                                                                        to cart</span></a></div>

                                                                            <div class="button-in compare"><a
                                                                                    class="compare"
                                                                                    href="https://demo.theme-sky.com/nooni-fashion?action=yith-woocompare-add-product&amp;id=254"
                                                                                    data-product_id="254"><span
                                                                                        class="ts-tooltip button-tooltip"
                                                                                        data-title="Add to compare">Compare</span></a>
                                                                            </div>
                                                                            <div class="button-in quickshop"><a
                                                                                    class="quickshop" href="#"
                                                                                    data-product_id="254"><span
                                                                                        class="ts-tooltip button-tooltip">Quick
                                                                                        view</span></a></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="meta-wrapper">
                                                                        <h3 class="heading-title product-name"><a
                                                                                href="https://demo.theme-sky.com/nooni-fashion/shop/womens-croptop-jacket/">Women&#039;s
                                                                                Croptop Jacket</a></h3>
                                                                        <span class="price"><del
                                                                                aria-hidden="true"><span
                                                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                                                            class="woocommerce-Price-currencySymbol">&#36;</span>429</bdi></span></del>
                                                                            <ins><span
                                                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                                                            class="woocommerce-Price-currencySymbol">&#36;</span>299</bdi></span></ins></span>
                                                                        <div class="product-group-button-meta"></div>
                                                                    </div>
                                                                </div>
                                                            </section>

                                                            <section
                                                                class="product add-to-wishlist-after_add_to_cart type-product post-259 status-publish last instock product_cat-19th-century product_cat-20th-century product_cat-activities product_cat-body-fit product_cat-casual-clothings product_cat-collections product_cat-curve-plus-size product_cat-women-dresses product_cat-fall-collection product_cat-fashion-style product_cat-maternity product_cat-petite product_cat-spring-collection product_cat-summer-clothings product_cat-summer-collection product_cat-tall product_cat-vacation-wedding product_cat-vintage-collection product_cat-women has-post-thumbnail sale shipping-taxable purchasable product-type-simple"
                                                                data-product_id="259">
                                                                <div class="product-wrapper">

                                                                    <div class="thumbnail-wrapper">
                                                                        <a
                                                                            href="https://demo.theme-sky.com/nooni-fashion/shop/womens-floral-midi-dress/">
                                                                            <figure class="has-back-image"><img
                                                                                    loading="lazy" decoding="async"
                                                                                    src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/themes/nooni/images/prod_loading.gif"
                                                                                    data-src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2023/04/10-450x572.jpg"
                                                                                    class="attachment-shop_catalog wp-post-image ts-lazy-load"
                                                                                    alt="" width="450"
                                                                                    height="572" /><img
                                                                                    loading="lazy" decoding="async"
                                                                                    src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/themes/nooni/images/prod_loading.gif"
                                                                                    data-src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2023/04/15-450x572.jpg"
                                                                                    class="product-image-back ts-lazy-load"
                                                                                    alt="" width="450"
                                                                                    height="572" />
                                                                            </figure>
                                                                        </a>
                                                                        <div class="product-label on-thumbnail">
                                                                            <span
                                                                                class="onsale"><span>Sale</span></span>
                                                                        </div>
                                                                        <div class="product-group-button">
                                                                            <div class="loop-add-to-cart"><a
                                                                                    href="https://demo.theme-sky.com/nooni-fashion/?add-to-cart=259"
                                                                                    data-quantity="1"
                                                                                    class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                    data-product_id="259"
                                                                                    data-product_sku="1GF7DV"
                                                                                    aria-label="Add &ldquo;Women&#039;s Floral Midi Dress&rdquo; to your cart"
                                                                                    rel="nofollow"><span
                                                                                        class="ts-tooltip button-tooltip">Add
                                                                                        to cart</span></a></div>

                                                                            <div class="button-in compare"><a
                                                                                    class="compare"
                                                                                    href="https://demo.theme-sky.com/nooni-fashion?action=yith-woocompare-add-product&amp;id=259"
                                                                                    data-product_id="259"><span
                                                                                        class="ts-tooltip button-tooltip"
                                                                                        data-title="Add to compare">Compare</span></a>
                                                                            </div>
                                                                            <div class="button-in quickshop"><a
                                                                                    class="quickshop" href="#"
                                                                                    data-product_id="259"><span
                                                                                        class="ts-tooltip button-tooltip">Quick
                                                                                        view</span></a></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="meta-wrapper">
                                                                        <h3 class="heading-title product-name"><a
                                                                                href="https://demo.theme-sky.com/nooni-fashion/shop/womens-floral-midi-dress/">Women&#039;s
                                                                                Floral Midi Dress</a></h3>
                                                                        <span class="price"><del
                                                                                aria-hidden="true"><span
                                                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                                                            class="woocommerce-Price-currencySymbol">&#36;</span>2,099</bdi></span></del>
                                                                            <ins><span
                                                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                                                            class="woocommerce-Price-currencySymbol">&#36;</span>1,399</bdi></span></ins></span>
                                                                        <div class="product-group-button-meta"></div>
                                                                    </div>
                                                                </div>
                                                            </section>

                                                            <section
                                                                class="product add-to-wishlist-after_add_to_cart type-product post-253 status-publish first outofstock product_cat-18th-century product_cat-19th-century product_cat-activities product_cat-body-fit product_cat-casual-clothings product_cat-collections product_cat-curve-plus-size product_cat-fall-collection product_cat-fashion-style product_cat-women-hoodies-sweatshirts product_cat-women-knitwear product_cat-maternity product_cat-petite product_cat-tall product_cat-tops product_cat-vacation-wedding product_cat-vintage-collection product_cat-winter-collection product_cat-women product_cat-work-clothings has-post-thumbnail sale featured shipping-taxable purchasable product-type-simple"
                                                                data-product_id="253">
                                                                <div class="product-wrapper">

                                                                    <div class="thumbnail-wrapper">
                                                                        <a
                                                                            href="https://demo.theme-sky.com/nooni-fashion/shop/long-sleeve-pullover-winter-knitwear/">
                                                                            <figure class="has-back-image"><img
                                                                                    loading="lazy" decoding="async"
                                                                                    src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/themes/nooni/images/prod_loading.gif"
                                                                                    data-src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2023/04/11-450x572.jpg"
                                                                                    class="attachment-shop_catalog wp-post-image ts-lazy-load"
                                                                                    alt="" width="450"
                                                                                    height="572" /><img
                                                                                    loading="lazy" decoding="async"
                                                                                    src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/themes/nooni/images/prod_loading.gif"
                                                                                    data-src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2023/04/30-450x572.jpg"
                                                                                    class="product-image-back ts-lazy-load"
                                                                                    alt="" width="450"
                                                                                    height="572" />
                                                                            </figure>
                                                                        </a>
                                                                        <div class="product-label on-thumbnail">
                                                                            <span class="out-of-stock"><span>Sold
                                                                                    out</span></span>
                                                                        </div>
                                                                        <div class="product-group-button">
                                                                            <div class="loop-add-to-cart"><a
                                                                                    href="https://demo.theme-sky.com/nooni-fashion/shop/long-sleeve-pullover-winter-knitwear/"
                                                                                    data-quantity="1"
                                                                                    class="button product_type_simple"
                                                                                    data-product_id="253"
                                                                                    data-product_sku="CCFO71"
                                                                                    aria-label="Read more about &ldquo;Long Sleeve Pullover Winter Knitwear&rdquo;"
                                                                                    rel="nofollow"><span
                                                                                        class="ts-tooltip button-tooltip">Read
                                                                                        more</span></a></div>

                                                                            <div class="button-in compare"><a
                                                                                    class="compare"
                                                                                    href="https://demo.theme-sky.com/nooni-fashion?action=yith-woocompare-add-product&amp;id=253"
                                                                                    data-product_id="253"><span
                                                                                        class="ts-tooltip button-tooltip"
                                                                                        data-title="Add to compare">Compare</span></a>
                                                                            </div>
                                                                            <div class="button-in quickshop"><a
                                                                                    class="quickshop" href="#"
                                                                                    data-product_id="253"><span
                                                                                        class="ts-tooltip button-tooltip">Quick
                                                                                        view</span></a></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="meta-wrapper">
                                                                        <h3 class="heading-title product-name"><a
                                                                                href="https://demo.theme-sky.com/nooni-fashion/shop/long-sleeve-pullover-winter-knitwear/">Long
                                                                                Sleeve Pullover Winter Knitwear</a></h3>
                                                                        <span class="price"><del
                                                                                aria-hidden="true"><span
                                                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                                                            class="woocommerce-Price-currencySymbol">&#36;</span>599</bdi></span></del>
                                                                            <ins><span
                                                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                                                            class="woocommerce-Price-currencySymbol">&#36;</span>399</bdi></span></ins></span>
                                                                        <div class="product-group-button-meta"></div>
                                                                    </div>
                                                                </div>
                                                            </section>

                                                            <section
                                                                class="product add-to-wishlist-after_add_to_cart type-product post-296 status-publish instock product_cat-18th-century product_cat-19th-century product_cat-20th-century product_cat-21th-century product_cat-activities product_cat-body-fit product_cat-casual-clothings product_cat-collections product_cat-women-dresses product_cat-fashion-style product_cat-pastel-collection product_cat-petite product_cat-spring-collection product_cat-summer-collection product_cat-tall product_cat-vacation-wedding product_cat-vintage-collection product_cat-women product_cat-work-clothings has-post-thumbnail sale shipping-taxable purchasable product-type-simple"
                                                                data-product_id="296">
                                                                <div class="product-wrapper">

                                                                    <div class="thumbnail-wrapper">
                                                                        <a
                                                                            href="https://demo.theme-sky.com/nooni-fashion/shop/womens-long-sleeve-shirt-dress/">
                                                                            <figure class="has-back-image"><img
                                                                                    loading="lazy" decoding="async"
                                                                                    src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/themes/nooni/images/prod_loading.gif"
                                                                                    data-src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2023/04/16-450x572.jpg"
                                                                                    class="attachment-shop_catalog wp-post-image ts-lazy-load"
                                                                                    alt="" width="450"
                                                                                    height="572" /><img
                                                                                    loading="lazy" decoding="async"
                                                                                    src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/themes/nooni/images/prod_loading.gif"
                                                                                    data-src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2023/04/10-450x572.jpg"
                                                                                    class="product-image-back ts-lazy-load"
                                                                                    alt="" width="450"
                                                                                    height="572" />
                                                                            </figure>
                                                                        </a>
                                                                        <div class="product-label on-thumbnail">
                                                                            <span
                                                                                class="onsale"><span>Sale</span></span>
                                                                        </div>
                                                                        <div class="product-group-button">
                                                                            <div class="loop-add-to-cart"><a
                                                                                    href="https://demo.theme-sky.com/nooni-fashion/?add-to-cart=296"
                                                                                    data-quantity="1"
                                                                                    class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                    data-product_id="296"
                                                                                    data-product_sku="EILXFU"
                                                                                    aria-label="Add &ldquo;Women&#039;s Long Sleeve Shirt Dress&rdquo; to your cart"
                                                                                    rel="nofollow"><span
                                                                                        class="ts-tooltip button-tooltip">Add
                                                                                        to cart</span></a></div>

                                                                            <div class="button-in compare"><a
                                                                                    class="compare"
                                                                                    href="https://demo.theme-sky.com/nooni-fashion?action=yith-woocompare-add-product&amp;id=296"
                                                                                    data-product_id="296"><span
                                                                                        class="ts-tooltip button-tooltip"
                                                                                        data-title="Add to compare">Compare</span></a>
                                                                            </div>
                                                                            <div class="button-in quickshop"><a
                                                                                    class="quickshop" href="#"
                                                                                    data-product_id="296"><span
                                                                                        class="ts-tooltip button-tooltip">Quick
                                                                                        view</span></a></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="meta-wrapper">
                                                                        <h3 class="heading-title product-name"><a
                                                                                href="https://demo.theme-sky.com/nooni-fashion/shop/womens-long-sleeve-shirt-dress/">Women&#039;s
                                                                                Long Sleeve Shirt Dress</a></h3>
                                                                        <span class="price"><del
                                                                                aria-hidden="true"><span
                                                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                                                            class="woocommerce-Price-currencySymbol">&#36;</span>5,808</bdi></span></del>
                                                                            <ins><span
                                                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                                                            class="woocommerce-Price-currencySymbol">&#36;</span>3,049</bdi></span></ins></span>
                                                                        <div class="product-group-button-meta"></div>
                                                                    </div>
                                                                </div>
                                                            </section>


                                                        </div>
                                                    </div>

                                                    <div class="shop-more ts-aligncenter visible-phone">
                                                        <a class="shop-more-button"
                                                            href="https://demo.theme-sky.com/nooni-fashion/shop/?onsale=yes"
                                                            target="_blank" rel="nofollow">See All</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-08e4d0a e-flex e-con-boxed e-con e-parent"
                                    data-id="08e4d0a" data-element_type="container"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}"
                                    data-core-v316-plus="true">
                                    <div class="e-con-inner">
                                        <div class="elementor-element elementor-element-4478ab7 elementor-widget elementor-widget-spacer"
                                            data-id="4478ab7" data-element_type="widget"
                                            data-widget_type="spacer.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer">
                                                    <div class="elementor-spacer-inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-1c3f41a elementor-widget elementor-widget-heading"
                                            data-id="1c3f41a" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h4 class="elementor-heading-title elementor-size-default">OUR REVIEWS
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-1767599 elementor-widget elementor-widget-ts-testimonial"
                                            data-id="1767599" data-element_type="widget"
                                            data-widget_type="ts-testimonial.default">
                                            <div class="elementor-widget-container">
                                                <div class="ts-testimonial-wrapper ts-shortcode columns-2 text-default ts-slider show-dots"
                                                    data-columns="2" data-nav="0" data-dots="1" data-autoplay="">

                                                    <div class="items loading">
                                                        <div class="item">
                                                            <blockquote>
                                                                <div class="image">
                                                                    <img loading="lazy" decoding="async"
                                                                        width="180" height="180"
                                                                        src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2022/03/avatar-1.jpg"
                                                                        class="attachment-180x180 size-180x180 wp-post-image"
                                                                        alt=""
                                                                        srcset="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2022/03/avatar-1.jpg 180w, https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2022/03/avatar-1-150x150.jpg 150w, https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2022/03/avatar-1-46x46.jpg 46w, https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2022/03/avatar-1-100x100.jpg 100w, https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2022/03/avatar-1-54x54.jpg 54w, https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2022/03/avatar-1-80x80.jpg 80w"
                                                                        sizes="(max-width: 180px) 100vw, 180px" />
                                                                </div>

                                                                <div class="quote-content-meta">

                                                                    <div class="rating" title="Rated 5 out of 5">
                                                                        <span style="width: 100%">Rated 5 out of
                                                                            5</span>
                                                                    </div>

                                                                    <div class="content">

                                                                        Duis aute irure dolor in reprehenderit in
                                                                        voluptate velit esse cillum dolore eu fugiat
                                                                        nulla. Lorem Ipsum has been the industry&#039;s
                                                                        standard. </div>

                                                                    <div class="author-role">
                                                                        <span class="author">
                                                                            <a href="#" target="_blank">Camille
                                                                                Magnolia</a>
                                                                        </span>


                                                                    </div>

                                                                </div>

                                                            </blockquote>
                                                        </div>
                                                        <div class="item">
                                                            <blockquote>
                                                                <div class="image">
                                                                    <img loading="lazy" decoding="async"
                                                                        width="180" height="180"
                                                                        src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2022/03/avatar-2.jpg"
                                                                        class="attachment-180x180 size-180x180 wp-post-image"
                                                                        alt=""
                                                                        srcset="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2022/03/avatar-2.jpg 180w, https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2022/03/avatar-2-150x150.jpg 150w, https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2022/03/avatar-2-46x46.jpg 46w, https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2022/03/avatar-2-100x100.jpg 100w, https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2022/03/avatar-2-54x54.jpg 54w, https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2022/03/avatar-2-80x80.jpg 80w"
                                                                        sizes="(max-width: 180px) 100vw, 180px" />
                                                                </div>

                                                                <div class="quote-content-meta">

                                                                    <div class="rating" title="Rated 5 out of 5">
                                                                        <span style="width: 100%">Rated 5 out of
                                                                            5</span>
                                                                    </div>

                                                                    <div class="content">

                                                                        Duis aute irure dolor in reprehenderit in
                                                                        voluptate velit esse cillum dolore eu fugiat
                                                                        nulla. Lorem Ipsum has been the industry&#039;s
                                                                        standard. </div>

                                                                    <div class="author-role">
                                                                        <span class="author">
                                                                            <a href="#"
                                                                                target="_blank">Matthew</a>
                                                                        </span>


                                                                    </div>

                                                                </div>

                                                            </blockquote>
                                                        </div>
                                                        <div class="item">
                                                            <blockquote>
                                                                <div class="image">
                                                                    <img loading="lazy" decoding="async"
                                                                        width="180" height="180"
                                                                        src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2022/03/avatar-3.jpg"
                                                                        class="attachment-180x180 size-180x180 wp-post-image"
                                                                        alt=""
                                                                        srcset="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2022/03/avatar-3.jpg 180w, https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2022/03/avatar-3-150x150.jpg 150w, https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2022/03/avatar-3-46x46.jpg 46w, https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2022/03/avatar-3-100x100.jpg 100w, https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2022/03/avatar-3-54x54.jpg 54w, https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2022/03/avatar-3-80x80.jpg 80w"
                                                                        sizes="(max-width: 180px) 100vw, 180px" />
                                                                </div>

                                                                <div class="quote-content-meta">

                                                                    <div class="rating" title="Rated 3.5 out of 5">
                                                                        <span style="width: 70%">Rated 3.5 out of
                                                                            5</span>
                                                                    </div>

                                                                    <div class="content">

                                                                        Duis aute irure dolor in reprehenderit in
                                                                        voluptate velit esse cillum dolore eu fugiat
                                                                        nulla. Lorem Ipsum has been the industry&#039;s
                                                                        standard. </div>

                                                                    <div class="author-role">
                                                                        <span class="author">
                                                                            <a href="#" target="_blank">Sabrina
                                                                                Murray</a>
                                                                        </span>


                                                                    </div>

                                                                </div>

                                                            </blockquote>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-d97c7b7 elementor-widget elementor-widget-spacer"
                                            data-id="d97c7b7" data-element_type="widget"
                                            data-widget_type="spacer.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer">
                                                    <div class="elementor-spacer-inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="elementor-element elementor-element-98623c0 e-con-full e-flex e-con e-parent"
                                    data-id="98623c0" data-element_type="container"
                                    data-settings="{&quot;content_width&quot;:&quot;full&quot;,&quot;background_background&quot;:&quot;classic&quot;}"
                                    data-e-bg-lazyload="" data-core-v316-plus="true">
                                    <div class="elementor-element elementor-element-8cbbb31 elementor-hidden-mobile e-con-full e-flex e-con e-child"
                                        data-id="8cbbb31" data-element_type="container"
                                        data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                    </div>
                                    <div class="elementor-element elementor-element-a0e4816 e-con-full e-flex e-con e-child"
                                        data-id="a0e4816" data-element_type="container"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;full&quot;}">
                                        <div class="elementor-element elementor-element-948fa57 elementor-widget elementor-widget-text-editor"
                                            data-id="948fa57" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>FLASH SALE</p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-d541cdc elementor-widget elementor-widget-text-editor"
                                            data-id="d541cdc" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>-80%</p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-f8f61b7 elementor-widget elementor-widget-text-editor"
                                            data-id="f8f61b7" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>When You Buy $100 E-Gift Cards <br />ENDS 22-1-2023</p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-6310369 elementor-widget elementor-widget-spacer"
                                            data-id="6310369" data-element_type="widget"
                                            data-widget_type="spacer.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer">
                                                    <div class="elementor-spacer-inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-849c023 elementor-align-center button-text elementor-widget elementor-widget-button"
                                            data-id="849c023" data-element_type="widget"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a class="elementor-button elementor-button-link elementor-size-sm"
                                                        href="https://demo.theme-sky.com/nooni-fashion/shop/">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-text">shop now</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <!-- Right Sidebar -->

            </div>

        </div>
        <!-- #main .wrapper -->
        @include('Frontend.layouts.footer')
    </div><!-- #page -->


    @include('Frontend.layouts.sidebar')



    <!-- Shopping Cart Floating Sidebar -->
    <div id="ts-shopping-cart-sidebar" class="ts-floating-sidebar">
        <div class="overlay"></div>
        <div class="ts-sidebar-content">
            <span class="close"></span>
            <div class="ts-tiny-cart-wrapper"></div>
        </div>
    </div>

    <div id="to-top" class="scroll-button">
        <a class="scroll-button" href="javascript:void(0)" title="Back to Top">Back to Top</a>
    </div>


    <script>
        window.RS_MODULES = window.RS_MODULES || {};
        window.RS_MODULES.modules = window.RS_MODULES.modules || {};
        window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
        window.RS_MODULES.defered = true;
        window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
        window.RS_MODULES.type = 'compiled';
    </script>
    <script>
        (function() {
            function maybePrefixUrlField() {
                const value = this.value.trim()
                if (value !== '' && value.indexOf('http') !== 0) {
                    this.value = 'http://' + value
                }
            }

            const urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]')
            for (let j = 0; j < urlFields.length; j++) {
                urlFields[j].addEventListener('blur', maybePrefixUrlField)
            }
        })();
    </script>
    <div id="ts-add-to-cart-popup-modal" class="ts-popup-modal">
        <div class="overlay"></div>
        <div class="add-to-cart-popup-container popup-container">
            <span class="close"></span>
            <div class="add-to-cart-popup-content"></div>
        </div>
    </div>
    <div id="ts-ajax-add-to-cart-message">
        <span>Product has been added to your cart</span>
        <span class="error-message"></span>
    </div>
    <script type='text/javascript'>
        const lazyloadRunObserver = () => {
            const dataAttribute = 'data-e-bg-lazyload';
            const lazyloadBackgrounds = document.querySelectorAll(`[${dataAttribute}]:not(.lazyloaded)`);
            const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        let lazyloadBackground = entry.target;
                        const lazyloadSelector = lazyloadBackground.getAttribute(dataAttribute);
                        if (lazyloadSelector) {
                            lazyloadBackground = entry.target.querySelector(lazyloadSelector);
                        }
                        if (lazyloadBackground) {
                            lazyloadBackground.classList.add('lazyloaded');
                        }
                        lazyloadBackgroundObserver.unobserve(entry.target);
                    }
                });
            }, {
                rootMargin: '100px 0px 100px 0px'
            });
            lazyloadBackgrounds.forEach((lazyloadBackground) => {
                lazyloadBackgroundObserver.observe(lazyloadBackground);
            });
        };
        const events = [
            'DOMContentLoaded',
            'elementor/lazyload/observe',
        ];
        events.forEach((event) => {
            document.addEventListener(event, lazyloadRunObserver);
        });
    </script>
    <link href="https://fonts.googleapis.com/css?family=Inter:400%2C700%7CRoboto:400&amp;display=swap"
        rel="stylesheet" property="stylesheet" media="all" type="text/css">

    <script type="text/javascript">
        (function() {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })();
    </script>
    <script>
        if (typeof revslider_showDoubleJqueryError === "undefined") {
            function revslider_showDoubleJqueryError(sliderID) {
                console.log(
                    "You have some jquery.js library include that comes after the Slider Revolution files js inclusion."
                );
                console.log("To fix this, you can:");
                console.log(
                    "1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on"
                );
                console.log("2. Find the double jQuery.js inclusion and remove it");
                return "Double Included jQuery Library";
            }
        }
    </script>
    <link rel="stylesheet" href="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/cache/minify/381de.css"
        media="all" />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        rs-layer-wrap.ts-button a,
        rs-layer-wrap.ts-button rs-layer {
            position: relative;
            display: inline-block
        }

        rs-layer-wrap.ts-button a:before,
        rs-layer-wrap.ts-button a:after,
        rs-layer-wrap.ts-button rs-layer:after,
        rs-layer-wrap.ts-button rs-layer:before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            border-bottom: 1px solid;
            display: block;
            transition: 300ms ease
        }

        rs-layer-wrap.ts-button a:hover:before,
        rs-layer-wrap.ts-button rs-layer:hover:before {
            left: 100%
        }

        rs-layer-wrap.ts-button a:after,
        rs-layer-wrap.ts-button rs-layer:after {
            right: 100%;
            transition-delay: 300ms
        }

        rs-layer-wrap.ts-button a:hover:after,
        rs-layer-wrap.ts-button rs-layer:hover:after {
            right: 0
        }

        .rs-layer-static.rs-waction.active {
            background-color: #000000 !important
        }

        #rev_slider_56_1_wrapper .nooni .tp-bullet {
            width: 14px;
            height: 14px;
            position: absolute;
            background: #ffffff;
            border: 1px solid #000000;
            border-radius: 50%;
            cursor: pointer;
            box-sizing: content-box
        }

        #rev_slider_56_1_wrapper .nooni .tp-bullet.rs-touchhover,
        #rev_slider_56_1_wrapper .nooni .tp-bullet.selected {
            background: #000000
        }

        @media screen and (max-width:1400px) {
            #rev_slider_56_1_wrapper .nooni.tp-bullets {
                margin-left: 14px
            }

            body.rtl #rev_slider_56_1_wrapper .nooni.tp-bullets {
                margin-left: 0;
                margin-right: 14px
            }
        }

        @media screen and (max-width:1279px) {
            #rev_slider_56_1_wrapper .nooni.nav-pos-hor-left.nav-pos-ver-bottom.nav-dir-horizontal {
                transform: translate(50px, -50px) !important
            }

            #rev_slider_56_1_wrapper .nooni .tp-bullet {
                width: 10px;
                height: 10px
            }

            #rev_slider_56_1_wrapper .nooni.vertical.nav-pos-ver-center.nav-dir-vertical {
                top: calc(100% - 20px) !important;
                left: 50% !important;
                transform: translate(-50%, -100%) !important;
                width: auto !important;
                height: auto !important
            }

            #rev_slider_56_1_wrapper .nooni.vertical.nav-pos-ver-center.nav-dir-vertical .tp-bullet {
                position: static;
                display: inline-block;
                margin: 0 6px
            }
        }

        @media screen and (max-width:991px) {
            #rev_slider_56_1_wrapper .nooni.nav-pos-hor-left.nav-pos-ver-bottom.nav-dir-horizontal {
                transform: translate(30px, -50px) !important
            }
        }

        @media screen and (max-width:767px) {
            #rev_slider_56_1_wrapper .nooni.nav-pos-hor-left.nav-pos-ver-bottom.nav-dir-horizontal {
                transform: translate(15px, -40px) !important
            }
        }

        @media screen and (max-width:480px) {
            #rev_slider_56_1_wrapper .nooni.nav-pos-hor-left.nav-pos-ver-bottom.nav-dir-horizontal {
                left: 50% !important;
                transform: translate(-50%, -40px) !important
            }
        }
    </style>
    <script type="text/javascript" id="jquery-yith-wcwl-js-extra">
        /* <![CDATA[ */
        var yith_wcwl_l10n = {
            "ajax_url": "\/nooni-fashion\/wp-admin\/admin-ajax.php",
            "redirect_to_cart": "no",
            "yith_wcwl_button_position": "add-to-cart",
            "multi_wishlist": "",
            "hide_add_button": "1",
            "enable_ajax_loading": "",
            "ajax_loader_url": "https:\/\/demo.theme-sky.com\/nooni-fashion\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader-alt.svg",
            "remove_from_wishlist_after_add_to_cart": "1",
            "is_wishlist_responsive": "1",
            "time_to_close_prettyphoto": "3000",
            "fragments_index_glue": ".",
            "reload_on_found_variation": "1",
            "mobile_media_query": "768",
            "labels": {
                "cookie_disabled": "We are sorry, but this feature is available only if cookies on your browser are enabled.",
                "added_to_cart_message": "<div class=\"woocommerce-notices-wrapper\"><div class=\"woocommerce-message\" role=\"alert\">Product added to cart successfully<\/div><\/div>"
            },
            "actions": {
                "add_to_wishlist_action": "add_to_wishlist",
                "remove_from_wishlist_action": "remove_from_wishlist",
                "reload_wishlist_and_adding_elem_action": "reload_wishlist_and_adding_elem",
                "load_mobile_action": "load_mobile",
                "delete_item_action": "delete_item",
                "save_title_action": "save_title",
                "save_privacy_action": "save_privacy",
                "load_fragments": "load_fragments"
            },
            "nonce": {
                "add_to_wishlist_nonce": "38a7711df4",
                "remove_from_wishlist_nonce": "aeb1fb4d14",
                "reload_wishlist_and_adding_elem_nonce": "f860f6df0b",
                "load_mobile_nonce": "5532338c60",
                "delete_item_nonce": "01f37529ec",
                "save_title_nonce": "b25634d7a1",
                "save_privacy_nonce": "85e2a24cc4",
                "load_fragments_nonce": "9f3065112f"
            },
            "redirect_after_ask_estimate": "",
            "ask_estimate_redirect_url": "https:\/\/demo.theme-sky.com\/nooni-fashion"
        };
        /* ]]> */
    </script>
    <script src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/cache/minify/aa08f.js"></script>



    <script type="text/javascript" id="ts-script-js-extra">
        /* <![CDATA[ */
        var themesky_params = {
            "ajax_uri": "\/nooni-fashion\/wp-admin\/admin-ajax.php"
        };
        /* ]]> */
    </script>


    <script src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/cache/minify/e2652.js"></script>

    <script type="text/javascript" id="wc-add-to-cart-js-extra">
        /* <![CDATA[ */
        var wc_add_to_cart_params = {
            "ajax_url": "\/nooni-fashion\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/nooni-fashion\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View cart",
            "cart_url": "https:\/\/demo.theme-sky.com\/nooni-fashion\/cart\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
        /* ]]> */
    </script>

    <script src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/cache/minify/036c3.js"></script>

    <script type="text/javascript" id="woocommerce-js-extra">
        /* <![CDATA[ */
        var woocommerce_params = {
            "ajax_url": "\/nooni-fashion\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/nooni-fashion\/?wc-ajax=%%endpoint%%"
        };
        /* ]]> */
    </script>
    <script src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/cache/minify/dfd7c.js"></script>

    <script type="text/javascript" id="yith-woocompare-main-js-extra">
        /* <![CDATA[ */
        var yith_woocompare = {
            "ajaxurl": "\/nooni-fashion\/?wc-ajax=%%endpoint%%",
            "actionadd": "yith-woocompare-add-product",
            "actionremove": "yith-woocompare-remove-product",
            "actionview": "yith-woocompare-view-table",
            "actionreload": "yith-woocompare-reload-product",
            "added_label": "Added",
            "table_title": "Product Comparison",
            "auto_open": "yes",
            "loader": "https:\/\/demo.theme-sky.com\/nooni-fashion\/wp-content\/plugins\/yith-woocommerce-compare\/assets\/images\/loader.gif",
            "button_text": "<span class=\"ts-tooltip button-tooltip\" data-title=\"Add to compare\">Compare<\/span>",
            "cookie_name": "yith_woocompare_list",
            "close_label": "Close"
        };
        /* ]]> */
    </script>

    <script src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/cache/minify/f1647.js"></script>

    <script type="text/javascript" id="wc-cart-fragments-js-extra">
        /* <![CDATA[ */
        var wc_cart_fragments_params = {
            "ajax_url": "\/nooni-fashion\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/nooni-fashion\/?wc-ajax=%%endpoint%%",
            "cart_hash_key": "wc_cart_hash_e98621cff5f257c875a1f6ec910e0cd6",
            "fragment_name": "wc_fragments_e98621cff5f257c875a1f6ec910e0cd6",
            "request_timeout": "5000"
        };
        /* ]]> */
    </script>
    <script src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/cache/minify/d6a2c.js"></script>

    <script type="text/javascript" id="nooni-script-js-extra">
        /* <![CDATA[ */
        var nooni_params = {
            "ajax_url": "\/nooni-fashion\/wp-admin\/admin-ajax.php",
            "sticky_header": "1",
            "menu_overlay": "0",
            "ajax_search": "1",
            "show_cart_after_adding": "1",
            "ajax_add_to_cart": "1",
            "add_to_cart_effect": "show_popup",
            "shop_loading_type": "ajax-pagination",
            "flexslider": {
                "rtl": false,
                "animation": "slide",
                "smoothHeight": true,
                "directionNav": false,
                "controlNav": "thumbnails",
                "slideshow": false,
                "animationSpeed": 500,
                "animationLoop": false,
                "allowOneSlide": false
            },
            "zoom_options": [],
            "placeholder_form": {
                "usernamePlaceholder": "Username or email address*",
                "passwordPlaceholder": "Password*"
            }
        };
        /* ]]> */
    </script>



    <script src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/cache/minify/077e6.js"></script>

    <script type="text/javascript" id="wp-util-js-extra">
        /* <![CDATA[ */
        var _wpUtilSettings = {
            "ajax": {
                "url": "\/nooni-fashion\/wp-admin\/admin-ajax.php"
            }
        };
        /* ]]> */
    </script>
    <script src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/cache/minify/1f9a4.js"></script>

    <script type="text/javascript" id="wc-add-to-cart-variation-js-extra">
        /* <![CDATA[ */
        var wc_add_to_cart_variation_params = {
            "wc_ajax_url": "\/nooni-fashion\/?wc-ajax=%%endpoint%%",
            "i18n_no_matching_variations_text": "Sorry, no products matched your selection. Please choose a different combination.",
            "i18n_make_a_selection_text": "Please select some product options before adding this product to your cart.",
            "i18n_unavailable_text": "Sorry, this product is unavailable. Please choose a different combination."
        };
        /* ]]> */
    </script>


    <script defer src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/cache/minify/09cb6.js"></script>




    <script src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/cache/minify/94e37.js"></script>

    <script type="text/javascript" id="elementor-frontend-js-before">
        /* <![CDATA[ */
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close",
                "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
                "a11yCarouselPrevSlideMessage": "Previous slide",
                "a11yCarouselNextSlideMessage": "Next slide",
                "a11yCarouselFirstSlideMessage": "This is the first slide",
                "a11yCarouselLastSlideMessage": "This is the last slide",
                "a11yCarouselPaginationBulletMessage": "Go to slide"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 993,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile Portrait",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Landscape",
                        "value": 767,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet Portrait",
                        "value": 992,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Landscape",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                }
            },
            "version": "3.16.6",
            "is_static": false,
            "experimentalFeatures": {
                "e_dom_optimization": true,
                "e_optimized_assets_loading": true,
                "additional_custom_breakpoints": true,
                "container": true,
                "landing-pages": true,
                "e_lazyload": true
            },
            "urls": {
                "assets": "https:\/\/demo.theme-sky.com\/nooni-fashion\/wp-content\/plugins\/elementor\/assets\/"
            },
            "swiperClass": "swiper-container",
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "viewport_tablet": 992,
                "active_breakpoints": ["viewport_mobile", "viewport_tablet", "viewport_tablet_extra",
                    "viewport_laptop"
                ],
                "viewport_laptop": 1366,
                "stretched_section_container": "#main",
                "viewport_mobile": 767,
                "viewport_tablet_extra": 1200,
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description"
            },
            "post": {
                "id": 5327,
                "title": "Nooni%20%E2%80%93%20Elementor%20WooCommerce%20WordPress%20Theme",
                "excerpt": "",
                "featuredImage": false
            }
        };
        /* ]]> */
    </script>
    <script src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/cache/minify/b5d0c.js"></script>

    <script id="rs-initialisation-scripts">
        var tpj = jQuery;

        var revapi56;

        if (window.RS_MODULES === undefined) window.RS_MODULES = {};
        if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
        RS_MODULES.modules["revslider561"] = {
            once: RS_MODULES.modules["revslider561"] !== undefined ? RS_MODULES.modules["revslider561"].once :
                undefined,
            init: function() {
                window.revapi56 = window.revapi56 === undefined || window.revapi56 === null || window.revapi56
                    .length === 0 ? document.getElementById("rev_slider_56_1") : window.revapi56;
                if (window.revapi56 === null || window.revapi56 === undefined || window.revapi56.length == 0) {
                    window.revapi56initTry = window.revapi56initTry === undefined ? 0 : window.revapi56initTry + 1;
                    if (window.revapi56initTry < 20) requestAnimationFrame(function() {
                        RS_MODULES.modules["revslider561"].init()
                    });
                    return;
                }
                window.revapi56 = jQuery(window.revapi56);
                if (window.revapi56.revolution == undefined) {
                    revslider_showDoubleJqueryError("rev_slider_56_1");
                    return;
                }
                revapi56.revolutionInit({
                    revapi: "revapi56",
                    DPR: "dpr",
                    sliderLayout: "fullwidth",
                    visibilityLevels: "1400,1280,991,480",
                    gridwidth: "1550,1100,800,480",
                    gridheight: "825,500,400,730",
                    lazyType: "smart",
                    spinner: "spinner7",
                    perspective: 600,
                    perspectiveType: "global",
                    spinnerclr: "#000000",
                    editorheight: "825,500,400,730",
                    responsiveLevels: "1400,1280,991,480",
                    progressBar: {
                        disableProgressBar: true
                    },
                    navigation: {
                        wheelCallDelay: 1000,
                        onHoverStop: false,
                        touch: {
                            touchenabled: true,
                            touchOnDesktop: true
                        },
                        bullets: {
                            enable: true,
                            tmp: "",
                            style: "nooni",
                            h_align: "right",
                            v_align: "center",
                            h_offset: 40,
                            v_offset: 0,
                            direction: "vertical",
                            space: 22
                        }
                    },
                    scrolleffect: {
                        set: true,
                        blur: true,
                        multiplicator: 1.3,
                        multiplicator_layers: 1.3
                    },
                    viewPort: {
                        global: true,
                        globalDist: "-200px",
                        enable: false
                    },
                    fallbacks: {
                        allowHTML5AutoPlayOnAndroid: true
                    },
                });

                revapi56.bind("revolution.slide.onafterswap", function(e, data) {
                    console.log(data.currentslide);
                });


            }
        } // End of RevInitScript

        if (window.RS_MODULES.checkMinimal !== undefined) {
            window.RS_MODULES.checkMinimal();
        };
    </script>
    <div id="ts-quickshop-modal" class="ts-popup-modal">
        <div class="overlay"></div>
        <div class="quickshop-container popup-container">
            <span class="close"></span>
            <div class="quickshop-content"></div>
        </div>
    </div>
</body>

</html>
