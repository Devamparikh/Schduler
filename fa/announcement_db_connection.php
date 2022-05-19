<?php 
if(isset($_GET['login'])){
    $professor_id = $_GET['login'];
    $professor_short = $_GET['short'];
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
    $announcement = $_POST['announcement'];
    $ending_time = $_POST['ending_time'];
    

    

$connection = mysqli_connect('localhost', 'root', '', 'clg_time_project');
    if(!$connection){
        die('Connection failed');
    }
    
   
    
$query = "INSERT INTO announcement(subject,announcement,faculty,sending_time,ending_time) VALUES('$subject', '$announcement', '$professor_short', CURRENT_TIMESTAMP(),'$ending_time')";

$result = mysqli_query($connection, $query);
if($result){
    echo "Announcement Sent!";
    } else {
    die("Query Failed" . mysqli_error($connection));
}

header("Location:announcement.php?login=$professor_id");
}
?>
