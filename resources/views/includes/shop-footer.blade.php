
<!-- footer-area strat -->
<footer class="footer-area">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="footer-widget footer-logo">
                        <img src="{{ asset('shop/assets/images/virtual2.png') }}" alt="">
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from</p>
                        <ul class="socil-icon d-flex">
                            <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                {{--<div class="col-lg-3 col-sm-6 col-12">--}}
                    {{--<div class="footer-widget footer-menu">--}}
                        {{--<h2>Spacial Menu</h2>--}}
                        {{--<ul>--}}
                            {{--<li><a href="account.html">My Account</a></li>--}}
                            {{--<li><a href="checkout.html">Checkout</a></li>--}}
                            {{--<li><a href="javascript:void(0)">Help</a></li>--}}
                            {{--<li><a href="javascript:void(0)">Support</a></li>--}}
                            {{--<li><a href="javascript:void(0)">FAQ</a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="footer-widget footer-contact">
                        <h2>Contact us</h2>
                        <ul>
                            <li><i class="fa fa-map-marker"></i>House No. 09 , Ashale Botwe </li>
                            <li><i class="fa fa-phone"></i>+233 0245 65 7852 <span>+233 0547 57 6916</span> </li>
                            <li><i class="fa fa-envelope-o"></i>virtualservices@gmail.com</li>
                        </ul>
                    </div>
                </div>
                {{--<div class="col-lg-3 col-sm-6 col-12">--}}
                    {{--<div class="footer-widget instagram">--}}
                        {{--<h2>Join to Newsletter</h2>--}}
                        {{--<ul class="d-flex">--}}
                            {{--<li><a href="#"><img src="{{ asset('shop/assets/images/instragram/1.jpg') }}" alt=""></a></li>--}}
                            {{--<li><a href="#"><img src="{{ asset('shop/assets/images/instragram/2.jpg') }}" alt=""></a></li>--}}
                            {{--<li><a href="#"><img src="{{ asset('shop/assets/images/instragram/3.jpg') }}" alt=""></a></li>--}}
                            {{--<li><a href="#"><img src="{{ asset('shop/assets/images/instragram/4.jpg') }}" alt=""></a></li>--}}
                            {{--<li><a href="#"><img src="{{ asset('shop/assets/images/instragram/5.jpg') }}" alt=""></a></li>--}}
                            {{--<li><a href="#"><img src="{{ asset('shop/assets/images/instragram/6.jpg') }}" alt=""></a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
    <div class="footer-buttom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <p>&copy;2019 Virtual Services All Right Reserved</p>
                </div>
                <div class="col-md-6 col-12">
                    <ul class="d-flex">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><a href="{{ route('shop.products') }}">Shop</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-area end -->
<!-- jquery latest version -->
<script src="{{ asset('shop/assets/js/vendor/jquery-2.2.4.min.js') }}"></script>
<!-- bootstrap js -->
<script src="{{ asset('shop/assets/js/bootstrap.min.js') }}"></script>
<!-- owl.carousel.2.0.0-beta.2.4 css -->
<script src="{{ asset('shop/assets/js/owl.carousel.min.js') }}"></script>
<!-- mouse_scroll.js -->
<script src="{{ asset('shop/assets/js/mouse_scroll.js') }}"></script>
<!-- scrollup.js -->
<script src="{{ asset('shop/assets/js/scrollup.js') }}"></script>
<!-- isotope.pkgd.min.js -->
<script src="{{ asset('shop/assets/js/isotope.pkgd.min.js') }}"></script>
<!-- imagesloaded.pkgd.min.js -->
<script src="{{ asset('shop/assets/js/imagesloaded.pkgd.min.js') }}"></script>
<!-- jquery.zoom.min.js -->
<script src="{{ asset('shop/assets/js/jquery.zoom.min.js') }}"></script>
<!-- swiper.min.js -->
<script src="{{ asset('shop/assets/js/swiper.min.js') }}"></script>
<!-- metisMenu.min.js -->
<script src="{{ asset('shop/assets/js/metisMenu.min.js') }}"></script>
<!-- mailchimp.js -->
<script src="{{ asset('shop/assets/js/mailchimp.js') }}"></script>
<!-- jquery-ui.min.js -->
<script src="{{ asset('shop/assets/js/jquery-ui.min.js') }}"></script>
<!-- main js -->
<script src="{{ asset('shop/assets/js/scripts.js') }}"></script>

@yield("scripts")

</body>

</html>