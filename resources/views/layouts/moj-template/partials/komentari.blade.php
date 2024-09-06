<div class="comments-area mt-5">
    @if($vest->komentari->count() > 0)
    <h4>{{ $vest->komentari->count() }} Komentara</h4>
    @foreach($vest->komentari as $komentar)
        <div class="comment-list">
            <div class="single-comment justify-content-between d-flex">
                <div class="user justify-content-between d-flex">
                    <div class="thumb">
                        <img src="{{ asset('template/news-master/assets/img/comment/comment_' . $komentar->user_id . '.png') }}" alt="">
                    </div>
                    <div class="desc">
                        <p class="comment">
                            {{ $komentar->sadrzaj }}
                        </p>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">


                                @if($komentar->autor)
                                    <h5>
                                        <a href="#">{{ $komentar->autor->name }}</a>
                                    </h5>
                                @else
                                    <h5>
                                        <a href="#">Unknown User</a>
                                    </h5>
                                @endif

                                

                                <p class="date">{{ $komentar->created_at->format('F j, Y \a\t g:i a') }}</p>
                            </div>
                            <div class="reply-btn">
                                <a href="#" class="btn-reply text-uppercase">reply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    @else <h4>Budi prvi da komentarises nasu nevest!</h4>
    @endif
</div>