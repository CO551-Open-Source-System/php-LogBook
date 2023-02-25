<?php
session_start();
$size = $_SESSION['size'];
$qty = $_SESSION['qty'];
$price = 0;

switch ($size) {
  case "Small":
    $price = 10.00;
    break;
  case "Medium":
    $price = 15.00;
    break;
  case "Large":
    $price = 20.00;
    break;
  case "Extra Large":
    $price = 25.00;
    break;
}

$total = $qty * $price;
?>

<html>
  <head>
    <title>Confirm Order Page</title>
  </head>
  <body>
    <h1>Order Details</h1>
    <p>Quantity: <?php echo $qty; ?></p>
    <p>Size: <?php echo $size; ?></p>
    <p>Color: <?php echo $_POST['selcolor']; ?></p>
    <p>Total Price: <?php echo '$' . number_format($total, 2); ?></p>
  </body>
</html>