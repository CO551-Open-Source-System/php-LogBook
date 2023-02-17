<!DOCTYPE html>
<html>
    <head>
    <h2>My Exercise</h2>
    </head>
    <body>
    <?php
        $grades[0] = "fail";
        $grades[1] = "referral";
        $grades[2] = "pass";
        $grades[3] = "merit";
        $grades[4] = "distinction";
        for ( $count=0; $count < 10; $count++) {
        echo "$grades[$count] <br/>";
        }
    ?>
    </body>
</html>