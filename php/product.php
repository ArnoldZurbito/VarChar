<?php  require('session.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Varchar | Products</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="shortcut icon" href="../img/logo.png">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="../css/style.css">
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../bootstrap/js/jquery-1.11.3.min.js"></script>
<style>

.modal-header {
    background: #5689b5;
    color: #FFF;
}
.modal-body {
    background: #ecf0f5;
}


.modal-footer{
    color: #8a6d3b;
background-color: #fcf8e3;
border-color: #faebcc;}
</style>
</head>

<body data-spy="scroll" data-target="#myScrollspy" data-offset="50">
<?php confirm_logged_in();?>
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

       <div class="collpase navbar-collapse" id="navbar-collapse">
        <ul class ="nav navbar-nav ">
          <li><a href="../home.html #home"><span class="glyphicon glyphicon-home"></span> Home</a></li>
          <li class="active"><a href="../product.html #product"> <span class="glyphicon glyphicon-briefcase"></span> Products</a></li>
          <li><a href="../faq.html">FAQ</a></li>
          <li><a href="../returnpol.php #return">Return Policy</a></li>
        </ul>

         <ul class ="nav navbar-nav navbar-right">
       <!--    <li><a  data-toggle="modal" href="../register.html" data-target="#register"><span class="glyphicon glyphicon-user"></span> Register</a></li> -->
   <!--        <li><a data-toggle="modal" href="login.html" data-target="#login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->

    <li><a data-toggle ="modal" href="wishlist.html" data-target="#wish"><span class="glyphicon glyphicon-heart"></span> Wish List <span class="badge btn-primary">0</span> </a></li>
    <li><a data-toggle ="modal" href="cart.html" data-target="#cart"><span class="glyphicon glyphicon-shopping-cart"></span> Cart <span class="badge btn-primary">0</span></a></li>

    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
          <span class="glyphicon glyphicon-user"></span>
          <?php if (isset($_SESSION['MEMBER_ID'])){ echo $_SESSION['Email']; } ?>
          <span class="caret"></span>
        </a>
          <ul class="dropdown-menu">
           <?php
              if (isset($_SESSION['MEMBER_ID'])){
                ?>
                    <li class="text-center">
                    <a href="logout.php">
                     <button type="button" class="btn btn-warning btn-circle ">
                     <span class="glyphicon glyphicon-log-out"></span>
                     </button>&nbsp;&nbsp;&nbsp;Sign Out
                    </a>
                    </li>
                    <li class="divider"></li>
                     <li class="text-center">
                      <a href="profile.php"> <button type="button" class="btn btn-warning btn-circle"><span class="glyphicon glyphicon-user"></span></button>&nbsp;&nbsp;&nbsp;User Profile</a>
                    </li>
                <?php
              }else{
                ?>
                    <li> <a data-toggle="modal" href="loginex.php" data-target="#login"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
                      <?php
              }
              ?>
          </ul>
    </li>
<!--          <a ><span class="glyphicon glyphicon-log-in"></span> Logins</a></li> -->
         </ul>
       </div>
     </div>
    </nav>
  </header>

<!-- Products Nagahiro -->
     <div class="jumbotron">
       <div class="container">
        <section>
            <div class="row">
               <div id="myScrollspy" class=" col-sm-3 ">
                     <div  class=" col-sm-2 bs-sidebar hidden-print">
                            <ul class="nav bs-sidenav">
                               <li class="treeview">
                                <h4 class="text-center "><b>Peripherals</b></h4>
                                <ul class="nav treeview-menu">
                                  <li><a href="#mouse">Gaming Mouse</a></li>
                                  <li><a href="#keyboard">Keyboard</a></li>
                                  <li><a href="#pad">Mouse Pad</a></li>
                                </ul>
                               </li>
                            </ul>
                     </div>
               </div>

                <div class="col-sm-9">
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                          <!-- Indicators -->
                          <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                            <li data-target="#myCarousel" data-slide-to="4"></li>
                          </ol>

                          <!-- Wrapper for slides -->
                          <div class="carousel-inner" role="listbox">
                             <div class="item active">
                               <img src="../img/products/fade1.png" width="1172px" height="383px" alt="Chania">
                             </div>

                             <div class="item">
                               <img src="../img/products/fade2.png" width="1172" height="383" alt="Chania">
                             </div>

                             <div class="item">
                               <img src="../img/products/fade3.png" width="1172" height="383" alt="Flower">
                             </div>

                             <div class="item">
                               <img src="../img/products/fade4.png" width="1172" height="383" alt="Flower">
                             </div>
                              <div class="item">
                               <img src="../img/products/fade5.png" width="1172px" height="383px" alt="Flower">
                             </div>
                          </div>

                          <!-- Left and right controls -->
                          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                     </div>
                </div>
            </div><!-- row -->
        </section>
<hr>

<!-- mouse products -->
           <section>
             <div class="row text-center">
                  <div class="col-sm-3">
                  </div>
                  <!-- Unang Row -->
                   <div class="col-sm-9">
                       <div id="mouse">
                        <div class="row">
                            <div class="col-sm-4 col-xs-9">
                            <div class="panel panel-primary text-center">
                                    <div class="panel-heading">
                                     <h4>Thaanox</h4>
                                    </div>
                                    <div class="panel-body">
                                       <div>

                                        <a data-toggle="modal" href="#thaanox"><img src="../img/products/mouse/Thaanox.png"  class="img-rounded" alt="Cinque Terre" width="230" height="200"></a>
                                       </div>

                                        <h6>Php 3,4902</h6>
                                        <button class="btn btn-warning">Add to Cart</button>
                                     </div>
                             </div>
                            </div>
                            <div class="col-sm-4 col-xs-9">
                            <div class="panel panel-primary text-center">
                                    <div class="panel-heading">
                                     <h4>Volos</h4>
                                    </div>
                                    <div class="panel-body">
                                       <div>

                                        <a data-toggle="modal" href="#volos"> <img src="../img/products/mouse/Volos.png"  class="img-rounded" alt="Cinque Tefffrre" width="230" height="200"></a>
                                       </div>

                                        <h6>Php 3,4902</h6>
                                        <button class="btn btn-warning">Add to Cart</button>
                                     </div>
                             </div>
                            </div>
                            <div class="col-sm-4 col-xs-9">
                            <div class="panel panel-primary text-center">
                                    <div class="panel-heading">
                                     <h4>Commander</h4>
                                    </div>
                                     <div class="panel-body">
                                       <div>

                                       <a data-toggle="modal" href="#hybrid">
                                        <img src="../img/products/mouse/Talon.png"  class="img-rounded" alt="Cinque Terre" width="230" height="200"></a>
                                       </div>

                                        <h6>Php 3,4902</h6>
                                        <button class="btn btn-warning">Add to Cart</button>
                                     </div>
                             </div>
                            </div>
                            <div class="col-sm-4 col-xs-9">
                            <div class="panel panel-primary text-center">
                                    <div class="panel-heading">
                                     <h4>Metallic</h4>
                                    </div>
                                    <div class="panel-body">
                                       <div>

                                          <a data-toggle="modal" href="#metallic">
                                          <img src="../img/products/mouse/Metallic.png"  class="img-rounded" alt="Cinque Terre" width="230" height="200"></a>
                                       </div>

                                        <h6>Php 3,4902</h6>
                                        <button class="btn btn-warning">Add to Cart</button>
                                     </div>
                             </div>
                            </div>
                            <div class="col-sm-4 col-xs-9">
                            <div class="panel panel-primary text-center">
                                    <div class="panel-heading">
                                     <h4>Combat White</h4>
                                    </div>
                                    <div class="panel-body">
                                       <div>
                                       <a data-toggle="modal" href="#combatwhite">
                                        <img src="../img/products/mouse/Combat.png"  class="img-rounded" alt="Cinque Terre" width="230" height="200"></a>
                                       </div>

                                        <h6>Php 3,4902</h6>
                                        <button class="btn btn-warning">Add to Cart</button>
                                     </div>
                             </div>
                            </div>
                            <div class="col-sm-4 col-xs-9">
                            <div class="panel panel-primary text-center">
                                    <div class="panel-heading">
                                     <h4>Ventox</h4>
                                    </div>
                                     <div class="panel-body">
                                       <div>

                                      <a data-toggle="modal" href="#ventox">
                                        <img src="../img/products/mouse/Ventox.png"  class="img-rounded" alt="Cinque Terre" width="230" height="200"></a>
                                       </div>

                                        <h6>Php 3,4902</h6>
                                        <button class="btn btn-warning">Add to Cart</button>
                                     </div>
                             </div>
                            </div>
                        </div> <!-- mouse row -->
                       </div> <!-- mouse id -->
<!-- keyboard products -->
<hr>
                       <div id="keyboard">
                        <div class="row">
                             <div class="col-sm-4 col-xs-9">
                              <div class="panel panel-primary text-center">
                                     <div class="panel-heading">
                                       <h4>Admiral</h4>
                                     </div>
                                      <div class="panel-body">
                                        <div>
                                        <a data-toggle="modal" href="#admiral">
                                          <img src="../img/products/keyboard/Admiral1.png"  class="img-rounded" alt="Cinque Terre" width="230" height="200"></a>
                                        </div>

                                          <h6>Php 3,4902</h6>
                                          <button class="btn btn-warning">Add to Cart</button>
                                       </div>
                               </div>
                             </div>
                             <div class="col-sm-4 col-xs-9">
                                <div class="panel panel-primary text-center">
                                       <div class="panel-heading">
                                        <h4>Commander</h4>
                                       </div>
                                        <div class="panel-body">
                                          <div>
                                          <a data-toggle="modal" href="#commander">
                                            <img src="../img/products/keyboard/Commander3.png"  class="img-rounded" alt="Cinque Terre" width="230" height="200"></a>
                                          </div>

                                            <h6>Php 3,4902</h6>
                                            <button class="btn btn-warning">Add to Cart</button>
                                        </div>
                                </div>
                             </div>
                             <div class="col-sm-4 col-xs-9">
                                <div class="panel panel-primary text-center">
                                       <div class="panel-heading">
                                        <h4>Meka-G1-Combat</h4>
                                       </div>
                                       <div class="panel-body">
                                          <div>
                                            <a data-toggle="modal" href="#mekag1combat">
                                            <img src="../img/products/keyboard/Meka-G1-Combat1.png"  class="img-rounded" alt="Cinque Terre" width="230" height="200"></a>
                                          </div>

                                            <h6>Php 3,4902</h6>
                                            <button class="btn btn-warning">Add to Cart</button>
                                       </div>
                                </div>
                             </div>
                             <div class="col-sm-4 col-xs-9">
                                <div class="panel panel-primary text-center">
                                       <div class="panel-heading">
                                        <h4>Persassius</h4>
                                       </div>
                                       <div class="panel-body">
                                          <div>
                                            <a data-toggle="modal" href="#persassius">
                                            <img src="../img/products/keyboard/Persassius1.png"  class="img-rounded" alt="Cinque Terre" width="230" height="200"></a>
                                          </div>

                                            <h6>Php 3,4902</h6>
                                            <button class="btn btn-warning">Add to Cart</button>
                                        </div>
                                </div>
                             </div>
                             <div class="col-sm-4 col-xs-9">
                                <div class="panel panel-primary text-center">
                                       <div class="panel-heading">
                                        <h4>Meka-G1</h4>
                                       </div>
                                        <div class="panel-body">
                                          <div>
                                          <a data-toggle="modal" href="#mekag1">
                                            <img src="../img/products/keyboard/Meka-G1.png"  class="img-rounded" alt="Cinque Terre" width="230" height="200"></a>
                                          </div>

                                            <h6>Php 3,4902</h6>
                                            <button class="btn btn-warning">Add to Cart</button>
                                        </div>
                                </div>
                             </div>
                             <div class="col-sm-4 col-xs-9">
                                <div class="panel panel-primary text-center">
                                       <div class="panel-heading">
                                        <h4>Horus</h4>
                                       </div>
                                        <div class="panel-body">
                                          <div>
                                            <a data-toggle="modal" href="#horus">
                                            <img src="../img/products/keyboard/Horus1.png"  class="img-rounded" alt="Cinque Terre" width="230" height="200"></a>
                                          </div>

                                            <h6>Php 3,4902</h6>
                                            <button class="btn btn-warning">Add to Cart</button>
                                        </div>
                                </div>
                             </div>
                        </div>
                       </div> <!-- keyboard id -->
 <hr>
 <!-- mouse pad  products-->

                       <div id="pad">
                          <div class="row">
                             <div class="col-sm-4 col-xs-9">
                              <div class="panel panel-primary text-center">
                                     <div class="panel-heading">
                                       <h4>DRACONEM Aluminum</h4>
                                     </div>
                                      <div class="panel-body">
                                        <div>
                                        <a data-toggle="modal" href="#drakkon">
                                          <img src="../img/products/mousepad/Drakkon1.png"  class="img-rounded" alt="Cinque Terre" width="230" height="200"></a>
                                        </div>

                                          <h6>Php 3,4902</h6>
                                          <button class="btn btn-warning">Add to Cart</button>
                                       </div>
                               </div>
                             </div>
                             <div class="col-sm-4 col-xs-9">
                                <div class="panel panel-primary text-center">
                                       <div class="panel-heading">
                                        <h4>Conkor</h4>
                                       </div>
                                        <div class="panel-body">
                                          <div>
                                            <a data-toggle="modal" href="#conkor">
                                            <img src="../img/products/mousepad/Conkor.png"  class="img-rounded" alt="Cinque Terre" width="230" height="200"></a>
                                          </div>

                                            <h6>Php 3,4902</h6>
                                            <button class="btn btn-warning">Add to Cart</button>
                                        </div>
                                </div>
                             </div>
                             <div class="col-sm-4 col-xs-9">
                               <div class="panel panel-primary text-center">
                                     <div class="panel-heading">
                                       <h4>Dasher Mini</h4>
                                     </div>
                                      <div class="panel-body">
                                        <div>
                                          <a data-toggle="modal" href="#dasher">
                                          <img src="../img/products/mousepad/Dasher.png"  class="img-rounded" alt="Cinque Terre" width="230" height="200"></a>
                                        </div>

                                          <h6>Php 3,4902</h6>
                                          <button class="btn btn-warning">Add to Cart</button>
                                       </div>
                               </div>
                             </div>
                             <div class="col-sm-4 col-xs-9">
                                <div class="panel panel-primary text-center">
                                       <div class="panel-heading">
                                        <h4>Ladon</h4>
                                       </div>
                                       <div class="panel-body">
                                          <div>
                                            <a data-toggle="modal" href="#ladon">
                                            <img src="../img/products/mousepad/Ladon.png"  class="img-rounded" alt="Cinque Terre" width="230" height="200"></a>
                                          </div>

                                            <h6>Php 3,4902</h6>
                                            <button class="btn btn-warning">Add to Cart</button>
                                        </div>
                                </div>
                             </div>
                             <div class="col-sm-4 col-xs-9">
                              <div class="panel panel-primary text-center">
                                     <div class="panel-heading">
                                       <h4>Sparrow</h4>
                                     </div>
                                      <div class="panel-body">
                                        <div>
                                          <a data-toggle="modal" href="#sparrow">
                                          <img src="../img/products/mousepad/Sparrow1.png"  class="img-rounded" alt="Cinque Terre" width="230" height="200"></a>
                                        </div>

                                          <h6>Php 3,4902</h6>
                                          <button class="btn btn-warning">Add to Cart</button>
                                       </div>
                               </div>
                             </div>
                             <div class="col-sm-4 col-xs-9">
                              <div class="panel panel-primary text-center">
                                     <div class="panel-heading">
                                       <h4>Tortuga</h4>
                                     </div>
                                      <div class="panel-body">
                                        <div>
                                          <a data-toggle="modal" href="#tortuga">
                                          <img src="../img/products/mousepad/Tortuga1.png"  class="img-rounded" alt="Cinque Terre" width="200" height="200"></a>
                                        </div>

                                          <h6>Php 3,4902</h6>
                                          <button class="btn btn-warning">Add to Cart</button>
                                       </div>
                               </div>
                             </div>
                          </div>
                       </div> <!-- mouse pad id -->
                   </div><!--  col 9 -->
             </div>
            </section>
       </div> <!-- conatiner -->
     </div> <!-- jumbotron -->

<hr>

    <footer id="footer" class="container-fluid  col-sm-12">
        <div class="footer-content">
          <div class="col-holder">
            <div class="col">
             <div class="heading">
               <h3>Company</h3>
             </div>
             <p>
              <ul>
               <li>
                <a href="termscon.html #terms">Terms and Conditions</a>
               </li>
               <li>
                <a href="return_pol.html #return">Return Policy</a>
               </li>
               <li>
                <a href="cus_service.html #return">Customer Service</a>
               </li>
              </ul>
            </p>
            </div>
            <div class="col">
             <div class="heading">
               <h3>Contact</h3>
             </div>
             <address>
               <p><strong>Varchar Inc.</strong></p>
               <p>F. Aquende Drive Legazpi City</p>
               <p>Philippines</p>
               <p>+639095063177</p>
               <p><a href="www.varchar.com">www.varchar.com</a></p>
             </address>
            </div>
            <div class="col">
             <div class="heading">
               <h3>Follow us</h3>
             </div>
             <ul class="social">
               <li class="facebook"><a href="#">Facebook</a></li>
               <li class="google"><a href="#">Google+</a></li>
               <li class="twitter"><a href="#">Twitter</a></li>
             </ul>
            </div>
          </div>

        </div>

        <div class="footer-bottom">
          <div class="holder">
                  <p>Copyright &copy 2016 <a href="home.html">Varchar </a>. All rights reserved.</p>
          </div>
        </div>

    </footer>

<!-- Register -->
<form action="php/register.php"  method="POST" class="form-horizontal" role="form">
  <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     <div class="modal-dialog">
        <div class="modal-content">

        </div> <!-- /.modal-content -->
     </div> <!-- /.modal-dialog -->
  </div> <!-- /.modal --><!-- Register -->
</form>
<!-- Login -->
<form action="login.php" method="POST" class="form-horizontal"  role="form">
  <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     <div class="modal-dialog">
        <div class="modal-content">

        </div> <!-- /.modal-content -->
     </div> <!-- /.modal-dialog -->
  </div> <!-- /.modal -->
</form>

<!-- Mouse Modal -->
<div id="thaanox" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
     <div class="modal-header  modal-info">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title">Thaanox</h4>
     </div>
     <div class="modal-body">
         <section>
            <div class="row">
             <div class="col-sm-6">
                 <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     <!-- Indicators -->
                     <ol class="carousel-indicators">
                       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                       <li data-target="#myCarousel" data-slide-to="1"></li>
                       <li data-target="#myCarousel" data-slide-to="2"></li>
                       <li data-target="#myCarousel" data-slide-to="3"></li>
                       <li data-target="#myCarousel" data-slide-to="4"></li>
                     </ol>

                     <!-- Wrapper for slides -->
                     <div class="carousel-inner">
                       <div class="item active">
                      <img src="../img/products/mouse/Thaanox.jpg"  class="img-rounded"  id="img1" alt="Thaanox1" width="550" height="450">
                       </div>

                       <div class="item">
                        <img src="../img/products/mouse/Thaanox1.jpg"  class="img-rounded" alt="Thaanox2" width="550" height="450">
                       </div>

                       <div class="item">
                        <img src="../img/products/mouse/Thaanox2.jpg"  class="img-rounded" alt="Thaanox3" width="550" height="450">
                       </div>

                       <div class="item">
                        <img src="../img/products/mouse/Thaanox5.jpg"  class="img-rounded" alt="Thaanox5" width="550" height="450">
                       </div>
                        <div class="item">
                        <img src="../img/products/mouse/Thaanox7.jpg"  class="img-rounded" alt="Thaanox7" width="550" height="450">
                       </div>
                     </div>
                 </div>
                <div class="product_gallery">
                 <ul class="list-inline">
                  <li>
                    <a data-target="#img1" data-toggle="carousel-indicators">
                       <img src="../img/products/mouse/Thaanox.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100" />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/mouse/Thaanox1.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100"  />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/mouse/Thaanox2.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100" />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/mouse/Thaanox5.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100"  />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/mouse/Thaanox7.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100"  />
                    </a>
                    </li>
                  </ul>
                </div>
             </div><!-- col-sm-6 -->
             <div class="col-sm-6">
               <h2>Thaanox Mouse Jagger</h2>
               <p>The TALON gaming mouse features an AVAGO 3050 optical sensor, with up to 3000 DPI, and a unique 6 color cycling effect lighting system. It offers good stability and accuracy via great tracking precision and a high max speed.The TALON has an ergonomic, ambidextrous shape, making it great for both left and right handed users.</p> <br>
                  <div class="">
                     <h4>Available Colors</h4>
                     <form role="form">
                       <ul class="list-inline">
                         <li>
                             <p>Violet</p>
                                <div > <input type="checkbox" checked></div>
                          </li>
                           <li>
                             <p>Black</p>
                            <div> <input type="checkbox"  /></div>
                          </li>
                          <li>
                             <p>Blue</p>
                               <div ><input type="checkbox"/></div>
                          </li>
                          <li>
                             <p>Red</p>
                                 <div> <input type="checkbox"/></div>
                          </li>
                       </ul>
                     </form>
                  </div>
                  <br />
                   <div class="">
                       <h2>Size <small>Please select one</small></h2>
                       <ul class="list-inline">
                          <li>
                             <button type="button" class="btn btn-default btn-xs">Medium</button>
                          </li>
                          <li>
                             <button type="button" class="btn btn-default btn-xs">Large</button>
                          </li>
                       </ul>
                    </div>
                    <br />

                    <div class="">
                       <div class="product_price">
                          <h1 class="price">Php 1,590.00</h1>
                       </div>
                    </div>

                    <div class="">
                       <button type="button" class="btn btn-warning btn-lg">Add to Cart</button>
                       <button type="button" class="btn btn-warning btn-lg">Add to Wishlist</button>
                    </div>
             </div>
            </div>
            <hr>
            <h3>Features</h3>
            <div class="row">
            <div class="col-sm-12">
               <div class="" role="tabpanel">
                  <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                     <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">REMOVABLE SIDE PANELS</a>
                     </li>
                     <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">6 COLOR CYCLING EFFECT</a>
                     </li>
                      <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab"  aria-expanded="false">AVAGO 3050 OPTICAL SENSOR</a>
                     </li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                     <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                        <p>The TAANOX gaming mouse features removable side panels, so that users may further adjust the shape of the mouse to their liking.</p>
                     </div>
                     <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                            <p>The TAANOX changes it up from traditional lighting setups,with lighting accents throughout the mouse body as well as a 6 color cycling effect lighting system that cycles through the colors red, orange, yellow, blue , dark blue, and purple respectively.
                            [To lock the lighting system to one color]: when the lighting cycles to the desired color, click the mouse wheel (mouse3) and press the DPI adjustment button simultaneously. Repeat to unlock.
                            [To turn lighting system on/off]: press left click (mouse1) + DPI adjustment button simultaneously.</p>
                     </div>
                     <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                        <p>The AVAGO 3050 Optical sensor found inside the TAANOX gaming mouse offers up to sensitivity up to 3000 DPI. The sensor is very accurate in precision, has no prediction, and has a high perfect control speed (meaning even low sens. users who rely on very fast movement will still have perfect tracking).</p>
                     </div>
                  </div>
               </div>
            </div>
            </div>

         </section>
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
     </div>
    </div>

  </div>
</div>


<div id="volos" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
     <div class="modal-header  modal-info">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title">Volos</h4>
     </div>
     <div class="modal-body">
         <section>
            <div class="row">
             <div class="col-sm-6">
                 <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     <!-- Indicators -->
                     <ol class="carousel-indicators">
                       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                       <li data-target="#myCarousel" data-slide-to="1"></li>
                       <li data-target="#myCarousel" data-slide-to="2"></li>
                       <li data-target="#myCarousel" data-slide-to="3"></li>
                       <li data-target="#myCarousel" data-slide-to="4"></li>
                     </ol>

                     <!-- Wrapper for slides -->
                     <div class="carousel-inner">
                       <div class="item active">
                      <img src="../img/products/mouse/Volos.jpg"  class="img-rounded"  id="img1" alt="Thaanox1" width="550" height="450">
                       </div>

                       <div class="item">
                        <img src="../img/products/mouse/Volos1.jpg"  class="img-rounded" alt="Thaanox2" width="550" height="450">
                       </div>

                       <div class="item">
                        <img src="../img/products/mouse/Volos3.jpg"  class="img-rounded" alt="Volos3" width="550" height="450">
                       </div>

                       <div class="item">
                        <img src="../img/products/mouse/Volos4.jpg"  class="img-rounded" alt="Volos4" width="550" height="450">
                       </div>
                        <div class="item">
                        <img src="../img/products/mouse/Volos5.jpg"  class="img-rounded" alt="Volos5" width="550" height="450">
                       </div>
                     </div>
                 </div>
                <div class="product_gallery">
                 <ul class="list-inline">
                    <li>
                    <a data-target="#img1" data-toggle="carousel-indicators">
                       <img src="../img/products/mouse/Volos.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100" />
                    </a>
                    </li>
                    <li>
                    <a data-target="#img1" data-toggle="carousel-indicators">
                       <img src="../img/products/mouse/Volos1.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100" />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/mouse/Volos3.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100"  />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/mouse/Volos4.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100" />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/mouse/Volos5.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100"  />
                    </a>
                    </li>
                  </ul>
                </div>
             </div><!-- col-sm-6 -->
             <div class="col-sm-6">
               <h2>Volos Mouse Jagger</h2>
               <p>The VOLOS laser gaming mouse is specially designed for MOBA/MMORPG games, to give players the perfect control in their hand for instant access to their abilities and spells. The VOLOS comes with an Avago laser sensor with up to 8200 DPI, Omron switches with life expectancy of up to 5 million clicks and a total of 14 configurable buttons as macro keys.</p> <br>
                  <div class="">
                     <h4>Available Colors</h4>
                     <form role="form">
                       <ul class="list-inline">
                         <li>
                             <p>Violet</p>
                                <div > <input type="checkbox" checked></div>
                          </li>
                           <li>
                             <p>Black</p>
                            <div> <input type="checkbox"  /></div>
                          </li>
                          <li>
                             <p>Blue</p>
                               <div ><input type="checkbox"/></div>
                          </li>
                          <li>
                             <p>Red</p>
                                 <div> <input type="checkbox"/></div>
                          </li>
                       </ul>
                     </form>
                  </div>
                  <br />
                   <div class="">
                       <h2>Size <small>Please select one</small></h2>
                       <ul class="list-inline">
                          <li>
                             <button type="button" class="btn btn-default btn-xs">Medium</button>
                          </li>
                          <li>
                             <button type="button" class="btn btn-default btn-xs">Large</button>
                          </li>
                       </ul>
                    </div>
                    <br />

                    <div class="">
                       <div class="product_price">
                          <h1 class="price">Php 1,590.00</h1>
                       </div>
                    </div>

                    <div class="">
                       <button type="button" class="btn btn-warning btn-lg">Add to Cart</button>
                       <button type="button" class="btn btn-warning btn-lg">Add to Wishlist</button>
                    </div>
             </div>
            </div>
            <hr>

            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_a" data-toggle="tab">4 MB ONBOARD MEMORY.</a></li>
              <li><a href="#tab_b" data-toggle="tab">BALANCED & WEIGHTED BODY</a></li>
              <li><a href="#tab_c" data-toggle="tab">ON-THE-FLY DPI ADJUSTMENT.</a></li>
            </ul>
            <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab_a">
                        <p>Allows storage of 10 different profiles (up to 140 programmable macros). Function lock switch can be activated to prevent accidental macro use.</p>
                    </div>
                    <div class="tab-pane fade" id="tab_b">
                        <p>A specially weighted body, so that when users add the customizable weights, the VOLOS does not get too bottom-heavy.</p>
                    </div>
                    <div class="tab-pane fade" id="tab_c">
                        <p>Instant DPI configuration via the DPI adjustment buttons; with scroll wheel changing colors to differentiate between the 2~5 DPI levels.</p>
                    </div>
            </div><!-- tab content -->
         </section>
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
     </div>
    </div>

  </div>
</div>

<div id="hybrid" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
     <div class="modal-header  modal-info">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
     </div>
     <div class="modal-body">
         <section>
            <div class="row">
             <div class="col-sm-6">
                 <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     <!-- Indicators -->
                     <ol class="carousel-indicators">
                       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                       <li data-target="#myCarousel" data-slide-to="1"></li>
                       <li data-target="#myCarousel" data-slide-to="2"></li>
                       <li data-target="#myCarousel" data-slide-to="3"></li>
                       <li data-target="#myCarousel" data-slide-to="4"></li>
                     </ol>

                     <!-- Wrapper for slides -->
                     <div class="carousel-inner">
                       <div class="item active">
                      <img src="../img/products/mouse/Talon.jpg"  class="img-rounded"  id="img1" alt="Thaanox1" width="550" height="450">
                       </div>

                       <div class="item">
                        <img src="../img/products/mouse/Talon1.jpg"  class="img-rounded" alt="Thaanox2" width="550" height="450">
                       </div>

                       <div class="item">
                        <img src="../img/products/mouse/Talon2.jpg"  class="img-rounded" alt="Volos3" width="550" height="450">
                       </div>

                       <div class="item">
                        <img src="../img/products/mouse/Talon3.jpg"  class="img-rounded" alt="Volos4" width="550" height="450">
                       </div>
                        <div class="item">
                        <img src="../img/products/mouse/Talon4.jpg"  class="img-rounded" alt="Volos5" width="550" height="450">
                       </div>
                     </div>
                 </div>
                <div class="product_gallery">
                 <ul class="list-inline">
                  <li>
                    <a data-target="#img1" data-toggle="carousel-indicators">
                       <img src="../img/products/mouse/Talon.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100" />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/mouse/Talon1.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100"  />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/mouse/Talon2.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100" />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/mouse/Talon3.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100"  />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/mouse/Talon4.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100"  />
                    </a>
                    </li>
                  </ul>
                </div>
             </div><!-- col-sm-6 -->
             <div class="col-sm-6">
               <h2>COMMANDER Gaming Gear Combo</h2>
               <p>The COMMANDER – Gaming Gear Combo – the stunning combo with enhancements on its keyboard and mouse specifications. Providing great features on what gamers need and make them true leaders that will take command of the game. The COMMANDER Combo features Plunger Switch with the same design of Mechanical key cap, gives users an awesome tactile feel and pleasing click with each keystroke plus presenting response feeling like a mechanical switch that surely improve users’ gaming performance by giving users speed and responsiveness like never before.</p> <br>
                  <div class="">
                     <h4>Available Colors</h4>
                     <form role="form">
                       <ul class="list-inline">
                         <li>
                             <p>Violet</p>
                                <div > <input type="checkbox" checked></div>
                          </li>
                           <li>
                             <p>Black</p>
                            <div> <input type="checkbox"  /></div>
                          </li>
                          <li>
                             <p>Blue</p>
                               <div ><input type="checkbox"/></div>
                          </li>
                          <li>
                             <p>Red</p>
                                 <div> <input type="checkbox"/></div>
                          </li>
                       </ul>
                     </form>
                  </div>
                  <br />
                   <div class="">
                       <h2>Size <small>Please select one</small></h2>
                       <ul class="list-inline">
                          <li>
                             <button type="button" class="btn btn-default btn-xs">Medium</button>
                          </li>
                          <li>
                             <button type="button" class="btn btn-default btn-xs">Large</button>
                          </li>
                       </ul>
                    </div>
                    <br />

                    <div class="">
                       <div class="product_price">
                          <h1 class="price">Php 1,590.00</h1>
                       </div>
                    </div>

                    <div class="">
                       <button type="button" class="btn btn-warning btn-lg">Add to Cart</button>
                       <button type="button" class="btn btn-warning btn-lg">Add to Wishlist</button>
                    </div>
             </div>
            </div>
<hr>
            <h3>Feature</h3>
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_aa" data-toggle="tab">PERFECT SENSITIVITY AND CLICKS</a></li>
              <li><a href="#tab_bb" data-toggle="tab">EXCEPTIONALLY COMFORTABLE SHAPE</a></li>
              <li><a href="#tab_cc" data-toggle="tab">AWESOME LED ILLUMINATION</a></li>
            </ul>
            <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab_aa">
                        <p>Offering perfect speed in game with on-the-fly sensitivity (between 800/1200/1600/2400 DPI).</p>
                    </div>
                    <div class="tab-pane fade" id="tab_bb">
                        <p>Offering comfortable palm grips to keep you comfortable while you focus on the game at hand. Allowing you to command easily in game like a true gamer!</p>
                    </div>
                    <div class="tab-pane fade" id="tab_cc">
                        <p>>Light side panels that give you an awesome look allowing you to battle in the dark! Cool lighting battle dragon logo display to boost gamers’ battle experience.</p>
                    </div>
            </div><!-- tab content -->
         </section>
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
     </div>
    </div>

  </div>
</div>

<div id="metallic" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
     <div class="modal-header  modal-info">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
     </div>
     <div class="modal-body">
         <section>
            <div class="row">
             <div class="col-sm-6">
                 <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     <!-- Indicators -->
                     <ol class="carousel-indicators">
                       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                       <li data-target="#myCarousel" data-slide-to="1"></li>
                       <li data-target="#myCarousel" data-slide-to="2"></li>
                       <li data-target="#myCarousel" data-slide-to="3"></li>
                       <li data-target="#myCarousel" data-slide-to="4"></li>
                     </ol>

                     <!-- Wrapper for slides -->
                     <div class="carousel-inner">
                       <div class="item active">
                      <img src="../img/products/mouse/Metallic.jpg"  class="img-rounded"  id="img1" alt="Thaanox1" width="550" height="450">
                       </div>

                       <div class="item">
                        <img src="../img/products/mouse/Metallic1.jpg"  class="img-rounded" alt="Thaanox2" width="550" height="450">
                       </div>

                       <div class="item">
                        <img src="../img/products/mouse/Metallic2.jpg"  class="img-rounded" alt="Volos3" width="550" height="450">
                       </div>

                       <div class="item">
                        <img src="../img/products/mouse/Metallic3.jpg"  class="img-rounded" alt="Volos4" width="550" height="450">
                       </div>
                        <div class="item">
                        <img src="../img/products/mouse/Metallic5.jpg"  class="img-rounded" alt="Volos5" width="550" height="450">
                       </div>
                     </div>
                 </div>
                <div class="product_gallery">
                 <ul class="list-inline">
                  <li>
                    <a data-target="#img1" data-toggle="carousel-indicators">
                       <img src="../img/products/mouse/Metallic.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100" />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/mouse/Metallic1.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100"  />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/mouse/Metallic2.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100" />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/mouse/Metallic3.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100"  />
                    </a>
                    </li>
                   <li>
                    <a href="#">
                       <img src="../img/products/mouse/Metallic5.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100"  />
                    </a>
                    </li>
                  </ul>
                </div>
             </div><!-- col-sm-6 -->
             <div class="col-sm-6">
               <h2>METALLIC Yellow</h2>
               <p>The award winning VARCHAR laser gaming mouse feels amazing in hand with the carefully designed ergonomic shape. It’s highly customizable with adjustable weights, lighting colors, and macros.</p> <br>
                  <div class="">
                     <h4>Available Colors</h4>
                     <form role="form">
                       <ul class="list-inline">
                         <li>
                             <p>Violet</p>
                                <div > <input type="checkbox" checked></div>
                          </li>
                           <li>
                             <p>Black</p>
                            <div> <input type="checkbox"  /></div>
                          </li>
                          <li>
                             <p>Blue</p>
                               <div ><input type="checkbox"/></div>
                          </li>
                          <li>
                             <p>Red</p>
                                 <div> <input type="checkbox"/></div>
                          </li>
                       </ul>
                     </form>
                  </div>
                  <br />
                   <div class="">
                       <h2>Size <small>Please select one</small></h2>
                       <ul class="list-inline">
                          <li>
                             <button type="button" class="btn btn-default btn-xs">Medium</button>
                          </li>
                          <li>
                             <button type="button" class="btn btn-default btn-xs">Large</button>
                          </li>
                       </ul>
                    </div>
                    <br />

                    <div class="">
                       <div class="product_price">
                          <h1 class="price">Php 1,590.00</h1>
                       </div>
                    </div>

                    <div class="">
                       <button type="button" class="btn btn-warning btn-lg">Add to Cart</button>
                       <button type="button" class="btn btn-warning btn-lg">Add to Wishlist</button>
                    </div>
             </div>
            </div>
            <hr>
            <hr>
            <h3>Feature</h3>
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_aaa" data-toggle="tab">DOMINATE THE GAME WITH COMFORT</a></li>
              <li><a href="#tab_bbb" data-toggle="tab">CUSTOMIZATION TO THE MAX</a></li>
              <li><a href="#tab_ccc" data-toggle="tab">DURABILITY AND STYLE TO MATCH</a></li>
            </ul>
            <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab_aaa">
                        <p>Offering perfect speed in game with on-the-fly sensitivity (between 800/1200/1600/2400 DPI).</p>
                    </div>
                    <div class="tab-pane fade" id="tab_bbb">
                        <p>Customize the METALLIC with 7 separate color options, a weight-in system for weight configuration, and up to 40 customizable macro key settings via the METALLIC software.</p>
                    </div>
                    <div class="tab-pane fade" id="tab_ccc">
                        <p>Sturdy construction and OMRON switches make this mouse the best of your desktop. With a life cycle of 50 million clicks and a braided cable, the METALLIC mouse plans to compete as long as you do.</p>
                    </div>
            </div><!-- tab content -->
         </section>
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
     </div>
    </div>

  </div>
</div>

<div id="combatwhite" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
     <div class="modal-header  modal-info">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title">Combat White</h4>
     </div>
     <div class="modal-body">
         <section>
            <div class="row">
             <div class="col-sm-6">
                 <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     <!-- Indicators -->
                     <ol class="carousel-indicators">
                       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                       <li data-target="#myCarousel" data-slide-to="1"></li>
                       <li data-target="#myCarousel" data-slide-to="2"></li>
                       <li data-target="#myCarousel" data-slide-to="3"></li>
                       <li data-target="#myCarousel" data-slide-to="4"></li>
                     </ol>

                     <!-- Wrapper for slides -->
                     <div class="carousel-inner">
                       <div class="item active">
                      <img src="../img/products/mouse/Combat.png"  class="img-rounded"  id="img1" alt="Thaanox1" width="550" height="450">
                       </div>

                       <div class="item">
                        <img src="../img/products/mouse/Combat1.jpg"  class="img-rounded" alt="Thaanox2" width="550" height="450">
                       </div>

                       <div class="item">
                        <img src="../img/products/mouse/Combat2.jpg"  class="img-rounded" alt="Volos3" width="550" height="450">
                       </div>

                       <div class="item">
                        <img src="../img/products/mouse/Combat3.jpg"  class="img-rounded" alt="Volos4" width="550" height="450">
                       </div>
                        <div class="item">
                        <img src="../img/products/mouse/Combat4.jpg"  class="img-rounded" alt="Volos5" width="550" height="450">
                       </div>
                     </div>
                 </div>
                <div class="product_gallery">
                 <ul class="list-inline">
                  <li>
                    <a data-target="#img1" data-toggle="carousel-indicators">
                       <img src="../img/products/mouse/Combat.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100" />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/mouse/Combat1.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100"  />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/mouse/Combat2.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100"  />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/mouse/Combat3.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100" />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/mouse/Combat4.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100"  />
                    </a>
                    </li>
                  </ul>
                </div>
             </div><!-- col-sm-6 -->
             <div class="col-sm-6">
               <h2>Combat White</h2>
               <p>The TALON gaming mouse features an AVAGO 3050 optical sensor, with up to 3000 DPI, and a unique 6 color cycling effect lighting system. It offers good stability and accuracy via great tracking precision and a high max speed.The TALON has an ergonomic, ambidextrous shape, making it great for both left and right handed users.</p> <br>
                  <div class="">
                     <h4>Available Colors</h4>
                     <form role="form">
                       <ul class="list-inline">
                         <li>
                             <p>Violet</p>
                                <div > <input type="checkbox" checked></div>
                          </li>
                           <li>
                             <p>Black</p>
                            <div> <input type="checkbox"  /></div>
                          </li>
                          <li>
                             <p>Blue</p>
                               <div ><input type="checkbox"/></div>
                          </li>
                          <li>
                             <p>Red</p>
                                 <div> <input type="checkbox"/></div>
                          </li>
                       </ul>
                     </form>
                  </div>
                  <br />
                   <div class="">
                       <h2>Size <small>Please select one</small></h2>
                       <ul class="list-inline">
                          <li>
                             <button type="button" class="btn btn-default btn-xs">Medium</button>
                          </li>
                          <li>
                             <button type="button" class="btn btn-default btn-xs">Large</button>
                          </li>
                       </ul>
                    </div>
                    <br />

                    <div class="">
                       <div class="product_price">
                          <h1 class="price">Php 1,590.00</h1>
                       </div>
                    </div>

                    <div class="">
                       <button type="button" class="btn btn-warning btn-lg">Add to Cart</button>
                       <button type="button" class="btn btn-warning btn-lg">Add to Wishlist</button>
                    </div>
             </div>
            </div>

                        <hr>
            <h3>Feature</h3>
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_aaa" data-toggle="tab">DOMINATE THE GAME WITH COMFORT</a></li>
              <li><a href="#tab_bbb" data-toggle="tab">CUSTOMIZATION TO THE MAX</a></li>
              <li><a href="#tab_ccc" data-toggle="tab">DURABILITY AND STYLE TO MATCH</a></li>
            </ul>
            <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab_aaa">
                        <p>Offering perfect speed in game with on-the-fly sensitivity (between 800/1200/1600/2400 DPI).</p>
                    </div>
                    <div class="tab-pane fade" id="tab_bbb">
                        <p>Customize the METALLIC with 7 separate color options, a weight-in system for weight configuration, and up to 40 customizable macro key settings via the METALLIC software.</p>
                    </div>
                    <div class="tab-pane fade" id="tab_ccc">
                        <p>Sturdy construction and OMRON switches make this mouse the best of your desktop. With a life cycle of 50 million clicks and a braided cable, the METALLIC mouse plans to compete as long as you do.</p>
                    </div>
            </div><!-- tab content -->
<!-- DITONAAKO -->
            <div class="row">
            <div class="col-sm-12">
               <div class="" role="tabpanel">
                  <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                     <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">REMOVABLE SIDE PANELS</a>
                     </li>
                     <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">6 COLOR CYCLING EFFECT</a>
                     </li>
                      <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab"  aria-expanded="false">AVAGO 3050 OPTICAL SENSOR</a>
                     </li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                     <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                        <p>The TAANOX gaming mouse features removable side panels, so that users may further adjust the shape of the mouse to their liking.</p>
                     </div>
                     <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                            <p>The TAANOX changes it up from traditional lighting setups,with lighting accents throughout the mouse body as well as a 6 color cycling effect lighting system that cycles through the colors red, orange, yellow, blue , dark blue, and purple respectively.
                            [To lock the lighting system to one color]: when the lighting cycles to the desired color, click the mouse wheel (mouse3) and press the DPI adjustment button simultaneously. Repeat to unlock.
                            [To turn lighting system on/off]: press left click (mouse1) + DPI adjustment button simultaneously.</p>
                     </div>
                     <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                        <p>The AVAGO 3050 Optical sensor found inside the TAANOX gaming mouse offers up to sensitivity up to 3000 DPI. The sensor is very accurate in precision, has no prediction, and has a high perfect control speed (meaning even low sens. users who rely on very fast movement will still have perfect tracking).</p>
                     </div>
                  </div>
               </div>
            </div>
            </div>
         </section>
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
     </div>
    </div>

  </div>
</div>

<div id="ventox" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
     <div class="modal-header  modal-info">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title">Combat White</h4>
     </div>
     <div class="modal-body">
         <section>
            <div class="row">
             <div class="col-sm-6">
                 <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     <!-- Indicators -->
                     <ol class="carousel-indicators">
                       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                       <li data-target="#myCarousel" data-slide-to="1"></li>
                       <li data-target="#myCarousel" data-slide-to="2"></li>
                       <li data-target="#myCarousel" data-slide-to="3"></li>
                       <li data-target="#myCarousel" data-slide-to="4"></li>
                     </ol>

                     <!-- Wrapper for slides -->
                     <div class="carousel-inner">
                       <div class="item active">
                      <img src="../img/products/mouse/Ventox.jpg"  class="img-rounded"  id="img1" alt="Thaanox1" width="550" height="450">
                       </div>

                       <div class="item">
                        <img src="../img/products/mouse/Ventox2.jpg"  class="img-rounded" alt="Thaanox2" width="550" height="450">
                       </div>

                       <div class="item">
                        <img src="../img/products/mouse/Ventox3.jpg"  class="img-rounded" alt="Volos3" width="550" height="450">
                       </div>

                       <div class="item">
                        <img src="../img/products/mouse/Ventox4.jpg"  class="img-rounded" alt="Volos4" width="550" height="450">
                       </div>
                        <div class="item">
                        <img src="../img/products/mouse/Ventox1.jpg"  class="img-rounded" alt="Volos5" width="550" height="450">
                       </div>
                     </div>
                 </div>
                <div class="product_gallery">
                 <ul class="list-inline">
                  <li>
                    <a data-target="#img1" data-toggle="carousel-indicators">
                       <img src="../img/products/mouse/Ventox.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100" />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/mouse/Ventox2.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100"  />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/mouse/Ventox3.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100"  />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/mouse/Ventox4.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100" />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/mouse/Ventox1.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100" />
                    </a>
                    </li>
                  </ul>
                </div>
             </div><!-- col-sm-6 -->
             <div class="col-sm-6">
               <h2>Combat White</h2>
               <p>The TALON gaming mouse features an AVAGO 3050 optical sensor, with up to 3000 DPI, and a unique 6 color cycling effect lighting system. It offers good stability and accuracy via great tracking precision and a high max speed.The TALON has an ergonomic, ambidextrous shape, making it great for both left and right handed users.</p> <br>
                  <div class="">
                     <h4>Available Colors</h4>
                     <form role="form">
                       <ul class="list-inline">
                         <li>
                             <p>Violet</p>
                                <div > <input type="checkbox" checked></div>
                          </li>
                           <li>
                             <p>Black</p>
                            <div> <input type="checkbox"  /></div>
                          </li>
                          <li>
                             <p>Blue</p>
                               <div ><input type="checkbox"/></div>
                          </li>
                          <li>
                             <p>Red</p>
                                 <div> <input type="checkbox"/></div>
                          </li>
                       </ul>
                     </form>
                  </div>
                  <br />
                   <div class="">
                       <h2>Size <small>Please select one</small></h2>
                       <ul class="list-inline">
                          <li>
                             <button type="button" class="btn btn-default btn-xs">Medium</button>
                          </li>
                          <li>
                             <button type="button" class="btn btn-default btn-xs">Large</button>
                          </li>
                       </ul>
                    </div>
                    <br />

                    <div class="">
                       <div class="product_price">
                          <h1 class="price">Php 1,590.00</h1>
                       </div>
                    </div>

                    <div class="">
                       <button type="button" class="btn btn-warning btn-lg">Add to Cart</button>
                       <button type="button" class="btn btn-warning btn-lg">Add to Wishlist</button>
                    </div>
             </div>
            </div>
            <div class="row">
            <div class="col-sm-12">
               <div class="" role="tabpanel">
                  <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                     <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">REMOVABLE SIDE PANELS</a>
                     </li>
                     <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">6 COLOR CYCLING EFFECT</a>
                     </li>
                      <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab"  aria-expanded="false">AVAGO 3050 OPTICAL SENSOR</a>
                     </li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                     <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                        <p>The TAANOX gaming mouse features removable side panels, so that users may further adjust the shape of the mouse to their liking.</p>
                     </div>
                     <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                            <p>The TAANOX changes it up from traditional lighting setups,with lighting accents throughout the mouse body as well as a 6 color cycling effect lighting system that cycles through the colors red, orange, yellow, blue , dark blue, and purple respectively.
                            [To lock the lighting system to one color]: when the lighting cycles to the desired color, click the mouse wheel (mouse3) and press the DPI adjustment button simultaneously. Repeat to unlock.
                            [To turn lighting system on/off]: press left click (mouse1) + DPI adjustment button simultaneously.</p>
                     </div>
                     <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                        <p>The AVAGO 3050 Optical sensor found inside the TAANOX gaming mouse offers up to sensitivity up to 3000 DPI. The sensor is very accurate in precision, has no prediction, and has a high perfect control speed (meaning even low sens. users who rely on very fast movement will still have perfect tracking).</p>
                     </div>
                  </div>
               </div>
            </div>
            </div>
         </section>
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
     </div>
    </div>

  </div>
</div>

<!-- Keyboard Modal -->
<div id="admiral" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
     <div class="modal-header  modal-info">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title">Admiral</h4>
     </div>
     <div class="modal-body">
         <section>
            <div class="row">
             <div class="col-sm-6">
                 <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     <!-- Indicators -->
                     <ol class="carousel-indicators">
                       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                       <li data-target="#myCarousel" data-slide-to="1"></li>
                       <li data-target="#myCarousel" data-slide-to="2"></li>
                       <li data-target="#myCarousel" data-slide-to="3"></li>
                       <li data-target="#myCarousel" data-slide-to="4"></li>
                     </ol>

                     <!-- Wrapper for slides -->
                     <div class="carousel-inner">
                       <div class="item active">
                      <img src="../img/products/keyboard/Admiral1.jpg"  class="img-rounded"  id="img1" alt="Thaanox1" width="550" height="450">
                       </div>

                       <div class="item">
                        <img src="../img/products/keyboard/Admiral2.jpg"  class="img-rounded" alt="Thaanox2" width="550" height="450">
                       </div>

                       <div class="item">
                        <img src="../img/products/keyboard/Admiral3.jpg"  class="img-rounded" alt="Volos3" width="550" height="450">
                       </div>

                       <div class="item">
                        <img src="../img/products/keyboard/Admiral4.jpg"  class="img-rounded" alt="Volos4" width="550" height="450">
                       </div>
                     </div>
                 </div>
                <div class="product_gallery">
                 <ul class="list-inline">
                  <li>
                    <a data-target="#img1" data-toggle="carousel-indicators">
                       <img src="../img/products/keyboard/Admiral1.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100" />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/keyboard/Admiral2.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100"  />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/keyboard/Admiral3.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100"  />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/keyboard/Admiral4.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100" />
                    </a>
                    </li>
                  </ul>
                </div>
             </div><!-- col-sm-6 -->
             <div class="col-sm-6">
               <h2>Admiral</h2>
               <p>The TALON gaming mouse features an AVAGO 3050 optical sensor, with up to 3000 DPI, and a unique 6 color cycling effect lighting system. It offers good stability and accuracy via great tracking precision and a high max speed.The TALON has an ergonomic, ambidextrous shape, making it great for both left and right handed users.</p> <br>
                  <div class="">
                     <h4>Available Colors</h4>
                     <form role="form">
                       <ul class="list-inline">
                         <li>
                             <p>Violet</p>
                                <div > <input type="checkbox" checked></div>
                          </li>
                           <li>
                             <p>Black</p>
                            <div> <input type="checkbox"  /></div>
                          </li>
                          <li>
                             <p>Blue</p>
                               <div ><input type="checkbox"/></div>
                          </li>
                          <li>
                             <p>Red</p>
                                 <div> <input type="checkbox"/></div>
                          </li>
                       </ul>
                     </form>
                  </div>
                  <br />
                   <div class="">
                       <h2>Size <small>Please select one</small></h2>
                       <ul class="list-inline">
                          <li>
                             <button type="button" class="btn btn-default btn-xs">Medium</button>
                          </li>
                          <li>
                             <button type="button" class="btn btn-default btn-xs">Large</button>
                          </li>
                       </ul>
                    </div>
                    <br />

                    <div class="">
                       <div class="product_price">
                          <h1 class="price">Php 1,590.00</h1>
                       </div>
                    </div>

                    <div class="">
                       <button type="button" class="btn btn-warning btn-lg">Add to Cart</button>
                       <button type="button" class="btn btn-warning btn-lg">Add to Wishlist</button>
                    </div>
             </div>
            </div>
            <div class="row">
            <div class="col-sm-12">
               <div class="" role="tabpanel">
                  <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                     <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">REMOVABLE SIDE PANELS</a>
                     </li>
                     <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">6 COLOR CYCLING EFFECT</a>
                     </li>
                      <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab"  aria-expanded="false">AVAGO 3050 OPTICAL SENSOR</a>
                     </li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                     <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                        <p>The TAANOX gaming mouse features removable side panels, so that users may further adjust the shape of the mouse to their liking.</p>
                     </div>
                     <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                            <p>The TAANOX changes it up from traditional lighting setups,with lighting accents throughout the mouse body as well as a 6 color cycling effect lighting system that cycles through the colors red, orange, yellow, blue , dark blue, and purple respectively.
                            [To lock the lighting system to one color]: when the lighting cycles to the desired color, click the mouse wheel (mouse3) and press the DPI adjustment button simultaneously. Repeat to unlock.
                            [To turn lighting system on/off]: press left click (mouse1) + DPI adjustment button simultaneously.</p>
                     </div>
                     <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                        <p>The AVAGO 3050 Optical sensor found inside the TAANOX gaming mouse offers up to sensitivity up to 3000 DPI. The sensor is very accurate in precision, has no prediction, and has a high perfect control speed (meaning even low sens. users who rely on very fast movement will still have perfect tracking).</p>
                     </div>
                  </div>
               </div>
            </div>
            </div>
         </section>
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
     </div>
    </div>

  </div>
</div>

<div id="commander" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
     <div class="modal-header  modal-info">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title">Commander</h4>
     </div>
     <div class="modal-body">
         <section>
            <div class="row">
             <div class="col-sm-6">
                 <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     <!-- Indicators -->
                     <ol class="carousel-indicators">
                       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                       <li data-target="#myCarousel" data-slide-to="1"></li>
                       <li data-target="#myCarousel" data-slide-to="2"></li>
                       <li data-target="#myCarousel" data-slide-to="3"></li>
                       <li data-target="#myCarousel" data-slide-to="4"></li>
                     </ol>

                     <!-- Wrapper for slides -->
                     <div class="carousel-inner">
                       <div class="item active">
                      <img src="../img/products/keyboard/Commander.jpg"  class="img-rounded"  id="img1" alt="Thaanox1" width="550" height="450">
                       </div>

                       <div class="item">
                        <img src="../img/products/keyboard/Commander2.jpg"  class="img-rounded" alt="Thaanox2" width="550" height="450">
                       </div>

                       <div class="item">
                        <img src="../img/products/keyboard/Commander3.jpg"  class="img-rounded" alt="Volos3" width="550" height="450">
                       </div>

                       <div class="item">
                        <img src="../img/products/keyboard/Commander4.jpg"  class="img-rounded" alt="Volos4" width="550" height="450">
                       </div>
                       <div class="item">
                        <img src="../img/products/keyboard/Commander5.jpg"  class="img-rounded" alt="Volos4" width="550" height="450">
                       </div>
                     </div>
                 </div>
                <div class="product_gallery">
                 <ul class="list-inline">
                  <li>
                    <a data-target="#img1" data-toggle="carousel-indicators">
                       <img src="../img/products/keyboard/Commander.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100" />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/keyboard/Commander2.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100"  />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/keyboard/Commander3.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100"  />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/keyboard/Commander4.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100" />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/keyboard/Commander5.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100" />
                    </a>
                    </li>
                  </ul>
                </div>
             </div><!-- col-sm-6 -->
             <div class="col-sm-6">
               <h2>COMMANDER Gaming Gear Combo</h2>
               <p>The COMMANDER – Gaming Gear Combo – the stunning combo with enhancements on its keyboard and mouse specifications. Providing great features on what gamers need and make them true leaders that will take command of the game. The COMMANDER Combo features Plunger Switch with the same design of Mechanical key cap, gives users an awesome tactile feel and pleasing click with each keystroke plus presenting response feeling like a mechanical switch that surely improve users’ gaming performance by giving users speed and responsiveness like never before.</p> <br>
                  <div class="">
                     <h4>Available Colors</h4>
                     <form role="form">
                       <ul class="list-inline">
                         <li>
                             <p>Violet</p>
                                <div > <input type="checkbox" checked></div>
                          </li>
                           <li>
                             <p>Black</p>
                            <div> <input type="checkbox"  /></div>
                          </li>
                          <li>
                             <p>Blue</p>
                               <div ><input type="checkbox"/></div>
                          </li>
                          <li>
                             <p>Red</p>
                                 <div> <input type="checkbox"/></div>
                          </li>
                       </ul>
                     </form>
                  </div>
                  <br />
                   <div class="">
                       <h2>Size <small>Please select one</small></h2>
                       <ul class="list-inline">
                          <li>
                             <button type="button" class="btn btn-default btn-xs">Medium</button>
                          </li>
                          <li>
                             <button type="button" class="btn btn-default btn-xs">Large</button>
                          </li>
                       </ul>
                    </div>
                    <br />

                    <div class="">
                       <div class="product_price">
                          <h1 class="price">Php 1,590.00</h1>
                       </div>
                    </div>

                    <div class="">
                       <button type="button" class="btn btn-warning btn-lg">Add to Cart</button>
                       <button type="button" class="btn btn-warning btn-lg">Add to Wishlist</button>
                    </div>
             </div>
            </div>
            <div class="row">
            <div class="col-sm-12">
               <div class="" role="tabpanel">
                  <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                     <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">TOUGH METAL-LOOK EDGES!</a>
                     </li>
                     <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">TACTILE FEEL PLUNGER SWITCHES</a>
                     </li>
                      <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab"  aria-expanded="false">REPLACEABLE METALCAPS</a>
                     </li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                     <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                        <p>The Commander was designed with metal-looking edges which symbolizes its powerful spirit as a true leader. The splendid look with blue illumination designed to have a feel of trendy whenever you commanding it.</p>
                     </div>
                     <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                            <p>The COMMANDER uses Plunger Switches with Mechanical keycaps giving users an awesome tactile feel and clicks with each keystroke while giving responsive feeling like using a mechanical switch keyboard. This will improve gaming performance by giving users speed and responsiveness like never before.</p>
                     </div>
                     <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                        <p>COMMANDER's keycaps can be replaced to our Varchar Metalcaps (not included with COMMANDER COMBO) to provide a tougher, more resolute feel to key presses and offer users a fun way to customize their keyboards with a metallic feel and deliver a unique user experience!
                        NOTE: METALCAPS are not included.</p>
                     </div>
                  </div>
               </div>
            </div>
            </div>
         </section>
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
     </div>
    </div>

  </div>
</div>

<div id="mekag1combat" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
     <div class="modal-header  modal-info">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title">Meka G1-Combat</h4>
     </div>
     <div class="modal-body">
         <section>
            <div class="row">
             <div class="col-sm-6">
                 <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     <!-- Indicators -->
                     <ol class="carousel-indicators">
                       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                       <li data-target="#myCarousel" data-slide-to="1"></li>
                       <li data-target="#myCarousel" data-slide-to="2"></li>
                       <li data-target="#myCarousel" data-slide-to="3"></li>
                       <li data-target="#myCarousel" data-slide-to="4"></li>
                     </ol>

                     <!-- Wrapper for slides -->
                     <div class="carousel-inner">
                       <div class="item active">
                      <img src="../img/products/keyboard/Meka-G1-Combat.jpg"  class="img-rounded"  id="img1" alt="Thaanox1" width="550" height="450">
                       </div>

                       <div class="item">
                        <img src="../img/products/keyboard/Meka-G1-Combat2.jpg"  class="img-rounded" alt="Thaanox2" width="550" height="450">
                       </div>

                       <div class="item">
                        <img src="../img/products/keyboard/Meka-G1-Combat3.jpg"  class="img-rounded" alt="Volos3" width="550" height="450">
                       </div>

                       <div class="item">
                        <img src="../img/products/keyboard/Meka-G1-Combat1.jpg"  class="img-rounded" alt="Volos4" width="550" height="450">
                       </div>
                     </div>
                 </div>
                <div class="product_gallery">
                 <ul class="list-inline">
                  <li>
                    <a data-target="#img1" data-toggle="carousel-indicators">
                       <img src="../img/products/keyboard/Meka-G1-Combat.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100" />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/keyboard/Meka-G1-Combat1.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100"  />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/keyboard/Meka-G1-Combat2.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100"  />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/keyboard/Meka-G1-Combat3.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100" />
                    </a>
                    </li>
                  </ul>
                </div>
             </div><!-- col-sm-6 -->
             <div class="col-sm-6">
               <h2>Meka-G1-Combat</h2>
               <p>The TALON gaming mouse features an AVAGO 3050 optical sensor, with up to 3000 DPI, and a unique 6 color cycling effect lighting system. It offers good stability and accuracy via great tracking precision and a high max speed.The TALON has an ergonomic, ambidextrous shape, making it great for both left and right handed users.</p> <br>
                  <div class="">
                     <h4>Available Colors</h4>
                     <form role="form">
                       <ul class="list-inline">
                         <li>
                             <p>Violet</p>
                                <div > <input type="checkbox" checked></div>
                          </li>
                           <li>
                             <p>Black</p>
                            <div> <input type="checkbox"  /></div>
                          </li>
                          <li>
                             <p>Blue</p>
                               <div ><input type="checkbox"/></div>
                          </li>
                          <li>
                             <p>Red</p>
                                 <div> <input type="checkbox"/></div>
                          </li>
                       </ul>
                     </form>
                  </div>
                  <br />
                   <div class="">
                       <h2>Size <small>Please select one</small></h2>
                       <ul class="list-inline">
                          <li>
                             <button type="button" class="btn btn-default btn-xs">Medium</button>
                          </li>
                          <li>
                             <button type="button" class="btn btn-default btn-xs">Large</button>
                          </li>
                       </ul>
                    </div>
                    <br />

                    <div class="">
                       <div class="product_price">
                          <h1 class="price">Php 1,590.00</h1>
                       </div>
                    </div>

                    <div class="">
                       <button type="button" class="btn btn-warning btn-lg">Add to Cart</button>
                       <button type="button" class="btn btn-warning btn-lg">Add to Wishlist</button>
                    </div>
             </div>
            </div>
            <div class="row">
            <div class="col-sm-12">
               <div class="" role="tabpanel">
                  <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                     <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">REMOVABLE SIDE PANELS</a>
                     </li>
                     <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">6 COLOR CYCLING EFFECT</a>
                     </li>
                      <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab"  aria-expanded="false">AVAGO 3050 OPTICAL SENSOR</a>
                     </li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                     <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                        <p>The TAANOX gaming mouse features removable side panels, so that users may further adjust the shape of the mouse to their liking.</p>
                     </div>
                     <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                            <p>The TAANOX changes it up from traditional lighting setups,with lighting accents throughout the mouse body as well as a 6 color cycling effect lighting system that cycles through the colors red, orange, yellow, blue , dark blue, and purple respectively.
                            [To lock the lighting system to one color]: when the lighting cycles to the desired color, click the mouse wheel (mouse3) and press the DPI adjustment button simultaneously. Repeat to unlock.
                            [To turn lighting system on/off]: press left click (mouse1) + DPI adjustment button simultaneously.</p>
                     </div>
                     <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                        <p>The AVAGO 3050 Optical sensor found inside the TAANOX gaming mouse offers up to sensitivity up to 3000 DPI. The sensor is very accurate in precision, has no prediction, and has a high perfect control speed (meaning even low sens. users who rely on very fast movement will still have perfect tracking).</p>
                     </div>
                  </div>
               </div>
            </div>
            </div>
         </section>
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
     </div>
    </div>

  </div>
</div>

<div id="persassius" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
     <div class="modal-header  modal-info">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title">Admiral</h4>
     </div>
     <div class="modal-body">
         <section>
            <div class="row">
             <div class="col-sm-6">
                 <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     <!-- Indicators -->
                     <ol class="carousel-indicators">
                       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                       <li data-target="#myCarousel" data-slide-to="1"></li>
                       <li data-target="#myCarousel" data-slide-to="2"></li>
                       <li data-target="#myCarousel" data-slide-to="3"></li>
                       <li data-target="#myCarousel" data-slide-to="4"></li>
                     </ol>

                     <!-- Wrapper for slides -->
                     <div class="carousel-inner">
                       <div class="item active">
                      <img src="../img/products/keyboard/Persassius1.jpg"  class="img-rounded"  id="img1" alt="Thaanox1" width="550" height="450">
                       </div>

                       <div class="item">
                        <img src="../img/products/keyboard/Persassius2.jpg"  class="img-rounded" alt="Thaanox2" width="550" height="450">
                       </div>

                       <div class="item">
                        <img src="../img/products/keyboard/Persassius3.jpg"  class="img-rounded" alt="Volos3" width="550" height="450">
                       </div>

                       <div class="item">
                        <img src="../img/products/keyboard/Persassius4.jpg"  class="img-rounded" alt="Volos4" width="550" height="450">
                       </div>
                     </div>
                 </div>
                <div class="product_gallery">
                 <ul class="list-inline">
                  <li>
                    <a data-target="#img1" data-toggle="carousel-indicators">
                       <img src="../img/products/keyboard/Persassius1.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100" />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/keyboard/Persassius2.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100"  />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/keyboard/Persassius3.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100"  />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/keyboard/Persassius4.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100" />
                    </a>
                    </li>
                  </ul>
                </div>
             </div><!-- col-sm-6 -->
             <div class="col-sm-6">
               <h2>Persassius</h2>
               <p>The TALON gaming mouse features an AVAGO 3050 optical sensor, with up to 3000 DPI, and a unique 6 color cycling effect lighting system. It offers good stability and accuracy via great tracking precision and a high max speed.The TALON has an ergonomic, ambidextrous shape, making it great for both left and right handed users.</p> <br>
                  <div class="">
                     <h4>Available Colors</h4>
                     <form role="form">
                       <ul class="list-inline">
                         <li>
                             <p>Violet</p>
                                <div > <input type="checkbox" checked></div>
                          </li>
                           <li>
                             <p>Black</p>
                            <div> <input type="checkbox"  /></div>
                          </li>
                          <li>
                             <p>Blue</p>
                               <div ><input type="checkbox"/></div>
                          </li>
                          <li>
                             <p>Red</p>
                                 <div> <input type="checkbox"/></div>
                          </li>
                       </ul>
                     </form>
                  </div>
                  <br />
                   <div class="">
                       <h2>Size <small>Please select one</small></h2>
                       <ul class="list-inline">
                          <li>
                             <button type="button" class="btn btn-default btn-xs">Medium</button>
                          </li>
                          <li>
                             <button type="button" class="btn btn-default btn-xs">Large</button>
                          </li>
                       </ul>
                    </div>
                    <br />

                    <div class="">
                       <div class="product_price">
                          <h1 class="price">Php 1,590.00</h1>
                       </div>
                    </div>

                    <div class="">
                       <button type="button" class="btn btn-warning btn-lg">Add to Cart</button>
                       <button type="button" class="btn btn-warning btn-lg">Add to Wishlist</button>
                    </div>
             </div>
            </div>
            <div class="row">
            <div class="col-sm-12">
               <div class="" role="tabpanel">
                  <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                     <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">REMOVABLE SIDE PANELS</a>
                     </li>
                     <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">6 COLOR CYCLING EFFECT</a>
                     </li>
                      <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab"  aria-expanded="false">AVAGO 3050 OPTICAL SENSOR</a>
                     </li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                     <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                        <p>The TAANOX gaming mouse features removable side panels, so that users may further adjust the shape of the mouse to their liking.</p>
                     </div>
                     <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                            <p>The TAANOX changes it up from traditional lighting setups,with lighting accents throughout the mouse body as well as a 6 color cycling effect lighting system that cycles through the colors red, orange, yellow, blue , dark blue, and purple respectively.
                            [To lock the lighting system to one color]: when the lighting cycles to the desired color, click the mouse wheel (mouse3) and press the DPI adjustment button simultaneously. Repeat to unlock.
                            [To turn lighting system on/off]: press left click (mouse1) + DPI adjustment button simultaneously.</p>
                     </div>
                     <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                        <p>The AVAGO 3050 Optical sensor found inside the TAANOX gaming mouse offers up to sensitivity up to 3000 DPI. The sensor is very accurate in precision, has no prediction, and has a high perfect control speed (meaning even low sens. users who rely on very fast movement will still have perfect tracking).</p>
                     </div>
                  </div>
               </div>
            </div>
            </div>
         </section>
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
     </div>
    </div>

  </div>
</div>

<div id="mekag1" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
     <div class="modal-header  modal-info">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title">Meka-G1</h4>
     </div>
     <div class="modal-body">
         <section>
            <div class="row">
             <div class="col-sm-6">
                 <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     <!-- Indicators -->
                     <ol class="carousel-indicators">
                       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                       <li data-target="#myCarousel" data-slide-to="1"></li>
                       <li data-target="#myCarousel" data-slide-to="2"></li>
                       <li data-target="#myCarousel" data-slide-to="3"></li>
                       <li data-target="#myCarousel" data-slide-to="4"></li>
                     </ol>

                     <!-- Wrapper for slides -->
                     <div class="carousel-inner">
                       <div class="item active">
                      <img src="../img/products/keyboard/Meka-G1.jpg"  class="img-rounded"  id="img1" alt="Thaanox1" width="550" height="450">
                       </div>

                       <div class="item">
                        <img src="../img/products/keyboard/Meka-G.jpg"  class="img-rounded" alt="Thaanox2" width="550" height="450">
                       </div>

                       <div class="item">
                        <img src="../img/products/keyboard/Meka-G2.jpg"  class="img-rounded" alt="Volos3" width="550" height="450">
                       </div>

                       <div class="item">
                        <img src="../img/products/keyboard/Meka-G3.jpg"  class="img-rounded" alt="Volos4" width="550" height="450">
                       </div>
                       <div class="item">
                        <img src="../img/products/keyboard/Meka-G4.jpg"  class="img-rounded" alt="Volos4" width="550" height="450">
                       </div>
                     </div>
                 </div>
                <div class="product_gallery">
                 <ul class="list-inline">
                  <li>
                    <a data-target="#img1" data-toggle="carousel-indicators">
                       <img src="../img/products/keyboard/Meka-G1.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100" />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/keyboard/Meka-G.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100"  />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/keyboard/Meka-G2.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100"  />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/keyboard/Meka-G3.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100" />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/keyboard/Meka-G4.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100" />
                    </a>
                    </li>
                  </ul>
                </div>
             </div><!-- col-sm-6 -->
             <div class="col-sm-6">
               <h2>Meka-G1</h2>
               <p>The TALON gaming mouse features an AVAGO 3050 optical sensor, with up to 3000 DPI, and a unique 6 color cycling effect lighting system. It offers good stability and accuracy via great tracking precision and a high max speed.The TALON has an ergonomic, ambidextrous shape, making it great for both left and right handed users.</p> <br>
                  <div class="">
                     <h4>Available Colors</h4>
                     <form role="form">
                       <ul class="list-inline">
                         <li>
                             <p>Violet</p>
                                <div > <input type="checkbox" checked></div>
                          </li>
                           <li>
                             <p>Black</p>
                            <div> <input type="checkbox"  /></div>
                          </li>
                          <li>
                             <p>Blue</p>
                               <div ><input type="checkbox"/></div>
                          </li>
                          <li>
                             <p>Red</p>
                                 <div> <input type="checkbox"/></div>
                          </li>
                       </ul>
                     </form>
                  </div>
                  <br />
                   <div class="">
                       <h2>Size <small>Please select one</small></h2>
                       <ul class="list-inline">
                          <li>
                             <button type="button" class="btn btn-default btn-xs">Medium</button>
                          </li>
                          <li>
                             <button type="button" class="btn btn-default btn-xs">Large</button>
                          </li>
                       </ul>
                    </div>
                    <br />

                    <div class="">
                       <div class="product_price">
                          <h1 class="price">Php 1,590.00</h1>
                       </div>
                    </div>

                    <div class="">
                       <button type="button" class="btn btn-warning btn-lg">Add to Cart</button>
                       <button type="button" class="btn btn-warning btn-lg">Add to Wishlist</button>
                    </div>
             </div>
            </div>
            <div class="row">
            <div class="col-sm-12">
               <div class="" role="tabpanel">
                  <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                     <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">REMOVABLE SIDE PANELS</a>
                     </li>
                     <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">6 COLOR CYCLING EFFECT</a>
                     </li>
                      <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab"  aria-expanded="false">AVAGO 3050 OPTICAL SENSOR</a>
                     </li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                     <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                        <p>The TAANOX gaming mouse features removable side panels, so that users may further adjust the shape of the mouse to their liking.</p>
                     </div>
                     <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                            <p>The TAANOX changes it up from traditional lighting setups,with lighting accents throughout the mouse body as well as a 6 color cycling effect lighting system that cycles through the colors red, orange, yellow, blue , dark blue, and purple respectively.
                            [To lock the lighting system to one color]: when the lighting cycles to the desired color, click the mouse wheel (mouse3) and press the DPI adjustment button simultaneously. Repeat to unlock.
                            [To turn lighting system on/off]: press left click (mouse1) + DPI adjustment button simultaneously.</p>
                     </div>
                     <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                        <p>The AVAGO 3050 Optical sensor found inside the TAANOX gaming mouse offers up to sensitivity up to 3000 DPI. The sensor is very accurate in precision, has no prediction, and has a high perfect control speed (meaning even low sens. users who rely on very fast movement will still have perfect tracking).</p>
                     </div>
                  </div>
               </div>
            </div>
            </div>
         </section>
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
     </div>
    </div>

  </div>
</div>

<div id="horus" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
     <div class="modal-header  modal-info">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title">Horus</h4>
     </div>
     <div class="modal-body">
         <section>
            <div class="row">
             <div class="col-sm-6">
                 <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     <!-- Indicators -->
                     <ol class="carousel-indicators">
                       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                       <li data-target="#myCarousel" data-slide-to="1"></li>
                       <li data-target="#myCarousel" data-slide-to="2"></li>
                       <li data-target="#myCarousel" data-slide-to="3"></li>
                       <li data-target="#myCarousel" data-slide-to="4"></li>
                     </ol>

                     <!-- Wrapper for slides -->
                     <div class="carousel-inner">
                       <div class="item active">
                      <img src="../img/products/keyboard/Horus1.jpg"  class="img-rounded"  id="img1" alt="Thaanox1" width="550" height="450">
                       </div>

                       <div class="item">
                        <img src="../img/products/keyboard/Horus2.jpg"  class="img-rounded" alt="Thaanox2" width="550" height="450">
                       </div>

                       <div class="item">
                        <img src="../img/products/keyboard/Horus3.jpg"  class="img-rounded" alt="Volos3" width="550" height="450">
                       </div>

                       <div class="item">
                        <img src="../img/products/keyboard/Horus4.jpg"  class="img-rounded" alt="Volos4" width="550" height="450">
                       </div>
                     </div>
                 </div>
                <div class="product_gallery">
                 <ul class="list-inline">
                  <li>
                    <a data-target="#img1" data-toggle="carousel-indicators">
                       <img src="../img/products/keyboard/Horus1.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100" />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/keyboard/Horus2.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100"  />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/keyboard/Horus3.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100"  />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/keyboard/Horus4.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100" />
                    </a>
                    </li>
                  </ul>
                </div>
             </div><!-- col-sm-6 -->
             <div class="col-sm-6">
               <h2>Horus</h2>
               <p>The TALON gaming mouse features an AVAGO 3050 optical sensor, with up to 3000 DPI, and a unique 6 color cycling effect lighting system. It offers good stability and accuracy via great tracking precision and a high max speed.The TALON has an ergonomic, ambidextrous shape, making it great for both left and right handed users.</p> <br>
                  <div class="">
                     <h4>Available Colors</h4>
                     <form role="form">
                       <ul class="list-inline">
                         <li>
                             <p>Violet</p>
                                <div > <input type="checkbox" checked></div>
                          </li>
                           <li>
                             <p>Black</p>
                            <div> <input type="checkbox"  /></div>
                          </li>
                          <li>
                             <p>Blue</p>
                               <div ><input type="checkbox"/></div>
                          </li>
                          <li>
                             <p>Red</p>
                                 <div> <input type="checkbox"/></div>
                          </li>
                       </ul>
                     </form>
                  </div>
                  <br />
                   <div class="">
                       <h2>Size <small>Please select one</small></h2>
                       <ul class="list-inline">
                          <li>
                             <button type="button" class="btn btn-default btn-xs">Medium</button>
                          </li>
                          <li>
                             <button type="button" class="btn btn-default btn-xs">Large</button>
                          </li>
                       </ul>
                    </div>
                    <br />

                    <div class="">
                       <div class="product_price">
                          <h1 class="price">Php 1,590.00</h1>
                       </div>
                    </div>

                    <div class="">
                       <button type="button" class="btn btn-warning btn-lg">Add to Cart</button>
                       <button type="button" class="btn btn-warning btn-lg">Add to Wishlist</button>
                    </div>
             </div>
            </div>
            <div class="row">
            <div class="col-sm-12">
               <div class="" role="tabpanel">
                  <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                     <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">REMOVABLE SIDE PANELS</a>
                     </li>
                     <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">6 COLOR CYCLING EFFECT</a>
                     </li>
                      <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab"  aria-expanded="false">AVAGO 3050 OPTICAL SENSOR</a>
                     </li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                     <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                        <p>The TAANOX gaming mouse features removable side panels, so that users may further adjust the shape of the mouse to their liking.</p>
                     </div>
                     <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                            <p>The TAANOX changes it up from traditional lighting setups,with lighting accents throughout the mouse body as well as a 6 color cycling effect lighting system that cycles through the colors red, orange, yellow, blue , dark blue, and purple respectively.
                            [To lock the lighting system to one color]: when the lighting cycles to the desired color, click the mouse wheel (mouse3) and press the DPI adjustment button simultaneously. Repeat to unlock.
                            [To turn lighting system on/off]: press left click (mouse1) + DPI adjustment button simultaneously.</p>
                     </div>
                     <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                        <p>The AVAGO 3050 Optical sensor found inside the TAANOX gaming mouse offers up to sensitivity up to 3000 DPI. The sensor is very accurate in precision, has no prediction, and has a high perfect control speed (meaning even low sens. users who rely on very fast movement will still have perfect tracking).</p>
                     </div>
                  </div>
               </div>
            </div>
            </div>
         </section>
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
     </div>
    </div>

  </div>
</div>

<!-- Mouse Pad -->
<div id="drakkon" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
     <div class="modal-header  modal-info">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title">Draconem Aluminum</h4>
     </div>
     <div class="modal-body">
         <section>
            <div class="row">
             <div class="col-sm-6">
                 <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     <!-- Indicators -->
                     <ol class="carousel-indicators">
                       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                       <li data-target="#myCarousel" data-slide-to="1"></li>
                       <li data-target="#myCarousel" data-slide-to="2"></li>
                       <li data-target="#myCarousel" data-slide-to="3"></li>
                       <li data-target="#myCarousel" data-slide-to="4"></li>
                     </ol>

                     <!-- Wrapper for slides -->
                     <div class="carousel-inner">
                        <div class="item active">
                        <img src="../img/products/mousepad/Drakkon1.jpg"  class="img-rounded"  id="img1" alt="Thaanox1" width="550" height="450">
                        </div>

                        <div class="item">
                          <img src="../img/products/mousepad/Drakkon2.jpg"  class="img-rounded" alt="Thaanox2" width="550" height="450">
                        </div>

                        <div class="item">
                          <img src="../img/products/mousepad/Drakkon3.jpg"  class="img-rounded" alt="Volos3" width="550" height="450">
                        </div>

                        <div class="item">
                          <img src="../img/products/mousepad/Drakkon4.jpg"  class="img-rounded" alt="Volos4" width="550" height="450">
                        </div>
                     </div>
                 </div>
                <div class="product_gallery">
                 <ul class="list-inline">
                  <li>
                    <a data-target="#img1" data-toggle="carousel-indicators">
                       <img src="../img/products/mousepad/Drakkon1.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100" />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/mousepad/Drakkon2.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100"  />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/mousepad/Drakkon3.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100"  />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/mousepad/Drakkon4.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100" />
                    </a>
                    </li>
                  </ul>
                </div>
             </div><!-- col-sm-6 -->
             <div class="col-sm-6">
               <h2>Draconem Aluminum</h2>
               <p>The TALON gaming mouse features an AVAGO 3050 optical sensor, with up to 3000 DPI, and a unique 6 color cycling effect lighting system. It offers good stability and accuracy via great tracking precision and a high max speed.The TALON has an ergonomic, ambidextrous shape, making it great for both left and right handed users.</p> <br>
                  <div class="">
                     <h4>Available Colors</h4>
                     <form role="form">
                       <ul class="list-inline">
                         <li>
                             <p>Violet</p>
                                <div > <input type="checkbox" checked></div>
                          </li>
                           <li>
                             <p>Black</p>
                            <div> <input type="checkbox"  /></div>
                          </li>
                          <li>
                             <p>Blue</p>
                               <div ><input type="checkbox"/></div>
                          </li>
                          <li>
                             <p>Red</p>
                                 <div> <input type="checkbox"/></div>
                          </li>
                       </ul>
                     </form>
                  </div>
                  <br />
                   <div class="">
                       <h2>Size <small>Please select one</small></h2>
                       <ul class="list-inline">
                          <li>
                             <button type="button" class="btn btn-default btn-xs">Medium</button>
                          </li>
                          <li>
                             <button type="button" class="btn btn-default btn-xs">Large</button>
                          </li>
                       </ul>
                    </div>
                    <br />

                    <div class="">
                       <div class="product_price">
                          <h1 class="price">Php 1,590.00</h1>
                       </div>
                    </div>

                    <div class="">
                       <button type="button" class="btn btn-warning btn-lg">Add to Cart</button>
                       <button type="button" class="btn btn-warning btn-lg">Add to Wishlist</button>
                    </div>
             </div>
            </div>
            <div class="row">
            <div class="col-sm-12">
               <div class="" role="tabpanel">
                  <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                     <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">REMOVABLE SIDE PANELS</a>
                     </li>
                     <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">6 COLOR CYCLING EFFECT</a>
                     </li>
                      <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab"  aria-expanded="false">AVAGO 3050 OPTICAL SENSOR</a>
                     </li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                     <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                        <p>The TAANOX gaming mouse features removable side panels, so that users may further adjust the shape of the mouse to their liking.</p>
                     </div>
                     <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                            <p>The TAANOX changes it up from traditional lighting setups,with lighting accents throughout the mouse body as well as a 6 color cycling effect lighting system that cycles through the colors red, orange, yellow, blue , dark blue, and purple respectively.
                            [To lock the lighting system to one color]: when the lighting cycles to the desired color, click the mouse wheel (mouse3) and press the DPI adjustment button simultaneously. Repeat to unlock.
                            [To turn lighting system on/off]: press left click (mouse1) + DPI adjustment button simultaneously.</p>
                     </div>
                     <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                        <p>The AVAGO 3050 Optical sensor found inside the TAANOX gaming mouse offers up to sensitivity up to 3000 DPI. The sensor is very accurate in precision, has no prediction, and has a high perfect control speed (meaning even low sens. users who rely on very fast movement will still have perfect tracking).</p>
                     </div>
                  </div>
               </div>
            </div>
            </div>
         </section>
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
     </div>
    </div>

  </div>
</div>

<div id="conkor" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
     <div class="modal-header  modal-info">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title">Conkor</h4>
     </div>
     <div class="modal-body">
         <section>
            <div class="row">
             <div class="col-sm-6">
                 <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     <!-- Indicators -->
                     <ol class="carousel-indicators">
                       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                       <li data-target="#myCarousel" data-slide-to="1"></li>
                       <li data-target="#myCarousel" data-slide-to="2"></li>
                       <li data-target="#myCarousel" data-slide-to="3"></li>
                       <li data-target="#myCarousel" data-slide-to="4"></li>
                     </ol>

                     <!-- Wrapper for slides -->
                     <div class="carousel-inner">
                        <div class="item active">
                        <img src="../img/products/mousepad/Conkor.jpg"  class="img-rounded"  id="img1" alt="Thaanox1" width="550" height="450">
                        </div>

                        <div class="item">
                          <img src="../img/products/mousepad/Conkor1.jpg"  class="img-rounded" alt="Thaanox2" width="550" height="450">
                        </div>

                        <div class="item">
                          <img src="../img/products/mousepad/Conkor2.jpg"  class="img-rounded" alt="Volos3" width="550" height="450">
                        </div>

                        <div class="item">
                          <img src="../img/products/mousepad/Conkor3.jpg"  class="img-rounded" alt="Volos4" width="550" height="450">
                        </div>
                        <div class="item">
                          <img src="../img/products/mousepad/Conkor4.jpg"  class="img-rounded" alt="Volos4" width="550" height="450">
                        </div>
                     </div>
                 </div>
                <div class="product_gallery">
                 <ul class="list-inline">
                  <li>
                    <a data-target="#img1" data-toggle="carousel-indicators">
                       <img src="../img/products/mousepad/Conkor.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100" />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/mousepad/Conkor1.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100"  />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/mousepad/Conkor2.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100"  />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/mousepad/Conkor3.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100" />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/mousepad/Conkor4.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100" />
                    </a>
                    </li>
                  </ul>
                </div>
             </div><!-- col-sm-6 -->
             <div class="col-sm-6">
               <h2>Conkor</h2>
               <p>The TALON gaming mouse features an AVAGO 3050 optical sensor, with up to 3000 DPI, and a unique 6 color cycling effect lighting system. It offers good stability and accuracy via great tracking precision and a high max speed.The TALON has an ergonomic, ambidextrous shape, making it great for both left and right handed users.</p> <br>
                  <div class="">
                     <h4>Available Colors</h4>
                     <form role="form">
                       <ul class="list-inline">
                         <li>
                             <p>Violet</p>
                                <div > <input type="checkbox" checked></div>
                          </li>
                           <li>
                             <p>Black</p>
                            <div> <input type="checkbox"  /></div>
                          </li>
                          <li>
                             <p>Blue</p>
                               <div ><input type="checkbox"/></div>
                          </li>
                          <li>
                             <p>Red</p>
                                 <div> <input type="checkbox"/></div>
                          </li>
                       </ul>
                     </form>
                  </div>
                  <br />
                   <div class="">
                       <h2>Size <small>Please select one</small></h2>
                       <ul class="list-inline">
                          <li>
                             <button type="button" class="btn btn-default btn-xs">Medium</button>
                          </li>
                          <li>
                             <button type="button" class="btn btn-default btn-xs">Large</button>
                          </li>
                       </ul>
                    </div>
                    <br />

                    <div class="">
                       <div class="product_price">
                          <h1 class="price">Php 1,590.00</h1>
                       </div>
                    </div>

                    <div class="">
                       <button type="button" class="btn btn-warning btn-lg">Add to Cart</button>
                       <button type="button" class="btn btn-warning btn-lg">Add to Wishlist</button>
                    </div>
             </div>
            </div>
            <div class="row">
            <div class="col-sm-12">
               <div class="" role="tabpanel">
                  <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                     <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">REMOVABLE SIDE PANELS</a>
                     </li>
                     <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">6 COLOR CYCLING EFFECT</a>
                     </li>
                      <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab"  aria-expanded="false">AVAGO 3050 OPTICAL SENSOR</a>
                     </li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                     <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                        <p>The TAANOX gaming mouse features removable side panels, so that users may further adjust the shape of the mouse to their liking.</p>
                     </div>
                     <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                            <p>The TAANOX changes it up from traditional lighting setups,with lighting accents throughout the mouse body as well as a 6 color cycling effect lighting system that cycles through the colors red, orange, yellow, blue , dark blue, and purple respectively.
                            [To lock the lighting system to one color]: when the lighting cycles to the desired color, click the mouse wheel (mouse3) and press the DPI adjustment button simultaneously. Repeat to unlock.
                            [To turn lighting system on/off]: press left click (mouse1) + DPI adjustment button simultaneously.</p>
                     </div>
                     <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                        <p>The AVAGO 3050 Optical sensor found inside the TAANOX gaming mouse offers up to sensitivity up to 3000 DPI. The sensor is very accurate in precision, has no prediction, and has a high perfect control speed (meaning even low sens. users who rely on very fast movement will still have perfect tracking).</p>
                     </div>
                  </div>
               </div>
            </div>
            </div>
         </section>
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
     </div>
    </div>

  </div>
</div>

<div id="dasher" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
     <div class="modal-header  modal-info">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title">Dasher Mini</h4>
     </div>
     <div class="modal-body">
         <section>
            <div class="row">
             <div class="col-sm-6">
                 <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     <!-- Indicators -->
                     <ol class="carousel-indicators">
                       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                       <li data-target="#myCarousel" data-slide-to="1"></li>
                       <li data-target="#myCarousel" data-slide-to="2"></li>
                       <li data-target="#myCarousel" data-slide-to="3"></li>
                       <li data-target="#myCarousel" data-slide-to="4"></li>
                     </ol>

                     <!-- Wrapper for slides -->
                     <div class="carousel-inner">
                        <div class="item active">
                        <img src="../img/products/mousepad/Dasher.jpg"  class="img-rounded"  id="img1" alt="Thaanox1" width="550" height="450">
                        </div>

                        <div class="item">
                          <img src="../img/products/mousepad/Dasher2.jpg"  class="img-rounded" alt="Thaanox2" width="550" height="450">
                        </div>

                        <div class="item">
                          <img src="../img/products/mousepad/Dasher3.jpg"  class="img-rounded" alt="Volos3" width="550" height="450">
                        </div>

                        <div class="item">
                          <img src="../img/products/mousepad/Dasher4.jpg"  class="img-rounded" alt="Volos4" width="550" height="450">
                        </div>
                     </div>
                 </div>
                <div class="product_gallery">
                 <ul class="list-inline">
                  <li>
                    <a data-target="#img1" data-toggle="carousel-indicators">
                       <img src="../img/products/mousepad/Dasher.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100" />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/mousepad/Dasher2.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100"  />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/mousepad/Dasher3.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100"  />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/mousepad/Dasher4.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100" />
                    </a>
                    </li>
                  </ul>
                </div>
             </div><!-- col-sm-6 -->
             <div class="col-sm-6">
               <h2>Dasher Mini</h2>
               <p>The TALON gaming mouse features an AVAGO 3050 optical sensor, with up to 3000 DPI, and a unique 6 color cycling effect lighting system. It offers good stability and accuracy via great tracking precision and a high max speed.The TALON has an ergonomic, ambidextrous shape, making it great for both left and right handed users.</p> <br>
                  <div class="">
                     <h4>Available Colors</h4>
                     <form role="form">
                       <ul class="list-inline">
                         <li>
                             <p>Violet</p>
                                <div > <input type="checkbox" checked></div>
                          </li>
                           <li>
                             <p>Black</p>
                            <div> <input type="checkbox"  /></div>
                          </li>
                          <li>
                             <p>Blue</p>
                               <div ><input type="checkbox"/></div>
                          </li>
                          <li>
                             <p>Red</p>
                                 <div> <input type="checkbox"/></div>
                          </li>
                       </ul>
                     </form>
                  </div>
                  <br />
                   <div class="">
                       <h2>Size <small>Please select one</small></h2>
                       <ul class="list-inline">
                          <li>
                             <button type="button" class="btn btn-default btn-xs">Medium</button>
                          </li>
                          <li>
                             <button type="button" class="btn btn-default btn-xs">Large</button>
                          </li>
                       </ul>
                    </div>
                    <br />

                    <div class="">
                       <div class="product_price">
                          <h1 class="price">Php 1,590.00</h1>
                       </div>
                    </div>

                    <div class="">
                       <button type="button" class="btn btn-warning btn-lg">Add to Cart</button>
                       <button type="button" class="btn btn-warning btn-lg">Add to Wishlist</button>
                    </div>
             </div>
            </div>
            <div class="row">
            <div class="col-sm-12">
               <div class="" role="tabpanel">
                  <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                     <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">REMOVABLE SIDE PANELS</a>
                     </li>
                     <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">6 COLOR CYCLING EFFECT</a>
                     </li>
                      <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab"  aria-expanded="false">AVAGO 3050 OPTICAL SENSOR</a>
                     </li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                     <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                        <p>The TAANOX gaming mouse features removable side panels, so that users may further adjust the shape of the mouse to their liking.</p>
                     </div>
                     <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                            <p>The TAANOX changes it up from traditional lighting setups,with lighting accents throughout the mouse body as well as a 6 color cycling effect lighting system that cycles through the colors red, orange, yellow, blue , dark blue, and purple respectively.
                            [To lock the lighting system to one color]: when the lighting cycles to the desired color, click the mouse wheel (mouse3) and press the DPI adjustment button simultaneously. Repeat to unlock.
                            [To turn lighting system on/off]: press left click (mouse1) + DPI adjustment button simultaneously.</p>
                     </div>
                     <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                        <p>The AVAGO 3050 Optical sensor found inside the TAANOX gaming mouse offers up to sensitivity up to 3000 DPI. The sensor is very accurate in precision, has no prediction, and has a high perfect control speed (meaning even low sens. users who rely on very fast movement will still have perfect tracking).</p>
                     </div>
                  </div>
               </div>
            </div>
            </div>
         </section>
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
     </div>
    </div>

  </div>
</div>

<div id="ladon" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
     <div class="modal-header  modal-info">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title">Ladon</h4>
     </div>
     <div class="modal-body">
         <section>
            <div class="row">
             <div class="col-sm-6">
                 <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     <!-- Indicators -->
                     <ol class="carousel-indicators">
                       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                       <li data-target="#myCarousel" data-slide-to="1"></li>
                       <li data-target="#myCarousel" data-slide-to="2"></li>
                       <li data-target="#myCarousel" data-slide-to="3"></li>
                       <li data-target="#myCarousel" data-slide-to="4"></li>
                     </ol>

                     <!-- Wrapper for slides -->
                     <div class="carousel-inner">
                        <div class="item active">
                        <img src="../img/products/mousepad/Ladon.jpg"  class="img-rounded"  id="img1" alt="Thaanox1" width="550" height="450">
                        </div>

                        <div class="item">
                          <img src="../img/products/mousepad/Ladon1.jpg"  class="img-rounded" alt="Thaanox2" width="550" height="450">
                        </div>

                        <div class="item">
                          <img src="../img/products/mousepad/Ladon2.jpg"  class="img-rounded" alt="Volos3" width="550" height="450">
                        </div>

                        <div class="item">
                          <img src="../img/products/mousepad/Ladon3.jpg"  class="img-rounded" alt="Volos4" width="550" height="450">
                        </div>
                     </div>
                 </div>
                <div class="product_gallery">
                 <ul class="list-inline">
                  <li>
                    <a data-target="#img1" data-toggle="carousel-indicators">
                       <img src="../img/products/mousepad/Ladon.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100" />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/mousepad/Ladon1.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100"  />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/mousepad/Ladon2.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100"  />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/mousepad/Ladon3.jpg" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100" />
                    </a>
                    </li>
                  </ul>
                </div>
             </div><!-- col-sm-6 -->
             <div class="col-sm-6">
               <h2>Ladon</h2>
               <p>The TALON gaming mouse features an AVAGO 3050 optical sensor, with up to 3000 DPI, and a unique 6 color cycling effect lighting system. It offers good stability and accuracy via great tracking precision and a high max speed.The TALON has an ergonomic, ambidextrous shape, making it great for both left and right handed users.</p> <br>
                  <div class="">
                     <h4>Available Colors</h4>
                     <form role="form">
                       <ul class="list-inline">
                         <li>
                             <p>Violet</p>
                                <div > <input type="checkbox" checked></div>
                          </li>
                           <li>
                             <p>Black</p>
                            <div> <input type="checkbox"  /></div>
                          </li>
                          <li>
                             <p>Blue</p>
                               <div ><input type="checkbox"/></div>
                          </li>
                          <li>
                             <p>Red</p>
                                 <div> <input type="checkbox"/></div>
                          </li>
                       </ul>
                     </form>
                  </div>
                  <br />
                   <div class="">
                       <h2>Size <small>Please select one</small></h2>
                       <ul class="list-inline">
                          <li>
                             <button type="button" class="btn btn-default btn-xs">Medium</button>
                          </li>
                          <li>
                             <button type="button" class="btn btn-default btn-xs">Large</button>
                          </li>
                       </ul>
                    </div>
                    <br />

                    <div class="">
                       <div class="product_price">
                          <h1 class="price">Php 1,590.00</h1>
                       </div>
                    </div>

                    <div class="">
                       <button type="button" class="btn btn-warning btn-lg">Add to Cart</button>
                       <button type="button" class="btn btn-warning btn-lg">Add to Wishlist</button>
                    </div>
             </div>
            </div>
            <div class="row">
            <div class="col-sm-12">
               <div class="" role="tabpanel">
                  <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                     <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">REMOVABLE SIDE PANELS</a>
                     </li>
                     <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">6 COLOR CYCLING EFFECT</a>
                     </li>
                      <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab"  aria-expanded="false">AVAGO 3050 OPTICAL SENSOR</a>
                     </li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                     <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                        <p>The TAANOX gaming mouse features removable side panels, so that users may further adjust the shape of the mouse to their liking.</p>
                     </div>
                     <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                            <p>The TAANOX changes it up from traditional lighting setups,with lighting accents throughout the mouse body as well as a 6 color cycling effect lighting system that cycles through the colors red, orange, yellow, blue , dark blue, and purple respectively.
                            [To lock the lighting system to one color]: when the lighting cycles to the desired color, click the mouse wheel (mouse3) and press the DPI adjustment button simultaneously. Repeat to unlock.
                            [To turn lighting system on/off]: press left click (mouse1) + DPI adjustment button simultaneously.</p>
                     </div>
                     <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                        <p>The AVAGO 3050 Optical sensor found inside the TAANOX gaming mouse offers up to sensitivity up to 3000 DPI. The sensor is very accurate in precision, has no prediction, and has a high perfect control speed (meaning even low sens. users who rely on very fast movement will still have perfect tracking).</p>
                     </div>
                  </div>
               </div>
            </div>
            </div>
         </section>
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
     </div>
    </div>

  </div>
</div>

<div id="sparrow" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
     <div class="modal-header  modal-info">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title">Sparrow</h4>
     </div>
     <div class="modal-body">
         <section>
            <div class="row">
             <div class="col-sm-6">
                 <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     <!-- Indicators -->
                     <ol class="carousel-indicators">
                       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                       <li data-target="#myCarousel" data-slide-to="1"></li>
                       <li data-target="#myCarousel" data-slide-to="2"></li>
                       <li data-target="#myCarousel" data-slide-to="3"></li>
                       <li data-target="#myCarousel" data-slide-to="4"></li>
                     </ol>

                     <!-- Wrapper for slides -->
                     <div class="carousel-inner">
                        <div class="item active">
                        <img src="../img/products/mousepad/Sparrow1.png"  class="img-rounded"  id="img1" alt="Thaanox1" width="550" height="450">
                        </div>

                        <div class="item">
                          <img src="../img/products/mousepad/Sparrow2.png"  class="img-rounded" alt="Thaanox2" width="550" height="450">
                        </div>

                        <div class="item">
                          <img src="../img/products/mousepad/Sparrow3.png"  class="img-rounded" alt="Volos3" width="550" height="450">
                        </div>
                     </div>
                 </div>
                <div class="product_gallery">
                 <ul class="list-inline">
                  <li>
                    <a data-target="#img1" data-toggle="carousel-indicators">
                       <img src="../img/products/mousepad/Sparrow1.png" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100" />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/mousepad/Sparrow2.png" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100"  />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/mousepad/Sparrow3.png" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100"  />
                    </a>
                    </li>
                  </ul>
                </div>
             </div><!-- col-sm-6 -->
             <div class="col-sm-6">
               <h2>Sparrow</h2>
               <p>The TALON gaming mouse features an AVAGO 3050 optical sensor, with up to 3000 DPI, and a unique 6 color cycling effect lighting system. It offers good stability and accuracy via great tracking precision and a high max speed.The TALON has an ergonomic, ambidextrous shape, making it great for both left and right handed users.</p> <br>
                  <div class="">
                     <h4>Available Colors</h4>
                     <form role="form">
                       <ul class="list-inline">
                         <li>
                             <p>Violet</p>
                                <div > <input type="checkbox" checked></div>
                          </li>
                           <li>
                             <p>Black</p>
                            <div> <input type="checkbox"  /></div>
                          </li>
                          <li>
                             <p>Blue</p>
                               <div ><input type="checkbox"/></div>
                          </li>
                          <li>
                             <p>Red</p>
                                 <div> <input type="checkbox"/></div>
                          </li>
                       </ul>
                     </form>
                  </div>
                  <br />
                   <div class="">
                       <h2>Size <small>Please select one</small></h2>
                       <ul class="list-inline">
                          <li>
                             <button type="button" class="btn btn-default btn-xs">Medium</button>
                          </li>
                          <li>
                             <button type="button" class="btn btn-default btn-xs">Large</button>
                          </li>
                       </ul>
                    </div>
                    <br />

                    <div class="">
                       <div class="product_price">
                          <h1 class="price">Php 1,590.00</h1>
                       </div>
                    </div>

                    <div class="">
                       <button type="button" class="btn btn-warning btn-lg">Add to Cart</button>
                       <button type="button" class="btn btn-warning btn-lg">Add to Wishlist</button>
                    </div>
             </div>
            </div>
            <div class="row">
            <div class="col-sm-12">
               <div class="" role="tabpanel">
                  <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                     <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">REMOVABLE SIDE PANELS</a>
                     </li>
                     <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">6 COLOR CYCLING EFFECT</a>
                     </li>
                      <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab"  aria-expanded="false">AVAGO 3050 OPTICAL SENSOR</a>
                     </li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                     <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                        <p>The TAANOX gaming mouse features removable side panels, so that users may further adjust the shape of the mouse to their liking.</p>
                     </div>
                     <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                            <p>The TAANOX changes it up from traditional lighting setups,with lighting accents throughout the mouse body as well as a 6 color cycling effect lighting system that cycles through the colors red, orange, yellow, blue , dark blue, and purple respectively.
                            [To lock the lighting system to one color]: when the lighting cycles to the desired color, click the mouse wheel (mouse3) and press the DPI adjustment button simultaneously. Repeat to unlock.
                            [To turn lighting system on/off]: press left click (mouse1) + DPI adjustment button simultaneously.</p>
                     </div>
                     <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                        <p>The AVAGO 3050 Optical sensor found inside the TAANOX gaming mouse offers up to sensitivity up to 3000 DPI. The sensor is very accurate in precision, has no prediction, and has a high perfect control speed (meaning even low sens. users who rely on very fast movement will still have perfect tracking).</p>
                     </div>
                  </div>
               </div>
            </div>
            </div>
         </section>
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
     </div>
    </div>

  </div>
</div>

<div id="tortuga" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
     <div class="modal-header  modal-info">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title">Tortuga</h4>
     </div>
     <div class="modal-body">
         <section>
            <div class="row">
             <div class="col-sm-6">
                 <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     <!-- Indicators -->
                     <ol class="carousel-indicators">
                       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                       <li data-target="#myCarousel" data-slide-to="1"></li>
                       <li data-target="#myCarousel" data-slide-to="2"></li>
                       <li data-target="#myCarousel" data-slide-to="3"></li>
                       <li data-target="#myCarousel" data-slide-to="4"></li>
                     </ol>

                     <!-- Wrapper for slides -->
                     <div class="carousel-inner">
                        <div class="item active">
                        <img src="../img/products/mousepad/Tortuga1.png"  class="img-rounded"  id="img1" alt="Thaanox1" width="550" height="450">
                        </div>

                        <div class="item">
                          <img src="../img/products/mousepad/Tortuga2.png"  class="img-rounded" alt="Thaanox2" width="550" height="450">
                        </div>

                        <div class="item">
                          <img src="../img/products/mousepad/Tortuga3.png"  class="img-rounded" alt="Volos3" width="550" height="450">
                        </div>
                     </div>
                 </div>
                <div class="product_gallery">
                 <ul class="list-inline">
                  <li>
                    <a data-target="#img1" data-toggle="carousel-indicators">
                       <img src="../img/products/mousepad/Tortuga1.png" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100" />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/mousepad/Tortuga2.png" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100"  />
                    </a>
                    </li>
                    <li>
                    <a href="#">
                       <img src="../img/products/mousepad/Tortuga3.png" alt="..."  class="img-rounded" alt="Cinque Terre" width="70" height="100"  />
                    </a>
                    </li>
                  </ul>
                </div>
             </div><!-- col-sm-6 -->
             <div class="col-sm-6">
               <h2>Tortuga</h2>
               <p>The TALON gaming mouse features an AVAGO 3050 optical sensor, with up to 3000 DPI, and a unique 6 color cycling effect lighting system. It offers good stability and accuracy via great tracking precision and a high max speed.The TALON has an ergonomic, ambidextrous shape, making it great for both left and right handed users.</p> <br>
                  <div class="">
                     <h4>Available Colors</h4>
                     <form role="form">
                       <ul class="list-inline">
                         <li>
                             <p>Violet</p>
                                <div > <input type="checkbox" checked></div>
                          </li>
                           <li>
                             <p>Black</p>
                            <div> <input type="checkbox"  /></div>
                          </li>
                          <li>
                             <p>Blue</p>
                               <div ><input type="checkbox"/></div>
                          </li>
                          <li>
                             <p>Red</p>
                                 <div> <input type="checkbox"/></div>
                          </li>
                       </ul>
                     </form>
                  </div>
                  <br />
                   <div class="">
                       <h2>Size <small>Please select one</small></h2>
                       <ul class="list-inline">
                          <li>
                             <button type="button" class="btn btn-default btn-xs">Medium</button>
                          </li>
                          <li>
                             <button type="button" class="btn btn-default btn-xs">Large</button>
                          </li>
                       </ul>
                    </div>
                    <br />

                    <div class="">
                       <div class="product_price">
                          <h1 class="price">Php 1,590.00</h1>
                       </div>
                    </div>

                    <div class="">
                       <button type="button" class="btn btn-warning btn-lg">Add to Cart</button>
                       <button type="button" class="btn btn-warning btn-lg">Add to Wishlist</button>
                    </div>
             </div>
            </div>
            <div class="row">
            <div class="col-sm-12">
               <div class="" role="tabpanel">
                  <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                     <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">REMOVABLE SIDE PANELS</a>
                     </li>
                     <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">6 COLOR CYCLING EFFECT</a>
                     </li>
                      <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab"  aria-expanded="false">AVAGO 3050 OPTICAL SENSOR</a>
                     </li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                     <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                        <p>The TAANOX gaming mouse features removable side panels, so that users may further adjust the shape of the mouse to their liking.</p>
                     </div>
                     <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                            <p>The TAANOX changes it up from traditional lighting setups,with lighting accents throughout the mouse body as well as a 6 color cycling effect lighting system that cycles through the colors red, orange, yellow, blue , dark blue, and purple respectively.
                            [To lock the lighting system to one color]: when the lighting cycles to the desired color, click the mouse wheel (mouse3) and press the DPI adjustment button simultaneously. Repeat to unlock.
                            [To turn lighting system on/off]: press left click (mouse1) + DPI adjustment button simultaneously.</p>
                     </div>
                     <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                        <p>The AVAGO 3050 Optical sensor found inside the TAANOX gaming mouse offers up to sensitivity up to 3000 DPI. The sensor is very accurate in precision, has no prediction, and has a high perfect control speed (meaning even low sens. users who rely on very fast movement will still have perfect tracking).</p>
                     </div>
                  </div>
               </div>
            </div>
            </div>
         </section>
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
     </div>
    </div>

  </div>
</div>

<a>
<img src="../img/to-top.png" id="back-to-top" href="#" height="50" width="50" title="Back to Top" data-toggle="tooltip" data-placement="top" role="button" class="back-to-top"/>
</a>

    <script type="text/javascript">
    $(document).ready(function(){
    $(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
    $('#back-to-top').fadeIn();
    } else {
    $('#back-to-top').fadeOut();
    }
    });
    $('#back-to-top').click(function () {
    $('#back-to-top').tooltip('hide');
    $('body,html').animate({
    scrollTop: 0
    }, 800);
    return false;
    });
    $('#back-to-top').tooltip('show');
    });
    </script>
    <script src="../bootstrap/js/jquery-2.1.4.min.js"></script>
    <script src="../bootstrap/js/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="../bootstrap/plugins/fastclick/fastclick.min.js"></script>
</body>
</html>