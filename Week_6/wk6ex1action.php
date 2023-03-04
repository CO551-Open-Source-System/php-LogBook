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

	// Define the SQL statement for inserting data into the 'test' table
    $sql = "INSERT INTO test (name, email, phone_number) 
    VALUES ('".$_POST['txtName']."','".$_POST['txtEmail']."','".$_POST['txtPhoneNumber']."')";
	
	// Execute the SQL statement to insert the data into the 'test' table
    if (mysqli_query($conn, $sql)) {
        echo " New record created successfully <br/><br/>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
	
	
	// Define the SQL statement for selecting all data from the 'test' table 

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
