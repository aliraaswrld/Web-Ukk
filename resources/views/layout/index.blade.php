<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Website Gallery</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
      <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css"/>
    <link rel="stylesheet" href="{{ asset('assets') }}/css/lightbox.css"/>

    <!-- Light Box -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
</head>

<body>

 <nav>
    <div class="container">
      <div class="logo">
        <img src="{{ asset('assets/images/Logo.png') }}" alt="Logo">
      </div>
      <ul class="nav-menu">
        <li><a href="#">Beranda</a></li>
        <li><a href="{{ ('register') }}" class="register">Register</a></li>
        <li><a href="{{ ('login') }}" class="register">Login</a></li>
      </ul>
    </div>
  </nav>


    <!-- Header Start -->

        <section class="wallpaper" id="beranda">
    <div class="containerr">
      <h1>Preserve moments, 
        <br>Cheries the memories</h1>
    </div>
  </section>
    <!-- Header End -->

  <h2  id="recent">Recent Photos</h2>
  <section class="recent-section" id="recent">
    @foreach ($gallerys as $gallery) 
    <div class="card">
       <a href="{{ Storage::url($gallery->lokasiFile) }}" data-lightbox="models" data-title="Judul Gambar 1">
      <img src="{{ Storage::url($gallery->lokasiFile) }}">
      </a>

      {{-- <div class="card-body">
        <p> {{ $gallery->created_at->format('M d Y') }} | By {{ $gallery->user->name }}</p>
        <h5 class="card-title">{{ $gallery->nama }}</h5>
        
        
      </div> --}}
    </div>
    @endforeach

  </section>
   
          <!-- Footer Start -->
   
   <footer>
      <div class="social">
        <a href="#"><i class="fa-brands fa-facebook fa-lg"></i></a>
        <a href="https://www.instagram.com/nrulfavzyh?igsh=NTc4MTIwNjQ2YQ=="><i class="fa-brands fa-instagram fa-lg"></i></a>
        <a href="https://wa.link/ng57no"><i class="fa-brands fa-whatsapp fa-lg"></i></a>
        <a href=""><i class="fa-brands fa-twitter fa-lg"></i></a>
      </div>

      <div class="links">
        <p>Temukan Berbagai Foto yang Kamu Suka!</p>
      </div>

      <div class="credit">
        <p>Created by <a href="https://github.com/aliraaswrld">Alira Daff</a>. | &copy; 2024.</p>
      </div>
    </footer>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
<!-- LightBox -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

  <script src="{{ asset('assets') }}/js/lightbox-plus-jquery.js"></script>
</html>

