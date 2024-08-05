@extends('layouts.app')

@section('content')
    <h1>Gallery</h1>
    <a href="{{ route('gallery.create') }}">Add Image</a>
    <ul>
        @foreach($galleries as $gallery)
            <li>
                <a href="{{ route('gallery.show', $gallery) }}">{{ $gallery->title }}</a>
                <a href="{{ route('gallery.edit', $gallery) }}">Edit</a>
                <form action="{{ route('gallery.destroy', $gallery) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
