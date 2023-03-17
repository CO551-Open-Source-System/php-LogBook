<!-- Sudath Nawagamuwage CO551-Open Source System LoogBook 6-->
<?php
    // Include header.php
    include 'header.php';
?>
<!-- Php coding -->
<?php
    $hourlyrate = 5.75;
    $hoursperweek = 40;
    $taxtrate =.22;
    $gross = $hourlyrate * $hoursperweek;
    echo "Hour lyrate Is = £ ".$gross, "<br/>";
    $taxtrate = $gross*$taxtrate;
    echo "Tax Rate Is = £ ".$taxtrate, "<br/>";
    $netwage =$gross-$taxtrate;
    echo"Net Wage Is = £ " . $netwage;
?>
<?php
    // Include footer.php
    include 'footer.php';
?>
        

