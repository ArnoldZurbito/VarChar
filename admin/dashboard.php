<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Varchar | Dashboard</title>
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="../bootstrap/css/dataTables.bootstrap.min.css">
    <link rel="shortcut icon" href="../img/logo.png">
    <link rel="stylesheet" href="../bootstrap/css/font-awesome.min.css">
</head>

<body>


 <div id="wrapper">

   <header>
        <nav class="navbar navbar-fixed-top navbar-inverse" >
          <div class="container">

            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
    <a href="" class="navbar-brand"><span class="vtext">V</span ><span class="archartext">AR<span  class="ctext">C</span>HAR</span></a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="glyphicon glyphicon-envelope icon-animated-vertical"></i>
                            <span class="label label-warning notification-number">1</span>
                        </a>
                     <ul class="dropdown-menu">
                                          <li class="header">You have 1 messages</li>
                                            <li>
                                              <ul class="menu">
                                                <li><!-- start message -->
                                                <a href="#">
                                                  <div class="pull-left">
                                                   <img src="../img/admin.png" class="img-circle" alt="User Image">
                                                  </div>
                                                  <h4>
                                                  Chen Sementela
                                                     <small><i class=" glyphicon glyphicon-time"></i> 5 mins</small>
                                                  </h4>
                                                  <!-- The message -->
                                                  <p>Hi...</p>
                                                </a>
                                                </li><!-- end message -->
                                              </ul><!-- /.menu -->
                                            </li>
                                          <li class="footer"><a href="#">See All Messages</a></li>
                     </ul>
                  </li>

                    <li class="dropdown notifications-menu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o fa-sm  icon-animated-bell"></i>
                        <span class="label label-warning">2</span>
                      </a>
                        <ul class="dropdown-menu">
                          <li class="header">You have 2 notifications</li>
                            <li>
                              <!-- Inner Menu: contains the notifications -->
                              <ul class="menu">
                                <li><!-- start notification -->
                                  <a href="#">
                                  <i class="glyphicon glyphicon-user text-success"></i> 2 new members are joined today
                                  </a>
                                </li><!-- end notification -->
                              </ul>
                            </li>
                          <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li>
                  <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="../img/admin.png" class="img-circle user-image" alt="User Image"> <span class="hidden-xs"> Arnold Zurbito</span></a>
                    <ul class="dropdown-menu">
                      <!-- User image -->
                      <li class="user-header">
                        <img src="../img/admin.png" class="img-circle" alt="User Image">
                        <p>
                          Arnold Zurbito - Administrator
                          <small>Varchar Corporation</small>
                        </p>
                      </li>
                      <!-- Menu Body -->
                      <li class="user-body">
                        <div class="col-xs-4 text-center">
                          <a href="#">Top 10 Products</a>
                        </div>
                        <div class="col-xs-4 text-center">
                          <a href="#">Sales</a>
                        </div>
                        <div class="col-xs-4 text-center">
                          <a href="#">Logs</a>
                        </div>
                      </li>
                      <!-- Menu Footer-->
                      <li class="user-footer">
                        <div class="pull-left">
                          <a href="#" class="btn btn-warning btn-flat">Profile</a>
                        </div>
                        <div class="pull-right">
                          <a href="#" class="btn btn-warning btn-flat">Sign out</a>
                        </div>
                      </li>
                    </ul>
                  </li>
               </ul>
            </div>

          </div>
        </nav>
  </header>
        <!-- Sidebar -->
        <!-- Sidebar -->
        <div id="sidebar-wrapper">


            <ul class="sidebar-nav treeview-menu">
                  <div class="user-panel">
                      <div class="pull-left image">
                         <img src="../img/admin.png" class="img-circle" alt="User Image">
                      </div>
                      <div class="pull-left info">
                         <p>Arnold Zurbito</p>
                      <!-- Status -->
                         <a href="#"><i class="glyphicon glyphicon-record text-success"></i> Online</a>
                      </div>
                  </div>
                    <form action="#" method="get" class="sidebar-form">
                      <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="glyphicon glyphicon-search"></i></button>
                        </span>
                      </div>
                    </form>
                <li class="hom text-left">
                    <div href="#" class="hom">
                        HOME
                    </div>
                </li>
                <li class="activate">
                  <div>
                      <a  href="dashboard.php" ><i class="  glyphicon glyphicon-dashboard"></i> Dashboard</a>

                 </div>
                </li>
                <li>
                  <div >
                      <a href="product.php"><i class="glyphicon glyphicon-briefcase"></i>  Products</a>
                 </div>
                </li>
                <li>
                     <div class="panel-headi ">
                            <a  class="accordion-toggle text-left " data-toggle="collapse" data-parent="#accordion" href="#account"><i class="glyphicon glyphicon-user"></i> User Account  <i class="glyphicon glyphicon-chevron-right icon-arrow-right "> </i>
                            </a>
                     </div>
                  <ul >
                    <div id="account" class="panel-collapse collapse  text-center">
                      <li > <a href="customer.php"><i class=" glyphicon glyphicon-cutlery"></i>  Customer</a> </li>
                      <li ><a href="admin.php"> <i class=" glyphicon glyphicon-king"></i> Admin</a> </li>
                    </div>
                  </ul>
                </li>
                <li>
                      <div class="panel-headi">
                            <a  class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#message" ><i class="glyphicon glyphicon-envelope"></i>  Messages <i class="glyphicon glyphicon-chevron-right icon-arrow-right"> </i>
                            </a>
                      </div>
                    <ul >
                      <div id="message" class="panel-collapse collapse text-center ">
                        <li><a href="inbox.php">  <i class="  glyphicon glyphicon-inbox"></i>Inbox</a> </li>
                        <li><a href="sentitems.php"> <i class="    glyphicon glyphicon-send"></i>  Sent Items </a></li>
                        <li><a href="drafts.php"> <i class="   glyphicon glyphicon-floppy-save"></i>Drafts </a></li>
                        <li><a href="trash"> <i class="   glyphicon glyphicon glyphicon-floppy-remove"></i> Trash </a></li>
                      </div>
                    </ul>
                </li>
            </ul>

        </div>
        <!-- /#sidebar-wrapper -->

