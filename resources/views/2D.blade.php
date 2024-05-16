@extends('layouts.main')
@push('description')
Discover the wonder of 2D video animation with Brand Boosters USA. Your vision, our animation - a collaboration that brings stories to life.    
@endpush
@push('keywords')
2d animation video company, 2d video animation services, 2d animation explainer video, 2d animation video maker, 2D animation maker online, 2D animation examples, online 2d animation maker
@endpush
@push('rel')
https://brandboosters.us/2d-animations
@endpush
@push('title')
    <title>High-Quality 2D Video Animation Services | Brand Boosters</title>
@endpush
@section('main-section')
    <section class="hero-other">
        <h1 class="animate__animated animate__jackInTheBox">2D Animations</h1>
    </section>

    <section id="portfolio-body">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6 py-5" style="margin: auto;">
                    <h2 style="color:#f80404;">Discovering the Mysteries of 2D Animation Explainer Videos</h2>
                    <p style="color:#fff;">We at Brand Boosters USA understand the importance of visual storytelling. Our 2D animation explainer videos are intended to express difficult topics straightforwardly and effectively. Our team methodically produces cartoons that resonate with your audience, whether you're debuting a new product, describing a service, or displaying a process. We believe that a well-crafted explainer film can fascinate, educate, and make a lasting impression.</p>
                </div>
                <div class="col-12 col-md-12 col-lg-6 py-5">
                    <img src="assets/img/2d-1.jpg" alt="image" width="100%">
                </div>
                <div class="col-12 text-center pt-5">
                    <h2>Turning Concepts into Compelling Visuals</h2>
                    <p style="color:#fff;">Above, we have enlightened you with our capabilities. Below you can see our
                        extraordinary & modern
                        portfolio.</p>
                </div>
            </div>
            <div class="portfolio-img-warpper d-flex flex-wrap align-items-center justify-content-center mt-5">
                {{-- video --}}
                <div class="img filter web">
                    <video width="320" height="240" poster="assets/img/video/2.png" controls>
                        <source src="asstes/img/vidoe/2.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="img filter web">
                    <video width="320" height="240" poster="assets/img/video/4.png" controls>
                        <source src="assets/img/video/4.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="img filter web">
                    <video width="320" height="240" poster="assets/img/video/5.png" controls>
                        <source src="assets/img/video/5.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="img filter web">
                    <video width="320" height="240" poster="assets/img/video/3.png" controls>
                        <source src="assets/img/video/3.mp4" type="video/mp4">
                    </video>
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
            <div class="card card-price card-video filter web">
                <h4>ABSOLUTE VIDEO
                    PACKAGE</h4>
                <p>limited time offer</p>
                <div>
                    <sapn class="price">&dollar;499</sapn> <span>Only</span> <strike>&dollar; 599</strike>
                </div>
                <br>
                <ul class="list">
                    <li>30s Duration</li>
                    <li>Professional Script</li>
                    <li>Storyboard</li>
                    <li>Custom Graphics & Characters</li>
                    <li>Animation & SFX</li>
                    <li>Background Music</li>
                    <li>Background Image</li>
                    <li>Watermark logo</li>
                    <li>Resolution – HD</li>
                    <li>Voice Over Recording</li>
                    <li>Sync Voice Over</li>
                    <li>Unlimited Revisions</li>
                    <li>Turnaround time 2-3 weeks</li>
                    <li>Value Added:</li>
                    <li>Dedicated Account Manager</li>
                    <li>Unique Design Guarantee</li>
                    <li>24/7 Customer Support</li>
                    <li>100% Satisfaction Guarantee</li>
                </ul>
                <div class="btn-card">
                    <a href="{{ route('contact') }}">Choose Plan</a>
                </div>
            </div>
            <div class="card card-price card-video filter web">
                <h4>OPTIMUM VIDEO
                    PACKAGE</h4>
                <p>limited time offer</p>
                <div>
                    <sapn class="price">&dollar;999</sapn> <span>Only</span> <strike>&dollar; 1,199</strike>
                </div>
                <br>
                <ul class="list">
                    <li>Up-to 60s Duration</li>
                    <li>Professional Script</li>
                    <li>Storyboard</li>
                    <li>Custom Graphics & Characters</li>
                    <li>Animation & SFX</li>
                    <li>Background Music</li>
                    <li>Background Image</li>
                    <li>Watermark logo</li>
                    <li>Resolution – HD</li>
                    <li>Voice Over Recording</li>
                    <li>Sync Voice Over</li>
                    <li>Unlimited Revisions</li>
                    <li>Turnaround time 3-4 weeks</li>
                    <li>Value Added:</li>
                    <li>Dedicated Account Manager</li>
                    <li>Unique Design Guarantee</li>
                    <li>24/7 Customer Support</li>
                    <li>100% Satisfaction Guarantee</li>
                </ul>
                <div class="btn-card">
                    <a href="{{ route('contact') }}">Choose Plan</a>
                </div>
            </div>
            <div class="card card-price card-video filter web">
                <h4>ULTIMATE VIDEO
                    PACKAGE</h4>
                <p>limited time offer</p>
                <div>
                    <sapn class="price">&dollar;1,499</sapn> <span>Only</span> <strike>&dollar; 1,499</strike>
                </div>
                <br>
                <ul class="list">
                    <li>Up-to 120s Duration</li>
                    <li>Professional Script</li>
                    <li>Storyboard</li>
                    <li>Custom Graphics & Characters</li>
                    <li>Animation & SFX</li>
                    <li>Background Music</li>
                    <li>Background Image</li>
                    <li>Watermark logo</li>
                    <li>Resolution – HD</li>
                    <li>Voice Over Recording</li>
                    <li>Sync Voice Over</li>
                    <li>Unlimited Revisions</li>
                    <li>Turnaround time 4-6 weeks</li>
                    <li>Value Added:</li>
                    <li>Dedicated Account Manager</li>
                    <li>Unique Design Guarantee</li>
                    <li>24/7 Customer Support</li>
                    <li>100% Satisfaction Guarantee</li>
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
                    <h2 class="pb-5">Experience Seamless Creations with Our Online 2D Animation Maker</h2>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="row">
                        <div class="col-2">
                            <img src="assets/img/custom-logo-design.svg" alt="image" width="100%">
                        </div>
                        <div class="col-10">
                            <h5>Creativity</h5>
                            <p class="txt-wrap fw-light">As a prominent 2D animation movie maker, we take pleasure in our ability to create and execute novel ideas. Our skilled team creates aesthetically appealing animations that connect with your target audience and leave an impression.</p>
                        </div>
                        <div class="col-2">
                            <img src="assets/img/animated-logo-design.svg" alt="image" width="100%">
                        </div>
                        <div class="col-10">
                            <h5>Customized Solutions</h5>
                            <p class="txt-wrap fw-light">We recognize that each project is unique. As a result, we provide personalized 2D animation services to meet your requirements. We can provide you with a brief promotional video or a thorough product explainer video.</p>
                        </div>
                        <div class="col-2">
                            <img src="assets/img/3d-logo-design.svg" alt="image" width="100%">
                        </div>
                        <div class="col-10">
                            <h5>Expert Animators</h5>
                            <p class="txt-wrap fw-light">Our team of talented animators includes some of the best in the industry. Their imagination, attention to detail, and love of animation shine through in every project they work on.</p>
                        </div>
                        <div class="col-2">
                            <img src="assets/img/custom-illustration.svg" alt="image" width="100%">
                        </div>
                        <div class="col-10">
                            <h5>Online Convenience</h5>
                            <p class="txt-wrap fw-light">Looking for a 2D animation maker online? Our user-friendly platform enables you to seamlessly communicate with our animators, ensuring a hassle-free experience from concept to completion.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <img src="assets/img/2d-2.jpg" alt="image" width="100%" style="margin-top: -45px;">
                </div>
            </div>
        </div>
    </section>
    <x-testimonial />
    <x-footer />
@endsection
