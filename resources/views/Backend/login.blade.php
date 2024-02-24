@php
    $settingData = settings();
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="">

    <!-- TITLE -->
    <title>Sirro Store</title>


    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('backend') }}/build/assets/plugins/bootstrap/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- ICONS CSS -->
    <link href="{{ asset('backend') }}/build/assets/plugins/web-fonts/icons.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/build/assets/plugins/web-fonts/font-awesome/font-awesome.min.css"
        rel="stylesheet">
    <link href="{{ asset('backend') }}/build/assets/plugins/web-fonts/plugin.css" rel="stylesheet">

    <!-- APP SCSS -->
    <link rel="preload" as="style" href="{{ asset('backend') }}/build/assets/app-0baec870.css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/build/assets/app-0baec870.css" />

    <!-- APP CSS -->
    <link rel="preload" as="style" href="{{ asset('backend') }}/build/assets/app-e6039df9.css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/build/assets/app-e6039df9.css" />
</head>

<body class="ltr main-body leftmenu error-1">
    <!-- LOADER -->
    <div id="global-loader">
        <img src="{{ asset('backend') }}/build/assets/img/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- END LOADER -->

    <!-- MAIN-CONTENT -->



    <!-- Page -->
    <div class="page main-signin-wrapper">


        <!-- Row -->
        <div class="row text-center">
            <div class="col-md-12">
                <div class="card" style="width: 100%;">
                    <div class="row row-sm">
                        <div style="height: 100vh;display: flex !important;
                        align-content: center;
                        justify-content: center;
                        align-items: center;"
                            class="col-lg-7 col-xl-7 d-none d-lg-block  bg-primary details">
                            <div class="">
                                <img width="60px" height="80px" src="{{ asset($settingData->logo ?? null) }}" class="header-brand-img mb-4"
                                    alt="logo">
                                <div class="clearfix"></div>
                            


                                <div><h3>Login Admin</h3></div>
                            </div>
                        </div>
                        <div style="height: 100vh;"
                            class="col-lg-5 col-xl-5 col-xs-12 col-sm-12 login_form d-flex justify-content-center text-align-center align-items-center">
                            <div class="main-container container-fluid" style="width: 100%;">
                                <div class="row row-sm">
                                    <div class="card-body mt-2 mb-2">
                                        
                                        <div class="clearfix"></div>
                                        <form class="submitForm" action="{{ url('admin-auth') }}" method="post">
                                            @csrf

                                            <div class="form-group text-start">
                                                <label>Email</label>
                                                <input name="email" class="form-control"
                                                    placeholder="Enter your email" type="text">
                                            </div>
                                            <div class="form-group text-start">
                                                <label>Password</label>
                                                <input name="password" class="form-control"
                                                    placeholder="Enter your password" type="password">
                                            </div>
                                            <button class="btn btn-main-primary btn-block text-white">Sign In</button>
                                        </form>
                                        <div class="text-start mt-5 ms-0">
                                            <div class="mb-1"><a href="">Forgot
                                                    password?</a></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->

    </div>
    <!-- End Page -->

    <!-- END MAIN-CONTENT -->

    <!-- SCRIPTS -->

    <!-- JQUERY JS -->
    <script src="{{ asset('backend') }}/build/assets/plugins/jquery/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('backend') }}/build/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="{{ asset('backend') }}/build/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- PERFECT-SCROLLBAR JS -->
    <script src="{{ asset('backend') }}/build/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <!-- SELECT2 JS -->
    <script src="{{ asset('backend') }}/build/assets/plugins/select2/js/select2.min.js"></script>
    <link rel="modulepreload" href="{{ asset('backend') }}/build/assets/select2-278046b4.js" />
    <script type="module" src="{{ asset('backend') }}/build/assets/select2-278046b4.js"></script>


    <!-- THEMECOLORs JS -->
    <link rel="modulepreload" href="{{ asset('backend') }}/build/assets/themeColors-67cffede.js" />
    <link rel="modulepreload" href="{{ asset('backend') }}/build/assets/apexcharts.common-ba7e62a5.js" />
    <script type="module" src="{{ asset('backend') }}/build/assets/themeColors-67cffede.js"></script>

    <!-- APP JS -->
    <link rel="modulepreload" href="{{ asset('backend') }}/build/assets/app-53348e21.js" />
    <script type="module" src="{{ asset('backend') }}/build/assets/app-53348e21.js"></script>

    <!-- SWITCHER JS -->
    <link rel="modulepreload" href="{{ asset('backend') }}/build/assets/switcher-4de6c754.js" />
    <script type="module" src="{{ asset('backend') }}/build/assets/switcher-4de6c754.js"></script>
    <script src="{{ asset('ajaxform.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />

    <!-- END SCRIPTS -->
</body>

</html>
