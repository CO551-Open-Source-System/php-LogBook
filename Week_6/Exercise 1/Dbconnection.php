
<?php
// Connect to server and select database
    $mysqli = new mysqli("localhost","sudath","test123","db1_ex5");

    // Check connection
    if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }
?>