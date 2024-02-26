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

    <link rel="alternate" type="application/rss+xml" title="Nooni &raquo; Comments Feed"
        href="https://demo.theme-sky.com/nooni-fashion/comments/feed/" />
    <style id='classic-theme-styles-inline-css' type='text/css'>
        /*! This file is auto-generated */
       
    </style>
    <style id='global-styles-inline-css' type='text/css'>
        
    </style>
    <link rel="stylesheet" href="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/cache/minify/e7801.css"
        media="all" />
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
  
    <link rel="stylesheet" href="{{asset('frontend/css/page.main2.css')}}"
        media="all" />
    <link rel="stylesheet" href="{{asset('frontend/css/page.main.css')}}"
        media="all" />
    <script src="{{asset('frontend/js/index.page7.js')}}"></script>
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
                                                                data-product_type="featured">BESTSELL</li>
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
                                                                                    href="{{ url('product-details', [$product->slug]) }}">
                                                                                    @php
                                                                                        $productImage = json_decode($product->image);
                                                                                    @endphp

                                                                                    <figure class="has-back-image"><img
                                                                                            loading="lazy"
                                                                                            decoding="async"
                                                                                            src=""
                                                                                            data-src="{{ asset($productImage[0]) }}"
                                                                                            class="attachment-shop_catalog wp-post-image ts-lazy-load"
                                                                                            width="450"
                                                                                            height="572" /><img
                                                                                            loading="lazy"
                                                                                            decoding="async"
                                                                                            src="{{ asset($productImage[0]) }}"
                                                                                            data-src="{{ asset($productImage[0]) }}"
                                                                                            class="product-image-back ts-lazy-load"
                                                                                            alt=""
                                                                                            width="450"
                                                                                            height="572" /></figure>
                                                                                </a>

                                                                                <div class="product-group-button">
                                                                                    <div class="loop-add-to-cart"><a
                                                                                            onclick="addTocart({{$product->productOne->id ?? null}})"
                                                                                            class="button product_type_variable add_to_cart_button"><span
                                                                                                class="ts-tooltip button-tooltip">Add
                                                                                                to cart</span></a></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="meta-wrapper">
                                                                                <h3 class="heading-title product-name">
                                                                                    <a href="">
                                                                                        {{ $product->productOne->product_name ?? null }}
                                                                                    </a>
                                                                                </h3>
                                                                                <span class="price"><del
                                                                                        aria-hidden="true"><span
                                                                                            class="woocommerce-Price-amount amount"><bdi><span
                                                                                                    class="woocommerce-Price-currencySymbol">&#36;</span>{{ $product->productOne->product_price ?? null }}</bdi></span></del>
                                                                                    <ins><span
                                                                                            class="woocommerce-Price-amount amount"><bdi><span
                                                                                                    class="woocommerce-Price-currencySymbol">&#36;</span>{{ $product->productOne->sale_price ?? null }}</bdi></span></ins></span>
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
                                <div style="background-image: url('{{asset('slider/1708757796DSC05063.jpg')}}')" class="elementor-element elementor-element-38d3e9e e-flex e-con-boxed e-con e-parent"
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
                                                            <a class="shop-more-button" href=""
                                                                target="_blank" rel="nofollow">See All</a>
                                                        </div>

                                                    </header>

                                                    <div class="content-wrapper loading">
                                                        <div class="products">
                                                            @foreach ($offerDetails as $offer)
                                                                <section
                                                                    class="product add-to-wishlist-after_add_to_cart type-product post-3578 status-publish first instock product_cat-20th-century product_cat-21th-century product_cat-activities product_cat-body-fit product_cat-casual-clothings product_cat-collections product_cat-women-dresses product_cat-fashion-style product_cat-petite product_cat-spring-collection product_cat-summer-clothings product_cat-summer-collection product_cat-tall product_cat-vacation-wedding product_cat-vintage-collection product_cat-women product_tag-tag-fashion product_tag-trending product_tag-tag-women has-post-thumbnail sale featured shipping-taxable purchasable product-type-variable"
                                                                    data-product_id="3578">
                                                                    <div class="product-wrapper">

                                                                        <div class="thumbnail-wrapper">
                                                                            <a
                                                                                href="{{ url('product-details', [$offer->productDetails->slug]) }}">
                                                                                @php
                                                                                    $imagesOffer = json_decode($offer->productDetails->image);
                                                                                @endphp
                                                                                <figure class="has-back-image"><img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        src="{{ asset('prod_loading.gif') }}"
                                                                                        data-src="{{ asset($imagesOffer[0] ?? null) }}"
                                                                                        class="attachment-shop_catalog wp-post-image ts-lazy-load"
                                                                                        alt="" width="450"
                                                                                        height="572" /><img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        src="{{ asset('prod_loading.gif') }}"
                                                                                        data-src="{{ asset($imagesOffer[1] ?? null) }}"
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
                                                                                        href=""
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
                                                                                    href="">Chiffon
                                                                                    Wrap Button Detail Maxi Dress</a>
                                                                            </h3>
                                                                            <span class="price"><del
                                                                                    aria-hidden="true"><span
                                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                                class="woocommerce-Price-currencySymbol">&#36;</span>{{ $offer->productDetails->productOne->product_price ?? null }}</bdi></span></del>
                                                                                <ins><span
                                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                                class="woocommerce-Price-currencySymbol">&#36;</span>{{ $offer->productDetails->productOne->sale_price ?? null }}</bdi></span></ins></span>
                                                                            <div class="product-group-button-meta">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                            @endforeach
                                                        </div>
                                                    </div>

                                                    <div class="shop-more ts-aligncenter visible-phone">
                                                        <a class="shop-more-button" href="" target="_blank"
                                                            rel="nofollow">See All</a>
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

                                <div style="background-image: url('slider/1708762084DSC05175.jpg')" class="elementor-element elementor-element-98623c0 e-con-full e-flex e-con e-parent"
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




    <div id="to-top" class="scroll-button">
        <a class="scroll-button" href="javascript:void(0)" title="Back to Top">Back to Top</a>
    </div>


    <div id="ts-add-to-cart-popup-modal" class="ts-popup-modal">
        <div class="overlay"></div>
        <div class="add-to-cart-popup-container popup-container">
            <span class="close"></span>
            <div class="add-to-cart-popup-content"></div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('frontend/css/index.page.css') }}" media="all" />
    <link rel="stylesheet" href="{{ asset('frontend/css/index.innline.css') }}">
    <script src="{{ asset('frontend/js/index.page.js') }}"></script>
    <script src="{{ asset('frontend/js/index.page2.js') }}"></script>
    <script src="{{ asset('frontend/js/index.page3.js') }}"></script>
    <script src="{{ asset('frontend/js/index.page4.js') }}"></script>
    <script src="{{ asset('frontend/js/index.page5.js') }}"></script>
    <script src="{{ asset('frontend/js/index.other.js') }}"></script>
   
    <script>
        var nooni_params = null;
        var yith_wcwl_l10n = null;

        function addTocart(pId) {
        var url = "{{route('addCart',":id")}}";
        url1 = url.replace(':id', pId);
        $.ajax({
            cache: false,
            contentType: false,
            processData: false,
            url: url1,
            method: "get",
            dataType: "json",
            success: function(response) {
                if (response.responseCode == 200) {
                    toastr.success(response.responseMessage);
                    $('#selectSize').removeClass('show');
                    removeBackDrop();
                } else {
                    toastr.error(response.responseMessage);
                }
            }
        });
    }
    </script>
</body>

</html>
