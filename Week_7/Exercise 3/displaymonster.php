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
                      $conn = mysqli_connect("localhost","sudath","test123","db2_monster");

                      //Execute the SQL statement 
                      $sql = "select id,name from monster;";

                      // Execute sql statement
                      $result = mysqli_query($conn, $sql);
                      $row = mysqli_fetch_array($result);

                      echo "<img src='getjpg.php?id=" . $row['id']. "'/>";

                      mysqli_close($conn);
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

