@extends('layouts.app-dashboard')

@section('title')
    Dashboard
    @parent
@stop

@section('page')
    Dashboard
    @parent
@stop

@section('active-da')
    active
    @parent
@stop

@section('dashboard-content')

    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="icon-big icon-warning text-center">
                                <i class="ti-server"></i>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="numbers">
                                <p>Today's Orders</p>
                                {{ $todays_orders }}
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <hr />
                        {{--<div class="stats">--}}
                            {{--<i class="ti-reload"></i> Updated now--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="icon-big icon-success text-center">
                                <i class="ti-wallet"></i>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="numbers">
                                <p>Today's Revenue</p>
                                GHS {{ $todays_amt }}
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <hr />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="icon-big icon-danger text-center">
                                <i class="ti-pulse"></i>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="numbers">
                                <p>Paid Orders</p>
                                {{ $paid_orders }}
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <hr />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="icon-big icon-info text-center">
                                <i class="ti-wallet"></i>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="numbers">
                                <p>Unpaid Orders</p>
                                {{ $unpaid_orders }}
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <hr />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="icon-big icon-warning text-center">
                                <i class="ti-server"></i>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="numbers">
                                <p>Orders Delivered</p>
                                {{ $delivered_orders }}
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <hr />
                        {{--<div class="stats">--}}
                        {{--<i class="ti-reload"></i> Updated now--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="icon-big icon-success text-center">
                                <i class="ti-server"></i>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="numbers">
                                <p>Orders Not Delivered</p>
                                {{ $undelivered_orders }}
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <hr />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="icon-big icon-danger text-center">
                                <i class="ti-pulse"></i>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="numbers">
                                <p>Total Orders</p>
                                {{ $total_orders }}
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <hr />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="icon-big icon-info text-center">
                                <i class="ti-wallet"></i>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="numbers">
                                <p>Total Revenue</p>
                                GHS {{ $total_revenue }}
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <hr />
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection