<!-- Sudath Nawagamuwage CO551-Open Source System LoogBook 6-->
<?php
    // Include header.php
    include 'header.php';
?>
<!-- Php coding to print moudle details using foreach loops  -->
<?php
$mymarks["CO552 Programming Concepts"] = 55;
$mymarks["CO454 Web Development"] = 65;
$mymarks["CO456 Computer Architectures"] = 75;
$mymarks["CO458 XML"] = 65;
$mymarks["CO451 Networking"] = 75;
$mymarks["CO455 User Experience(UX)"] = 75;

$total = 0;
echo 'My Module details :'.'</br></br>';
echo '<table border=1>';
echo '<tr><th>Index</th><th>Subject</th></tr>';

foreach ($mymarks as $index => $value) {
    $total = $total + $mymarks[$index];
    $average = $total /  6; 
    // echo "$index $mymarks[$index] <br/>";
    echo '<tr>';
    echo '<td>'.$index.'</td>';
    echo '<td>'.$mymarks[$index].'</td></tr>';
  }
 echo '</table>';

 echo "<br/> The Total marks   =  $total";
 echo "<br/> The Average marks =  $average";
?>
<?php
    // Include footer.php
    include 'footer.php';
?>


