@extends('layouts.full-width')
@section('content-1')
@foreach($tim as $clan) 
        <div class="about-details-cap mb-50">
            <h4>{{$clan->naziv}}</h4>
            <img src="{{$clan->slika}}" alt="clan">
            <p>{{$clan->opis}} </p>
        </div>
@endforeach
@endsection 