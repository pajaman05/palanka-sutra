@extends('layouts.app')

@section('content')
    <h1>{{ $kategorija->naziv }}</h1>
    <p>{!! $kategorija->opis !!}</p>

    <h2>Vesti u ovoj kategoriji:</h2>
    <ul>
        @foreach($vesti as $vest)
            <li>
                <h3>{{ $vest->naslov }}</h3>
                <img src="{{ $vest->image_thumbnail }}" alt="{{ $vest->naslov }}">
                <p>{!! $vest->sazetak !!}</p>
                <p>Datum objave: {{ $vest->datum }}</p>
                <a href="{{ route('vest.single', ['slug' => $vest->slug]) }}">
                    Pročitaj više
                </a>
            </li>
        @endforeach
    </ul>
@endsection
