<!-- Sudath Nawagamuwage CO551-Open Source System LoogBook 6-->
<?php
    // Include header.php
    include 'header.php';
?>
<!-- Php coding to print moudle details using foreach loops  -->
<?php
  $topmodules[0] = "Open Source Systems ";
  $topmodules[1] = "Programming 1";
  $topmodules[2] = "Programming 2";
  $topmodules[3] = "Web Application Development";
  $topmodules[4] = "Software Engineering";  

echo 'My Module details :'.'</br></br>';
echo '<table border=1>';
echo '<tr><th>Index</th><th>Subject</th></tr>';

  for ( $count=0; $count < 4; $count++) {
    echo '<tr>';
    echo '<td>'.$count.'</td>';
    echo '<td>'.$topmodules[$count].'</td></tr>';    
    }
    echo '</table>';
?>
<?php
    // Include footer.php
    include 'footer.php';
?>
