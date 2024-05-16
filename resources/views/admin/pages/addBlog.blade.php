@extends('admin.adminLayouts.main')

@section('admin-section')
    @push('title')
        <title>Add Blog</title>
    @endpush
    <x-sidebar />
    <section class="container">
        <h2>Post a Blog</h2>
        <form id="form" method="post" action="{{ route('addBlog') }}" enctype="multipart/form-data" class="text-start">
            @csrf
            <div class="input-group input-group-outline my-3">
                <input type="file" name="featuredimg" class="form-control" placeholder="Featured Image">
            </div>
            <span class="text-danger">
                @error('featuredimg')
                    {{ $message }}
                @enderror
            </span>
            <div class="input-group input-group-outline my-3">
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ old('title') }}">
            </div>
            <span class="text-danger">
                @error('title')
                    {{ $message }}
                @enderror
            </span>
            <div class="input-group input-group-outline mb-3">
                <input type="text" name="sub1" class="form-control" placeholder="Sub Heading">
            </div>
            <span class="text-danger">
                @error('sub1')
                    {{ $message }}
                @enderror
            </span>
            <div class="input-group input-group-outline mb-3">
                <textarea name="para1" class="form-control" placeholder="Paragraph" cols="30" rows="10"></textarea>
            </div>
            <span class="text-danger">
                @error('para1')
                    {{ $message }}
                @enderror
            </span>
            @if ($message = Session::get('success'))
                <div class="text-success">
                    {{ $message }}
                </div>
            @endif
            <div class="text-center">
                <button class="btn bg-gradient-primary w-10 my-4 mb-2">Post</button>
            </div>
        </form>
        <button id="add-section" class="btn btn-primary">+ Add Section</button>
    </section>
@endsection
