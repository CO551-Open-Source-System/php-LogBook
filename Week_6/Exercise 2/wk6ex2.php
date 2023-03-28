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
					?>
					<?php
	                    //Selecting data from the test teble
	                    $sql = "SELECT * FROM test";
                        // Execute sql statement
	                    $result = $mysqli->query($sql);
                    
                    // <!-- Print the result of queary  -->
                    
                    while ($row = mysqli_fetch_assoc($result))
                    {
                        echo "<a href=\"wk6ex2action.php?id=$row[ID]\">$row[name] $row[ID]</a></br>";  	
                    }
                    ?>
                </div>
			</div>
			<!-- footer -->
			<footer class="footer">
				<p>&copy; 2023 My Website. All rights reserved.</p>
			</footer>
		</div>
	</body>
</html>
