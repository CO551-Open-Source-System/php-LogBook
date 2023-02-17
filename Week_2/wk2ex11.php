<?php
$mymarks["CO552 Programming Concepts"] = 55;
$mymarks["CO454 Web Development"] = 65;
$mymarks["CO456 Computer Architectures"] = 75;
$mymarks["CO458 XML"] = 65;
$mymarks["CO451 Networking"] = 75;
$mymarks["CO455 User Experience(UX)"] = 75;

$total = 0;
foreach ($mymarks as $index => $value) {
    $total = $total + $mymarks[$index];
    $average = $total /  6; 
    echo "$index => $mymarks[$index] <br/>";
  }
 echo "<br/> The Total marks   =  $total";
 echo "<br/> The Average marks =  $average";
?>


