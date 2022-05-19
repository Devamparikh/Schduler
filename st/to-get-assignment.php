<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Scheduler | Assignment</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
<?php

include '../themepart/header.php';

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
            <a href="profile.php" class="d-block"><?php echo $student_name; ?>
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
              <a href="#" class="nav-link active">
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
  
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col">
            <h1>Assignment</h1>
          </div>
        </div>
      </div>
    </section>
            
    <div class="content">
          <div class="row" style="width: 100%">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">
                        <strong>
                        <i class='fas fa-laptop-house' style='font-size:18px'></i>
                        Subject Name &nbsp; <small><strong><cite title="Source Title">Sender faculty name</cite></strong></small>
                        </strong>
                      </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <blockquote>
                        <p>The data sent by the faculties as an assignment will be shown here.</p>
                        <strong>Submission Date: dd/mm/yyyy</strong>
                      </blockquote>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
          <!-- ./col -->
            </div>  
          
            <?php
            include "db.php";
            $query = "SELECT * FROM assignment";
            $result = mysqli_query($connection,$query);
                 if(!$result){
                 die('Query Failed' . mysqli_error());
                 }
                 while($assign = mysqli_fetch_assoc($result)){
                  $assignment = $assign['assignment'];
                  $subject = $assign['subject'];
                  $submission_time = $assign['submission_time'];
                  $faculty = $assign['faculty'];
                  
                  ?>
                  
            
            
            
            
            
            
            
            <div class="row" style="width: 100%">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">
                        <strong>
                        <i class='fas fa-laptop-house' style='font-size:18px'></i>
                        <?php echo $subject; ?> &nbsp; <small><strong><cite title="Source Title"><?php echo $faculty; ?></cite></strong></small>
                        </strong>
                      </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <blockquote>
                        <p><?php echo $assignment; ?></p>
                        <strong>Submission Date: <?php echo $submission_time; ?></strong>
                      </blockquote>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
          <!-- ./col -->
            </div>
        <!-- /.row -->
                 <?php } ?>
        </div>
    </div>
    <!-- Main content -->
    
    <!-- /.content -->

  <!-- /.content-wrapper -->

<?php

include '../themepart/footer.php';

?>

</div>

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
</body>
</html>