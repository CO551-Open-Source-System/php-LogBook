<!-- Sudath Nawagamuwage CO551-Open Source System LoogBook 6-->
<?php
    // Include header.php
    include 'header.php';
?>
 <!-- Print the value of the "txtname", "radsex" and  "seloccupation" field submitted through an HTML form using the HTTP POST method -->
<?php
	echo "Your name is : $_POST[txtname]<br/>";
	echo "Your gender is : $_POST[radsex]<br/>";
	echo "Your occupation is : $_POST[seloccupation]";
	
?>
<?php
    // Include footer.php
    include 'footer.php';
?>
