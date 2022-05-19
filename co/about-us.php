<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Scheduler | About us</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="#" class="navbar-brand">
          <img src="images/logo-header.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
          <span class="brand-text font-weight-light"><strong>Schedul</strong>er</span>
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

<!--      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
         Left navbar links 
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="index3.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="#" class="dropdown-item">Some action </a></li>
              <li><a href="#" class="dropdown-item">Some other action</a></li>

              <li class="dropdown-divider"></li>

               Level two dropdown
              <li class="dropdown-submenu dropdown-hover">
                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>
                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  <li>
                    <a tabindex="-1" href="#" class="dropdown-item">level 2</a>
                  </li>

                   Level three dropdown
                  <li class="dropdown-submenu">
                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                    </ul>
                  </li>
                   End Level three 

                  <li><a href="#" class="dropdown-item">level 2</a></li>
                  <li><a href="#" class="dropdown-item">level 2</a></li>
                </ul>
              </li>
               End Level two 
            </ul>
          </li>
        </ul>

         SEARCH FORM 
        <form class="form-inline ml-0 ml-md-3">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>
      </div>-->

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
                <img src="../co/images/female-avatar.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <small>Announcement</small>
                <h3 class="dropdown-item-title">
                    Darshana H. Patel<small>(H. O. D.)</small>
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I congratulate you all for your 4th semesters good result</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
                <img src="../co/images/male-avatar.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <small>Announcement</small>
                <h3 class="dropdown-item-title">
                  Vijay K. Vyas<small>(Class Teacher)</small>
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Saturday, there will be no class!</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
                <img src="../co/images/male-avatar2.png" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <small>Assignment</small>
                <h3 class="dropdown-item-title">
                  Darshan P. Upadhyay <small>(Asst. Prof.)</small>
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I sent you the assignment of Ch-2, kindly go through it.</p>
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
          <span class="badge badge-warning navbar-badge"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">8 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 5 new assignment
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 3 new announcement
            <span class="float-right text-muted text-sm">1 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class='fas fa-list-ul' style='font-size:16px'></i>
          <span class="badge badge-warning navbar-badge"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <label class="dropdown-item dropdown-header">Log In</label>
          <div class="dropdown-divider"></div>
          <a href="../st/login-st.php" class="dropdown-item">
           <i class='fas fa-user' style='font-size:20px'></i> Log In - Student
          </a>
          <div class="dropdown-divider"></div>
          <a href="../fa/login-fa.php" class="dropdown-item">
            <i class='fas fa-user-tie' style='font-size:20px'></i> Log In - Faculty
          </a>
          <div class="dropdown-divider"></div>
          <a href="../ap/login-ap.php" class="dropdown-item">
            <i class='fas fa-user-plus' style='font-size:18px'></i> Log In - Administrator
          </a>
      </li>
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">About Us</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">

            <div class="card card-primary card-outline">
              <div class="card-body">
                <h3 class="">About Our Project - <strong>Schedul</strong>er.</h3>
                <h4><strong>Plann</strong>ing <strong>Matt</strong>ers!</h4>

                <p class="card-text">
                  This is a web application made to make professors' and students' life easy. It is a type of student - faculty portal. Here the registered faculties can give assignments, make important announcements and also set proxy lectures in their absence. The users can view all the assigned materials and notices easily. The monthly and weekly calenders are also available for all the users on each page for easy access of information.
                </p>
              </div>
            </div><!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          
          <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2>Our Team</h2>
          </div>
            
        <div class="row" style="width: 110%">
            <!-- Widget: user widget style 1 -->
            <div class="col-md-3" style="width: 25%">
               
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-gradient-cyan">
                <h2 class="widget-user-username">Devam Parikh</h2>
                <h5 class="widget-user-desc"><small>(Team Scheduler)</small></h5>
              </div>
              <div class="widget-user-image">
                  <img class="img-circle elevation-2" src="../co/images/36.jpg" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <p class="text-muted text-center">Back-End / DB / Web Designer / UX<br/> <br> -- <i class="fa fa-mail-bulk" style="font-size:17px;"> -- </i> <br> <i class="fa fa-envelope" style="font-size:17px"></i> : devamparikh15@gmail.com <br/> <i class="fas fa-lg fa-phone" style="font-size:17px"></i>: 9978816621</p>
                </div>
              </div>
            <!-- /.widget-user -->
            </div>
        </div>
           
        <div class="col-md-3" style="width: 25%">
           
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-dark">
                <h2 class="widget-user-username">Deep Kiyada</h2>
                <h5 class="widget-user-desc"><small>(Team Scheduler)</small></h5>
              </div>
              <div class="widget-user-image">
                  <img class="img-circle elevation-2" src="../co/images/22.jpg" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <p class="text-muted text-center">Web Designer / UX / Back-End / DB<br/> <br> -- <i class="fa fa-mail-bulk" style="font-size:17px;"> -- </i> <br> <i class="fa fa-envelope" style="font-size:17px"></i> : deepkiyada7@gmail.com <br/> <i class="fas fa-lg fa-phone" style="font-size:17px"></i>: 7874126300</p>
                </div>
              </div>
            <!-- /.widget-user -->
            </div>
        </div>
         
            <!-- Widget: user widget style 1 -->
        <div class="col-md-3" style="width: 25%">
           
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-gradient-olive">
                <h2 class="widget-user-username">Rahul Mandaliya</h2>
                <h5 class="widget-user-desc"><small>(Team Scheduler)</small></h5>
              </div>
              <div class="widget-user-image">
                  <img class="img-circle elevation-2" src="../co/images/27.jpg" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div>
                    <p class="text-muted text-center">Data Base / Tester / UX<br> <br> -- <i class="fa fa-mail-bulk" style="font-size:17px;"> -- </i> <br> <i class="fa fa-envelope" style="font-size:17px; align-content: center"></i> : mandaliyar99@gmail.com <br/> <i class="fas fa-lg fa-phone" style="font-size:17px"></i>: 8780320961</p>
                </div>
              </div>
            <!-- /.widget-user -->
            </div>
        </div>
           
        <div class="col-md-3" style="width: 25%">
          
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-gradient-gray">
                <h2 class="widget-user-username">Yasar Khedara</h2>
                <h5 class="widget-user-desc"><small>(Team Scheduler)</small></h5>
              </div>
              <div class="widget-user-image">
                  <img class="img-circle elevation-2" src="../co/images/20.jpg" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                    <p class="text-muted text-center">Data Base / Tester / UX<br/> <br> -- <i class="fa fa-mail-bulk" style="font-size:17px;"> -- </i> <br> <i class="fa fa-envelope" style="font-size:17px"></i> : yasarkhedara4014@gmail.com <br/> <i class="fas fa-lg fa-phone" style="font-size:17px"></i>: 9106286843</p>
                </div>
              </div>
            <!-- /.widget-user -->
            </div>
        </div>
         
    </div>
          
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
<?php include '../themepart/footer.php'; ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
</body>
</html>
