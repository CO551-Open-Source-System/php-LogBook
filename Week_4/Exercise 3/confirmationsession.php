<!-- Sudath Nawagamuwage CO551-Open Source System LoogBook 4-->
<?php
    // Include header.php
    include 'header.php';
?>
<?php
   session_start();
   $size = $_SESSION['size'];
   // Define prices array
   $prices = array(
    "Small" => 15.75,
    "Medium" => 16.75,
    "Large" => 17.75,
    "Extra Large" => 18.75   
  );
   
// Calculate total price using switch statement
switch ($size) {
  case "Small":
      $price = $prices["Small"];
      break;
  case "Medium":
      $price = $prices["Medium"];
      break;
  case "Large":
      $price = $prices["Large"];
      break;
  case "Extra Large":
      $price = $prices["Extra Large"];
      break;
  default:
      $price = 0;
      break;
}
     
   echo "<h2> Your order qty is " . $_SESSION['qty']." </h2></br>";
   echo "<h2> and the selected colour is $_POST[selcolour].</h2>";

   $total_price = $_SESSION['qty'] * $prices[$_SESSION['size']];
   echo "<h2> Total price : £ ".$total_price."</h2>";
?>
<?php
    // Include footer.php
    include 'footer.php';
?>
