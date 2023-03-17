<!-- Sudath Nawagamuwage CO551-Open Source System LoogBook 6-->
<?php
    // Include header.php
    include 'header.php';
?>
<!-- Php coding to print moudle details using foreach loops  -->
<?php
  $topmodules[0] = "Internet Systems Development";
  $topmodules[5] = "Programming 1";
  $topmodules[10] = "Programming 2";
  $topmodules[30] = "OOAD";
  $topmodules[40] = "Software Engineering";

  echo 'My Module details :'.'</br></br>';
  echo '<table border=1>';
  echo '<tr><th>Index</th><th>Subject</th></tr>';

  foreach ($topmodules as $index=>$value) {
    echo '<tr>';
    echo '<td>'.$index.'value is'.'</td>';
    echo '<td>'.$value.'</td></tr>';    
    // echo "Index is $index and value is $value <br/>";
  }
  echo '</table>';
?>
<?php
    // Include footer.php
    include 'footer.php';
?>


