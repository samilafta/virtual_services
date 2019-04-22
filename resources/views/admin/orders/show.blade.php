@extends('layouts.app-dashboard')

@section('title')
    View Order
    @parent
@stop

@section('page')
    View Order
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
                    <h4 class="title"><strong>Order Code - {{ $order->order_code }}</strong></h4>
                    <p class="category"></p>
                </div>
                <div class="content table-responsive table-full-width" style="padding: 30px;">

                        <p><strong>Date: </strong>{{ $order->created_at }}</p>
                        <p><strong>Order Code: </strong>{{ $order->order_code }}</p>
                        <p><strong>Order Code: </strong>{{ $order->cart_id }}</p>

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
                                    <td>{{ $item->qty }}</td>
                                    <td>{{ $item->subtotal }}</td>
                                </tr>

                            @endforeach

                            </tbody>

                        </table>

                    {{--</div>--}}



                </div>
            </div>
        </div>
    </div>


@endsection

