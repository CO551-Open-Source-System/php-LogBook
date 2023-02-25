<?php
   session_start();
   $prices = array(
      "Small" => 10.00,
      "Medium" => 15.00,
      "Large" => 20.00,
      "Extra Large" => 25.00
   
      
    );
   
   echo "<h2> Your order qty is " . $_SESSION['qty']." </h2></br>";
   echo "<h2> and the selected colour is $_POST[selcolour].</h2>";

   $total_price = $_SESSION['qty'] * $prices[$_SESSION['size']];
   echo "<h2> Total price : £ ".$total_price."</h2>";
?>
