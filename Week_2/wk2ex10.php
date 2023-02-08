<?php
  $mymarks["year 1"] = 55;
  $mymarks["year 2"] = 65;
  $mymarks["year 3"] = 75;

  // foreach loop here
  for ($index =0; $index < 75; $index++);
  {
    echo "for  $index  my grade was  $mymarks[$index] <br/>";
  }
  echo "<br/> My best year was Year 3 when I averaged ". $mymarks["year 3"];
?>


