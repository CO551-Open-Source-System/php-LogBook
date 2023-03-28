<!-- Sudath Nawagamuwage CO551-Open Source System LoogBook 4-->
<?php
    // Include header.php
    include 'header.php';
?>
<!-- Php coding to print -->
<form action="confirmationhidden.php"  method="post">
Select the colour for the <input type="hidden" name="hdselqty"
value="<?= $_POST['selqty'] ?>"/> widgets you are ordering
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
<?php
// Include footer.php
include 'footer.php';
?>
