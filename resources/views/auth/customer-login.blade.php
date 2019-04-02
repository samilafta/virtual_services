@extends('layouts.shop')

@section('title')
    Login
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
                            <li><a href="index.html">Home</a></li>
                            <li><span>Login</span></li>
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
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <div class="account-form form-style">
                        <form action="{{ route('customer.login') }}" method="post">

                            @csrf

                            <p>Email Address *</p>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            {{--<div class="invalid-feedback">--}}
                                {{--Email is invalid--}}
                            {{--</div>--}}
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif

                            <p>Password *</p>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required data-eye>
                            {{--<div class="invalid-feedback">--}}
                                {{--Password is required--}}
                            {{--</div>--}}
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="password">Remember Me</label>
                                </div>
                            </div>
                            <button type="submit">SIGN IN</button>


                        </form>
                        <div class="text-center">
                            <a href="{{ route('customer.register') }}">Or Create an Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- checkout-area end -->


@endsection