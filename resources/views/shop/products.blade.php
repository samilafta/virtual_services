@extends('layouts.shop')

@section('title')
    Shop
    @parent
@stop

@section('shop-content')

    <div class="page-head_agile_info_w3l page-head_agile_info_w3l-2">

    </div>
    <!-- .breadcumb-area start -->
    <div class="services-breadcrumb">
        <div class="agile_inner_breadcrumb">
            <div class="container">
                <ul class="w3_short">
                    <li>
                        <a href="{{ route('index') }}">Home</a>
                        <i>|</i>
                    </li>
                    <li>Products</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="ads-grid py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">
            <!-- tittle heading -->

            <!-- //tittle heading -->
            <div class="row">
                <!-- product left -->
                <div class="agileinfo-ads-display col-lg-12">
                    <div class="wrapper">
                        <!-- first section -->
                        <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
                            {{--<h3 class="heading-tittle text-center font-italic">New Brand Mobiles</h3>--}}
                            <div class="row">

                                @foreach($products as $product)

                                    <div class="col-md-4 product-men mt-5">
                                        <div class="men-pro-item simpleCart_shelfItem">
                                            <div class="men-thumb-item text-center">
                                                <img src="{{ asset($product->image) }}" alt="" height="180px" width="250px">
                                                <div class="men-cart-pro">
                                                    <div class="inner-men-cart-pro">
                                                        {{--<a href="single.html" class="link-product-add-cart">Quick View</a>--}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info-product text-center border-top mt-4">
                                                <h4 class="pt-1">
                                                    <a href="{{ route('shop.product.detail', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                                </h4>
                                                <div class="info-product-price my-2">
                                                    <span class="item_price">GHS {{ $product->price }}</span>
                                                </div>
                                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                    <form action="{{ route('shop.addtocart') }}" method="POST" class="side-by-side">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $product->id }}">
                                                        <input type="hidden" name="name" value="{{ $product->name }}">
                                                        <input type="hidden" name="price" value="{{ $product->price }}">
                                                        <input type="hidden" name="quantity" value="1">

                                                        <input type="submit" name="submit" value="Add to cart" class="button btn" />

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                            </div>
                        </div>
                        <!-- //first section -->
                        <!-- third section -->
                        <div class="product-sec1 product-sec2 px-sm-5 px-3">
                            <div class="row">
                                <h3 class="col-md-4 effect-bg">Summer Carnival</h3>
                                <p class="w3l-nut-middle">Get Extra 10% Off</p>
                                <div class="col-md-8 bg-right-nut">
                                    <img src="{{ asset('shop/images/image1.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- //third section -->
                        <!-- fourth section -->
                    </div>
                </div>
                <!-- //product left -->

                <!-- product right -->
            </div>
        </div>
    </div>

@endsection





{{--@foreach ($products->chunk(4) as $items)--}}
    {{--<div class="row">--}}
        {{--@foreach ($items as $product)--}}
            {{--<div class="col-md-3">--}}
                {{--// html to render a product--}}
            {{--</div> <!-- end col-md-3 -->--}}
        {{--@endforeach--}}
    {{--</div> <!-- end row -->--}}
{{--@endforeach--}}