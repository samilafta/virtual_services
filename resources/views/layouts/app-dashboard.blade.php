<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/plugins/images/favicon.png') }}">
    <title>Admin - Dexcel Media Solutions</title>

    @yield('styles')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fix-header">
<!-- Wrapper -->
<!-- ============================================================== -->
<div id="wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header">
            <div class="top-left-part">
                <!-- Logo -->
                <a class="logo" href="#">
                    <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon--><img src="{{ asset('admin/plugins/images/admin-logo.png') }}" alt="home" class="dark-logo" /><!--This is light logo icon-->
                        <img src="{{ asset('admin/plugins/images/admin-logo-dark.png') }}" alt="home" class="light-logo" />
                    </b>
                    <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="{{ asset('admin/plugins/images/admin-text.png') }}" alt="home" class="dark-logo" />
                        <!--This is light logo text--><img src="{{ asset('admin/plugins/images/admin-text-dark.png') }}" alt="home" class="light-logo" />
                     </span> </a>
            </div>
            <!-- /Logo -->
            <!-- Search input and Toggle icon -->
            <ul class="nav navbar-top-links navbar-right pull-right">
                <li class="dropdown">
                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="javascript:void(0)"><b class="hidden-xs">{{ Auth::user()->name }}</b><span class="caret"></span> </a>
                    <ul class="dropdown-menu dropdown-user animated flipInY">
                        <li>
                            <div class="dw-user-box">
                                <div class="u-text">
                                    <h4>{{ Auth::user()->name }}</h4>
                                    <p class="text-muted">{{ Auth::user()->email }}</p></div>
                            </div>
                        </li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
    </nav>
    <!-- End Top Navigation -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav">
            <div class="sidebar-head">
                <h3><span class="fa-fw open-close"><i class="ti-menu hidden-xs"></i><i class="ti-close visible-xs"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
            <ul class="nav" id="side-menu">
                <li> <a href="{{ route('home') }}" class="waves-effect @yield('active-da')"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i>
                        <span class="hide-menu"> Dashboard <span class="fa arrow"></span> <span class="label label-rouded label-inverse pull-right">4</span></span></a>
                </li>
                <li> <a href="javascript:void(0)" class="waves-effect @yield('active-ca')"><i class="mdi mdi-content-copy fa-fw"></i>
                        <span class="hide-menu">Divisions<span class="fa arrow"></span><span class="label label-rouded label-warning pull-right">30</span></span></a>
                    <ul class="nav nav-second-level">
                        <li> <a href="{{ route('categories.create') }}"><span class="hide-menu">Add Division</span></a> </li>
                        <li> <a href="{{ route('categories.index') }}"><span class="hide-menu">Divisions List</span></a> </li>
                    </ul>
                </li>
                <li class="devider"></li>
                <li> <a href="javascript:void(0)" class="waves-effect @yield('active-pr')"><i class="mdi mdi-clipboard-text fa-fw"></i>
                        <span class="hide-menu">Products<span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level">
                        <li> <a href="{{ route('products.create') }}"><span class="hide-menu">Add Product</span></a> </li>
                        <li> <a href="{{ route('products.index') }}"><span class="hide-menu">Products List</span></a> </li>
                    </ul>
                </li>
                <li> <a href="{{ route('customers.index') }}" class="waves-effect @yield('active-cu')"><i class="mdi mdi-table fa-fw"></i>
                        <span class="hide-menu">Customers<span class="fa arrow"></span><span class="label label-rouded label-danger pull-right">9</span></span></a>
                </li>
                <li class="last-nav"><a href="javascript:void(0)" class="waves-effect @yield('active-ad')"><i class="mdi mdi-apps fa-fw"></i>
                        <span class="hide-menu">Administrators<span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level">
                        <li> <a href="{{ route('users.create') }}"><span class="hide-menu">Add Administrator</span></a> </li>
                        <li> <a href="{{ route('users.index') }}"><span class="hide-menu">Administrators List</span></a> </li>
                    </ul>
                </li>
                <li class="devider"></li>
                <li> <a href="{{ route('reports') }}" class="waves-effect @yield('active-re')"><i  class="mdi mdi-settings fa-fw"></i>
                        <span class="hide-menu">Reports</span></a> </li>
            </ul>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Left Sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page Content -->
    <!-- ============================================================== -->

    <div id="page-wrapper">
        <div class="container-fluid">

            @yield('dashboard-content')
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2019 &copy; Dexcel Media Solutions </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>


    @yield('scripts')
    <!-- /#wrapper -->
</div>
</body>

</html>