@extends('layouts.app-dashboard')

@section('title')
    Reports
    @parent
@stop

@section('page')
    Reports
    @parent
@stop

@section('active-re')
    active
    @parent
@stop

@section('dashboard-content')

    <div class="row">

        <div class="col-md-12">

            <div class="card">
                <div class="header">
                    <h4 class="title"><strong>Generated Reports</strong></h4><br/>
                    <p class="category">From {{ $from_date }} to {{ $to_date }}</p>
                </div>
                <div class="content table-responsive table-full-width" style="padding: 30px;">

                    @if ($orders->count() > 0)

                        <h3>Total Revenue: GHS {{ $orders_total }}</h3>
                    <br/>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th><strong>Order Code</strong></th>
                                <th><strong>Payment Method</strong></th>
                                <th><strong>Payment</strong></th>
                                <th><strong>Total (GHS)</strong></th>
                                <th><strong>Status</strong></th>
                                {{--<th><strong>Action</strong></th>--}}
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
                                </tr>

                            @endforeach
                            </tbody>
                        </table>

                    @else

                        <h3>No results found.</h3>

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
                    <div class="modal-body">

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
                            @foreach (Cart::instance($order->cart_id)->content() as $item)

                                <tr>
                                    <td>{{ $item->model->name }}</td>
                                </tr>

                            @endforeach
                            {{--@foreach (Cart::instance($order->cart_id)->content() as $item)--}}

                            {{--<tr>--}}
                            {{--<td>{{ $item->model->name }}</td>--}}
                            {{--<td>{{ $item->qty }}</td>--}}
                            {{--<td>{{ $item->subtotal }}</td>--}}
                            {{--</tr>--}}

                            {{--@endforeach--}}

                            {{--<tr>TOTAL: GHS {{ Cart::instance($order->cart_id)->subtotal() }}</tr>--}}

                            </tbody>

                        </table>
                        {{--</div>--}}

                        {{--</div>--}}

                    </div>
                    {{--<div class="modal-footer">--}}
                    {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                    {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>

    @endforeach


@endsection

