
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <title>@yield('title')</title>



  <title>Live Table Edit Delete Mysql Data using Tabledit Plugin in Laravel</title>    

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('backend/dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{ asset('backend/plugins/ijaboCropTool/ijaboCropTool.min.css')}}">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('backend/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('backend/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('backend/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('backend/plugins/summernote/summernote-bs4.min.css')}}">

  <link rel="stylesheet" href="{{ asset('backend/sweetalert2/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/toastr/toastr.min.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>


      <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
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

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{asset('backend/dist/img/user1-128x128.jpg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{asset('backend/dist/img/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{asset('backend/dist/img/user3-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ \URL::to('/')}}" class="brand-link">
      <img src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ Auth::user()->picture }}" class="img-circle elevation-2 admin_picture" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block admin_name">{{ Auth::user()->name }}</a>
        </div>
      </div>     

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          
         
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Classe
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('Addclasse')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter Classes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('listerClasse')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lister Classe</p>
                </a>
              </li>                           
              
            </ul>
          </li>


          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                inscription
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('addEleves')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter Nve</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('listerEl')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lister E</p>
                </a>
              </li>  
              <li class="nav-item">
                <a href="{{url('listerElPcla')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lister Eleves/Classe</p>
                </a>
              </li>        
              
            </ul>
          </li>


          <li class="nav-item"><a href="#" class="nav-link"> <i
								class="nav-icon fas fa-book"></i>
								<p>
									 MATIERES <i class="right fas fa-angle-left"></i>
								</p>
						</a>
							<ul class="nav nav-treeview">
								<li class="nav-item"><a href="#" class="nav-link"> <i
										class="far fa-circle nav-icon"></i>
										<p>
											Catégorie de Matière <i class="right fas fa-angle-left"></i>
										</p>
								</a>
									<ul class="nav nav-treeview">
										<li class="nav-item"><a href="{{url('addCatM')}}" class="nav-link"> <i
												class="far fa-dot-circle nav-icon"></i>
												<p>Ajouter une catégorie</p>
										</a></li>
										<li class="nav-item"><a href="{{url('listerElPcla')}}" class="nav-link"> <i
												class="far fa-dot-circle nav-icon"></i>
												<p>Lister des catégorie</p>
										</a></li>
									</ul></li>
								<li class="nav-item"><a href="{{url('addMatiere')}}"
									class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Ajouter une Matière</p>
								</a></li>
								<!-- <li class="nav-item"><a href="{{url('listerElPcla')}}"
									class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Liste des Matière</p>
								</a></li> -->
								<li class="nav-item"><a href="{{url('listerMatPcla')}}"
									class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Liste Matière/Classe</p>
								</a></li>
							</ul></li>


              <li class="nav-item"><a href="#" class="nav-link"> <i
								class="nav-icon fas fa-male"></i>
								<p>
									 PROFESSEURS <i class="right fas fa-angle-left"></i>
								</p>
						</a>
							<ul class="nav nav-treeview">
								<li class="nav-item"><a href="{{url('addProf')}}"
									class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Ajouter un professeur</p>
								</a></li>
								<li class="nav-item"><a href="{{url('ProfList')}}"
									class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Liste des professeur</p>
								</a></li>								
							</ul></li>


              <li class="nav-item"><a href="#" class="nav-link"> <i
								class="nav-icon fas fa-folder-open"></i>
								<p>
									 EXAMENS Note<i class="right fas fa-angle-left"></i>
								</p>
						</a>
							<ul class="nav nav-treeview">							
								
                <li class="nav-item"><a href="{{url('AjouterNotPcla')}}"
									class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>addNotParClasse</p>
								</a></li>
								<li class="nav-item"><a href="{{url('listerNotPcla')}}"
									class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Lister Notes</p>
								</a></li>
								<li class="nav-item"><a href="{{url('ProfList')}}"
									class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Bulletin</p>
								</a></li>								
								<li class="nav-item"><a href="pages/charts/inline.html"
									class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Releve des notes</p>
								</a></li>
							</ul></li>


          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
              Settings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('profile')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('ajouterUser')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>add Users</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Ajouter Document
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{url('addFichier')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>add fic</p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lister Classe</p>
                </a>
              </li>                           
              
            </ul>
          </li>



          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Examen
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('quizes')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter quiz</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('questionsView')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Question View</p>
                </a>
              </li>                           
              
            </ul>
          </li>


          <li class="nav-item"><a href="#" class="nav-link"> <i
								class="nav-icon fas fa-folder"></i>
								<p>
									Liste De Formation <i class="right fas fa-angle-left"></i>
								</p>
						</a>
							<ul class="nav nav-treeview">
								<li class="nav-item"><a href="{{url('ListDeFormation')}}"
									class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Liste De Formation</p>
								</a></li>
								<li class="nav-item"><a href=""
									class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Liste De Decision</p>
								</a></li>							
								
							</ul></li>


          <li class="nav-item"><a href="#" class="nav-link"> <i
								class="nav-icon fas fa-check"></i>
								<p>
									Presence/Absence <i class="right fas fa-angle-left"></i>
								</p>
						</a>
							<ul class="nav nav-treeview">
								<li class="nav-item"><a href="{{url('ajouterPresence')}}" 
									class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Ajouter Pres/Ab El</p>
								</a></li>
								<li class="nav-item"><a href="{{url('listePresence')}}"
									class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Lister Pres/Ab El</p>
								</a></li>
								     <!-- Presence Professeur --><a>PROFESSEUR</a>
								<li class="nav-item"><a href=""
									class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Ajouter Pres/Ab Prof</p>
								</a></li>
								<li class="nav-item"><a href=""
									class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Lister Pres/Ab Prof</p>
								</a></li>							
								
							</ul></li>


              <li class="nav-item"><a href="#" class="nav-link"> <i
								class="nav-icon fas fa-clock"></i>
								<p>
									Emploi Du Temp <i class="right fas fa-angle-left"></i>
								</p>
						</a>
							<ul class="nav nav-treeview">
								<li class="nav-item"><a href=""
									class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Ajouter Emploi</p>
								</a></li>
								<li class="nav-item"><a href=""
									class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Lister Emploi</p>
								</a></li>							
								
							</ul></li>



         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  @yield('content')
    <!-- Content Header (Page header) -->
    
    <!-- /.content -->
  </div>

  
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('backend/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('backend/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('backend/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('backend/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('backend/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('backend/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('backend/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('backend/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('backend/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('backend/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('backend/dist/js/pages/dashboard.js')}}"></script>


<script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('backend/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('backend/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('backend/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<script src="{{ asset('backend/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('backend/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/ijaboCropTool/ijaboCropTool.min.js') }}"></script>

<!-- Page specific script -->
<script>
//kkkkkkkkkkkkkkkk
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


  $(document).ready(function(){
			//$(".presValue").change()
			$(".presValue").val("abs");
			$(".checkPresAll").on("change", function(e){
				var checkAll = e.target.checked
				if(checkAll){
					$(".presValue").val("pres");
				}else{
					$(".presValue").val("abs");
				}
				
			
			})
			
			
			$(".checkPres").on("change", function(e){
				var pre = $(this).parent().children("input.presValue").val()
				if(pre == "abs"){
					$(this).parent().children("input.presValue").val("pres");
				}else{
					$(this).parent().children("input.presValue").val("abs")
				}
			
			})
			
            
		  
		});

  //kkkkkkkkkkkkkk
{{-- CUSTOM JS CODES --}}
toastr.options.preventDuplicates = true;
  $.ajaxSetup({
     headers:{
       'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
     }
  });

  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });

   $(document).on('click','#editBtn',function(){
     var classe_id= $(this).data('id_classe');
     alert(classe_id);
   });


    //ADD NEW classe
    $('#add-classe-form').on('submit', function(e){
                    e.preventDefault();
                    var form = this;
                    $.ajax({
                        url:$(form).attr('action'),
                        method:$(form).attr('method'),
                        data:new FormData(form),
                        processData:false,
                        dataType:'json',
                        contentType:false,
                        beforeSend:function(){
                             $(form).find('span.error-text').text('');
                        },
                        success:function(data){
                             if(data.code == 0){
                                   $.each(data.error, function(prefix, val){
                                       $(form).find('span.'+prefix+'_error').text(val[0]);
                                   });
                             }else{
                                 $(form)[0].reset();
                                //  alert(data.msg);
                                $('#classes-table').DataTable().ajax.reload(null, false);
                                toastr.success(data.msg);
                             }
                        }
                    });
                });


      //ADD NEW ins 
    $('#add-inscri-form').on('submit', function(e){
                    e.preventDefault();
                    var form = this;
                    $.ajax({
                        url:$(form).attr('action'),
                        method:$(form).attr('method'),
                        data:new FormData(form),
                        processData:false,
                        dataType:'json',
                        contentType:false,
                        beforeSend:function(){
                             $(form).find('span.error-text').text('');
                        },
                        success:function(data){
                             if(data.code == 0){
                                   $.each(data.error, function(prefix, val){
                                       $(form).find('span.'+prefix+'_error').text(val[0]);
                                   });
                             }else{
                                 $(form)[0].reset();
                                //  alert(data.msg);
                                $('#classes-table').DataTable().ajax.reload(null, false);
                                toastr.success(data.msg);
                             }
                        }
                    });
                });



                //ADD NEW catM 
    $('#add-catM-form').on('submit', function(e){
                    e.preventDefault();
                    var form = this;
                    $.ajax({
                        url:$(form).attr('action'),
                        method:$(form).attr('method'),
                        data:new FormData(form),
                        processData:false,
                        dataType:'json',
                        contentType:false,
                        beforeSend:function(){
                             $(form).find('span.error-text').text('');
                        },
                        success:function(data){
                             if(data.code == 0){
                                   $.each(data.error, function(prefix, val){
                                       $(form).find('span.'+prefix+'_error').text(val[0]);
                                   });
                             }else{
                                 $(form)[0].reset();
                                //  alert(data.msg);
                                $('#classes-table').DataTable().ajax.reload(null, false);
                                toastr.success(data.msg);
                             }
                        }
                    });
                });


                //ADD NEW Matiere 
    $('#add-Matiere-form').on('submit', function(e){
                    e.preventDefault();
                    var form = this;
                    $.ajax({
                        url:$(form).attr('action'),
                        method:$(form).attr('method'),
                        data:new FormData(form),
                        processData:false,
                        dataType:'json',
                        contentType:false,
                        beforeSend:function(){
                             $(form).find('span.error-text').text('');
                        },
                        success:function(data){
                             if(data.code == 0){
                                   $.each(data.error, function(prefix, val){
                                       $(form).find('span.'+prefix+'_error').text(val[0]);
                                   });
                             }else{
                                 $(form)[0].reset();
                                //  alert(data.msg);
                                $('#classes-table').DataTable().ajax.reload(null, false);
                                toastr.success(data.msg);
                             }
                        }
                    });
                });



                // user
                /* UPDATE ADMIN PERSONAL INFO */

    $('#AdminInfoForm').on('submit', function(e){
        e.preventDefault();

        $.ajax({
           url:$(this).attr('action'),
           method:$(this).attr('method'),
           data:new FormData(this),
           processData:false,
           dataType:'json',
           contentType:false,
           beforeSend:function(){
               $(document).find('span.error-text').text('');
           },
           success:function(data){
                if(data.status == 0){
                  $.each(data.error, function(prefix, val){
                    $('span.'+prefix+'_error').text(val[0]);
                  });
                }else{
                  $('.admin_name').each(function(){
                     $(this).html( $('#AdminInfoForm').find( $('input[name="name"]') ).val() );
                  });
                  alert(data.msg);
                }
           }
        });
    });

//update picture
    $(document).on('click','#change_picture_btn', function(){
      $('#admin_image').click();
    });

    $('#admin_image').ijaboCropTool({
          preview : '.admin_picture',
          setRatio:1,
          allowedExtensions: ['jpg', 'jpeg','png'],
          buttonsText:['CROP','QUIT'],
          buttonsColor:['#30bf7d','#ee5155', -15],
          processUrl:'{{ route("adminPictureUpdate") }}',
          // withCSRF:['_token','{{ csrf_token() }}'],
          onSuccess:function(message, element, status){
             alert(message);
          },
          onError:function(message, element, status){
            toastr.success(message);
          }
       });


        //update password
       $('#changePasswordAdminForm').on('submit', function(e){
         e.preventDefault();

         $.ajax({
            url:$(this).attr('action'),
            method:$(this).attr('method'),
            data:new FormData(this),
            processData:false,
            dataType:'json',
            contentType:false,
            beforeSend:function(){
              $(document).find('span.error-text').text('');
            },
            success:function(data){
              if(data.status == 0){
                $.each(data.error, function(prefix, val){
                  $('span.'+prefix+'_error').text(val[0]);
                });
              }else{
                $('#changePasswordAdminForm')[0].reset();
                toastr.success(data.msg);
              }
            }
         });
    });


//quiz
$(document).on('click','.quiz-status',function(){
     var id=$(this).attr('data_id');
   var url=("{!!url('/')!!}");
   
     $.get(url+'/quiz_status/'+id,function(fb){
         alert('Staus Successfully changed');
     });
    });

    $(document).ready(function(){
        $('#addform').on('submit',function(e){
            alert('yes');
            e.preventDefault();
            $.ajax({
                type:"POST",
                url:"/questions",
                data:$('#addform').serialize(),
        success:function(response){
        console.log(response)
    
            $('.alert-success').show()
                },
                error:function(response){
                    console.log(response)
                     if(response.status==422){
 $.each(response.responseJSON.errors, function (key, item)
          {
            $(".alert-danger").append("<li>"+item+"</li>")
          });

        $('.alert-danger').show()
         }else{
        $('.alert-danger').text(response.responseJSON.error)
        $('.alert-danger').show()
                     }
           
                }
            });
        });
    });


    
    $(document).on('click','.quiz-status',function(){
     var id=$(this).attr ('data_id');
   var url=("{!!url('/')!!}");

   $get(url+'/quiz_status/'+id,function(fb){
     alert('Status successfully change');
   }); 


    });

    ////////note
    $(document).ready(function(){
   
   $.ajaxSetup({
     headers:{
       'X-CSRF-Token' : $("input[name=_token]").val()
     }
   });
 
   $('#editable').Tabledit({
     url:'{{ url("tabledit.action") }}',
     dataType:"json",
     columns:{
       identifier:[0, 'id'],
       editable:[[1, 'nom'], [2, 'prenom']]
     },
     restoreButton:false,
     onSuccess:function(data, textStatus, jqXHR)
     {
       if(data.action == 'delete')
       {
         $('#'+data.id).remove();
       }
     }
   });
 
 });  



  });

  
  
  
</script>

</body>
</html>
