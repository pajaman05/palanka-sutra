<!DOCTYPE html>
<html class="no-js" lang="zxx">
@include('layouts.moj-template.partials.head')
<body>
<!-- Preloader Start -->
        @include('layouts.moj-template.partials.preloader')
        @include('layouts.moj-template.partials.header')
<main>
    <div class="about-details section-padding30">
        <div class="container">
            <div class="row">
                <div class="offset-xl-1 col-lg-8">
                   @yield('content-1')
                </div>
            </div>
        </div>
    </div>
    <!--? About Area Start-->
    <div class="support-company-area pt-100 pb-100 section-bg fix" data-background="assets/img/gallery/section_bg02.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                   @yield('content-2')
                </div>
                <div class="col-xl-6 col-lg-6">
                   @yield('content-3')
                </div>
            </div>
        </div>
    </div>
    <!-- About Area End-->
    <!-- Team Start -->
    <div class="team-area section-padding30">
        <div class="container">
            <div class="row">
                <div class="cl-xl-7 col-lg-8 col-md-10">
                   @yield('content-4')
                </div>
            </div>
            <div class="row">
                <!-- single Tem -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                    @yield('content-5')
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                    @yield('content-6')
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                   @yield('content-7')
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
    <!-- banner-last Start -->
    <div class="banner-area gray-bg pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-10">
                    <div class="banner-one">
                        <img src="assets/img/gallery/body_card3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner-last End -->
</main>
<footer>
    <!-- Footer Start-->
    @include('layouts.moj-template.partials.footer')
    @include('layouts.moj-template.partials.js-scripts')
    <!-- Footer End-->
</footer>
<!-- Search model Begin -->
</body>
</html>