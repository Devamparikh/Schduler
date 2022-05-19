<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Notifications | Editors</title>
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
include "db.php";

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
                  <a href="proxy.php?login=<?php echo $professor_id;?>" class="nav-link">
                  <i class='fas fa-chalkboard-teacher' style='font-size:18px'></i>
                  <p>Send Request</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link active">
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
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="col">
          <div class="">
            <h1>Notifications</h1>
          </div>
            <br>


    <?php 
          $count = "";
          if(isset($_GET['login'])){
            $professor_id = $_GET['login'];
//            $requests_to = $_GET['requests'];
//            $requests_slot = $_GET['slot'];
//            $count = $_GET['count'];

          }
          

          $query = "SELECT * FROM requests WHERE `requests_to`= '$professor_id'";
          $res = mysqli_query($connection,$query);
          if(!$res){
            die('Query Failed' . mysqli_error());
          }
          while($req_get = mysqli_fetch_assoc($res)){
            $requests_by = $req_get['requests_by'];
            $requests_slot = $req_get['requests_slot'];
            $requests_approve =$req_get['requests_approve'];
            $query = "SELECT professor_short FROM professor WHERE `professor_id`= '$requests_by'";
            $ress = mysqli_query($connection,$query);
            if(!$ress){
              die('Query Failed' . mysqli_error());
            }
            $prof = mysqli_fetch_assoc($ress);
            $professor_short = $prof['professor_short'];
            if($requests_approve == 0){

              echo "<form action='notification.php?login=$professor_id' method='post'>";
              
                echo "<div class='card card-primary card-outline'>";
                echo "<div class='card-header'>";
                echo "<h5 class='card-title m-0'>Request</h5>";
                echo "</div>";
                echo "<div class='card-body'>";
         
                echo "<h6 class='card-title'>You are requested to take proxy of '$professor_short' in lecture '$requests_slot'.</h6>";
                echo "<br>";
         
                $name_accept = $requests_by . "_" . $requests_slot . "_accept";
                $name_reject = $requests_by . "_" . $requests_slot . "_reject";
                echo "<button type='submit' class='btn btn-primary' value='1' name= '$name_accept'>Accept</button>";
                echo "&nbsp";
                echo "<button type='submit' class='btn btn-danger' value='2' name= '$name_reject'>Reject</button>";
                echo "</div>";
                echo "</div>";
                
//              echo "You are requested to take proxy of $professor_short in $requests_slot.";
//              echo "<br>";
//              $name_accept = $requests_by . "_" . $requests_slot . "_accept";
//              $name_reject = $requests_by . "_" . $requests_slot . "_reject";
//              echo "<button type='submit' class='btn btn-primary' value='1' name= '$name_accept'>Accept</button>";
//              echo "<button type='submit' class='btn btn-danger' value='2' name= '$name_reject'>Reject</button>";
              echo "</form>";
              if(isset($_POST["$name_accept"])){
                $response = $_POST["$name_accept"];
                $query = "UPDATE `requests` SET `requests_approve` = '$response' WHERE `requests`.`requests_by` = '$requests_by' AND `requests`.`requests_slot` = '$requests_slot'";
                $ressult = mysqli_query($connection,$query);
                if(!$ressult){
                  die('Query Failed' . mysqli_error());
                }
              }
              if(isset($_POST["$name_reject"])){
                $response = $_POST["$name_reject"];
                $query = "UPDATE `requests` SET `requests_approve` = '$response' WHERE `requests`.`requests_by` = '$requests_by' AND `requests`.`requests_slot` = '$requests_slot'";
                $ressult = mysqli_query($connection,$query);
                if(!$ressult){
                  die('Query Failed' . mysqli_error());
                }
              }
            }


          }










          
          if($count == 1){
          

          function alert($msg) {
              echo "<script type='text/javascript'>alert('$msg');</script>";
          }
          $count ++;
          alert("Request Successful");
          
          }
          $query = "SELECT * FROM requests WHERE `requests_by`= '$professor_id'";
          $result = mysqli_query($connection,$query);
          if(!$result){
            die('Query Failed' . mysqli_error());
          }
          while($req = mysqli_fetch_assoc($result)){
            $requests_to = $req['requests_to'];
            $requests_slot = $req['requests_slot'];
            $requests_approve =$req['requests_approve'];
            $query = "SELECT professor_short FROM professor WHERE `professor_id`= '$requests_to'";
            $results = mysqli_query($connection,$query);
            if(!$results){
              die('Query Failed' . mysqli_error());
            }
            $prof = mysqli_fetch_assoc($results);
            $professor_short = $prof['professor_short'];
            
            if($requests_approve == 0){
                echo "<div class='card card-warning card-outline'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>Request Response:</h5>";

                echo "<p class='card-text'>";
                    echo "Your request for Lecture '$requests_slot' to Professor '$professor_short' is Pending." . "<br>";
                echo "</div>";
                echo "</div>";
//              echo "Your request for Slot $requests_slot to Professor $professor_short is Pending." . "<br>";
            }
            elseif($requests_approve == 1){
                echo "<div class='card card-success card-outline'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>Request Response:</h5>";

                echo "<p class='card-text'>";
                    echo "Your request for Lecture '$requests_slot' to Professor '$professor_short' is Accepted." . "<br>";
                echo "</div>";
                echo "</div>";
//              echo "Your request for Slot '$requests_slot' to Professor '$professor_short' is Accepted." . "<br>";
            }
            elseif($requests_approve == 2){
                echo "<div class='card card-danger card-outline'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>Request Response:</h5>";

                echo "<p class='card-text'>";
                    echo "Your request for Lecture '$requests_slot' to Professor '$professor_short' is Rejected." . "<br>";
                echo "</div>";
                echo "</div>";
//              echo "Your request for Slot '$requests_slot' to Professor '$professor_short' is Rejected." . "<br>";
            }
            else{
              echo "<br>";
            }


          }

          
          ?>
        </div>
    </div><!-- /.container-fluid -->
    </section> 
    <!-- Main content -->
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php

include '../themepart/footer.php';

?>



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
