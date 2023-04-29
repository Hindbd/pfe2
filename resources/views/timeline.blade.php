<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{$user->name}} | Publications</title>
  <!-- Favicons -->
  <link href="assets/img/icon.png" rel="icon">
  <link href="assets/img/icon.png" rel="apple-touch-icon">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- AdminLTE css -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  <style>
    .sidebar {
      height: calc(100vh - 10px); /* set height to 100% viewport height minus height of the header */
      overflow-y: scroll; /* add vertical scroll */
      top: 0px; /* align it below the header */
      left: 0; /* align it to the left */
      width: 250px; /* set the width */
    }
    /* .brand-link {
      position: fixed;
    } */
  </style>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Acceuil</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/welcome" class="brand-link">
      <img src="../img/lab4.png" alt="LabSIV Logo" class="brand-image img-circle elevation-3" style="opacity: .8; font-size:x-large;">
      <span class="brand-text font-weight-semibold">LabSIV</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-1 pb-3 mb-3 d-flex">
        <div class="image">
          @if($user->img='NULL')
          <img src="dist/img/profile.png" class="img-circle elevation-2" alt="User Image">
          @else
          <img src="{{$user->img}}" class="img-circle elevation-2" alt="User Image">
          @endif
        </div>
        <div class="info">
          <a href="profile" class="d-block">{{$user->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      @if (Route::has('login') && Auth::check())
      <!-- ADMIN SIDEBAR -->
      @if($user->role == '4')
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="adminDashboard" class="nav-link">
              <i class="bi bi-microsoft nav-icon far"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li> 
            </li>
            <li class="nav-item">
              <a href="profile" class="nav-link">
                <i class="far fa-user nav-icon"></i>
                <p>
                  Profile
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="mailbox" class="nav-link">
                <i class="nav-icon far fa-envelope"></i>
                  <p>Postulations</p>
                </a>
            </li>
            <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-timeline"></i>
                <p>
                  Mes publications
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="timeline" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Voir tout</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pubs-add" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ajouter publication</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="bi far bi-kanban nav-icon"></i>
                <p>Projects
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="projects" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Voir tout</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="project-add" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ajouter Projet</p>
                  </a>
                </li>
                <!-- <li class="nav-item">
                  <a href="project-edit" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Modifier Projet</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="project-detail" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Project Details</p>
                  </a>
                </li> -->
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-users nav-icon"></i>
                <p>Equipes
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="teams" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Voir tout</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="team-add" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ajouter Equipe</p>
                  </a>
                </li>
                
                <!-- <li class="nav-item">
                  <a href="project-edit" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Edit Team</p>
                  </a>
                </li> -->
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
              <i class="bi bi-calendar2-event nav-icon far"></i>
                <p>Evénments
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="events" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Voir tout</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="event-add" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ajouter événement</p>
                  </a>
                </li>
                <!-- <li class="nav-item">
                  <a href="project-edit" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Edit Team</p>
                  </a>
                </li> -->
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="bi bi-view-list nav-icon far"></i>
                <p>Les Axes
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="axes" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Voir tout</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="add-axe" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ajouter Axe</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="contacts" class="nav-link">
                <i class="far fa-address-book nav-icon"></i>
                <p>Contacts</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('logout') }}"onclick="event.preventDefault();
              document.getElementById('logout-form').submit();" class="nav-link">
                <i class="fas fa-arrow-right-from-bracket nav-icon"></i>
                <p>Logout</p>
              </a>
            </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
          </ul>
        </nav>
    <!-- DOCTORANT SIDEBAR -->
    @elseif($user->role == '2')
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
           <li class="nav-item">
            <a href="doctorantDashboard" class="nav-link">
            <i class="bi bi-microsoft nav-icon far"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li> 
          </li>
          <li class="nav-item">
            <a href="profile" class="nav-link">
              <i class="far fa-user nav-icon"></i>
              <p>
                Profile
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-timeline"></i>
              <p>
                Mes publications
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="timeline" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Voir tout</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pubs-add" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Publier</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-users nav-icon"></i>
              <p>Mes Projets
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="projects" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projet actuelle</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="projects" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projets anciennes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="propose" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Proposer un projet</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-users nav-icon"></i>
              <p>Mes Equipes
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="teams" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Equipe actuelle</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="teams" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Equipes anciennes</p>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="nav-item">
            <a href="event-signup" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Sign up for event</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="contacts" class="nav-link">
              <i class="far fa-address-book nav-icon"></i>
              <p>Contacts</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}"onclick="event.preventDefault();
             document.getElementById('logout-form').submit();" class="nav-link">
              <i class="fas fa-arrow-right-from-bracket nav-icon"></i>
              <p>Logout</p>
            </a>
          </li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
        </ul>
      </nav>
    <!-- ENSEIGNANT SIDEBAR -->
    @elseif($user->role == '1')
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
           <li class="nav-item">
            <a href="doctorantDashboard" class="nav-link">
            <i class="bi bi-microsoft nav-icon far"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li> 
          </li>
          <li class="nav-item">
            <a href="profile" class="nav-link">
              <i class="far fa-user nav-icon"></i>
              <p>
                Profile
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-timeline"></i>
              <p>
                Mes publications
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="timeline" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Voir tout</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pubs-add" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Publier</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-users nav-icon"></i>
              <p>Mes Projets
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="projects" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projet actuelle</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="projects" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projets anciennes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="propose" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Proposer un projet</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-users nav-icon"></i>
              <p>Mes Equipes
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="teams" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Equipe actuelle</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="teams" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Equipes anciennes</p>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="nav-item">
            <a href="event-signup" class="nav-link">
            <i class="bi bi-calendar2-event nav-icon far"></i>
              <p>Sign up for event</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="contacts" class="nav-link">
              <i class="far fa-address-book nav-icon"></i>
              <p>Contacts</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}"onclick="event.preventDefault();
             document.getElementById('logout-form').submit();" class="nav-link">
              <i class="fas fa-arrow-right-from-bracket nav-icon"></i>
              <p>Logout</p>
            </a>
          </li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
        </ul>
      </nav>
    <!-- PARTENAIRE SIDEBAR -->
    @elseif($user->role == '3')
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="partenaireDashboard" class="nav-link">
              <i class="bi bi-microsoft nav-icon far"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="profile" class="nav-link">
              <i class="far fa-user nav-icon"></i>
              <p>
                Profile
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="propose" class="nav-link">
              <i class="far fa-user nav-icon"></i>
              <p>
                Proposer un projet
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="apply" class="nav-link">
              <i class="far fa-user nav-icon"></i>
              <p>
                Participer á un projet
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="event-signup" class="nav-link">
              <i class="far fa-user nav-icon"></i>
              <p>
                Participer á un event
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="contacts" class="nav-link">
              <i class="far fa-address-book nav-icon"></i>
              <p>Contacts</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}"onclick="event.preventDefault();
             document.getElementById('logout-form').submit();" class="nav-link">
              <i class="fas fa-arrow-right-from-bracket nav-icon"></i>
              <p>Logout</p>
            </a>
          </li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
        </ul>
      </nav>
    @endif
      <!-- /.sidebar-menu -->
  @endif
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Publications</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Acceuil</a></li>
              <li class="breadcrumb-item active">Publications</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- Timelime example  -->
        <div class="row">
          <div class="col-md-12">
            <!-- The time line -->
            <div class="timeline">
              <!-- timeline time label -->
              <div class="time-label">
                <span class="bg-red">10 Feb. 2014</span>
              </div>
              <!-- /.timeline-label -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-envelope bg-blue"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 12:05</span>
                  <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                  <div class="timeline-body">
                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                    weebly ning heekya handango imeem plugg dopplr jibjab, movity
                    jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                    quora plaxo ideeli hulu weebly balihoo...
                  </div>
                  <div class="timeline-footer">
                    <a class="btn btn-primary btn-sm">Read more</a>
                    <a class="btn btn-danger btn-sm">Delete</a>
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-user bg-green"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 5 mins ago</span>
                  <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request</h3>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-comments bg-yellow"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 27 mins ago</span>
                  <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>
                  <div class="timeline-body">
                    Take me to your leader!
                    Switzerland is small and neutral!
                    We are more like Germany, ambitious and misunderstood!
                  </div>
                  <div class="timeline-footer">
                    <a class="btn btn-warning btn-sm">View comment</a>
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline time label -->
              <div class="time-label">
                <span class="bg-green">3 Jan. 2014</span>
              </div>
              <!-- /.timeline-label -->
              <!-- timeline item -->
              <div>
                <i class="fa fa-camera bg-purple"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 2 days ago</span>
                  <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>
                  <div class="timeline-body">
                    <img src="https://placehold.it/150x100" alt="...">
                    <img src="https://placehold.it/150x100" alt="...">
                    <img src="https://placehold.it/150x100" alt="...">
                    <img src="https://placehold.it/150x100" alt="...">
                    <img src="https://placehold.it/150x100" alt="...">
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-video bg-maroon"></i>

                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 5 days ago</span>

                  <h3 class="timeline-header"><a href="#">Mr. Doe</a> shared a video</h3>

                  <div class="timeline-body">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tMWkeBIohBs" allowfullscreen></iframe>
                    </div>
                  </div>
                  <div class="timeline-footer">
                    <a href="#" class="btn btn-sm bg-maroon">See comments</a>
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <div>
                <i class="fas fa-clock bg-gray"></i>
              </div>
            </div>
          </div>
          <!-- /.col -->
        </div>
      </div>
      <!-- /.timeline -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
