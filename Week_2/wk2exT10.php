<?php
  $mymarks["year 1"] = 55;
  $mymarks["year 2"] = 65;
  $mymarks["year 3"] = 75;
?>
<html>
  <head>
    <title>Data Table</title>
</head>
<body>
<table border=1 "center" align="center">
  <tr>
    <th>Year</th>
    <th>Marks</th>    
</tr>
<?php
// foreach loop here
  foreach ($mymarks as $index => $value) {
      
    echo "<tr>
            <td>For  $index</td><td>my grade was $mymarks[$index]</td>
          </tr>";
  }
  echo "My best year was Year 3 when I averaged ". $mymarks["year 3"];
?>  
</table>
</body>
</html>  
  


