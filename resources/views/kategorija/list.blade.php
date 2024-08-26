

@extends('layouts.kategorijaCore.katTemplate')

@section('content')
    @foreach($kategorije as $index => $kategorija)
        <a class="nav-item nav-link @if($index == 0) active @endif" 
           id="nav-{{ $kategorija->slug }}-tab" 
           data-toggle="tab" 
           href="#nav-{{ $kategorija->slug }}" 
           role="tab" 
           aria-controls="nav-{{ $kategorija->slug }}" 
           aria-selected="{{ $index == 0 ? 'true' : 'false' }}">
           {{ $kategorija->naziv }}
        </a>
    @endforeach
@endsection


@section('tab-content')
    @foreach($kategorije as $index => $kategorija)
        <div class="tab-pane fade @if($index == 0) show active @endif" 
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
                        <a href="{{ route('vest.single', ['slug' => $vest->slug]) }}">
                            Pročitaj više
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    @endforeach
@endsection
