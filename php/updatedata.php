<?php
include "../php/connection.php";

if(isSet($_GET['id'])){
    $squery =$conn->prepare("update product set product_name=?, product_description=?,Quantity=? where product_id=?");
    $squery->bind_param('$$$$',$nm,gd,$pn,$al);
    $nm=$_POST['product_name'];
    $nm=$_POST['product_description'];
    $nm=$_POST['Quantity'];
    $nm=$_POST['product_image'];
    $id=$_GET['product_id'];


    if(squery)

}
?>