@extends('layouts.app')

@section('content')
    <h1>Lista kategorija</h1>
    <ul>
        @foreach($kategorije as $kategorija)
            <li>
                <h2>{{ $kategorija->naziv }}</h2>
                <p>{!! $kategorija->opis !!}</p>
                <a href="{{ route('kategorija.single', ['slug' => $kategorija->slug]) }}">
                    Pogledaj vesti u ovoj kategoriji
                </a>
            </li>
        @endforeach
    </ul>
@endsection
