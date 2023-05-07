<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LabSIV | Evénements</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/icon.png" rel="icon">
  <link href="/assets/img/icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">
  <!-- Bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

  <!-- =======================================================
  * Template Name: Arsha
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="mainHome" class="logo me-auto"><img src="img/lab4.png" alt="" class="img-fluid" style ="background: transparent; width: 50px; height: 100px;"></a> -->
      <h1 class="logo me-auto"><a href="mainHome">LabSIV</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="#about">Á Propos</a></li>
          <li><a class="nav-link scrollto" href="#services">Publications</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Evénements</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Projets</a></li>
          <li><a class="nav-link scrollto" href="#team">Equipes</a></li>
          <li class="dropdown"><a href="#why-us"><span>Axes de recherche</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Intelligence Artificielle</a></li>
              <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> -->
              <li><a href="#">Sécurité Informatique</a></li>
              <li><a href="#">Traitement d'images</a></li>
              <li><a href="#">Systemes Embarqués</a></li>
              <li><a href="#">Analyse De Données</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contacter</a></li>
          @if (Route::has('login') && Auth::check())
                <div class="top-right links">
                    <a href="{{ url('/home') }}">{{Auth::user()->name}}</a>
                </div>
            @elseif (Route::has('login') && !Auth::check())
              <div class="container-fluid">
                <div class="row top-right links">
                  <div class="col-6 text-center"><a class="getstarted scrollto " href="{{ url('/login') }}">Sign in</a></div>
                  <div class="col-6"><a class="getstarted scrollto " href="{{ url('/register') }}">Sign up</a></div>
                </div>
              </div>
            @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="mainHome">Acceuil</a></li>
          <li>Evénements</li>
        </ol>
        <h2>Details</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Info d'événement</h3>
              <ul>
                <!-- <li><strong>Category</strong>: Web design</li> -->

                {{$event->description}}
                {{$event->titre}}                 
                 <li><strong>Emplacement</strong>: {{$event->Lieu}}</li>
                  <li><strong>Date debut</strong>: {{$event->date_debut}}</li>
                  <li><strong>Date fin</strong>: {{$event->date_fin}}</li>
                  @foreach($pubs as $pub)
                    @if($pub->FK_event == $event->id)
                    @php
                      $pubb = App\Models\Pubs::find($pub->FK_pub);
                    @endphp
                    <img src="{{$pubb->img}}">
                    @endif
                  @endforeach
                <!-- <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li> -->
              </ul>
            </div>
            <div class="portfolio-description">
              <h2></h2>
              <p>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>LabSIV</h3>
            <p>
              Faculté des Sciences, Ibn Zohr <br>
              Agadir<br>
              Maroc<br><br>
              <strong>Tele:</strong> +212 612345678<br>
              <strong>Email:</strong> labsiv@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Liens utils</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="mainHome">Acceuil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">Á Propos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Publications</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#pricing">Projets</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Evénements</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nos Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Postuler pour un stage</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Devenir partenaire</a></li>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li> -->
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              <a href="#" class="github"><i class="bx bxl-github"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; 2023 <strong><span>LabSIV</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="/">H. Bouhedda & F. Moustabchir</a>
      </div>
    </div>
  </footer><!-- End Footer -->
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>

</body>

</html>