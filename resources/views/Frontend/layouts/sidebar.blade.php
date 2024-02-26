@php
    $categoriesList = categories();
@endphp
<div id="vertical-menu-sidebar" class="vertical-menu-sidebar hidden-phone">
    <div class="overlay"></div>
    <div class="ts-sidebar-content">
        <span class="close"></span>
        <div class="vertical-menu-wrapper">
            <nav class="vertical-menu">
                <ul id="menu-vertical-menu" class="menu">
                    <li id="menu-item-6473"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-5327 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-6473 ts-normal-menu parent">
                        <a href="/"><span class="menu-label">Home</span></a>

                    </li>
                    <li id="menu-item-5930"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-5930 ts-normal-menu parent">
                        <a href="/shop/"><span class="menu-label">Shop</span></a><span
                            class="ts-menu-drop-icon"></span>
                        <ul class="sub-menu">
                            @foreach ($categoriesList as $categorie)
                                <li id="menu-item-6055"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6055">
                                    <a href="{{ url('products-list', [$categorie->slug]) }}"><span
                                            class="menu-label">{{ $categorie->name }}</span></a>
                                </li>
                            @endforeach

                        </ul>
                    </li>
                    <li id="menu-item-5931"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5931 ts-normal-menu parent">
                        <a href="/shop/wood-outdoor-adirondack-chair/"><span class="menu-label">Product</span></a><span
                            class="ts-menu-drop-icon"></span>
                        <ul class="sub-menu">
                            <li id="menu-item-6061"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6061">
                                <a href="/shop/chiffon-wrap-button-detail-maxi-dress/"><span class="menu-label">Product
                                        01</span></a>
                            </li>
                            <li id="menu-item-6062"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6062">
                                <a href="/shop/chiffon-wrap-button-detail-maxi-dress/?variation_thumbnail=1"><span
                                        class="menu-label">Product 02</span></a>
                            </li>
                            <li id="menu-item-6063"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6063">
                                <a href="/shop/smiley-t-shirt-in-light-blue/"><span class="menu-label">Product
                                        03</span></a>
                            </li>
                            <li id="menu-item-6064"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6064">
                                <a href="/shop/smiley-t-shirt-in-light-blue/?attr_dropdown=1"><span
                                        class="menu-label">Product 04</span></a>
                            </li>
                            <li id="menu-item-6065"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6065">
                                <a
                                    href="/shop/small-logo-puffer-jacket-in-blue/?gallery_layout=horizontal&amp;tabs_accordion=both&amp;tabs_pos=inside_summary&amp;ads=1"><span
                                        class="menu-label">Product 05</span></a>
                            </li>
                            <li id="menu-item-6066"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6066">
                                <a href="/shop/crop-top-jackets-set-in-white/"><span class="menu-label">Product
                                        06</span></a>
                            </li>
                            <li id="menu-item-6181"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6181">
                                <a
                                    href="/shop/faux-longline-coat-in-light-pink/?meta=0&amp;gallery_layout=grid&amp;tabs_accordion=both&amp;tabs_pos=inside_summary&amp;upsells=1"><span
                                        class="menu-label">Product 07</span></a>
                            </li>
                            <li id="menu-item-6225"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6225">
                                <a href="/shop/blazer-shorts-pants-set-in-white/"><span class="menu-label">Product
                                        08</span></a>
                            </li>
                        </ul>
                    </li>

                    <li id="menu-item-5932"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5932 ts-normal-menu">
                        <a href="{{ url('about-us') }}"><span class="menu-label">About
                                us</span></a>
                    </li>
                    <li id="menu-item-5934"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5934 ts-normal-menu">
                        <a href="{{ url('contact-us') }}"><span class="menu-label">Contact us</span></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<!--mobile Search Sidebar -->

<div id="ts-search-sidebar" class="ts-floating-sidebar">
    <div class="overlay"></div>
    <div class="ts-sidebar-content">
        <div class="ts-search-by-category woocommerce">
            <div class="search--header">
                <h2 class="title">Search for products (<span class="count">0</span>)</h2>
                <span class="close"></span>
            </div>

            <div class="search--form">
                <form method="get" action="/" id="searchform-851">
                    <div class="search-table">
                        <div class="search-field search-content">
                            <input type="text" value="" name="s" id="s-851"
                                placeholder="Search for products..." autocomplete="off" />
                            <input type="hidden" name="post_type" value="product" />
                        </div>
                        <div class="search-button">
                            <input type="submit" id="searchsubmit-851" value="Search" />
                        </div>
                    </div>
                </form>
            </div>

            <div class="ts-search-result-container"></div>
        </div>
    </div>
