<!-- Sudath Nawagamuwage CO551-Open Source System LoogBook 8-->
<?php
    // Include header.php
    include 'header.php';
?>
<?php	
    // Database connection file
    include 'Dbconnection.php';
?>
<?php
     $lottodate = date("d m Y");
     echo "The lottery numbers for $lottodate are : ";
     for($n=1;$n<7;$n++){
        $number[$n] = rand(1,49);
        echo "<br/> $number[$n]";
     }
?>
<?php
    // Include footer.php
    include 'footer.php';
?>
