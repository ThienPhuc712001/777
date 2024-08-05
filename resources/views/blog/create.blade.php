@extends('layouts.app')

@section('content')
    <h1>Create Blog Post</h1>
    <form action="{{ route('blog.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>
        <label for="content">Content:</label>
        <textarea name="content" id="content" required></textarea>
        <label for="image_url">Image URL (optional):</label>
        <input type="text" name="image_url" id="image_url">
        <button type="submit">Create</button>
    </form>
@endsection
