<html>
  <head><title>Select colour page</title></head>
    <body>
      <?php session_start();?>
        <form action="confirmationsession.php"  method="post">
       	Select the colour for the 
        <?php $_SESSION['qtyNumber'] = $_POST['selquty'] 
        = $_POST['selqty'] 
        ?>
         widgets you are ordering
   	<select name="selcolour">
   	  <option>white</option>
	  <option>red</option>
	  <option>yellow</option>
	  <option>green</option>
	  <option>blue</option>
        </select>
        <br/><br/>	
        <input type="submit" value="Buy"/>
      </form>
   </body>
</html>	
