<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Scheduler | Home</title>
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
        <?php
  if(isset($_GET['login'])){
    $professor_id = $_GET['login'];
    }
    // echo $professor_id;       
            ?>
        <div class="info">
        <?php
        include "db.php";
        $query = "SELECT professor_name FROM professor WHERE professor_id = ".$professor_id."";
        $result = mysqli_query($connection,$query);
        if(!$result){
          // header("Location: login.php?login=professor_id");
          die('Query Failed' . mysqli_error($connection));
          
          exit();
          }
          $faculty = mysqli_fetch_assoc($result);
          $professor_name = $faculty['professor_name'];
        
        
        
        ?>
            <a href="profile-fa.php?login=<?php echo $professor_id;?>" class="d-block"><?php echo $professor_name; ?>
                <br>
            ID:<?php echo $professor_id; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
              <a href="#" class="nav-link active">
              <i class='fas fa-calendar-alt' style='font-size:20px'></i>
              <p>
                Time Table
              </p>
            </a>
            
          </li>
          
          <li class="nav-item has-treeview menu">
            <a href="#" class="nav-link">
              <i class='fas fa-user-tie' style='font-size:19px'></i>
              <p>
                Proxy
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="proxy.php?login=<?php echo $professor_id;?>" class="nav-link">
                  <i class='fas fa-chalkboard-teacher' style='font-size:18px'></i>
                  <p>Send Request</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="notification.php?login=<?php echo $professor_id;?>" class="nav-link">
                  <i class='far fa-comment-alt' style='font-size:22px'></i>
                  <p>Notification</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview menu">
            <a href="#" class="nav-link">
              <i class='far fa-paper-plane' style='font-size:18px'></i>
              <p>
                Sender
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="assignment.php?login=<?php echo $professor_id;?>" class="nav-link">
                  <i class='fas fa-laptop-house' style='font-size:20px'></i>
                  <p>Assignment</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="announcement.php?login=<?php echo $professor_id;?>" class="nav-link">
                  <i class="fa fa-bullhorn" style="font-size:18px"></i>
                  <p>Announcement</p>
                </a>
              </li>
            </ul>
          </li>
          
         <li class="nav-header">SCHEDULER</li>
          <li class="nav-item">
              <a href="calender-fa.php?login=<?php echo $professor_id;?>" class="nav-link">
              <i class="nav-icon far fa-calendar-alt" style="font-size:22px"></i>
              <p>
                Calendar
              </p>
            </a>
          </li>
          <li class="nav-item">
              <a href="weekly-tt-fa.php?login=<?php echo $professor_id;?>" class="nav-link">
              <i class='fas fa-chalkboard-teacher' style='font-size:20px'></i>
              <p>
                Weekly Time Table
              </p>
            </a>
          </li>
          
        <li class="nav-header">EXIT</li>
           <li class="nav-item">
               <a href="login-fa.php" class="nav-link">
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
        
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
                <br>
<!--              <hr>-->
                <div class="card">
                  <div class="card-header">
                    <button type="button" class="btn btn-block bg-gradient-secondary"><h4>Information Technology Department <small>(5th Semester)</small></h4></button>
                  </div>
              <!-- /.card-header -->
              <?php
              if(isset($_GET['login'])){
              $professor_id = $_GET['login'];
              }
              // echo $professor_id;       
              ?>
              <?php
          //include 'tt---cal-update-master-fa/tt---cal-update-master-fa/db.php';
          $today = date('l');
          $connection = mysqli_connect('localhost','root','','clg_time_project');
          if(!$connection){
          die("Database connection failed");
}

          $query = "SELECT `professor_short` FROM `professor` WHERE `professor`.`professor_id`= $professor_id";
          $result = mysqli_query($connection,$query);
          $table = mysqli_fetch_assoc($result);
          $professor_short = $table['professor_short'];
          $professor_short = strtolower($professor_short);

          $query = "SELECT * FROM `".$professor_short."` WHERE `slot` = 1";
          $result = mysqli_query($connection,$query);
                 if(!$result){
                 die('Query Failed' . mysqli_error($connection));
                 }
                 while($tt = mysqli_fetch_assoc($result)){
                  // $today = date('l');
                  $lecture = $tt["$today"];
                  // echo $lecture;
                  }
          //UPDATE `5_it` SET `Tuesday` = 'hello' WHERE `5_it`.`slot` = 1;
          
          
          
          
          ?>

                        <div class="card-body table-responsive p-0">
                            <table style="text-align:center" style="height: 100%" id="example2" class="table table-bordered">
                                
                                <tr>
                                    <td rowspan="2" style="width: 50%">
                                        <table style="text-align:center" id="example2" class="table table-bordered" >
                                            <thead>
                                            <tr>
                                              <th>TIME</th>
                                              <th colspan="2"><?php echo $today; ?></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th>8:00 to 8:45</th>
                                              <td colspan="2"><?php $query = "SELECT * FROM `$professor_short` WHERE `slot` = 1";
                                                                    $result = mysqli_query($connection,$query);
                                                                    $tt = mysqli_fetch_assoc($result);
                                                                    echo $lecture = $tt["$today"]; ?></td>
                                            </tr>
                                            <tr>
                                              <th>8:55 to 9:40</th>
                                              <td colspan="2"><?php $query = "SELECT * FROM `$professor_short` WHERE `slot` = 2";
                                                                    $result = mysqli_query($connection,$query);
                                                                    $tt = mysqli_fetch_assoc($result);
                                                                    echo $lecture = $tt["$today"]; ?></td>
                                            </tr>
                                            <tr>
                                              <tr>
                                              <th>10:00 to 10:45</th>
                                              <td colspan="2"><?php $query = "SELECT * FROM `$professor_short` WHERE `slot` = 3";
                                                                    $result = mysqli_query($connection,$query);
                                                                    $tt = mysqli_fetch_assoc($result);
                                                                    echo $lecture = $tt["$today"]; ?></td>
                                            </tr>
                                            <tr>
                                              <th>10:55 to 11:40</th>
                                              <td colspan="2"><?php $query = "SELECT * FROM `$professor_short` WHERE `slot` = 4";
                                                                    $result = mysqli_query($connection,$query);
                                                                    $tt = mysqli_fetch_assoc($result);
                                                                    echo $lecture = $tt["$today"]; ?></td>
                                            </tr>
                                            <tr>
                                              <th rowspan="2">12:10 <br> to <br> 1:40 </th>
                                              <td colspan="2"><?php $query = "SELECT * FROM `$professor_short` WHERE `slot` = 5";
                                                                    $result = mysqli_query($connection,$query);
                                                                    $tt = mysqli_fetch_assoc($result);
                                                                    echo $lecture = $tt["$today"]; ?></td>
                                              
                                            </tr>
                                            <tr>
