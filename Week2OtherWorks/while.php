<!DOCTYPE html>
<html>
    <head>
    <h2>My Exercise</h2>
    </head>
    <body>
        <?php
        //$balance=$_POST['value'];
        $balance = 50;
        while($balance > 0){
            echo"I have $balance left <br/>";
            $balance = $balance-10;
        }
        ?>
    </body>
</html>