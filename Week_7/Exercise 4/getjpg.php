<?php

  header("Content-type: image/jpeg");

  // Database connection file
  //include 'Dbconnection.php';
  $conn = mysqli_connect("localhost","sudath","test123","db2_monster");


  $sql = "SELECT image FROM monster WHERE id='" . $_GET['id'] ."';";
	
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  
  $jpg = $row['image'];

  echo $jpg;
?>
