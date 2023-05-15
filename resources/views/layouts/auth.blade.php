<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="GeniusOcean">
    <!-- Title -->
    <title> @yield('title')</title>
    <!-- favicon -->
    <link rel="icon" type="image/x-icon"
        href="https://product.geniusocean.com/kingcommerce/kingcommerce/assets/images/1571567283favicon.png" />
    <!-- favicon -->
    <link rel="icon" type="image/x-icon"
        href="https://product.geniusocean.com/kingcommerce/kingcommerce/assets/images/1571567283favicon.png" />
    <!-- Bootstrap -->
    <link href="{{ asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Fontawesome -->
    <link href="{{ asset('assets/admin/css/fontawesome.css') }}" rel="stylesheet" type="text/css" />
    <!-- icofont -->
    <link href="{{ asset('assets/admin/css/icofont.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Sidemenu Css -->
    <link href="{{ asset('assets/admin/plugins/fullside-menu/css/dark-side-style.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/admin/plugins/fullside-menu/waves.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/admin/css/plugin.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/css/jquery.tagit.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/css/bootstrap-coloroicker.css') }}" rel="stylesheet" type="text/css" />
    <!-- Main Css -->
    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/css/custom.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/css/responsive.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Login and Sign up Area Start -->
    <section class="login-signup">

        @yield('content')
       
    </section>
    <!--Login and Sign up Area End -->

    <script type="text/javascript">
        var mainurl = "https://product.geniusocean.com/kingcommerce/kingcommerce";
        var admin_loader = 1;
        var whole_sell = 6;
        var getattrUrl = 'https://product.geniusocean.com/kingcommerce/kingcommerce/admin/getattributes';
        var curr = {
            "id": 1,
            "name": "USD",
            "sign": "$",
            "value": "1",
            "is_default": "1"
        };
        var admin = 0;
        // console.log(curr);
    </script>

    <!-- Dashboard Core -->
    <script src="{{ asset('assets/admin/js/vendors/jquery-1.12.4.min.js') }}"></script>

    <script src="{{ asset('assets/admin/js/vendors/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/admin/js/jqueryui.min.js') }}"></script>
    <!-- Fullside-menu Js-->
    <script src="{{ asset('assets/admin/plugins/fullside-menu/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/fullside-menu/waves.min.js') }}"></script>

    <script src="{{ asset('assets/admin/js/plugin.js') }}"></script>
    <script src="{{ asset('assets/admin/js/tag-it.js') }}"></script>
    <script src="{{ asset('assets/admin/js/nicEdit.js') }}"></script>
    <script src="{{ asset('assets/admin/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/load.js') }}"></script>
    <!-- Custom Js-->
    <script src="{{ asset('assets/admin/js/custom.js') }}"></script>
    <!-- AJAX Js-->
    <script src="{{ asset('assets/admin/js/myscript.js') }}"></script>

</body>

</html>
