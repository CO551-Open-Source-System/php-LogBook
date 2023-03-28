<?php
    // Database connection file   
    $conn = mysqli_connect("localhost","sudath","test123","db2_monster");

    $sql = "select id,name from monster;";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    echo "<img src='getjpg.php?id=" . $row['id']. "'/>";

    mysqli_close($conn);
?>

