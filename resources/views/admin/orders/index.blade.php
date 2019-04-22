@extends('layouts.app-dashboard')

@section('title')
    Orders
    @parent
@stop

@section('page')
    Orders
    @parent
@stop

@section('active-or')
    active
    @parent
@stop

@section('dashboard-content')

    <div class="row">

        <div class="col-md-12">

            <div class="card">
                <div class="header">
                    <h4 class="title"><strong>Orders List</strong></h4>
                    <p class="category"></p>
                </div>
                <div class="content table-responsive table-full-width" style="padding: 30px;">

                    @if ($orders->count() > 0)
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th><strong>Order Code</strong></th>
                                    <th><strong>Payment Method</strong></th>
                                    <th><strong>Payment</strong></th>
                                    <th><strong>Total (GHS)</strong></th>
                                    <th><strong>Status</strong></th>
                                    <th><strong>Action</strong></th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach ($orders as $order)

                                <tr>
                                    <td>{{ $order->order_code }}</td>
                                    <td>{{ $order->payment_method }}</td>
                                    <td>
                                        @if($order->payment_status == 0)
                                            <label class="label label-warning" style="color: #ffffff;"> Not Paid</label>
                                        @else
                                            <label class="label label-success" style="color: #ffffff;"> Paid</label>
                                        @endif
                                    </td>
                                    <td>{{ $order->total_amount }}</td>
                                    <td class="quantity cart-plus">
                                        @if($order->status == 0)
                                            <label class="label label-warning" style="color: #ffffff;">Not Delivered</label>
                                        @else
                                            <label class="label label-success" style="color: #ffffff;">Delivered</label>
                                        @endif
                                    </td>
                                    <td>
                                        {{--<button class="btn btn-xs btn-primary">--}}
                                        <a data-toggle="modal" class="btn btn-xs btn-primary" data-target="#viewItem{{ $order->cart_id }}">
                                            view</a>
                                        @if($order->payment_status == 0)
                                            <a href="{{ route('orders.pay', ['id' => $order->id]) }}" class="btn btn-primary btn-xs">
                                                pay
                                            </a>
                                        @endif
                                        @if($order->status == 0)
                                            <a href="{{ route('orders.deliver', ['id' => $order->id]) }}" class="btn btn-primary btn-xs">
                                                deliver
                                            </a>
                                        @endif
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>

                    @else

                        <h3>No orders made yet.</h3>

                    @endif


                </div>
            </div>
        </div>
    </div>

    @foreach ($orders as $order)

        <div class="modal fade" id="viewItem{{ $order->cart_id }}" tabindex="-1" role="dialog" data-backdrop="false" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Your Order: {{ $order->order_code }}</h4>
                    </div>
                    <div class="modal-body" id="receipt">

                        <p><strong>Virtual IT Service</strong></p>

                        <p><strong>Date: </strong>{{ $order->created_at }}</p>
                        <p><strong>Order Code: </strong>{{ $order->order_code }}</p>

                        {{--<div class="col-md-12">--}}

                            {{--<div class="order-area">--}}

                                <table class="table table-hover">

                                    <thead>
                                        <th>Item</th>
                                        <th>Qty</th>
                                        <th>Amount (GHS)</th>
                                    </thead>
                                    <tbody>
                                        @foreach (\App\Cart::where('cart_id', '=', $order->cart_id)->get() as $item)

                                            <tr>
                                                <td>{{ $item->product_name }}</td>
                                                <td>{{ $item->quantity }}</td>
                                                <td>{{ $item->amount }}</td>
                                            </tr>

                                        @endforeach

                                    </tbody>
                                    <tr><strong>TOTAL: </strong>GHS {{ \App\Cart::where('cart_id', '=', $order->cart_id)->sum('amount') }}</tr>

                                </table>
                         {{--</div>--}}

                        </div>

                    </div>



                <div class="modal-footer">
                    <button class="btn btn-primary text-center" id="print">Print</button>

                    </div>
                </div>
            </div>
        </div>

    @endforeach


@endsection

