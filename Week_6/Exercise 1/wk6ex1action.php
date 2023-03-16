<?php
    // Database connection file
    include 'Dbconnection.php';

    //Insert the value to database
    $sql = "INSERT INTO test (name,email,phone_number)";
    $sql = $sql . " values ('$_POST[txtName]','$_POST[txtEmail]','$_POST[txtPhoneNumber]')";
   
//    // Connect to server and select database
//     $mysqli = new mysqli("localhost","sudath","test123","db1_ex5");

//     // Check connection
//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }

   
	//Execute the SQL statement to insert the data into the 'test' table
    if ($mysqli->query($sql) === TRUE) {
        echo "New record created successfully <br/><br/>";
      } else {
        echo "Error: " . $sql . "<br>" . $mysqli -> connect_error;
      }
	
	
	// Define the SQL statement for selecting all data from the 'test' table 
	$sql = "SELECT * from test";
    // $result = mysqli_query($conn, $sql);
	
    // Execute sql statement
	$result = $mysqli->query($sql);
	while ($row = mysqli_fetch_assoc($result))
	{
		echo "$row[name]  $row[email]  $row[phone_number] <br/>";
	}
	
    // Close the database connection
    // mysqli_close($conn);
?>
