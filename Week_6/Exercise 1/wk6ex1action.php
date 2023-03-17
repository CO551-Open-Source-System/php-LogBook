 <!-- Sudath Nawagamuwage CO551-Open Source System LoogBook 6-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" type="text/css" media="screen" href="stylesheet.css"/>
        <title>PHP log book Sudath Nawagamuwage</title>	
    </head>
    <body>
        <div class="page-container">
            <header>
                <h1>My PHP Log book page</h1>
            </header>
            <div class="content-wrap">
                <div class="container">
                    <?php
                         // Database connection file
                        include 'Dbconnection.php';

                        //Insert the value to database
                        $sql = "INSERT INTO test (name,email,phone_number)";
                        $sql = $sql . " values ('$_POST[txtName]','$_POST[txtEmail]','$_POST[txtPhoneNumber]')";
                    
                        //Execute the SQL statement to insert the data into the 'test' table
                        if ($mysqli->query($sql) === TRUE) {
                            echo "New record created successfully <br/><br/>";
                        } else {
                            echo "Error: " . $sql . "<br>" . $mysqli -> connect_error;
                        }	
                        // Define the SQL statement for selecting all data from the 'test' table 
                        $sql = "SELECT * from test";
                                              
                        // Execute sql statement
                        $result = $mysqli->query($sql);
                        // Create the table header
                        echo '<table border="1">';
                        echo '<tr><th>Name</th><th>Email</th><th>Phone number</th></tr>';

                        // Loop through the result set and display the data in table rows
                        while ($row = mysqli_fetch_assoc($result))
                        {
                            echo '<tr>';
                            echo '<td>' . $row['name'] . '</td>';
                            echo '<td>' . $row['email'] . '</td>';
                            echo '<td>' . $row['phone_number'] . '</td>';
                            echo '</tr>';
                        }                    

                        echo '</table>';               
                    ?>
                </div>
            </div>
            <!-- footer -->
            <footer class="footer">
            <p>&copy; 2023 My Website. All rights reserved.</p>
            </footer>
        </div>
    </body>
</html>
