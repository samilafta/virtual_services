@extends('layouts.app-dashboard')

@section('title')
    Category
    @parent
@stop

@section('page')
    Edit Category
    @parent
@stop

@section('active-ca')
    active
    @parent
@stop

@section('dashboard-content')

    <div class="col-lg-8 col-md-7">
        <div class="card">
            <div class="header">
                <h4 class="title">Edit Category</h4>
            </div>
            <div class="content">
                <form action="{{ route('categories.update', ['id' => $category->id]) }}" method="post" enctype="multipart/form-data">

                    {{--{{ @method_field('GET') }}--}}
                    @csrf
                    <input type="hidden" name="_method" value="PUT">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control border-input" name="name" value="{{ $category->name }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" class="form-control border-input" name="image">
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

@endsection