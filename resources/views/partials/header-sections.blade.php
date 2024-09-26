@section('logo-banner')
        <!-- Logo -->
    <div class="col-xl-3 col-lg-3 col-md-3 d-none d-md-block">
        <div class="logo">
            <a href="index.html"><img src="/template/news-master/assets/img/logo/pravilogo.png" alt=""  style="width: 200px; height: 200px;"></a>
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
        <a href="index.html"><img src="assets/img/logo/pravilogo.png" alt=""></a>
    </div>
    <!-- Main-menu -->
    <div class="main-menu d-none d-md-block">
        <nav>                  
            <ul id="navigation">
                <li><a href="{{route('homepage')}}">Početna</a></li>
                <li><a href="{{route('tim')}}">Naš tim</a></li>
                <li><a href="{{route('kategorija.list')}}">Kategorije</a></li>
                <li><a href="latest_news.html">Predviđanja</a></li>
                <li><a href="#">Stranice</a>
                    <ul class="submenu">
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog_details.html">Blog Details</a></li>
                        <li><a href="elements.html">Element</a></li>
                    </ul>
                </li>
                <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li><a href="{{route('vest.create')}}">Create New Vest</a>
            </ul>
        </nav>
    </div>
@endsection