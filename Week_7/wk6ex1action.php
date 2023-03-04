<?php
	// $sql = "INSERT INTO test (name,email,phone_number) ";
	// $sql = $sql . " values ('$_POST[txtName]','$_POST[txtEmail]','$_POST[txtPhoneNumber]’)";
    // $sql = "INSERT INTO test (name,email,phone_number) ";
	// $sql =$sql. " VALUES ('$_POST[txtName]','$_POST[txtEmail]','$_POST[txtPhoneNumber]')";

    $sql = "INSERT INTO test (name, email, phone_number) 
    VALUES ('".$_POST['txtName']."','".$_POST['txtEmail']."','".$_POST['txtPhoneNumber']."')";

    
    $sql = mysqli_query($conn, $sql);
	
	if (!$result) {
		// Handle the error
	}
	// Connect to server and select database
    $servername = "localhost";
    $username = "21428786";
    $password = "mysqluser";
    $dbname = "db1_21428786";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
	
	// Execute sql statement	
   

	$sql = "SELECT * from test";
	$result = mysqli_query($conn, $sql);
	// Execute sql statement
	
	while ($row = mysqli_fetch_assoc($result))
	{
		echo "$row[name]  $row[email]  $row[phone_number] <br/>";
	}
    // Close the database connection
    mysqli_close($conn);
?>
