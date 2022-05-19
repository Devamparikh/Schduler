<?php
if(isset($_GET['login'])){
    $professor_id = $_GET['login'];
}

        include "db.php";
        $query = "SELECT professor_short FROM professor WHERE professor_id = ".$professor_id."";
        $result = mysqli_query($connection,$query);
        if(!$result){
          // header("Location: login.php?login=professor_id");
          die('Query Failed' . mysqli_error($connection));
          
          exit();
          }
          $faculty = mysqli_fetch_assoc($result);
          $professor_short = $faculty['professor_short'];
        
 

if(isset($_POST['submit'])) {
    global $connection;
    $subject = $_POST['subject'];
    $select_receiver = $_POST['select_receiver'];
    $assignment = $_POST['assignment'];
    $submission_time = $_POST['submission_time'];
    
$connection = mysqli_connect('localhost', 'root', '', 'clg_time_project');
    if(!$connection){
        die('Connection failed');
    }
    
$query = "INSERT INTO assignment(subject,assignment,faculty,sending_time,submission_time) VALUES('$subject', '$assignment', '$professor_short', CURRENT_TIMESTAMP(), '$submission_time')";

$result = mysqli_query($connection, $query);
if($result){
    echo "Assignment Sent!";
    } else {
    die("Query Failed" . mysqli_error($connection));
}


header("Location:assignment.php?login=$professor_id");
}
?>