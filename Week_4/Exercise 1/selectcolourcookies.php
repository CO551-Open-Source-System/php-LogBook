<?php
// Include header.php
include 'header.php';
?>
<!-- Php coding to -->
<?php $cookieName ='qtyNumber';    
setcookie($cookieName, $_POST['selqty']);
?>
<form action="confirmationcookies.php"  method="post">
Select the colour for the <?php echo $_POST['selqty'] ?> widgets you are ordering
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
