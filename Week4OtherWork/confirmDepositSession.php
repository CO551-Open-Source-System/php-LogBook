<?php
session_start();
echo "Your wish to deposit $_POST[txtdeposit]";
echo "Your account is" .$_SESSION['accountNumber'];
?>