@extends('layouts.shop')

@section('title')
    Checkout
    @parent
@stop

@section('shop-content')

    <!-- .breadcumb-area start -->
    <div class="breadcumb-area bg-img-4 ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-wrap text-center">
                        <h2>Checkout</h2>
                        <ul>
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li><span>Checkout</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .breadcumb-area end -->
    <!-- checkout-area start -->
    <form class="checkout-area ptb-100" action="{{ route('shop.checkout.order')}}" method="post">
        <div class="container">
            <div class="row">
                {{--<form action="">--}}

                    @csrf

                    <div class="col-lg-8">
                        <div class="checkout-form form-style">
                            <h3>Billing Details</h3>

                                @if (session()->has('success_message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success_message') }}
                                    </div>
                                @endif

                                @if (session()->has('error_message'))
                                    <div class="alert alert-danger">
                                        {{ session()->get('error_message') }}
                                    </div>
                                @endif

                                <div class="row">
                                    <div class="col-sm-12 col-12">
                                        <p>Full Name *</p>
                                        <input type="text" name="f_name" value="{{ Auth::guard('customer')->user()->name }}" disabled="disabled">
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <p>Email Address *</p>
                                        <input type="email" name="email" value="{{ Auth::guard('customer')->user()->email }}" disabled="disabled">
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <p>Phone No. *</p>
                                        <input type="text" name="phone_number" value="{{ Auth::guard('customer')->user()->phone_number }}" disabled="disabled">
                                    </div>
                                    <div class="col-12">
                                        <p>Your Address *</p>
                                        <input type="text" name="address" required>
                                        @if ($errors->has('address'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('address') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-12">
                                        <p>Order Notes </p>
                                        <textarea name="message" placeholder="Notes about Your Order, e.g.Special Note for Delivery"></textarea>
                                    </div>
                                </div>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="order-area">
                            <h3>Your Order</h3>
                            <ul class="total-cost">
                                @foreach (Cart::instance(Session::get('cart_instance'))->content() as $item)
                                <li>{{ $item->model->name }} <span class="pull-right">GHS {{ $item->model->price }}</span></li>

                                @endforeach
                                <li>Subtotal <span class="pull-right"><strong>GHS {{ Cart::instance(Session::get('cart_instance'))->subtotal() }}</strong></span></li>
                                <li>Shipping <span class="pull-right">Free</span></li>
                                <li>Total<span class="pull-right">GHS {{ Cart::instance(Session::get('cart_instance'))->subtotal() }}</span></li>
                            </ul>
                            <ul class="payment-method">
                                <li>
                                    <label><strong>Choose Payment Method:</strong></label><br/>
                                    <input type="radio" name="p_method" value="cash"/> Cash on Delivery<br>
                                    <input type="radio" name="p_method" value="momo"/> Mobile Money<br>
                                    <small class="text-primary">Send payment to 0547576916, use the order code as reference.</small>
                                    {{--<input id="delivery" type="checkbox" checked disabled="true">--}}
                                    {{--<label for="delivery">Cash on Delivery</label>--}}
                                </li>
                            </ul>

                            <input type="hidden" value="{{ Auth::guard('customer')->user()->id }}" name="customer_id" />
                            <input type="hidden" value="{{ Cart::instance(Session::get('cart_instance'))->subtotal() }}" name="total_amount" />
                            {{--<input type="hidden" name="lat" id="txtlat" required value="">--}}
                            {{--<input type="hidden" name="long" id="txtlang" required value="">--}}

                            <button type="submit">Place Order</button>

                        </div>
                    </div>
                {{--</form>--}}
            </div>
        </div>
    </form>
    <!-- checkout-area end -->

@endsection

