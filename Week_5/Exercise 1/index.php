<!DOCTYPE html>
<html>
<head>
<title> <?php echo "PHP Object Oriented Programming";?></title>    
</head>
<body>
    <?php
    include("class_lib.php");
    $sudath = new person();
	$tania = new person;
	$sudath->set_name("Sudath Nawagamuwage <br />");
	$tania->set_name("Tania Nawagamuwage <br />");

    

    echo " Sudath's full name: " . $sudath-> get_name();
	echo " Tania's full name:   " . $tania-> get_name(); 
    ?>
</body>
</html>