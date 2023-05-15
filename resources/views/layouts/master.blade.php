<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="GeniusOcean">
    <meta name="csrf-token" content="2W4xUVyrplaARuL1JoaqC1IjiyENjftWpz39gVja">
    <!-- Title -->
     <title> @yield('title') </title>
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css">
    <!-- Main Css -->

    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/css/custom.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/css/responsive.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/css/common.css') }}" rel="stylesheet" type="text/css" />


</head>

<body>
    <div class="page">
        <div class="page-main">
            <!-- Header Menu Area Start -->
            <div class="header">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between">
                        <div class="menu-toggle-button">
                            <a class="nav-link" href="javascript:;" id="sidebarCollapse">
                                <div class="my-toggl-icon">
                                    <span class="bar1"></span>
                                    <span class="bar2"></span>
                                    <span class="bar3"></span>
                                </div>
                            </a>
                        </div>

                        <div class="right-eliment">
                            <ul class="list">

                                <li class="bell-area">
                                    <a id="notf_conv" class="dropdown-toggle-1" target="_blank"
                                        href="https://product.geniusocean.com/kingcommerce/kingcommerce">
                                        <i class="fas fa-globe-americas"></i>
                                    </a>

                                </li>


                                <li class="bell-area">
                                    <a id="notf_conv" class="dropdown-toggle-1" href="javascript:;">
                                        <i class="far fa-envelope"></i>
                                        <span
                                            data-href="https://product.geniusocean.com/kingcommerce/kingcommerce/admin/conv/notf/count"
                                            id="conv-notf-count">0</span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="dropdownmenu-wrapper"
                                            data-href="https://product.geniusocean.com/kingcommerce/kingcommerce/admin/conv/notf/show"
                                            id="conv-notf-show">
                                        </div>
                                    </div>
                                </li>

                                <li class="bell-area">
                                    <a id="notf_product" class="dropdown-toggle-1" href="javascript:;">
                                        <i class="icofont-cart"></i>
                                        <span
                                            data-href="https://product.geniusocean.com/kingcommerce/kingcommerce/admin/product/notf/count"
                                            id="product-notf-count">0</span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="dropdownmenu-wrapper"
                                            data-href="https://product.geniusocean.com/kingcommerce/kingcommerce/admin/product/notf/show"
                                            id="product-notf-show">
                                        </div>
                                    </div>
                                </li>

                                <li class="bell-area">
                                    <a id="notf_user" class="dropdown-toggle-1" href="javascript:;">
                                        <i class="far fa-user"></i>
                                        <span
                                            data-href="https://product.geniusocean.com/kingcommerce/kingcommerce/admin/user/notf/count"
                                            id="user-notf-count">0</span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="dropdownmenu-wrapper"
                                            data-href="https://product.geniusocean.com/kingcommerce/kingcommerce/admin/user/notf/show"
                                            id="user-notf-show">
                                        </div>
                                    </div>
                                </li>

                                <li class="bell-area">
                                    <a id="notf_order" class="dropdown-toggle-1" href="javascript:;">
                                        <i class="far fa-newspaper"></i>
                                        <span
                                            data-href="https://product.geniusocean.com/kingcommerce/kingcommerce/admin/order/notf/count"
                                            id="order-notf-count">0</span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="dropdownmenu-wrapper"
                                            data-href="https://product.geniusocean.com/kingcommerce/kingcommerce/admin/order/notf/show"
                                            id="order-notf-show">
                                        </div>
                                    </div>
                                </li>

                                <li class="login-profile-area">
                                    <a class="dropdown-toggle-1" href="javascript:;">
                                        <div class="user-img">
                                            <img src="https://product.geniusocean.com/kingcommerce/kingcommerce/assets/images/admins/1556780563user.png"
                                                alt="">
                                        </div>
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="dropdownmenu-wrapper">
                                            <ul>
                                                <h5>Welcome!</h5>
                                                <li>
                                                    <a
                                                        href="https://product.geniusocean.com/kingcommerce/kingcommerce/admin/profile"><i
                                                            class="fas fa-user"></i> Edit Profile</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="https://product.geniusocean.com/kingcommerce/kingcommerce/admin/password"><i
                                                            class="fas fa-cog"></i> Change Password</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="https://product.geniusocean.com/kingcommerce/kingcommerce/admin/logout"><i
                                                            class="fas fa-power-off"></i> Logout</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Menu Area End -->
            <div class="wrapper">
                <!-- Side Menu Area Start -->
                @include('left_side.sidebar')
                <!-- Main Content Area Start -->

                <input type="hidden" id="headerdata" value="PRODUCT">
                
                <div class="content-area" id="modalEdit">
                    @yield('content')
                </div>
            </div>


            <!-- Dashboard Core -->
            <script src="{{ asset('assets/admin/js/vendors/jquery-1.12.4.min.js') }}"></script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
            <script src="{{ asset('assets/admin/js/vendors/vue.js') }}"></script>
            <script src="{{ asset('assets/admin/js/vendors/bootstrap.min.js') }}"></script>

            <script src="{{ asset('assets/admin/js/jqueryui.min.js') }}"></script>
            <!-- Fullside-menu Js-->
            <script src="{{ asset('assets/admin/plugins/fullside-menu/jquery.slimscroll.min.js') }}"></script>

            <script src="{{ asset('assets/admin/plugins/fullside-menu/waves.min.js') }}"></script>
            <script src="{{ asset('assets/admin/plugins/fullside-menu/waves.min.js') }}"></script>

            <script src="{{ asset('assets/admin/js/Chart.min.js') }}"></script>
            <script src="{{ asset('assets/admin/js/tag-it.js') }}"></script>
            <script src="{{ asset('assets/admin/js/nicEdit.js') }}"></script>
            <script src="{{ asset('assets/admin/js/bootstrap-colorpicker.min.js') }}"></script>
            <script src="{{ asset('assets/admin/js/notify.js') }}"></script>
            <script src="{{ asset('assets/admin/js/jquery.canvasjs.min.js') }}"></script>
            <script src="{{ asset('assets/admin/js/load.js') }}"></script>
            <!-- Custom Js-->
            <script src="{{ asset('assets/admin/js/custom.js') }}"></script>
            <!-- AJAX Js-->
            <script src="{{ asset('assets/admin/js/myscript.js') }}"></script>







            <script type="text/javascript">
                var table = $('#geniustable').DataTable({
            ordering: false,
            processing: true,
            serverSide: true,
            ajax: 'https://product.geniusocean.com/kingcommerce/kingcommerce/admin/products/datatables',
            columns: [{
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'type',
                    name: 'type'
                },
                {
                    data: 'stock',
                    name: 'stock'
                },
                {
                    data: 'price',
                    name: 'price'
                },
                {
                    data: 'status',
                    searchable: false,
                    orderable: false
                },
                {
                    data: 'action',
                    searchable: false,
                    orderable: false
                }

            ],
            language: {
                processing: '<img src="https://product.geniusocean.com/kingcommerce/kingcommerce/assets/images/1564224329loading3.gif">'
            },
            drawCallback: function(settings) {
                $('.select').niceSelect();
            }
        });

        $(function() {
            $(".btn-area").append('<div class="col-sm-4 table-contents">' +
                '<a class="add-btn" href="https://product.geniusocean.com/kingcommerce/kingcommerce/admin/products/types">' +
                '<i class="fas fa-plus"></i> <span class="remove-mobile">Add New Product<span>' +
                '</a>' +
                '</div>');
        });
            </script>


            <script type="text/javascript">
                // Gallery Section Update

        $(document).on("click", ".set-gallery", function() {
            var pid = $(this).find('input[type=hidden]').val();
            $('#pid').val(pid);
            $('.selected-image .row').html('');
            $.ajax({
                type: "GET",
                url: "https://product.geniusocean.com/kingcommerce/kingcommerce/admin/gallery/show",
                data: {
                    id: pid
                },
                success: function(data) {
                    if (data[0] == 0) {
                        $('.selected-image .row').addClass('justify-content-center');
                        $('.selected-image .row').html('<h3>No Images Found.</h3>');
                    } else {
                        $('.selected-image .row').removeClass('justify-content-center');
                        $('.selected-image .row h3').remove();
                        var arr = $.map(data[1], function(el) {
                            return el
                        });

                        for (var k in arr) {
                            $('.selected-image .row').append('<div class="col-sm-6">' +
                                '<div class="img gallery-img">' +
                                '<span class="remove-img"><i class="fas fa-times"></i>' +
                                '<input type="hidden" value="' + arr[k]['id'] + '">' +
                                '</span>' +
                                '<a href="' +
                                'https://product.geniusocean.com/kingcommerce/kingcommerce/assets/images/galleries/' +
                                arr[k]['photo'] + '" target="_blank">' +
                                '<img src="' +
                                'https://product.geniusocean.com/kingcommerce/kingcommerce/assets/images/galleries/' +
                                arr[k]['photo'] + '" alt="gallery image">' +
                                '</a>' +
                                '</div>' +
                                '</div>');
                        }
                    }

                }
            });
        });


        $(document).on('click', '.remove-img', function() {
            $.notify("This function is not available in demo version.", "error");
        });

        $(document).on('click', '#prod_gallery', function() {
            $('#uploadgallery').click();
        });


        $("#uploadgallery").change(function() {
            $.notify("This function is not available in demo version.", "error");
        });

        $(document).on('submit', '#form-gallery', function() {
            $.ajax({
                url: "https://product.geniusocean.com/kingcommerce/kingcommerce/admin/gallery/store",
                method: "POST",
                data: new FormData(this),
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    if (data != 0) {
                        $('.selected-image .row').removeClass('justify-content-center');
                        $('.selected-image .row h3').remove();
                        var arr = $.map(data, function(el) {
                            return el
                        });
                        for (var k in arr) {
                            $('.selected-image .row').append('<div class="col-sm-6">' +
                                '<div class="img gallery-img">' +
                                '<span class="remove-img"><i class="fas fa-times"></i>' +
                                '<input type="hidden" value="' + arr[k]['id'] + '">' +
                                '</span>' +
                                '<a href="' +
                                'https://product.geniusocean.com/kingcommerce/kingcommerce/assets/images/galleries/' +
                                arr[k]['photo'] + '" target="_blank">' +
                                '<img src="' +
                                'https://product.geniusocean.com/kingcommerce/kingcommerce/assets/images/galleries/' +
                                arr[k]['photo'] + '" alt="gallery image">' +
                                '</a>' +
                                '</div>' +
                                '</div>');
                        }
                    }

                }

            });
            return false;
        });


        // Gallery Section Update Ends	
            </script>

</body>

</html>