
<?php
// Connect to server and select database at the intweb MyPhpAdmin
// $mysqli = new mysqli("localhost","21428786","mysqluser","db1_21428786");   

// Connect to server and select database
    // $mysqli = new mysqli("localhost","sudath","test123","db1_ex8");
    $conn = mysqli_connect("localhost","sudath","test123","db1_ex8");

    // Check connection
    if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }
?>
