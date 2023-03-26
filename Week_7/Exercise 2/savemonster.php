<?php
// Database connection file
include 'Dbconnection.php';

// $db = mysqli_connect("localhost", "mysqlusername", "mysqlpassword", "mysqldatabase");

// Obtain the file sent to the server within the response.
$image = $_FILES['monsterimage']['tmp_name']; 
$audio = $_FILES['monsteraudio']['tmp_name'];

  // Get the file binary data
  $imagedata = addslashes(fread(fopen($image, "r"), filesize($image)));
  $audiodata = addslashes(fread(fopen($audio, "r"), filesize($audio)));
   
  $sql = "INSERT INTO monster";
  $sql .= "(name, image, audio) ";
  $sql .= "VALUES ('$_POST[txtname]', '$imagedata','$audiodata');";

//   $result = $mysqli->query($sql);
  $result = mysqli_query($db, $sql);
  if($result){
    echo "Record updated successfully!";
}
// Redirect back to the list page
header('location: monsterform.html?msg=Record updated successfully');
//mysqli_close($db);
?>
