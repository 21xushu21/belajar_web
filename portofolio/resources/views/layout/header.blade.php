  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="{{ route('user_home') }}" class="logo d-flex align-items-center  me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <i class="bi bi-camera"></i>
        <h1>PhotoFolio</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ route('user_home') }}" class="active">Home</a></li>
          <li><a href="{{ route('user_page_about') }}">About</a></li>
          <li class="dropdown"><a href="#"><span>Gallery</span> <i
                class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Nature</a></li>
              <li><a href="#">People</a></li>
              <li><a href="#">Architecture</a></li>
              <li><a href="#">Animals</a></li>
              <li><a href="#">Sports</a></li>
              <li><a href="#">Travel</a></li>
              <li class="dropdown"><a href="#"><span>Sub Menu</span> <i
                    class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Sub Menu 1</a></li>
                  <li><a href="#">Sub Menu 2</a></li>
                  <li><a href="#">Sub Menu 3</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="{{ route('user_page_services') }}">Services</a></li>
          <li><a href="{{ route('user_page_contact') }}">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="https://twitter.com/dddhny" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/danny.hermansyah.46/" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/dddhny/?hl=id" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
