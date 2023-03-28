<!-- Sudath Nawagamuwage CO551-Open Source System LoogBook 6-->
<?php
    // Include header.php
    include 'header.php';
?>
<?php
  // Check if the "txtage" field is less than 21
  if ($_POST["txtage"] < 21) 
  {
	echo "You are under 21 years old<br/>";
  }
  else
  {
	echo "You are  21 years old or over<br/>";
  }
?>
<?php
  // Check if the "txtgender" field is equal to the string 'male'
  if ($_POST["txtgender"] == 'male') 
  {
	echo "You are  Maler<br/>";
  }
  else 
  {
	echo "You are  Female <br/>";
  }
?>
<?php
    // Include footer.php
    include 'footer.php';
?>
