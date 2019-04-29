@extends('layouts.shop')

@section('title')
    Checkout
    @parent
@stop

@section('shop-content')

    <div class="page-head_agile_info_w3l">

    </div>

    <div class="services-breadcrumb">
        <div class="agile_inner_breadcrumb">
            <div class="container">
                <ul class="w3_short">
                    <li>
                        <a href="{{ route('index') }}">Home</a>
                        <i>|</i>
                    </li>
                    <li>Checkout</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- .breadcumb-area end -->
    <!-- checkout-area start -->

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
                            <form class="checkout-area ptb-100" action="{{ route('shop.checkout.order')}}" method="post">
                                <div class="container">
                                    <div class="row">
                                        {{--<form action="">--}}

                                        @csrf

                                        <div class="col-lg-8">
                                            <div class="checkout-form form-style">
                                                <h3>Billing Details</h3>

                                                <br/>
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
                                                    <div class="col-sm-12 col-12" style="margin-bottom: 10px;">
                                                        <label>Full Name *</label>
                                                        <input type="text" name="f_name" class="form-control" value="{{ Auth::guard('customer')->user()->firstname }} {{ Auth::guard('customer')->user()->lastname }}"
                                                               disabled="disabled">
                                                    </div>
                                                    <br>
                                                    <div class="col-sm-6 col-12" style="margin-bottom: 10px;">
                                                        <label>Email Address *</label>
                                                        <input type="email" name="email" class="form-control" value="{{ Auth::guard('customer')->user()->email }}" disabled="disabled">
                                                    </div>
                                                    <br/>
                                                    <div class="col-sm-6 col-12" style="margin-bottom: 10px;">
                                                        <label>Phone No. *</label>
                                                        <input type="text" name="phone_number" class="form-control" value="{{ Auth::guard('customer')->user()->phone_number }}" disabled="disabled">
                                                    </div>
                                                    <br/>
                                                    <div class="col-12" style="margin-bottom: 10px;">
                                                        <label>Your Address *</label>
                                                        <input type="text" name="address" class="form-control" required>
                                                        @if ($errors->has('address'))
                                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('address') }}</strong>
                                            </span>
                                                        @endif
                                                    </div>

                                                    <div class="col-12">
                                                        <label>Order Notes </label>
                                                        <textarea name="message" cols="80" rows="10" placeholder="Notes about Your Order, e.g.Special Note for Delivery"></textarea>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="order-area">
                                                <h3>Your Order</h3>
                                                <ul class="total-cost">
                                                    <table class="table table-bordered">
                                                        @foreach (Cart::instance(Session::get('cart_instance'))->content() as $item)
                                                            <tr>
                                                                <td>{{ $item->model->name }}</td>
                                                                <td>GHS {{ $item->model->price }}</td>
                                                            </tr>
                                                            {{--<li>{{ $item->model->name }} <span class="pull-right">GHS {{ $item->model->price }}</span></li>--}}

                                                        @endforeach

                                                    </table>

                                                    <p>Subtotal: <strong>GHS {{ Cart::instance(Session::get('cart_instance'))->subtotal() }}</strong></span></p>
                                                    <p>Shipping: <span class="pull-right">Free</span></p>
                                                    <p>Total: GHS {{ Cart::instance(Session::get('cart_instance'))->subtotal() }}</p>
                                                </ul>


                                                <label><strong>Choose Payment Method:</strong></label><br/>
                                                <div class="check_box_one">
                                                    <div class="radio_one">
                                                        <label>
                                                            <input type="radio" name="p_method" value="cash">
                                                            <i></i>Cash on Delivery</label>
                                                    </div>
                                                </div>
                                                <div class="check_box_one">
                                                    <div class="radio_one">
                                                        <label>
                                                            <input type="radio" name="p_method" value="momo">
                                                            <i></i>Mobile Money</label>
                                                    </div>
                                                </div>

                                                <small class="text-primary">Send payment to 0547576916, use the order code as reference.</small>


                                                <input type="hidden" value="{{ Auth::guard('customer')->user()->id }}" name="customer_id" />
                                                <input type="hidden" value="{{ Cart::instance(Session::get('cart_instance'))->subtotal() }}" name="total_amount" />

                                                <br/>
                                                <br/>
                                                <button type="submit" class="btn btn-primary btn-lg">Place Order</button>

                                            </div>
                                        </div>
                                        {{--</form>--}}
                                    </div>
                                </div>
                            </form>

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

    <!-- checkout-area end -->

@endsection

