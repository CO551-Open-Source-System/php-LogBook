<?php	

    // Database connection file
    include 'Dbconnection.php';

	//Selecting data from the test teble
	$sql = "SELECT * FROM test";
    // Execute sql statement
	$result = $mysqli->query($sql);
?>
<html>
<body>
<!-- Print the result of queary  -->
<?php
while ($row = mysqli_fetch_assoc($result))
{
      echo "<a href=\"wk6ex2action.php?id=$row[ID]\">$row[name] $row[ID]</a></br>";  	
}
?>
</body>
</html>
