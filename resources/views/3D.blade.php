@extends('layouts.main')
@push('description')
Explore the wonders of 3D video animation with Brand Boosters USA. Your goal is our animation - cooperation that brings stories to life.    
@endpush
@push('keywords')
3d animation video services, 3d video animation services, professional 3d videos animation services, 3D animation online, 3D product animation video, online 3d animation maker
@endpush
@push('rel')
https://brandboosters.us/3d-animations
@endpush
@push('title')
    <title>Professional 3D Video Animation Services | Brand Boosters USA</title>
@endpush
@section('main-section')
    <section class="hero-other">
        <h1 class="animate__animated animate__jackInTheBox">3D Animation</h1>
    </section>

    <section id="portfolio-body">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6 py-5" style="margin: auto;">
                    <h2 style="color:#f80404;">Use Professional 3D Video Animation Services to Unleash Your Creativity</h2>
                    <p style="color:#fff;">Our experienced animators have a sharp eye for detail and a desire to be creative. We take pride in providing quality 3D video animation services that not only meet but surpass your expectations. We take into account the uniqueness of each project and tailor our approach to your business brand to make sure your animation stands out in the crowded digital market of today.</p>
                </div>
                <div class="col-12 col-md-12 col-lg-6 py-5">
                    <img src="assets/img/3d-1.png" alt="image" width="100%">
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
                    <h2 class="pb-5"> Elevate Your Business With 3D Video Animation</h2>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="row">
                        <div class="col-2">
                            <img src="assets/img/custom-logo-design.svg" alt="image" width="100%">
                        </div>
                        <div class="col-10">
                            <h5>3D Animation Video Services</h5>
                            <p class="txt-wrap fw-light">Our expert individuals specialize in creating 3D animations that are not only visually appealing but also effectively express your brand's story. We customize our services to match your unique needs, whether they be for marketing, education, entertainment, or any other reason.
                            </p>
                        </div>
                        <div class="col-2">
                            <img src="assets/img/animated-logo-design.svg" alt="image" width="100%">
                        </div>
                        <div class="col-10">
                            <h5>3D Product Animation Video</h5>
                            <p class="txt-wrap fw-light">With the help of our 3D product animation videos, you can improve your product presentations. Present your products from every viewpoint, emphasizing their characteristics and advantages in a way that will stick in the minds of potential clients.</p>
                        </div>
                        <div class="col-2">
                            <img src="assets/img/3d-logo-design.svg" alt="image" width="100%">
                        </div>
                        <div class="col-10">
                            <h5>Online 3D Animation Maker</h5>
                            <p class="txt-wrap fw-light"> Use our user-friendly 3D animation creator to embrace the convenience of online creating. You can create captivating animations for your brand in only a few minutes, even without any prior animation knowledge. Make your brand come to life online by letting your creativity run wild.</p>
                        </div>
                        <div class="col-2">
                            <img src="assets/img/custom-illustration.svg" alt="image" width="100%">
                        </div>
                        <div class="col-10">
                            <h5>Conceptualization</h5>
                            <p class="txt-wrap fw-light"> Our creative team works together to generate ideas and concepts that best express the message of your business.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <img src="assets/img/2d-2.png" alt="image" width="100%">
                </div>
            </div>
        </div>
    </section>
    <x-testimonial />
    <x-footer />
@endsection
