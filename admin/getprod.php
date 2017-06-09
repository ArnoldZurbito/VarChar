<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="../bootstrap/css/dataTables.bootstrap.min.css">

</head>

<body>

<?php
// $q = $_GET['q'];
// //echo $q;

$conn = mysqli_connect('localhost','root','','varchar');
if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}

mysqli_select_db($conn,"varchar");
$sql="SELECT * FROM product  ";
$result = mysqli_query($conn,$sql);



echo "<table id='product'  class='table table-striped table-bordered' cellspacing='0' width='100%'>
<tr>
<th>Pt Lum</th>
<th>Matériel</th>
<th>Prestation</th>
<th>Date</th>

</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tbody>";
    echo "<tr>";
    echo "<td>" . $row['product_id'] . "</td>";
    echo "<td>" . $row['product_name'] . "</td>";
    echo "<td>" . $row['product_description'] . "</td>";
    echo "<td>" . $row['Quantity'] . "</td>";
    echo "</tr>";
    echo "</tbody>";

}
echo "</table>";



mysqli_close($conn);

?>
    <script src="../bootstrap/js/jQuery-2.1.4.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/jquery.dataTables.min.js"></script>
    <script src="../bootstrap/js/dataTables.bootstrap.min.js"></script>
    <script src="../bootstrap/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="../bootstrap/plugins/fastclick/fastclick.min.js"></script>



<script>

    <script type="text/javascript" class="init">
    $(document).ready(function() {
      $('#product').DataTable();
    } );
    </script>

</body>



</html>