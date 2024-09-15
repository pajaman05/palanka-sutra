@extends('layouts.right-sidebar')


<!-- Header sections -->
@include('partials.header-sections')

<!-- Main sections -->
@section('vesti')
<div class="tab-content" id="nav-tabContent">
    <div class="about-right mb-90">
        <div class="heading-news mb-30 pt-30">


            <!-- flesh poruka za komentar -->
            <div>
                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
    
    
            @if(session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
            @endif
            </div>


           <h3> {{$vest->naslov}} </h3>
        </div>
        <div class="about-img">
            <img src="{{ asset($vest->image_full) }}" alt="Full Image">
        </div>
        <div class="about-prea">
            {!! $vest->sadrzaj !!}
        </div> 
    </div>
    
    @include('layouts.moj-template.partials.komentari')
    @include('layouts.moj-template.partials.komentar-forma')
</div>
@endsection


<!-- Footer sections -->
@include('partials.footer-sections')










