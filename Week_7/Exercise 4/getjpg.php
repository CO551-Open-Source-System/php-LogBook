<?php

  header("Content-type: image/jpeg");

  // Database connection file
  $conn = mysqli_connect("localhost","sudath","test123","db2_monster");

  // Define the SQL statement for selecting id to print the image sound
  $sql = "SELECT image FROM monster WHERE id='" . $_GET['id'] ."';";
	
   // Execute sql statement
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  
  $jpg = $row['image'];

  echo $jpg;
?>
