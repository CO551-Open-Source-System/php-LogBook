<?php 
 $_cookieName ='accountNumber';
 setcookie($_cookieName, $_POST['txtaccount']);
?>

<?php echo "Your account is $_POST[txtaccount]"; ?>
<form action="confirmDepositCookies.php" method="post">
<input type="text" name="txtdeposit" />
<input type="submit" />
</form>