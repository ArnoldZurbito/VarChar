

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Varchar | Products</title>

    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<?php
    include('../php/connection.php');

    $id = $_POST['bitbit'];


//               $id=$_POST['prod_id'];
//               $prodname = $_POST['prod_name'];
//               $prodimage =$_POST['prod_image'];
//               $proddesc = $_POST['prod_desc'];
//               $quantity = $_POST['quant'];
//               if(isset($_POST['submit'])){
//   $res2 = $mysqli->query("update product set product_name='$prodname', product_image='$location', product_description='$proddesc', Quantity='$quantity' where product_id='$id'");
//   if($res2){
//     // echo "Success Update Data";
//   } else{
//     // echo "Fail Update Data";
//   }
// } else{
//   // echo "Error Update Data";
// }
// // load

$que=$conn->query("SELECT * FROM `product` WHERE `product_id` = '$id'");
$mem=$que->fetch_array(MYSQLI_ASSOC);


// $sql = "SELECT * FROM `product` WHERE `product_id` = '$id'";
// $result=mysqli_query($conn,$sql);
// $mem=mysqli_fetch_assoc($result);
?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" class="form-horizontal"   role="form">
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <div class="col-sm-10">
                      <input type="hidden"  name="prod_id"  value="<?php echo $mem['product_id'];?>" readonly="true" class="form-control"/>
                  </div>
                </div>
              </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="name" class=" col-sm-2">Name</label>
                       <div class="col-sm-10">
                          <input type="text"  name="prod_name"  value="<?php echo $mem['product_name'];?>" class="form-control" >
                      </div>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="description" class=" col-sm-2">Image</label>
                    <div class="input-group col-sm-10">
                      <span class="input-group-btn">
                       <button class="browse btn btn-primary input-md form-control" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                      </span>
                      <input type="text"  value="<?php echo $mem['product_image'];?>" class="form-control input-md" disabled >
                      <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                    </div>
                    <input type="file" name="image" class="file form-control">
                  </div>
                 </div>

                <div class="col-sm-12">
                  <div class="form-group">
                      <div class="col-sm-4">
                      </div>
                    <div class="col-sm-8">
                       <?php echo '<img src="../img/products/mouse/' .$mem['product_image'].'"  alt="products"  class="img-thumbnail" width="250" height="250">';?>
                    </div>
                  </div>
                </div>

                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="description" class=" col-sm-2">Description</label>
                        <div class="col-sm-10">
                          <textarea  name="prod_desc" value="" class="form-control"  cols="5" rows="5" ><?php echo $mem['product_description'];?></textarea>
                        </div>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="quantity" class=" col-sm-2">Quantity</label>
                        <div class="col-sm-10">
                          <input type="text"  name="quant" value="<?php echo $mem['Quantity'];?>" class="form-control" />
                        </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="modal-footer">
              <input type="submit" class="btn btn-primary" name="submit" value="Update" />&nbsp;
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </form>

<script src="../bootstrap/js/validator.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
<script>
  $(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
</script>
<script>
 $(document).on('click', '.browse', function(){
  var file = $(this).parent().parent().parent().find('.file');
  file.trigger('click');
});
$(document).on('change', '.file', function(){
  $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
});
</script>
</body>
</html>
