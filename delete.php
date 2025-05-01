<?php
include 'connect.php';
if(isset($_GET['delete'])){
    $delete_id=$_GET['delete'];
    $delete_query=mysqli_query($conn,"DELETE FROM 'market' WHERE id=$delete_id") or die('isert query');
    if($delete_query){
        echo "product is delete";
        header('location:product.php');
    }else{
        echo "product is not delete";
        header('location:product.php');
    }
}
?>