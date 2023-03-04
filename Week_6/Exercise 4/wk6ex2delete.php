<?php
// Connect to server and select database
$servername = "localhost";
$username = "sudath";
$password = "test123";
$dbname = "db1_ex5";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare query and execute it
$id = mysqli_real_escape_string($conn, $_GET['id']);
$sql = "DELETE FROM test WHERE name = '$id'";
$result = mysqli_query($conn, $sql);

// Check for errors and handle them gracefully
if (!$result) {
    die("Error: " . mysqli_error($conn));
}

echo "Record deleted successfully";

// Close the database connection
mysqli_close($conn);
?>