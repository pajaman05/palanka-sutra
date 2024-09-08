@extends('layouts.full-width')

<!-- Header sections -->
@include('partials.header-sections')

<!-- Main sections -->
@section('content-2')
    <div class="comment-form">
        <h4>Leave a Reply</h4>
        <form class="form-contact comment_form" method="POST" action="{{route('vest.insert')}}" id="commentForm" enctype="multipart/form-data">
            @csrf
            <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control" name="naslov" id="naslov" type="text" placeholder="Naslov" value="{{ old('naslov') }}">
                            @error('naslov')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control" name="slug" id="slug" type="text" placeholder="Slug" value="{{ old('slug') }}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control w-100" name="sazetak" id="sazetak" cols="30" rows="9"
                            placeholder="Sazetak..."></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control w-100" name="sadrzaj" id="sadrzaj" cols="30" rows="20"
                            placeholder="Sadrzaj..."></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="kategorija_id">Kategorija:</label>
                            <br>
                            <select class="form-control" name="kategorija_id" id="kategorija_id">
                                <option value="" disabled selected>Odaberite kategoriju</option>
                                @foreach($kategorijas as $kategorija)
                                    <option value="{{ $kategorija->id }}">{{ $kategorija->naziv }}</option>
                                @endforeach
                            </select>
                            @error('kategorija_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="image">Thumbnail:</label>
                            <input type="file" name="thumbnail" id="thumbnail">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="image">Full Image:</label>
                            <input type="file" name="full" id="full">
                        </div>
                    </div>
            </div>
            <div class="form-group">
                <button type="submit" class="button button-contactForm btn_1 boxed-btn">Napravi Vest</button>
            </div>
        </form>
    </div>
@endsection

<!-- Footer sections -->
@include('partials.footer-sections')