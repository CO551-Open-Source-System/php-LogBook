<?php

  header("Content-type: audio/wav");

  // Database connection file
   //include 'Dbconnection.php';
  $conn = mysqli_connect("localhost","sudath","test123","db2_monster");
 

  $sql = "SELECT audio FROM monster WHERE id='" . $_GET['id'] ."';";
  
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);

  $audio = $row['audio'];

  echo $audio;
?>
