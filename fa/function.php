<?php

include "db.php";

function faculty($professor_short){
  global $connection;
  echo $professor_short;
      $query = "SELECT * FROM `".$professor_short."`";
      $result = mysqli_query($connection,$query);
      if(!$result){
      die('Query Failed' . mysqli_error());
      }
      while($faculty = mysqli_fetch_assoc($result)){
      $slot = $faculty['slot'];
      echo "<option value='$slot' >$slot</option>";
      }
  
  }
  

  function professor_free($today,$professor_short,$slot_to_check){
    global $connection;
    $query = "SELECT `".$today."` FROM `".$professor_short."` WHERE `slot` = '$slot_to_check'";
                $result = mysqli_query($connection,$query);
                if(!$result){
                die('Query Failed' . mysqli_error($connection));
                }
                $free = mysqli_fetch_assoc($result);
                $today = $free["$today"];
                if($today == NULL){
                  $professor_upper = strtoupper($professor_short);
                  return $professor_upper;
                  //  "<button type='submit' class='btn btn-primary' name= 'check'>Check</button>"
                }
  }












?>
