<!-- Sudath Nawagamuwage CO551-Open Source System LoogBook 4-->
<?php
    // Include header.php
    include 'header.php';
?>
<?php
session_start();
$_SESSION['qty'] = $_POST['selqty'];
 ?>

<html>
  <head>
    <title>Select Size Page</title>
  </head>
  <body>
    <form action="selectcoloursession.php" method="post">
      Select the Size for the widgets you are ordering:<br>
      <select name="selsize">
        <option value="Small">Small</option>
        <option value="Medium">Medium</option>
        <option value="Large">Large</option>
        <option value="Extra Large">Extra Large</option>
      </select><br><br>
      <input type="submit" value="Buy">
    </form>
    <?php
    // Include footer.php
    include 'footer.php';
?>