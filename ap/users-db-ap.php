<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Scheduler | User Data Base-AP </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
<?php

include '../themepart/header.php'

?>
  <!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../co/about-us.php" class="brand-link">
        <img src="../co/images/logo-sidebar.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><strong>Schedul</strong>er</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <i class='fas fa-user-circle' style='font-size:32px;color:white'></i>
        </div>
        <div class="info">
            <a href="profile-ap.php" class="d-block">Team Scheduler</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
              <a href="admin-panel.php" class="nav-link">
              <i class='fas fa-calendar-alt' style='font-size:20px'></i>
              <p>
                Time Table Update
              </p>
            </a> 
          </li>
          
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class='far fa-folder-open' style='font-size:18px'></i>
              <p>
                Data Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users Data Entry</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="subjects-db-ap.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Subject Data Entry</p>
                </a>
              </li>
            </ul>
          </li>
          
        <li class="nav-header">SCHEDULER</li>
          <li class="nav-item">
              <a href="calender-ap.php" class="nav-link">
              <i class="nav-icon far fa-calendar-alt" style="font-size:22px"></i>
              <p>
                Calendar
              </p>
            </a>
          </li>
          <li class="nav-item">
              <a href="weekly-tt-ap.php" class="nav-link">
              <i class='fas fa-chalkboard-teacher' style='font-size:20px'></i>
              <p>
                Weekly Time Table
              </p>
            </a>
          </li>
          
        <li class="nav-header">EXIT</li>
           <li class="nav-item">
               <a href="login-ap.php" class="nav-link">
              <i class='fas fa-sign-out-alt' style='font-size:20px'></i>
              <p>
                Log Out
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Users Data Entry</h1>
          </div>
                <!-- Main content -->
                    
    <!-- /.content -->
        </div>
      </div>
    </div><!-- /.col -->
    <?php
    include "db.php";
    if(isset($_POST['faculty'])){
      $professor_name = $_POST['name'];
      $professor_short = $_POST['name_short'];
      $professor_contact = $_POST['contact'];
      $professor_email = $_POST['email'];
      $professor_pass = $_POST['pass'];
      $professor_post = $_POST['post'];
      $query = "INSERT INTO `professor` (`professor_id`, `professor_name`, `professor_contact`, `professor_email`, `professor_post`, `professor_short`, `professor_pass`) VALUES (NULL, '$professor_name', '$professor_contact', '$professor_email', '$professor_post', '$professor_short', '$professor_pass')";
      $result = mysqli_query($connection,$query);
    
    
    
    }
    
    if(isset($_POST['student'])){
      $student_name = $_POST['name'];
      $student_dept = $_POST['dept'];
      $student_contact = $_POST['contact'];
      $student_email = $_POST['email'];
      $student_pass = $_POST['pass'];
      $student_enroll = $_POST['enroll'];
      $student_sem = $_POST['sem'];
      $student_batch = $_POST['batch'];

      $query = "INSERT INTO `student` (`student_id`, `student_name`, `student_contact`, `student_email`, `student_enroll`, `student_pass`, `student_sem`, `student_dept`, `student_batch`) VALUES (NULL, '$student_name', '$student_contact', '$student_email', '$student_enroll', '$student_pass', '$student_sem', '$student_dept', '$student_batch')";
      $result = mysqli_query($connection,$query);
    
    
    
    }
    
    
    
    
    ?>
    <section>
        <div class="container-fluid">
            <div class='row'>
                <div class='col-md-6'>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">To Add Faculty User Data</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                            <form role="form" action="" method = "post">
                              <div class="card-body" width="200" height="200">
                                <div class="form-group">
                                  <label>Full Name</label>
                                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter Full Name">
                                </div>
                                <div class="form-group">
                                  <label>Short Name</label>
                                  <input type="text" class="form-control" id="name" name="name_short" placeholder="Enter Short Name">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputnumbeer">Contact Number</label>
                                  <input type="contactnumber" class="form-control" id="number" name="contact" placeholder="Enter Contact Number">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Email Address</label>
                                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter Mail Address">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword">Password</label>
                                  <input type="password" class="form-control" id="email" name="pass" placeholder="Enter Password">
                                </div>
                                <div class="form-group">
                                  <label>Post</label>
                                  <input type="text" class="form-control" id="post" name="post" placeholder="Enter Post">
                                </div>
                                <div class="card" align='center'>
                                    <button type="submit" class="btn btn-primary" name="faculty">Submit</button>
                                </div>
                              </div>
                            </form>
                    </div>
                </div>
               
                    
                <div class="col-md-6">
                    <!-- Main content -->
                    <div class="container-fluid">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">To Add Students User Data</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" action="" method = "post">
                              <div class="card-body">
                                <div class="form-group">
                                  <select class="btn btn-default" name="dept">
                                            <option value="" disabled selected hidden>Department</option>
                                            <option value="">IT</option>
                                            <option value="">CE</option>
                                            <option value="">EC</option>
                                            <option value="">EE</option>
                                            <option value="">ME</option>
                                            <option value="">Civil E</option>
                                            <option value="">Chem E</option>
                                            <option value="">BT</option>
                                            <option value="">NT</option>
                                        </select>
                                </div>
                                <div class="form-group">
                                  <label>Enroll No.</label>
                                  <input type="enrollnumber" class="form-control" id="enroll no." name="enroll" placeholder="Enter Enroll Number">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputnumbeer">Name</label>
                                  <input type="text" class="form-control" id="number" name="name" placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Contact Number</label>
                                  <input type="contactnumber" class="form-control" id="contact no." name="contact" placeholder="Enter Contact Number">
                                </div>
                                <div class="form-group">
                                  <label>Email Address</label>
                                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Address">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Password</label>
                                  <input type="password" class="form-control" id="contact no." name="pass" placeholder="Enter Password">
                                </div>
                               
                                  <div class="form-group">
                                        <select class="btn btn-default" name="sem">
                                            <option value="" disabled selected hidden>Semester</option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                            <option value="">4</option>
                                            <option value="">5</option>
                                            <option value="">6</option>
                                            <option value="">7</option>
                                            <option value="">8</option>
                                        </select>
                                  </div>
                                  <div class="form-group">
                                        <select class="btn btn-default" name="batch">
                                            <option value="" disabled selected hidden>Batch</option>
                                            <option value="">D1</option>
                                            <option value="">D2</option>
                                        </select>
                                    </div>
                                
                                      <br>
                               
                                <div class="card" align='center'>
                                    <button type="submit" class="btn btn-primary" name="student">Submit</button>
                                </div>
                              </div>
                            </form>
                            </div>
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
    </section>
</div>
<!-- /.content-header -->



  <!-- /.content-wrapper -->
  <?php
  
  include '../themepart/footer.php'
  
  ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
