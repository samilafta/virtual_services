@extends('layouts.app-dashboard')

@section('title')
    Products
    @parent
@stop

@section('page')
    Products
    @parent
@stop

@section('active-pr')
    active
    @parent
@stop

@section('dashboard-content')

    <div class="row">

        <div class="col-md-12">

            <div class="card">
                <div class="header">
                    <h4 class="title">Products</h4>
                    <p class="category"></p>
                </div>
                <div class="content table-responsive table-full-width">

                    @if($products->count() > 0)

                    <table class="table table-striped">
                        <thead>
                        <th>Product Name</th>
                        <th>Product Image</th>
                        <th>Product Price (GHS)</th>
                        <th>Actions</th>
                        </thead>
                        <tbody>

                            @foreach($products as $product)

                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td><img src="{{ asset($product->image) }}" alt="{{ $product->name }}" width="90px" height="50px" /></td>
                                    <td>{{ $product->price }}</td>
                                    <td>
                                        <a class="btn btn-xs btn-primary" href="{{ route('products.edit', ['product' => $product->id]) }}">
                                            <span class="ti-search"></span> Edit
                                        </a>
                                        <a class="btn btn-xs btn-danger" href="#" data-toggle="modal" data-target="#delete_confirm{{ $product->id }}">
                                            <span class="ti-trash"></span>Delete
                                        </a>
                                    </td>
                                </tr>


                            @endforeach

                        @else

                            <p style="padding: 20px;">No Products added yet</p>

                        @endif

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        @foreach($products as $product)

            <!-- Modal for showing delete confirmation -->
                <div class="modal fade" id="delete_confirm{{ $product->id }}" tabindex="-1" role="dialog" data-backdrop="false" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">[close]</button>
                                <h4 class="modal-title" id="user_delete_confirm_title">
                                    Delete Product: {{ $product->name }}
                                </h4>
                            </div>
                            <div class="modal-body">
                                Are you sure to delete this Product? This operation is irreversible.
                                <div class="row">
                                    {{--<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>--}}
                                    <form action="{{ route('products.destroy', ['product' => $product->id]) }}" method="post">

                                        @csrf
                                        {{ @method_field('DELETE') }}

                                        <button type="submit" class="btn btn-danger pull-right">Delete</button>

                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach

        <a href="{{ route('products.create') }}" class="pull-left btn btn-primary">Add New Product</a>

    </div>

@endsection