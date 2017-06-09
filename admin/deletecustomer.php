
<?php
session_start();
include_once('../php/connection.php');
if(isset($_POST['delete_submit'])){
    $idArr = $_POST['checked_id'];
    foreach($idArr as $cus_id){
        mysqli_query($conn,"DELETE FROM customer WHERE Cus_ID=".$cus_id);
    }
    // $_SESSION['success_msg'] = 'Delete Successful';
    header("Location:customer.php");
}
?>