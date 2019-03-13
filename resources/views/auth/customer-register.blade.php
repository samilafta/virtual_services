@extends('layouts.shop')

@section('title')
    Register
    @parent
@stop

@section('shop-content')


    <!-- .breadcumb-area start -->
    <div class="breadcumb-area bg-img-4 ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-wrap text-center">
                        <h2>Account</h2>
                        <ul>
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li><span>Register</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .breadcumb-area end -->
    <!-- checkout-area start -->
    <div class="account-area ptb-100">
        <div class="container">

            {{--<div class="row">--}}
                {{--@if ($message = Session::get('success'))--}}
                    {{--<div class="alert alert-success alert-block">--}}
                        {{--<button type="button" class="close" data-dismiss="alert">×</button>--}}
                        {{--<strong>{{ $message }}</strong>--}}
                        {{--<a href="{{ route('auth.customer.login') }}"> Please Login</a>--}}
                    {{--</div>--}}
                {{--@endif--}}
            {{--</div>--}}
            <div class="row">

                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <div class="account-form form-style">

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block text-center">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                                <a href="{{ route('auth.customer.login') }}"> Please Login</a>
                            </div>
                        @endif

                        <form action="{{ route('customer.create') }}" method="post">

                            @csrf

                            <p>Full Name *</p>
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif

                            <p>Email Address *</p>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif

                            <p>Phone Number *</p>
                            <input id="name" type="text" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" value="{{ old('phone_number') }}" required>

                            @if ($errors->has('phone_number'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                            @endif

                            <p>Password *</p>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif

                            <p>Confirm Password *</p>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>


                            <button type="submit">Register</button>

                        </form>


                        <div class="text-center">
                            <a href="{{route('auth.customer.login')}}">Or Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- checkout-area end -->


@endsection