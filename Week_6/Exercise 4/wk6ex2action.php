<!-- Sudath Nawagamuwage CO551-Open Source System LoogBook 6-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="stylesheet" type="text/css" media="screen" href="stylesheet.css"/>
		<title>PHP log book Sudath Nawagamuwage</title>	
	</head>
	<body>
		<div class="page-container">
			<header>
				<h1>My PHP Log book page</h1>
			</header>
			<div class="content-wrap">
				<div class="container">				
						<?php
							// Database connection file
							include 'Dbconnection.php';	  

							// Prepare query and execute it
							$sql = "SELECT * FROM test WHERE ID = '$_GET[id]'";
							$result = $mysqli->query($sql);

							// Display the form
							$row = mysqli_fetch_assoc($result);
						?>
						<!-- The form to disoaly the data -->
						<form action="wk6ex2delete.php?id=<?php echo $_GET['id'] ?>" method="post">
							Name :<input type=text name=txtname value="<?php echo $row['name'] ?>"/><br/></br>
							Phone number :<input type=text name=txttelno value="<?php echo $row['phone_number'] ?>" /><br/></br>
							Email :<input type=text name=txtemail value="<?php echo $row['email'] ?>" /><br/>
							</br></br>
							<!-- <input type=submit name=btnsubmit value="add" <a href="wk6ex2insert.php">Add New Record</a>/> -->
							<input type="button" name="btnadd" value="Add New Record" onclick="window.location.href='wk6ex1.html'" />
							<input type=submit name=btnupdate class="btn btn-primary" value="Update" />
							<input type="submit" name="btndelete" value="Delete" onclick="return confirm('Are you sure you want to delete this record?')"/>
						</form>
				</div>
			</div>
			<!-- footer -->
			<footer class="footer">
				<p>&copy; 2023 My Website. All rights reserved.</p>
			</footer>
		</div>
	</body>
</html>
