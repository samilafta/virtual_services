@extends('layouts.app-dashboard')

@section('title')
    Products
    @parent
@stop

@section('page')
    Edit Product
    @parent
@stop

@section('active-pr')
    active
    @parent
@stop

@section('dashboard-content')

    <div class="row">

        <div class="col-lg-8 col-md-7">
            <div class="card">
                <div class="header">
                    <h4 class="title">Edit Product</h4>
                </div>
                <div class="content">
                    <form action="{{ route('products.update', ['product' => $product->id]) }}" method="POST" enctype="multipart/form-data">

                        @csrf
                        <input type="hidden" name="_method" value="PUT">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Product Name</label>
                                    <input type="text" class="form-control border-input" name="name" value="{{ $product->name }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="number" class="form-control border-input" name="price" value="{{ $product->price }}" >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="category" class="form-control border-input">

                                        @foreach($categories as $category)

                                            <option value="{{ $category->id }}"
                                                    @if($product->category->id == $category->id)
                                                    selected
                                                    @endif

                                            >{{ $category->name }}</option>

                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Product Image</label>
                                    <input type="file" class="form-control border-input" name="image" >
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Product Description</label>
                                    <textarea rows="5" class="form-control border-input" name="description" >{{ $product->description }}</textarea>
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