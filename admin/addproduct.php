<?php
include "../php/connection.php";

if(isset($_POST['addproduct']))
{
$pn = $_POST['prodname'];
$pi = $_POST['prodimage'];
$pd = $_POST['proddescription'];
$pq = $_POST['prodquantity'];

$que=$conn->query("select * from product where product_name = '$pn' and product_image = '$pi' ");
$result=$que->fetch_array(MYSQLI_ASSOC);
$row=$que->num_rows;

 if ($row == 0)
 {
 $prodquery=(" insert into product(product_name,product_image,product_description,Quantity)
     values('$pn','$pi','$pd',$pq)");
    $conn->query($prodquery);
    header("location:product.php");
}
 else
 {
 header("location:product.php");
 }
}
else { echo "";}
?>
