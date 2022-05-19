<?php
include 'db.php';
//dept
function select_dept(){
    global $connection;
        $query = "SELECT * FROM dept";
        $result = mysqli_query($connection,$query);
        if(!$result){
        die('Query Failed' . mysqli_error());
        }
        while($dept = mysqli_fetch_assoc($result)){
        $dept_name = $dept['dept_name'];
        echo "<option value='$dept_name' ><h4 style='text-align:center'>$dept_name</h4></option>";
        }
    
    }

//sem select
function select_sem(){
    global $connection;
        $query = "SELECT * FROM sem";
        $result = mysqli_query($connection,$query);
        if(!$result){
        die('Query Failed' . mysqli_error());
        }
        while($sem = mysqli_fetch_assoc($result)){
        $sem_name = $sem['sem_name'];
        echo "<option value='$sem_name'>$sem_name</option>";
        }
    
    }




//faculty
function faculty(){
global $connection;
    $query = "SELECT * FROM professor";
    $result = mysqli_query($connection,$query);
    if(!$result){
    die('Query Failed' . mysqli_error());
    }
    while($faculty = mysqli_fetch_assoc($result)){
    $professor_name = $faculty['professor_name'];
    $professor_short = $faculty['professor_short'];
    echo "<option value='$professor_name' >$professor_short</option>";
    }

}

function faculty_short($faculty_name){
    
    global $connection;
    $query = "SELECT * FROM professor WHERE professor_name = '$faculty_name' ";
    $result = mysqli_query($connection,$query);
    if(!$result){
    die('Query Failed' . mysqli_error());
    }
    while($short = mysqli_fetch_assoc($result)){
    $professor_short = $short['professor_short'];
    }
    return $professor_short;
    //UPDATE `professor` SET `professor_short` = 'K B VORA' WHERE `professor`.`professor_id` = 2;
}






//subject
function subject(){
    global $connection;
        $query = "SELECT * FROM subject";
        $result = mysqli_query($connection,$query);
        if(!$result){
        die('Query Failed' . mysqli_error());
        }
        while($subject = mysqli_fetch_assoc($result)){
        $subject_name = $subject['subject_name'];
        $subject_short = $subject['subject_short'];
        echo "<option value='$subject_name' >$subject_short</option>";
        }
    
    }




function subject_short($subject_name){

    global $connection;
    $query = "SELECT * FROM subject WHERE subject_name = '$subject_name' ";
    $result = mysqli_query($connection,$query);
    if(!$result){
    die('Query Failed' . mysqli_error());
    }
    while($short = mysqli_fetch_assoc($result)){
    $subject_short = $short['subject_short'];
    
    }
    return $subject_short;
    //UPDATE `professor` SET `professor_short` = 'K B VORA' WHERE `professor`.`professor_id` = 2;
}


function update($conca){
global $connection;
    $query = "UPDATE `5_it` SET `monday` = '$conca' WHERE `5_it`.`slot` = 1";
    $result = mysqli_query($connection,$query);
    if(!$result){
    die('Query Failed' . mysqli_error());
    }

}





?>