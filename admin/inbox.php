<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1">
    <title>Varchar | Inbox</title>
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="../bootstrap/css/dataTables.bootstrap.min.css">
    <link rel="shortcut icon" href="../img/logo.png">
    <link rel="stylesheet" href="../bootstrap/css/font-awesome.min.css">
</head>

<body class="">

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
                         <a href="#"><i class="glyphicon glyphicon-record text-success"></i> Online</a>
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
                <li >
                  <div >
                      <a href="product.php"><i class="fa fa-briefcase"></i> Products</a>
                 </div>
                </li>
                <li>
                     <div class="panel-headi ">
                            <a  class="accordion-toggle text-left " data-toggle="collapse" data-parent="#accordion" href="#account"><i class="fa fa-user"></i> User Account  <i class="glyphicon glyphicon-chevron-right icon-arrow-right "> </i>
                            </a>
                     </div>
                  <ul >
                    <div id="account" class="panel-collapse collapse  text-center">
                      <li > <a href="customer.php "><i class=" glyphicon glyphicon-cutlery"></i>  Customer</a> </li>
                      <li ><a href="admin.php "> <i class=" glyphicon glyphicon-king"></i> Admin</a> </li>
                    </div>
                  </ul>
                </li>
                <li>
                      <div class="panel-headi">
                            <a  class="accordion-toggle activate" data-toggle="collapse" data-parent="#accordion" href="#message" ><i class="fa fa-envelope icon-4x"></i>  Messages <i class="glyphicon glyphicon-chevron-right icon-arrow-right"> </i>
                            </a>
                      </div>
                    <ul >
                      <div id="message" class="panel-collapse collapse in text-center ">
                        <li  class="activate"><a href="inbox.php">  <i class="fa fa-inbox"></i>Inbox</a> </li>
                        <li><a href="sentitems.php"> <i class="    glyphicon glyphicon-send"></i>  Sent Items </a></li>
                        <li><a href="drafts.php"> <i class="   glyphicon glyphicon-floppy-save"></i>Drafts </a></li>
                        <li><a href="trash"> <i class="   glyphicon glyphicon glyphicon-floppy-remove"></i> Trash </a></li>
                      </div>
                    </ul>
                </li>
            </ul>

        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->

        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                      <div class="database">
                      <a href="#menu-toggle"  id="menu-toggle"><span class="fa fa-align-justify fa-2x" ></span></a>
                          <section class="content-header">
                            <h3>
                            Inbox
                            </h3>
                            <ol class="breadcrumb">
                              <li><a href=""><i class="glyphicon glyphicon-home"></i> Home</a></li>
                              <li><i class="glyphicon glyphicon-envelope"></i>&nbsp Messages</li>
                              <li> Inbox </li>
                            </ol>
                          </section>

                          <!-- Main content -->
                          <section class="content">
                              <div class="row">
                                  <div class="col-xs-12">
                                      <div class="box">
                                      <?php
                                          echo "<form name='bulk_action_form' action='deleteinbox.php' method='POST' onSubmit='return delete_confirm();'>
<table id='inbox' class='table table-bordered table-hover'>
  <thead>
  <tr>
    <th  class='no-sort text-center'>
      <button type='submit' id='confirmDelete'
        class='btn btn-warning'  name='delete_submit'
        title='Delete' disabled>  <i class='glyphicon glyphicon-trash'></i>
      </button>
      <input type='checkbox' name='select_all' class='largerCheckbox' id='select_all' />
    </th>
    <th>Name</th>
    <th>Message</th>
    <th>Address</th>
    <th>Contact</th>
    <th>Action</th>
  </tr>
  </thead>
  <tfoot>
    <tr>
    <th></th>
     <th>Name</th>
      <th>Message</th>
     <th>Address</th>
     <th>Contact</th>
     <th>Action</th>
    </tr>
  </tfoot>
  <tbody>";
?>

<?php
  include('../php/connection.php');
  $res = $conn->query("SELECT customer.Cus_Lname,Cus_Fname,Cus_Mname,Street,Municipality,City,Contact,
  inbox.message,inbox_id from customer INNER JOIN
  inbox ON customer.Cus_ID=inbox.Cus_ID Order by customer.Cus_Lname ASC");
  while($row = $res->fetch_assoc()){
  $street=' St., ';
  $space=' ';
  $city=' City';
  echo "<tr>";
  echo "<td align='center'><input type='checkbox' name='checked_id[]' class='checkbox' value=". $row['inbox_id']. "/></td>";
  echo "<td>" . $row['Cus_Lname'] . ', '.$row['Cus_Fname'].' '.$row['Cus_Mname'].'.'."</td>";
  echo "<td>" . $row['message'] . "</td>";
  echo "<td>"  . $row['Street'] . ' St., '.$row['Municipality'].' '.$row['City'].' City'."</td>";
  echo "<td>" . $row['Contact'] . "</td>";
  echo "<td><button type='button' class='btn btn-info btn-sm' data-toggle='modal' data-target='#view-" . $row['inbox_id'] . "'>View</button></td>";
  echo "</tr>";
?>

<div class="modal fade" id="view-<?php echo $row['inbox_id'] ?>" tabindex="-<?php echo $row['inbox_id'] ?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Message By: <?php echo $row['Cus_Fname'] ?></h4>
        </div>
        <div class="modal-body">

          <div class="form-group">
               <textarea  name="prod_desc" value="" class="form-control"  cols="5" rows="5" ><?php echo $row['message'];?></textarea>
          </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>
<?php
}
echo "</table>";
echo "</form>";
?>
                                      </div><!-- /.box -->
                                  </div><!-- /.col 12-->
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
    <script src="../bootstrap/js/jQuery-2.1.4.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/jquery.dataTables.min.js"></script>
    <script src="../bootstrap/js/dataTables.bootstrap.min.js"></script>
    <script src="../bootstrap/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="../bootstrap/plugins/fastclick/fastclick.min.js"></script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


    <script type="text/javascript" class="init">
    $(document).ready(function() {
      $('#inbox').DataTable({
        aoColumnDefs: [
          { aTargets: [0], bSortable: false }
        ],
        aaSorting: [ [1, 'desc'] ]
    }); });

$(function(){
  var checkboxes= $(':checkbox:not(#select_all)').click(function(event){
    $('#confirmDelete').prop("disabled",checkboxes.filter(':checked').length == 0);
     $('#select_all').prop('checked',true);
  });

  $('#select_all').click(function(event){
    checkboxes.prop('checked', this.checked);
    $('#confirmDelete').prop("disabled", !this.checked);

  });
});

function delete_confirm(){
  var result = confirm("Are you sure you want to delete inbox/s?  There is no undo !");
  if(result){
    return true;
  }else{
    return false;
  }
}
    </script>
</body>

</html>
