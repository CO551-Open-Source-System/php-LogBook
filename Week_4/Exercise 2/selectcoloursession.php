<!-- Sudath Nawagamuwage CO551-Open Source System LoogBook 4-->
<?php
    // Include header.php
    include 'header.php';
?>
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
    <form action="confirmationsession.php" method="post">
      Select the color for the widgets you are ordering :<br>
      <select name="selcolour">
        <option value="white">White</option>
        <option value="red">Red</option>
        <option value="yellow">Yellow</option>
        <option value="green">Green</option>
        <option value="blue">Blue</option>
      </select><br><br>
      <input type="submit" value="Buy">
    </form>
    <?php
    // Include footer.php
    include 'footer.php';
?>