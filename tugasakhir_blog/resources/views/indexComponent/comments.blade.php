
<div class="container-fluid">
    <div class="container">
        <div class="row" id="comments">
            <div class="col-12 mb-3">
                <h6>Enter Your <span>Comments</span> Here!</h6>
            </div>
            <div class="col-12 col-md-5 mb-5" class="form-comment">
                <form action="{{ route('comments.store') }}#comments" method="POST">
                    @csrf        
                    <div class="mb-3">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Name..." name="name" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control @error('comments') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3" placeholder="Comments" name="comments">{{ old('comments') }}</textarea>
                        @error('comments')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button class="btn btn-primary tombol" type="submit">SUBMIT!</button>
                </form>
            </div>
            <div class="col-12 col-md-5 offset-md-2 mt-5 mt-md-0 mb-3">
                <div class="row" id="comments-section">
                    @foreach ($comments as $comment)
                        <div class="col-12 mb-3 comment">
                            <img src="{{ asset('assets/frontend/images/no-profile.png') }}" alt="" style="width: 100px; height: 100px; float:left;">
                            <div class="commentView">
                                <p class="commentName">{{ $comment->name }} <span>{{ \Carbon\Carbon::parse($comment->created_at)->format('d F Y') }}</span></p>
                                <p>{{ $comment->comments }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a href="" style="float:right">Show more</a>
            </div>
        </div>
    </div>
</div>
