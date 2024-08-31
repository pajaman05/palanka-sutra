@extends('layouts.vest-single')

@section('content')
    <!-- Trending Tittle -->
    <div class="about-right mb-90">
        <div class="about-img">
            <img src="{{$vest->image_full}}" alt="">
        </div>
        <div class="heading-news mb-30 pt-30">
            {{$vest->naslov}}
        </div>
        <div class="about-prea">
            {!!$vest->sadrzaj!!}
        </div> 
        <div class="social-share pt-30">
            <div class="section-tittle">
                <h3 class="mr-20">Share:</h3>
                <ul>
                    <li><a href="#"><img src="assets/img/news/icon-ins.png" alt=""></a></li>
                    <li><a href="#"><img src="assets/img/news/icon-fb.png" alt=""></a></li>
                    <li><a href="#"><img src="assets/img/news/icon-tw.png" alt=""></a></li>
                    <li><a href="#"><img src="assets/img/news/icon-yo.png" alt=""></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- From -->
    <div class="row">
        <div class="col-lg-8">
            <form class="form-contact contact_form mb-80" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control w-100 error" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Enter Message"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control error" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control error" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <input class="form-control error" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                    </div>
                </div>
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="button button-contactForm boxed-btn boxed-btn2">Send</button>
            </div>
        </form>
    </div>
    </div>
@endsection

@section('sidebar')
    <!-- Flow Socail -->
    <div class="single-follow mb-45">
        <div class="single-box">
            <div class="follow-us d-flex align-items-center">
                <div class="follow-social">
                    <a href="#"><img src="assets/img/news/icon-fb.png" alt=""></a>
                </div>
                <div class="follow-count">  
                    <span>8,045</span>
                    <p>Fans</p>
                </div>
            </div> 
            <div class="follow-us d-flex align-items-center">
                <div class="follow-social">
                    <a href="#"><img src="assets/img/news/icon-tw.png" alt=""></a>
                </div>
                <div class="follow-count">
                    <span>8,045</span>
                    <p>Fans</p>
                </div>
            </div>
                <div class="follow-us d-flex align-items-center">
                <div class="follow-social">
                    <a href="#"><img src="assets/img/news/icon-ins.png" alt=""></a>
                </div>
                <div class="follow-count">
                    <span>8,045</span>
                    <p>Fans</p>
                </div>
            </div>
            <div class="follow-us d-flex align-items-center">
                <div class="follow-social">
                    <a href="#"><img src="assets/img/news/icon-yo.png" alt=""></a>
                </div>
                <div class="follow-count">
                    <span>8,045</span>
                    <p>Fans</p>
                </div>
            </div>
        </div>
    </div>
    <!-- New Poster -->
    <div class="news-poster d-none d-lg-block">
        <img src="assets/img/news/news_card.jpg" alt="">
    </div>
@endsection