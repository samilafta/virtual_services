<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Kodinger">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin Login | Virtual Services</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/login/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/login/css/my-login.css') }}">
</head>

<body class="my-login-page">
<section class="h-100">
    <div class="container h-100">
        <div class="row justify-content-md-center h-100">
            <div class="card-wrapper">
                <div class="brand">
                    <img src="{{ asset('shop/assets/images/virtual.png') }}" alt="logo">
                </div>
                <div class="card fat">
                    <div class="card-body">
                        <h4 class="card-title">Login</h4>
                        <form method="POST" class="my-login-validation" novalidate="" action="{{ route('login') }}">

                            @csrf

                            <div class="form-group">
                                <label for="email">E-Mail Address</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                <div class="invalid-feedback">
                                    Email is invalid
                                </div>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="password">Password
                                    {{--<a href="#" class="float-right">--}}
                                    {{--Forgot Password?--}}
                                    {{--</a>--}}
                                </label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required data-eye>
                                <div class="invalid-feedback">
                                    Password is required
                                </div>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <div class="custom-checkbox custom-control">
                                    <input type="checkbox" name="remember" id="remember" class="custom-control-input" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember" class="custom-control-label">Remember Me</label>
                                </div>
                            </div>

                            <div class="form-group m-0">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Login
                                </button>
                            </div>
                            {{--<div class="mt-4 text-center">--}}
                            {{--Don't have an account? <a href="register.html">Create One</a>--}}
                            {{--</div>--}}
                        </form>
                    </div>
                </div>
                <div class="footer">
                    Copyright &copy; 2019 &mdash; <a href="{{ route('index') }}">Virtual Services</a>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{ asset('admin/login/js/jquery.min.js') }}"></script>
<script src="{{ asset('admin/login/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/login/js/my-login.js') }}"></script>
</body>
</html>
