@extends('layouts.app')

@section('content')
    <h1>Edit Image</h1>
    <form action="{{ route('gallery.update', $gallery) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $gallery->title }}" required>
        <label for="image_url">Image URL:</label>
        <input type="text" name="image_url" id="image_url" value="{{ $gallery->image_url }}" required>
        <button type="submit">Update</button>
    </form>
@endsection
