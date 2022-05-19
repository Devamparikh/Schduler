<?php
if(isset($_POST['submit']))
{
    $student_enroll = $_POST['student_enroll'];
    $student_pass = $_POST['student_pass'];
    //Check if ID is correct
    include "db.php";
    $query = "SELECT student_enroll,student_pass FROM student WHERE student_enroll = ".$student_enroll." AND student_pass = ".$student_pass."";
    $result = mysqli_query($connection,$query);
    if(!$result){
        header("Location: login.php?login=student_id");
        die('Query Failed' . mysqli_error($connection));
        
        exit();
        }
        $student = mysqli_fetch_assoc($result);
        $student_enroll = $student['student_enroll'];
        if($student_enroll !== NULL){
        header("Location: master-st.php?login=$student_enroll");
        exit();
        }
        else{
            header("Location: login.php?login=professor_id");
            exit();
        }
        // echo $professor_id;
    }





?>