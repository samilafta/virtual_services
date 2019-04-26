@extends('layouts.shop')

@section('title')
    Orders
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
                    <li>Orders</li>
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

                            <div class="cart-area ptb-100">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">

                                            <h3 class="text-primary">Send payment to 0547576916 (MOMO), use the order code as reference.</h3>
                                            <br/>

                                            @if ($orders->count() > 0)
                                                <table class="table table-responsive table-bordered table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>Order Code</th>
                                                        <th>Payment</th>
                                                        <th>Payment Method</th>
                                                        <th>Total (GHS)</th>
                                                        <th class="quantity">Status</th>
                                                        <th class="total">Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    @foreach ($orders as $order)

                                                        <tr>
                                                            <td>{{ $order->order_code }}</td>
                                                            <td>
                                                                @if($order->payment_status == 0)
                                                                    Not Paid
                                                                @else
                                                                    Paid
                                                                @endif

                                                            </td>
                                                            <td>{{ $order->payment_method }}</td>
                                                            <td>{{ $order->total_amount }}</td>

                                                            <td class="quantity cart-plus">
                                                                @if($order->status == 0)
                                                                    <label class="label label-warning">Not Delivered</label>
                                                                @else
                                                                    <label class="label label-success">Delivered</label>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                {{--<button class="btn btn-xs btn-primary">--}}
                                                                <a data-toggle="modal" class="btn btn-xs btn-primary" data-target="#viewItem{{ $order->cart_id }}">
                                                                    <i class="fa fa-eye"></i> </a>


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

    @foreach ($orders as $order)
        <!-- Modal area start -->
        <div class="modal fade" id="viewItem{{ $order->cart_id }}" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-body d-flex">

                        <div class="col-lg-12">
                            <div class="order-area">
                                <h3>Your Order</h3> <br/>
                                <ul class="total-cost">

                                  <table class="table table-bordered">

                                      @foreach (\App\Cart::where('cart_id', '=', $order->cart_id)->get() as $item)

                                          <tr>
                                              <td>{{ $item->product_name }} ( {{ $item->quantity }} )</td>
                                              <td>GHS {{ $item->amount }}</td>
                                          </tr>

                                      @endforeach


                                  </table>

                                     <h5>Shipping: <span class="pull-right">Free</span></h5> <br/>
                                    <h5>Total:<strong class="pull-right">GHS {{ \App\Cart::where('cart_id', '=', $order->cart_id)->sum('amount') }}</strong></h5>
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