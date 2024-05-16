<footer class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-3">
                <div>
                    <a href="{{ route('home') }}">
                        <img src="{{ url('assets/img/logo.png') }}" alt="logo" width="100px"></a>
                </div>
                <p style="color: #fff;">At Brand Boosters USA, we have a team of a highly professional and experienced workforce. Before starting, our strategy is to do in-depth research on new trends, industry knowledge, Statistics, and advanced approaches to drive successful and guaranteed results.</p>
            </div>
            <div class="col-12 col-md-12 col-lg-3">
                <h3>
                    Services
                </h3>
                <p>
                    <a href="{{ route('graphics') }}">Graphic Designing</a>
                </p>
                <p>
                    <a href="{{ route('web') }}">Website Design & Development</a>
                </p>
                <p>
                    <a href="{{ route('mobile') }}">Mobile Application Development</a>
                </p>
                <p>
                    <a href="{{ route('ecommerce') }}">Digital ecommerce</a>
                </p>
                <p>
                    <a href="{{ route('animation3D') }}">Video Animation</a>
                </p>
                <p>
                    <a href="{{ route('logo') }}">Logo Design</a>
                </p>
                <p>
                    <a href="{{ route('ecommerce') }}">Digital ecommerce</a>
                </p>
            </div>
            <div class="col-12 col-md-12 col-lg-3">
                <h3>Company</h3>
                <p>
                    <a href="{{ route('home') }}">Home</a>
                </p>
                <p>
                    <a href="{{ route('testimonials') }}">Testimonials</a>
                </p>
                <p>
                    <a href="{{ route('about') }}">About Us</a>
                </p>
                <p>
                    <a href="{{ route('portfolio') }}">Portfolio</a>
                </p>
                <p>
                    <a href="{{ route('contact') }}">Contact Us</a>
                </p>
            </div>
            <div class="col-12 col-md-12 col-lg-3">
                <h3>Contacts</h3>
                <div class="contact">
                    <i class="fa fa-phone" style="font-size: 20px; color:#F80404"></i>
                    <a href="tel:3159074273">(315) 907-4273</a>
                </div>
                <div class="email">
                    <i class="fa fa-envelope" style="font-size: 20px; color:#F80404"></i>
                    <a href="mailto:info@brandboosters.us">info@brandboosters.us</a>
                </div>
                <div class="location">
                    <i class="fa fa-map-marker" style="font-size: 20px; color:#F80404"></i>
                    <a href="#" target="_blank">
                        18 Georgia St, Valley Stream, NY 11580
                    </a>
                </div>
            </div>
        </div>
        <hr style="background: #fff">
        <div class="footer-end d-flex flex-wrap align-items-center justify-content-between pb-3">
            <div class="social-inner">
                <p style="color: #fff;">&copy; All Rights Reserved.
                    <a href="mailto:info@brandboosters.us">Brand Boosters Global</a>
                </p>
            </div>
            <div class="social-inner">
                <a href="https://www.facebook.com/BrandboostersGlobal/" target="_blank">
                    <img src="{{ url('assets/img/fb.png') }}" alt="facebook">
                </a>
                <a href="https://www.instagram.com/brandboosterglobal/" target="_blank">
                    <img src="{{ url('assets/img/insta.png') }}" alt="instagram">
                </a>
                <a href="https://www.linkedin.com/company/brand-boosters-global-ltd" target="_blank">
                    <img src="{{ url('assets/img/in.png') }}" alt="linkedin">
                </a>
                <a href="https://www.pinterest.com/brandboostersglobal/" target="_blank">
                    <img src="{{ url('assets/img/print.png') }}" alt="pinterest">
                </a>
                <a href="https://www.youtube.com/@BrandBoosters-Global" target="_blank">
                    <img src="{{ url('assets/img/tube.png') }}" alt="youtube">
                </a>
                <a href="https://twitter.com/BBGlobal_" target="_blank">
                    <img src="{{ url('assets/img/twitter.png') }}" alt="twitter">
                </a>
            </div>
            <div class="social-inner">
                <div>
                    <a href="{{route('policy')}}">Privacy Policy</a>
                </div>
                {{-- <div>
                    <a href="{{route('policy')}}">Terms and Conditions</a>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="floatbutton">
        <div class="btns_wrap">
            <a href="javascript:" class="chat_wrap" onclick="setButtonURL()">
                <span class="icoo"><i class="fa fa-comment"></i></span>
                <span>Chat With Us</span>
            </a>
            <a href="tel:+3159074273" class="call_wrap">
                <span class="icoo"><i class="fa fa-phone"></i></span>
                <span> (315) 907-4273 </span>
            </a>
        </div>
        <a class="ordr-frm" href="javascript:">
            <div class="clickbutton">
                <div class="crossplus">60% Off On All Services</div>
            </div>
        </a>
    </div>
</footer>
</div>
<script src="{{ url('assets/js/script.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    AOS.init();
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/64f8a6cea91e863a5c120577/1h9lkn63f';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->
</body>

</html>
