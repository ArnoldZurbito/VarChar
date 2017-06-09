<?php
session_start();
include_once('../php/connection.php');
if(isset($_POST['delete_submit'])){
    $idArr = $_POST['checked_id'];
    foreach($idArr as $prod_id){
        mysqli_query($conn,"DELETE FROM product WHERE product_id=".$prod_id);
    }
    // $_SESSION['success_msg'] = 'Delete Successful';
    header("Location:product.php");
}
?>