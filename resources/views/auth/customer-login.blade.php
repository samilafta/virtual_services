@extends('layouts.shop')

@section('title')
    Login
    @parent
@stop

@section('shop-content')


    <div class="page-head_agile_info_w3l page-head_agile_info_w3l-2">

    </div>
    <!-- .breadcumb-area start -->
    <div class="services-breadcrumb">
        <div class="agile_inner_breadcrumb">
            <div class="container">
                <ul class="w3_short">
                    <li>
                        <a href="{{ route('index') }}">Home</a>
                        <i>|</i>
                    </li>
                    <li>Login</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="ads-grid py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">
            <!-- tittle heading -->

            <!-- //tittle heading -->
            <div class="row">
                <!-- product left -->
                <div class="agileinfo-ads-display col-lg-12">
                    <div class="wrapper">
                        <!-- first section -->
                        <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
                            {{--<h3 class="heading-tittle text-center font-italic">New Brand Mobiles</h3>--}}
                            <div class="row">

                                <div class="col-lg-8">
                                    <form action="{{ route('customer.login') }}" method="post">

                                        @csrf
                                        <div class="form-group">
                                            <label class="col-form-label">Email</label>
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>                                        </div>
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif

                                        <div class="form-group">
                                            <label class="col-form-label">Password</label>
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="right-w3l">
                                            <input type="submit" class="form-control" value="Log in">
                                        </div>
                                        <div class="sub-w3l">
                                            <div class="custom-control custom-checkbox mr-sm-2">
                                                <input type="checkbox" name="remember" class="custom-control-input" id="customControlAutosizing">
                                                <label class="custom-control-label" for="customControlAutosizing">Remember me?</label>
                                            </div>
                                        </div>
                                        <p class="text-center dont-do mt-3">Don't have an account?
                                            <a href="{{ route('customer.register') }}">
                                                Register Now</a>
                                        </p>
                                    </form>
                                </div>


                            </div>
                        </div>
                        <!-- //first section -->
                        <!-- fourth section -->
                    </div>
                </div>
                <!-- //product left -->

                <!-- product right -->
            </div>
        </div>
    </div>



@endsection