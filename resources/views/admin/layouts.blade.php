<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="{{ url('/') }}" name="_base_url">
    <link rel="shortcut icon" href="{{ setting('favicon', upload_url('70x70no-thumbnail.png')) }}" type="image/x-icon">
    <link rel="icon" href="{{ setting('favicon', upload_url('70x70no-thumbnail.png')) }}" type="image/x-icon">
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
            'baseUrl'   =>  url('/'),
        ]); ?>
    </script>
    <title>{{ setting('website-name') }}</title>

    <!-- Bootstrap -->
    <link href="{{ asset('assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets/admin/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('assets/admin/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    @yield('css-finally')

    <!-- Custom Theme Style -->
    <link href="{{ asset('assets/admin/build/css/custom.min.css') }}" rel="stylesheet">

    @yield('css')
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="{{ asset('assets/admin/images/user.png')}}"
                                class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Xin ch??o,</span>
                            <h2>{{ auth()->user()->name }}</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>Qu???n l?? ch??nh</h3>
                            <ul class="nav side-menu">
                                <li><a href="{{ route('admin.index') }}"><i class="fa fa-home"></i> Home</a></li>
                                <li><a href="{{ route('admin.menu.index') }}"><i class="fa fa-sitemap"></i> Menu </a></li>
                                <li><a><i class="fa fa-newspaper-o"></i> Qu???n l?? b??i vi???t <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ route('admin.news.index') }}">B??i vi???t</a></li>
                                        <li><a href="{{ route('admin.category.index') }}">Danh m???c</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-video-camera"></i> Qu???n l?? video <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ route('admin.video.index')}}">Video</a></li>
                                        <li><a href="{{ route('admin.category.video.index') }}">Danh m???c</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-users"></i> Qu???n l?? ng?????i d??ng <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ route('admin.user.index') }}">T???t c??? ng?????i d??ng</a></li>
                                        <li><a href="{{ route('admin.role.index') }}">Quy???n qu???n tr???</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="menu_section">
                            <h3>C??i ?????t</h3>
                            <ul class="nav side-menu">
                                <li><a href="{{ route('admin.setting.general') }}"><i class="fa fa-cog"></i> C??i ?????t chung </a> </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="{{ asset('assets/admin/images/user.png')}}" alt="">{{ auth()->user()->name
                                    }}
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out pull-right"></i> ????ng xu???t</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                @yield('content')
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Copyright &copy; 2022 - {{ date('Y') }} B???n quy???n thu???c <a href="{{ route('index') }}" target="_blank">{{ setting('website-name') }}</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('assets/admin/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/admin/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('assets/admin/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('assets/admin/vendors/nprogress/nprogress.js') }}"></script>

    @yield('js-finally')

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('assets/admin/build/js/custom.js') }}"></script>


    <!-- Custom js -->

    <script type="text/javascript" src="{{ asset('assets/admin/global/plugins/jquery.blockui.min.js')}} "></script>
    <script type="text/javascript" src="{{ asset('assets/admin/global/scripts/app.min.js')}} "></script>
    <script type="text/javascript" src="{{ asset('assets/admin/global/scripts/handle.js')}} "></script>


    @yield('js')
    @yield('js1')
    @yield('js2')
</body>

</html>