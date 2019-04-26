@extends('layouts.shop')

@section('title')
    {{ $product->name }}
    @parent
@stop

@section('shop-content')

    <div class="page-head_agile_info_w3l">

    </div>
    <!-- //banner-2 -->
    <!-- page -->
    <div class="services-breadcrumb">
        <div class="agile_inner_breadcrumb">
            <div class="container">
                <ul class="w3_short">
                    <li>
                        <a href="{{ route('index') }}">Home</a>
                        <i>|</i>
                    </li>
                    <li>{{ $product->name }}</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="banner-bootom-w3-agileits py-5">
        <div class="container py-xl-4 py-lg-2">
            <!-- tittle heading -->
            <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
            <!-- //tittle heading -->
            <div class="row">
                <div class="col-lg-5 col-md-8 single-right-left ">
                    <div class="grid images_3_of_2">
                        <div class="flexslider">
                            <ul class="slides">
                                <li data-thumb="images/si1.jpg" style="list-style-type: none;">
                                    <div class="thumb-image">
                                        <img src="{{ asset($product->image) }}" class="img-fluid" alt=""> </div>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 single-right-left simpleCart_shelfItem">
                    <h3 class="mb-3">{{ $product->name }}</h3>
                    <p class="mb-3">
                        <span class="item_price">GHS {{ $product->price }}</span>
                        {{--<del class="mx-2 font-weight-light">$280.00</del>--}}
                    </p>
                    <div class="product-single-w3l">
                        <p>{!! $product->description !!}}</p>
                    </div>
                    <div class="occasion-cart">
                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                            <form action="{{ route('shop.addtocart') }}" method="POST" class="side-by-side">
                                {!! csrf_field() !!}
                                {{--<li class="quantity cart-plus-minus">--}}
                                    <input type="number" name="quantity" min="1" value="1" max="{{ $product->stock }}"/>
                                {{--</li>--}}
                                {{--<li>--}}

                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <input type="hidden" name="name" value="{{ $product->name }}">
                                    <input type="hidden" name="price" value="{{ $product->price }}">

                                    <input type="submit" name="submit" value="Add to cart" class="button" />

                                {{--</li>--}}
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection