<?php ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Scheduler</title>
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
  <!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../co/about-us.php" class="brand-link">
        <img src="../co/images/logo-sidebar.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><strong>Schedul</strong>er</span>
    </a>
    
    <?php
  if(isset($_GET['login'])){
    $student_enroll = $_GET['login'];
    }   
    ?>
    
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <i class='fas fa-user-circle' style='font-size:32px;color:white'></i>
        </div>
        <div class="info">
        <?php
        include "db.php";
        $query = "SELECT student_name FROM student WHERE student_enroll = ".$student_enroll."";
        $result = mysqli_query($connection,$query);
        if(!$result){
          // header("Location: login.php?login=professor_id");
          die('Query Failed' . mysqli_error($connection));
          
          exit();
          }
          $student = mysqli_fetch_assoc($result);
          $student_name = $student['student_name'];
        
        
        
        ?>
            <a href="profile-st.php?login=<?php echo $student_enroll; ?>" class="d-block"><?php echo $student_name; ?>
                <br>
            ID: <?php echo $student_enroll; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
              <a href="master-st.php?login=<?php echo $student_enroll; ?>" class="nav-link">
              <i class='fas fa-calendar-alt' style='font-size:20px'></i>
              <p>
                Planner
              </p>
            </a>
            
          </li>
          
          <li class="nav-item">
              <a href="to-get-assignment.php?login=<?php echo $student_enroll; ?>" class="nav-link">
              <i class='fas fa-laptop-house' style='font-size:18px'></i>
              <p>
                Assignment
              </p>
            </a>
          </li>
          
          
         <li class="nav-header">SCHEDULER</li>
          <li class="nav-item">
              <a href="calender-st.php?login=<?php echo $student_enroll; ?>" class="nav-link">
              <i class="nav-icon far fa-calendar-alt" style="font-size:22px"></i>
              <p>
                Calendar
              </p>
            </a>
          </li>
          <li class="nav-item">
              <a href="weekly-tt-st.php?login=<?php echo $student_enroll; ?>" class="nav-link">
              <i class='fas fa-chalkboard-teacher' style='font-size:20px'></i>
              <p>
                Weekly Time Table
              </p>
            </a>
          </li>
          
        <li class="nav-header">EXIT</li>
           <li class="nav-item">
               <a href="login-st.php" class="nav-link">
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

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Edit Profile</a>
      </li>
    </ul>
  </nav>
  
 
  
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
<div class="row flex-lg-nowrap">
  <div class="col-12 col-lg-auto mb-3" style="width: 200px;">
    
  </div>

  <div class="col">
    <div class="row">
      <div class="col mb-3">
        <div class="card">
          <div class="card-body">
            <div class="e-profile">
              <div class="row">
                <div class="col-12 col-sm-auto mb-3">
                  <div class="mx-auto" style="width: 140px;">
                    <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                      <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>
                    </div>
                  </div>
                </div>
                <?php
                if(isset($_GET['login'])){
                $student_enroll = $_GET['login'];
                }
                // echo $professor_id;       
                ?>
                <?php 
                include 'db.php';
                $query = "SELECT * FROM student WHERE `student`.`student_enroll` = $student_enroll";
                $result = mysqli_query($connection,$query);
                while($info = mysqli_fetch_assoc($result)){
                  $student_name = $info['student_name'];
                  $student_contact = $info['student_contact'];
                  $student_email = $info['student_email'];
                  $student_dept = $info['student_dept'];

                
                
                
                
                }
                
                
                
                ?>
                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                  <div class="text-center text-sm-left mb-2 mb-sm-0">
                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap"><?php echo $student_name; ?></h4>
                    <p class="mb-0"></p>
                    <br/>
                    <div class="mt-2">
                      <button class="btn btn-primary" type="button">
                        <i class="fa fa-fw fa-camera"></i>
                        <span>Change Photo</span>
                      </button>
                    </div>
                  </div>
                  
                </div>
              </div>
                
                <div class="row">
                      <div class="col">
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Username</label>
                              <p><?php echo $student_enroll; ?></p>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Department</label>
                              <p><?php echo $student_dept; ?></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                <hr>
                <div class="tab-pane active">
                  <form class="form" novalidate="" action="" method="post">
                   
                            <div class="form-group">
                              <label>Name</label>
                              <input class="form-control" type="text" name="name" placeholder="Name" value="<?php echo $student_name; ?>">
                            </div>
                </div>
                
                
                        <div class="row">
                      <div class="col">
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Email</label>
                              <input class="form-control" type="text" name="email" placeholder="user@example.com" value="<?php echo $student_email; ?>">
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Phone</label>
                              <input class="form-control" type="text" name="contact" placeholder="Contact No." value="<?php echo $student_contact; ?>">
                            </div>
                          </div>
                        </div>
                         
                      </div>
                    </div>
                
                <hr>
                     
                    <div class="row">
                      <div class="col-12 col-sm-6 mb-3">
                        <div class="mb-2"><b>Forgot your password?</b></div>
                        <div class="row">
                      <div class="">
                          <a href='../co/recover-password.php'>
                       <button type="button" class="btn btn-block btn-outline-primary">Change Password</button>
                          </a>
                      </div>
                        </div>
                        </div>
                    </div>
                     
                    <div class="col d-flex justify-content-end">
                        <button class="btn btn-primary" type="submit" name="change">Save Changes</button>
                    </div>

                  </form>
                  <?php
                  if(isset($_POST['change'])){
                    echo "Data saved Successfully!";
                    $student_name = $_POST['name'];
                    $student_email = $_POST['email'];
                    $student_contact = $_POST['contact'];
                    $query = "UPDATE `student` SET `student_name` = '$student_name',`student_email` = '$student_email',`student_contact` = '$student_contact' WHERE `student`.`student_enroll` = $student_enroll";
                    $result = mysqli_query($connection,$query);
                    header("Location:profile-st.php?login=$student_enroll");
                  }
                  
                  
                  
                  
                  
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

     

  </div>
</div>
</div>

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
