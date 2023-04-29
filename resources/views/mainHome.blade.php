<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

  <title>LabSIV | Acceuil</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/icon.png" rel="icon">
  <link href="assets/img/icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
    
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="mainHome" class="logo me-auto"><img src="img/lab4.png" alt="" class="img-fluid" style ="background: transparent; width: 50px; height: 100px;"></a> -->
      <h1 class="logo me-auto"><a href="mainHome">LabSIV</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="#about">Á propos</a></li>
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
                          @if($user->role == '4')
                          <div class="top-right links">
                              <a href="{{ url('/adminDashboard') }}"  class="getstarted scrollto mx-4">{{Auth::user()->name}}</a>
                          </div>
                          @elseif($user->role == '1')
                          <div class="top-right links">
                              <a href="{{ url('/profDashboard') }}"   class="getstarted scrollto mx-2">{{Auth::user()->name}}</a>
                          </div>
                          @elseif($user->role == '2')
                          <div class="top-right links">
                              <a href="{{ url('/doctorantDashboard') }}"  class="getstarted scrollto mx-2">{{Auth::user()->name}}</a>
                          </div>
                          @elseif($user->role == '3')
                          <div class="top-right links">
                              <a href="{{ url('/partenaireDashboard') }}"  class="getstarted scrollto mx-2">{{Auth::user()->name}}</a>
                          </div>
                          @endif
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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Laboratoire des Systemes Informatiques et Vision</h1>
          <h2>Le laboratoire de recherche en informatique de la <span title="Faculté des Sciences d'Agadir" style="color:bisque">FSA</span></h2>
          <!-- <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#portfolio" class="btn-get-started scrollto">Explore</a>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div> -->
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Á Propos De Nous</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
            <strong>LabSIV</strong>, le <strong>Lab</strong>oratoire des <strong>S</strong>ystemes <strong>I</strong>nformatiques & <strong>V</strong>ision est une unitè de recherche de la Faculte 
            des Sciences d'Agadir de l'Université Ibn Zohr. Il est spécialisé dans les domaines de la recherche
            en systemes informatiques et regroupe des enseignants-chercheurs, des doctorants et des ingènieurs
            de recherche, et il a pour mission de contribuer au developpement de la recherche scientifique et technologique 
            dans les domaines de l'informatique. 
            <!-- Les recherches menées au sein du laboratoire visent á rèpondre aux défis
            actuels et futurs dans ces domaines, en proposant des solutions innovantes et efficaces.
            Dans cet aperçu genéral, nous présenterons les objectifs de recherche du laboratoire, les équipes de 
            recherche et leurs travaux, les axes de recherche et leurs applications, ainsi que les partenariats 
            et collaborations en cours. Nous aborderons egalement les publications et realisations du laboratoire, 
            ainsi que les perspectives et projets futurs. -->
            </p>
            <a href="#" class="btn-learn-more">En savoir plus</a>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
            Le LabSIV a pour objectif de mener des recherches innovantes dans les domaines de l'informatique et de la vision, et de contribuer a l'avancement des connaissances dans ces domaines. Les objectifs specifiques du LabSIV sont les suivants:
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Concevoir et developper des systémes informatiques efficaces</li>
              <li><i class="ri-check-double-line"></i> Analyser et traiter des donnees complexes </li>
              <li><i class="ri-check-double-line"></i> Ameliorer la qualité de l'imagerie</li>
              <li><i class="ri-check-double-line"></i> Contribuer a la formation et à la diffusion des connaissances</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>Nos <strong>Axes de Recherche</strong></h3>
              <p>
              Le LabSIV se concentre sur des axes de recherche dans les domaines de l'informatique et de la vision qui ont un impact significatif sur la societé et l'industrie
              </p>
            </div>

            <div class="accordion-list">
              <ul>
              @foreach($axes as $axe)
                  <li>
                    <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-{{$loop->iteration}}"><span>0{{$axe->id}}</span> {{$axe->nom}} <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="accordion-list-{{$loop->iteration}}" class="collapse " data-bs-parent=".accordion-list">
                      <p>
                        {{$axe->contenu}}
                      </p>
                    </div>
                  </li>
              @endforeach
              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Nos Dernières Publications</h2>
          <p>Ces publications et realisations témoignent de l'excellence de la recherche menée au sein du LabSIV et de l'impact de ses travaux dans les domaines de l'informatique.</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Lorem Ipsum</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
              <a href="#" class="btn-learn-more">Lire la suite</a>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Sed ut perspici</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            <a href="#" class="btn-learn-more">Lire la suite</a>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Magni Dolores</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            <a href="#" class="btn-learn-more">Lire la suite</a>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="">Nemo Enim</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            <a href="#" class="btn-learn-more">Lire la suite</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Become a Partner</h3>
            <p>Le LabSIV collabore avec plusieurs universites, centres de recherche et entreprises dans le domaine 
            de la recherche en informatique et en vision par ordinateur. Ces collaborations ont permis d'etablir des 
            synergies entre les differentes institutions, de partager des connaissances et des competences, et de 
            favoriser la mise en œuvre de projets de recherche ambitieux</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#contact">Postulez Maintenant</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Our Latest Events</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">1</li>
          <li data-filter=".filter-card">2</li>
          <li data-filter=".filter-web">3</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Title</h4>
              <p>Description</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-zoom-in"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bi bi-eye"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Title</h4>
              <p>Description</p>
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bi bi-zoom-in"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bi bi-eye"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Title</h4>
              <p>Description</p>
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bi bi-zoom-in"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bi bi-eye"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Title</h4>
              <p>Description</p>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bi bi-zoom-in"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bi bi-eye"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Title</h4>
              <p>Description</p>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bi bi-zoom-in"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bi bi-eye"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Title</h4>
              <p>Description</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bi bi-zoom-in"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bi bi-eye"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Title</h4>
              <p>Description</p>
              <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bi bi-zoom-in"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bi bi-eye"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Title</h4>
              <p>Description</p>
              <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bi bi-zoom-in"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bi bi-eye"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Title</h4>
              <p>Description</p>
              <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bi bi-zoom-in"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bi bi-eye"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Nos Dernières équipes créées</h2>
          <p>Chaque equipe de recherche est dirigée par un chercheur principal expérimenté et est composée
          de doctorants, de post-doctorants et de stagiaires de recherche. Les equipes de recherche collaborent 
          souvent entre elles sur des projets interdisciplinaires pour developper des solutions innovantes dans 
          les domaines de l'informatique et de la vision.</p>
        </div>

        <div class="row ">

          <div class="col-lg-6 " data-aos="zoom-in" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info ">
                <span>Dirigé par</span>
                <h4>Walter White</h4>
                <p>a brief description about the project</p>
                <div class="social">
                  <a href="#" class="btn-learn-more">En savoir plus</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <span>Dirigé par</span>
                <h4>Sarah Jhonson</h4>
                <p>a brief description about the project</p>
                <div class="social">
                  <a href="#" class="btn-learn-more">En savoir plus</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <span>Dirigé par</span>
                <h4>Wilian Anderson</h4>
                <p>a brief description about the project</p>
                <div class="social">
                  <a href="#" class="btn-learn-more">En savoir plus</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <span>Dirigé par</span>
                <h4>Amanda Jepson </h4>
                <p>a brief description about the project</p>
                <div class="social">
                  <a href="#" class="btn-learn-more">En savoir plus</a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Perspectives & Projets Futurs</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3 class="fw-bold">Apprentissage en profondeur</h3>
              <span>Axes de recherche inclus: ...</span><hr>
              <p>le LabSIV continuera a explorer les methodes d'apprentissage en 
              profondeur pour ameliorer les performances de reconnaissance de formes, de vision par ordinateur 
              et de robotique. Les projets futurs incluent l'application de ces methodes á des problemes 
              tels que la reconnaissance d'emotions et la génération de contenu. </p>
              <a href="#" class="buy-btn">Reas more</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3 class="fw-bold">Analyse d'images medicales</h3>
              <span>Axes de recherche inclus: ...</span><hr>
              <p>le LabSIV se concentrera sur l'analyse d'images medicales pour 
              ameliorer le diagnostic et le traitement des maladies. Les projets futurs incluent l'application 
              de l'apprentissage en profondeur a la segmentation d'images medicales et á la classification des 
              lesions</p>
              <a href="#" class="buy-btn">Read more</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3 class="fw-bold">Collaboration avec l'industrie</h3>
              <span>Axes de recherche inclus: ...</span><hr>
              <p>le LabSIV collaborera avec des entreprises de l'industrie et des universites de renom dans le monde entier, 
              notamment en France. Ces collaborations ont permis de mettre en place des
              programmes de recherche conjoints, des echanges de chercheurs et d'étudiants, 
              pour developper des applications pratiques de ses recherches</p>
              <a href="#" class="buy-btn">Read More</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contactez-nous si vous souhaitezdevenir partenaire ou stagiaire</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Emplacement:</h4>
                <p>Faculty of Science, Ibn Zohr, Agadir, Morocco</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>labsiv@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Tele:</h4>
                <p>+212 612345678</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6882.385777021239!2d-9.5503741!3d30.4022688!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb3c82aa3d6fe31%3A0x8ef661d2ccb5a617!2sFaculty%20of%20Science%2C%20Ibn%20Zohr!5e0!3m2!1sen!2sma!4v1681703041531!5m2!1sen!2sma" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <!-- <form action="{{ route('contact') }}" method="post" role="form" class="php-email-form"> -->
              <form action="{{ route('contact') }}" method="post" >
              @csrf

              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Nom</label>
                  <input type="text" name="nom" class="form-control" id="nom" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Sujet</label>
                <input type="text" class="form-control" name="sujet" id="sujet" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <!-- <div class="my-3"> -->
                <!-- <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div> -->
              <!-- </div> -->
              <div class="text-center"><button type="submit">Envoyer</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <!-- <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div> -->

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
            <h4>Liens Utils</h4>
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
            <h4>Nos Réseaux Sociaux</h4>
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
        &copy; 2023 <strong><span>LabSIV</span></strong>.
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Developed by <a href="https://bootstrapmade.com/">F.Moustabchir & H.Bouhedda</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
</body>

</html>