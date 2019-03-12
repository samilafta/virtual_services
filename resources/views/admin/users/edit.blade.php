@extends('layouts.app-dashboard')

@section('title')
    User
    @parent
@stop

@section('page')
    Edit User
    @parent
@stop

@section('active-us')
    active
    @parent
@stop

@section('dashboard-content')

    <div class="row">

        <div class="col-lg-8 col-md-7">
            <div class="card">
                <div class="header">
                    <h4 class="title">Edit User</h4>
                </div>
                <div class="content">
                    <form action="{{ route('users.update', ['user' => $user->id]) }}" method="POST">

                        @csrf
                        <input type="hidden" name="_method" value="PUT">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control border-input" name="name" value="{{ $user->name }}" >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control border-input" name="email" value="{{ $user->email }}" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control border-input" name="password" >
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-info btn-fill btn-wd">Update</button>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection