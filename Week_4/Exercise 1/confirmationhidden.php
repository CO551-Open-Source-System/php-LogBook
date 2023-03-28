<!-- Sudath Nawagamuwage CO551-Open Source System LoogBook 4-->
<?php
    // Include header.php
    include 'header.php';
?>
<!-- Php coding to print the quntitiy using hidden function -->
<?php
   echo "<h2> Your order qty is : $_POST[hdselqty] </h2></br>";
   echo "<h2> and the selected colour is : $_POST[selcolour].</h2>"
?>
<?php
    // Include footer.php
    include 'footer.php';
?>