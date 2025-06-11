<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Services - WITTY-GRACE LEATHER WORKS</title>
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

<body class="services-page">

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
          <li><a href="{{ route('contact') }}">Contact</a></li>
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
        <h1>Services</h1>
      </div>
    </div>

    <!-- Services Section -->
    <section id="services" class="services section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-briefcase"></i>
              </div>
              <h2>Our Services</h2>
              <p>We craft high-quality leather products, blending traditional craftsmanship with modern design to create timeless pieces.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-handbag"></i>
              </div>
              <h3>Custom Leather Bags</h3>
              <p>Handcrafted leather bags tailored to your style and needs, made from premium materials.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-shield-check"></i>
              </div>
              <h3>Premium Leather Footwear</h3>
              <p>Experience comfort and durability with our expertly crafted leather shoes for all occasions.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-wallet"></i>
              </div>
              <h3>Leather Wallets & Accessories</h3>
              <p>Find the perfect leather wallet, belt, or key holder designed to last a lifetime.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-person-lines-fill"></i>
              </div>
              <h3>Corporate & Custom Orders</h3>
              <p>We provide customized leather products for corporate branding, events, and personalized gifts.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-gem"></i>
              </div>
              <h3>Repairs & Restoration</h3>
              <p>We restore and refurbish your favorite leather items, bringing them back to life with expert craftsmanship.</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section>
    <!-- /Services Section -->



    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Customer Testimonials</h2>
        <p>See what our customers have to say about our handcrafted leather products.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('MyPortfolio/assets/img/witty/2.jpg')}}" class="img-fluid" alt="">
                <h3>David Johnson</h3>
                <h4>Business Executive</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>The craftsmanship is exceptional! My leather briefcase is stylish, durable, and perfect for my daily needs.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('MyPortfolio/assets/img/witty/2.jpg')}}" class="img-fluid" alt="">
                <h3>Sarah Williams</h3>
                <h4>Fashion Enthusiast</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>The leather handbags are stunning! The quality and attention to detail are truly impressive.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('MyPortfolio/assets/img/witty/2.jpg')}}" class="img-fluid" alt="">
                <h3>Michael Brown</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>I've been selling Witty Grace Leather Works products in my store, and customers love them! Amazing quality and craftsmanship.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('MyPortfolio/assets/img/witty/2.jpg')}}" class="img-fluid" alt="">
                <h3>Jessica Adams</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>These shoes are incredibly comfortable! I can wear them all day without any discomfort. Highly recommend!</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>

          <div class="swiper-pagination"></div>

        </div>

      </div>

    </section>
    <!-- End testimonial item -->


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
