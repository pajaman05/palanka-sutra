<!DOCTYPE html>
<html class="no-js" lang="zxx">
    @include('layouts.moj-template.partials.head')
    <body>
        @include('layouts.moj-template.partials.preloader')
        @include('layouts.moj-template.partials.header')
        <main>
            <!-- Trending Area Start -->
            <div class="trending-area fix pt-25 gray-bg">
                <div class="container">
                    <div class="trending-main">
                        <div class="row">
                            <div class="col-lg-8">
                                @yield('trending-slider')
                            </div>
                            <!-- Right content -->
                            <div class="col-lg-4">
                                @yield('trending-sidebar')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Trending Area End -->
            <!-- Whats New Start -->
            <section class="whats-news-area pt-50 pb-20 gray-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            @yield('trending')
                        </div>
                        <div class="col-lg-4">
                            @yield('trending-sidebar-2')
                        </div>
                    </div>
                </div>
            </section>
            <!-- Whats New End -->
            <!--   Weekly2-News start -->
            <div class="weekly2-news-area pt-50 pb-30 gray-bg">
                <div class="container">
                    <div class="weekly2-wrapper">
                        <div class="row">
                            <!-- Banner -->
                            <div class="col-lg-3">
                                @yield('banner-1')
                            </div>
                            <div class="col-lg-9">
                                <div class="slider-wrapper">
                                    <!-- section Tittle -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            @yield('section-title-2')
                                        </div>
                                    </div>
                                    <!-- Slider -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            @yield('weekly-news-2')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>           
            <!-- End Weekly-News -->
            <!--  Recent Articles start -->
            <div class="recent-articles pt-80 pb-80">
                <div class="container">
                    <div class="recent-wrapper">
                        <!-- section Tittle -->
                        <div class="row">
                            <div class="col-lg-12">
                                @yield('section-title-2')
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="recent-active dot-style d-flex dot-style">
                                    @yield('recent-articles')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>           
            <!--Recent Articles End -->
            <!-- Start Video Area -->
            <div class="youtube-area video-padding d-none d-sm-block">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="video-items-active">
                                @yield('video')
                            </div>
                        </div>
                    </div>
                    <div class="video-info">
                        <div class="row">
                            <div class="col-12">
                                <div class="testmonial-nav text-center">
                                    @yield('video-info')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <!-- End Start Video area-->
            <!--   Weekly3-News start -->
            <div class="weekly3-news-area pt-80 pb-130">
                <div class="container">
                    <div class="weekly3-wrapper">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="slider-wrapper">
                                    <!-- Slider -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="weekly3-news-active dot-style d-flex">
                                                @yield('weekly-news-3')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>           
            <!-- End Weekly-News -->
            <!-- banner-last Start -->
            <div class="banner-area gray-bg pt-90 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-md-10">
                            @yield('banner-2')
                        </div>
                    </div>
                </div>
            </div>
            <!-- banner-last End -->
        </main>
        @include('layouts.moj-template.partials.js-scripts')
    </body>
</html>
