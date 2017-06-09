<?php
$gotid = $_GET['id'];
require('../php/connection.php');
// require('session.php');
// confirm_logged_in();

$sql = "DELETE FROM product WHERE product_id=" . $gotid;

        if ($conn->query($sql) === TRUE) {
            ?>
            <script type="text/javascript">
                      alert("Record has been deleted.");
                      window.location = "product.php";
            </script>
            <?php
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

?>