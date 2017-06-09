<?php
include('../php/connection.php');

if(isset($_POST['orderupdate']))
{
$selectstatus = $_POST['orderstatus'];
$order_id = $_POST['order_id'];
$up_prod=("UPDATE _order SET status='$selectstatus' where order_id='$order_id' ");
 $conn->query($order_d);
header("location:dashboard.php?id=".$order_d."");
}
else if(isset($_POST['delete']))
{

$del_id=$_POST['product_id'];
$del_emp=("delete from product where product_id='$del_id' ");
$conn->query($del_emp);
 header('location:product.php');
}
else { echo "";}



?>
