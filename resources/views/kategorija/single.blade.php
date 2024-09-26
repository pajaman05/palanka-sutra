@extends('layouts.right-sidebar')


<!-- Header sections -->
@include('partials.header-sections')



<!-- Main sekcija -->
@section('content')


    <!-- bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




    <!-- jos malo css-a -->
    <style>
        .pagination .page-item.active .page-link {
            background-color: #dd3848;
            border-color: #000000;
        }

        .pagination .page-link {
            border-color: #000000;
            color: black
        }

        .pagination .page-link:hover {
            background-color: #b83c3c94;
            border-color: #000000;
            color: white;
        }
    </style>









        @section('content')
            <div class="whats-news-wrapper">
                <div class="row">
                    <div class="justify-content-between align-items-end mb-15">
                        <div class="col-xl-6">
                            <div class="section-tittle mb-30">
                                <h3>{{ $kategorija->naziv }}</h3>
                            </div>
                        </div>

                        
                        <!-- Kategorije -->
                        <div class="col-xl-12 col-md-12">
                            <div class="properties__button">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        @foreach($kategorije as $kat)
                                            <a class="nav-item nav-link {{ $kat->slug == request()->slug ? 'active' : '' }}" 
                                               href="{{ route('kategorija.single', ['slug' => $kat->slug]) }}" 
                                               role="tab" 
                                               aria-controls="nav-{{ $kat->slug }}" 
                                               aria-selected="{{ $kat->slug == request()->slug ? 'true' : 'false' }}">
                                                {{ $kat->naziv }}
                                            </a>
                                        @endforeach
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Vesti kategorija -->
                <div class="row">
                    <div class="col-12">
                        <ul>
                            @foreach($vesti as $vest)
                                <li>
                                    <h3>{{ $vest->naslov }}</h3>
                                    <img src="{{ $vest->image_thumbnail }}" alt="{{ $vest->naslov }}">
                                    <p>{!! $vest->sazetak !!}</p>
                                    <p>Datum objave: {{ $vest->datum }}</p>
                                    <a href="{{ route('vest.single', ['slug' => $vest->slug]) }}" 
                                       style="display: inline-block; margin-top: 10px; margin-bottom: 20px; text-decoration: underline; color: black;">
                                        Pročitaj više
                                    </a>
                                </li>
                            @endforeach
                        </ul>

                        <!-- Dinamička paginacija -->
                        <div class="pagination">
                            {{ $vesti->links() }}
                        </div>
                    </div>
                </div>
            </div>
            @endsection



            <!-- Sidebar -->
            @section('sidebar')
                @include('layouts.moj-template.partials.sidebar')
            @endsection















<!-- vesti sa paginacijom direktno 
@section('vesti')
    <div class="tab-pane fade show active" 
         id="nav-{{ $kategorija->slug }}" 
         role="tabpanel" 
         aria-labelledby="nav-{{ $kategorija->slug }}-tab">
        
        <ul>
            @foreach($vesti as $vest)
                <li>
                    <h3>{{ $vest->naslov }}</h3>
                    <img src="{{ $vest->image_thumbnail }}" alt="{{ $vest->naslov }}">
                    <p>{!! $vest->sazetak !!}</p>
                    <p>Datum objave: {{ $vest->datum }}</p>
                    <a href="{{ route('vest.single', ['slug' => $vest->slug]) }}" style="display: inline-block; margin-top: 10px;margin-bottom: 20px; text-decoration: underline; color: black;">
                        Pročitaj više
                    </a>
                </li>
            @endforeach
        </ul>


        <div class="pagination">
            {{ $vesti->links() }}
        </div>
    </div>
@endsection
-->





@section('pagination')

    <li class="page-item"><a class="page-link" href="#">
        <!-- SVG icon -->
        <svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="15px">
            <path fill-rule="evenodd"  fill="rgb(221, 221, 221)" d="M8.142,13.118 L6.973,14.135 L0.127,7.646 L0.127,6.623 L6.973,0.132 L8.087,1.153 L2.683,6.413 L23.309,6.413 L23.309,7.856 L2.683,7.856 L8.142,13.118 Z"/>
            </svg>
    </span></a></li>
        <li class="page-item active"><a class="page-link" href="#">01</a></li>
        <li class="page-item"><a class="page-link" href="#">02</a></li>
        <li class="page-item"><a class="page-link" href="#">03</a></li>
    <li class="page-item"><a class="page-link" href="#">
        <!-- SVG iocn -->
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="15px">
        <path fill-rule="evenodd"  fill="rgb(255, 11, 11)" d="M31.112,13.118 L32.281,14.136 L39.127,7.646 L39.127,6.624 L32.281,0.132 L31.167,1.154 L36.571,6.413 L0.491,6.413 L0.491,7.857 L36.571,7.857 L31.112,13.118 Z"/>
        </svg>
    </span></a></li>

@endsection




<!-- Footer sections -->
@include('partials.footer-sections')









