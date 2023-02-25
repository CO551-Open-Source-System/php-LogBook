<?php
session_start();
$_SESSION['size'] = $_POST['selsize'];
?>

<html>
  <head>
    <title>Select Color Page</title>
  </head>
  <body>
    <form action="confirm_order.php" method="post">
      Select the color for the widgets you are ordering:<br>
      <select name="selcolor">
        <option value="Red">Red</option>
        <option value="Green">Green</option>
        <option value="Blue">Blue</option>
      </select><br><br>
      <input type="submit" value="Next">
    </form>
  </body>
</html>