@extends('layouts.right-sidebar')


<!-- Header sections -->
@include('partials.header-sections')


<!-- Main sections -->
@section('content')
            <div class="whats-news-wrapper">
                <div class="row">
                    <div class="col-12">
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

            

                            <!-- deo za vest -->
                                    <h3> {{$vest->naslov}} </h3>
                                </div>
                                    <div class="about-img">
                                        <img src="{{ asset($vest->image_full) }}" alt="Full Image">
                                    </div>
                                    <div class="about-prea">
                                        {!! $vest->sadrzaj !!}
                                    </div> 
                            </div>

                                @include('vest.partials.komentari')
                                @include('vest.partials.komentar-forma')
                                
                        </div>
                    </div>
                </div>
            </div>
            @endsection



            <!-- Sidebar -->  
            @section('sidebar')
            @include('layouts.moj-template.partials.sidebar')
            

            <!-- U blejdu radi, u controlleru kad se unosi u bazu ne radi -->
            @if(isset($vest) && $vest->lokacija)
                @php
                    $vest->lokacija = str_replace('width="600"', 'width="100%"', $vest->lokacija);
                    $vest->lokacija = str_replace('height="450"', 'height="300"', $vest->lokacija);
                @endphp
                {!! $vest->lokacija !!}
            @endif
            @endsection


<!-- Footer sections -->
@include('partials.footer-sections')










