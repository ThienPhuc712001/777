@extends('layouts.app')

@section('content')
    <h1>Blog</h1>
    <a href="{{ route('blog.create') }}">Create Blog Post</a>
    <ul>
        @foreach($blogs as $blog)
            <li>
                <a href="{{ route('blog.show', $blog) }}">{{ $blog->title }}</a>
                <a href="{{ route('blog.edit', $blog) }}">Edit</a>
                <form action="{{ route('blog.destroy', $blog) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
