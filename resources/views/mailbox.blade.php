<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{$user->name}} | Inbox</title>
  <!-- Favicons -->
  <link href="assets/img/icon.png" rel="icon">
  <link href="assets/img/icon.png" rel="apple-touch-icon">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  <style>
    .sidebar {
      height: calc(100vh - 10px); /* set height to 100% viewport height minus height of the header */
      overflow-y: scroll; /* add vertical scroll */
      top: 10px; /* align it below the header */
      left: 0; /* align it to the left */
      width: 250px; /* set the width */
    }
    /* .brand-link {
      position: fixed;
    } */
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="mainHome" class="nav-link">Acceuil</a>
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
  <aside class="main-sidebar sidebar-dark-primary elevation-4 position-fixed">
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
      <!-- ADMIN SIDEBAR -->
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
                  <p>Inbox</p>
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
            <h1>Inbox</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Acceuil</a></li>
              <li class="breadcrumb-item active">Inbox</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        
        <!-- /.col -->
        <div class="col-md-12">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">Inbox</h3>

              <!-- <div class="card-tools">
                <div class="input-group input-group-sm">
                  <input type="text" class="form-control" placeholder="Search Mail">
                  <div class="input-group-append">
                    <div class="btn btn-primary">
                      <i class="fas fa-search"></i>
                    </div>
                  </div>
                </div>
              </div> -->
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-controls">
              
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <thead>
                    <tr>
                      <th style="width: 15%">
                        Nom
                      </th>
                      <th style="width: 20%">
                        E-mail
                      </th>
                      <th style="width: 20%">
                        Sujet
                      </th>
                      <th style="width: 30%">
                        Message
                      </th>
                      <th style="width: 10%">
                        Date
                      </th>
                      <th style="width: 5%"></th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($msgs as $msg)
                  <tr>
                    <td class="mailbox-name">{{ $msg->nom }}</td>
                    <td class="mailbox-email">{{ $msg->email }}</td>
                    <td class="mailbox-subject"><b>{{ $msg->sujet }}</b></td>
                    <td class="mailbox-message">{{ $msg->message}}</td>
                    <td class="mailbox-date">
                        <?php
                        $timestamp = strtotime($msg->created_at);
                        $difference = time() - $timestamp;
                        $interval = '';
                        if ($difference < 60) {
                          $interval = 'just now';
                        } elseif ($difference < 3600) {
                          $interval = floor($difference / 60) . ' min ago';
                        } elseif ($difference < 86400) {
                          $interval = floor($difference / 3600) . ' hours ago';
                        } else {
                          $interval = floor($difference / 86400) . ' days ago';
                        }
                        echo $interval;
                        ?>
                      </td>
                    <td> <button onclick="onRepondreButtonClick(this)"  data-link="{{$msg->email}}" class="btn btn-sm btn-danger" >Répondre </button></td>
                  </tr>
                  @endforeach

                  </tbody>
                </table>
  
                <!-- /.btn-group -->
               
                  <!-- /.btn-group -->
                </div>
                <!-- /.float-right -->
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
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
<!-- Page specific script -->
<script>
  $(function () {
    //Enable check and uncheck all functionality
    $('.checkbox-toggle').click(function () {
      var clicks = $(this).data('clicks')
      if (clicks) {
        //Uncheck all checkboxes
        $('.mailbox-messages input[type=\'checkbox\']').prop('checked', false)
        $('.checkbox-toggle .far.fa-check-square').removeClass('fa-check-square').addClass('fa-square')
      } else {
        //Check all checkboxes
        $('.mailbox-messages input[type=\'checkbox\']').prop('checked', true)
        $('.checkbox-toggle .far.fa-square').removeClass('fa-square').addClass('fa-check-square')
      }
      $(this).data('clicks', !clicks)
    })

    //Handle starring for font awesome
    $('.mailbox-star').click(function (e) {
      e.preventDefault()
      //detect type
      var $this = $(this).find('a > i')
      var fa    = $this.hasClass('fa')

      //Switch states
      if (fa) {
        $this.toggleClass('fa-star')
        $this.toggleClass('fa-star-o')
      }
    })
  })
</script>
</body>
</html>
