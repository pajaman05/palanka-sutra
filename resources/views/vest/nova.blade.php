<!DOCTYPE html>
@extends('layouts.full-width')


<!-- Main sections -->
@section('content-2')
    <div class="comment-form">


        <!-- flesh poruka prikaz -->
        <div>
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif

            @if(session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
            @endif
        </div>

        
        <h3 style="margin-bottom: 30px">Napravi novu ekstravagantnu nevest Palanke!</h3>
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
                        <textarea class="form-control w-100" name="sazetak" id="sazetak" cols="30" rows="9" placeholder="Sazetak...">{{ old('sazetak') }}</textarea>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <textarea class="form-control w-100" name="sadrzaj" id="sadrzaj" cols="30" rows="20" placeholder="Sadrzaj...">{{ old('sadrzaj') }}</textarea>
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
                        <label for="thumbnail">Thumbnail:</label>
                        <input type="file" name="thumbnail" id="thumbnail">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="full">Full Image:</label>
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






<!-- TinyMCE integration -->
<script src="https://cdn.tiny.cloud/1/554b6aymjjhs1fa0nksgsornxsshclhnaprspschu4pw4vyv/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea',
        plugins: [
            'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
            'checklist', 'mediaembed', 'casechange', 'export', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'editimage', 'advtemplate', 'ai', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown',
        ],
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [
            { value: 'First.Name', title: 'First Name' },
            { value: 'Email', title: 'Email' },
        ],
        ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),
    });
</script>


</html>