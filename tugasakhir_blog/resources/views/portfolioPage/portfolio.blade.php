<div class="container-fluid" id="portfolio">
    <div class="container py-5">
        <div class="row">
            <p class="skillTitle text-center">My <span>Portfolio</span></p>
        </div>
        <div class="row portfolio-section py-5">
            <div class="col-12 offset-md-1">
                <div class="row">
                    @foreach ($portfolios as $portfolio)
                    <div class="col-12 col-md-5 mb-3">
                        <a href="{{ asset("assets/frontend/images-portfolio/$portfolio->images") }}" data-fancybox="gallery-a" data-caption="{{ $portfolio->created}}">
                            <img src="{{ asset("assets/frontend/images-portfolio/$portfolio->images") }}" alt="" class="img-fluid" >
                        </a>
                        <a href="{{ asset("assets/frontend/images-portfolio/$portfolio->video") }}" data-fancybox="gallery-a" data-caption="{{ $portfolio->created }}" >
                            <img src="{{ asset("assets/frontend/images-portfolio/$portfolio->video") }}" />
                          </a>
                        <div class="row">
                            <div class="col-12 text-break">
                                <p class="portfolio-desc">
                                    <span>Made-by:</span> {{ $portfolio->madeBy }}
                                    <br>
                                    <span>Creator:</span> {{ $portfolio->creator }}
                                    <br>
                                    <span>Created:</span> {{ $portfolio->created }}
                                    <br>
                                    <span>Demo:</span> <a href="#portfolio" style="color: #white">{{ $portfolio->demo }} </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>