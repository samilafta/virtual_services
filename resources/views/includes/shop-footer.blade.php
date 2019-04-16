
<!-- footer-area strat -->
<footer class="footer-area">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="footer-widget footer-logo">
                        <img src="{{ asset('shop/assets/images/virtual2.png') }}" alt="">
                        <p>
                            Dexcel Media Solutions seeks to offer solutions to IT services using the Virtual IT Service portal.
                            Giving customers the advantages of online shopping and prioritising their needs and demands.
                        </p>
                        <ul class="socil-icon d-flex">
                            <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="footer-widget footer-contact">
                        <h2>Contact us</h2>
                        <ul>
                            <li><i class="fa fa-map-marker"></i>House No. 09 , Ashale Botwe </li>
                            <li><i class="fa fa-phone"></i>+233 0240 731 851 <span>+233 0557 950 967</span> </li>
                            <li><i class="fa fa-envelope-o"></i>dexcel.media16@gmail.com</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="footer-buttom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <p>&copy;2019 Virtual IT Service All Right Reserved</p>
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

<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
    (function(){ var widget_id = 'I0lQFeuvKY';var d=document;var w=window;function l(){
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
        s.src = '//code.jivosite.com/script/widget/'+widget_id
        ; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}
        if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}
        else{w.addEventListener('load',l,false);}}})();
</script>
<!-- {/literal} END JIVOSITE CODE -->

</body>

</html>