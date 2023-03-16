<!-- Sudath Nawagamuwage CO551-Open Source System  LoogBook 6-->
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
						<form action=" " method="post">
							Name :<input type=text name=txtname value="<?php echo $row['name'] ?>"/></br></br>
							Phone number :<input type=text name=txttelno value="<?php echo $row['phone_number'] ?>" /></br></br>
							Email :<input type=text name=txtemail value="<?php echo $row['email'] ?>" /></br></br>
							<input type=submit name=btnsubmit value="save"/>
						</form>
				</div>
			<!-- footer -->
			<footer class="footer">
				<p>&copy; 2023 My Website. All rights reserved.</p>
			</footer>
		</div>
	</body>
</html>
