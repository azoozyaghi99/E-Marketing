<!DOCTYPE html>

<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name', 'Store') }} | {{ __('Login') }}</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Web font -->

    <!--begin::Global Theme Styles -->
    <link href="{{ asset('theme/assets/vendors/base/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />

    <!--RTL version:<link href="{{ asset('theme/assets/vendors/base/vendors.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />-->
    <link href="{{ asset('theme/assets/demo/default/base/style.bundle.css') }}" rel="stylesheet" type="text/css" />

    <!--RTL version:<link href="{{ asset('theme/assets/demo/default/base/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />-->

    <!--end::Global Theme Styles -->
    <link rel="shortcut icon" href="{{ asset('theme/assets/demo/default/media/img/logo/favicon.ico') }}" />
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-3" id="m_login" style="background-image: url({{ asset('theme/assets/app/media/img//bg/bg-2.jpg') }});">
        <div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
            @yield('content')
        </div>
    </div>
</div>

<!-- end:: Page -->

<!--begin::Global Theme Bundle -->
<script src="{{ asset('theme/assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('theme/assets/demo/default/base/scripts.bundle.js') }}" type="text/javascript"></script>

<!--end::Global Theme Bundle -->

<!--begin::Page Scripts -->
<script src="{{ asset('theme/assets/snippets/custom/pages/user/login.js') }}" type="text/javascript"></script>

<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>