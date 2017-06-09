<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Varchar | Admin</title>
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="../img/logo.png">
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
                              <ul class="menu">
                                <li>
                                  <a href="#">
                                  <i class="glyphicon glyphicon-user text-success"></i> 2 new members are joined today
                                  </a>
                                </li>
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
                <li>
                  <div>
                      <a  href="dashboard.php"><i class="  glyphicon glyphicon-dashboard"></i> Dashboard</a>

                 </div>
                </li>
                <li>
                  <div >
                      <a href="product.php"><i class="glyphicon glyphicon-briefcase"></i>  Products</a>
                 </div>
                </li>
                <li>
                     <div class="panel-headi">
                            <a  class="accordion-toggle text-left activate" data-toggle="collapse" data-parent="#accordion" href="#account"><i class="glyphicon glyphicon-user"></i> User Account  <i class="glyphicon glyphicon-chevron-right icon-arrow-right "> </i>
                            </a>
                     </div>
                  <ul >
                    <div id="account" class="panel-collapse collapse in text-center">
                      <li> <a href="customer.php"><i class=" glyphicon glyphicon-cutlery"></i>  Customer</a> </li>
                      <li class="activate"><a href="admin.php"> <i class=" glyphicon glyphicon-king"></i> Admin</a> </li>
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

        <!-- Page Content -->

        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                      <div class="database">
                      <a href="#menu-toggle"  id="menu-toggle"><span class="fa fa-align-justify fa-2x" ></span></a>
              <section class="content-header">
                <h3>
                User Account
                </h3>
                <ol class="breadcrumb">
                  <li><a href=""><i class="glyphicon glyphicon-home"></i> Home</a></li>
                  <li><i class="glyphicon glyphicon-user"></i>User Account</li>
                  <li> Admin </li>
                </ol>
              </section>

              <!-- Main content -->
              <section class="content">
                  <div class="row">
                      <div class="col-xs-12">
                          <div class="box">
                              <div class="box-body">
                                  <table id="admin" class="table table-bordered table-hover">
                                  <thead>
                                  <tr>
                                  <th>Name</th>
                                  <th>Email Address</th>
                                  <th>Password</th>
                                  <th>Account Type</th>
                                  </tr>
                                  </thead>
                                      <tbody>
                                          <?php
                                              include('../php/connection.php');
                                              $res = $conn->query("SELECT manager.manager_Lname,manager_Fname,manager_Mname,
                                                                            user_account.Email,Password,Account_Type from manager INNER JOIN
                                                                            user_account ON manager.User_ID=user_account.User_ID");
                                            while($row = $res->fetch_assoc()){
                                              $dot='.';
                                              ?>
                                                  <tr>
                                                      <td><?php echo $row['manager_Lname'],$row['manager_Fname'],$row['manager_Mname'],$dot; ?></td>
                                                      <td><?php echo $row['Email']; ?></td>
                                                      <td><?php echo sha1($row['Password']); ?></td>
                                                      <td><?php echo $row['Account_Type']; ?></td>
                                                  </tr>
                                              <?php
                                            }
                                            ?>

                                         <?php
                                              include('../php/connection.php');
                                              $res = $conn->query("SELECT crew.crew_Lname,crew_Fname,crew_Mname,
                                                                            user_account.Email,Password,Account_Type from crew INNER JOIN
                                                                            user_account ON crew.User_ID=user_account.User_ID");
                                            while($row = $res->fetch_assoc()){
                                              $dot='.';
                                              ?>
                                                  <tr>
                                                      <td><?php echo $row['crew_Lname'],$row['crew_Fname'],$row['crew_Mname'],$dot; ?></td>
                                                      <td><?php echo $row['Email']; ?></td>
                                                      <td><?php echo sha1($row['Password']); ?></td>
                                                      <td><?php echo $row['Account_Type']; ?></td>
                                                  </tr>
                                              <?php
                                            }
                                            ?>
                                      </tbody>

                                  </table>
                              </div><!-- /.box-body -->
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

    <script src="../bootstrap/js/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>

    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
    <script src="../bootstrap/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="../bootstrap/plugins/fastclick/fastclick.min.js"></script>
    <script type="text/javascript" class="init">
    $(document).ready(function() {
      $('#admin').DataTable();
    } );
    </script>
</body>

</html>
