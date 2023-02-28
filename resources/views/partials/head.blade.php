<meta charset="utf-8"/>
<title>{{ config('app.name', 'Store') }} | {{ $title??'' }}</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
<!--begin::Web font -->
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
<script>
    WebFont.load({
        google: {"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]},
        active: function () {sessionStorage.fonts = true;}
    });
</script>
<!--end::Web font -->
<!--begin::Global Theme Styles -->
{{--<link href="{{ asset('theme/assets/vendors/base/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />--}}
<!--RTL version:<link href="{{ asset('theme/assets/vendors/base/vendors.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />-->
{{--<link href="{{ asset('theme/assets/demo/default/base/style.bundle.css') }}" rel="stylesheet" type="text/css" />--}}
<link href="{{ asset('theme/assets/vendors/base/vendors.bundle.rtl.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('theme/assets/demo/default/base/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css"/>
<!--RTL version:<link href="{{ asset('theme/assets/demo/default/base/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />-->
<!--begin::Page Vendors Styles -->
{{--<link href="{{ asset('theme/assets/vendors/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />--}}
<link href="{{ asset('theme/assets/vendors/custom/datatables/datatables.bundle.rtl.css') }}" rel="stylesheet"
      type="text/css"/>
<!--RTL version:<link href="{{ asset('theme/assets/vendors/custom/datatables/datatables.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />-->
<!--end::Global Theme Styles -->
<link rel="shortcut icon" href="{{ asset('theme/assets/demo/default/media/img/logo/favicon.ico') }}"/>