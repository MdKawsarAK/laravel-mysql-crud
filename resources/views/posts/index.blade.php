@extends('layouts.main')
@section('content')
    <h2>All Posts</h2>
    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-2">New Post</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Body</th>
            <th>Published At</th>
            <th>Actions</th>
        </tr>
        @foreach($posts as $post)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->body }}</td>
                <td>{{ $post->published_at }}</td>
                <td>
                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this post?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection