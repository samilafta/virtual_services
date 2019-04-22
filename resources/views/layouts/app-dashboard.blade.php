<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admin/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('admin/assets/img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | Virtual Services</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{ asset('admin/assets/css/animate.min.css') }}" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="{{ asset('admin/assets/css/paper-dashboard.css') }}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('admin/assets/css/demo.css') }}" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('admin/assets/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/skeleton.min.css') }}" rel="stylesheet">


</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

        <!--
            Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
            Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
        -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('shop/assets/images/virtual.png') }}" width="200px" />
                </a>
            </div>

            <ul class="nav">
                <li class="@yield('active-da')">
                    <a href="{{ route('home') }}">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="@yield('active-or')">
                    <a href="{{ route('orders.index') }}">
                        <i class="ti-user"></i>
                        <p>Orders</p>
                    </a>
                </li>
                <li class="@yield('active-ca')">
                    <a href="{{ route('categories.index') }}">
                        <i class="ti-user"></i>
                        <p>Categories</p>
                    </a>
                </li>
                <li class="@yield('active-pr')">
                    <a href="{{ route('products.index') }}">
                        <i class="ti-view-list-alt"></i>
                        <p>Products</p>
                    </a>
                </li>
                <li class="@yield('active-cu')">
                    <a href="{{ route('customers.index') }}">
                        <i class="ti-text"></i>
                        <p>Customers</p>
                    </a>
                </li>
                <li class="@yield('active-us')">
                    <a href="{{ route('users.index') }}">
                        <i class="ti-pencil-alt2"></i>
                        <p>Users</p>
                    </a>
                </li>
                <li class="@yield('active-re')">
                    <a href="{{ route('reports') }}">
                        <i class="ti-map"></i>
                        <p>Reports</p>
                    </a>
                </li>

                <li class="active-pro">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        <i class="ti-export"></i>
                        <p>Log Out</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">@yield('page')</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-user"></i>
                                @auth
                                    <p>{{ Auth::user()->name }}</p>
                                @endauth
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">

                @yield('dashboard-content')

            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="#">Virtual Services</a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>

<!--   Core JS Files   -->
<script src="{{ asset('admin/assets/js/jquery-1.10.2.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/js/moment.min.js') }}" type="text/javascript"></script>

<script src="{{ asset('admin/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="{{ asset('admin/assets/js/bootstrap-checkbox-radio.js') }}"></script>

<!--  Charts Plugin -->
<script src="{{ asset('admin/assets/js/chartist.min.js') }}"></script>

<!--  Notifications Plugin    -->
<script src="{{ asset('admin/assets/js/bootstrap-notify.js') }}"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="{{ asset('admin/assets/js/paper-dashboard.js') }}"></script>

<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('admin/assets/js/demo.js') }}"></script>
<script src="{{ asset('admin/assets/js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/printThis.js') }}"></script>

<script type="text/javascript">

    $("#datetime3, #datetime4").datetimepicker({
        format: 'YYYY-MM-DD HH:mm:ss'
    }).parent().css("position :relative");

    $('#print').on("click", function () {
        $('#receipt').printThis({
            base: "https://jasonday.github.io/printThis/"
        });
    });

</script>

{{--<script type="text/javascript">--}}
    {{--$(document).ready(function(){--}}

        {{--demo.initChartist();--}}

        {{--$.notify({--}}
            {{--icon: 'ti-gift',--}}
            {{--message: "Welcome to <b>Virtual Services</b> Dashboard."--}}

        {{--},{--}}
            {{--type: 'success',--}}
            {{--timer: 4000--}}
        {{--});--}}

    {{--});--}}
{{--</script>--}}

</html>
