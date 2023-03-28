<!-- Sudath Nawagamuwage CO551-Open Source System LoogBook 6-->
<?php
    // Include header.php
    include 'header.php';
?>
<?php
  // Use a switch statement to check the value of the "radcourse" field
  switch ($_POST["radcourse"])
  {
    case "HNC" : echo "You have selected an HNC course";
                 break;
    case "HND" : echo "You have selected an HND course";
                 break;
    case "BSC" : echo "You have selected a BSC course";
                 break;
    case "PartTimeBSC" : echo "You have selected a BSC Part-time course";
                break;
        default    : echo "No course selected";
  }
?>
<?php
    // Include footer.php
    include 'footer.php';
?>       
