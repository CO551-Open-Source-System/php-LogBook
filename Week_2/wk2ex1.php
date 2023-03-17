<!-- Sudath Nawagamuwage CO551-Open Source System LoogBook 6-->
<?php
    // Include header.php
    include 'header.php';
?>
<!-- Php coding to caculation the wages -->
<?php 
    $hourlyrate	= 5.75;
	$hoursperweek = 40;
	$gross = $hourlyrate * $hoursperweek;
?>	
<p> My gross wage is : <?php print("£ $gross"); ?>
<?php
    // Include footer.php
    include 'footer.php';
?>
