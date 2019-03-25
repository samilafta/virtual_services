@extends('layouts.shop')

@section('title')
    {{ $product->name }}
    @parent
@stop

@section('shop-content')

    <!-- .breadcumb-area start -->
    <div class="breadcumb-area bg-img-4 ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-wrap text-center">
                        <h2>{{ $product->name }}</h2>
                        <ul>
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li><span>Product Detail</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- single-product-area start-->
    <div class="single-product-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-single-img">
                        <div class="product-active owl-carousel">
                            <div class="item">
                                <img src="{{ asset($product->image) }}" alt="">
                            </div>
                        </div>
                        <div class="product-thumbnil-active  owl-carousel">
                            <div class="item">
                                <img src="{{ asset($product->image) }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-single-content">
                        <h3>{{ $product->name }}</h3>
                        <div class="rating-wrap fix">
                            <span class="pull-left">GHS {{ $product->price }}</span>
                        </div>
                        <p>{!! $product->description !!}}</p>
                        <ul class="input-style">
                            <form action="{{ route('shop.addtocart') }}" method="POST" class="side-by-side">
                                {!! csrf_field() !!}
                                <li class="quantity cart-plus-minus">
                                    <input type="text" name="quantity" value="1"/>
                                </li>
                                <li>

                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <input type="hidden" name="name" value="{{ $product->name }}">
                                    <input type="hidden" name="price" value="{{ $product->price }}">

                                    <button type="submit" class="btn btn-warning">Add to Cart</button>

                                </li>
                            </form>
                        </ul>
                        <ul class="cetagory">
                            <li>Category:</li>
                            <li><a href="{{ route('shop.category', ['id' => $product->category->id]) }}">{{ $product->category->name }}</a></li>
                        </ul>
                        {{--<ul class="socil-icon">--}}
                            {{--<li>Share :</li>--}}
                            {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                            {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                            {{--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                            {{--<li><a href="#"><i class="fa fa-instagram"></i></a></li>--}}
                            {{--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                        {{--</ul>--}}
                    </div>
                </div>
            </div>
            <div class="row mt-60">
                <div class="col-12">
                    <div class="single-product-menu">
                        <ul class="nav">
                            <li><a class="active" data-toggle="tab" href="#description">Description</a> </li>
                            {{--<li><a data-toggle="tab" href="#tag">Faq</a></li>--}}
                            {{--<li><a data-toggle="tab" href="#review">Review</a></li>--}}
                        </ul>
                    </div>
                </div>
                <div class="col-12">
                    <div class="tab-content">
                        <div class="tab-pane active" id="description">
                            <div class="description-wrap">
                                <p>{!! $product->description !!}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- single-product-area end-->
    <!-- featured-product-area start -->
    {{--<div class="featured-product-area">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-12">--}}
                    {{--<div class="section-title">--}}
                        {{--<h2>Featured Product</h2>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-lg-3 col-sm-6 col-12">--}}
                    {{--<div class="featured-product-wrap">--}}
                        {{--<div class="featured-product-img">--}}
                            {{--<img src="assets/images/product/1.jpg" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="featured-product-content">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-7">--}}
                                    {{--<h3><a href="shop.html">Unique Collection</a></h3>--}}
                                    {{--<p>$219.56</p>--}}
                                {{--</div>--}}
                                {{--<div class="col-5 text-right">--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="cart.html"><i class="fa fa-shopping-cart"></i></a></li>--}}
                                        {{--<li><a href="cart.html"><i class="fa fa-heart"></i></a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-sm-6 col-12">--}}
                    {{--<div class="featured-product-wrap">--}}
                        {{--<div class="featured-product-img">--}}
                            {{--<img src="assets/images/product/2.jpg" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="featured-product-content">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-7">--}}
                                    {{--<h3><a href="shop.html">Candle Stand</a></h3>--}}
                                    {{--<p>$354.75</p>--}}
                                {{--</div>--}}
                                {{--<div class="col-5 text-right">--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="cart.html"><i class="fa fa-shopping-cart"></i></a></li>--}}
                                        {{--<li><a href="cart.html"><i class="fa fa-heart"></i></a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-sm-6 col-12">--}}
                    {{--<div class="featured-product-wrap">--}}
                        {{--<div class="featured-product-img">--}}
                            {{--<img src="assets/images/product/3.jpg" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="featured-product-content">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-7">--}}
                                    {{--<h3><a href="shop.html">Small Chair</a></h3>--}}
                                    {{--<p>$214.80</p>--}}
                                {{--</div>--}}
                                {{--<div class="col-5 text-right">--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="cart.html"><i class="fa fa-shopping-cart"></i></a></li>--}}
                                        {{--<li><a href="cart.html"><i class="fa fa-heart"></i></a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-sm-6 col-12">--}}
                    {{--<div class="featured-product-wrap">--}}
                        {{--<div class="featured-product-img">--}}
                            {{--<img src="assets/images/product/4.jpg" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="featured-product-content">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-7">--}}
                                    {{--<h3><a href="shop.html">Wonder Watch</a></h3>--}}
                                    {{--<p>$241.00</p>--}}
                                {{--</div>--}}
                                {{--<div class="col-5 text-right">--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="cart.html"><i class="fa fa-shopping-cart"></i></a></li>--}}
                                        {{--<li><a href="cart.html"><i class="fa fa-heart"></i></a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <!-- featured-product-area end -->


@endsection