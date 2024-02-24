@php
    $setting = settings();
@endphp

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">

    <link rel="shortcut icon" href="{{ $setting->fav_icon ?? null }}" type="image/x-icon">

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('backend') }}/build/assets/plugins/bootstrap/css/bootstrap.min.css"
        rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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



    <title>Sirro Store</title>
</head>

<body class="ltr main-body leftmenu">

    <!-- PAGE -->
    <div class="page">
        @include('Backend.layouts.header')
        @include('Backend.layouts.sidebar')
        <div class="main-content side-content pt-0">
            <div class="main-container container-fluid">
                <div class="inner-body">
                    @yield('content')

                </div>
            </div>
        </div>
        <!-- END MAIN-CONTENT -->
    </div>
    @include('Backend.layouts.script')

    <!-- Central Modal Medium Info -->
    <div class="modal fade add_model" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"></div>
    <!-- add manage  financial-->

    <!-- Central Modal Medium Info -->
    <div class="modal fade edit_model" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"></div>
    <!-- add manage  financial-->

    <!-- Central Modal Medium Info -->
    <div class="modal fade view_model" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"></div>
  
</body>

</html>
