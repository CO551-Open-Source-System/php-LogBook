<!-- Sudath Nawagamuwage
	 CO551-Open Source System
	 LoogBook 6-->
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
	
    //Update queary
    $sql = "UPDATE test SET 
            name = '{$_POST['txtname']}', 
            email = '{$_POST['txtemail']}', 
            phone_number = '{$_POST['txttelno']}'
        WHERE ID = '{$_GET['id']}'";

    //Prepare query and execute it
    $result = $mysqli->query($sql);
    
    echo $sql;

    if($result){
        echo "Saved Successfully!";
    }  
    header('location: wk6ex2.php?msg=Record updated successfully');  
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
