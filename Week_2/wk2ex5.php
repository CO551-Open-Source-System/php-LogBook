<!-- Sudath Nawagamuwage CO551-Open Source System LoogBook 6-->
<?php
    // Include header.php
    include 'header.php';
?>
<!-- Php coding to print massage -->
<?php
if (strpos($_SERVER["HTTP_USER_AGENT"], "MSIE") != false)
{
    echo "You are using Internet Explorer<br/>";
}
else
{
   echo "Why are you not using Internet Explorer ?<br/>";
}
?> 
<?php
    // Include footer.php
    include 'footer.php';
?>
