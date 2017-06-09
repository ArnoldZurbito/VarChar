<?php
include('../php/connection.php');

if(isset($_POST['updateproduct']))
{

$prod_name = $_POST['prod_name'];
$prod_image = $_POST['prod_image'];
$prod_description = $_POST['prod_description'];
$prod_quantity = $_POST['prod_quantity'];
$prod_id = $_POST['prod_id'];

$up_prod=("
UPDATE product SET product_name='$prod_name', product_image='$prod_image', product_description='$prod_description', Quantity='$prod_quantity' where product_id='$prod_id' ");

 $conn->query($up_prod);
header("location:product.php?id=".$product_id."");
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
