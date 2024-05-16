@extends('layouts.main')

@push('title')
    <title>Brandboosters - Home</title>
@endpush
@section('main-section')
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <img src="assets/img/404_animation.gif" alt="image">
        </div>
        <div class="col-12 text-center">
            <div class="btn-brandBoosters">
                <a href="{{ route('home') }}">
                    Back to Home
                </a>
            </div>
        </div>
    </div>
</div>
@endsection