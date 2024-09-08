@extends('layouts.full-width')
@section('content-1')
@foreach($tim as $clan) 
        <div class="about-details-cap mb-50">
            <h3>{{$clan->naziv}}</h4>
            <img src="{{$clan->slika}}" alt="clan">
            <h5>{{$clan->opis}} </h5>
        </div>
@endforeach
@endsection 