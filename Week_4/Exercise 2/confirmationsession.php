<!-- Sudath Nawagamuwage CO551-Open Source System LoogBook 4-->
<?php
    // Include header.php
    include 'header.php';
?>
<!-- Php coding to print -->
<?php
   session_start();
   
   echo "<h2> Your order qty is :  " . $_SESSION['qty']." </h2></br>";
   echo "<h2> and the selected colour is : $_POST[selcolour].</h2>";

   $total_price = $_SESSION['qty'] * $_SESSION['price'];
   echo "<h2> Total price : £ ".$total_price."</h2>";
?>
