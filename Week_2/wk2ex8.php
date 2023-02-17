<?php
$topModules[0] = "Internet Systems Development";
$topModules[1] = "Programming 1";
$topModules[2] = "Programming 2";
$topModules[3] = "OOAD";
$topModules[4] = "Software Engineering";
$topModules[5] = "Networking";
$topModules[6] = "Open Source System";   
?>
<head>
<title>Data in table</title>
</head>
<body>
<table border=1 align="center">
<tr><th>Index</th><th>Subject</th></tr> 
<?php
for ( $count=0; $count < 6; $count++) {
    echo "<tr>
        <td>$count module is</td>
        <td>.$topModules[$count]</td></tr>";
    }
?>
</table>
</body>
</html>