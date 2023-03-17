<!-- Sudath Nawagamuwage CO551-Open Source System LoogBook 6-->
<?php
    // Include header.php
    include 'header.php';
?>
<!-- Php coding to print my age different way -->
<?php
$topModules[0] = "Internet Systems Development";
$topModules[1] = "Programming 1";
$topModules[2] = "Programming 2";
$topModules[3] = "OOAD";
$topModules[4] = "Software Engineering";
$topModules[5] = "Networking";
$topModules[6] = "Open Source System";   

echo 'My Module details :'.'</br></br>';
echo '<table border=1>';
echo '<tr><th>Index</th><th>Subject</th></tr>';
for ( $count=0; $count < 6; $count++) {
    echo '<tr>';
    echo '<td>'.$count.'module is'.'</td>';
    echo '<td>'.$topModules[$count].'</td></tr>';
    }
    echo '</table>';
?>
<?php
    // Include footer.php
    include 'footer.php';
?>