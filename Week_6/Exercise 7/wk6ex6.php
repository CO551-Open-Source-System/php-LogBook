<?php
    include("myfunctions.inc.php");
    html_header("My second function demo");
	html_h1("Tax Calculation");
    echo "I pay £" .calculatetax(15000) . "tax";
    html_footer();
?>
