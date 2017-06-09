<?php

    session_start();
    $con = mysqli_connect('localhost', 'root', '', 'varchar');

    if (isSet($_POST['regusersubmit']) && isSet($_POST['regemail']) && isSet($_POST['regpassword']) && $_POST['regemail'] != '' && $_POST['regpassword'] != '') {

        $regemail = $_POST['regemail'];
        $regpassword = md5($_POST['regpassword']);

        $result = mysqli_query($con, "SELECT * FROM `user_account` WHERE `Email`='$regemail'");
        if (mysqli_num_rows($result) > 0) {
        session_write_close();
        header("location: ../html/product.html");
        exit();
              // or echo 'That username is already taken.';
        }else{
            $qq = mysqli_query($con, "INSERT INTO `user_account` VALUES (NULL, '$regemail', '$regpassword', 'CUSTOMER')");
            if ($qq) {
                 session_write_close();
        header("location: ../html/product.html");
        exit();
            }else
                    session_write_close();
        header("location: ../html/product.html");
        exit();
        }
    }
?>

<?php
// session_start();
// require_once('connection.php');
// Prevents SQL injection
// function clean($str) {
// $str = @trim($str);
// if(get_magic_quotes_gpc()) {
// $str = stripslashes($str);
// }
// return mysql_real_escape_string($str);
// }

// $regemail = $_POST['regemail'];
// $regpassword = Sha1($_POST['regpassword']);
// $sql = "SELECT * FROM user_account where Email='".$regemail."'";
// $result = mysqli_query($sql);
// if(mysqli_num_rows($result) > 0)
//      {
//         session_write_close();
//         header("location: ../html/product.html");
//         exit();
//     }
// else
//      {
//             $sql2 = "INSERT INTO `user_account` (User_ID,Email,Password,Account_Type) VALUES (NULL,'$regemail', '$regpassword', 'CUSTOMER')";
//             $result2 = mysqli_query($sql2);
//             session_write_close();
//             header("location: ../html/product.html");
//             exit();
//      }
?>
