<?php
session_start();

// 2. Unset all the session variables
unset($_SESSION['MEMBER_ID']);
unset($_SESSION['Email']);
?>
<script type="text/javascript">
    alert("Successfully Logout !");
    window.location = "../product.html";
</script>