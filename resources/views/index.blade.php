@extends('layouts.shop')

@section('title')
    Home
    @parent
@stop

@section('shop-content')

    <!-- slider-area start -->
    {{--<div class="slider-area">--}}
        {{--<div class="swiper-container">--}}
            {{--<div class="swiper-wrapper">--}}
                {{--<div class="swiper-slide">--}}
                    {{--<div class="slide-inner slide-inner1">--}}
                        {{--<div class="container">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-xl-8 col-lg-9 col-12">--}}
                                    {{--<div class="slider-content">--}}
                                        {{--<h2 data-swiper-parallax="-500">New Amazing Collection <span>2018</span></h2>--}}
                                        {{--<p data-swiper-parallax="-400">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin</p>--}}
                                        {{--<a href="shop.html" data-swiper-parallax="-300">Shop Now</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="swiper-slide">--}}
                    {{--<div class="slide-inner slide-inner2">--}}
                        {{--<div class="container">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-xl-8 col-lg-9 col-12">--}}
                                    {{--<div class="slider-content">--}}
                                        {{--<h2 data-swiper-parallax="-500">New Amazing Collection <span>2018</span></h2>--}}
                                        {{--<p data-swiper-parallax="-400">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin</p>--}}
                                        {{--<a href="shop.html" data-swiper-parallax="-300">Shop Now</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="swiper-slide">--}}
                    {{--<div class="slide-inner slide-inner3">--}}
                        {{--<div class="container">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-xl-8 col-lg-9 col-12">--}}
                                    {{--<div class="slider-content">--}}
                                        {{--<h2 data-swiper-parallax="-500">New Amazing Collection <span>2018</span></h2>--}}
                                        {{--<p data-swiper-parallax="-400">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin</p>--}}
                                        {{--<a href="shop.html" data-swiper-parallax="-300">Shop Now</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="swiper-pagination"></div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <!-- slider-area end -->
    <!-- featured-area start -->
    <div class="featured-area">
        <div class="container">
            <div class="row grid">

                <div class="col-lg-6 items col-md-6">
                    <div class="featured-wrap">
                        <div class="featured-img">
                            <img src="{{ asset($first_cat->image) }}" alt="">
                        </div>
                        <div class="featured-content text-right">
                            <h2>{{ $first_cat->name}}</h2>
                            <a href="{{ route('shop.category', ['id' => $first_cat->id]) }}">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 items col-md-6">
                    <div class="featured-wrap">
                        <div class="featured-img">
                            <img src="{{ asset($second_cat->image) }}" alt="">
                        </div>
                        <div class="featured-content">
                            <h2>{{ $second_cat->name }}</h2>
                            <a href="{{ route('shop.category', ['id' => $second_cat->id]) }}">Shop Now</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row grid">
                <div class="col-lg-4 items col-md-4">
                    <div class="featured-wrap">
                        <div class="featured-img">
                            <img src="{{ asset($third_cat->image) }}" style="height: 250px;" alt="">
                        </div>
                        <div class="featured-content">
                            <h2>{{ $third_cat->name }}</h2>
                            <a href="{{ route('shop.category', ['id' => $third_cat->id]) }}">Shop Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 items col-md-4">
                    <div class="featured-wrap">
                        <div class="featured-img">
                            <img src="{{ asset($fourth_cat->image) }}" style="height: 250px;" alt="">
                        </div>
                        <div class="featured-content">
                            <h2>{{ $fourth_cat->name }}</h2>
                            <a href="{{ route('shop.category', ['id' => $fourth_cat->id]) }}">Shop Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 items col-md-4">
                    <div class="featured-wrap">
                        <div class="featured-img">
                            <img src="{{ asset($fifth_cat->image) }}" style="height: 250px;" alt="">
                        </div>
                        <div class="featured-content">
                            <h2>{{ $fifth_cat->name }}</h2>
                            <a href="{{ route('shop.category', ['id' => $fifth_cat->id]) }}">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- featured-area end -->
    <!-- product-area start -->
    <div class="product-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>New Arrival</h2>
                        <img src="{{ asset('shop/assets/images/section-title.png') }}" alt="">
                    </div>
                </div>
            </div>
            <ul class="row">

                @if($products->count() > 0)
                    @foreach($products as $product)

                        <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="product-wrap">
                                <div class="product-img">
                                    <img src="{{ asset($product->image) }}" alt="" height="120px"/>
                                    <div class="product-icon flex-style">
                                        <ul>
                                            <li><a href="{{ route('shop.product.detail', ['id' => $product->id]) }}"><i class="fa fa-eye"></i></a></li>
                                            {{--<li><a href="wishlist.html"><i class="fa fa-heart"></i></a></li>--}}
                                            <li>
                                                <form action="{{ route('shop.addtocart') }}" method="POST" class="side-by-side">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                                    <input type="hidden" name="name" value="{{ $product->name }}">
                                                    <input type="hidden" name="price" value="{{ $product->price }}">
                                                    <input type="hidden" name="quantity" value="1">

                                                    <button type="submit"><i class="fa fa-shopping-bag"></i></button>

                                                </form>


                                            </li>
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
    <!-- product-area end -->



@endsection