@extends('layouts.right-sidebar')


<!-- Header sections -->
@include('partials.header-sections')

<!-- Main sections -->
@section('lista_kategorija')
<div class="justify-content-between align-items-end mb-15">
    <div class="col-xl-4">
        <div class="section-tittle mb-30">
            <h3>Nevesti Palanke</h3>
        </div>
    </div>
    <div class="col-xl-8 col-md-9">
        <div class="properties__button">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    @foreach($kategorije as $kategorija)
                        <a class="nav-item nav-link {{ $kategorija->slug == request()->slug ? 'active' : '' }}" 
                           href="{{ route('kategorija.single', ['slug' => $kategorija->slug]) }}"
                           role="tab" 
                           aria-controls="nav-{{ $kategorija->slug }}" 
                           aria-selected="{{ $kategorija->slug == request()->slug ? 'true' : 'false' }}">
                           {{ $kategorija->naziv }}
                        </a>
                    @endforeach
                </div>
            </nav>
        </div>
    </div>
</div>
@endsection















@section('vesti')
<div class="tab-content" id="nav-tabContent">
    @foreach($kategorije as $kategorija)
        <div class="tab-pane fade {{ $kategorija->slug == request()->slug ? 'show active' : '' }}" 
             id="nav-{{ $kategorija->slug }}" 
             role="tabpanel" 
             aria-labelledby="nav-{{ $kategorija->slug }}-tab">

            <ul>
                @foreach($kategorija->vesti as $vest)
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
        </div>
    @endforeach
</div>
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









