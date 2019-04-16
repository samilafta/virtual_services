@extends('layouts.app-dashboard')

@section('title')
    Customers
    @parent
@stop

@section('page')
    Customers
    @parent
@stop

@section('active-cu')
    active
    @parent
@stop

@section('dashboard-content')

    <div class="row">

        <div class="col-md-12">

            <div class="card">
                <div class="header">
                    <h4 class="title">Customers List</h4>
                    <p class="category"></p>
                </div>
                <div class="content table-responsive table-full-width">

                    @if($customers->count() > 0)

                        <table class="table table-striped">
                            <thead>
                            <th>Customer Name</th>
                            <th>Cuetomer Email</th>
                            <th>Customer Phone Number</th>
                            {{--<th>Actions</th>--}}
                            </thead>
                            <tbody>

                            @foreach($customers as $customer)

                                <tr>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->email }}</td>
                                    <td>{{ $customer->phone_number }}</td>
                                    {{--<td>--}}
                                        {{--<a href="{{ route('customers.edit', ['customer' => $customers->id]) }}">--}}
                                            {{--<span class="ti-search"></span>--}}
                                        {{--</a>--}}
                                        {{--<a href="#" data-toggle="modal" data-target="#delete_confirm{{ $customers->id }}">--}}
                                            {{--<span class="ti-trash"></span>--}}
                                        {{--</a>--}}
                                    {{--</td>--}}
                                </tr>

                                <!-- Modal for showing delete confirmation -->
                                {{--<div class="modal fade" id="delete_confirm{{ $customers->id }}" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">--}}
                                    {{--<div class="modal-dialog">--}}
                                        {{--<div class="modal-content">--}}
                                            {{--<div class="modal-header">--}}
                                                {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">[close]</button>--}}
                                                {{--<h4 class="modal-title" id="user_delete_confirm_title">--}}
                                                    {{--Delete User: {{ $customers->name }}--}}
                                                {{--</h4>--}}
                                            {{--</div>--}}
                                            {{--<div class="modal-body">--}}
                                                {{--Are you sure to delete this Category? This operation is irreversible.--}}
                                                {{--<div class="row">--}}
                                                    {{--<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>--}}
                                                    {{--<form action="{{ route('customers.destroy', ['customer' => $customers->id]) }}" method="post">--}}

                                                        {{--@csrf--}}
                                                        {{--{{ @method_field('DELETE') }}--}}

                                                        {{--<button type="submit" class="btn btn-danger pull-right">Delete</button>--}}

                                                    {{--</form>--}}


                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}


                            @endforeach

                            @else

                                <p style="padding: 20px;">No Customers signed up yet</p>

                            @endif

                            </tbody>
                        </table>

                </div>
            </div>
        </div>


    </div>

@endsection