</div>


{{-- mobile mobile header --}}

{{-- Group Header Button  --}}
<div id="group-icon-header" class="ts-floating-sidebar">
    <div class="overlay"></div>
    <div class="ts-sidebar-content ">

        <div class="sidebar-content">
            <div class="logo-wrapper">
                <div class="logo">
                    <a href="/">
                        <img src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2022/12/logo.png"
                            loading="lazy" alt="Nooni" class="menu-mobile-logo" />
                    </a>
                </div>
            </div>

            <ul class="tab-mobile-menu">
                <li id="main-menu" class="active"><span>Menu</span></li>
                <li id="vertical-menu"><span>Categories</span></li>
            </ul>

            <h6 class="menu-title"><span>Menu</span></h6>

            <div class="mobile-menu-wrapper ts-menu tab-menu-mobile">
                <div class="menu-main-mobile">
                    <nav class="mobile-menu">
                        <ul id="menu-mobile-menu" class="menu">
                            <li id="menu-item-6475"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-5327 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-6475 ts-normal-menu parent">
                                <a href="/"><span class="menu-label">Home</span></a></span>

                            </li>
                            <li id="menu-item-2287"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2287 ts-normal-menu parent">
                                <a href="/shop/"><span class="menu-label">Shop</span></a><span
                                    class="ts-menu-drop-icon"></span>
                                <ul class="sub-menu">
                                    @foreach ($categoriesList as $categorie)
                                        <li id="menu-item-6093"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6093">
                                            <a href="{{ url('products-list', [$categorie->slug]) }}"><span
                                                    class="menu-label">{{ $categorie->name ?? null }}</span></a>
                                        </li>
                                    @endforeach

                                </ul>
                            </li>
                            <li id="menu-item-2308"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2308 ts-normal-menu parent">
                                <a href="/shop/wood-outdoor-adirondack-chair/"><span
                                        class="menu-label">Product</span></a><span class="ts-menu-drop-icon"></span>
                                <ul class="sub-menu">
                                    {{-- @foreach ($productList as $product)
                                       
                                    <li id="menu-item-2309"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2309">
                                        <a
                                            href="/shop/chiffon-wrap-button-detail-maxi-dress/"><span
                                                class="menu-label">{{$product->product_name }}</span></a>
                                    </li>
                                   @endforeach --}}

                                </ul>
                            </li>
                            <li id="menu-item-2296"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2296 ts-normal-menu parent">
                                <a href="#"><span class="menu-label">Pages</span></a><span
                                    class="ts-menu-drop-icon"></span>
                                <ul class="sub-menu">
                                    <li id="menu-item-2322"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2322">
                                        <a href="/blog/"><span class="menu-label">Blog Default</span></a>
                                    </li>
                                    <li id="menu-item-5554"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5554">
                                        <a href="/blog-masonry/"><span class="menu-label">Blog Masonry</span></a>
                                    </li>
                                    <li id="menu-item-4856"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4856">
                                        <a href="/perfect-pieces-to-match-your-custom-tees/"><span
                                                class="menu-label">Blog Detail</span></a>
                                    </li>
                                    <li id="menu-item-5559"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5559">
                                        <a
                                            href="/your-summer-is-incomplete-without-these-dresses/?style=thumbnail-parallax"><span
                                                class="menu-label">Blog Parallax</span></a>
                                    </li>
                                    <li id="menu-item-6297"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6297">
                                        <a
                                            href="/blazer-guide-my-favorite-blazer-in-my-closet/?style=thumbnail-parallax"><span
                                                class="menu-label">Blog Video</span></a>
                                    </li>
                                    <li id="menu-item-2323"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2323">
                                        <a href="/404/"><span class="menu-label">404 Page</span></a>
                                    </li>
                                    <li id="menu-item-5555"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5555">
                                        <a href="/coming-soon/"><span class="menu-label">Coming soon</span></a>
                                    </li>
                                    <li id="menu-item-5557"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5557">
                                        <a href="/order-tracking/"><span class="menu-label">Track Order</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li id="menu-item-5553"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5553 ts-normal-menu">
                                <a href="{{ url('about-us') }}"><span class="menu-label">About us</span></a>
                            </li>
                            <li id="menu-item-5556"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5556 ts-normal-menu">
                                <a href="{{ url('contact-us') }}"><span class="menu-label">Contact us</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="mobile-menu-wrapper ts-menu tab-vertical-menu">
                <div class="vertical-menu-wrapper">
                    <nav class="mobile-menu">
                        @foreach ($categoriesList as $key => $categorie)
                            <ul id="menu-main-menu-{{ $key + 11 }}" class="menu">
                                <li
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6468 hide ts-megamenu ts-megamenu-columns--1 ts-megamenu-fullwidth ts-megamenu-fullwidth-stretch no-stretch-content parent">
                                    <a href="{{ url('product-list', [$categorie->slug]) }}"><span
                                            class="menu-label">{{ $categorie->name ?? null }}</span></a><span
                                        class="ts-menu-drop-icon"></span>
                                    <ul class="sub-menu">
                                        <li>
                                            <div class="ts-megamenu-widgets-container ts-megamenu-container">
                                                <div data-elementor-type="wp-post" data-elementor-id="6010"
                                                    class="elementor elementor-6010">
                                                    <div class="elementor-element elementor-element-7bb3efb e-flex e-con-boxed e-con e-parent"
                                                        data-id="cat-{{ $key + 111 }}"
                                                        data-element_type="container"
                                                        data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                                                        data-core-v316-plus="true">
                                                        <div class="e-con-inner">
                                                            {{-- <div class="elementor-element elementor-element-3f5ad04 e-con-full e-flex e-con e-child"
                                                                data-id="cat-{{ $key + 111 }}"
                                                                data-element_type="container"
                                                                data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                                                <div class="elementor-element elementor-element-03af999 title-align-left elementor-widget elementor-widget-ts-list-of-product-categories"
                                                                    data-id="03af999" data-element_type="widget"
                                                                    data-widget_type="ts-list-of-product-categories.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div
                                                                            class="ts-list-of-product-categories-wrapper columns-1 no-shop-more-button">

                                                                            <h3 class="heading-title">
                                                                                Women Clothings </h3>

                                                                            <div class="list-categories">
                                                                                <ul>
                                                                                    <li><a
                                                                                            href="/product-category/women/">Women</a>
                                                                                    </li>

                                                                                    <li><a
                                                                                            href="/product-category/women/women-coats-jackets/">
                                                                                            Coats &amp; Jackets </a>
                                                                                    </li>
                                                                                    <li><a
                                                                                            href="/product-category/women/women-dresses/">
                                                                                            Dresses </a></li>
                                                                                    <li><a
                                                                                            href="/product-category/women/women-hoodies-sweatshirts/">
                                                                                            Hoodies &amp; Sweatshirts
                                                                                        </a></li>
                                                                                    <li><a
                                                                                            href="/product-category/women/jeans/">
                                                                                            Jeans </a></li>
                                                                                    <li><a
                                                                                            href="/product-category/women/women-knitwear/">
                                                                                            Knitwears </a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-e289b75 e-con-full e-flex e-con e-child"
                                                                data-id="e289b75" data-element_type="container"
                                                                data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                                                <div class="elementor-element elementor-element-09beb86 title-align-left elementor-widget elementor-widget-ts-list-of-product-categories"
                                                                    data-id="09beb86" data-element_type="widget"
                                                                    data-widget_type="ts-list-of-product-categories.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div
                                                                            class="ts-list-of-product-categories-wrapper columns-1 no-shop-more-button">

                                                                            <h3 class="heading-title">
                                                                                Men Clothings </h3>

                                                                            <div class="list-categories">
                                                                                <ul>

                                                                                    <li><a
                                                                                            href="/product-category/men/men-coats-jackets/">
                                                                                            Coats &amp; Jackets </a>
                                                                                    </li>
                                                                                    <li><a
                                                                                            href="/product-category/men/men-hoodies/">
                                                                                            Hoodies </a></li>
                                                                                    <li><a
                                                                                            href="/product-category/men/pants/">
                                                                                            Pants </a></li>
                                                                                    <li><a
                                                                                            href="/product-category/men/shirts/">
                                                                                            Shirts </a></li>
                                                                                    <li><a
                                                                                            href="/product-category/men/shorts/">
                                                                                            Shorts </a></li>
                                                                                    <li><a
                                                                                            href="/product-category/men/t-shirts/">
                                                                                            T-Shirts </a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> --}}

                                                        </div>
                                                    </div>
                                                    {{-- <div class="elementor-element elementor-element-b7aa36c e-flex e-con-boxed e-con e-parent"
                                                        data-id="cat-{{ $key + 111 }}"
                                                        data-element_type="container"
                                                        data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}"
                                                        data-core-v316-plus="true">
                                                        <div class="e-con-inner">
                                                            <div class="elementor-element elementor-element-cfc36ba text-left-center elementor-widget elementor-widget-ts-banner"
                                                                data-id="cfc36ba" data-element_type="widget"
                                                                data-widget_type="ts-banner.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="ts-banner eff-zoom-in description-top">
                                                                        <div class="banner-wrapper">


                                                                            <div class="banner-bg">
                                                                                <div class="bg-content">
                                                                                    <img width="690" height="200"
                                                                                        src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2023/05/banner-mega-1-2.jpg"
                                                                                        class="img" alt=""
                                                                                        decoding="async"
                                                                                        loading="lazy"
                                                                                        srcset="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2023/05/banner-mega-1-2.jpg 690w, https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2023/05/banner-mega-1-2-300x87.jpg 300w"
                                                                                        sizes="(max-width: 690px) 100vw, 690px" />
                                                                                </div>
                                                                            </div>

                                                                            <div class="box-content">

                                                                                <h2>The Best Collections</h2>


                                                                                <div class="description">NEW PRODUCTS
                                                                                </div>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-8804ce0 text-left-center elementor-widget elementor-widget-ts-banner"
                                                                data-id="8804ce0" data-element_type="widget"
                                                                data-widget_type="ts-banner.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="ts-banner eff-zoom-in description-top">
                                                                        <div class="banner-wrapper">

                                                                            <a class="banner-link"
                                                                                href="/product-category/men/"
                                                                                target="_blank" rel="nofollow"></a>

                                                                            <div class="banner-bg">
                                                                                <div class="bg-content">
                                                                                    <img width="690" height="200"
                                                                                        src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2023/05/banner-mega-2-2.jpg"
                                                                                        class="img" alt=""
                                                                                        decoding="async"
                                                                                        loading="lazy"
                                                                                        srcset="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2023/05/banner-mega-2-2.jpg 690w, https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2023/05/banner-mega-2-2-300x87.jpg 300w"
                                                                                        sizes="(max-width: 690px) 100vw, 690px" />
                                                                                </div>
                                                                            </div>

                                                                            <div class="box-content">

                                                                                <h2>Men Pick From $15</h2>


                                                                                <div class="description">ENJOY FREE
                                                                                    SHIPPING</div>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        @endforeach
                    </nav>
                </div>
            </div>

            <div class="group-button-header">
                <div class="meta-bottom">
                    <div class="my-account-wrapper">
                        <div class="ts-tiny-account-wrapper">
                            <div class="account-control">
                                <a class="login" href="{{ url('account') }}" title="My Account">Login/Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Shopping Cart Floating Sidebar -->
<div id="ts-shopping-cart-sidebar" class="ts-floating-sidebar">
    <div class="overlay"></div>
    <div class="ts-sidebar-content">
        <span class="close"></span>
        <div class="ts-sidebar-content">
            <span class="close"></span>
            <div class="ts-tiny-cart-wrapper" style="opacity: 1;">

                <div class="cart-dropdown-form dropdown-container woocommerce">
                    <div class="form-content">
                        <h3 class="theme-title">Cart (04)</h3>
                        <div class="cart-wrapper">
                            <div class="cart-content">
                                <ul class="cart_list">
                                    <li class="woocommerce-mini-cart-item">
                                        <a class="thumbnail" href="/shop/faux-longline-coat-in-light-pink/">
                                            <img width="450" height="572"
                                                src="/wp-content/uploads/2023/04/31-450x572.jpg"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt="" decoding="async" loading="lazy"
                                                srcset="/wp-content/uploads/2023/04/31-450x572.jpg 450w, /wp-content/uploads/2023/04/31-235x300.jpg 235w"
                                                sizes="(max-width: 450px) 100vw, 450px"> </a>
                                        <div class="cart-item-wrapper">
                                            <h3 class="product-name">
                                                <a href="/shop/faux-longline-coat-in-light-pink/">
                                                    Faux Longline Coat in Light Pink </a>
                                            </h3>

                                            <span class="price"><span
                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>1,009</bdi></span></span>

                                            <div class="quantity">
                                                <div class="number-button">
                                                    <input type="button" value="-" class="minus">
                                                    <label class="screen-reader-text"
                                                        for="quantity_65da082974ac2">Faux Longline Coat in Light Pink
                                                        quantity</label>
                                                    <input type="number" id="quantity_65da082974ac2"
                                                        class="input-text qty text"
                                                        name="cart[3f088ebeda03513be71d34d214291986][qty]"
                                                        value="1" aria-label="Product quantity" size="4"
                                                        min="0" max="" step="1" placeholder=""
                                                        inputmode="numeric" autocomplete="off">
                                                    <input type="button" value="+" class="plus">
                                                </div>
                                            </div>
                                            <div class="subtotal"><span
                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>1,009</bdi></span>
                                            </div>
                                            <a href="?remove_item=3f088ebeda03513be71d34d214291986&amp;_wpnonce=efc384caaf"
                                                class="remove remove_from_cart_button" aria-label="Remove this item"
                                                data-cart_item_key="3f088ebeda03513be71d34d214291986">×</a>
                                        </div>
                                    </li>

                                    <li class="woocommerce-mini-cart-item">
                                        <a class="thumbnail" href="/shop/women-hooded-jacket-in-blue/">
                                            <img width="450" height="572"
                                                src="/wp-content/uploads/2023/04/06-450x572.jpg"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt="" decoding="async" loading="lazy"
                                                srcset="/wp-content/uploads/2023/04/06-450x572.jpg 450w, /wp-content/uploads/2023/04/06-235x300.jpg 235w"
                                                sizes="(max-width: 450px) 100vw, 450px"> </a>
                                        <div class="cart-item-wrapper">
                                            <h3 class="product-name">
                                                <a href="/shop/women-hooded-jacket-in-blue/">
                                                    Women Hooded Jacket in Blue </a>
                                            </h3>

                                            <span class="price"><span
                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>399</bdi></span></span>

                                            <div class="quantity">
                                                <div class="number-button">
                                                    <input type="button" value="-" class="minus">
                                                    <label class="screen-reader-text"
                                                        for="quantity_65da082974d1b">Women Hooded Jacket in Blue
                                                        quantity</label>
                                                    <input type="number" id="quantity_65da082974d1b"
                                                        class="input-text qty text"
                                                        name="cart[555d6702c950ecb729a966504af0a635][qty]"
                                                        value="2" aria-label="Product quantity" size="4"
                                                        min="0" max="" step="1" placeholder=""
                                                        inputmode="numeric" autocomplete="off">
                                                    <input type="button" value="+" class="plus">
                                                </div>
                                            </div>
                                            <div class="subtotal"><span
                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>798</bdi></span>
                                            </div>
                                            <a href="?remove_item=555d6702c950ecb729a966504af0a635&amp;_wpnonce=efc384caaf"
                                                class="remove remove_from_cart_button" aria-label="Remove this item"
                                                data-cart_item_key="555d6702c950ecb729a966504af0a635">×</a>
                                        </div>
                                    </li>

                                    <li class="woocommerce-mini-cart-item">
                                        <a class="thumbnail" href="/shop/womens-long-sleeve-shirt-dress/">
                                            <img width="450" height="572"
                                                src="/wp-content/uploads/2023/04/16-450x572.jpg"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt="" decoding="async" loading="lazy"
                                                srcset="/wp-content/uploads/2023/04/16-450x572.jpg 450w, /wp-content/uploads/2023/04/16-235x300.jpg 235w"
                                                sizes="(max-width: 450px) 100vw, 450px"> </a>
                                        <div class="cart-item-wrapper">
                                            <h3 class="product-name">
                                                <a href="/shop/womens-long-sleeve-shirt-dress/">
                                                    Women's Long Sleeve Shirt Dress </a>
                                            </h3>

                                            <span class="price"><span
                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>3,049</bdi></span></span>

                                            <div class="quantity">
                                                <div class="number-button">
                                                    <input type="button" value="-" class="minus">
                                                    <label class="screen-reader-text"
                                                        for="quantity_65da082974f3a">Women's Long Sleeve Shirt Dress
                                                        quantity</label>
                                                    <input type="number" id="quantity_65da082974f3a"
                                                        class="input-text qty text"
                                                        name="cart[d296c101daa88a51f6ca8cfc1ac79b50][qty]"
                                                        value="1" aria-label="Product quantity" size="4"
                                                        min="0" max="92" step="1" placeholder=""
                                                        inputmode="numeric" autocomplete="off">
                                                    <input type="button" value="+" class="plus">
                                                </div>
                                            </div>
                                            <div class="subtotal"><span
                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">$</span>3,049</bdi></span>
                                            </div>
                                            <a href="?remove_item=d296c101daa88a51f6ca8cfc1ac79b50&amp;_wpnonce=efc384caaf"
                                                class="remove remove_from_cart_button" aria-label="Remove this item"
                                                data-cart_item_key="d296c101daa88a51f6ca8cfc1ac79b50">×</a>
                                        </div>
                                    </li>

                                </ul>
                                <div class="dropdown-footer">
                                    <div class="total"><span class="total-title primary-text">Subtotal</span><span
                                            class="woocommerce-Price-amount amount"><bdi><span
                                                    class="woocommerce-Price-currencySymbol">$</span>4,856</bdi></span>
                                    </div>

                                    <a href="" class="button view-cart">View Cart</a>
                                    <a href="/checkout/" class="button checkout-button">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
