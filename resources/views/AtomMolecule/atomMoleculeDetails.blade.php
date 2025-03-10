<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PhotoFolio Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
  <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">

  <!-- Template Main CSS File -->
  <link href="/assets/css/main.css" rel="stylesheet">

  <style>
    .gallery-img {
    display: block;
    width: 100%; /* Adjust the width as needed */
    max-width: 700px; /* Optional: Limit the maximum width of the image */
    max-height: 500px;
    margin-right:10px;
    margin-bottom:10px;
    border: 15px solid white; /* Add a thick border with a wood-like color */
    }

    .description{
        text-align: justify;
    }

    .slider-container {
        display: flex;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        -webkit-overflow-scrolling: touch;
    }

    .slider-item {
        flex: 0 0 auto;
        scroll-snap-align: start;
        width: 32%;
        box-sizing: border-box;
    }

    .card {
        background-color: #27A776;
    }

    .card-title {
        color:white;
        margin: 2px;
        text-align: center;
    }

    .card-img-top {
        width:100%;
        height:120px;
    }

    .card-body{
        padding:0px;
        margin:0px;
    }
  </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center  me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="/assets/img/nuclearlogo.png" alt="">

        <h1>ChemistryExplorer</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html" class="active">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li class="dropdown"><a href="#"><span>Gallery</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="gallery.html">Nature</a></li>
              <li><a href="gallery.html">People</a></li>
              <li><a href="gallery.html">Architecture</a></li>
              <li><a href="gallery.html">Animals</a></li>
              <li><a href="gallery.html">Sports</a></li>
              <li><a href="gallery.html">Travel</a></li>
              <li class="dropdown"><a href="#"><span>Sub Menu</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Sub Menu 1</a></li>
                  <li><a href="#">Sub Menu 2</a></li>
                  <li><a href="#">Sub Menu 3</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="services.html">Services</a></li>
          <li><a href="contact.html">Contact</a></li>
          @if(Route::has('login'))
            @auth
            <li>
              <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  Logout
              </a>
          </li>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
            
          @else
            <li><a href="{{ route('login') }}">Sign In</a></li>
          @endauth
          @endif
        </ul>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <main id="main" data-aos="fade" data-aos-delay="1500">
    <!-- ======= Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
      <nav aria-label="breadcrumb" style="margin-bottom:50px;">
        <ol class="breadcrumb">
            <li class="breadcrumb-item" style="font-weight:bolder;"><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item" style="font-weight:bolder;"><a href="{{route('showAtomMolecule')}}">Atom & Molecule</a></li>
            <li class="breadcrumb-item active" style="color:white;" aria-current="page">{{$material->title}}</li>
        </ol>
      </nav>
        <div class="row d-flex justify-content-center">
          <div class="col-lg-9 text-center">
            <h2>{{$material->title}}</h2>
          </div>
        </div>
      </div>
    </div><!-- End Page Header -->
    
    </section><!-- End Testimonials Section -->

    <!-- ======= Material Single Section ======= -->
    <section id="gallery-single" class="gallery-single">
      <div class="container">

        <div class="row">
            <div class="col-7 ">
              <img class="gallery-img" src="{{ asset('AtomMolecule/' . $material->thumbnail) }}"/>
              <iframe class="gallery-img" height="400" src="{{$material->video}}" allowfullscreen></iframe>
            </div>
            <div class="col-5">
                <div class="portfolio-info">
                <h3>Basic Concept</h3>
                <ul class="description">
                    <li><strong>Definition</strong> <span>{{$material->definition}}</span></li>
                    <li><strong>Characteristics</strong> <span>{{$material->characteristic}}</span></li>
                    <li><strong>Example</strong> <span>{{$material->example}}</span></li>
                </ul>
                </div>

                <!-- Carousel -->
                <div class="swiffy-slider">
                <ul class="slider-container">
                @foreach($examples as $index => $example)
                    <li class="slider-item">
                        <div class="card">
                            <a href="{{route('exampleDetails', $example->id)}}">
                            <img class="card-img-top" src="{{ asset('AtomMolecule/' . $example->image) }}" alt="example">
                            <div class="card-body">
                                <p class="card-title">{{$example->name}}</p>
                            </div>
                            </a>
                        </div>
                    </li>
                @endforeach
                </ul>

                <button type="button" class="slider-nav"></button>
                <button type="button" class="slider-nav slider-nav-next"></button>
            </div>
                <!-- End Carousel -->
            </div>
        </div>
      </div>
    </section><!-- End Gallery Single Section -->
</main>
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>ArtSpaceinnovator</span></strong>. All Rights Reserved
      </div>
  
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader">
    <div class="line"></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>
    
</body>

</html>