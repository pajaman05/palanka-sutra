@extends('layouts.pocetna')

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
                    <img src="assets/img/trending/trending_top3.jpg" alt="">
                    <div class="trend-top-cap trend-top-cap2">
                        <span class="bgb">FASHION</span>
                        <h2><a href="latest_news.html">Secretart for Economic Air
                            plane that looks like</a></h2>
                        <p>by Alice cloe   -   Jun 19, 2020</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-6 col-sm-6">
            <div class="trending-top mb-30">
                <div class="trend-top-img">
                    <img src="assets/img/trending/trending_top4.jpg" alt="">
                    <div class="trend-top-cap trend-top-cap2">
                        <span class="bgg">TECH </span>
                        <h2><a href="latest_news.html">Secretart for Economic Air plane that looks like</a></h2>
                        <p>by Alice cloe   -   Jun 19, 2020</p>
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
                                    <img src="assets/img/gallery/whats_news_details1.png" alt="">
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
                                <!-- single -->
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                    <div class="whats-right-single mb-20">
                                        <div class="whats-right-img">
                                            <img src="assets/img/gallery/whats_right_img1.png" alt="">
                                        </div>
                                        <div class="whats-right-cap">
                                            <span class="colorb">FASHION</span>
                                            <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                            <p>Jun 19, 2020</p> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                    <div class="whats-right-single mb-20">
                                        <div class="whats-right-img">
                                            <img src="assets/img/gallery/whats_right_img2.png" alt="">
                                        </div>
                                        <div class="whats-right-cap">
                                            <span class="colorb">FASHION</span>
                                            <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                            <p>Jun 19, 2020</p> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                    <div class="whats-right-single mb-20">
                                        <div class="whats-right-img">
                                            <img src="assets/img/gallery/whats_right_img3.png" alt="">
                                        </div>
                                        <div class="whats-right-cap">
                                            <span class="colorg">FASHION</span>
                                            <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                            <p>Jun 19, 2020</p> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                    <div class="whats-right-single mb-20">
                                        <div class="whats-right-img">
                                            <img src="assets/img/gallery/whats_right_img4.png" alt="">
                                        </div>
                                        <div class="whats-right-cap">
                                            <span class="colorr">FASHION</span>
                                            <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                            <p>Jun 19, 2020</p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card two -->
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="row">
                        <!-- Left Details Caption -->
                        <div class="col-xl-6">
                            <div class="whats-news-single mb-40">
                                <div class="whates-img">
                                    <img src="assets/img/gallery/whats_right_img2.png" alt="">
                                </div>
                                <div class="whates-caption">
                                    <h4><a href="#">Secretart for Economic Air
                                        plane that looks like</a></h4>
                                    <span>by Alice cloe   -   Jun 19, 2020</span>
                                    <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Right single caption -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="row">
                                <!-- single -->
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                    <div class="whats-right-single mb-20">
                                        <div class="whats-right-img">
                                            <img src="assets/img/gallery/whats_right_img1.png" alt="">
                                        </div>
                                        <div class="whats-right-cap">
                                            <span class="colorb">FASHION</span>
                                            <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                            <p>Jun 19, 2020</p> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                    <div class="whats-right-single mb-20">
                                        <div class="whats-right-img">
                                            <img src="assets/img/gallery/whats_right_img2.png" alt="">
                                        </div>
                                        <div class="whats-right-cap">
                                            <span class="colorb">FASHION</span>
                                            <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                            <p>Jun 19, 2020</p> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                    <div class="whats-right-single mb-20">
                                        <div class="whats-right-img">
                                            <img src="assets/img/gallery/whats_right_img3.png" alt="">
                                        </div>
                                        <div class="whats-right-cap">
                                            <span class="colorg">FASHION</span>
                                            <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                            <p>Jun 19, 2020</p> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                    <div class="whats-right-single mb-20">
                                        <div class="whats-right-img">
                                            <img src="assets/img/gallery/whats_right_img4.png" alt="">
                                        </div>
                                        <div class="whats-right-cap">
                                            <span class="colorr">FASHION</span>
                                            <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                            <p>Jun 19, 2020</p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card three -->
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="row">
                        <!-- Left Details Caption -->
                        <div class="col-xl-6">
                            <div class="whats-news-single mb-40">
                                <div class="whates-img">
                                    <img src="assets/img/gallery/whats_right_img4.png" alt="">
                                </div>
                                <div class="whates-caption">
                                    <h4><a href="#">Secretart for Economic Air
                                        plane that looks like</a></h4>
                                    <span>by Alice cloe   -   Jun 19, 2020</span>
                                    <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Right single caption -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="row">
                                <!-- single -->
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                    <div class="whats-right-single mb-20">
                                        <div class="whats-right-img">
                                            <img src="assets/img/gallery/whats_right_img1.png" alt="">
                                        </div>
                                        <div class="whats-right-cap">
                                            <span class="colorb">FASHION</span>
                                            <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                            <p>Jun 19, 2020</p> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                    <div class="whats-right-single mb-20">
                                        <div class="whats-right-img">
                                            <img src="assets/img/gallery/whats_right_img2.png" alt="">
                                        </div>
                                        <div class="whats-right-cap">
                                            <span class="colorb">FASHION</span>
                                            <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                            <p>Jun 19, 2020</p> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                    <div class="whats-right-single mb-20">
                                        <div class="whats-right-img">
                                            <img src="assets/img/gallery/whats_right_img3.png" alt="">
                                        </div>
                                        <div class="whats-right-cap">
                                            <span class="colorg">FASHION</span>
                                            <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                            <p>Jun 19, 2020</p> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                    <div class="whats-right-single mb-20">
                                        <div class="whats-right-img">
                                            <img src="assets/img/gallery/whats_right_img4.png" alt="">
                                        </div>
                                        <div class="whats-right-cap">
                                            <span class="colorr">FASHION</span>
                                            <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                            <p>Jun 19, 2020</p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card fure -->
                <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                    <div class="row">
                        <!-- Left Details Caption -->
                        <div class="col-xl-6">
                            <div class="whats-news-single mb-40">
                                <div class="whates-img">
                                    <img src="assets/img/gallery/whats_right_img2.png" alt="">
                                </div>
                                <div class="whates-caption">
                                    <h4><a href="#">Secretart for Economic Air
                                        plane that looks like</a></h4>
                                    <span>by Alice cloe   -   Jun 19, 2020</span>
                                    <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Right single caption -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="row">
                                <!-- single -->
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                    <div class="whats-right-single mb-20">
                                        <div class="whats-right-img">
                                            <img src="assets/img/gallery/whats_right_img1.png" alt="">
                                        </div>
                                        <div class="whats-right-cap">
                                            <span class="colorb">FASHION</span>
                                            <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                            <p>Jun 19, 2020</p> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                    <div class="whats-right-single mb-20">
                                        <div class="whats-right-img">
                                            <img src="assets/img/gallery/whats_right_img2.png" alt="">
                                        </div>
                                        <div class="whats-right-cap">
                                            <span class="colorb">FASHION</span>
                                            <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                            <p>Jun 19, 2020</p> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                    <div class="whats-right-single mb-20">
                                        <div class="whats-right-img">
                                            <img src="assets/img/gallery/whats_right_img3.png" alt="">
                                        </div>
                                        <div class="whats-right-cap">
                                            <span class="colorg">FASHION</span>
                                            <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                            <p>Jun 19, 2020</p> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                    <div class="whats-right-single mb-20">
                                        <div class="whats-right-img">
                                            <img src="assets/img/gallery/whats_right_img4.png" alt="">
                                        </div>
                                        <div class="whats-right-cap">
                                            <span class="colorr">FASHION</span>
                                            <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                            <p>Jun 19, 2020</p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card Five -->
                <div class="tab-pane fade" id="nav-nav-Sport" role="tabpanel" aria-labelledby="nav-Sports">
                    <div class="row">
                        <!-- Left Details Caption -->
                        <div class="col-xl-6">
                            <div class="whats-news-single mb-40">
                                <div class="whates-img">
                                    <img src="assets/img/gallery/whats_news_details1.png" alt="">
                                </div>
                                <div class="whates-caption">
                                    <h4><a href="#">Secretart for Economic Air
                                        plane that looks like</a></h4>
                                    <span>by Alice cloe   -   Jun 19, 2020</span>
                                    <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Right single caption -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="row">
                                <!-- single -->
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                    <div class="whats-right-single mb-20">
                                        <div class="whats-right-img">
                                            <img src="assets/img/gallery/whats_right_img1.png" alt="">
                                        </div>
                                        <div class="whats-right-cap">
                                            <span class="colorb">FASHION</span>
                                            <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                            <p>Jun 19, 2020</p> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                    <div class="whats-right-single mb-20">
                                        <div class="whats-right-img">
                                            <img src="assets/img/gallery/whats_right_img2.png" alt="">
                                        </div>
                                        <div class="whats-right-cap">
                                            <span class="colorb">FASHION</span>
                                            <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                            <p>Jun 19, 2020</p> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                    <div class="whats-right-single mb-20">
                                        <div class="whats-right-img">
                                            <img src="assets/img/gallery/whats_right_img3.png" alt="">
                                        </div>
                                        <div class="whats-right-cap">
                                            <span class="colorg">FASHION</span>
                                            <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                            <p>Jun 19, 2020</p> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                    <div class="whats-right-single mb-20">
                                        <div class="whats-right-img">
                                            <img src="assets/img/gallery/whats_right_img4.png" alt="">
                                        </div>
                                        <div class="whats-right-cap">
                                            <span class="colorr">FASHION</span>
                                            <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                            <p>Jun 19, 2020</p> 
                                        </div>
                                    </div>
                                </div>
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