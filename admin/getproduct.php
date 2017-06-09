<?php
$mysqli = new mysqli("localhost", "root", "", "varchar");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
}

$sql="SELECT * FROM product";
$result = $mysqli->query($sql);

echo "<table id='product' class='table table-bordered table-striped'>
<tr>
<th> ID</th>
<th> Name</th>
<th>Image</th>
<th>Description</th>
<th>Quantity</th>
<th>Action</th>
</tr>";

while($row = $result->fetch_assoc()) {
  echo "<tr>";
   echo "<td>" . $row['product_id'] . "</td>";
  echo "<td>" . $row['product_name'] . "</td>";
  echo "<td>" . $row['product_image'] . "</td>";
  echo "<td>" . $row['product_description'] . "</td>";
  echo "<td>" . $row['Quantity'] . "</td>";
  echo "<td><button type='button' class='btn btn-primary btn-lg' data-toggle='modal' data-target='#update-" . $row['product_id'] . "'>Edit</button></td>";
  echo "</tr>";
?>
<!-- Modal -->
<div class="modal fade" id="update-<?php echo $row['product_id'] ?>" tabindex="-<?php echo $row['product_id'] ?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Data <?php echo $row['product_name'] ?></h4>
      </div>
      <div class="modal-body">
  <form method="POST">
  <div class="form-group">
      <label for="product_id">ID</label>
      <input type="text" class="form-control" id="product_id-<?php echo $row['product_id'] ?>" value="<?php echo $row['product_id'] ?>">
    </div>
    <div class="form-group">
      <label for="product_name">Name</label>
      <input type="text" class="form-control" id="product_name-<?php echo $row['product_id'] ?>" value="<?php echo $row['product_name'] ?>">
    </div>
    <div class="form-group">
      <label for="product_image">Image</label>
      <input type="text" class="form-control" id="product_image-<?php echo $row['product_id'] ?>" value="<?php echo $row['product_image'] ?>">
    </div>
    <div class="form-group">
      <label for="product_description">Description</label>
      <input type="text" class="form-control" id="product_description-<?php echo $row['product_id'] ?>" value="<?php echo $row['product_description'] ?>">
    </div>
    <div class="form-group">
      <label for="Quantity">Quantity</label>
      <input type="text" class="form-control" id="Quantity-<?php echo $row['product_id'] ?>" value="<?php echo $row['Quantity'] ?>">
    </div>

  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" onclick="editData('<?php echo $row['product_id'] ?>')" class="btn btn-primary">Update</button>
      </div>
    </div>
  </div>
</div>
<?php
}
echo "</table>";

//$mysqli->close();
?>
