<?php

    // Database connection file
    include 'Dbconnection.php';

    // Insert query
    $sql = "INSERT INTO test (name, email, phone_number)
            VALUES ('{$_POST['txtname']}', '{$_POST['txtemail']}', '{$_POST['txttelno']}')";

    // Prepare query and execute it
    $result = $mysqli->query($sql);

    if ($result) {
        echo "Saved successfully!";
    } else {
        echo "Error: " . $mysqli->error;
    }
    header('location: wk6ex.php?msg=Record updated successfully');
    exit();
?>