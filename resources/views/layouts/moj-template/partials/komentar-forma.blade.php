<div class="row" style="padding-top: 50px;">
    <div class="col-lg-8">
        <div>
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{session()->get('message')}}
            </div>
            @endif
        </div>
        <form action="{{ route('komentar.unesi', ['vest_id' => $vest->id]) }}" method="POST">
            @csrf
        
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <textarea class="form-control w-100 error" name="sadrzaj" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Unesi komentar..."></textarea>
                    </div>
                </div>
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="button button-contactForm boxed-btn boxed-btn2">Pošalji komentar</button>
            </div>
        </form>
    </div>
</div>