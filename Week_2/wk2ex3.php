<!-- Sudath Nawagamuwage CO551-Open Source System LoogBook 6-->
<?php
    // Include header.php
    include 'header.php';
?>
<!-- Php coding to print my pass grde -->
<?php 
	define("PASS_GRADE",40);
	echo "You need " . PASS_GRADE . " % or more to pass. <br/>";
	$grade = PASS_GRADE  + 15;
	echo "To achieve a merit you need $grade %  or more <br/>";
    $grade = PASS_GRADE + 30;
	echo "To achieve a distinction you need $grade %  or more <br/>";
?>	
<?php
    // Include footer.php
    include 'footer.php';
?>	
