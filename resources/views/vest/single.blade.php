@extends('layouts.right-sidebar')


<!-- Header sections -->
@include('partials.header-sections')

<!-- Main sections -->
@section('vesti')
<div class="tab-content" id="nav-tabContent">
    <div class="about-right mb-90">
        <div class="heading-news mb-30 pt-30">
           <h3> {{$vest->naslov}} </h3>
        </div>
        <div class="about-img">
            <img src="{{ asset($vest->image_full) }}" alt="Full Image">
        </div>
        <div class="about-prea">
            {!! $vest->sadrzaj !!}
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
@endsection






@section('komentari')
    <div class="comments-area mt-5">
        <h4>{{ $vest->komentari->count() }} Komentara</h4>
        @foreach($vest->komentari as $komentar)
            <div class="comment-list">
                <div class="single-comment justify-content-between d-flex">
                    <div class="user justify-content-between d-flex">
                        <div class="thumb">
                            <img src="{{ asset('template/news-master/assets/img/comment/comment_' . $komentar->user_id . '.png') }}" alt="">
                        </div>
                        <div class="desc">
                            <p class="comment">
                                {{ $komentar->sadrzaj }}
                            </p>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center">


                                    @if($komentar->autor)
                                        <h5>
                                            <a href="#">{{ $komentar->autor->name }}</a>
                                        </h5>
                                    @else
                                        <h5>
                                            <a href="#">Unknown User</a>
                                        </h5>
                                    @endif

                                    

                                    <p class="date">{{ $komentar->created_at->format('F j, Y \a\t g:i a') }}</p>
                                </div>
                                <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    
    @include('layouts.moj-template.partials.komentari')
    @include('layouts.moj-template.partials.komentar-forma')
</div>
@endsection


<!-- Footer sections -->
@include('partials.footer-sections')










