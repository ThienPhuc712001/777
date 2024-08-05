@extends('layouts.app')

@section('content')
    <h1>Contact Us</h1>
    <ul>
        @foreach($contacts as $contact)
            <li>
                <a href="{{ route('contact.show', $contact) }}">{{ $contact->name }}</a>
                <a href="{{ route('contact.edit', $contact) }}">Edit</a>
                <form action="{{ route('contact.destroy', $contact) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
