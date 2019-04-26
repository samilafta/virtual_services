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

@section('active-re')
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
                <li class="active">Reports</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">

        <button style="margin: 15px;" name="datesubmit" class="btn btn-success btn-lg pull-left" id="genPdf" onclick="printDiv('reportprint')">
            Print Report
        </button>   <br/>

        <div class="col-lg-12">

            <div class="white-box" id="reportprint">
                <h3 class="box-title m-b-0">Reports</h3>
                {{--<p class="text-muted m-b-20">Swipe Mode, ModeSwitch, Minimap, Sortable, SortableSwitch</p>--}}

                <h5 class="category">From {{ $from_date }} to {{ $to_date }}</h5>

                @if ($orders->count() > 0)

                    <h3><strong>Total Revenue: GHS {{ $orders_total }}</strong></h3>

                    <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe"
                           data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>
                        <thead>
                        <tr>
                            <th><strong>Order Code</strong></th>
                            <th><strong>Payment Method</strong></th>
                            <th><strong>Payment</strong></th>
                            <th><strong>Total (GHS)</strong></th>
                            <th><strong>Status</strong></th>
                            {{--<th><strong></strong></th>--}}
                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($orders as $order)

                            <tr>
                                <td style="font-size: 15pt;">{{ $order->order_code }}</td>
                                <td style="font-size: 15pt;">{{ $order->payment_method }}</td>
                                <td style="font-size: 15pt;">
                                    @if($order->payment_status == 0)
                                        Not Paid
                                    @else
                                        Paid
                                    @endif
                                </td>
                                <td style="font-size: 15pt;">{{ $order->total_amount }}</td>
                                <td class="quantity cart-plus" style="font-size: 15pt;">
                                    @if($order->status == 0)
                                        Not Delivered
                                    @else
                                        Delivered
                                    @endif
                                </td>

                            </tr>

                        @endforeach

                        </tbody>
                    </table>

                @else

                    <h3>No Record Found.</h3>

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
