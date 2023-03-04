<?php
	include("myfunctions.inc");
	html_header("My second function demo");
	html_h1("Tax Calculation");
	echo "I pay £ " . calculatetax(15000,22) . " tax";
	html_footer();
?>
