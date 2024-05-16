@extends('layouts.main')
@push('description')
WBrand Boosters USA offers customized and unique branding and stationary services to increase your brand visibility and awareness.    
@endpush
@push('keywords')
branded stationery, best stationery brands, stationery brands USA, top stationery brands, top stationery brands in USA, stationery brands, luxury stationery brands
@endpush
@push('rel')
https://brandboosters.us/branding-services
@endpush
@push('title')
    <title>Best Stationery Brands by Brand Boosters USA </title>
@endpush
@section('main-section')
    <section class="hero-other">
        <h1 class="animate__animated animate__jackInTheBox">Branding</h1>
    </section>

    <section id="services-body">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6">
                    <img src="assets/img/services-08.png" alt="image" width="100%">
                </div>
                <div class="col-12 col-md-12 col-lg-6" style="margin: auto;">
                    <h2 style="color:#f80404;">Digital Marketing Solutions That Produce Results</h2>
                    <p style="color:#fff;">In a world where digital communication reigns supreme, the tactile beauty of stationery has an enduring allure. It's more than simply paper and ink; it's a reflection of your personality and a testimonial to your attention to detail. At Brand Boosters USA, we recognize the importance of stationery as a brand ambassador. Our selection of the top stationery brands in the USA represents our commitment to delivering you the highest representations of style, sophistication, and professionalism.
                    </p>
                </div>
            </div>

            <div class="row my-grid my-5">
                <div class="col-12 col-md-12 col-lg-6">
                    <p>We are here for you</p>
                    <h4>We recognize the importance of cost-effectiveness, especially for startups and small businesses.</h4>
                    <div class="py-4">
                        <span class="btn-brandBoosters">
                            <a href="{{ route('contact') }}">Get Started</a>
                        </span>
                        <span class="btn-brandBoosters">
                            <a href="tel:+315907-4273"> (315) 907-4273</a>
                        </span>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <img class="cta" src="assets/img/lp-cta.png" alt="image">
                </div>
            </div>

        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Our Packages</h2>
                    <p style="color:#fff;">Discover the art of affordability, where exclusive digital art <br />
                        and design facilities are meticulously tailored to your unique business needs.
                    </p>
                </div>
            </div>
        </div>

        <div class="prices-wrapper">
            <div class="card card-price card-marketing filter web">
                <h4>STARTUP COLLATERAL
                    PACKAGE</h4>
                <p>limited time offer</p>
                <div>
                    <sapn class="price">&dollar;99</sapn> <span>Only</span> <strike>&dollar; 130</strike>
                </div>
                <br>
                <ul class="list">
                    <li>2 Stationery Design Set</li>
                    <li>FREE Fax Template</li>
                    <li>Print Ready Formats</li>
                    <li>UNLIMITED Revisions</li>
                    <li>Value Added:</li>
                    <li>100% Satisfaction Guarantee</li>
                    <li>100% Money Back Guarantee *</li>
                </ul>
                <div class="btn-card">
                    <a href="{{ route('contact') }}">Choose Plan</a>
                </div>
            </div>
            <div class="card card-price card-marketing filter web">
                <h4>COLLATERAL CLASSIC
                    PACKAGE</h4>
                <p>limited time offer</p>
                <div>
                    <sapn class="price">&dollar;199</sapn> <span>Only</span> <strike>&dollar; 249</strike>
                </div>
                <br>
                <ul class="list">
                    <li>2 Stationery Design Set</li>
                    <li>Brochure Design (Bi-fold/Tri-fold)</li>
                    <li>Flyer Design</li>
                    <li>UNLIMITED Revisions</li>
                    <li>Value Added:</li>
                    <li>100% Satisfaction Guarantee</li>
                    <li>100% Money Back Guarantee *</li>
                </ul>
                <div class="btn-card">
                    <a href="{{ route('contact') }}">Choose Plan</a>
                </div>
            </div>
            <div class="card card-price card-marketing filter web">
                <h4>PREMIUM COLLATERAL
                    PACKAGE</h4>
                <p>limited time offer</p>
                <div>
                    <sapn class="price">&dollar;399</sapn> <span>Only</span> <strike>&dollar; 499</strike>
                </div>
                <br>
                <ul class="list">
                    <li>Hat Design</li>
                    <li>Invoice Design</li>
                    <li>Email Signature Design</li>
                    <li>2 Stationery Design Set</li>
                    <li>Packaging Design</li>
                    <li>UNLIMITED Revisions</li>
                    <li>T-Shirt Design</li>
                    <li>Value Added:</li>
                    <li>100% Satisfaction Guarantee</li>
                    <li>100% Money Back Guarantee *</li>
                </ul>
                <div class="btn-card">
                    <a href="{{ route('contact') }}">Choose Plan</a>
                </div>
            </div>
        </div>

        <div class="btn-brandBoosters pb-5 text-center">
            <a href="{{ route('packages') }}">View all</a>
        </div>
    </section>
    <section id="foster">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center flexiblefeatures">
                    <h5>Affordability Meets Excellence</h5>
                    <h2 class="pb-5">Elevate Your Identity with Stationery Brands</h2>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="row">
                        <div class="col-2">
                            <img src="assets/img/custom-logo-design.svg" alt="image" width="100%">
                        </div>
                        <div class="col-10">
                            <h5>Client Collaboration</h5>
                            <p class="txt-wrap fw-light">We believe in working together. We collaborate closely with you throughout the process, valuing your ideas and vision at every level.</p>
                        </div>
                        <div class="col-2">
                            <img src="assets/img/animated-logo-design.svg" alt="image" width="100%">
                        </div>
                        <div class="col-10">
                            <h5>Creativity Meets Strategy</h5>
                            <p class="txt-wrap fw-light">Our approach combines creativity with strategic insights, resulting in brands that are not only physically attractive but also strategically significant.</p>
                        </div>
                        <div class="col-2">
                            <img src="assets/img/3d-logo-design.svg" alt="image" width="100%">
                        </div>
                        <div class="col-10">
                            <h5>Tailored Solutions</h5>
                            <p class="txt-wrap fw-light">We understand that each business is unique. Our solutions are tailored to your exact requirements, ensuring that your brand accurately expresses your personality.</p>
                        </div>
                        <div class="col-2">
                            <img src="assets/img/custom-illustration.svg" alt="image" width="100%">
                        </div>
                        <div class="col-10">
                            <h5>Experienced Team</h5>
                            <p class="txt-wrap fw-light">Our designers, strategists, and copywriters bring a lot of experience and skill to the table, ensuring top-tier results.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <img src="assets/img/seo-2.png" alt="image" width="100%" style="margin-top: -50px;">
                </div>
            </div>
        </div>
    </section>
    <x-testimonial />
    <x-footer />
@endsection
