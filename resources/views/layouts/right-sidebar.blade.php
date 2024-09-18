<!doctype html>
<html class="no-js" lang="zxx">
    @include('layouts.moj-template.partials.head')
    
    <body>
    @include('layouts.moj-template.partials.preloader')
    @include('layouts.moj-template.partials.header')

    <!-- MAIN -->
    <main>
        @yield('content')
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