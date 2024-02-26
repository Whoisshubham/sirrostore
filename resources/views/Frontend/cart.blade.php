<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />
    <style id='classic-theme-styles-inline-css' type='text/css'>
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
    <link rel='stylesheet' id='ts-style-css'
        href='https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/plugins/themesky/css/themesky.css?ver=1.0.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='swiper-css'
        href='https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/plugins/themesky/css/swiper-bundle.min.css?ver=1.0.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='select2-css'
        href='https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/plugins/woocommerce/assets/css/select2.css?ver=8.2.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-layout-css'
        href='https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=8.2.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css'
        href='https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=8.2.1'
        type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css'
        href='https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=8.2.1'
        type='text/css' media='all' />
 
    <link rel='stylesheet' id='jquery-colorbox-css'
        href='https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/plugins/yith-woocommerce-compare/assets/css/colorbox.css?ver=1.4.21'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-lazyload-css'
        href='https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/plugins/elementor/assets/css/modules/lazyload/frontend.min.css?ver=3.16.6'
        type='text/css' media='all' />
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css?family=Inter:400,500,700&#038;display=swap&#038;ver=1694399027" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Inter:400,500,700&#038;display=swap&#038;ver=1694399027"
        media="print" onload="this.media='all'"><noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Inter:400,500,700&#038;display=swap&#038;ver=1694399027" />
    </noscript>
    <link rel='stylesheet' id='font-awesome-5-css'
        href='https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/themes/nooni/css/fontawesome.min.css?ver=1.0.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='font-tb-icons-css'
        href='https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/themes/nooni/css/tb-icons.min.css?ver=1.0.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='nooni-reset-css'
        href='https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/themes/nooni/css/reset.css?ver=1.0.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='nooni-style-css'
        href='https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/themes/nooni/style.css?ver=1.0.3' type='text/css'
        media='all' />
    <link rel='stylesheet' id='nooni-responsive-css'
        href='https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/themes/nooni/css/responsive.css?ver=1.0.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='nooni-dynamic-css-css'
        href='https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/nooni.css?ver=1694399027' type='text/css'
        media='all' />

    <script type="text/javascript"
        src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-includes/js/jquery/jquery.min.js?ver=3.7.1"
        id="jquery-core-js">
        </script>
    <script type="text/javascript"
        src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"
        id="jquery-migrate-js"></script>
 

</head>

