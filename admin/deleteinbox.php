
<?php
session_start();
include_once('../php/connection.php');
if(isset($_POST['delete_submit'])){
    $idArr = $_POST['checked_id'];
    foreach($idArr as $inbox_id){
        mysqli_query($conn,"DELETE FROM inbox WHERE inbox_id=".$inbox_id);
    }
    // $_SESSION['success_msg'] = 'Delete Successful';
    header("Location:inbox.php");
}
?>