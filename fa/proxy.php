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

  <!-- Navbar -->
<?php

include '../themepart/header.php';
include "db.php";
include "function.php";

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
              <a href="master-fa.php?login=<?php echo $professor_id;?>" class="nav-link">
              <i class='fas fa-calendar-alt' style='font-size:20px'></i>
              <p>
                Time Table
              </p>
            </a>
            
          </li>
          
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class='fas fa-user-tie' style='font-size:19px'></i>
              <p>
                Proxy
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="#" class="nav-link active">
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
  
  
<?php

$slot_to_check = "";
if(isset($_POST['check'])){
  $slot_to_check = $_POST['to_check_for_slot'];
  $slot_to_requests = $_POST['to_check_for_slot'];
  



} 
// elseif (isset($_POST['K B VORA'])) {
//   echo "hellooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo";
  
// }
// // (isset($_POST['K B VORA'])){
// //   echo "hellooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo";
// //   header("Location: to-get-assignment.php?requests=1");
// // }
// else{
//   echo "naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaai";
// }
// global $_POST;





?>
 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Proxy</h1>
          </div>
        </div>
            <p>Select lecture to request proxy</p>
            <?php
            if(isset($_GET['login'])){
            $professor_id = $_GET['login'];
            }
            // echo $professor_id;  
            $query = "SELECT professor_short FROM professor WHERE professor_id = ".$professor_id."";
            $result = mysqli_query($connection,$query);
            if(!$result){
              die('Query Failed' . mysqli_error());
              }
            $faculty = mysqli_fetch_assoc($result);
            $professor_short = $faculty['professor_short'];
            $professor_short = strtolower($professor_short);
            ?>
            
            <form action = "" method = "post">
            <div class="form-group">
                <select class="btn btn-default" name="to_check_for_slot">
                    <option value="" disabled selected hidden>Lecture</option>
                    <?php faculty($professor_short);?>
                </select>
                <button type="submit" class="btn btn-primary" name= "check">Check</button>
                <br>
                <br>
                <br>
            
            <div>
                <p>Available Faculties for perticular lecture:</p>
            </div>
            </div>
            
            <?php
            // echo $slot_to_check;
            if($slot_to_check !== ""){
              // echo $slot_to_check;
              $today = date('l');
//              if($today = 'Sunday'){
//                echo "You have no lecture today";
//                exit();
//              }
              // echo $today;
              
              echo "<div class='card-body' class='row mb-2'>";
              for($i=1; $i<7; $i++){ 
              $query = "SELECT * FROM professor WHERE professor_id = ".$i."";
              $result = mysqli_query($connection,$query);
              if(!$result){
              die('Query Failed' . mysqli_error());
              }
                while($free_lec = mysqli_fetch_assoc($result)){
                $professor_short = $free_lec['professor_short'];
                $btn_professor_id = $free_lec['professor_id'];
                $professor_short = strtolower($professor_short);
                $professor_short = professor_free($today,$professor_short,$slot_to_check);
                if($professor_short !== NULL){
                echo '<div class="row mb-2">';
                echo "<button type='submit' class='btn btn-dark' value='$slot_to_check' name= '$btn_professor_id'>$professor_short</button>";
                echo '</div>';
                }
              }
            }
            echo "</div>";
          }
            
            ?>
        </form>




<?php
global $slot_to_check;
$query = "SELECT professor_id FROM professor";
            $result = mysqli_query($connection,$query);
            if(!$result){
              die('Query Failed' . mysqli_error());
              }
              while($faculty = mysqli_fetch_assoc($result)){
                $btn_professor_id = $faculty['professor_id'];
                if(isset($_POST["$btn_professor_id"])){
                  echo $btn_slot = $_POST["$btn_professor_id"];
                  echo $btn_professor_id;
                  $query = "INSERT INTO requests (requests_by, requests_to, requests_slot) VALUES ('$professor_id', '$btn_professor_id', '$btn_slot')";
                  $result = mysqli_query($connection,$query);
              if(!$result){
              die('Query Failed' . mysqli_error());
              }
                  // $slot_to_check = $_POST['$slot_to_check'];
                  // echo $slot_to_check;
                  header("Location: notification.php?login=$professor_id&requests=$btn_professor_id&slot=$btn_slot&count=1");
                  echo "devammmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm";
                }
              }

?>



            
            </div><!-- /.col -->
          <!-- /.col -->
        </div><!-- /.row -->
  </div>



  <!-- /.content-wrapper -->
  <?php
  
  include '../themepart/footer.php';
  
  ?>


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
