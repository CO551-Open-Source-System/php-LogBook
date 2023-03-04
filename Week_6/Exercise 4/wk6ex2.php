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

// Execute query
$sql = "SELECT * from test";
$result = mysqli_query($conn, $sql);

// Check for errors and handle them gracefully
if (!$result) {
    die("Error: " . mysqli_error($conn));
}

// Display the records and a "delete" link for each record
while ($row = mysqli_fetch_assoc($result)) {
    echo "<a href=\"wk6ex2action.php?id=$row[name]\">$row[name]</a> ";
    echo "<a href=\"wk6ex2delete.php?id=$row[name]\">delete</a><br>";
}

// Release the result set and close the database connection
mysqli_free_result($result);
mysqli_close($conn);
?>