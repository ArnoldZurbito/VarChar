<?php
$gotid = $_GET['ids'];
require('../php/connection.php');
// require('session.php');
// confirm_logged_in();

$sql = "DELETE FROM _order WHERE order_id=" . $gotid;

        if ($conn->query($sql) === TRUE) {
            ?>
            <script type="text/javascript">
                      alert("Record has been deleted.");
                      window.location = "dashboard.php";
            </script>
            <?php
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

?>