
<?php
// Connect to server and select database at the intweb MyPhpAdmin
// $db = new mysqli("localhost","21428786","mysqluser","db2_21428786");   

// Connect to server and select database
  $db = new mysqli("localhost","sudath","test123","db2_monster");

    // Check connection
    if ($db -> connect_errno) {
    echo "Failed to connect to MySQL: " . $db -> connect_error;
    exit();
  }
?>