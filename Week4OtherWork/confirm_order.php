<?php
session_start();
$prices = array(
    "Small" => 10.00,
    "Medium" => 15.00,
    "Large" => 20.00,
    "Extra Large" => 25.00
  );
$total = $_SESSION['qty'] * $prices[$_SESSION['size']];
?>

<html>
  <head>
    <title>Confirm Order Page</title>
  </head>
  <body>
    <h1>Order Details</h1>
    <p>Quantity: <?php echo $_SESSION['qty']; ?></p>
    <p>Size: <?php echo $_SESSION['size']; ?></p>
    <p>Color: <?php echo $_POST['selcolor']; ?></p>
    <p>Total Price: <?php echo '$' . number_format($total, 2); ?></p>
  </body>
</html>