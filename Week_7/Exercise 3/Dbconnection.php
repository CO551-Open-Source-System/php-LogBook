
<?php
    // Connect to server and select database
    $conn = mysqli_connect("localhost","sudath","test123","db2_monster");
    
    // Check connection
    if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
  }
?>