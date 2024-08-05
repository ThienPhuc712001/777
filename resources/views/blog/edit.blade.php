@extends('layouts.app')

@section('content')
    <h1>Edit Blog Post</h1>
    <form action="{{ route('blog.update', $blog) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $blog->title }}" required>
        <label for="content">Content:</label>
        <textarea name="content" id="content" required>{{ $blog->content }}</textarea>
        <label for="image_url">Image URL (optional):</label>
        <input type="text" name="image_url" id="image_url" value="{{ $blog->image_url }}">
        <button type="submit">Update</button>
    </form>
@endsection
