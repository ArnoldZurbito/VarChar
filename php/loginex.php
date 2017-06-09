<?php require('session.php');?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
</head>
<body>

  <?php
if (logged_in()) {
?>
  <script type="text/javascript">
           window.location = "product.php";
   </script>
   <?php
}
?>

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Login your account</h4>
      </div>
          <div class="modal-body">
                 <div class="form-group">
                  <label for="inputEmail" class="control-label col-xs-2">Email</label>
                    <div class="controls col-xs-10">
                       <input type="email" class="form-control" name="loginemail" data-error="That's Email address is invalid" required>
                    </div>
                 </div>

                  <div class="form-group">
                     <label for="inputPassword" class="control-label col-xs-2">Password</label>
                       <div class="controls col-xs-10">
                          <input type="password" class="form-control" name="loginpassword" required>
                       </div>
                  </div>
                    <div class="form-group">
                        <div class="col-xs-offset-2 col-xs-10">
                            <div class="checkbox">
                                <label><input type="checkbox"> Remember me</label>
                            </div>
                        </div>
                    </div>
            </div>
          </div>
          <div class="modal-footer">
                <div class="col-sm-9 text-left">
                  <p>Don't have an account? <a data-target="#register" data-toggle="modal" data-dismiss="modal">click here</a></p>
                </div>
                <input type="submit" class="controls btn btn-warning" value="Login" name="btnlogin">
     <!--            <button type="submit" class="controls btn btn-primary">Login</button> -->
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>

          </div>

<script src="bootstrap/js/jqBootstrapValidation.js"></script>
<script>
  $(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
</script>
</body>
</html>