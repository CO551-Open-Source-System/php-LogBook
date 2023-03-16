<?php	

    // Database connection file
    include 'Dbconnection.php';	  

	// Prepare query and execute it
    $sql = "SELECT * FROM test WHERE ID = '$_GET[id]'";
    $result = $mysqli->query($sql);

    // Display the form
    $row = mysqli_fetch_assoc($result);
    ?>
<html>
<body>
<form action=" " method="post">

	Name :
	<input type=text name=txtname value="<?php echo $row['name'] ?>"/>
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
