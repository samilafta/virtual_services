@extends('layouts.app-dashboard')

@section('styles')

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('admin/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{ asset('admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">

    <link href="{{ asset('admin/plugins/bower_components/tablesaw-master/dist/tablesaw.css') }}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{ asset('admin/css/animate.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{ asset('admin/css/colors/megna-dark.css') }}" id="theme" rel="stylesheet">

@stop

@section('active-da')
    active
    @parent
@stop

@section('dashboard-content')

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">HomePage</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="javascript:void(0)">Dashboard</a></li>
                <li class="active">Home</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Orders</h3>
                {{--<p class="text-muted m-b-20">Swipe Mode, ModeSwitch, Minimap, Sortable, SortableSwitch</p>--}}
                @if ($orders->count() > 0)
                    <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe"
                           data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>
                    <thead>
                    <tr>
                        <th><strong>Order Code</strong></th>
                        <th><strong>Payment Method</strong></th>
                        <th><strong>Payment</strong></th>
                        <th><strong>Total (GHS)</strong></th>
                        <th><strong>Status</strong></th>
                        <th><strong></strong></th>
                    </tr>
                    </thead>
                    <tbody>

                        @foreach ($orders as $order)

                        <tr>
                            <td style="font-size: 15pt;">{{ $order->order_code }}</td>
                            <td style="font-size: 15pt;">{{ $order->payment_method }}</td>
                            <td style="font-size: 15pt;">
                                @if($order->payment_status == 0)
                                    <label class="label label-warning" style="color: #ffffff;"> Not Paid</label>
                                @else
                                    <label class="label label-success" style="color: #ffffff;"> Paid</label>
                                @endif
                            </td>
                            <td style="font-size: 15pt;">{{ $order->total_amount }}</td>
                            <td class="quantity cart-plus" style="font-size: 15pt;">
                                @if($order->status == 0)
                                    <label class="label label-warning" style="color: #ffffff;">Not Delivered</label>
                                @else
                                    <label class="label label-success" style="color: #ffffff;">Delivered</label>
                                @endif
                            </td>
                            <td style="font-size: 15pt;">
                                {{--<button class="btn btn-xs btn-primary">--}}
                                <a data-toggle="modal" class="btn btn-primary" data-target="#viewItem{{ $order->cart_id }}">
                                    view</a>

                                <div id="viewItem{{ $order->cart_id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title" id="myModalLabel">Your Order: {{ $order->order_code }}</h4> </div>
                                            <div class="modal-body" id="printarea">

                                                <p><strong>Virtual IT Service</strong></p>
                                                <p><strong>Date: </strong>{{ $order->created_at }}</p>
                                                <p><strong>Order Code: </strong>{{ $order->order_code }}</p>

                                                <table class="table table-hover">

                                                        <thead>
                                                        <tr>
                                                            <th>Item</th>
                                                            <th>Qty</th>
                                                            <th>Amount (GHS)</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach (\App\Cart::where('cart_id', '=', $order->cart_id)->get() as $item)

                                                            <tr>
                                                                <td >{{ $item->product_name }}</td>
                                                                <td>{{ $item->quantity }}</td>
                                                                <td>{{ $item->amount }}</td>
                                                            </tr>

                                                        @endforeach

                                                        </tbody>
                                                        <tr><strong>TOTAL: </strong>GHS {{ \App\Cart::where('cart_id', '=', $order->cart_id)->sum('amount') }}</tr>

                                                    </table>

                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-info waves-effect" id="genPdf" onclick="printDiv('printarea')">
                                                    Print</button>
                                                <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>

                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>

                            @if($order->payment_status == 0)
                                    <a href="{{ route('orders.pay', ['id' => $order->id]) }}" class="btn btn-primary">
                                        pay
                                    </a>
                                @endif
                                @if($order->status == 0)
                                    <a href="{{ route('orders.deliver', ['id' => $order->id]) }}" class="btn btn-primary">
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



@endsection

@section('scripts')


    <!-- jQuery -->
    <script src="{{ asset('admin/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('admin/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{ asset('admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{ asset('admin/js/jquery.slimscroll.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('admin/js/waves.js') }}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('admin/js/custom.min.js"') }}"></script>
    <script src="{{ asset('admin/plugins/bower_components/tablesaw-master/dist/tablesaw.js"') }}"></script>
    <script src="{{ asset('admin/plugins/bower_components/tablesaw-master/dist/tablesaw-init.js"') }}"></script>

    <!--Style Switcher -->
    <script src="{{ asset('admin/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>

    <script>

        function printDiv(divName){
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }

    </script>


@stop
