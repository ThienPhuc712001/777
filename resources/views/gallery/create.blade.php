@extends('layouts.app')

@section('content')
    <h1>Add Image</h1>
    <form action="{{ route('gallery.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>
        <label for="image_url">Image URL:</label>
        <input type="text" name="image_url" id="image_url" required>
        <button type="submit">Add</button>
    </form>
@endsection
