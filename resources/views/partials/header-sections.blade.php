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
                <li><a href="contact.html">Kontakt</a></li>
            </ul>
        </nav>
    </div>
@endsection

@section('admin-navigation')
    <div class="main-menu d-none d-md-block" style="text-align: center;">
        <nav>
            <ul id="navigation" style="display: inline-block;">
                <li>
                    <a href="{{route('vest.create')}}" 
                    style="font-size: 18px; font-style: italic; color: white; text-decoration: none;" 
                    onmouseover="this.style.color='yellow'" 
                    onmouseout="this.style.color='white'">
                    Create New Vest
                    </a>
                </li>
            </ul>
        </nav>
    </div>
@endsection