<!-- -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                      <div class="database">
                      <a href="#menu-toggle"  id="menu-toggle"><span class="fa fa-align-justify fa-2x" ></span></a>
              <section class="content-header">
                <h3>
                Dashboard
                </h3>
                <ol class="breadcrumb">
                  <li><a href=""><i class="glyphicon glyphicon-home"></i> Home</a></li>
                   <li><i class="  glyphicon glyphicon-dashboard"></i>Dashboard</li>
                </ol>
              </section>


    <section class="content">
        <div class="row">
          <div class="col-xs-12">


                <div class="box-body">
                    <table id="dashboard" class="table table-bordered table-hover responsive-utilities jambo_table bulk_action">
                      <thead>
                          <tr class="headings">
                            <th class="column-title">Name </th>
                            <th class="column-title">Email Address</th>
                            <th class="column-title">Address</th>
                            <th class="column-title">Contact</th>
                            <th>Order Quantity</th>
                            <th>Delivery Address</th>
                            <th>Confirmation</th>
                            <th>Order Time</th>
                            <th>Time Deliver</th>
                            <th>Status</th>
                            <th>Payment</th>
                            <th>Total</th>
                            <th>Action</th>
                                   <!--    <th class="bulk-actions" colspan="7">
                                                    <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                            </th> -->
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                            <th>Name </th>
                            <th>Email Address</th>
                            <th>Address</th>
                            <th>Contact</th>
                            <th>Order Quantity</th>
                            <th>Delivery Address</th>
                            <th>Confirmation</th>
                            <th>Order Time</th>
                            <th>Time Deliver</th>
                            <th>Status</th>
                            <th>Payment</th>
                            <th>Total</th>
                            <th>Action</th>
                          </tr>
                        </tfoot>
                        <tbody>

                      <?php
                        include('../php/connection.php');

                          $res = $conn->query("SELECT customer.Cus_Lname,Cus_Fname,Cus_Mname, Contact,Street,Municipality,City,Contact,
                            user_account.Email,_order.order_id,address_deliver,confirmation,order_quantity,status,payment_method,payable,time_order,time_deliver
                            from customer INNER JOIN
                            user_account ON customer.User_ID=user_account.User_ID Inner JOIN _order ON customer.Cus_ID=_order.Cus_ID ORDER BY Customer.Cus_Lname ASC");
                                while($row = $res->fetch_assoc()){
                                  ?>
                                      <tr>
                                          <td><?php echo $row['Cus_Lname'],', ',$row['Cus_Fname'],' ',$row['Cus_Mname'],'.'; ?></td>
                                          <td><?php echo $row['Email']; ?></td>
                                          <td><?php echo $row['Street'],' St., ',$row['Municipality'],$row['City'],' City'; ?></td>
                                          <td><?php echo $row['Contact']; ?></td>
                                          <td><?php echo $row['order_quantity']; ?></td>
                                          <td><?php echo $row['address_deliver']; ?></td>
                                          <td><?php echo $row['confirmation']; ?></td>
                                          <td><?php echo $row['time_order']; ?></td>
                                          <td><?php echo $row['time_deliver']; ?></td>
                                          <td>
                      <?php
                      // $stats=$row['status'];
                      if ($row['status'] == 'Pending')
                      {
                            // <!--         echo '<td> <span class="label label-warning">'.$row['status'].'</span></td>'; -->
                      echo '<span class="label label-warning">Pending</span>';
                      }
                      else if ($row['status'] == 'Delivered'){
                        echo '<span class="label label-success">Delivered</span>';
                      }
                      else{
                        echo "";
                      }
                        ?>
                      </td>
                                          <td><?php echo $row['payment_method']; ?></td>
                                          <td><?php echo $row['payable']; ?></td>
                                          <td>
                                          <button class="btn  btn-warning btn-sm" type="button" data-toggle="modal" data-target="#updated<?php echo $row['order_id'];?>">
            <i class="fa fa-pencil"></i>
            Edit
            </button>
            <a class="btn btn-info btn-sm" onclick="return confirm('Are you sure you want to delete?There is no undo !')" href="deleteorder.php?ids=<?php echo $row['order_id'] ?>"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
            </td>
                                      </tr>

<div class="modal fade"id="updated<?php echo $row['order_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="editorder.php" method="POST">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Product <?php echo $row['Cus_Fname'] ?></h4>
      </div>
      <div class="modal-body">
 <div class="row">
    <div class="col-sm-12">
      <div class="form-group">
          <input type="hidden" class="form-control" name="prod_id" value="<?php echo $row['order_id'] ?>">
      </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group col-sm-2">
              <label for="product_name" >Name</label>
        </div>
          <div class="col-sm-10">
          <select value="<?php echo $row['status'] ?>" name="updateproducts" class=" form-control">
            <option value="">Pending</option>
            <option value="">Delivered</option>
          </select>
<!--              <input type="text" class="form-control" name="prod_name" value="<?php //echo $row['order_id'] ?>"><br> -->
          </div>
      </div>

      </div>
      </div>
      <div class="modal-footer">
     <button type="submit" name="updateproduct" class="btn btn-primary">Update</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </form>
  </div>
</div>
                                  <?php
                                }
                                ?>
                        </tbody>
                      </table>
                </div><!-- /.box-body -->
          </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
    </div>
                      <footer class="main-footer">
                              <div class="pull-right hidden-xs">
                                  Legazpi City
                              </div>
                               <strong>Copyright &copy; 2016 <a href="#">Varchar</a>.</strong> All rights reserved.
                      </footer>
                     </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->


  <!-- jQuery 2.1.4 -->
    <script src="../bootstrap/js/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../bootstrap/js/jquery.dataTables.min.js"></script>
    <script src="../bootstrap/js/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../plugins/fastclick/fastclick.min.js"></script>

    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
    <script type="text/javascript" class="init">
    $(document).ready(function() {
      $('#dashboard').DataTable();
    } );
  </script>
  <script>
  /** ******  /star rating  *********************** **/
/** ******  table  *********************** **/
$('table input').on('ifChecked', function () {
    check_state = '';
    $(this).parent().parent().parent().addClass('selected');
    countChecked();
});
$('table input').on('ifUnchecked', function () {
    check_state = '';
    $(this).parent().parent().parent().removeClass('selected');
    countChecked();
});

var check_state = '';
$('.bulk_action input').on('ifChecked', function () {
    check_state = '';
    $(this).parent().parent().parent().addClass('selected');
    countChecked();
});
$('.bulk_action input').on('ifUnchecked', function () {
    check_state = '';
    $(this).parent().parent().parent().removeClass('selected');
    countChecked();
});
$('.bulk_action input#check-all').on('ifChecked', function () {
    check_state = 'check_all';
    countChecked();
});
$('.bulk_action input#check-all').on('ifUnchecked', function () {
    check_state = 'uncheck_all';
    countChecked();
});




function countChecked() {
        if (check_state == 'check_all') {
            $(".bulk_action input[name='table_records']").iCheck('check');
        }
        if (check_state == 'uncheck_all') {
            $(".bulk_action input[name='table_records']").iCheck('uncheck');
        }
        var n = $(".bulk_action input[name='table_records']:checked").length;
        if (n > 0) {
            $('.column-title').hide();
            $('.bulk-actions').show();
            $('.action-cnt').html(n + ' Records Selected');
        } else {
            $('.column-title').show();
            $('.bulk-actions').hide();
        }
    }
  </script>
</body>

</html>
