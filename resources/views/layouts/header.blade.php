<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="robots" content="follow, index" />
    <meta name="description" content="@stack('description')">
    <meta name="google-site-verification" content="Eqyz5iEDtj7gm9_LnQfz8C0wX6qjnzitc_3p0Ysr2lE" />
    <meta name="keywords" content="@stack('keywords')">
    <link rel="canonical" href="@stack('rel')" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/styles.css') }}">
    @stack('title')
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JT2SFHB43S"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-JT2SFHB43S');
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Corporation",
  "name": "Brand Boosters USA",
  "alternateName": "Brand Boosters",
  "url": "https://brandboosters.us/",
  "logo": "https://brandboosters.us/assets/img/logo.png",
  "sameAs": [
    "https://www.facebook.com/BrandboostersGlobal/",
    "https://twitter.com/BBGlobal_",
    "https://www.instagram.com/brandboosterglobal/",
    "https://www.youtube.com/@BrandBoosters-Global",
    "https://www.pinterest.com/brandboostersglobal/",
    "https://www.linkedin.com/company/brand-boosters-global-ltd"
  ]
}
</script>

</script>
<script type="application/ld+json"> 
	{ 
	"@context": "http://schema.org/", 
	"@type": "product", 
	"name": "Brand Boosters USA", 
	"image": "logo.webp", 
	"aggregateRating": { 
	"@type": "AggregateRating", 
	"ratingValue": "4.9", 
	"ratingCount": "26520" 
	} 
	}
</script>

<body>
    <!-- header starts -->
    <header>
        <nav class="top-nav">
            <ul>
                <li>
                    <i class="fa fa-phone" style="font-size: 20px; color:#F80404"></i>
                    <a href="tel:3159074273">(315) 907-4273</a>
                </li>
                <li>
                    <i class="fa fa-circle" style="font-size: 10px; color:#F80404"></i>
                    <a href="mailto:info@brandboosters.us" class="blink">Live Chat</a>
                    <i class="fa fa-circle" style="font-size: 10px; color:#F80404"></i>
                </li>
                <li>
                    <i class="fa fa-envelope" style="font-size: 20px; color:#F80404"></i>
                    <a href="mailto:info@brandboosters.us">info@brandboosters.us</a>
                </li>
            </ul>
        </nav>
    </header>
    <header id="header-sticky">
        <nav id="menu">
            <ul>
                <li>
                    <a href="{{ route('home') }}">
                        <img src="assets/img/logo.png" alt="Brand Boosters Global" width="80px">
                    </a>
                </li>
                <li>
                    <a href="{{ route('home') }}">
                        <strong>Home</strong>
                    </a>
                </li>
                <li id="services">
                    <a href="{{ route('services') }}">Services
                        <i class="fa fa-caret-down" style="color: #fff; font-size:20px"></i>
                    </a>
                    <ul class="drop-down">
                        <li class="has-sub">
                            <a href="javascript:void(0)">Graphic Designing</a>
                            <i class="fa fa-plus" style="color:#fff;"></i>
                            <ul class="inner-drop">
                                <li><a href="{{ route('graphics') }}">Graphic Designing</a></li>
                                <li><a href="{{ route('logo') }}">Logo Designing</a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a href="javascript:void(0)">Development</a>
                            <i class="fa fa-plus" style="color: #fff;"></i>
                            <ul class="inner-drop">
                                <li><a href="{{ route('web') }}">Web Developemnt</a></li>
                                <li><a href="{{ route('wordpress') }}">Wordpress Developemnt</a></li>
                                <li><a href="{{ route('mobile') }}">Mobile App Developemnt</a></li>
                                <li><a href="{{ route('ecommerce') }}">Ecommerce</a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a href="javascript:void(0)">Video Animation</a>
                            <i class="fa fa-plus" style="color: #fff;"></i>
                            <ul class="inner-drop">
                                <li><a href="{{ route('animation2D') }}">2D Animation</a></li>
                                <li><a href="{{ route('animation3D') }}">3D Animation</a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a href="javascript:void(0)">Video Animation</a>
                            <i class="fa fa-plus" style="color: #fff;"></i>
                            <ul class="inner-drop">
                                <li><a href="{{ route('branding') }}">Branding</a></li>
                                <li><a href="{{ route('ppc') }}">PPC</a></li>
                                <li><a href="{{ route('social') }}">Social Media Marketing</a></li>
                                <li><a href="{{ route('seo') }}">SEO</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('portfolio') }}">Portfolio</a>
                </li>
                <li>
                    <a href="{{ route('packages') }}">Packages</a>
                </li>
                <li>
                    <a href="{{ route('about') }}">About Us</a>
                </li>
                <li>
                    <a href="{{ route('testimonials') }}">Testimonials</a>
                </li>
                <li>
                    <a href="{{ route('blogs') }}">Blogs</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}">CONTACT US</a>
                </li>
                <li class="btn-brandBoosters">
                    <a href="{{ route('contact') }}">
                        Let's Get Started
                    </a>
                </li>
            </ul>
        </nav>
        <!-- header ends   -->

        <!-- mobile menu   -->
        <nav class="menu-extras">
            <input type="checkbox" id="check">
            <ul class="d-flex align-items-center justify-content-between" id="my-nav">
                <li>
                    <i class="fas fa-grin-beam"></i>
                    <a href="{{ url('/') }}"> <img src="assets/img/logo.png" alt="logo" width="80px">
                    </a>
                </li>
                <li>
                    <label for="check">
                        <a class="mx-3" style="cursor: pointer;">
                            <i class="fa fa-bars" id="hamberger"></i>
                        </a>
                    </label>
                </li>
            </ul>
            <ul id="menu-extra">
                <li>
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li>
                    <a href="#">
                        <label for="checkbox">
                            Services
                        </label>
                    </a>
                    <input type="checkbox" id="checkbox">
                    <i class="fa fa-caret-down" style="color:#fff;"></i>
                    <div class="menu-drop-down pt-3">
                        <div><a href="{{ route('graphics') }}">Graphics Designing</a></div>
                        <div><a href="{{ route('logo') }}">Logo Designing</a></div>
                        <div><a href="{{ route('ecommerce') }}">Ecommerce</a></div>
                        <div><a href="{{ route('web') }}">Web Developemnt</a></div>
                        <div><a href="{{ route('wordpress') }}">Wordpress Developemnt</a></div>
                        <div><a href="{{ route('mobile') }}">Mobile App Developemnt</a></div>
                        <div><a href="{{ route('animation2D') }}">2D Animation</a></div>
                        <div><a href="{{ route('animation3D') }}">3D Animation</a></div>
                        <div><a href="{{ route('branding') }}">Branding</a></div>
                        <div><a href="{{ route('ppc') }}">PPC</a></div>
                        <div><a href="{{ route('social') }}">Social Media Marketing</a></div>
                        <div><a href="{{ route('seo') }}">SEO</a></div>
                    </div>
                </li>
                <li>
                    <a href="{{ route('portfolio') }}">Portfolio</a>
                </li>
                <li>
                    <a href="{{ route('packages') }}">Packages</a>
                </li>
                <li>
                    <a href="{{ route('about') }}">About Us</a>
                </li>
                <li>
                    <a href="{{ route('testimonials') }}">Testimonials</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}">CONTACT US</a>
                </li>
                <li class="btn-brandBoosters pt-4">
                    <a href="{{ route('contact') }}">
                        Let's Get Started
                    </a>
                </li>
            </ul>
        </nav>
        <!-- mobile menu ends -->
    </header>
