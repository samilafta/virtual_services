@extends('layouts.shop')

@section('title')
    Register
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
                    <li>Register</li>
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

                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success alert-block text-center">
                                            {{--<button type="button" class="close" data-dismiss="alert">×</button>--}}
                                            <strong>{{ $message }}</strong>
                                            <a href="{{ route('auth.customer.login') }}"> Please Login</a>
                                        </div>
                                    @endif

                                        @if (session()->has('error_message'))
                                            <div class="alert alert-danger">
                                                {{ session()->get('error_message') }}
                                            </div>
                                        @endif

                                        <form action="{{ route('customer.create') }}" method="post">

                                            @csrf
                                            <div class="form-group">
                                                <label class="col-form-label">First Name*</label>
                                                <input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" required>
                                                @if ($errors->has('firstname'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label">Last Name*</label>
                                                <input id="firstname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required>
                                                @if ($errors->has('lastname'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label">Email*</label>
                                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label">Phone Number*</label>
                                                <input id="name" type="text" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" value="{{ old('phone_number') }}" required>

                                                @if ($errors->has('phone_number'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label">Password*</label>
                                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label">Confirm Password*</label>
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                            </div>
                                            <div class="right-w3l">
                                                <input type="submit" class="form-control" value="Register">
                                            </div>

                                        </form>

                                        <div class="text-center">
                                            <a href="{{route('auth.customer.login')}}">Or Login</a>
                                        </div>

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