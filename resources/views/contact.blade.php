<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Contact - WITTY-GRACE LEATHER WORKS</title>
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

<body class="contact-page">
  <header id="header" class="header d-flex align-items-center sticky-top" role="banner">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center" aria-label="Witty-Grace Leather Works Home">
        <img src="MyPortfolio/assets/img/logo.jpg" alt="Witty-Grace Leather Works logo" />
        <h1 class="sitename">WITTY-GRACE LEATHER WORKS</h1>
      </a>

      <nav id="navmenu" class="navmenu" aria-label="Main navigation">
        <ul>
          <li><a href="{{ route('/') }}">Home</a></li>
          <li><a href="{{ route('about') }}">About</a></li>
          <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
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
        <h1>Contact</h1>
      </div>
    </div>

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>Asokoro, Abuja</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call</h3>
                <p><a href="tel:09024869007">09024869007</a></p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-whatsapp flex-shrink-0"></i>
              <div>
                <h3>WhatsApp</h3>
                <p><a href="https://wa.me/09024869007?text=Hello%21%20%F0%9F%91%8B%20Thank%20you%20for%20reaching%20out%20to%20Witty-Grace%20Leather%20Works.%20How%20can%20we%20assist%20you%20today%3F" target="_blank" rel="noopener">09030070824</a></p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email</h3>
                <p><a href="mailto:wittygrace09@gmail.com">wittygrace09@gmail.com</a></p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-7">
            @if(session('success'))
            <div class="alert alert-success valid-feedback" role="alert">{{ session('success') }}</div>
            @endif
            @if($errors->any())
            <div class="alert alert-danger invalid-feedback" role="alert">
              <ul class="mb-0">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
            <form action="{{ route('contact.store') }}" method="POST" class="php-email-form" data-aos="fade-up" data-aos-delay="500" novalidate>
              @csrf
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="name" class="form-label">Your Name</label>
                  <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Your Name" value="{{ old('name') }}" required aria-required="true" aria-label="Your Name">
                  @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="col-md-6">
                  <label for="email" class="form-label">Your Email</label>
                  <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Your Email" value="{{ old('email') }}" required aria-required="true" aria-label="Your Email">
                  @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="col-md-12">
                  <label for="subject" class="form-label">Subject</label>
                  <input type="text" id="subject" class="form-control @error('subject') is-invalid @enderror" name="subject" placeholder="Subject" value="{{ old('subject') }}" required aria-required="true" aria-label="Subject">
                  @error('subject')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="col-md-12">
                  <label for="message" class="form-label">Message</label>
                  <textarea id="message" class="form-control @error('message') is-invalid @enderror" name="message" rows="6" placeholder="Message" required aria-required="true" aria-label="Message">{{ old('message') }}</textarea>
                  @error('message')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="col-md-12 text-center">
                  <button type="submit" class="btn cta" aria-label="Send Message">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

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
