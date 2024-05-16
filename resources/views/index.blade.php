@extends('layouts.main')
@push('description')
Discover unparalleled brand transformation and growth with Brand Boosters USA. We specialize in crafting unique strategies, designs, and marketing solutions.    
@endpush
@push('keywords')
Brand Boosters USA, Brand Boosters US, Brand Boosters, Brandbooster, BrandBoosters, BrandBoostersUSA 
@endpush
@push('rel')
https://brandboosters.us/
@endpush
@push('title')
    <title>Innovative Marketing Solutions | Brand Boosters USA</title>
@endpush
@section('main-section')
    <section id="hero-section">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6 header-text" style="margin: auto;">
                    <h1 class="animate__animated animate__bounce">
                        <strong>Brand Boosters USA</strong> Your Success Partner in <strong>Digital Realm</strong>
                    </h1>
                    <p>At Brand Boosters USA, our experienced workforce helps all sizes of businesses reach new heights of
                        success worldwide with exceptional marketing strategies that drive tangible results.</p>
                    <div class="wow mt-5">
                        <a href="https://www.trustpilot.com/review/brandboosters.us" target="_blank"><img
                                src="assets/img/trust-b.png" alt="trustpilot"></a>
                        <img src="assets/img/google-b.png" alt="google partner">
                        <img src="assets/img/bings-logo.webp" alt="bings">
                        <img src="assets/img/barklogo-dark.png" alt="bark" style="filter:brightness(100)">
                        <img src="assets/img/thumbtack.png" alt="thumbtack">
                    </div>
                    <div class="btn-brandBoosters">
                        <a href="{{ route('services') }}">
                            Explore Your Brand
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="header-img">
                        <lottie-player class="animate__animated animate__zoomIn"
                            src="https://lottie.host/47763903-ffa6-49cf-be0f-18d048158995/kZoNAxktv5.json"
                            background="transparent" speed="1" style="width: 100%;" loop autoplay></lottie-player>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about-section" class="pt-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 text-center about-head">
                    <div data-aos="fade-up" data-aos-duration="1500">
                        <img src="assets/img/about-head.png" alt="about-image" width="100%">
                    </div>
                    <h2>About Us</h2>
                </div>
            </div>
        </div>
        <div class="about-wrapper">
            <div class="about-1">
                <figure>
                    <img src="assets/img/about-1.png" alt="about image" width="100%">
                </figure>
            </div>
            <div class="divider"></div>
            <div class="about-2 d-flex flex-column align-items-center justify-content-center">
                <div class="about-body">
                    <p>Know Us better</p>
                    <h2>FROM <strong>SOCIAL MEDIA</strong> TO <strong>SEO,</strong> WE'VE GOT YOU
                        <strong>COVERED</strong>
                    </h2>
                    <p>Brand Boosters USA is a dynamic marketing agency dedicated to reaching out to new heights of success.
                        We are a team of marketing experts who thrive on helping our clients build strong brand identities,
                        engage their target audiences, and achieve sustainable growth. We have a passion for creativity and
                        a commitment to delivering exceptional results.</p>
                    <p>Our distinct combination of innovative strategies, data-driven insights, and a customer-centric
                        approach distinguishes us in the industry. We don't just create marketing campaigns at Brand
                        Boosters USA; we also create success stories. Join us on the path to elevating your brand and
                        growing your business.</p>
                    <div class="btn-brandBoosters">
                        <a href="{{ route('about') }}">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services-section" class="pt-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 text-center">
                    <div data-aos="fade-up" data-aos-duration="1500">
                        <img src="assets/img/services-head.png" alt="about-image" width="100%">
                    </div>
                    <h2>Services That Drive Tangible Results</h2>
                </div>
            </div>
        </div>
        <div class="prices-wrapper">
            <div class="card card-graphic" data-aos="zoom-out" data-aos-duration="1500">
                <h4>Logo Design</h4>
                <p>Your logo is the public face of your company. Allow our creative wizards to create a one-of-a-kind
                    insignia that represents your soul, leaving an unforgettable impact on hearts and minds.</p>
                <br>
                <div class="btn-card">
                    <a href="{{ route('logo') }}">Read More</a>
                </div>
            </div>
            <div class="card card-graphic" data-aos="zoom-out" data-aos-duration="1500">
                <h4>Graphic Design</h4>
                <p>Our graphic designers create compelling designs that convey a clear message to the targeted audience and
                    drive tangible results.</p>
                <br>
                <div class="btn-card">
                    <a href="{{ route('graphics') }}">Read More</a>
                </div>
            </div>
            <div class="card card-video" data-aos="zoom-out" data-aos-duration="1500">
                <h4>video Animation</h4>
                <p>Our animation services cover both 2D and 3D, providing a wide range of creative options. We bring your
                    ideas to life with precision and flair, from the charming simplicity of 2D animation to the immersive
                    depth of 3D visuals.</p>
                <br>
                <div class="btn-card">
                    <a href="{{ route('animation2D') }}">Read More</a>
                </div>
            </div>
            <div class="card card-marketing" data-aos="zoom-out" data-aos-duration="1500">
                <h4>SEO</h4>
                <p>Brand Boosters' SEO specialists can unlock your website's potential by increasing online visibility, driving organic traffic, and generating leads.</p>
                <br>
                <div class="btn-card">
                    <a href="{{ route('ecommerce') }}">Read More</a>
                </div>
            </div>
            <div class="card card-mobile" data-aos="zoom-out" data-aos-duration="1500">
                <h4>mobile Application
                    development</h4>
                <p>Take a step forward with intelligent mobile apps that engage and delight consumers. Our development
                    wizards produce apps that combine creativity and usability, providing a consistent experience with each
                    touch.</p>
                <br>
                <div class="btn-card">
                    <a href="{{ route('mobile') }}">Read More</a>
                </div>
            </div>
            <div class="card card-web" data-aos="zoom-out" data-aos-duration="1500">
                <h4>WordPress Design and Development </h4>
                <p>Our WordPress design and development services transform your ideas and goals into innovative and engaging websites. We focus on user-friendly interfaces, responsive designs, and seamless functionality to create a creative digital experience. 
                </p>
                <br>
                <div class="btn-card">
                    <a href="{{ route('wordpress') }}">Read More</a>
                </div>
            </div>
            <div class="card card-commerce" data-aos="zoom-out" data-aos-duration="1500">
                <h4>E-commerece</h4>
                <p>With our e-commerce solutions, you can up your online selling game. Integrate user-friendly interfaces
                    and secure payment channels seamlessly to create a shopping experience that keeps customers coming back.
                </p>
                <br>
                <div class="btn-card">
                    <a href="{{ route('ecommerce') }}">Read More</a>
                </div>
            </div>
            <div class="card card-web" data-aos="zoom-out" data-aos-duration="1500">
                <h4>Website Design And
                    Development</h4>
                <p>Your digital storefront is your first impression; make it memorable. Our skilled designers and developers
                    create visually attractive and effective websites that captivate visitors and convert them into devoted
                    clients.</p>
                <br>
                <div class="btn-card">
                    <a href="{{ route('web') }}">Read More</a>
                </div>
            </div>
            
            <div class="card card-marketing" data-aos="zoom-out" data-aos-duration="1500">
                <h4>Branding</h4>
                <p>We offer exceptional branding services that make your brand’s identity strong and innovative. We create compelling narratives, memorable logos, and brand strategies that resonate with your target audience. 
                </p>
                <br>
                <div class="btn-card">
                    <a href="{{ route('branding') }}">Read More</a>
                </div>
            </div>
        </div>
        <x-portfolio-uk />
    </section>

    <section class="cta-sndwrp">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="txtwrp">
                        <h2 class="main-heading">Brand Boosters USA: Guiding Your Success Every Step of the Way!</h2>
                        <p class="main-pera">If you have lost track then there is no need to be worried because our experts
                            are always just a call or message away to provide your consultation for your business goals.
                        </p>
                    </div>
                    <div class="btnwrp pt-4">
                        <a class="btn-outline-brandBoosters" onclick="setButtonURL()" href="javascript:void(0)">Chat With
                            Us</a>
                        <span class="btn-brandBoosters">
                            <a href="tel:+3159074273">(315) 907-4273</a>
                        </span>
                        <a class="btn-outline-brandBoosters" href="{{ route('contact') }}">Let's Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-our-packages />
    <x-testimonial />

    <x-footer />
@endsection
