<?php
$grades[0] = "fail";
$grades[1] = "referral";
$grades[2] = "pass";
$grades[3] = "merit"; // By not including an index, php
$grades[4] = "distinction"; // assigns ( current max index + 1 )
for ( $count=0; $count < 5; $count++) {
    echo "$grades[$count] <br/>";
    }
?>