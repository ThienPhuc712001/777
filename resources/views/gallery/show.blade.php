@extends('layouts.app')

@section('content')
    <h1>{{ $gallery->title }}</h1>
    <img src="{{ $gallery->image_url }}" alt="{{ $gallery->title }}">
@endsection
