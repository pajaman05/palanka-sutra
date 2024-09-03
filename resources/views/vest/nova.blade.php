<div class="comment-form">
    <h4>Leave a Reply</h4>
    <form class="form-contact comment_form" action="#" method="POST" id="commentForm">
        @csrf
       <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <input class="form-control" name="naslov" id="naslov" type="text" placeholder="Naslov">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <input class="form-control" name="slug" id="slug" type="text" placeholder="Slug">
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
          <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
       </div>
    </form>
 </div>