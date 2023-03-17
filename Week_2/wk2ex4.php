<!-- Sudath Nawagamuwage CO551-Open Source System LoogBook 6-->
<?php
    // Include header.php
    include 'header.php';
?>
<!-- Php coding to print Speed camera advise script -->
<?php
  $points = 10;
 // Output appropriate message depending on points awarded.
 if ( $points >= 12) 
{
   echo "Public transport is your best option. <br/>";
}
elseif ($points >= 9)
{
   echo "If you get caught say your grandmother was driving. <br/>";
}
else 
{
   echo "There is no need to worry about the speed limit.<br/>";
}
?> 
<?php
    // Include footer.php
    include 'footer.php';
?>
