<!-- Sudath Nawagamuwage CO551-Open Source System LoogBook 6-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" type="text/css" media="screen" href="stylesheet.css"/>
        <title>PHP log book Sudath Nawagamuwage</title>	
    </head>
    <body>
        <div class="page-container">
            <header>
                <h1><h1>My PHP Logbook page EX:6</h1></h1>
            </header>
            <div class="content-wrap">
                <div class="container">
					<!-- Php coding -->
					<?php
						include("myfunctions.inc");
						html_header("My second function demo");
						html_h1("Tax Calculation");
						echo "I pay £ " . calculatetax(15000,22) . " tax";
						html_footer();
					?>
				</div>
			</div>
		<!-- footer -->
		<footer class="footer">
        	<p>&copy; 2023 My Website. All rights reserved.</p>
		</footer>
	</div>
</body>
</html>
					
