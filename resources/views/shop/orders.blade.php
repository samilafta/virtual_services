@extends('layouts.shop')

@section('title')
    Orders
    @parent
@stop

@section('shop-content')

    <!-- .breadcumb-area start -->
    <div class="breadcumb-area bg-img-4 ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-wrap text-center">
                        <h2>My Orders</h2>
                        <ul>
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li><span>Orders</span></li>
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

                    @if ($orders->count() > 0)
                        <table class="table-responsive cart-wrap">
                            <thead>
                            <tr>
                                <th>Order Code</th>
                                <th>Payment</th>
                                <th>Total (GHS)</th>
                                <th class="quantity">Status</th>
                                <th class="total">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach ($orders as $order)

                                <tr>
                                    <td>{{ $order->cart_id }}</td>
                                    <td>
                                        @if($order->payment_status == 0)
                                            Not Paid
                                        @else
                                            Paid
                                        @endif

                                    </td>
                                    <td>{{ $order->total_amount }}</td>
                                    <td class="quantity cart-plus">
                                        @if($order->status == 0)
                                            <label class="label label-warning">Not Delivered</label>
                                        @else
                                            <label class="label label-success">Delivered</label>
                                        @endif
                                    </td>
                                    <td>
                                        <button class="btn btn-xs btn-primary">
                                            <a data-toggle="modal" data-target="#viewItem{{ $order->cart_id }}" href="javascript:void(0);">
                                                <i class="fa fa-eye"></i> </a>
                                        </button>

                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>

                    @else

                        <h3>You have no orders yet.</h3>
                        <a href="{{ route('shop.products') }}" class="btn btn-primary btn-lg">Continue Shopping</a>

                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- cart-area end -->


    @foreach ($orders as $order)
    <!-- Modal area start -->
    <div class="modal fade" id="viewItem{{ $order->cart_id }}" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body d-flex">

                    <div class="col-lg-4">
                        <div class="order-area">
                            <h3>Your Order</h3>
                            <ul class="total-cost">
                                @foreach (Cart::instance($order->cart_id)->content() as $item)
                                    <li>{{ $item->model->name }} <span class="pull-right">GHS {{ $item->model->price }}</span></li>

                                @endforeach
                                {{--<li>Subtotal <span class="pull-right"><strong>GHS {{ Cart::instance($order->cart_id)->subtotal() }}</strong></span></li>--}}
                                <li>Shipping <span class="pull-right">Free</span></li>
                                <li>Total<span class="pull-right">GHS {{ Cart::instance($order->cart_id)->subtotal() }}</span></li>
                            </ul>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Modal area start -->

    @endforeach

@endsection