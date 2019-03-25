@extends('layouts.shop')

@section('title')
    Cart
    @parent
@stop

@section('shop-content')

    <!-- .breadcumb-area start -->
    <div class="breadcumb-area bg-img-4 ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-wrap text-center">
                        <h2>Shopping Cart</h2>
                        <ul>
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li><span>Shopping Cart</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .breadcumb-area end -->
    <!-- cart-area start -->
    <div class="cart-area ptb-100">
        <div class="container">
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
                        <table class="table-responsive cart-wrap">
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
                                <td class="images"><img src="{{ asset($item->model->image) }}" alt=""></td>
                                <td class="product"><a href="{{ route('shop.product.detail', ['id' => $item->model->id]) }}">{{ $item->model->name }}</a></td>
                                <td class="ptice">GHS {{ $item->model->price }}</td>
                                <td class="quantity cart-plus">
                                    <select class="quantity" data-id="{{ $item->rowId }}">
                                        <option {{ $item->qty == 1 ? 'selected' : '' }}>1</option>
                                        <option {{ $item->qty == 2 ? 'selected' : '' }}>2</option>
                                        <option {{ $item->qty == 3 ? 'selected' : '' }}>3</option>
                                        <option {{ $item->qty == 4 ? 'selected' : '' }}>4</option>
                                        <option {{ $item->qty == 5 ? 'selected' : '' }}>5</option>
                                    </select>
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
                                        <li>
                                            <a href="{{ route('shop.cart.empty') }}">Empty Cart</a>
                                        </li>
                                        <li><a href="{{ route('shop.products') }}">Continue Shopping</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-3 offset-xl-5 col-lg-4 offset-lg-3 col-md-6">
                                <div class="cart-total text-right">
                                    <h3>Cart Totals</h3>
                                    <ul>
                                        <li><span class="pull-left">Subtotal </span>GHS {{ Cart::instance(Session::get('cart_instance'))->subtotal() }}</li>
                                        <li><span class="pull-left"> Total </span> GHS {{ Cart::instance(Session::get('cart_instance'))->subtotal() }}</li>
                                    </ul>
                                    <a href="{{ route('shop.checkout') }}">Proceed to Checkout</a>
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
    </div>
    <!-- cart-area end -->

@endsection