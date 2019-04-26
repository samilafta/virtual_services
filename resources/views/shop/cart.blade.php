@extends('layouts.shop')

@section('title')
    Cart
    @parent
@stop

@section('shop-content')

    <div class="page-head_agile_info_w3l">

    </div>
    <!-- //banner-2 -->
    <!-- page -->
    <div class="services-breadcrumb">
        <div class="agile_inner_breadcrumb">
            <div class="container">
                <ul class="w3_short">
                    <li>
                        <a href="{{ route('index') }}">Home</a>
                        <i>|</i>
                    </li>
                    <li>Cart</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- .breadcumb-area end -->
    <!-- cart-area start -->

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

                                <div class="col-12">

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

                                    @if (sizeof(Cart::instance(Session::get('cart_instance'))->content()) > 0)
                                        <table class="table table-responsive table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th class="images">Image</th>
                                                <th class="product">Product</th>
                                                <th class="ptice">Price</th>
                                                <th class="quantity">Quantity</th>
                                                <th class="total">Total</th>
                                                <th class="remove">Remove</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach (Cart::instance(Session::get('cart_instance'))->content() as $item)

                                                <tr>
                                                    <td class="images"><img src="{{ asset($item->model->image) }}" height="50px" width="50px" alt=""></td>
                                                    <td class="product"><a href="{{ route('shop.product.detail', ['id' => $item->model->id]) }}">{{ $item->model->name }}</a></td>
                                                    <td class="ptice">GHS {{ $item->model->price }}</td>
                                                    <td class="quantity cart-plus">
                                                        {{ $item->qty }}
                                                    </td>
                                                    <td class="total">GHS {{ $item->subtotal }}.00</td>
                                                    <td class="remove">
                                                        <form action="{{ route('shop.cart.remove', ['id' => $item->rowId]) }}" method="POST" class="side-by-side">

                                                            @csrf
                                                            {{--{{ @method_field('DELETE') }}--}}
                                                            <button type="submit" class="btn btn-outline-dark btn-sm"><i class="fa fa-times"></i></button>

                                                        </form>

                                                    </td>
                                                </tr>

                                            @endforeach
                                            </tbody>
                                        </table>
                                        <div class="row mt-60">
                                            <div class="col-xl-4 col-lg-5 col-md-6 ">
                                                <div class="cartcupon-wrap">
                                                    <ul class="d-flex">
                                                        <p style="margin: 5px;">
                                                            <a href="{{ route('shop.cart.empty') }}" class="btn btn-warning btn-lg">Empty Cart</a>
                                                        </p> <br/>
                                                        <p style="margin: 5px;"><a href="{{ route('shop.products') }}" class="btn btn-primary btn-lg">Continue Shopping</a></p>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 offset-xl-5 col-lg-4 offset-lg-3 col-md-6">
                                                <div class="cart-total text-right">
                                                    <h3>Cart Totals</h3>

                                                        <h5><span class="pull-left">Subtotal </span>GHS {{ Cart::instance(Session::get('cart_instance'))->subtotal() }}</h5>
                                                        <h5><span class="pull-left"> Total </span> GHS {{ Cart::instance(Session::get('cart_instance'))->subtotal() }}</h5>
                                                    <a href="{{ route('shop.checkout') }}" class="btn btn-primary">Proceed to Checkout</a>
                                                </div>
                                            </div>
                                        </div>

                                    @else

                                        <h3>You have no items in your shopping cart</h3>
                                        <a href="{{ route('shop.products') }}" class="btn btn-primary btn-lg">Continue Shopping</a>

                                    @endif
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