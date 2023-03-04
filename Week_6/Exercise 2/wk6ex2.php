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

	$sql = "SELECT * from test";
    $result = mysqli_query($conn, $sql);

	// Execute sql statement
	
?>
<html>
<body>

<?php
while ($row = mysqli_fetch_assoc($result))
{
      echo "<a href=\"wk6ex2action.php?id=$row[name]\">$row[name]</a></br>";  	
}
?>
</body>
</html>
