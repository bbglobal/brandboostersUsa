@extends('layouts.main')
@push('description')
    Transform your website with our expert WordPress design services. We craft unique and user-friendly WordPress websites
    that captivate your audience.
@endpush
@push('keywords')
    WordPress Design Services, WordPress Design, WordPress Design Expert, Professional WordPress Design Services, Cheap
    WordPress Design Services
@endpush
@push('rel')
    https://brandboosters.us/wordpress-website-development-services
@endpush
@push('title')
    <title>Professional WordPress Design Services | Brand Boosters</title>
@endpush
@section('main-section')
    <section class="hero-other">
        <h1 class="animate__animated animate__jackInTheBox">Our Blogs</h1>
    </section>
    <section id="blogs">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="blog-card mb-3">
                        <a href="{{ route('typesOfLogos') }}">
                            <img src="{{ url('assets/img/blogs/BANNER-LOGO-01.jpg') }}" class="card-img-top" alt="7 Types of Logos"></a>
                        <div class="blog-card-body">
                            <p class="blog-card-title">
                                <a href="{{ route('typesOfLogos') }}">
                                    <small class="text-white">Logo &amp; Branding</small>
                                </a>
                            </p>
                            <h5 class="blog-card-text">
                                <a href="{{ route('typesOfLogos') }}">Revolution of NFT Art in the Creative Industry</a>
                            </h5>
                            <p class="blog-card-text"><small class="text-muted">Before jumping into the NFT art finance pool, you need to decide your art form smartly. You can avail of NFT art to represent your art.</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-footer />
@endsection
