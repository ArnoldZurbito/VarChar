<?php

require('connection.php');
require('session.php');
if (isset($_POST['btnlogin'])) {


$loginemail = trim($_POST['loginemail']);
$loginpassword =trim($_POST['loginpassword']);

//create some sql statement
        $sql_query1 = "SELECT * FROM user_account WHERE Email='".$loginemail."' AND Password='".$loginpassword."' AND User_Type = 'MANAGER'" ;
        $result1 = $conn->query($sql_query1);

        $sql_query2 = "SELECT * FROM user_account WHERE Email='".$loginemail."' AND Password='".$loginpassword."' AND User_Type = 'CUSTOMER'" ;
        $result2 = $conn->query($sql_query2);

        if ($result1){
        //get the number of results based in the sql statement
        //check the number of result, if equal to one
        //IF theres a result
            if ( $result1->num_rows > 0) {
                //store the result to an array and passed to variable found_user
                $found_user  = mysqli_fetch_array($result);
                //fill the result to session variable
                $_SESSION['MEMBER_ID']  = $found_user['User_ID'];
                $_SESSION['Email'] = $found_user['Email'];
             ?>    <script type="text/javascript">
                      //then it will be redirected to index.php
					  alert("Welcome <?php echo $found_user['Email']; ?>");
                      window.location = "product.php";
                  </script>
             <?php
            } else {
            //IF theres no result
              ?>    <script type="text/javascript">
                alert("Username or Password Not Registered!");
                window.location = "../html/product.html";
                </script>
        <?php

            }

         } elseif($result2) {
                 # code...
              if ( $result1->num_rows > 0) {
                //store the result to an array and passed to variable found_user
                $found_user  = mysqli_fetch_array($result);
                //fill the result to session variable
                $_SESSION['MEMBER_ID']  = $found_user['User_ID'];
                $_SESSION['Email'] = $found_user['Email'];
             ?>    <script type="text/javascript">
                      //then it will be redirected to index.php
            alert("Welcome <?php echo $found_user['Email']; ?>");
                      window.location = "product.php";
                  </script>
             <?php
            } else {
            //IF theres no result
              ?>    <script type="text/javascript">
                alert("Username or Password Not Registered!");
                window.location = "../html/product.html";
                </script>
        <?php

            }
        }
        else{
               echo "Error: " . $sql_query1 . "<br>" . $conn->error;
        }


}
 $conn->close();
?>

<!--
// session_start();
// require_once('connection.php');
 // Prevents SQL injection
// function clean($str) {
// $str = @trim($str);
// if(get_magic_quotes_gpc()) {
// $str = stripslashes($str);
// }
// return mysqli_real_escape_string($str);
// }

if (isset($_POST['btnlogin'])) {

$loginemail = trim($_POST['loginemail']);
$loginpassword =trim($_POST['loginpassword']);

$qry="SELECT * FROM user_account WHERE Email='".$loginemail."' AND Password='".$loginpassword."'";
$result =$conn->query($qry);

if($result)
{
	if($result->num_rows > 0)
								{
									session_regenerate_id();
									$found_user = mysqli_fetch_array($result);
									$_SESSION['SESS_MEMBER_ID'] = $found_user['User_ID'];
									$_SESSION['SESS_EMAIL'] = $found_user['Email'];
									$_SESSION['SESS_PASSWORD'] = $found_user['Password'];
									$_SESSION['SESS_ACCOUNT_TYPE'] = $found_user['Account_Type'];
									session_write_close();
									header("location: ../returnpol.php");
									exit();
								}
									else
									 {
											session_write_close();
											header("location: ../product.html");
											exit();
									  }
}
}
?>
 -->