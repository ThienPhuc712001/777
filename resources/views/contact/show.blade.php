@extends('layouts.app')

@section('content')
    <h1>{{ $contact->name }}</h1>
    <p>{{ $contact->email }}</p>
    <p>{{ $contact->message }}</p>
@endsection
