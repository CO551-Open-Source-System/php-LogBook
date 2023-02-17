<?php
$mymarks["year 1"] = 55;
$mymarks["year 2"] = 65;
$mymarks["year 3"] = 75;

$total = 0;

$average = $total /  3;
foreach ($mymarks as $index => $value) {
    $total = $total + $mymarks[$index];
    echo "Myaverage mark. $average";
}

//echo ($total . $average);
?>   
