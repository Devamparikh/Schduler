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
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
<?php

include '../themepart/header.php'

?>
<?php include 'db.php'; ?>
<?php include 'function.php'; ?>
  <!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../co/about-us.php" class="brand-link">
        <img src="../co/images/logo-sidebar.jpg" alt="Scheduler Logo" class="brand-image img-circle elevation-3"
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
          <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
              <i class='fas fa-calendar-alt' style='font-size:20px'></i>
              <p>
                Time Table Update
              </p>
            </a>
            
          </li>
          
          <li class="nav-item has-treeview menu">
            <a href="#" class="nav-link">
              <i class='far fa-folder-open' style='font-size:18px'></i>
              <p>
                Data Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="users-db-ap.php" class="nav-link">
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
          
        <li class="nav-header">Scheduler</li>
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
            <h1 class="m-0 text-dark">Time Table Update</h1>
          </div>
                <!-- Main content -->
                <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <hr>
              <div class="card">
                <div class="card-header">
                  <form action="" method="post">
                    <?php
                      if(isset($_POST['submit'])){
                        $dept = $_POST['dept'];
                        $sem = $_POST['sem'];


                         // Monday

                        $s1_m_f = $_POST['s1_m_f'];
                        $s1_m_s = $_POST['s1_m_s'];
                        $faculty_short = faculty_short($s1_m_f);
                        $subject_short = subject_short($s1_m_s);
                        $conca = $subject_short . " - " . $faculty_short;
                        $query = "UPDATE `5_it` SET `monday` = '$conca' WHERE `5_it`.`slot` = 1";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error());
                        }
                        $professor_table = strtolower($faculty_short);
                       // $professor_table = "p p tank";
                        $conca_faculty = $subject_short . " - 5th IT";
                        $query = "UPDATE `".$professor_table."` SET `Monday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 1";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }




                        $s2_m_f = $_POST['s2_m_f'];
                        $s2_m_s = $_POST['s2_m_s'];
                        $faculty_short = faculty_short($s2_m_f);
                        $subject_short = subject_short($s2_m_s);
                        $conca = $subject_short . " - " . $faculty_short;
                        $query = "UPDATE `5_it` SET `Monday` = '$conca' WHERE `5_it`.`slot` = 2";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error());
                        }
                        $professor_table = strtolower($faculty_short);
                       // $professor_table = "p p tank";
                        $conca_faculty = $subject_short . " - 5th IT";
                        $query = "UPDATE `".$professor_table."` SET `Monday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 2";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }


                        $s3_m_f = $_POST['s3_m_f'];
                        $s3_m_s = $_POST['s3_m_s'];
                        $faculty_short = faculty_short($s3_m_f);
                        $subject_short = subject_short($s3_m_s);
                        $conca = $subject_short . " - " . $faculty_short;
                        $query = "UPDATE `5_it` SET `Monday` = '$conca' WHERE `5_it`.`slot` = 3";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error());
                        }
                        $professor_table = strtolower($faculty_short);
                       // $professor_table = "p p tank";
                        $conca_faculty = $subject_short . " - 5th IT";
                        $query = "UPDATE `".$professor_table."` SET `Monday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 3";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }




                        $s4_m_f = $_POST['s4_m_f'];
                        $s4_m_s = $_POST['s4_m_s'];
                        $faculty_short = faculty_short($s4_m_f);
                        $subject_short = subject_short($s4_m_s);
                        $conca = $subject_short . " - " . $faculty_short;
                        $query = "UPDATE `5_it` SET `Monday` = '$conca' WHERE `5_it`.`slot` = 4";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error());
                        }
                        $professor_table = strtolower($faculty_short);
                       // $professor_table = "p p tank";
                        $conca_faculty = $subject_short . " - 5th IT";
                        $query = "UPDATE `".$professor_table."` SET `Monday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 4";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }


                        $s5_m_s_d1 = $_POST['s5_m_s_d1'];
                        $s6_m_f_d1 = $_POST['s6_m_f_d1'];
                        $faculty_short = faculty_short($s6_m_f_d1);
                        $subject_short = subject_short($s5_m_s_d1);
                        $conca = "D1 - " . $subject_short . " - " . $faculty_short;
                        $query = "UPDATE `5_it` SET `Monday` = '$conca' WHERE `5_it`.`slot` = 5";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error());
                        }
                        $professor_table = strtolower($faculty_short);
                       // $professor_table = "p p tank";
                        $conca_faculty = "D1 - " . $subject_short . " - 5th IT";
                        $query = "UPDATE `".$professor_table."` SET `Monday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 5";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }
                        $query = "UPDATE `".$professor_table."` SET `Monday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 6";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }




                        $s5_m_s_d2 = $_POST['s5_m_s_d2'];
                        $s6_m_f_d2 = $_POST['s6_m_f_d2'];
                        $faculty_short = faculty_short($s6_m_f_d2);
                        $subject_short = subject_short($s5_m_s_d2);
                        $conca = "D2 - " . $subject_short . " - " . $faculty_short;
                        $query = "UPDATE `5_it` SET `Monday` = '$conca' WHERE `5_it`.`slot` = 6";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error());
                        }
                        $professor_table = strtolower($faculty_short);
                       // $professor_table = "p p tank";
                        $conca_faculty = "D2 - " . $subject_short . " - 5th IT";
                        $query = "UPDATE `".$professor_table."` SET `Monday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 5";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }
                        $query = "UPDATE `".$professor_table."` SET `Monday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 6";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }


                        // tuesday
                        $s1_t_f = $_POST['s1_t_f'];
                        $s1_t_s = $_POST['s1_t_s'];
                        $faculty_short = faculty_short($s1_t_f);
                        $subject_short = subject_short($s1_t_s);
                        $conca = $subject_short . " - " . $faculty_short;
                        $query = "UPDATE `5_it` SET `Tuesday` = '$conca' WHERE `5_it`.`slot` = 1";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error());
                        }
                        $professor_table = strtolower($faculty_short);
                       // $professor_table = "p p tank";
                        $conca_faculty = $subject_short . " - 5th IT";
                        $query = "UPDATE `".$professor_table."` SET `Tuesday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 1";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }





                        $s2_t_f = $_POST['s2_t_f'];
                        $s2_t_s = $_POST['s2_t_s'];
                        $faculty_short = faculty_short($s2_t_f);
                        $subject_short = subject_short($s2_t_s);
                        $conca = $subject_short . " - " . $faculty_short;
                        $query = "UPDATE `5_it` SET `Tuesday` = '$conca' WHERE `5_it`.`slot` = 2";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error());
                        }
                        $professor_table = strtolower($faculty_short);
                       // $professor_table = "p p tank";
                        $conca_faculty = $subject_short . " - 5th IT";
                        $query = "UPDATE `".$professor_table."` SET `Tuesday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 2";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }


                        $s3_t_f = $_POST['s3_t_f'];
                        $s3_t_s = $_POST['s3_t_s'];
                        $faculty_short = faculty_short($s3_t_f);
                        $subject_short = subject_short($s3_t_s);
                        $conca = $subject_short . " - " . $faculty_short;
                        $query = "UPDATE `5_it` SET `Tuesday` = '$conca' WHERE `5_it`.`slot` = 3";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error());
                        }
                        $professor_table = strtolower($faculty_short);
                       // $professor_table = "p p tank";
                        $conca_faculty = $subject_short . " - 5th IT";
                        $query = "UPDATE `".$professor_table."` SET `Tuesday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 3";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }




                        $s4_t_f = $_POST['s4_t_f'];
                        $s4_t_s = $_POST['s4_t_s'];
                        $faculty_short = faculty_short($s4_t_f);
                        $subject_short = subject_short($s4_t_s);
                        $conca = $subject_short . " - " . $faculty_short;
                        $query = "UPDATE `5_it` SET `Tuesday` = '$conca' WHERE `5_it`.`slot` = 4";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error());
                        }
                        $professor_table = strtolower($faculty_short);
                       // $professor_table = "p p tank";
                        $conca_faculty = $subject_short . " - 5th IT";
                        $query = "UPDATE `".$professor_table."` SET `Tuesday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 4";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }


                        $s5_t_s_d1 = $_POST['s5_t_s_d1'];
                        $s6_t_f_d1 = $_POST['s6_t_f_d1'];
                        $faculty_short = faculty_short($s6_t_f_d1);
                        $subject_short = subject_short($s5_t_s_d1);
                        $conca = "D1 - " . $subject_short . " - " . $faculty_short;
                        $query = "UPDATE `5_it` SET `Tuesday` = '$conca' WHERE `5_it`.`slot` = 5";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error());
                        }
                        $professor_table = strtolower($faculty_short);
                       // $professor_table = "p p tank";
                        $conca_faculty = "D1 - " . $subject_short . " - 5th IT";
                        $query = "UPDATE `".$professor_table."` SET `Tuesday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 5";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }
                        $query = "UPDATE `".$professor_table."` SET `Tuesday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 6";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }




                        $s5_t_s_d2 = $_POST['s5_t_s_d2'];
                        $s6_t_f_d2 = $_POST['s6_t_f_d2'];
                        $faculty_short = faculty_short($s6_t_f_d2);
                        $subject_short = subject_short($s5_t_s_d2);
                        $conca = "D2 - " . $subject_short . " - " . $faculty_short;
                        $query = "UPDATE `5_it` SET `Tuesday` = '$conca' WHERE `5_it`.`slot` = 6";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error());
                        }
                        $professor_table = strtolower($faculty_short);
                       // $professor_table = "p p tank";
                        $conca_faculty = "D2 - " . $subject_short . " - 5th IT";
                        $query = "UPDATE `".$professor_table."` SET `Tuesday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 5";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }
                        $query = "UPDATE `".$professor_table."` SET `Tuesday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 6";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }




                        //wednesday
                        $s1_w_f = $_POST['s1_w_f'];
                        $s1_w_s = $_POST['s1_w_s'];
                        $faculty_short = faculty_short($s1_w_f);
                        $subject_short = subject_short($s1_w_s);
                        $conca = $subject_short . " - " . $faculty_short;
                        $query = "UPDATE `5_it` SET `Wednesday` = '$conca' WHERE `5_it`.`slot` = 1";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error());
                        }
                        $professor_table = strtolower($faculty_short);
                       // $professor_table = "p p tank";
                        $conca_faculty = $subject_short . " - 5th IT";
                        $query = "UPDATE `".$professor_table."` SET `Wednesday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 1";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }





                        $s2_w_f = $_POST['s2_w_f'];
                        $s2_w_s = $_POST['s2_w_s'];
                        $faculty_short = faculty_short($s2_w_f);
                        $subject_short = subject_short($s2_w_s);
                        $conca = $subject_short . " - " . $faculty_short;
                        $query = "UPDATE `5_it` SET `Wednesday` = '$conca' WHERE `5_it`.`slot` = 2";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error());
                        }
                        $professor_table = strtolower($faculty_short);
                       // $professor_table = "p p tank";
                        $conca_faculty = $subject_short . " - 5th IT";
                        $query = "UPDATE `".$professor_table."` SET `Wednesday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 2";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }


                        $s3_w_f = $_POST['s3_w_f'];
                        $s3_w_s = $_POST['s3_w_s'];
                        $faculty_short = faculty_short($s3_w_f);
                        $subject_short = subject_short($s3_w_s);
                        $conca = $subject_short . " - " . $faculty_short;
                        $query = "UPDATE `5_it` SET `Wednesday` = '$conca' WHERE `5_it`.`slot` = 3";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error());
                        }
                        $professor_table = strtolower($faculty_short);
                       // $professor_table = "p p tank";
                        $conca_faculty = $subject_short . " - 5th IT";
                        $query = "UPDATE `".$professor_table."` SET `Wednesday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 3";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }




                        $s4_w_f = $_POST['s4_w_f'];
                        $s4_w_s = $_POST['s4_w_s'];
                        $faculty_short = faculty_short($s4_w_f);
                        $subject_short = subject_short($s4_w_s);
                        $conca = $subject_short . " - " . $faculty_short;
                        $query = "UPDATE `5_it` SET `Wednesday` = '$conca' WHERE `5_it`.`slot` = 4";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error());
                        }
                        $professor_table = strtolower($faculty_short);
                       // $professor_table = "p p tank";
                        $conca_faculty = $subject_short . " - 5th IT";
                        $query = "UPDATE `".$professor_table."` SET `Wednesday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 4";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }


                        $s5_w_s_d1 = $_POST['s5_w_s_d1'];
                        $s6_w_f_d1 = $_POST['s6_w_f_d1'];
                        $faculty_short = faculty_short($s6_w_f_d1);
                        $subject_short = subject_short($s5_w_s_d1);
                        $conca = "D1 - " . $subject_short . " - " . $faculty_short;
                        $query = "UPDATE `5_it` SET `Wednesday` = '$conca' WHERE `5_it`.`slot` = 5";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error());
                        }
                        $professor_table = strtolower($faculty_short);
                       // $professor_table = "p p tank";
                        $conca_faculty = "D1 - " . $subject_short . " - 5th IT";
                        $query = "UPDATE `".$professor_table."` SET `Wednesday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 5";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }
                        $query = "UPDATE `".$professor_table."` SET `Wednesday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 6";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }




                        $s5_w_s_d2 = $_POST['s5_w_s_d2'];
                        $s6_w_f_d2 = $_POST['s6_w_f_d2'];
                        $faculty_short = faculty_short($s6_w_f_d2);
                        $subject_short = subject_short($s5_w_s_d2);
                        $conca = "D2 - " . $subject_short . " - " . $faculty_short;
                        $query = "UPDATE `5_it` SET `Wednesday` = '$conca' WHERE `5_it`.`slot` = 6";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error());
                        }
                        $professor_table = strtolower($faculty_short);
                       // $professor_table = "p p tank";
                        $conca_faculty = "D2 - " . $subject_short . " - 5th IT";
                        $query = "UPDATE `".$professor_table."` SET `Wednesday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 5";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }
                        $query = "UPDATE `".$professor_table."` SET `Wednesday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 6";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }




                        //Thursday
                        $s1_th_f = $_POST['s1_th_f'];
                        $s1_th_s = $_POST['s1_th_s'];
                        $faculty_short = faculty_short($s1_th_f);
                        $subject_short = subject_short($s1_th_s);
                        $conca = $subject_short . " - " . $faculty_short;
                        $query = "UPDATE `5_it` SET `Thursday` = '$conca' WHERE `5_it`.`slot` = 1";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error());
                        }
                        $professor_table = strtolower($faculty_short);
                       // $professor_table = "p p tank";
                        $conca_faculty = $subject_short . " - 5th IT";
                        $query = "UPDATE `".$professor_table."` SET `Thursday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 1";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }





                        $s2_th_f = $_POST['s2_th_f'];
                        $s2_th_s = $_POST['s2_th_s'];
                        $faculty_short = faculty_short($s2_th_f);
                        $subject_short = subject_short($s2_th_s);
                        $conca = $subject_short . " - " . $faculty_short;
                        $query = "UPDATE `5_it` SET `Thursday` = '$conca' WHERE `5_it`.`slot` = 2";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error());
                        }
                        $professor_table = strtolower($faculty_short);
                       // $professor_table = "p p tank";
                        $conca_faculty = $subject_short . " - 5th IT";
                        $query = "UPDATE `".$professor_table."` SET `Thursday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 2";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }


                        $s3_th_f = $_POST['s3_th_f'];
                        $s3_th_s = $_POST['s3_th_s'];
                        $faculty_short = faculty_short($s3_th_f);
                        $subject_short = subject_short($s3_th_s);
                        $conca = $subject_short . " - " . $faculty_short;
                        $query = "UPDATE `5_it` SET `Thursday` = '$conca' WHERE `5_it`.`slot` = 3";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error());
                        }
                        $professor_table = strtolower($faculty_short);
                       // $professor_table = "p p tank";
                        $conca_faculty = $subject_short . " - 5th IT";
                        $query = "UPDATE `".$professor_table."` SET `Thursday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 3";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }




                        $s4_th_f = $_POST['s4_th_f'];
                        $s4_th_s = $_POST['s4_th_s'];
                        $faculty_short = faculty_short($s4_th_f);
                        $subject_short = subject_short($s4_th_s);
                        $conca = $subject_short . " - " . $faculty_short;
                        $query = "UPDATE `5_it` SET `Thursday` = '$conca' WHERE `5_it`.`slot` = 4";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error());
                        }
                        $professor_table = strtolower($faculty_short);
                       // $professor_table = "p p tank";
                        $conca_faculty = $subject_short . " - 5th IT";
                        $query = "UPDATE `".$professor_table."` SET `Thursday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 4";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }


                        $s5_th_s_d1 = $_POST['s5_th_s_d1'];
                        $s6_th_f_d1 = $_POST['s6_th_f_d1'];
                        $faculty_short = faculty_short($s6_th_f_d1);
                        $subject_short = subject_short($s5_th_s_d1);
                        $conca = "D1 - " . $subject_short . " - " . $faculty_short;
                        $query = "UPDATE `5_it` SET `Thursday` = '$conca' WHERE `5_it`.`slot` = 5";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error());
                        }
                        $professor_table = strtolower($faculty_short);
                       // $professor_table = "p p tank";
                        $conca_faculty = "D1 - " . $subject_short . " - 5th IT";
                        $query = "UPDATE `".$professor_table."` SET `Thursday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 5";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }
                        $query = "UPDATE `".$professor_table."` SET `Thursday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 6";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }




                        $s5_th_s_d2 = $_POST['s5_th_s_d2'];
                        $s6_th_f_d2 = $_POST['s6_th_f_d2'];
                        $faculty_short = faculty_short($s6_th_f_d2);
                        $subject_short = subject_short($s5_th_s_d2);
                        $conca = "D2 - " . $subject_short . " - " . $faculty_short;
                        $query = "UPDATE `5_it` SET `Thursday` = '$conca' WHERE `5_it`.`slot` = 6";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error());
                        }
                        $professor_table = strtolower($faculty_short);
                       // $professor_table = "p p tank";
                        $conca_faculty = "D2 - " . $subject_short . " - 5th IT";
                        $query = "UPDATE `".$professor_table."` SET `Thursday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 5";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }
                        $query = "UPDATE `".$professor_table."` SET `Thursday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 6";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }




                        //Friday
                        $s1_f_f = $_POST['s1_f_f'];
                        $s1_f_s = $_POST['s1_f_s'];
                        $faculty_short = faculty_short($s1_f_f);
                        $subject_short = subject_short($s1_f_s);
                        $conca = $subject_short . " - " . $faculty_short;
                        $query = "UPDATE `5_it` SET `Friday` = '$conca' WHERE `5_it`.`slot` = 1";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error());
                        }
                        $professor_table = strtolower($faculty_short);
                       // $professor_table = "p p tank";
                        $conca_faculty = $subject_short . " - 5th IT";
                        $query = "UPDATE `".$professor_table."` SET `Friday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 1";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }





                        $s2_f_f = $_POST['s2_f_f'];
                        $s2_f_s = $_POST['s2_f_s'];
                        $faculty_short = faculty_short($s2_f_f);
                        $subject_short = subject_short($s2_f_s);
                        $conca = $subject_short . " - " . $faculty_short;
                        $query = "UPDATE `5_it` SET `Friday` = '$conca' WHERE `5_it`.`slot` = 2";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error());
                        }
                        $professor_table = strtolower($faculty_short);
                       // $professor_table = "p p tank";
                        $conca_faculty = $subject_short . " - 5th IT";
                        $query = "UPDATE `".$professor_table."` SET `Friday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 2";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }


                        $s3_f_f = $_POST['s3_f_f'];
                        $s3_f_s = $_POST['s3_f_s'];
                        $faculty_short = faculty_short($s3_f_f);
                        $subject_short = subject_short($s3_f_s);
                        $conca = $subject_short . " - " . $faculty_short;
                        $query = "UPDATE `5_it` SET `Friday` = '$conca' WHERE `5_it`.`slot` = 3";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error());
                        }
                        $professor_table = strtolower($faculty_short);
                       // $professor_table = "p p tank";
                        $conca_faculty = $subject_short . " - 5th IT";
                        $query = "UPDATE `".$professor_table."` SET `Friday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 3";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }




                        $s4_f_f = $_POST['s4_f_f'];
                        $s4_f_s = $_POST['s4_f_s'];
                        $faculty_short = faculty_short($s4_f_f);
                        $subject_short = subject_short($s4_f_s);
                        $conca = $subject_short . " - " . $faculty_short;
                        $query = "UPDATE `5_it` SET `Friday` = '$conca' WHERE `5_it`.`slot` = 4";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error());
                        }
                        $professor_table = strtolower($faculty_short);
                       // $professor_table = "p p tank";
                        $conca_faculty = $subject_short . " - 5th IT";
                        $query = "UPDATE `".$professor_table."` SET `Friday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 4";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }


                        $s5_f_s_d1 = $_POST['s5_f_s_d1'];
                        $s6_f_f_d1 = $_POST['s6_f_f_d1'];
                        $faculty_short = faculty_short($s6_f_f_d1);
                        $subject_short = subject_short($s5_f_s_d1);
                        $conca = "D1 - " . $subject_short . " - " . $faculty_short;
                        $query = "UPDATE `5_it` SET `Friday` = '$conca' WHERE `5_it`.`slot` = 5";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error());
                        }
                        $professor_table = strtolower($faculty_short);
                       // $professor_table = "p p tank";
                        $conca_faculty = "D1 - " . $subject_short . " - 5th IT";
                        $query = "UPDATE `".$professor_table."` SET `Friday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 5";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }
                        $query = "UPDATE `".$professor_table."` SET `Friday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 6";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }




                        $s5_f_s_d2 = $_POST['s5_f_s_d2'];
                        $s6_f_f_d2 = $_POST['s6_f_f_d2'];
                        $faculty_short = faculty_short($s6_f_f_d2);
                        $subject_short = subject_short($s5_f_s_d2);
                        $conca = "D2 - " . $subject_short . " - " . $faculty_short;
                        $query = "UPDATE `5_it` SET `Friday` = '$conca' WHERE `5_it`.`slot` = 6";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error());
                        }
                        $professor_table = strtolower($faculty_short);
                       // $professor_table = "p p tank";
                        $conca_faculty = "D2 - " . $subject_short . " - 5th IT";
                        $query = "UPDATE `".$professor_table."` SET `Friday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 5";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }
                        $query = "UPDATE `".$professor_table."` SET `Friday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 6";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }




                        //Saturday
                        $s1_s_f = $_POST['s1_s_f'];
                        $s1_s_s = $_POST['s1_s_s'];
                        $faculty_short = faculty_short($s1_s_f);
                        $subject_short = subject_short($s1_s_s);
                        $conca = $subject_short . " - " . $faculty_short;
                        $query = "UPDATE `5_it` SET `Saturday` = '$conca' WHERE `5_it`.`slot` = 1";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error());
                        }
                        $professor_table = strtolower($faculty_short);
                       // $professor_table = "p p tank";
                        $conca_faculty = $subject_short . " - 5th IT";
                        $query = "UPDATE `".$professor_table."` SET `Saturday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 1";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }





                        $s2_s_f = $_POST['s2_s_f'];
                        $s2_s_s = $_POST['s2_s_s'];
                        $faculty_short = faculty_short($s2_s_f);
                        $subject_short = subject_short($s2_s_s);
                        $conca = $subject_short . " - " . $faculty_short;
                        $query = "UPDATE `5_it` SET `Saturday` = '$conca' WHERE `5_it`.`slot` = 2";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error());
                        }
                        $professor_table = strtolower($faculty_short);
                       // $professor_table = "p p tank";
                        $conca_faculty = $subject_short . " - 5th IT";
                        $query = "UPDATE `".$professor_table."` SET `Saturday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 2";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }


                        $s3_s_f = $_POST['s3_s_f'];
                        $s3_s_s = $_POST['s3_s_s'];
                        $faculty_short = faculty_short($s3_s_f);
                        $subject_short = subject_short($s3_s_s);
                        $conca = $subject_short . " - " . $faculty_short;
                        $query = "UPDATE `5_it` SET `Saturday` = '$conca' WHERE `5_it`.`slot` = 3";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error());
                        }
                        $professor_table = strtolower($faculty_short);
                       // $professor_table = "p p tank";
                        $conca_faculty = $subject_short . " - 5th IT";
                        $query = "UPDATE `".$professor_table."` SET `Saturday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 3";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }




                        $s4_s_f = $_POST['s4_s_f'];
                        $s4_s_s = $_POST['s4_s_s'];
                        $faculty_short = faculty_short($s4_s_f);
                        $subject_short = subject_short($s4_s_s);
                        $conca = $subject_short . " - " . $faculty_short;
                        $query = "UPDATE `5_it` SET `Saturday` = '$conca' WHERE `5_it`.`slot` = 4";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error());
                        }
                        $professor_table = strtolower($faculty_short);
                       // $professor_table = "p p tank";
                        $conca_faculty = $subject_short . " - 5th IT";
                        $query = "UPDATE `".$professor_table."` SET `Saturday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 4";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }


                        $s5_s_s_d1 = $_POST['s5_s_s_d1'];
                        $s6_s_f_d1 = $_POST['s6_s_f_d1'];
                        $faculty_short = faculty_short($s6_s_f_d1);
                        $subject_short = subject_short($s5_s_s_d1);
                        $conca = "D1 - " . $subject_short . " - " . $faculty_short;
                        $query = "UPDATE `5_it` SET `Saturday` = '$conca' WHERE `5_it`.`slot` = 5";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error());
                        }
                        $professor_table = strtolower($faculty_short);
                       // $professor_table = "p p tank";
                        $conca_faculty = "D1 - " . $subject_short . " - 5th IT";
                        $query = "UPDATE `".$professor_table."` SET `Saturday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 5";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }
                        $query = "UPDATE `".$professor_table."` SET `Saturday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 6";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }




                        $s5_s_s_d2 = $_POST['s5_s_s_d2'];
                        $s6_s_f_d2 = $_POST['s6_s_f_d2'];
                        $faculty_short = faculty_short($s6_s_f_d2);
                        $subject_short = subject_short($s5_s_s_d2);
                        $conca = "D2 - " . $subject_short . " - " . $faculty_short;
                        $query = "UPDATE `5_it` SET `Saturday` = '$conca' WHERE `5_it`.`slot` = 6";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error());
                        }
                        $professor_table = strtolower($faculty_short);
                       // $professor_table = "p p tank";
                        $conca_faculty = "D2 - " . $subject_short . " - 5th IT";
                        $query = "UPDATE `".$professor_table."` SET `Saturday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 5";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }
                        $query = "UPDATE `".$professor_table."` SET `Saturday` = '$conca_faculty' WHERE `".$professor_table."`.`slot` = 6";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                        die('Query Failed' . mysqli_error($connection));
                        }

                       }
                    ?>
                 
                    <div class="card-body" align="center">
                    <select style="align:center;" class="btn btn-primary" name="dept">
                     <option value="" disabled selected hidden >Department</option>
                     <?php select_dept();?>
                    </select>

                    <select name="sem" class="btn btn-primary">
                     <option value="" disabled selected hidden >Semester</option>
                     <?php select_sem();?>
                    </select>
                    </div>
                     <!-- /.card-header -->
                      <div>


                       <table style="text-align:center" id="example2" class="table table-bordered table-hover">
                         <thead>
                         <tr>
                           <th>TIME</th>
                           <th colspan="2">MONDAY</th>
                           <th colspan="2">TUESDAY</th>
                           <th colspan="2">WEDNESDAY</th>
                           <th colspan="2">THURSDAY</th>
                           <th colspan="2">FRIDAY</th>
                           <th colspan="2">SATURDAY</th>
                         </tr>
                         </thead>

                         <tbody>
                         <tr>
                           <th>8:00 - 8:45</th>

                           <td colspan="2">
                                       <select class="btn btn-default" name="s1_m_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       <?php 
                                      // $query = UPDATE `5_it` SET `monday` = '' WHERE `5_it`.`slot` = 1;

                                       ?>
                                       </select>


                                       <select class="btn btn-primary" name="s1_m_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>
                           </td>


                           <td colspan="2">
                                       <select class="btn btn-default" name="s1_t_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>


                                       <select class="btn btn-primary" name="s1_t_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>
                           </td>


                           <td colspan="2">
                                       <select class="btn btn-default" name="s1_w_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>

                                       <select class="btn btn-primary" name="s1_w_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>
                           </td>


                           <td colspan="2">
                                       <select class="btn btn-default" name="s1_th_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>

                                       <select class="btn btn-primary" name="s1_th_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>
                           </td>


                           <td colspan="2">
                                       <select class="btn btn-default" name="s1_f_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>

                                       <select class="btn btn-primary" name="s1_f_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>
                           </td>


                           <td colspan="2">
                                       <select class="btn btn-default" name="s1_s_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>

                                       <select class="btn btn-primary" name="s1_s_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>
                           </td>
                         </tr>


                         <tr>
                           <th>8:55 - 9:40</th>
                           <td colspan="2">
                                   <select class="btn btn-default" name="s2_m_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                   </select>

                                   <select class="btn btn-primary" name="s2_m_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                   </select>
                           </td>


                           <td colspan="2">
                                       <select class="btn btn-default" name="s2_t_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>

                                       <select class="btn btn-primary" name="s2_t_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>
                           </td>


                           <td colspan="2">
                                   <select class="btn btn-default" name="s2_w_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                   </select>

                                       <select class="btn btn-primary" name="s2_w_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>
                           </td>


                           <td colspan="2">
                                       <select class="btn btn-default" name="s2_th_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>

                                       <select class="btn btn-primary" name="s2_th_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>
                           </td>


                           <td colspan="2">
                                       <select class="btn btn-default" name="s2_f_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>

                                       <select class="btn btn-primary" name="s2_f_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>
                           </td>


                           <td colspan="2">
                                       <select class="btn btn-default" name="s2_s_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>

                                       <select class="btn btn-primary" name="s2_s_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>
                           </td>
                         </tr>


                         <tr>
                           <tr>
                           <th>10:00 - 10:45</th>
                           <td colspan="2">
                                       <select class="btn btn-default" name='s3_m_f'>
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>



                                       <select class="btn btn-primary" name="s3_m_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>

                           </td>


                           <td colspan="2">
                                       <select class="btn btn-default" name="s3_t_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>



                                       <select class="btn btn-primary" name="s3_t_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>

                           </td>


                           <td colspan="2">
                                       <select class="btn btn-default" name="s3_w_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>



                                       <select class="btn btn-primary" name="s3_w_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>

                           </td>


                           <td colspan="2">
                                       <select class="btn btn-default" name="s3_th_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>



                                       <select class="btn btn-primary" name="s3_th_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>

                           </td>


                           <td colspan="2">
                                       <select class="btn btn-default" name="s3_f_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>



                                       <select class="btn btn-primary" name="s3_f_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>

                           </td>


                           <td colspan="2">
                                       <select class="btn btn-default" name="s3_s_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>



                                       <select class="btn btn-primary" name="s3_s_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>

                           </td>
                         </tr>
                         <tr>
                           <th>10:55 - 11:40</th>
                           <td colspan="2">
                                       <select class="btn btn-default" name="s4_m_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>



                                       <select class="btn btn-primary" name="s4_m_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>

                           </td>


                           <td colspan="2">
                                       <select class="btn btn-default" name="s4_t_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>



                                       <select class="btn btn-primary" name="s4_t_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>

                           </td>


                           <td colspan="2">
                                       <select class="btn btn-default" name="s4_w_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>



                                       <select class="btn btn-primary" name="s4_w_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>

                           </td>


                           <td colspan="2">
                                       <select class="btn btn-default" name="s4_th_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>



                                       <select class="btn btn-primary" name="s4_th_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>

                           </td>


                           <td colspan="2">
                                       <select class="btn btn-default" name="s4_f_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>



                                       <select class="btn btn-primary" name="s4_f_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>

                           </td>


                           <td colspan="2">
                                       <select class="btn btn-default" name="s4_s_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>



                                       <select class="btn btn-primary" name="s4_s_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>

                           </td>
                         </tr>



                         <tr>
                           <th>12:10 - 12:55</th>

                           <td>
                           <div class="form-group">
                           <select class="btn btn-primary" name="s5_m_s_d1">
                           <option value="" disabled selected hidden >Subject</option>
                           <?php subject();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-primary" name="s5_m_s_d2">
                           <option value="" disabled selected hidden >Subject</option>
                           <?php subject();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-primary" name="s5_t_s_d1">
                           <option value="" disabled selected hidden >Subject</option>
                           <?php subject();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-primary" name="s5_t_s_d2">
                           <option value="" disabled selected hidden >Subject</option>
                           <?php subject();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-primary" name="s5_w_s_d1">
                           <option value="" disabled selected hidden >Subject</option>
                           <?php subject();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-primary" name="s5_w_s_d2">
                           <option value="" disabled selected hidden >Subject</option>
                           <?php subject();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-primary" name="s5_th_s_d1">
                           <option value="" disabled selected hidden >Subject</option>
                           <?php subject();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-primary" name="s5_th_s_d2">
                           <option value="" disabled selected hidden >Subject</option>
                           <?php subject();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-primary" name="s5_f_s_d1">
                           <option value="" disabled selected hidden >Subject</option>
                           <?php subject();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-primary" name="s5_f_s_d2">
                           <option value="" disabled selected hidden >Subject</option>
                           <?php subject();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-primary" name="s5_s_s_d1">
                           <option value="" disabled selected hidden >Subject</option>
                           <?php subject();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-primary" name="s5_s_s_d2">
                           <option value="" disabled selected hidden >Subject</option>
                           <?php subject();?>
                           </select>

                           </div>
                           </td>
                         </tr>
                         <tr>
                           <th>12:55 - 1:40</th>
                           <td>
                           <div class="form-group">
                           <select class="btn btn-default" name="s6_m_f_d1">
                           <option value="" disabled selected hidden >Faculty</option>
                           <?php faculty();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-default" name="s6_m_f_d2">
                           <option value="" disabled selected hidden >Faculty</option>
                           <?php faculty();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-default" name="s6_t_f_d1">
                           <option value="" disabled selected hidden >Faculty</option>
                           <?php faculty();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-default" name="s6_t_f_d2">
                           <option value="" disabled selected hidden >Faculty</option>
                           <?php faculty();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-default" name="s6_w_f_d1">
                           <option value="" disabled selected hidden >Faculty</option>
                           <?php faculty();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-default" name="s6_w_f_d2">
                           <option value="" disabled selected hidden >Faculty</option>
                           <?php faculty();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-default" name="s6_th_f_d1">
                           <option value="" disabled selected hidden >Faculty</option>
                           <?php faculty();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-default" name="s6_th_f_d2">
                           <option value="" disabled selected hidden >Faculty</option>
                           <?php faculty();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-default" name="s6_f_f_d1">
                           <option value="" disabled selected hidden >Faculty</option>
                           <?php faculty();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-default" name="s6_f_f_d2">
                           <option value="" disabled selected hidden >Faculty</option>
                           <?php faculty();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-default" name="s6_s_f_d1">
                           <option value="" disabled selected hidden >Faculty</option>
                           <?php faculty();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-default" name="s6_s_f_d2">
                           <option value="" disabled selected hidden >Faculty</option>
                           <?php faculty();?>
                           </select>

                           </div>
                           </td>
                           </tr>
                    </table>
                      </div>      
                    <div  class="card-body" align="center">
                        <button type="submit"  name="submit" class="btn bg-gradient-primary">Submit</button>
                    </div>
               </form>
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
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               
            </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
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
<!-- ../wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
