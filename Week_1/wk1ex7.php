<html>
    <header>
        <title>My Php Lob Book website</title>
    </header>
    <body>
        <center>
            <?php
                $hourlyrate = 5.75;
                $hoursperweek = 40;
                $taxtrate =.22;
                $gross = $hourlyrate * $hoursperweek;
                echo $gross, "<br/>";
                $taxtrate = $gross*$taxtrate;
                echo $taxtrate, "<br/>";
                $netwage =$gross-$taxtrate;
                echo $netwage;
            ?>
        </center>
    </body>
</html>

