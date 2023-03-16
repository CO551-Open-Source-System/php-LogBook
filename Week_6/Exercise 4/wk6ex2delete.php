<!-- Sudath Nawagamuwage CO551-Open Source System LoogBook 6-->
<?php	
    // Database connection file
    include 'Dbconnection.php';	  
	
    // Check if the form was submitted
    if(isset($_POST['btnupdate'])){
        // Update query
        $id = $_GET['id'];
        $name = $_POST['txtname'];
        $email = $_POST['txtemail'];
        $phone_number = $_POST['txttelno'];
        $sql = "UPDATE test SET name='$name', email='$email', phone_number='$phone_number' WHERE ID='$id'";
        $result = $mysqli->query($sql);
        if($result){
            echo "Record updated successfully!";
        }
        // Redirect back to the list page
        header('location: wk6ex2.php?msg=Record updated successfully');
        exit;
    }
    
    //Update queary
    $sql = "UPDATE test SET 
            name = '{$_POST['txtname']}', 
            email = '{$_POST['txtemail']}', 
            phone_number = '{$_POST['txttelno']}'
        WHERE ID = '{$_GET['id']}'";
    
    // Check if the delete button was clicked
    if(isset($_POST['btndelete'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM test WHERE ID = '$id'";
        $result = $mysqli->query($sql);
        if($result){
            echo "Record deleted successfully!";
        }
        // Redirect back to the list page
        header('location: wk6ex2.php?msg=Record deleted successfully!');
        exit;
    }
   
?>