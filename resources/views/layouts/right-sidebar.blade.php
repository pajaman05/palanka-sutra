<!doctype html>
<html class="no-js" lang="zxx">
    @include('layouts.moj-template.partials.head')
    
    <body>
    @include('layouts.moj-template.partials.preloader')
    @include('layouts.moj-template.partials.header')

    <!-- MAIN -->
    <main>
        <div class="about-area2 gray-bg pt-60 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 whats-news-wrapper">
                        
                            <div class="row">
                                @yield('lista_kategorija')
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    @yield('vesti')
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-4">  
                        @include('layouts.moj-template.partials.sidebar')
                    </div>
                </div>
            </div>
    </div>



        <!-- paginacija -->
        <div class="pagination-area  gray-bg pb-45">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="single-wrap">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    @yield('pagination')
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    
    <!-- Search model Begin -->
    <div class="search-model-box">
        <div class="d-flex align-items-center h-100 justify-content-center">
            <div class="search-close-btn">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Searching key.....">
            </form>
        </div>
    </div>


    @include('layouts.moj-template.partials.footer')
    @include('layouts.moj-template.partials.js-scripts')
</html>