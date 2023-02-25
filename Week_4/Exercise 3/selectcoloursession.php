<?php
session_start();
$_SESSION['size'] = $_POST['selsize'];
?>

<html>
  <head>
    <title>Select Color Page</title>
  </head>
  <body>
    <form action="confirmationsession.php" method="post">
      Select the color for the widgets you are ordering:<br>
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
