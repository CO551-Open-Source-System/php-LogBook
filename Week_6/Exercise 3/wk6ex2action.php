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
    $id =mysqli_real_escape_string($conn, $_GET['id']);
    $sql = "SELECT * from test where name = '$id'";
    $result = mysqli_query($conn, $sql);

    // Check for errors and handle them gracefully
    if (!$result) {
        die("Error: " . mysqli_error($conn));
    }

    //Display the form
    $row = mysqli_fetch_assoc($result);

	if(isset($_POST['btnsubmit'])) {
        
        $telno = mysqli_real_escape_string($conn, $_POST['txttelno']);
        $email = mysqli_real_escape_string($conn, $_POST['txtemail']);
        
        $sql = "UPDATE test SET phone_number='$telno', email='$email' WHERE name='$id'";
        $result = mysqli_query($conn, $sql);
        
        if($result) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }   
    // // Display the form
    // $row = mysqli_fetch_assoc($result);  
    // // // Close the database connection
    // // mysqli_close($conn);
   
    ?>
<html>
<body>
<form action=" " method="post">

	Name :
	<input type=text name=txtname value="<?php echo $row['name'] ?>" readonly />
	</br>
	Phone number :
	<input type=text name=txttelno value="<?php echo $row['phone_number'] ?>" />
	</br>
	Email :
	<input type=text name=txtemail value="<?php echo $row['email'] ?>" />
	</br>
	<input type=submit name=btnsubmit value="save"/>
</form>
</body>
