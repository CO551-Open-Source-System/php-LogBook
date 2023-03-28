<?php

  header("Content-type: audio/wav");

  // Database connection file   
  $conn = mysqli_connect("localhost","sudath","test123","db2_monster"); 
  
  // Define the SQL statement for selecting id to print the audio sound
  $sql = "SELECT audio FROM monster WHERE id='" . $_GET['id'] ."';";
  
  // Execute sql statement
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);

  $audio = $row['audio'];

  echo $audio;
?>
