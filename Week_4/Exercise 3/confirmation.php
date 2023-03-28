<!-- Sudath Nawagamuwage CO551-Open Source System LoogBook 4-->
<?php
    // Include header.php
    include 'header.php';
?>
<?php
session_start();

$qty = $_SESSION['selqty'];
$price = $_POST['txtprice'];
$color = $_SESSION['selcolour'];

$total = $price * $qty;
?>

<!-- <html>
<head>
	<title>Confirmation Page</title>
</head>
<body> -->
	<p>Thank you for your purchase!</p>
	<p>Qty: <?php echo $qty; ?></p>
	<p>Colour: <?php echo $color; ?></p>
	<p>Total Price: <?php echo $total; ?></p>
<!-- </body>
</html> -->
<?php
    // Include footer.php
    include 'footer.php';
?>