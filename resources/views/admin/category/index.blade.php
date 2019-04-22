@extends('layouts.app-dashboard')

@section('title')
    Category
    @parent
@stop

@section('page')
    Category
    @parent
@stop

@section('active-ca')
    active
    @parent
@stop

@section('dashboard-content')

    <div class="row">



        <div class="col-md-12">

            <div class="card">
                <div class="header">
                    <h4 class="title">Categories</h4>
                    <p class="category"></p>
                </div>
                <div class="content table-responsive table-full-width">

                    @if($categories->count() > 0)

                    <table class="table table-striped">
                        <thead>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>

                            @foreach($categories as $category)

                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td><img src="{{ asset($category->image) }}" alt="{{ $category->name }}" width="90px" height="50px" /></td>

                                    <td>
                                        <a class="btn btn-xs btn-primary" href="{{ route('categories.edit', ['category' => $category->id]) }}">
                                            <span class="ti-search"></span> Edit
                                        </a>
                                        <a class="btn btn-xs btn-danger" href="#" data-toggle="modal" data-target="#delete_confirm{{ $category->id }}">
                                            <span class="ti-trash"></span> Delete
                                        </a>
                                    </td>
                                </tr>

                                <!-- Modal for showing delete confirmation -->

                            @endforeach

                        @else

                            <p style="padding: 20px;">No Categories created yet</p>

                        @endif

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        @foreach($categories as $category)

            <div class="modal fade" id="delete_confirm{{ $category->id }}" tabindex="-1" data-backdrop="false" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">[close]</button>
                            <h4 class="modal-title" id="user_delete_confirm_title">
                                Delete Category: {{ $category->name }}
                            </h4>
                        </div>
                        <div class="modal-body">
                            Are you sure to delete this Category? This operation is irreversible.
                            <div class="row">
                                {{--<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>--}}
                                <form action="{{ route('categories.destroy', ['category' => $category->id]) }}" method="post">

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

        <a href="{{ route('categories.create')}}" class="pull-left btn btn-primary">Add New Category</a>

    </div>

@endsection