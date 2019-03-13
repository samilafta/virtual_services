@extends('layouts.shop')

@section('title')
    Shop
    @parent
@stop

@section('shop-content')

    <!-- .breadcumb-area start -->
    <div class="breadcumb-area bg-img-4 ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-wrap text-center">
                        <h2>Products</h2>
                        <ul>
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li><span>Shop</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- product-area start -->
    <div class="product-area pt-100">
        <div class="container">
            <div class="tab-content">
                <div class="tab-pane active" id="all">
                    <ul class="row">
                        @if($products->count() > 0)
                            @foreach($products as $product)

                                <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                    <div class="product-wrap">
                                        <div class="product-img">
                                            <img src="{{ asset($product->image) }}" alt="">
                                            <div class="product-icon flex-style">
                                                <ul>
                                                    <li><a data-toggle="modal" data-target="#exampleModalCenter" href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                                    {{--<li><a href="wishlist.html"><i class="fa fa-heart"></i></a></li>--}}
                                                    <li><a href="cart.html"><i class="fa fa-shopping-bag"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a href="{{ route('shop.product.detail', ['id' => $product->id]) }}">{{ $product->name }}</a></h3>
                                            <p class="pull-left">GHS {{ $product->price }}
                                            </p>
                                        </div>
                                    </div>
                                </li>

                            @endforeach
                        @else
                            <h4 class="text-center">No Products Available</h4>
                        @endif

                    </ul>
                </div>

            </div>
        </div>
    </div>

@endsection