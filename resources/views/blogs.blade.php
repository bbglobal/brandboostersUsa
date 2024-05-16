@extends('layouts.main')
@push('description')
Discover the wonder of 2D video animation with Brand Boosters USA. Your vision, our animation - a collaboration that brings stories to life.    
@endpush
@push('keywords')
2d animation video company, 2d video animation services, 2d animation explainer video, 2d animation video maker, 2D animation maker online, 2D animation examples, online 2d animation maker
@endpush
@push('rel')
https://brandboosters.us/blogs
@endpush
@push('title')
    <title>Blogs | Brand Boosters</title>
@endpush
@section('main-section')
<section>
    <img src="{{ $blogs->featuredimg }}" alt="featuredImg">
</section>
<div class="container">
    <h1>{{ $blogs->title }}</h1>
    <p>{{ $blogs->para }}</p>

    @for ($i = 1; $i <= 15; $i++)
        <h2>{{ $blogs->sub1 }}</h2>
        <p>{{ $blogs->para }}</p>
    @endfor
</div>
@endsection
