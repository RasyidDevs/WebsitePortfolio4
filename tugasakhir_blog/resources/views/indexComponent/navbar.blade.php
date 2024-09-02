<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
    <div class="container"> 
        <a class="navbar-brand brand ms-3 ms-sm-0" href="#">Rasyid<span>Devs</span></a>
        <button class="navbar-toggler mt-2 mt-sm-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                @foreach ($categories as $category)
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ $category->category_name }}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
  </nav>
