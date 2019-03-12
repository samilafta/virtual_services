@extends('layouts.app-dashboard')

@section('title')
    Users
    @parent
@stop

@section('page')
    User
    @parent
@stop

@section('active-us')
    active
    @parent
@stop

@section('dashboard-content')

    <div class="row">



        <div class="col-md-12">

            <div class="card">
                <div class="header">
                    <h4 class="title">Users</h4>
                    <p class="category"></p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                        </thead>
                        <tbody>
                        @if($users->count() > 0)

                            @foreach($users as $user)

                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <a class="btn btn-xs btn-primary" href="{{ route('users.edit', ['user' => $user->id]) }}">
                                            <span class="ti-search"></span> Edit
                                        </a>
                                        <a class="btn btn-xs btn-danger" href="#" data-toggle="modal" data-target="#delete_confirm{{ $user->id }}">
                                            <span class="ti-trash"></span> Delete
                                        </a>
                                    </td>
                                </tr>


                            @endforeach

                        @else

                            <tr>No Users created yet</tr>

                        @endif

                        </tbody>
                    </table>

                </div>




            </div>
        </div>

    @foreach($users as $user)

        <!-- Modal for showing delete confirmation -->
            <div class="modal fade" id="delete_confirm{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">[close]</button>
                            <h4 class="modal-title" id="user_delete_confirm_title">
                                Delete User: {{ $user->name }}
                            </h4>
                        </div>
                        <div class="modal-body">
                            Are you sure to delete this Category? This operation is irreversible.
                            <div class="row">
                                {{--<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>--}}
                                <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post">

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


        <a href="{{ route('users.create')}}" class="pull-left btn btn-primary">Add New User</a>

    </div>

@endsection