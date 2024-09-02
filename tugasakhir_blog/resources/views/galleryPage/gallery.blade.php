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
            @foreach ($categories_galleries as $gallery)
            <div class="col-12 col-md-5  mb-3 ">
                <a  href="{{ url("/Gallery/$gallery->id") }}">
                  <img src="{{ asset("assets/frontend/images-gallery/$gallery->images") }}" alt="" class="img-fluid" style="height:400px; width:100%">
                </a>
                <div class="row">
                  <a href="{{ url("Gallery/$gallery->id") }}" style="color:white;font-size:18px" class="galleryCoy"><p>{{ $gallery->title }}</p></a>
                </div>  
            </div>
            @endforeach
          </div>
        </div>

     </div>
  </div>
</div>