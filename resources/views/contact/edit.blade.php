@extends('layouts.app')

@section('content')
    <h1>Edit Message</h1>
    <form action="{{ route('contact.update', $contact) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $contact->name }}" required>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ $contact->email }}" required>
        <label for="message">Message:</label>
        <textarea name="message" id="message" required>{{ $contact->message }}</textarea>
        <button type="submit">Update</button>
    </form>
@endsection
