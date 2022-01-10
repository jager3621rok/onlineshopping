<?php
require_once 'connectDB.php';

if (isset($_GET['id'])) {
        $id = $_GET['id'];
        
        $sql = "DELETE from product where proId = $id";
        
        if (mysqli_query($conn, $sql)) {
            header("Location:select_products.php");
            
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            exit;
        }
        
        
    }

mysqli_close($conn);
?>