<!--                                              <th>12:55 to 1:40</th>-->
                                              <td colspan="2"><?php $query = "SELECT * FROM `$professor_short` WHERE `slot` = 6";
                                                                    $result = mysqli_query($connection,$query);
                                                                    $tt = mysqli_fetch_assoc($result);
                                                                    echo $lecture = $tt["$today"]; ?></td>
                                            </tr>
                                          </table>
                                    </td>
                                    
                                    
                                    <th style="text-align:left" style="height: 50%">
                                        <div class="card card-primary">
                                        <div class="card-header">
                                          <h3 class="card-title">Notes</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <?php
                                        if(isset($_POST['save_note'])){
                                          $professor_note = $_POST['note'];
                                          $query = "UPDATE `professor` SET `professor_note` = '$professor_note' WHERE `professor`.`professor_id` = '$professor_id'";
                                          $result = mysqli_query($connection,$query);
                                          if(!$result){
                                            die('Query Failed' . mysqli_error($connection));
                                          }
                                        
                                        
                                        
                                        }
                                        ?>
                                        <div class="card-body">
                                          <form role="form" action = '' method = 'post'>
                                            <div class="col-sm-12">
                                                <!-- textarea -->
                                                <div class="form-group">
                                                  <?php
                                                  $query = "SELECT professor_note FROM professor WHERE `professor`.`professor_id` = $professor_id";
                                                  $result = mysqli_query($connection,$query);
                                                  if(!$result){
                                                    die('Query Failed' . mysqli_error($connection));
                                                  }
                                                  $note = mysqli_fetch_assoc($result);
                                                  $professor_note = $note['professor_note'];
                                                  
                                                  
                                                  
                                                  ?>                                                  
                                                  <textarea class="form-control" rows="3" name= 'note' placeholder="Enter Notes..."><?php echo $professor_note; ?></textarea>
                                                </div>
                                            </div>
                                            
                                            <button type="submit"  name="save_note" style="align-content: right" class="btn bg-gradient-primary">Save Notes</button>
                                          </form>
                                        </div>
                                        <!-- /.card-body -->
                                      </div>
                                    </th>
                                </tr>
                                
                                
                                
                                <tr>
                                    <th>
                                        <div class="col-md-12" style="height: 50%">
                                        <div class="card card-primary">
                                          <div class="card-header">
                                            <h3 class="card-title">Announcement</h3>
                                          </div>
                                          <!-- /.card-header -->
                                          <div style="max-height:50%; max-width:100% " class="card-body">
                                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                              <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                              </ol>
                                              <div class="carousel-inner">
                                                <div class="carousel-item active" style='background-color: #b9d4ec'>
<!--                                                  <img class="d-block w-100" src="https://placehold.it/900x500/39CCCC/ffffff&text=I+Love+Bootstrap" alt="First slide">-->
                                                    
                                                    <h4 style='background-color: #b9d4ec; text-align: left'>Introduction of Announcement:</h4> 
                                                    <p style='background-color: #b9d4ec'> This announcement panel consists of important notices and messages conveyed from faculties to the users. Each announcement is replaced by a new one in 5 seconds.</p>
                                                </div>
                                                  
                                                <?php 
                                                $query = "SELECT * FROM announcement";
                                                $result = mysqli_query($connection,$query);
                                                if(!$result){
                                                die('Query Failed' . mysqli_error());
                                                }
                                                while($announce = mysqli_fetch_assoc($result)){
                                                 // $today = date('l');
                                                 $faculty = $announce['faculty'];
                                                 $announcement = $announce['announcement'];
                                                 $subject = $announce['subject'];
                                                 echo "<div class='carousel-item' style='background-color: #b9d4ec'>";
                                                 echo "<h4 style='background-color: #b9d4ec; text-align: left'>$faculty, <small> $subject </small></h4> <p style='background-color: #b9d4ec'>$announcement</p>";
                                                 echo "</div>"; 
                                                 // echo $lecture;
                                                }
                                                ?>
                                                  
                                              </div>
                                              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                              </a>
                                              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                              </a>
                                            </div>
                                          </div>
                                          <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                      </div>
                                  </th>
                                </tr>
                            </table>
                        </div>
                    </div>
                <!-- /.card -->
                </div>
              <!-- /.col -->
              </div>
            <!-- /.row -->
            </div>
          <!-- /.container-fluid -->
          </section>
        <!-- /.content -->
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
