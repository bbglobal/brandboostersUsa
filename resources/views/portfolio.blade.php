@extends('layouts.main')
@push('description')
Our top concern is developing a solid strategy to help you achieve your business's goals. Explore our techniques for top-tier outcomes in our portfolio.
@endpush
@push('keywords')
Portfolio, our portfolio
@endpush
@push('rel')
https://brandboosters.us/portfolio
@endpush
@push('title')
    <title> Portfolio | Brand Boosters USA </title>
@endpush
@section('main-section')
    <section class="hero-other">
        <h1 class="animate__animated animate__jackInTheBox">Portfolio</h1>
    </section>
    <section id="portfolio-body">
        <x-portfolio-uk />
    </section>
    <x-our-packages />
    <x-testimonial />
    <x-footer />
@endsection
