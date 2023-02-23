<?php echo "Your account is $_POST[txtaccount]"; ?>
<form action="confirmDepositHidden.php" method="post">
<input type="text" name="txtdeposit" />
<input type="hidden" name="hdaccount"
value="<?php echo $_POST['txtaccount'] ?>"/>
<input type="submit" />
</form>