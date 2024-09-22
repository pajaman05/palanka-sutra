@extends('layouts.right-sidebar')



<!-- Main sections -->
@section('content')
<div class="about-area2 gray-bg pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 whats-news-wrapper">
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

                    <!-- Sidebar -->
                    <div class="col-lg-4">  
                        @include('layouts.moj-template.partials.sidebar')
                    </div>
            

        </div>
    </div>
</div>
@endsection











