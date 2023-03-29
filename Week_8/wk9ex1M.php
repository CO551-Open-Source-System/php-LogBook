<!-- Sudath Nawagamuwage CO551-Open Source System LoogBook 8-->
<?php
    // Include header.php
    include 'header.php';
?>
<?php
     $lottodate = date("d m Y");
     echo "The lottery numbers for $lottodate are : ";
     for($n=1;$n<7;$n++){
        $number[$n] = rand(1,49);
        echo "<br/> $number[$n]";
     }
    //   Database connection file
    $conn = mysqli_connect("localhost","sudath","test123","db1_ex8");

     $sql = "insert into lotto (lottodate,number1,number2,";
     $sql = $sql . "number3,number4,number5,number6)";
     $sql = $sql . " values ($lottodate,$number[1],$number[2],";
     $sql = $sql . "$number[3],$number[4],$number[5],$number[6]);";

     $result = mysqli_query($conn, $sql);
     echo "<br/>This weeks numbers have been saved";

     // Close the database connection
    mysqli_close($conn);

?> 
<?php
    // Include footer.php
    include 'footer.php';
?>