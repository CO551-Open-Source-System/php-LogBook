<?php
session_start();
$_SESSION['qty'] = $_POST['selqty'];
$_SESSION['price'] = $_POST['txtprice'];
?>

<html>
  <head>
    <title>Select Color Page</title>
  </head>
  <body>
    <form action="confirmation.php" method="post">
      Select the color for the <?php echo $_SESSION['qty']; ?> widgets you are ordering:<br>
      <select name="selcolour">
        <option value="white">White</option>
        <option value="red">Red</option>
        <option value="yellow">Yellow</option>
        <option value="green">Green</option>
        <option value="blue">Blue</option>
      </select><br><br>
      <input type="submit" value="Buy">
    </form>
  </body>
</html>