@extends('layouts.right-sidebar')





@section('vesti')
    <div class="about-right mb-90">
        <div class="heading-news mb-30 pt-30">
           <h3> {{$vest->naslov}} </h3>
        </div>
        <div class="about-img">
            <img src="{{$vest->image_full}}" alt="">
        </div>
        <div class="about-prea">
            {!!$vest->sadrzaj!!}
        </div> 


        <!-- nebitan sharing sekcija -->
        <div class="social-share pt-30">
            <div class="section-tittle">
                <h3 class="mr-20">Share:</h3>
                <ul>
                    <li><a href="#"><img src="{{ asset('template/news-master/assets/img/news/icon-ins.png') }}" alt="Instagram"></a></li>
                    <li><a href="#"><img src="{{ asset('template/news-master/assets/img/news/icon-fb.png') }}" alt="Facebook"></a></li>
                    <li><a href="#"><img src="{{ asset('template/news-master/assets/img/news/icon-tw.png') }}" alt="Twitter"></a></li>
                    <li><a href="#"><img src="{{ asset('template/news-master/assets/img/news/icon-yo.png') }}" alt="YouTube"></a></li>
                </ul>
            </div>
        </div>
    </div>

    
    @include('layouts.moj-template.partials.komentari')
    @include('layouts.moj-template.partials.komentar-forma')

@endsection













