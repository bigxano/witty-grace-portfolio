<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>WITTY-GRACE LEATHER WORKS</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{asset('MyPortfolio/assets/img/logo.jpg')}}" rel="icon">
  <link href="{{asset('MyPortfolio/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('MyPortfolio/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('MyPortfolio/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('MyPortfolio/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('MyPortfolio/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('MyPortfolio/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('MyPortfolio/assets/css/main.css')}}" rel="stylesheet">

</head>

<body class="starter-page-page">

  <header id="header" class="header d-flex align-items-center sticky-top" role="banner">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center" aria-label="Witty-Grace Leather Works Home">

        <img src="MyPortfolio/assets/img/logo.jpg" alt="Witty-Grace Leather Works logo" />
        <h1 class="sitename">WITTY-GRACE LEATHER WORKS</h1>
      </a>

      <nav id="navmenu" class="navmenu" aria-label="Main navigation">
        <ul>
          <li><a href="{{ route('about') }}">About</a></li>
          <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
          <li><a href="{{ route('contact') }}">Contact</a></li>
          <li><a href="{{ route('services') }}">Services</a></li>
          <li>
            <button id="themeToggle" class="theme-toggle-btn" aria-label="Toggle light/dark mode">
              <span class="theme-icon" aria-hidden="true">🌓</span>
            </button>
          </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list" aria-label="Open navigation menu"></i>
      </nav>

    </div>
  </header>

  <main class="main">

     <!-- Page Title -->
    <div class="page-title" data-aos="fade-down">
      <div class="container">
        <h1>Welcome Witty-Grace Leather Works</h1>
      </div>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Mission</h2>
        <p>At Witty Grace Leather Works, our mission is to craft high-quality, stylish, and durable leather products that blend tradition with modern design. We are committed to excellence, sustainability, and customer satisfaction, ensuring every piece reflects elegance, strength, and timeless craftsmanship.</p>
      </div><!-- End Section Title -->

      {{-- <div class="container" data-aos="fade-up">
        <p>do well to navigate through our other pages.</p>
        <nav class="breadcrumbs">
          <ul>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
        <li><a href="{{ route('services') }}">Services</a></li>
          </ul>
        </nav>
      </div> --}}

    </section>
    <!-- /Starter Section Section -->

  </main>



  <footer id="footer" class="footer" role="contentinfo">
    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">WITTY-GRACE LEATHER WORKS</strong> <span>All Rights Reserved</span></p>
      </div>
      <div class="social-links d-flex justify-content-center" aria-label="Social media links">
        <a href="https://twitter.com/wittygrace" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="https://facebook.com/wittygrace" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://instagram.com/wittygrace09" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://wa.me/09024869007?text=Hello%21%20%F0%9F%91%8B%20Thank%20you%20for%20reaching%20out%20to%20Witty-Grace%20Leather%20Works.%20How%20can%20we%20assist%20you%20today%3F" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
      </div>
    </div>
  </footer>


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center" aria-label="Scroll to top"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('MyPortfolio/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('MyPortfolio/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('MyPortfolio/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('MyPortfolio/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('MyPortfolio/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('MyPortfolio/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('MyPortfolio/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('MyPortfolio/assets/js/main.js')}}"></script>
  <script src="{{ asset('MyPortfolio/assets/js/theme-toggle.js') }}"></script>

</body>

</html>
