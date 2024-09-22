@extends('layouts.pocetna')


@section('header-info')
    {{$popularneVesti[0]->naslov}}
@endsection

@section('trending-slider')
    <div class="slider-active">
        @foreach($vesti as $vest)
            <!-- Single -->
            <div class="single-slider">
                <div class="trending-top mb-30">
                    <div class="trend-top-img">
                        <img src="{{$vest->image_thumbnail}}" alt="">
                        <div class="trend-top-cap">
                            <span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms">
                                </span>
                            <h2><a href="{{ route('vest.singleById', ['id' => $vest->id]) }}" data-animation="fadeInUp"data-delay=".4s" data-duration="1000ms">
                                {{$vest->naslov}}</a></h2>
                            <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">
                                {{$vest->datum}}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>        
@endsection


@section('trending-sidebar')
    <div class="row">
        <div class="col-lg-12 col-md-6 col-sm-6">
            <div class="trending-top mb-30">
                <div class="trend-top-img">
                    <img src="{{$popularneVesti[0]->image_thumbnail}}" alt="">
                    <div class="trend-top-cap trend-top-cap2">
                        <span class="bgb">FASHION</span>
                        <h2><a href="{{ route('vest.singleById', ['id' => $popularneVesti[0]->id]) }}">
                            {{$popularneVesti[0]->naslov}}</a></h2>
                        <p>{{$popularneVesti[0]->datum}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-6 col-sm-6">
            <div class="trending-top mb-30">
                <div class="trend-top-img">
                    <img src="{{$popularneVesti[1]->image_thumbnail}}" alt="">
                    <div class="trend-top-cap trend-top-cap2">
                        <span class="bgg">TECH </span>
                        <h2><a href="{{ route('vest.singleById', ['id' => $popularneVesti[1]->id]) }}">
                            {{$popularneVesti[1]->naslov}}</a></h2>
                        <p>{{$popularneVesti[1]->datum}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('trending')
    <div class="whats-news-wrapper">
        <!-- Heading & Nav Button -->
        <div class="row justify-content-between align-items-end mb-15">
            <div class="col-xl-4">
                <div class="section-tittle mb-30">
                    <h3>Nova predviđanja</h3>
                </div>
            </div>
            <div class="col-xl-8 col-md-9">
                <div class="properties__button">
                    <!--Nav Button  -->                                            
                    <nav>                                                 
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            @foreach($kategorije as $kategorija)
                                <a  class="nav-item nav-link active" 
                                    id="nav-home-tab" 
                                    data-toggle="tab" 
                                    href="{{ route('kategorija.singleById', ['id' => $kategorija->id]) }}" 
                                    role="tab" 
                                    aria-controls="nav-home" 
                                    aria-selected="true">
                                    {{ $kategorija->naziv }}
                                </a>
                            @endforeach
                        </div>
                    </nav>
                    <!--End Nav Button  -->
                </div>
            </div>
        </div>
        <!-- Tab content -->
        <div class="row">
            <div class="col-12">
                <!-- Nav Card -->
                <div class="tab-content" id="nav-tabContent">
                    <!-- card one -->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">       
                        <div class="row">
                            <!-- Left Details Caption -->
                            <div class="col-xl-6 col-lg-12">
                                <div class="whats-news-single mb-40 mb-40">
                                    <div class="whates-img">
                                        <img src="{{$popularneVesti[0]->image_thumbnail}}" alt="randomVest">
                                    </div>
                                    <div class="whates-caption">
                                        <h4><a href="{{ route('vest.single', ['slug' => $popularneVesti[0]->slug]) }}">{{ $popularneVesti[0]->naslov }}</a></h4>
                                        <span>{{ $popularneVesti[0]->datum}}</span>
                                        <p>{{ Str::limit($popularneVesti[0]->sazetak, 150) }}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Right single caption -->
                            <div class="col-xl-6 col-lg-12">
                                <div class="row">
                                    @foreach($vesti->take(4) as $vest)
                                        <!-- single -->
                                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                            <div class="whats-right-single mb-20">
                                                <div class="whats-right-img">
                                                    <img src="{{$vest->image_thumbnail}}" alt="" style="width: 128px; height: 104px;">
                                                </div>
                                                <div class="whats-right-cap">
                                                    <span class="colorb">FASHION</span>
                                                    <h4><a href="{{ route('vest.singleById', ['id' => $vest->id]) }}">{{$vest->naslov}}</a></h4>
                                                    <p>{{$vest->datum}}</p> 
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- End Nav Card -->
            </div>
        </div>
    </div>
    <div class="banner-one mt-20 mb-30">
        <img src="{{ asset('template/news-master/assets/img/gallery/body_card1.png') }}" alt="">
    </div>
@endsection

@section('trending-sidebar-2')
    <!-- Flow Social -->
    <div class="single-follow mb-45">
        <div class="single-box">
            <div class="follow-us d-flex align-items-center">
                <div class="follow-social">
                    <a href="#"><img src="{{ asset('template/news-master/assets/img/news/icon-fb.png') }}" alt=""></a>
                </div>
                <div class="follow-count">  
                    <span>8,045</span>
                    <p>Fans</p>
                </div>
            </div> 
            <div class="follow-us d-flex align-items-center">
                <div class="follow-social">
                    <a href="#"><img src="{{ asset('template/news-master/assets/img/news/icon-tw.png') }}" alt=""></a>
                </div>
                <div class="follow-count">
                    <span>8,045</span>
                    <p>Fans</p>
                </div>
            </div>
            <div class="follow-us d-flex align-items-center">
                <div class="follow-social">
                    <a href="#"><img src="{{ asset('template/news-master/assets/img/news/icon-ins.png') }}" alt=""></a>
                </div>
                <div class="follow-count">
                    <span>8,045</span>
                    <p>Fans</p>
                </div>
            </div>
            <div class="follow-us d-flex align-items-center">
                <div class="follow-social">
                    <a href="#"><img src="{{ asset('template/news-master/assets/img/news/icon-yo.png') }}" alt=""></a>
                </div>
                <div class="follow-count">
                    <span>8,045</span>
                    <p>Fans</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Most Recent Area -->
    <div class="most-recent-area">
        <!-- Section Title -->
        <div class="small-tittle mb-20">
            <h4>Most Recent</h4>
        </div>
        <!-- Details -->
        <div class="most-recent mb-40">
            <div class="most-recent-img">
                <img src="{{ asset('template/news-master/assets/img/gallery/most_recent.png') }}" alt="">
                <div class="most-recent-cap">
                    <span class="bgbeg">Vogue</span>
                    <h4><a href="latest_news.html">What to Wear: 9+ Cute Work <br>
                        Outfits to Wear This.</a></h4>
                    <p>Jhon  |  2 hours ago</p>
                </div>
            </div>
        </div>
        <!-- Single -->
        <div class="most-recent-single">
            <div class="most-recent-images">
                <img src="{{ asset('template/news-master/assets/img/gallery/most_recent1.png') }}" alt="">
            </div>
            <div class="most-recent-capt">
                <h4><a href="latest_news.html">Scarlett’s disappointment at latest accolade</a></h4>
                <p>Jhon  |  2 hours ago</p>
            </div>
        </div>
        <!-- Single -->
        <div class="most-recent-single">
            <div class="most-recent-images">
                <img src="{{ asset('template/news-master/assets/img/gallery/most_recent2.png') }}" alt="">
            </div>
            <div class="most-recent-capt">
                <h4><a href="latest_news.html">Most Beautiful Things to Do in Sidney with Your BF</a></h4>
                <p>Jhon  |  3 hours ago</p>
            </div>
        </div>
    </div>
@endsection

@section('banner-1')
    <div class="home-banner2 d-none d-lg-block">
        <img src="{{ asset('template/news-master/assets/img/gallery/body_card2.png') }}" alt="">
    </div>
@endsection

@section('section-title-2')
    <div class="small-tittle mb-30">
        <h4>Most Popular</h4>
    </div>
@endsection

@section('weekly-news-2')
    <div class="weekly2-news-active d-flex">
        <!-- Single -->
        <div class="weekly2-single">
            <div class="weekly2-img">
                <img src="{{ asset('template/news-master/assets/img/gallery/weeklyNews1.png') }}" alt="">
            </div>
            <div class="weekly2-caption">
                <h4><a href="#">Scarlett’s disappointment at latest accolade</a></h4>
                <p>Jhon  |  2 hours ago</p>
            </div>
        </div> 
        <!-- Single -->
        <div class="weekly2-single">
            <div class="weekly2-img">
                <img src="{{ asset('template/news-master/assets/img/gallery/weeklyNews2.png') }}" alt="">
            </div>
            <div class="weekly2-caption">
                <h4><a href="#">Scarlett’s disappointment at latest accolade</a></h4>
                <p>Jhon  |  2 hours ago</p>
            </div>
        </div> 
        <!-- Single -->
        <div class="weekly2-single">
            <div class="weekly2-img">
                <img src="{{ asset('template/news-master/assets/img/gallery/weeklyNews3.png') }}" alt="">
            </div>
            <div class="weekly2-caption">
                <h4><a href="#">Scarlett’s disappointment at latest accolade</a></h4>
                <p>Jhon  |  2 hours ago</p>
            </div>
        </div> 
        <!-- Single -->
        <div class="weekly2-single">
            <div class="weekly2-img">
                <img src="{{ asset('template/news-master/assets/img/gallery/weeklyNews2.png') }}" alt="">
            </div>
            <div class="weekly2-caption">
                <h4><a href="#">Scarlett’s disappointment at latest accolade</a></h4>
                <p>Jhon  |  2 hours ago</p>
            </div>
        </div> 
    </div>
@endsection

@section('section-title-3')
    <div class="section-tittle mb-30">
        <h3>Trending  News</h3>
    </div>
@endsection

@section('recent-articles')
        <!-- Single -->
        <div class="single-recent">
            <div class="what-img">
                <img src="{{ asset('template/news-master/assets/img/gallery/tranding1.png') }}" alt="">
            </div>
            <div class="what-cap">
                <h4><a href="latest_news.html">What to Expect From the 2020 Oscar Nominations</a></h4>
                <p>Jun 19, 2020</p>
                <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><span class="flaticon-play-button"></span></a>
            </div>
        </div>
        <!-- Single -->
        <div class="single-recent">
            <div class="what-img">
                <img src="{{ asset('template/news-master/assets/img/gallery/tranding2.png') }}" alt="">
            </div>
            <div class="what-cap">
                <h4><a href="latest_news.html">What to Expect From the 2020 Oscar Nominations</a></h4>
                <p>Jun 19, 2020</p>
                <a class="popup-video" href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><span class="flaticon-play-button"></span></a>
            </div>
        </div>
        <!-- Single -->
        <div class="single-recent">
            <div class="what-img">
                <img src="{{ asset('template/news-master/assets/img/gallery/tranding1.png') }}" alt="">
            </div>
            <div class="what-cap">
                <h4><a href="latest_news.html">What to Expect From the 2020 Oscar Nominations</a></h4>
                <p>Jun 19, 2020</p>
                <a class="popup-video" href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><span class="flaticon-play-button"></span></a>
            </div>
        </div>
        <!-- Single -->
        <div class="single-recent">
            <div class="what-img">
                <img src="{{ asset('template/news-master/assets/img/gallery/tranding2.png') }}" alt="">
            </div>
            <div class="what-cap">
                <h4><a href="latest_news.html">What to Expect From the 2020 Oscar Nominations</a></h4>
                <p>Jun 19, 2020</p>
                <a class="popup-video" href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><span class="flaticon-play-button"></span></a>
            </div>
        </div>
@endsection

@section('video')
    <div class="video-items text-center">
        <video controls>
            <source src="{{ asset('template/news-master/assets/video/news2.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="video-items text-center">
        <video controls>
            <source src="{{ asset('template/news-master/assets/video/news1.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="video-items text-center">
        <video controls>
            <source src="{{ asset('template/news-master/assets/video/news3.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="video-items text-center">
        <video controls>
            <source src="{{ asset('template/news-master/assets/video/news1.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="video-items text-center">
        <video controls>
            <source src="{{ asset('template/news-master/assets/video/news3.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
@endsection

@section('video-info')
    <div class="single-video">
        <video controls>
            <source src="{{ asset('template/news-master/assets/video/news2.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="video-intro">
            <h4>Old Spondon News - 2020 </h4>
        </div>
    </div>
    <div class="single-video">
        <video controls>
            <source src="{{ asset('template/news-master/assets/video/news1.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="video-intro">
            <h4>Banglades News Video </h4>
        </div>
    </div>
    <div class="single-video">
        <video controls>
            <source src="{{ asset('template/news-master/assets/video/news3.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="video-intro">
            <h4>Latest Video - 2020 </h4>
        </div>
    </div>
    <div class="single-video">
        <video controls>
            <source src="{{ asset('template/news-master/assets/video/news1.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="video-intro">
            <h4>Spondon News -2019 </h4>
        </div>
    </div>
    <div class="single-video">
        <video controls>
            <source src="{{ asset('template/news-master/assets/video/news3.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="video-intro">
            <h4>Latest Video - 2020</h4>
        </div>
    </div>
@endsection

@section('weekly-news-3')
    <div class="weekly3-single">
        <div class="weekly3-img">
            <img src="{{ asset('template/news-master/assets/img/gallery/weekly2News1.png') }}" alt="">
        </div>
        <div class="weekly3-caption">
            <h4><a href="{{ url('latest_news.html') }}">What to Expect From the 2020 Oscar Nomin ations</a></h4>
            <p>19 Jan 2020</p>
        </div>
    </div> 
    <div class="weekly3-single">
        <div class="weekly3-img">
            <img src="{{ asset('template/news-master/assets/img/gallery/weekly2News2.png') }}" alt="">
        </div>
        <div class="weekly3-caption">
            <h4><a href="{{ url('latest_news.html') }}">What to Expect From the 2020 Oscar Nomin ations</a></h4>
            <p>19 Jan 2020</p>
        </div>
    </div> 
    <div class="weekly3-single">
        <div class="weekly3-img">
            <img src="{{ asset('template/news-master/assets/img/gallery/weekly2News3.png') }}" alt="">
        </div>
        <div class="weekly3-caption">
            <h4><a href="{{ url('latest_news.html') }}">What to Expect From the 2020 Oscar Nomin ations</a></h4>
            <p>19 Jan 2020</p>
        </div>
    </div>
    <div class="weekly3-single">
        <div class="weekly3-img">
            <img src="{{ asset('template/news-master/assets/img/gallery/weekly2News4.png') }}" alt="">
        </div>
        <div class="weekly3-caption">
            <h4><a href="{{ url('latest_news.html') }}">What to Expect From the 2020 Oscar Nomin ations</a></h4>
            <p>19 Jan 2020</p>
        </div>
    </div> 
    <div class="weekly3-single">
        <div class="weekly3-img">
            <img src="{{ asset('template/news-master/assets/img/gallery/weekly2News2.png') }}" alt="">
        </div>
        <div class="weekly3-caption">
            <h4><a href="{{ url('latest_news.html') }}">What to Expect From the 2020 Oscar Nomin ations</a></h4>
            <p>19 Jan 2020</p>
        </div>
    </div> 
@endsection

@section('banner-2')
    <div class="banner-one">
        <img src="{{ asset('template/news-master/assets/img/gallery/body_card3.png') }}" alt="">
    </div>
@endsection
