<!-- Sudath Nawagamuwage CO551-Open Source System LoogBook 8-->
<?php
    // Include header.php
    include 'header.php';
?>
<?php 
    // Start the session
    session_start();
    
    //   Database connection file
     $conn = mysqli_connect("localhost","sudath","test123","db1_ex8"); 
    
     // Query the database
    $sql = "SELECT * FROM lotto;";
    $result = mysqli_query($conn, $sql);

    // Print the form
    echo "<form action='" . $_SERVER['PHP_SELF'] . "' method='post'>";
    echo "<br/>Select the lottery week ";
    echo "<select name='selweek'>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['wk'] . "'>" . $row['wk'] . "</option>";
    }
    echo "</select><br/>";
    echo "<input type='submit' value='Select' />";
    echo "</form>";
    
    // Close the database connection
    mysqli_close($conn);
?>
<?php
    // Include footer.php
    include 'footer.php';
?>
