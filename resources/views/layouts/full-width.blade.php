<!DOCTYPE html>
<html class="no-js" lang="zxx">
@include('layouts.moj-template.partials.head')
<body>
<!-- Preloader Start -->
    @include('layouts.moj-template.partials.preloader')
    @include('layouts.moj-template.partials.header')
    <main>
        @if (View::hasSection('content-1'))
            <div class="about-details section-padding30">
                <div class="container">
                    <div class="row">
                        <!-- lg-8 u lg-12 stavljeno -->
                        <div class="offset-xl-1 col-lg-12">
                            @yield('content-1')
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <!--? About Area Start-->
        @if (View::hasSection('content-2') || View::hasSection('content-3'))
        <div class="support-company-area pt-100 pb-100 section-bg fix" data-background="assets/img/gallery/section_bg02.jpg">
            <div class="container">
                <div class="row align-items-center">
                    @if (View::hasSection('content-2'))
                        <div class="col-xl-6 col-lg-6">
                            @yield('content-2')
                        </div>
                    @endif
                    @if (View::hasSection('content-3'))
                        <div class="col-xl-6 col-lg-6">
                            @yield('content-3')
                        </div>
                    @endif
                </div>
            </div>
        </div>
        @endif
        <!-- About Area End-->

        <!-- Team Start -->
        @if (View::hasSection('content-4') || View::hasSection('content-5') || View::hasSection('content-6') || View::hasSection('content-7'))
        <div class="team-area section-padding30">
            <div class="container">
                <div class="row">
                    @if (View::hasSection('content-4'))
                        <div class="cl-xl-7 col-lg-8 col-md-10">
                            @yield('content-4')
                        </div>
                    @endif
                </div>
                <div class="row">
                    @if (View::hasSection('content-5'))
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                            @yield('content-5')
                        </div>
                    @endif
                    @if (View::hasSection('content-6'))
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                            @yield('content-6')
                        </div>
                    @endif
                    @if (View::hasSection('content-7'))
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                            @yield('content-7')
                        </div>
                    @endif
                </div>
            </div>
        </div>
        @endif
        <!-- Team End -->

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
    <!-- Footer Start-->
    @include('layouts.moj-template.partials.footer')
    @include('layouts.moj-template.partials.js-scripts')
    <!-- Footer End-->
    <!-- Search model Begin -->
</body>
</html>