<!-- Sudath Nawagamuwage CO551-Open Source System LoogBook 8-->
<?php
    // Include header.php
    include 'header.php';
?>
<?php
    // Start the session
    session_start();
    // Database connection file   
    $conn = mysqli_connect("localhost", "sudath", "test123", "db1_ex8");

    if (isset($_POST['selweek'])) {
        $week = mysqli_real_escape_string($conn, $_POST['selweek']);
        $sql = "SELECT * FROM lotto WHERE wk = $week";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            echo "Number 1 is $row[number1]<br/>";
            echo "Number 2 is $row[number2]<br/>";
            echo "Number 3 is $row[number3]<br/>";
            echo "Number 4 is $row[number4]<br/>";
            echo "Number 5 is $row[number5]<br/>";
            echo "Number 6 is $row[number6]<br/>";
        } else {
            echo "No results found for week $week.";
        }
    } else {
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
    
    }
    // Close the database connection
    mysqli_close($conn);
?>

<?php
    // Include footer.php
    include 'footer.php';
?>
