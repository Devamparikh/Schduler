<?php
if(isset($_POST['submit']))
{
    $professor_id = $_POST['professor_id'];
    $professor_pass = $_POST['professor_pass'];
    //Check if ID is correct
    include "db.php";
    $query = "SELECT professor_id,professor_pass FROM professor WHERE professor_id = ".$professor_id." AND professor_pass = ".$professor_pass."";
    $result = mysqli_query($connection,$query);
    if(!$result){
        header("Location: login.php?login=professor_id");
        die('Query Failed' . mysqli_error($connection));
        
        exit();
        }
        $faculty = mysqli_fetch_assoc($result);
        $professor_id = $faculty['professor_id'];
        if($professor_id !== NULL){
        header("Location: master-fa.php?login=$professor_id");
        exit();
        }
        else{
            header("Location: login.php?login=professor_id");
            exit();
        }
        // echo $professor_id;
    }





?>