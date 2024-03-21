<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <title>Website Gallery</title>

    <!-- Style CSS -->
        <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/lightbox.css" />

     <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    />

    <!-- Light Box -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo2.png') }}" type="image/x-icon" />

  </head>
  <body>
    <!-- Navbar Start -->
     <nav>
    <div class="container">
      <div class="logo">
        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo">
      </div>
      <ul class="nav-menu">
        <li><a href="{{ ('tabelGallery') }}" class="register">Data Foto</a></li>
        <li><a href="{{ ('tambahGallery') }}" class="register">Tambah Foto</a></li>
        <li>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout">Keluar</button>
        </form>
    </li>
      </ul>
    </div>
  </nav>
 

    <!-- Hero Section -->
     <section class="wallpaper" id="beranda">
    <div class="containerr">
       @if(Auth::check())
            <p>Hai, {{ Auth::user()->namaLengkap }}</p>
        @else
            <!-- Tindakan jika tidak ada pengguna yang login -->
        @endif
      <h1>Welcome to Website Gallery</h1>
     
    </div>
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
        <p>Created by <a href="https://github.com/Nurulfauziyah">nurulfauziyah</a>. | &copy; 2024.</p>
      </div>
    </footer>
    <!-- Footer End --> 

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

  <!-- LightBox -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>
    <script src="{{ asset('assets') }}/js/lightbox-plus-jquery.js"></script>

   <script src="script.js"></script>
</html>
