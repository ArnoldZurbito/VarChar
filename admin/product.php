<?php
include "../php/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1">
    <title>Varchar | Products</title>
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
                             <i class="fa fa-envelope-o fa-sm icon-animated-vertical"></i>
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
                        <i class="fa fa-bell-o fa-sm icon-animated-bell"></i>
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
                         <a href="#"><i class="fa fa-dot-circle-o text-success"></i> Online</a>
                      </div>
                  </div>
                    <form action="#" method="get" class="sidebar-form">
                      <div class="input-group">
                        <input type="search" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn btn-outline"><i class="glyphicon glyphicon-search"></i></button>
                        </span>
                      </div>
                    </form>
                <li class="hom text-left">
                    <div href="#" class="hom">
                        HOME
                    </div>
                </li>
                <li>
                  <div>
                      <a  href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a>

                 </div>
                </li>
                <li class="activate">
                  <div >
                      <a href="product.php"><i class="fa fa-briefcase"></i> Products</a>
                 </div>
                </li>
                <li>
                     <div class="panel-headi ">
                            <a  class="accordion-toggle text-left " data-toggle="collapse" data-parent="#accordion" href="#account"><i class="fa fa-user"></i> User Account  <i class="fa fa-chevron-right icon-arrow-right "> </i>
                            </a>
                     </div>
                  <ul >
                    <div id="account" class="panel-collapse collapse  text-center">
                      <li > <a href="customer.php "><i class="fa fa-users"></i> Customer</a> </li>
                      <li ><a href="admin.php "> <i class=" glyphicon glyphicon-king"></i> Admin</a> </li>
                    </div>
                  </ul>
                </li>
                <li>
                      <div class="panel-headi">
                            <a  class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#message" ><i class="fa fa-envelope icon-4x"></i>  Messages <i class="fa fa-chevron-right icon-arrow-right"> </i>
                            </a>
                      </div>
                    <ul >
                      <div id="message" class="panel-collapse collapse text-center ">
                        <li><a href="inbox.php">  <i class="fa fa-inbox"></i>Inbox</a> </li>
                        <li><a href="sentitems.php"> <i class="fa fa-send"></i>  Sent Items </a></li>
                        <li><a href="drafts.php"> <i class="   glyphicon glyphicon-floppy-save"></i>Drafts </a></li>
                        <li><a href="trash"> <i class="fa fa-trash"></i> Trash </a></li>
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
                Products
                </h3>
                <ol class="breadcrumb">
                  <li><a href=""><i class="glyphicon glyphicon-home"></i> Home</a></li>
                   <li><i class="glyphicon glyphicon-briefcase"></i>Products</li>
                </ol>
              </section>


    <section class="content">
        <div class="row">
          <div class="col-xs-12">


                <div class="box-body">

<p>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addData">
  <span class="fa fa-plus" aria-hidden="true"></span> Add Data
      </button></br>
</p>

<table id="product" class="display table table-bordered table-stripe" cellspacing="0" width="100%">
<thead>
     <tr>
          <th>Name</th>
          <th>Images</th>
          <th>Description</th>
          <th>Quantity</th>
          <th>Action</th>
     </tr>
</thead>
<tfoot>
     <tr>
          <th>Name</th>
          <th>Images</th>
          <th>Description</th>
          <th>Quantity</th>
          <th>Action</th>
     </tr>