<body
    class="page-template-default page page-id-7 theme-nooni woocommerce-cart woocommerce-page woocommerce-no-js wide header-v4 product-label-rectangle product-hover-vertical-style ts_desktop e-lazyload elementor-default elementor-kit-12">
    <div id="page" class="hfeed site">
        <!-- Page Slider -->
        @include('Frontend.layouts.header')
        <div id="main" class="wrapper">
            <div class="breadcrumb-title-wrapper breadcrumb-v1">
                <div class="breadcrumb-content">
                    <div class="breadcrumb-title">
                        <h1 class="heading-title page-title entry-title ">Shopping Cart</h1>
                        <div class="breadcrumbs">
                            <div class="breadcrumbs-container"><a
                                    href="{{url('/')}}">Home</a> <span
                                    class="brn_arrow">&#047;</span> <span class="current">Shopping Cart</span></div>
                        </div>
                    </div>
                </div>
            </div><!-- Page slider -->
            <div class="page-container show_breadcrumb_v1 no-sidebar">

                <!-- Left Sidebar -->
                <!-- Main Content -->
                <div id="main-content">
                    <div id="primary" class="site-content">
                        <article id="post-7" class="post-7 page type-page status-publish hentry">
                            <div class="woocommerce">
                                <div class="woocommerce-notices-wrapper"></div>
                                <form class="woocommerce-cart-form" action="" method="post">

                                    <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents"
                                        cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th class="product-remove"><span class="screen-reader-text">Remove
                                                        item</span></th>
                                                <th class="product-thumbnail"><span class="screen-reader-text">Thumbnail
                                                        image</span></th>
                                                <th class="product-name">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product-quantity">Quantity</th>
                                                <th class="product-subtotal">Subtotal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="woocommerce-cart-form__cart-item cart_item">
                                                <td class="product-remove">
                                                    <a href="?remove_item=3f088ebeda03513be71d34d214291986&#038;_wpnonce=efc384caaf"
                                                        class="remove"
                                                        aria-label="Remove Faux Longline Coat in Light Pink from cart"
                                                        data-product_id="1995" data-product_sku="0012">&times;</a>
                                                </td>
                                                <td class="product-thumbnail">
                                                    <a href="faux-longline-coat-in-light-pink/"><img loading="lazy"
                                                            decoding="async" width="450" height="572"
                                                            src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2023/04/31-450x572.jpg"
                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                            alt=""
                                                            srcset="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2023/04/31-450x572.jpg 450w, https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2023/04/31-235x300.jpg 235w"
                                                            sizes="(max-width: 450px) 100vw, 450px" /></a>
                                                </td>
                                                <td class="product-name" data-title="Product">
                                                    <a href="faux-longline-coat-in-light-pink/">Faux
                                                        Longline Coat in Light Pink</a>
                                                </td>
                                                <td class="product-price" data-title="Price">
                                                    <span class="woocommerce-Price-amount amount"><bdi><span
                                                                class="woocommerce-Price-currencySymbol">&#36;</span>1,009</bdi></span>
                                                </td>
                                                <td class="product-quantity" data-title="Quantity">
                                                    <div class="quantity">
                                                        <div class="number-button">
                                                            <input type="button" value="-" class="minus" />
                                                            <label class="screen-reader-text"
                                                                for="quantity_65da092cab3f7">Faux Longline Coat in
                                                                Light Pink quantity</label>
                                                            <input type="number" id="quantity_65da092cab3f7"
                                                                class="input-text qty text"
                                                                name="cart[3f088ebeda03513be71d34d214291986][qty]"
                                                                value="1" aria-label="Product quantity" size="4" min="0"
                                                                max="" step="1" placeholder="" inputmode="numeric"
                                                                autocomplete="off" />
                                                            <input type="button" value="+" class="plus" />
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-subtotal" data-title="Subtotal">
                                                    <span class="woocommerce-Price-amount amount"><bdi><span
                                                                class="woocommerce-Price-currencySymbol">&#36;</span>1,009</bdi></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="6" class="actions"> 
                                                    <button type="submit" class="button" name="update_cart"
                                                        value="Update cart">Update cart</button>
                                                    <button type="submit" class="button empty-cart-button"
                                                        name="ts_empty_cart" value="Empty cart">Empty cart</button>
                                                    <input type="hidden" id="woocommerce-cart-nonce"
                                                        name="woocommerce-cart-nonce" value="efc384caaf" /><input
                                                        type="hidden" name="_wp_http_referer"
                                                        value="/nooni-fashion/cart/" />
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
                                <div class="cart-collaterals">
                                    <div class="cart_totals ">
                                        <h2>Cart totals</h2>
                                        <table cellspacing="0" class="shop_table shop_table_responsive">
                                            <tr class="cart-subtotal">
                                                <th>Subtotal</th>
                                                <td data-title="Subtotal"><span
                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                class="woocommerce-Price-currencySymbol">&#36;</span>1,009</bdi></span>
                                                </td>
                                            </tr>
                                            <tr class="woocommerce-shipping-totals shipping">
                                                <th>Shipping</th>
                                                <td data-title="Shipping">
                                                    <ul id="shipping_method" class="woocommerce-shipping-methods">
                                                        <li>
                                                            <input type="radio" name="shipping_method[0]" data-index="0"
                                                                id="shipping_method_0_flat_rate1" value="flat_rate:1"
                                                                class="shipping_method" checked='checked' /><label
                                                                for="shipping_method_0_flat_rate1">Flat rate: <span
                                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                                            class="woocommerce-Price-currencySymbol">&#36;</span>10</bdi></span></label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" name="shipping_method[0]" data-index="0"
                                                                id="shipping_method_0_local_pickup2"
                                                                value="local_pickup:2" class="shipping_method" /><label
                                                                for="shipping_method_0_local_pickup2">Local pickup:
                                                                <span class="woocommerce-Price-amount amount"><bdi><span
                                                                            class="woocommerce-Price-currencySymbol">&#36;</span>5</bdi></span></label>
                                                        </li>
                                                    </ul>
                                                    <p class="woocommerce-shipping-destination">
                                                        Shipping options will be updated during checkout. </p>
                                                    <form class="woocommerce-shipping-calculator" action=""
                                                        method="post">

                                                        <a href="#" class="shipping-calculator-button">Calculate
                                                            shipping</a>
                                                        <section class="shipping-calculator-form" style="display:none;">

                                                            <p class="form-row form-row-wide"
                                                                id="calc_shipping_country_field">
                                                                <label for="calc_shipping_country"
                                                                    class="screen-reader-text">Country /
                                                                    region:</label>
                                                                <select name="calc_shipping_country"
                                                                    id="calc_shipping_country"
                                                                    class="country_to_state country_select"
                                                                    rel="calc_shipping_state">
                                                                    <option value="default">Select a country /
                                                                        region&hellip;</option>
                                                                    <option value="AF">Afghanistan</option>
                                                                    <option value="AX">Åland Islands</option>
                                                                    <option value="AL">Albania</option>
                                                                    <option value="DZ">Algeria</option>
                                                                    <option value="AS">American Samoa</option>
                                                                    <option value="AD">Andorra</option>
                                                                    <option value="AO">Angola</option>
                                                                    <option value="AI">Anguilla</option>
                                                                    <option value="AQ">Antarctica</option>
                                                                    <option value="AG">Antigua and Barbuda</option>
                                                                    <option value="AR">Argentina</option>
                                                                    <option value="AM">Armenia</option>
                                                                    <option value="AW">Aruba</option>
                                                                    <option value="AU">Australia</option>
                                                                    <option value="AT">Austria</option>
                                                                    <option value="AZ">Azerbaijan</option>
                                                                    <option value="BS">Bahamas</option>
                                                                    <option value="BH">Bahrain</option>
                                                                    <option value="BD">Bangladesh</option>
                                                                    <option value="BB">Barbados</option>
                                                                    <option value="BY">Belarus</option>
                                                                    <option value="PW">Belau</option>
                                                                    <option value="BE">Belgium</option>
                                                                    <option value="BZ">Belize</option>
                                                                    <option value="BJ">Benin</option>
                                                                    <option value="BM">Bermuda</option>
                                                                    <option value="BT">Bhutan</option>
                                                                    <option value="BO">Bolivia</option>
                                                                    <option value="BQ">Bonaire, Saint Eustatius and
                                                                        Saba</option>
                                                                    <option value="BA">Bosnia and Herzegovina
                                                                    </option>
                                                                    <option value="BW">Botswana</option>
                                                                    <option value="BV">Bouvet Island</option>
                                                                    <option value="BR">Brazil</option>
                                                                    <option value="IO">British Indian Ocean
                                                                        Territory</option>
                                                                    <option value="BN">Brunei</option>
                                                                    <option value="BG">Bulgaria</option>
                                                                    <option value="BF">Burkina Faso</option>
                                                                    <option value="BI">Burundi</option>
                                                                    <option value="KH">Cambodia</option>
                                                                    <option value="CM">Cameroon</option>
                                                                    <option value="CA">Canada</option>
                                                                    <option value="CV">Cape Verde</option>
                                                                    <option value="KY">Cayman Islands</option>
                                                                    <option value="CF">Central African Republic
                                                                    </option>
                                                                    <option value="TD">Chad</option>
                                                                    <option value="CL">Chile</option>
                                                                    <option value="CN">China</option>
                                                                    <option value="CX">Christmas Island</option>
                                                                    <option value="CC">Cocos (Keeling) Islands
                                                                    </option>
                                                                    <option value="CO">Colombia</option>
                                                                    <option value="KM">Comoros</option>
                                                                    <option value="CG">Congo (Brazzaville)</option>
                                                                    <option value="CD">Congo (Kinshasa)</option>
                                                                    <option value="CK">Cook Islands</option>
                                                                    <option value="CR">Costa Rica</option>
                                                                    <option value="HR">Croatia</option>
                                                                    <option value="CU">Cuba</option>
                                                                    <option value="CW">Cura&ccedil;ao</option>
                                                                    <option value="CY">Cyprus</option>
                                                                    <option value="CZ">Czech Republic</option>
                                                                    <option value="DK">Denmark</option>
                                                                    <option value="DJ">Djibouti</option>
                                                                    <option value="DM">Dominica</option>
                                                                    <option value="DO">Dominican Republic</option>
                                                                    <option value="EC">Ecuador</option>
                                                                    <option value="EG">Egypt</option>
                                                                    <option value="SV">El Salvador</option>
                                                                    <option value="GQ">Equatorial Guinea</option>
                                                                    <option value="ER">Eritrea</option>
                                                                    <option value="EE">Estonia</option>
                                                                    <option value="SZ">Eswatini</option>
                                                                    <option value="ET">Ethiopia</option>
                                                                    <option value="FK">Falkland Islands</option>
                                                                    <option value="FO">Faroe Islands</option>
                                                                    <option value="FJ">Fiji</option>
                                                                    <option value="FI">Finland</option>
                                                                    <option value="FR">France</option>
                                                                    <option value="GF">French Guiana</option>
                                                                    <option value="PF">French Polynesia</option>
                                                                    <option value="TF">French Southern Territories
                                                                    </option>
                                                                    <option value="GA">Gabon</option>
                                                                    <option value="GM">Gambia</option>
                                                                    <option value="GE">Georgia</option>
                                                                    <option value="DE">Germany</option>
                                                                    <option value="GH">Ghana</option>
                                                                    <option value="GI">Gibraltar</option>
                                                                    <option value="GR">Greece</option>
                                                                    <option value="GL">Greenland</option>
                                                                    <option value="GD">Grenada</option>
                                                                    <option value="GP">Guadeloupe</option>
                                                                    <option value="GU">Guam</option>
                                                                    <option value="GT">Guatemala</option>
                                                                    <option value="GG">Guernsey</option>
                                                                    <option value="GN">Guinea</option>
                                                                    <option value="GW">Guinea-Bissau</option>
                                                                    <option value="GY">Guyana</option>
                                                                    <option value="HT">Haiti</option>
                                                                    <option value="HM">Heard Island and McDonald
                                                                        Islands</option>
                                                                    <option value="HN">Honduras</option>
                                                                    <option value="HK">Hong Kong</option>
                                                                    <option value="HU">Hungary</option>
                                                                    <option value="IS">Iceland</option>
                                                                    <option value="IN">India</option>
                                                                    <option value="ID">Indonesia</option>
                                                                    <option value="IR">Iran</option>
                                                                    <option value="IQ">Iraq</option>
                                                                    <option value="IE">Ireland</option>
                                                                    <option value="IM">Isle of Man</option>
                                                                    <option value="IL">Israel</option>
                                                                    <option value="IT">Italy</option>
                                                                    <option value="CI">Ivory Coast</option>
                                                                    <option value="JM">Jamaica</option>
                                                                    <option value="JP">Japan</option>
                                                                    <option value="JE">Jersey</option>
                                                                    <option value="JO">Jordan</option>
                                                                    <option value="KZ">Kazakhstan</option>
                                                                    <option value="KE">Kenya</option>
                                                                    <option value="KI">Kiribati</option>
                                                                    <option value="KW">Kuwait</option>
                                                                    <option value="KG">Kyrgyzstan</option>
                                                                    <option value="LA">Laos</option>
                                                                    <option value="LV">Latvia</option>
                                                                    <option value="LB">Lebanon</option>
                                                                    <option value="LS">Lesotho</option>
                                                                    <option value="LR">Liberia</option>
                                                                    <option value="LY">Libya</option>
                                                                    <option value="LI">Liechtenstein</option>
                                                                    <option value="LT">Lithuania</option>
                                                                    <option value="LU">Luxembourg</option>
                                                                    <option value="MO">Macao</option>
                                                                    <option value="MG">Madagascar</option>
                                                                    <option value="MW">Malawi</option>
                                                                    <option value="MY">Malaysia</option>
                                                                    <option value="MV">Maldives</option>
                                                                    <option value="ML">Mali</option>
                                                                    <option value="MT">Malta</option>
                                                                    <option value="MH">Marshall Islands</option>
                                                                    <option value="MQ">Martinique</option>
                                                                    <option value="MR">Mauritania</option>
                                                                    <option value="MU">Mauritius</option>
                                                                    <option value="YT">Mayotte</option>
                                                                    <option value="MX">Mexico</option>
                                                                    <option value="FM">Micronesia</option>
                                                                    <option value="MD">Moldova</option>
                                                                    <option value="MC">Monaco</option>
                                                                    <option value="MN">Mongolia</option>
                                                                    <option value="ME">Montenegro</option>
                                                                    <option value="MS">Montserrat</option>
                                                                    <option value="MA">Morocco</option>
                                                                    <option value="MZ">Mozambique</option>
                                                                    <option value="MM">Myanmar</option>
                                                                    <option value="NA">Namibia</option>
                                                                    <option value="NR">Nauru</option>
                                                                    <option value="NP">Nepal</option>
                                                                    <option value="NL">Netherlands</option>
                                                                    <option value="NC">New Caledonia</option>
                                                                    <option value="NZ">New Zealand</option>
                                                                    <option value="NI">Nicaragua</option>
                                                                    <option value="NE">Niger</option>
                                                                    <option value="NG">Nigeria</option>
                                                                    <option value="NU">Niue</option>
                                                                    <option value="NF">Norfolk Island</option>
                                                                    <option value="KP">North Korea</option>
                                                                    <option value="MK">North Macedonia</option>
                                                                    <option value="MP">Northern Mariana Islands
                                                                    </option>
                                                                    <option value="NO">Norway</option>
                                                                    <option value="OM">Oman</option>
                                                                    <option value="PK">Pakistan</option>
                                                                    <option value="PS">Palestinian Territory
                                                                    </option>
                                                                    <option value="PA">Panama</option>
                                                                    <option value="PG">Papua New Guinea</option>
                                                                    <option value="PY">Paraguay</option>
                                                                    <option value="PE">Peru</option>
                                                                    <option value="PH">Philippines</option>
                                                                    <option value="PN">Pitcairn</option>
                                                                    <option value="PL">Poland</option>
                                                                    <option value="PT">Portugal</option>
                                                                    <option value="PR">Puerto Rico</option>
                                                                    <option value="QA">Qatar</option>
                                                                    <option value="RE">Reunion</option>
                                                                    <option value="RO">Romania</option>
                                                                    <option value="RU">Russia</option>
                                                                    <option value="RW">Rwanda</option>
                                                                    <option value="ST">S&atilde;o Tom&eacute; and
                                                                        Pr&iacute;ncipe</option>
                                                                    <option value="BL">Saint Barth&eacute;lemy
                                                                    </option>
                                                                    <option value="SH">Saint Helena</option>
                                                                    <option value="KN">Saint Kitts and Nevis
                                                                    </option>
                                                                    <option value="LC">Saint Lucia</option>
                                                                    <option value="SX">Saint Martin (Dutch part)
                                                                    </option>
                                                                    <option value="MF">Saint Martin (French part)
                                                                    </option>
                                                                    <option value="PM">Saint Pierre and Miquelon
                                                                    </option>
                                                                    <option value="VC">Saint Vincent and the
                                                                        Grenadines</option>
                                                                    <option value="WS">Samoa</option>
                                                                    <option value="SM">San Marino</option>
                                                                    <option value="SA">Saudi Arabia</option>
                                                                    <option value="SN">Senegal</option>
                                                                    <option value="RS">Serbia</option>
                                                                    <option value="SC">Seychelles</option>
                                                                    <option value="SL">Sierra Leone</option>
                                                                    <option value="SG">Singapore</option>
                                                                    <option value="SK">Slovakia</option>
                                                                    <option value="SI">Slovenia</option>
                                                                    <option value="SB">Solomon Islands</option>
                                                                    <option value="SO">Somalia</option>
                                                                    <option value="ZA">South Africa</option>
                                                                    <option value="GS">South Georgia/Sandwich
                                                                        Islands</option>
                                                                    <option value="KR">South Korea</option>
                                                                    <option value="SS">South Sudan</option>
                                                                    <option value="ES">Spain</option>
                                                                    <option value="LK">Sri Lanka</option>
                                                                    <option value="SD">Sudan</option>
                                                                    <option value="SR">Suriname</option>
                                                                    <option value="SJ">Svalbard and Jan Mayen
                                                                    </option>
                                                                    <option value="SE">Sweden</option>
                                                                    <option value="CH">Switzerland</option>
                                                                    <option value="SY">Syria</option>
                                                                    <option value="TW">Taiwan</option>
                                                                    <option value="TJ">Tajikistan</option>
                                                                    <option value="TZ">Tanzania</option>
                                                                    <option value="TH">Thailand</option>
                                                                    <option value="TL">Timor-Leste</option>
                                                                    <option value="TG">Togo</option>
                                                                    <option value="TK">Tokelau</option>
                                                                    <option value="TO">Tonga</option>
                                                                    <option value="TT">Trinidad and Tobago
                                                                    </option>
                                                                    <option value="TN">Tunisia</option>
                                                                    <option value="TR">Turkey</option>
                                                                    <option value="TM">Turkmenistan</option>
                                                                    <option value="TC">Turks and Caicos Islands
                                                                    </option>
                                                                    <option value="TV">Tuvalu</option>
                                                                    <option value="UG">Uganda</option>
                                                                    <option value="UA">Ukraine</option>
                                                                    <option value="AE">United Arab Emirates
                                                                    </option>
                                                                    <option value="GB">United Kingdom (UK)
                                                                    </option>
                                                                    <option value="US">United States (US)</option>
                                                                    <option value="UM">United States (US) Minor
                                                                        Outlying Islands</option>
                                                                    <option value="UY">Uruguay</option>
                                                                    <option value="UZ">Uzbekistan</option>
                                                                    <option value="VU">Vanuatu</option>
                                                                    <option value="VA">Vatican</option>
                                                                    <option value="VE">Venezuela</option>
                                                                    <option value="VN" selected='selected'>
                                                                        Vietnam</option>
                                                                    <option value="VG">Virgin Islands (British)
                                                                    </option>
                                                                    <option value="VI">Virgin Islands (US)
                                                                    </option>
                                                                    <option value="WF">Wallis and Futuna</option>
                                                                    <option value="EH">Western Sahara</option>
                                                                    <option value="YE">Yemen</option>
                                                                    <option value="ZM">Zambia</option>
                                                                    <option value="ZW">Zimbabwe</option>
                                                                </select>
                                                            </p>

                                                            <p class="form-row form-row-wide"
                                                                id="calc_shipping_state_field">
                                                                <input type="hidden" name="calc_shipping_state"
                                                                    id="calc_shipping_state"
                                                                    placeholder="State / County" />
                                                            </p>

                                                            <p class="form-row form-row-wide"
                                                                id="calc_shipping_city_field">
                                                                <label for="calc_shipping_city"
                                                                    class="screen-reader-text">City:</label>
                                                                <input type="text" class="input-text" value=""
                                                                    placeholder="City" name="calc_shipping_city"
                                                                    id="calc_shipping_city" />
                                                            </p>

                                                            <p class="form-row form-row-wide"
                                                                id="calc_shipping_postcode_field">
                                                                <label for="calc_shipping_postcode"
                                                                    class="screen-reader-text">Postcode / ZIP:</label>
                                                                <input type="text" class="input-text" value=""
                                                                    placeholder="Postcode / ZIP"
                                                                    name="calc_shipping_postcode"
                                                                    id="calc_shipping_postcode" />
                                                            </p>

                                                            <p><button type="submit" name="calc_shipping" value="1"
                                                                    class="button">Update</button>
                                                            </p>
                                                            <input type="hidden"
                                                                id="woocommerce-shipping-calculator-nonce"
                                                                name="woocommerce-shipping-calculator-nonce"
                                                                value="42ae328bfc" /><input type="hidden"
                                                                name="_wp_http_referer" value="/nooni-fashion/cart/" />
                                                        </section>
                                                    </form>

                                                </td>
                                            </tr>

                                            <tr class="order-total">
                                                <th>Total</th>
                                                <td data-title="Total"><strong><span
                                                            class="woocommerce-Price-amount amount"><bdi><span
                                                                    class="woocommerce-Price-currencySymbol">&#36;</span>1,019</bdi></span></strong>
                                                </td>
                                            </tr>


                                        </table>

                                        <div class="wc-proceed-to-checkout">

                                            <a href="https://demo.theme-sky.com/nooni-fashion/checkout/"
                                                class="checkout-button button alt wc-forward">
                                                Proceed to checkout</a>
                                        </div>


                                    </div>
                                </div>


                                <div class="cross-sells">
                                    <h2>You may be interested in&hellip;</h2>

                                    <div class="products">



                                        <section
                                            class="product add-to-wishlist-after_add_to_cart type-product post-257 status-publish first instock product_cat-20th-century product_cat-21th-century product_cat-activities product_cat-back-to-school product_cat-casual-clothings product_cat-collections product_cat-fashion-style product_cat-girls product_cat-kids product_cat-spring-collection product_cat-summer-collection product_cat-vacation-wedding has-post-thumbnail sale shipping-taxable purchasable product-type-simple"
                                            data-product_id="257">
                                            <div class="product-wrapper">

                                                <div class="thumbnail-wrapper">
                                                    <a href="girls-bar-bie-dress-in-black/">
                                                        <figure class="has-back-image"><img loading="lazy"
                                                                decoding="async"
                                                                src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/themes/nooni/images/prod_loading.gif"
                                                                data-src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2023/03/40-450x572.jpg"
                                                                class="attachment-shop_catalog wp-post-image ts-lazy-load"
                                                                alt="" width="450" height="572" /><img loading="lazy"
                                                                decoding="async"
                                                                src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/themes/nooni/images/prod_loading.gif"
                                                                data-src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2023/03/41-450x572.jpg"
                                                                class="product-image-back ts-lazy-load" alt=""
                                                                width="450" height="572" />
                                                        </figure>
                                                    </a>
                                                    <div class="product-label on-thumbnail">
                                                        <span class="onsale"><span>Sale</span></span>
                                                    </div>
                                                    <div class="product-group-button">
                                                        <div class="loop-add-to-cart"><a href="?add-to-cart=257"
                                                                data-quantity="1"
                                                                class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                data-product_id="257" data-product_sku="FD401"
                                                                aria-label="Add &ldquo;Girls Bar-bie Dress in Black&rdquo; to your cart"
                                                                rel="nofollow"><span
                                                                    class="ts-tooltip button-tooltip">Add to
                                                                    cart</span></a></div>
                                                        <div class="button-in wishlist">
                                                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-257  wishlist-fragment on-first-load"
                                                                data-fragment-ref="257"
                                                                data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:257,&quot;parent_product_id&quot;:257,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                <!-- ADD TO WISHLIST -->

                                                                <div class="yith-wcwl-add-button">
                                                                    <a href="?add_to_wishlist=257&#038;_wpnonce=88e283c6c3"
                                                                        class="add_to_wishlist single_add_to_wishlist"
                                                                        data-product-id="257" data-product-type="simple"
                                                                        data-original-product-id="257"
                                                                        data-title="&lt;span class=&quot;ts-tooltip button-tooltip&quot; data-title=&quot;Add to wishlist&quot;&gt;Wishlist&lt;/span&gt;"
                                                                        rel="nofollow">
                                                                        <i class="yith-wcwl-icon fa fa-heart-o"></i>
                                                                        <span><span class="ts-tooltip button-tooltip"
                                                                                data-title="Add to wishlist">Wishlist</span></span>
                                                                    </a>
                                                                </div>
                                                                <!-- COUNT TEXT -->
                                                            </div>
                                                        </div>
                                                        <div class="button-in compare"><a class="compare"
                                                                href="https://demo.theme-sky.com/nooni-fashion?action=yith-woocompare-add-product&id=257"
                                                                data-product_id="257"><span
                                                                    class="ts-tooltip button-tooltip"
                                                                    data-title="Add to compare">Compare</span></a>
                                                        </div>
                                                        <div class="button-in quickshop"><a class="quickshop" href="#"
                                                                data-product_id="257"><span
                                                                    class="ts-tooltip button-tooltip">Quick
                                                                    view</span></a></div>
                                                    </div>
                                                </div>
                                                <div class="meta-wrapper">
                                                    <h3 class="heading-title product-name"><a
                                                            href="girls-bar-bie-dress-in-black/">Girls
                                                            Bar-bie Dress in Black</a></h3>
                                                    <span class="price"><del aria-hidden="true"><span
                                                                class="woocommerce-Price-amount amount"><bdi><span
                                                                        class="woocommerce-Price-currencySymbol">&#36;</span>3,010</bdi></span></del>
                                                        <ins><span class="woocommerce-Price-amount amount"><bdi><span
                                                                        class="woocommerce-Price-currencySymbol">&#36;</span>1,449</bdi></span></ins></span>
                                                    <div class="product-group-button-meta"></div>
                                                </div>
                                            </div>
                                        </section>
                                        <section
                                            class="product add-to-wishlist-after_add_to_cart type-product post-238 status-publish last instock product_cat-18th-century product_cat-19th-century product_cat-20th-century product_cat-21th-century product_cat-activities product_cat-body-fit product_cat-casual-clothings product_cat-collections product_cat-curve-plus-size product_cat-fashion-style product_cat-pastel-collection product_cat-petite product_cat-sport-clothings product_cat-spring-collection product_cat-summer-clothings product_cat-summer-collection product_cat-tall product_cat-tops product_cat-vintage-collection product_cat-women product_cat-work-clothings has-post-thumbnail featured shipping-taxable purchasable product-type-simple"
                                            data-product_id="238">
                                            <div class="product-wrapper">
                                                <div class="thumbnail-wrapper">
                                                    <a href="womens-classic-t-shirt/">
                                                        <figure class="has-back-image"><img loading="lazy"
                                                                decoding="async"
                                                                src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/themes/nooni/images/prod_loading.gif"
                                                                data-src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2023/04/21-450x572.jpg"
                                                                class="attachment-shop_catalog wp-post-image ts-lazy-load"
                                                                alt="" width="450" height="572" /><img loading="lazy"
                                                                decoding="async"
                                                                src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/themes/nooni/images/prod_loading.gif"
                                                                data-src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2023/04/19-450x572.jpg"
                                                                class="product-image-back ts-lazy-load" alt=""
                                                                width="450" height="572" />
                                                        </figure>
                                                    </a>
                                                    <div class="product-label on-thumbnail">
                                                        <span class="featured"><span>Hot</span></span>
                                                    </div>
                                                    <div class="product-group-button">
                                                        <div class="loop-add-to-cart"><a href="?add-to-cart=238"
                                                                data-quantity="1"
                                                                class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                data-product_id="238" data-product_sku="PG9EHX"
                                                                aria-label="Add &ldquo;Women&#039;s Classic T-Shirt&rdquo; to your cart"
                                                                rel="nofollow"><span
                                                                    class="ts-tooltip button-tooltip">Add to
                                                                    cart</span></a></div>
                                                        <div class="button-in wishlist">
                                                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-238  wishlist-fragment on-first-load"
                                                                data-fragment-ref="238"
                                                                data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:238,&quot;parent_product_id&quot;:238,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">
                                                                <!-- ADD TO WISHLIST -->
                                                                <div class="yith-wcwl-add-button">
                                                                    <a href="?add_to_wishlist=238&#038;_wpnonce=88e283c6c3"
                                                                        class="add_to_wishlist single_add_to_wishlist"
                                                                        data-product-id="238" data-product-type="simple"
                                                                        data-original-product-id="238"
                                                                        data-title="&lt;span class=&quot;ts-tooltip button-tooltip&quot; data-title=&quot;Add to wishlist&quot;&gt;Wishlist&lt;/span&gt;"
                                                                        rel="nofollow">
                                                                        <i class="yith-wcwl-icon fa fa-heart-o"></i>
                                                                        <span><span class="ts-tooltip button-tooltip"
                                                                                data-title="Add to wishlist">Wishlist</span></span>
                                                                    </a>
                                                                </div>
                                                                <!-- COUNT TEXT -->
                                                            </div>
                                                        </div>
                                                        <div class="button-in compare"><a class="compare"
                                                                href="https://demo.theme-sky.com/nooni-fashion?action=yith-woocompare-add-product&id=238"
                                                                data-product_id="238"><span
                                                                    class="ts-tooltip button-tooltip"
                                                                    data-title="Add to compare">Compare</span></a>
                                                        </div>
                                                        <div class="button-in quickshop"><a class="quickshop" href="#"
                                                                data-product_id="238"><span
                                                                    class="ts-tooltip button-tooltip">Quick
                                                                    view</span></a></div>
                                                    </div>
                                                </div>
                                                <div class="meta-wrapper">
                                                    <h3 class="heading-title product-name"><a
                                                            href="womens-classic-t-shirt/">Women&#039;s
                                                            Classic T-Shirt</a></h3>
                                                    <span class="price"><span
                                                            class="woocommerce-Price-amount amount"><bdi><span
                                                                    class="woocommerce-Price-currencySymbol">&#36;</span>299</bdi></span></span>
                                                    <div class="product-group-button-meta"></div>
                                                </div>
                                            </div>
                                        </section>
                                        <section
                                            class="product add-to-wishlist-after_add_to_cart type-product post-273 status-publish first instock product_cat-18th-century product_cat-19th-century product_cat-activities product_cat-body-fit product_cat-collections product_cat-fashion-style product_cat-men product_cat-pants product_cat-pastel-collection product_cat-petite product_cat-shorts product_cat-tall product_cat-vacation-wedding product_cat-vintage-collection product_cat-work-clothings has-post-thumbnail sale shipping-taxable purchasable product-type-simple"
                                            data-product_id="273">
                                            <div class="product-wrapper">
                                                <div class="thumbnail-wrapper">
                                                    <a href="classic-flat-front-chino-pant/">
                                                        <figure class="no-back-image"><img loading="lazy"
                                                                decoding="async"
                                                                src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/themes/nooni/images/prod_loading.gif"
                                                                data-src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2023/04/33-450x572.jpg"
                                                                class="attachment-shop_catalog wp-post-image ts-lazy-load"
                                                                alt="" width="450" height="572" />
                                                        </figure>
                                                    </a>
                                                    <div class="product-label on-thumbnail">
                                                        <span class="onsale"><span>Sale</span></span>
                                                    </div>
                                                    <div class="product-group-button">
                                                        <div class="loop-add-to-cart"><a href="?add-to-cart=273"
                                                                data-quantity="1"
                                                                class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                data-product_id="273" data-product_sku="SPE-9055"
                                                                aria-label="Add &ldquo;Classic Flat-Front Chino Pant&rdquo; to your cart"
                                                                rel="nofollow"><span
                                                                    class="ts-tooltip button-tooltip">Add to
                                                                    cart</span></a></div>
                                                        <div class="button-in wishlist">
                                                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-273  wishlist-fragment on-first-load"
                                                                data-fragment-ref="273"
                                                                data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:273,&quot;parent_product_id&quot;:273,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">
                                                                <!-- ADD TO WISHLIST -->
                                                                <div class="yith-wcwl-add-button">
                                                                    <a href="?add_to_wishlist=273&#038;_wpnonce=88e283c6c3"
                                                                        class="add_to_wishlist single_add_to_wishlist"
                                                                        data-product-id="273" data-product-type="simple"
                                                                        data-original-product-id="273"
                                                                        data-title="&lt;span class=&quot;ts-tooltip button-tooltip&quot; data-title=&quot;Add to wishlist&quot;&gt;Wishlist&lt;/span&gt;"
                                                                        rel="nofollow">
                                                                        <i class="yith-wcwl-icon fa fa-heart-o"></i>
                                                                        <span><span class="ts-tooltip button-tooltip"
                                                                                data-title="Add to wishlist">Wishlist</span></span>
                                                                    </a>
                                                                </div>
                                                                <!-- COUNT TEXT -->
                                                            </div>
                                                        </div>
                                                        <div class="button-in compare"><a class="compare"
                                                                href="https://demo.theme-sky.com/nooni-fashion?action=yith-woocompare-add-product&id=273"
                                                                data-product_id="273"><span
                                                                    class="ts-tooltip button-tooltip"
                                                                    data-title="Add to compare">Compare</span></a>
                                                        </div>
                                                        <div class="button-in quickshop"><a class="quickshop" href="#"
                                                                data-product_id="273"><span
                                                                    class="ts-tooltip button-tooltip">Quick
                                                                    view</span></a></div>
                                                    </div>
                                                </div>
                                                <div class="meta-wrapper">
                                                    <h3 class="heading-title product-name"><a
                                                            href="classic-flat-front-chino-pant/">Classic
                                                            Flat-Front Chino Pant</a></h3>
                                                    <span class="price"><del aria-hidden="true"><span
                                                                class="woocommerce-Price-amount amount"><bdi><span
                                                                        class="woocommerce-Price-currencySymbol">&#36;</span>2,699</bdi></span></del>
                                                        <ins><span class="woocommerce-Price-amount amount"><bdi><span
                                                                        class="woocommerce-Price-currencySymbol">&#36;</span>1,099</bdi></span></ins></span>
                                                    <div class="product-group-button-meta"></div>
                                                </div>
                                            </div>
                                        </section>
                                        <section
                                            class="product add-to-wishlist-after_add_to_cart type-product post-249 status-publish last outofstock product_cat-20th-century product_cat-21th-century product_cat-activities product_cat-body-fit product_cat-casual-clothings product_cat-collections product_cat-women-dresses product_cat-fashion-style product_cat-pastel-collection product_cat-petite product_cat-spring-collection product_cat-summer-clothings product_cat-summer-collection product_cat-tall product_cat-vacation-wedding product_cat-women product_cat-work-clothings has-post-thumbnail featured shipping-taxable purchasable product-type-simple"
                                            data-product_id="249">
                                            <div class="product-wrapper">
                                                <div class="thumbnail-wrapper">
                                                    <a href="womens-bodycon-mini-dress/">
                                                        <figure class="has-back-image"><img loading="lazy"
                                                                decoding="async"
                                                                src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/themes/nooni/images/prod_loading.gif"
                                                                data-src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2023/04/17-450x572.jpg"
                                                                class="attachment-shop_catalog wp-post-image ts-lazy-load"
                                                                alt="" width="450" height="572" /><img loading="lazy"
                                                                decoding="async"
                                                                src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/themes/nooni/images/prod_loading.gif"
                                                                data-src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2023/04/14-450x572.jpg"
                                                                class="product-image-back ts-lazy-load" alt=""
                                                                width="450" height="572" />
                                                        </figure>
                                                    </a>
                                                    <div class="product-label on-thumbnail">
                                                        <span class="out-of-stock"><span>Sold out</span></span>
                                                    </div>
                                                    <div class="product-group-button">
                                                        <div class="loop-add-to-cart"><a
                                                                href="womens-bodycon-mini-dress/" data-quantity="1"
                                                                class="button product_type_simple" data-product_id="249"
                                                                data-product_sku="VF577"
                                                                aria-label="Read more about &ldquo;Women&#039;s Bodycon Mini Dress&rdquo;"
                                                                rel="nofollow"><span
                                                                    class="ts-tooltip button-tooltip">Read
                                                                    more</span></a></div>
                                                        <div class="button-in wishlist">
                                                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-249  wishlist-fragment on-first-load"
                                                                data-fragment-ref="249"
                                                                data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:249,&quot;parent_product_id&quot;:249,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">
                                                                <!-- ADD TO WISHLIST -->
                                                                <div class="yith-wcwl-add-button">
                                                                    <a href="?add_to_wishlist=249&#038;_wpnonce=88e283c6c3"
                                                                        class="add_to_wishlist single_add_to_wishlist"
                                                                        data-product-id="249" data-product-type="simple"
                                                                        data-original-product-id="249"
                                                                        data-title="&lt;span class=&quot;ts-tooltip button-tooltip&quot; data-title=&quot;Add to wishlist&quot;&gt;Wishlist&lt;/span&gt;"
                                                                        rel="nofollow">
                                                                        <i class="yith-wcwl-icon fa fa-heart-o"></i>
                                                                        <span><span class="ts-tooltip button-tooltip"
                                                                                data-title="Add to wishlist">Wishlist</span></span>
                                                                    </a>
                                                                </div>
                                                                <!-- COUNT TEXT -->
                                                            </div>
                                                        </div>
                                                        <div class="button-in compare"><a class="compare"
                                                                href="https://demo.theme-sky.com/nooni-fashion?action=yith-woocompare-add-product&id=249"
                                                                data-product_id="249"><span
                                                                    class="ts-tooltip button-tooltip"
                                                                    data-title="Add to compare">Compare</span></a>
                                                        </div>
                                                        <div class="button-in quickshop"><a class="quickshop" href="#"
                                                                data-product_id="249"><span
                                                                    class="ts-tooltip button-tooltip">Quick
                                                                    view</span></a></div>
                                                    </div>
                                                </div>
                                                <div class="meta-wrapper">
                                                    <h3 class="heading-title product-name"><a
                                                            href="womens-bodycon-mini-dress/">Women&#039;s
                                                            Bodycon Mini Dress</a></h3>
                                                    <span class="price"><span
                                                            class="woocommerce-Price-amount amount"><bdi><span
                                                                    class="woocommerce-Price-currencySymbol">&#36;</span>224</bdi></span></span>
                                                    <div class="product-group-button-meta"></div>
                                                </div>
                                            </div>
                                        </section>
                                        <section
                                            class="product add-to-wishlist-after_add_to_cart type-product post-223 status-publish first instock product_cat-18th-century product_cat-19th-century product_cat-20th-century product_cat-21th-century product_cat-activities product_cat-back-to-school product_cat-casual-clothings product_cat-collections product_cat-fall-collection product_cat-fashion-style product_cat-girls product_cat-kids product_cat-unisex product_cat-winter-collection has-post-thumbnail featured shipping-taxable purchasable product-type-simple"
                                            data-product_id="223">
                                            <div class="product-wrapper">
                                                <div class="thumbnail-wrapper">
                                                    <a href="girls-black-fluffy-sweater/">
                                                        <figure class="has-back-image"><img loading="lazy"
                                                                decoding="async"
                                                                src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/themes/nooni/images/prod_loading.gif"
                                                                data-src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2023/03/43-450x572.jpg"
                                                                class="attachment-shop_catalog wp-post-image ts-lazy-load"
                                                                alt="" width="450" height="572" /><img loading="lazy"
                                                                decoding="async"
                                                                src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/themes/nooni/images/prod_loading.gif"
                                                                data-src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2023/03/47-450x572.jpg"
                                                                class="product-image-back ts-lazy-load" alt=""
                                                                width="450" height="572" />
                                                        </figure>
                                                    </a>
                                                    <div class="product-label on-thumbnail">
                                                        <span class="featured"><span>Hot</span></span>
                                                    </div>
                                                    <div class="product-group-button">
                                                        <div class="loop-add-to-cart"><a href="?add-to-cart=223"
                                                                data-quantity="1"
                                                                class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                data-product_id="223" data-product_sku="VF543"
                                                                aria-label="Add &ldquo;Girls Black Fluffy Sweater&rdquo; to your cart"
                                                                rel="nofollow"><span
                                                                    class="ts-tooltip button-tooltip">Add to
                                                                    cart</span></a></div>
                                                        <div class="button-in wishlist">
                                                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-223  wishlist-fragment on-first-load"
                                                                data-fragment-ref="223"
                                                                data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:223,&quot;parent_product_id&quot;:223,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">
                                                                <!-- ADD TO WISHLIST -->
                                                                <div class="yith-wcwl-add-button">
                                                                    <a href="?add_to_wishlist=223&#038;_wpnonce=88e283c6c3"
                                                                        class="add_to_wishlist single_add_to_wishlist"
                                                                        data-product-id="223" data-product-type="simple"
                                                                        data-original-product-id="223"
                                                                        data-title="&lt;span class=&quot;ts-tooltip button-tooltip&quot; data-title=&quot;Add to wishlist&quot;&gt;Wishlist&lt;/span&gt;"
                                                                        rel="nofollow">
                                                                        <i class="yith-wcwl-icon fa fa-heart-o"></i>
                                                                        <span><span class="ts-tooltip button-tooltip"
                                                                                data-title="Add to wishlist">Wishlist</span></span>
                                                                    </a>
                                                                </div>
                                                                <!-- COUNT TEXT -->
                                                            </div>
                                                        </div>
                                                        <div class="button-in compare"><a class="compare"
                                                                href="https://demo.theme-sky.com/nooni-fashion?action=yith-woocompare-add-product&id=223"
                                                                data-product_id="223"><span
                                                                    class="ts-tooltip button-tooltip"
                                                                    data-title="Add to compare">Compare</span></a>
                                                        </div>
                                                        <div class="button-in quickshop"><a class="quickshop" href="#"
                                                                data-product_id="223"><span
                                                                    class="ts-tooltip button-tooltip">Quick
                                                                    view</span></a></div>
                                                    </div>
                                                </div>
                                                <div class="meta-wrapper">
                                                    <h3 class="heading-title product-name"><a
                                                            href="girls-black-fluffy-sweater/">Girls
                                                            Black Fluffy Sweater</a></h3>
                                                    <span class="price"><span
                                                            class="woocommerce-Price-amount amount"><bdi><span
                                                                    class="woocommerce-Price-currencySymbol">&#36;</span>1,599</bdi></span></span>
                                                    <div class="product-group-button-meta"></div>
                                                </div>
                                            </div>
                                        </section>
                                        <section
                                            class="product add-to-wishlist-after_add_to_cart type-product post-235 status-publish last instock product_cat-18th-century product_cat-19th-century product_cat-20th-century product_cat-21th-century product_cat-activities product_cat-body-fit product_cat-casual-clothings product_cat-collections product_cat-curve-plus-size product_cat-fall-collection product_cat-fashion-style product_cat-men-hoodies product_cat-men product_cat-pastel-collection product_cat-petite product_cat-shirts product_cat-sport-clothings product_cat-spring-collection product_cat-summer-collection product_cat-t-shirts product_cat-tall product_cat-work-clothings has-post-thumbnail shipping-taxable purchasable product-type-simple"
                                            data-product_id="235">
                                            <div class="product-wrapper">
                                                <div class="thumbnail-wrapper">
                                                    <a href="oversized-knitted-t-shirt-in-blue/">
                                                        <figure class="has-back-image"><img loading="lazy"
                                                                decoding="async"
                                                                src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/themes/nooni/images/prod_loading.gif"
                                                                data-src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2023/04/35-450x572.jpg"
                                                                class="attachment-shop_catalog wp-post-image ts-lazy-load"
                                                                alt="" width="450" height="572" /><img loading="lazy"
                                                                decoding="async"
                                                                src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/themes/nooni/images/prod_loading.gif"
                                                                data-src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2023/04/05-450x572.jpg"
                                                                class="product-image-back ts-lazy-load" alt=""
                                                                width="450" height="572" />
                                                        </figure>
                                                    </a>
                                                    <div class="product-label on-thumbnail">
                                                    </div>
                                                    <div class="product-group-button">
                                                        <div class="loop-add-to-cart"><a href="?add-to-cart=235"
                                                                data-quantity="1"
                                                                class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                data-product_id="235" data-product_sku="JSRNZP"
                                                                aria-label="Add &ldquo;Oversized Knitted T-Shirt In Blue&rdquo; to your cart"
                                                                rel="nofollow"><span
                                                                    class="ts-tooltip button-tooltip">Add to
                                                                    cart</span></a></div>
                                                        <div class="button-in wishlist">
                                                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-235  wishlist-fragment on-first-load"
                                                                data-fragment-ref="235"
                                                                data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:235,&quot;parent_product_id&quot;:235,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                <!-- ADD TO WISHLIST -->

                                                                <div class="yith-wcwl-add-button">
                                                                    <a href="?add_to_wishlist=235&#038;_wpnonce=88e283c6c3"
                                                                        class="add_to_wishlist single_add_to_wishlist"
                                                                        data-product-id="235" data-product-type="simple"
                                                                        data-original-product-id="235"
                                                                        data-title="&lt;span class=&quot;ts-tooltip button-tooltip&quot; data-title=&quot;Add to wishlist&quot;&gt;Wishlist&lt;/span&gt;"
                                                                        rel="nofollow">
                                                                        <i class="yith-wcwl-icon fa fa-heart-o"></i>
                                                                        <span><span class="ts-tooltip button-tooltip"
                                                                                data-title="Add to wishlist">Wishlist</span></span>
                                                                    </a>
                                                                </div>

                                                                <!-- COUNT TEXT -->

                                                            </div>
                                                        </div>
                                                        <div class="button-in compare"><a class="compare"
                                                                href="https://demo.theme-sky.com/nooni-fashion?action=yith-woocompare-add-product&id=235"
                                                                data-product_id="235"><span
                                                                    class="ts-tooltip button-tooltip"
                                                                    data-title="Add to compare">Compare</span></a>
                                                        </div>
                                                        <div class="button-in quickshop"><a class="quickshop" href="#"
                                                                data-product_id="235"><span
                                                                    class="ts-tooltip button-tooltip">Quick
                                                                    view</span></a></div>
                                                    </div>
                                                </div>
                                                <div class="meta-wrapper">
                                                    <h3 class="heading-title product-name"><a
                                                            href="oversized-knitted-t-shirt-in-blue/">Oversized
                                                            Knitted T-Shirt In Blue</a></h3>
                                                    <span class="price"><span
                                                            class="woocommerce-Price-amount amount"><bdi><span
                                                                    class="woocommerce-Price-currencySymbol">&#36;</span>749</bdi></span></span>
                                                    <div class="product-group-button-meta"></div>
                                                </div>
                                            </div>
                                        </section>

                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <!-- Right Sidebar -->

            </div>

        </div><!-- #main .wrapper -->
        @include('Frontend.layouts.footer')
        @include('Frontend.layouts.sidebar')
    </div><!-- #page -->




    <div id="to-top" class="scroll-button">
        <a class="scroll-button" href="javascript:void(0)" title="Back to Top">Back to Top</a>
    </div>

    <link rel='stylesheet' id='redux-custom-fonts-css'
        href='https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/redux/custom-fonts/fonts.css?ver=1708788012'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href='https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/elementor/css/custom-frontend.min.css?ver=1698216546'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-6010-css'
        href='https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/elementor/css/post-6010.css?ver=1698216546'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-6075-css'
        href='https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/elementor/css/post-6075.css?ver=1698216546'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-6042-css'
        href='https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/elementor/css/post-6042.css?ver=1698216546'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-5433-css'
        href='https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/elementor/css/post-5433.css?ver=1698216546'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-css'
        href='https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.23.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-12-css'
        href='https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/elementor/css/post-12.css?ver=1698216546'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-ts-tb-icon-css'
        href='https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/themes/nooni/css/tb-icons.min.css?ver=1.0.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css'
        href='https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/plugins/revslider/public/assets/css/rs6.css?ver=6.6.18'
        type='text/css' media='all' />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rs-demo-id {}
    </style>

    <script type="text/javascript"
        src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.yith-wcwl.min.js?ver=3.26.0"
        id="jquery-yith-wcwl-js"></script>
    <script type="text/javascript"
        src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.6.18"
        defer async id="tp-tools-js"></script>
    <script type="text/javascript"
        src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.6.18"
        defer async id="revmin-js"></script>
    <script type="text/javascript" id="ts-script-js-extra">
        /* <![CDATA[ */
        var themesky_params = {
            "ajax_uri": "\/nooni-fashion\/wp-admin\/admin-ajax.php"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/plugins/themesky/js/themesky.js?ver=1.0.2"
        id="ts-script-js"></script>
    <script type="text/javascript"
        src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/plugins/themesky/js/swiper-bundle.min.js?ver=1.0.2"
        id="swiper-js"></script>
    <script type="text/javascript"
        src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.8.2.1"
        id="jquery-blockui-js"></script>
    <script type="text/javascript" id="wc-add-to-cart-js-extra">
        /* <![CDATA[ */
        var wc_add_to_cart_params = {
            "ajax_url": "\/nooni-fashion\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/nooni-fashion\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View cart",
            "cart_url": "https:\/\/demo.theme-sky.com\/nooni-fashion\/cart\/",
            "is_cart": "1",
            "cart_redirect_after_add": "no"
        };
        /* ]]> */
    </script>


 
 
    <script type="text/javascript"
        src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/plugins/woocommerce/assets/js/frontend/cart.min.js?ver=8.2.1"
        id="wc-cart-js"></script>
    <script type="text/javascript"
        src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/plugins/woocommerce/assets/js/selectWoo/selectWoo.full.min.js?ver=1.0.9-wc.8.2.1"
        id="selectWoo-js"></script>
    <script type="text/javascript"
        src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2"
        id="wp-polyfill-inert-js"></script>
    <script type="text/javascript"
        src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.14.0"
        id="regenerator-runtime-js"></script>
    <script type="text/javascript"
        src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0"
        id="wp-polyfill-js"></script>
    <script type="text/javascript"
        src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-includes/js/dist/hooks.min.js?ver=c6aec9a8d4e5a5d543a1"
        id="wp-hooks-js"></script>
    <script type="text/javascript"
        src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-includes/js/dist/i18n.min.js?ver=7701b0c3857f914212ef"
        id="wp-i18n-js"></script>
  
 

    <script type="text/javascript"
        src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/plugins/yith-woocommerce-compare/assets/js/woocompare.min.js?ver=2.32.0"
        id="yith-woocompare-main-js"></script>
    <script type="text/javascript"
        src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/plugins/yith-woocommerce-compare/assets/js/jquery.colorbox-min.js?ver=1.4.21"
        id="jquery-colorbox-js"></script>

    <script type="text/javascript"
        src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=8.2.1"
        id="wc-cart-fragments-js"></script>

    <script type="text/javascript"
        src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/themes/nooni/js/main.js?ver=1.0.3"
        id="nooni-script-js">
        </script>
    <script type="text/javascript"
        src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/themes/nooni/js/jquery.sticky.js?ver=1.0.3"
        id="jquery-sticky-js"></script>
    <script type="text/javascript"
        src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/plugins/woocommerce/assets/js/flexslider/jquery.flexslider.min.js?ver=2.7.2-wc.8.2.1"
        id="flexslider-js"></script>
    <script type="text/javascript"
        src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-includes/js/underscore.min.js?ver=1.13.4" id="underscore-js">
        </script>

    <script type="text/javascript"
        src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-includes/js/wp-util.min.js?ver=6.4.3"
        id="wp-util-js"></script>

    <script type="text/javascript"
        src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min.js?ver=8.2.1"
        id="wc-add-to-cart-variation-js"></script>
    <script type="text/javascript"
        src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/plugins/woocommerce/assets/js/zoom/jquery.zoom.min.js?ver=1.7.21-wc.8.2.1"
        id="zoom-js"></script>
    <script type="text/javascript" defer
        src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/plugins/mailchimp-for-wp/assets/js/forms.js?ver=4.9.9"
        id="mc4wp-forms-api-js"></script>
    <script type="text/javascript"
        src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.16.6"
        id="elementor-webpack-runtime-js"></script>
    <script type="text/javascript"
        src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.16.6"
        id="elementor-frontend-modules-js"></script>
    <script type="text/javascript"
        src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2"
        id="elementor-waypoints-js"></script>
    <script type="text/javascript"
        src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2"
        id="jquery-ui-core-js"></script>

    <script type="text/javascript"
        src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.16.6"
        id="elementor-frontend-js"></script>
    <div id="ts-quickshop-modal" class="ts-popup-modal">
        <div class="overlay"></div>
        <div class="quickshop-container popup-container">
            <span class="close"></span>
            <div class="quickshop-content"></div>
        </div>
    </div>
</body>

</html>