@extends('layouts.app-dashboard')

@section('title')
    Category
    @parent
@stop

@section('page')
     Create Category
    @parent
@stop

@section('active-ca')
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
                    <h4 class="title">Add New Category</h4>
                </div>
                <div class="content">
                    <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control border-input" name="name" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" class="form-control border-input" name="image" required>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-info btn-fill btn-wd">Add</button>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection