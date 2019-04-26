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

@section('active-us')
    active
    @parent
@stop

@section('dashboard-content')

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Administrators</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="javascript:void(0)">Dashboard</a></li>
                <li class="active">Administrators</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Administrators List</h3>

                @if (session()->has('success_message'))
                    <div class="alert alert-success">
                        {{ session()->get('success_message') }}
                    </div>
                @endif

                @if($users->count() > 0)
                    <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe"
                           data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($users as $user)

                            <tr>
                                <td style="font-size: 15pt;">{{ $user->name }}</td>
                                <td style="font-size: 15pt;">{{ $user->email }}</td>
                                <td style="font-size: 15pt;">
                                    <a class="btn btn-primary" href="{{ route('users.edit', ['user' => $user->id]) }}">
                                        Change
                                    </a>
                                    <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#delete_confirm{{ $user->id }}">
                                        Remove
                                    </a>
                                    <div id="delete_confirm{{ $user->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title" id="myModalLabel"> Delete Administrator: {{ $user->name }}</h4> </div>
                                                <div class="modal-body">
                                                    Are you sure to delete this Admin? This operation is irreversible.
                                                    <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post">                                                        {{ @method_field('DELETE') }}
                                                        @csrf
                                                        {{ @method_field('DELETE') }}
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                        <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>

                                                    </form>
                                                </div>
                                                {{--<div class="modal-footer">--}}
                                                {{--<button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>--}}
                                                {{--</div>--}}
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>

                                </td>
                            </tr>


                            <!-- Modal for showing delete confirmation -->

                        @endforeach

                        </tbody>
                    </table>

                @else

                    <h3>No Administrators created yet</h3>

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
    <!--Style Switcher -->
    <script src="{{ asset('admin/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>

@stop
