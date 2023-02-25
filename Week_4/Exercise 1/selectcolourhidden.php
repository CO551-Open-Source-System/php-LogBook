<html>
  <head><title>Select colour page</title></head>
    <body>
      <form action="confirmationhidden.php"  method="post">
	Select the colour for the <input type="hidden" name="selqty" value="<?php echo $_POST['selqty'] ?>"/> widgets you are ordering
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
