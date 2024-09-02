<div class="container-fluid py-5" id="gallery">
    <div class="container">
       <div class="row mt-3">
          <div class="col-12 col-md-4 text-center text-md-start">
              <p class="title-gallery">From Our <span>Gallery</span></p>
          </div>
          <div class="col-12 col-md-8 list-section">
            <ul class="d-flex list-unstyled ">
              <li class="mx-2 list-gallery"><a href="{{ url("/Gallery") }}">Home</a></li>
              @foreach ($categories_galleries as $categories_gallery)
                <li class="mx-2 list-gallery"><a href="{{ url("/Gallery/$categories_gallery->id") }}">{{ $categories_gallery->title }}</a></li>
              @endforeach
            </ul>
          </div>
       </div>
       <div class="row gallery-section py-5 px-md-5">
          <div class="col-12 offset-md-1">
            <div class="row">
              @foreach ($manyPageGallery as $gallery)
              <div class="col-12 col-md-5  mb-3 ">
                  <a  href="{{ asset("assets/frontend/images-gallery/$gallery->images") }}" data-fancybox="gallery" data-caption="{{ $galleryId->title }}">
                    <img src="{{ asset("assets/frontend/images-gallery/$gallery->images") }}" alt="" class="img-fluid" style="height:400px; width:100%;">
                  </a>
              </div>
              @endforeach
            </div>
          </div>
          {{ $manyPageGallery->links("pagination.customPagination") }}
       </div>
    </div>
  </div>