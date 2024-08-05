@extends('layouts.app')

@section('content')
    <h1>{{ $blog->title }}</h1>
    <p>{{ $blog->content }}</p>
    @if($blog->image_url)
        <img src="{{ $blog->image_url }}" alt="{{ $blog->title }}">
    @endif
@endsection
