@extends('layouts.pocetna')

@section('header-info')
    <div class="header-info-left">
        <ul>     
            <li class="title"><span class="flaticon-energy"></span> trending-title</li>
            <li>{{$randomVesti[0]->naslov}}</li>
        </ul>
    </div>
    <div class="header-info-right">
        <ul class="header-date">
            <li><span class="flaticon-calendar"></span> +880166 253 232</li>
        </ul>
    </div>
@endsection

@section('logo-banner')
        <!-- Logo -->
    <div class="col-xl-3 col-lg-3 col-md-3 d-none d-md-block">
        <div class="logo">
            <a href="index.html"><img src="/template/news-master/assets/img/logo/logo.png" alt=""></a>
        </div>
    </div>

    <!-- Header Banner -->
    <div class="col-xl-9 col-lg-9 col-md-9">
        <div class="header-banner f-right ">
            <img src="/template/news-master/assets/img/gallery/header_card.png" alt="">
        </div>
    </div>
@endsection

@section('navigation')
    <!-- sticky -->
    <div class="sticky-logo">
        <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
    </div>
    <!-- Main-menu -->
    <div class="main-menu d-none d-md-block">
        <nav>                  
            <ul id="navigation">
                <li><a href="index.html">Početna</a></li>
                <li><a href="about.html">Naš tim</a></li>
                <li><a href="categori.html">Kategorije</a></li>
                <li><a href="latest_news.html">Predviđanja</a></li>
                <li><a href="#">Stranice</a>
                    <ul class="submenu">
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog_details.html">Blog Details</a></li>
                        <li><a href="elements.html">Element</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Kontakt</a></li>
            </ul>
        </nav>
    </div>
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
                            <h2><a href="latest_news.html" data-animation="fadeInUp"data-delay=".4s" data-duration="1000ms">
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
                    <img src="{{$randomVesti[0]->image_thumbnail}}" alt="">
                    <div class="trend-top-cap trend-top-cap2">
                        <span class="bgb">FASHION</span>
                        <h2><a href="latest_news.html">
                            {{$randomVesti[0]->naslov}}</a></h2>
                        <p>{{$randomVesti[0]->datum}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-6 col-sm-6">
            <div class="trending-top mb-30">
                <div class="trend-top-img">
                    <img src="{{$randomVesti[1]->image_thumbnail}}" alt="">
                    <div class="trend-top-cap trend-top-cap2">
                        <span class="bgg">TECH </span>
                        <h2><a href="latest_news.html">
                            {{$randomVesti[1]->naslov}}</a></h2>
                        <p>{{$randomVesti[1]->datum}}</p>
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
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                                    {{$kategorija -> naziv}}</a>
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
                                        <img src="{{ asset('template/news-master/assets/img/gallery/whats_news_details1.png') }}" alt="">
                                    </div>
                                    <div class="whates-caption">
                                        <h4><a href="latest_news.html">Secretart for Economic Air plane that looks like</a></h4>
                                        <span>by Alice cloe   -   Jun 19, 2020</span>
                                        <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Right single caption -->
                            <div class="col-xl-6 col-lg-12">
                                <div class="row">
                                    @foreach($vesti as $vest)
                                        <!-- single -->
                                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                            <div class="whats-right-single mb-20">
                                                <div class="whats-right-img">
                                                    <img src="{{$vest->image_thumbnail}}" alt="">
                                                </div>
                                                <div class="whats-right-cap">
                                                    <span class="colorb">FASHION</span>
                                                    <h4><a href="latest_news.html">{{$vest->naslov}}</a></h4>
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
@endsection

@section('footer-content-1')
    <div class="single-footer-caption mb-50">
        <div class="single-footer-caption mb-30">
            <!-- logo -->
            <div class="footer-logo">
                <a href="index.html"><img src="{{ asset('template/news-master/assets/img/logo/logo2_footer.png') }}" alt=""></a>
            </div>
            <div class="footer-tittle">
                <div class="footer-pera">
                    <p class="info1">Lorem ipsum dolor sit amet, nsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    <p class="info2">198 West 21th Street, Suite 721 New York,NY 10010</p>
                    <p class="info2">Phone: +95 (0) 123 456 789 Cell: +95 (0) 123 456 789</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer-content-2')
    <div class="single-footer-caption mb-50">
        <div class="footer-tittle">
            <h4>Popular post</h4>
        </div>
        <!-- Popular post -->
        <div class="whats-right-single mb-20">
            <div class="whats-right-img">
                <img src="{{ asset('template/news-master/assets/img/gallery/footer_post1.png') }}" alt="">
            </div>
            <div class="whats-right-cap">
                <h4><a href="latest_news.html">Scarlett’s disappointment at latest accolade</a></h4>
                <p>Jhon  |  2 hours ago</p> 
            </div>
        </div>
        <!-- Popular post -->
        <div class="whats-right-single mb-20">
            <div class="whats-right-img">
                <img src="{{ asset('template/news-master/assets/img/gallery/footer_post2.png') }}" alt="">
            </div>
            <div class="whats-right-cap">
                <h4><a href="latest_news.html">Scarlett’s disappointment at latest accolade</a></h4>
                <p>Jhon  |  2 hours ago</p> 
            </div>
        </div>
        <!-- Popular post -->
        <div class="whats-right-single mb-20">
            <div class="whats-right-img">
                <img src="{{ asset('template/news-master/assets/img/gallery/footer_post3.png') }}" alt="">
            </div>
            <div class="whats-right-cap">
                <h4><a href="latest_news.html">Scarlett’s disappointment at latest accolade</a></h4>
                <p>Jhon  |  2 hours ago</p> 
            </div>
        </div>
    </div>
@endsection

@section('footer-content-3')
    <div class="single-footer-caption mb-50">
        <div class="banner">
            <img src="{{ asset('template/news-master/assets/img/gallery/body_card4.png') }}" alt="">
        </div>
    </div>
@endsection
