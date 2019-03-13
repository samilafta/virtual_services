@extends('layouts.shop')

@section('title')
    Home
    @parent
@stop

@section('shop-content')

    <!-- slider-area start -->
    <div class="slider-area">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-inner slide-inner1">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-8 col-lg-9 col-12">
                                    <div class="slider-content">
                                        <h2 data-swiper-parallax="-500">New Amazing Collection <span>2018</span></h2>
                                        <p data-swiper-parallax="-400">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin</p>
                                        <a href="shop.html" data-swiper-parallax="-300">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-inner slide-inner2">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-8 col-lg-9 col-12">
                                    <div class="slider-content">
                                        <h2 data-swiper-parallax="-500">New Amazing Collection <span>2018</span></h2>
                                        <p data-swiper-parallax="-400">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin</p>
                                        <a href="shop.html" data-swiper-parallax="-300">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-inner slide-inner3">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-8 col-lg-9 col-12">
                                    <div class="slider-content">
                                        <h2 data-swiper-parallax="-500">New Amazing Collection <span>2018</span></h2>
                                        <p data-swiper-parallax="-400">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin</p>
                                        <a href="shop.html" data-swiper-parallax="-300">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- slider-area end -->
    <!-- featured-area start -->
    <div class="featured-area">
        <div class="container">
            <div class="row grid ">
                <div class="col-lg-4 items col-md-6 col-12">
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
                <div class="col-lg-8 items col-md-6 col-12">
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
                <div class="col-lg-4 items col-md-6 col-12">
                    <div class="featured-wrap">
                        <div class="featured-img">
                            <img src="{{ asset($third_cat->image) }}" alt="">
                        </div>
                        <div class="featured-content">
                            <h2>{{ $third_cat->name }}</h2>
                            <a href="{{ route('shop.category', ['id' => $third_cat->id]) }}">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 items col-md-6 col-12">
                    <div class="featured-wrap">
                        <div class="featured-img">
                            <img src="{{ asset($fourth_cat->image) }}" alt="">
                        </div>
                        <div class="featured-content">
                            <h2>{{ $fourth_cat->name }}</h2>
                            <a href="{{ route('shop.category', ['id' => $fourth_cat->id]) }}">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 items col-md-6 col-12">
                    <div class="featured-wrap">
                        <div class="featured-img">
                            <img src="{{ asset($fifth_cat->image) }}" alt="">
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
    <!-- product-area end -->
    <!-- banner-area start -->
    <div class="banner-area bg-img-1">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xl-6 col-12">
                    <div class="banner-wrap">
                        <p>Only For This Month</p>
                        <h2>Save <span>50%</span> Off Sale </h2>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner-area end -->
    <!-- product-area start -->
    <div class="product-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Our Popular Product</h2>
                        <img src="{{ asset('shop/assets/images/section-title.png') }}" alt="">
                    </div>
                </div>
            </div>
            <ul class="row">
                <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                    <div class="product-wrap">
                        <div class="product-img">
                            <span>Sale</span>
                            <img src="{{ asset('shop/assets/images/product/1.jpg') }}" alt="">
                            <div class="product-icon flex-style">
                                <ul>
                                    <li><a data-toggle="modal" data-target="#exampleModalCenter" href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="wishlist.html"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="cart.html"><i class="fa fa-shopping-bag"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="Single-product.html">Lovely Blue Dress</a></h3>
                            <p class="pull-left">$125
                                <del>$156</del>
                            </p>
                            <ul class="pull-right d-flex">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                    <div class="product-wrap">
                        <div class="product-img">
                            <span>New</span>
                            <img src="{{ asset('shop/assets/images/product/2.jpg') }}" alt="">
                            <div class="product-icon flex-style">
                                <ul>
                                    <li><a data-toggle="modal" data-target="#exampleModalCenter" href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="wishlist.html"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="cart.html"><i class="fa fa-shopping-bag"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="Single-product.html">Lovely Blue Dress</a></h3>
                            <p class="pull-left">$125
                                <del>$156</del>
                            </p>
                            <ul class="pull-right d-flex">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                    <div class="product-wrap">
                        <div class="product-img">
                            <span>Sale</span>
                            <img src="{{ asset('shop/assets/images/product/3.jpg') }}" alt="">
                            <div class="product-icon flex-style">
                                <ul>
                                    <li><a data-toggle="modal" data-target="#exampleModalCenter" href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="wishlist.html"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="cart.html"><i class="fa fa-shopping-bag"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="Single-product.html">Lovely Blue Dress</a></h3>
                            <p class="pull-left">$125
                                <del>$156</del>
                            </p>
                            <ul class="pull-right d-flex">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                    <div class="product-wrap">
                        <div class="product-img">
                            <span>New</span>
                            <img src="{{ asset('shop/assets/images/product/4.jpg') }}" alt="">
                            <div class="product-icon flex-style">
                                <ul>
                                    <li><a data-toggle="modal" data-target="#exampleModalCenter" href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="wishlist.html"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="cart.html"><i class="fa fa-shopping-bag"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="Single-product.html">Lovely Blue Dress</a></h3>
                            <p class="pull-left">$125
                                <del>$156</del>
                            </p>
                            <ul class="pull-right d-flex">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="col-xl-3 col-lg-4 col-sm-6 col-12  moreload">
                    <div class="product-wrap">
                        <div class="product-img">
                            <span>Sale</span>
                            <img src="{{ asset('shop/assets/images/product/5.jpg') }}" alt="">
                            <div class="product-icon flex-style">
                                <ul>
                                    <li><a data-toggle="modal" data-target="#exampleModalCenter" href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="wishlist.html"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="cart.html"><i class="fa fa-shopping-bag"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="Single-product.html">Lovely Blue Dress</a></h3>
                            <p class="pull-left">$125
                                <del>$156</del>
                            </p>
                            <ul class="pull-right d-flex">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="col-xl-3 col-lg-4 col-sm-6 col-12  moreload">
                    <div class="product-wrap">
                        <div class="product-img">
                            <span>New</span>
                            <img src="{{ asset('shop/assets/images/product/6.jpg') }}" alt="">
                            <div class="product-icon flex-style">
                                <ul>
                                    <li><a data-toggle="modal" data-target="#exampleModalCenter" href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="wishlist.html"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="cart.html"><i class="fa fa-shopping-bag"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="Single-product.html">Lovely Blue Dress</a></h3>
                            <p class="pull-left">$125
                                <del>$156</del>
                            </p>
                            <ul class="pull-right d-flex">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="col-xl-3 col-lg-4 col-sm-6 col-12  moreload">
                    <div class="product-wrap">
                        <div class="product-img">
                            <span>Sale</span>
                            <img src="{{ asset('shop/assets/images/product/7.jpg') }}" alt="">
                            <div class="product-icon flex-style">
                                <ul>
                                    <li><a data-toggle="modal" data-target="#exampleModalCenter" href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="wishlist.html"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="cart.html"><i class="fa fa-shopping-bag"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="Single-product.html">Lovely Blue Dress</a></h3>
                            <p class="pull-left">$125
                                <del>$156</del>
                            </p>
                            <ul class="pull-right d-flex">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="col-xl-3 col-lg-4 col-sm-6 col-12  moreload">
                    <div class="product-wrap">
                        <div class="product-img">
                            <span>New</span>
                            <img src="{{ asset('shop/assets/images/product/8.jpg') }}" alt="">
                            <div class="product-icon flex-style">
                                <ul>
                                    <li><a data-toggle="modal" data-target="#exampleModalCenter" href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="wishlist.html"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="cart.html"><i class="fa fa-shopping-bag"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="Single-product.html">Lovely Blue Dress</a></h3>
                            <p class="pull-left">$125
                                <del>$156</del>
                            </p>
                            <ul class="pull-right d-flex">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="col-xl-3 col-lg-4 col-sm-6 col-12  moreload">
                    <div class="product-wrap">
                        <div class="product-img">
                            <span>Sale</span>
                            <img src="{{ asset('shop/assets/images/product/5.jpg') }}" alt="">
                            <div class="product-icon flex-style">
                                <ul>
                                    <li><a data-toggle="modal" data-target="#exampleModalCenter" href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="wishlist.html"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="cart.html"><i class="fa fa-shopping-bag"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="Single-product.html">Lovely Blue Dress</a></h3>
                            <p class="pull-left">$125
                                <del>$156</del>
                            </p>
                            <ul class="pull-right d-flex">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="col-xl-3 col-lg-4 col-sm-6 col-12  moreload">
                    <div class="product-wrap">
                        <div class="product-img">
                            <span>New</span>
                            <img src="{{ asset('shop/assets/images/product/6.jpg') }}" alt="">
                            <div class="product-icon flex-style">
                                <ul>
                                    <li><a data-toggle="modal" data-target="#exampleModalCenter" href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="wishlist.html"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="cart.html"><i class="fa fa-shopping-bag"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="Single-product.html">Lovely Blue Dress</a></h3>
                            <p class="pull-left">$125
                                <del>$156</del>
                            </p>
                            <ul class="pull-right d-flex">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="col-xl-3 col-lg-4 col-sm-6 col-12  moreload">
                    <div class="product-wrap">
                        <div class="product-img">
                            <span>Sale</span>
                            <img src="{{ asset('shop/assets/images/product/7.jpg') }}" alt="">
                            <div class="product-icon flex-style">
                                <ul>
                                    <li><a data-toggle="modal" data-target="#exampleModalCenter" href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="wishlist.html"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="cart.html"><i class="fa fa-shopping-bag"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="Single-product.html">Lovely Blue Dress</a></h3>
                            <p class="pull-left">$125
                                <del>$156</del>
                            </p>
                            <ul class="pull-right d-flex">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="col-xl-3 col-lg-4 col-sm-6 col-12  moreload">
                    <div class="product-wrap">
                        <div class="product-img">
                            <span>Sale</span>
                            <img src="{{ asset('shop/assets/images/product/8.jpg') }}" alt="">
                            <div class="product-icon flex-style">
                                <ul>
                                    <li><a data-toggle="modal" data-target="#exampleModalCenter" href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="wishlist.html"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="cart.html"><i class="fa fa-shopping-bag"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="Single-product.html">Lovely Blue Dress</a></h3>
                            <p class="pull-left">$125
                                <del>$156</del>
                            </p>
                            <ul class="pull-right d-flex">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="col-12 text-center">
                    <a class="loadmore-btn" href="javascript:void(0);">Load More</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- product-area end -->

    <!-- subscribe-area start -->
    <div class="subscribe-area">
        <div class="subscribe-img d-none d-xl-block">
            <img src="{{ asset('shop/assets/images/subscribe.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5 offset-xl-1 col-md-6">
                    <div class="subscribe-content">
                        <h2>Subscribe to Newsletter</h2>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6">
                    <div class="subscribe-form">
                        <form id="mc-form" class="sform">
                            <div class="form_msg">
                                <label class="mt10" for="mc-email"></label>
                            </div>
                            <input type="email" name="email" id="mc-email" placeholder="Enter Your Email" required>
                            <input type="submit" name="submit" value="subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- subscribe-area end -->


@endsection