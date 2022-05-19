<?php ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Scheduler | Compose Assignment Message</title>
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
          
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class='far fa-paper-plane' style='font-size:18px'></i>
              <p>
                Sender
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="#" class="nav-link active">
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
    <form action='assignment_db_connection.php?login=<?php echo $professor_id;?>' method='post'>
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid" style="width: 100%">

          <!-- /.col -->
          <div class="col-md-14">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Compose New Assignment Message</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <select style="max-width:23%;" class="btn btn-primary" name="select_receiver">
                            <option name="" disabled selected hidden>To:</option>
                            <option name="S1">180470116006</option>
                            <option name="S2">180470116020</option>
                            <option name="S3">180470116022</option>
                            <option name="S4">180470116027</option>
                            <option name="S5">180470116036</option>
                            <option name="S5">180470116037</option>
                            <option name="S5">180470116049</option>
                            <option name="S5">180470116056</option>
                            <option name="5th Sem Class">5th Sem Class</option>
                            <option name="D1 Batch">D1 Batch</option>
                            <option name="D2 Batch">D2 Batch</option>
                </select>
                  
                <select style="max-width:23%;" class="btn btn-primary" name="subject">
                            <option name="" disabled selected hidden>Subject</option>
                            <option name="ADA">ADA</option>
                            <option name="CN">CN</option>
                            <option name="Cs">CS</option>
                            <option name="DE-II">DE-II</option>
                            <option name="English Module">English Module</option>
                            <option name="IPDC">IPDC</option>
                            <option name="PE">PE</option>
                            <option name="Sports / Club Activity">Sports / Club Activity</option>
                            <option name="WD">WD</option>
                            <option name="WD">Other Activity</option>
                </select>
                  <hr>
                <div class="form-group">
                    <textarea id="compose-textarea" class="form-control" style="height: 300px" name="assignment">
                      <h4><u>Assignment: Heading</u></h4>
                      <p>The data of assignment that is to be assigned to students has to be entered here. You can use different features of the text editor according to you convinience.</p>
                      <ul>
                        <li>Example List item one</li>
                        <li>Example List item two</li>
                      </ul>
                      <p>Thank you,</p>
                       <p>-Team <b>Schedul</b>er.</p>
                    </textarea>
                </div>
                
                  <label for="ending_time" class="btn btn-flat" style="align-items: right">Submission Time : </label>
                    <input type="date" name="submission_time">

              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <div class="float-right">
                  <button type="submit" class="btn btn-primary" value="submit" name="submit"><i class="far fa-envelope"></i> Send</button>
                </div>
                  <button type="reset" class="btn btn-default"><i class="fas fa-times"></i> Discard</button>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </form>
  </div>
<!-- /.content-wrapper -->

<?php

include '../themepart/footer.php';

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
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- Page Script -->
<script>
  $(function () {
    //Add text editor
    $('#compose-textarea').summernote()
  })
</script>
</body>
</html>
