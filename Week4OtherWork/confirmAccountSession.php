<?php 
 session_start();
 ?>

<?php
 echo "Your account is $_POST[txtaccount]"; 
 $_SESSION['accountNumber']=$_POST['txtaccount'];
 ?>

<form action="confirmDepositSession.php" method="post">
<input type="text" name="txtdeposit" />
<input type="submit" />
</form>