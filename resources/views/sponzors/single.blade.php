<!DOCTYPE html>
@extends('layouts.full-width')
@section('content-1')
    @foreach($sponzori as $sponzor) 
        <div class="about-details-cap mb-50">
            <h4>{{$sponzor->naziv}}</h4>
            <img src="{{$sponzor->slika}}" alt="clan">
            <p>{{$sponzor->opis}}</p>
        </div>
    @endforeach
@endsection