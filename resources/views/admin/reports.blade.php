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
        @if(count($errors) > 0)

            <ul class="list-group">

                @foreach($errors->all() as $error)

                    <li class="list-group-item text-danger">
                        {{ $error }}
                    </li>

                @endforeach

            </ul>
            <br>

        @endif

        <div class="col-lg-8 col-md-7">
            <div class="card">
                <div class="header">
                    <h4 class="title">Generate Report</h4>
                </div>
                <div class="content">
                    <form action="{{ route('reports.generate') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>From Date</label>
                                    <input type="text" class="form-control border-input" name="from_date" id="datetime3" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>To Date</label>
                                    <input type="text" class="form-control border-input" name="to_date" id="datetime4" required>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-info btn-fill btn-wd">Generate</button>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection