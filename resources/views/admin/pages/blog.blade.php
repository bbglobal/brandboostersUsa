@extends('admin.adminLayouts.main')

@section('admin-section')
    @push('title')
        <title>Add Blog</title>
    @endpush
    <x-sidebar />
    <div class="table-responsive container">
        <a href="{{route('addBlogs')}}" class="btn btn-primary">+ Add</a>
        <caption>
            <h1 class="pt-5">Blogs</h1>
        </caption>
        <table
            class="table table-striped table-light
        table-hover
        table-borderless
        table-primary
        align-middle">
            <thead class="table-dark">
                <tr>
                    <th>S.No</th>
                    <th>Featured Image</th>
                    <th>Title</th>
                    <th>Sub Heading</th>
                    <th>Paragraph</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($blogs as $blog)
                    <tr class="table-light">
                        <td scope="row">{{ $blog->Id }}</td>
                        <td>
                            {{ $blog->featuredimg }}
                        </td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->sub1 }}</td>
                        <td>{{ $blog->para1 }}</td>
                        <td>
                            <a href="#" class="btn btn-outline-primary"><i class="fas fa-eye"></i></a>
                            <a href="#" class="btn btn-outline-success"><i class="fas fa-pen"></i></a>
                            <a href="#" class="btn btn-outline-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
{{-- {{ route('blog.edit', ['id' => $blog->blogId]) }} --}}
