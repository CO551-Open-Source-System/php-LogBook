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
                        } 	
            
                        // Define the SQL statement for selecting all data from the 'test' table 
                        $sql = "SELECT * from test";
                                                
                        // Execute sql statement
                        $result = $mysqli->query($sql);
                        while ($row = mysqli_fetch_assoc($result))
                        {
                            echo "$row[name]  $row[email]  $row[phone_number] <br/>";
                        }   
                        header('location: wk6ex2.php?msg=Record updated successfully')
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