</tfoot>
<tbody>
<?php
$res = $conn->query("SELECT * FROM product Order by product_name ASC");
          while($row = $res->fetch_assoc()){
?>

     <tr>
          <td><?php echo $row['product_name'] ?></td>
         <td class="text-center"><img src="../img/products/mouse/<?php echo $row['product_image']; ?>" alt="products"  class="img-thumbnail" width="100" height="50" /></td>
          <td><?php echo $row['product_description'] ?></td>
          <td><?php echo $row['Quantity'] ?></td>

          <td class="text-center">
            <button class="btn  btn-warning btn-sm" data-toggle="modal" data-target="#updated<?php echo $row['product_id'];?>">
            <i class="fa fa-pencil"></i>
            Edit
            </button>
            <a class="btn btn-info btn-sm" onclick="return confirm('Are you sure you want to delete?There is no undo !')" href="deleteproduct.php?id=<?php echo $row['product_id'] ?>"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
          </td>
     </tr>

<div class="modal fade"id="updated<?php echo $row['product_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="editproduct.php" method="POST">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Product <?php echo $row['product_name'] ?></h4>
      </div>
      <div class="modal-body">
 <div class="row">
    <div class="col-sm-12">
      <div class="form-group">
          <input type="hidden" class="form-control" name="prod_id" value="<?php echo $row['product_id'] ?>">
      </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group col-sm-2">
              <label for="product_name" >Name</label>
        </div>
          <div class="col-sm-10">
             <input type="text" class="form-control" name="prod_name" value="<?php echo $row['product_name'] ?>"><br>
          </div>
      </div>


<div class="col-sm-12">
    <div class="form-group">
      <div class="col-sm-2">
        <label for="product_image">Image</label>
      </div>
          <div class="input-group col-sm-10">
              <span class="input-group-btn">
                  <button class="browse btn btn-primary input-md form-control" type="button"><i class="fa fa-search"></i> Browse</button>
              </span>
              <input type="text" class="form-control" name="prod_image" value="<?php echo $row['product_image'] ?>"  disabled>
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
        <?php echo '<img src="../img/products/mouse/' .$row['product_image'].'"  alt="products"  class="img-thumbnail" width="250" height="250"></br>';?>
    </div>
  </div>
</div>

<div class="col-sm-12">
    <div class="form-group">
    <div class="col-sm-2">
      <label for="product_description">Description</label>
      </div>
      <div class=" col-sm-10">
     <br><textarea  name="prod_description"  class="form-control"  cols="5" rows="5" ><?php echo $row['product_description'];?></textarea><br>
    </div>
    </div>
</div>

    <div class="col-sm-12">
      <div class="form-group">
        <div class="col-sm-2">
           <label for="Quantity">Quantity</label>
        </div>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="prod_quantity" value="<?php echo $row['Quantity'] ?>">
        </div>
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

            </div><!-- /.content-wrapper -->

            <!-- Main Footer -->
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


<!--   <div class="modal fade in" id="deleteproduct" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="memberModalLabel">Delete Product</h4>
                </div>
                <div class="laman">

                </div>

            </div>
        </div>
    </div>
 -->

    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>




    // <script>
    // $('#editproduct').on('show.bs.modal', function (event) {
    //       var button = $(event.relatedTarget)
    //       var recipient = button.data('whatever')
    //       var modal = $(this);
    //       var dataString = 'bitbit=' + recipient;

    //         $.ajax({
    //             type: "POST",
    //             url: "editproducts.php",
    //             data: dataString,
    //             cache: false,
    //             success: function (data) {
    //                 console.log(data);
    //                 modal.find('.laog').html(data);
    //             },
    //             error: function(err) {
    //                 console.log(err);
    //             }
    //         });
    // })
    // </script>

    <script src="../bootstrap/js/jQuery-2.1.4.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/jquery.dataTables.min.js"></script>
    <script src="../bootstrap/js/dataTables.bootstrap.min.js"></script>
    <script src="../bootstrap/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="../bootstrap/plugins/fastclick/fastclick.min.js"></script>

    <script type="text/javascript" charset="utf-8">
     $(document).ready(function() {
       $('#product').dataTable();
     });
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

 $(document).on('click', '.browse', function(){
  var file = $(this).parent().parent().parent().find('.file');
  file.trigger('click');
});
$(document).on('change', '.file', function(){
  $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
});

</script>


<div class="modal fade" id="addData" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
  <div class="modal-content">

    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel">New Product</h4>
    </div>
  <form action="addproduct.php" method="POST" >
    <div class="modal-body" style="overflow:hidden">
        <div class="form-group">
    <label for="fn">Product Name</label>
    <input type="text" class="form-control" name="prodname">
        </div>
        <div class="form-group">
    <label for="ln">Image</label>
    <input type="text" class="form-control" name="prodimage">
        </div>
        <div class="form-group">
    <label for="age">Description</label>
    <input type="text" class="form-control" name="proddescription">
        </div>
        <div class="form-group">
    <label for="ht">Quantity</label>
    <input type="number" class="form-control" name="prodquantity">
        </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <button type="submit" name="addproduct" class="btn btn-primary">Save changes</button>
    </div>
   </form>
   </div>
      </div>
      </div>

</body>
</html>
