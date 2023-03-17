<!-- Sudath Nawagamuwage CO551-Open Source System LoogBook 6-->
<?php
    // Include header.php
    include 'header.php';
?>
<!-- Php coding to print moudle marks using foreach loops  -->
<?php
  $mymarks["year 1"] = 55;
  $mymarks["year 2"] = 65;
  $mymarks["year 3"] = 75;

  // foreach loop here
  foreach ($mymarks as $index => $value) {
      
    echo "for  $index  my grade was $mymarks[$index] <br/>";
  }
  echo "<br/> My best year was Year 3 when I averaged ". $mymarks["year 3"];
?>

<?php
    // Include footer.php
    include 'footer.php';
?>


