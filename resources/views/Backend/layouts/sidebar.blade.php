<!-- SIDEBAR -->
@php
    $settingData = settings();
@endphp
<div class="sticky">
    <div class="main-menu main-sidebar main-sidebar-sticky side-menu">
        <div class="main-sidebar-header main-container-1 active">
            <div class="sidemenu-logo">
                <a class="main-logo" href="{{ url('/') }}">
                    <img height="60px" src="{{ asset($settingData->logo ?? null) }}" class="header-brand-img desktop-logo"
                        alt="logo">
                    <img height="60px" src="{{ asset($settingData->fav_icon ?? null) }}"
                        class="header-brand-img icon-logo" alt="logo">
                    <img height="60px" src="{{ asset($settingData->fav_icon ?? null) }}"
                        class="header-brand-img desktop-logo theme-logo" alt="logo">
                    <img height="60px" src="{{ asset($settingData->fav_icon ?? null) }}"
                        class="header-brand-img icon-logo theme-logo" alt="logo">
                </a>
            </div>
            <div class="main-sidebar-body main-body-1">
                <div class="slide-left disabled" id="slide-left"><i class="fe fe-chevron-left"></i></div>
                <ul class="menu-nav nav">

                    <li class="nav-item">
                        <a class="nav-link with-sub" href="javascript:void(0);">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="ti-home sidemenu-icon menu-icon "></i>
                            <span class="sidemenu-label">Dashboard
                            </span>
                            <i class="angle fe fe-chevron-right"></i>
                        </a>
                        <ul class="nav-sub">
                            <li class="side-menu-label1"><a href="javascript:void(0);">Dashboard</a></li>

                            <li class="nav-sub-item"><a class="nav-sub-link"
                                    href="{{ url('admin/dashboard') }}">Dashboard</a>
                            </li>
                            <li class="nav-sub-item"><a class="nav-sub-link"
                                    href="{{ url('admin/contact-us') }}">Contact-us</a>
                            </li>
                            <li class="nav-sub-item"><a id="pageCreate" class="nav-sub-link"
                                    href="{{ url('admin/create-page') }}">Page</a>
                            </li>
                            <li class="nav-sub-item"><a id="pageCreate" class="nav-sub-link"
                                    href="{{ url('admin/offer-order') }}">Offer</a>
                            </li>
                            <li class="nav-sub-item"><a id="pageCreate" class="nav-sub-link"
                                    href="{{ url('admin/order') }}">Order</a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item" id="sidenavUl">
                        <a class="nav-link with-sub" href="javascript:void(0);">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="ti-layout sidemenu-icon menu-icon "></i>
                            <span class="sidemenu-label">Layout
                            </span>
                            <i class="angle fe fe-chevron-right"></i>
                        </a>
                        <ul class="nav-sub ">
                            <li class="side-menu-label1">
                                <a href="javascript:void(0);">Layout</a>
                            </li>
                            <li class="nav-sub-item"> <a class="nav-sub-link"
                                    href="{{ url('admin/slider') }}">Slider</a>
                            </li>

                            <li class="nav-sub-item"> <a class="nav-sub-link"
                                    href="{{ url('admin/categories') }}">Category</a>
                            </li>
                            <li class="nav-sub-item"> <a class="nav-sub-link"
                                    href="{{ url('admin/sub-category') }}">Sub Category</a>
                            </li>
                            <li class="nav-sub-item"> <a id="productLink" class="nav-sub-link "
                                    href="{{ url('admin/products') }}">Products</a>
                            </li>
                            <li class="nav-sub-item"> <a id="productLink" class="nav-sub-link "
                                    href="{{ url('admin/countries') }}">Countries</a>
                            </li>
                            <li class="nav-sub-item"> <a id="productLink" class="nav-sub-link "
                                    href="{{ url('admin/states') }}">States</a>
                            </li>
                            <li class="nav-sub-item"> <a id="productLink" class="nav-sub-link "
                                    href="{{ url('admin/city') }}">City</a>
                            </li>
                            <li class="nav-sub-item"><a class="nav-sub-link"
                                    href="{{ url('admin/setting') }}">Setting</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link with-sub" href="{{ url('admin/gallery') }}">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="ti-gallery sidemenu-icon"></i>
                            <span class="sidemenu-label">Gallery
                            </span>

                        </a>
                    </li>

                </ul>
                <div class="slide-right" id="slide-right"><i class="fe fe-chevron-right"></i></div>
            </div>
        </div>
    </div>
</div>
<!-- END SIDEBAR -->
