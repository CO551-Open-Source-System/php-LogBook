<?php
session_start();
?>

<html>
  <head>
    <title>Widget Order Form</title>
  </head>
  <body>
    <form action="select_size.php" method="post">
      Select the quantity of widgets you require:<br>
      <select name="selqty">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select><br><br>
      <input type="submit" value="Next">
    </form>
  </body>
</html>