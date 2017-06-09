

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
<link rel="stylesheet" href="../bootstrap/css/font-awesome.css">
<link rel="stylesheet" href="../bootstrap/css/dataTables.bootstrap.min.css">
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
          <li><a href="home.html #home"><i class="fa fa-home fa-lg"></i> Home</a></li>
          <li class="active"><a href="product.html #product"> <span class="glyphicon glyphicon-briefcase"></span> Products</a></li>
          <li><a href="faq.html"><i class="fa fa-question-circle  fa-lg"></i> FAQ</a></li>
          <li><a href="../php/returnpol.php "><i class="fa fa-info-circle fa-lg"></i> Return Policy</a></li>
        </ul>

         <ul class ="nav navbar-nav navbar-right">
        <li><a data-toggle ="modal" href="wishlist.html" data-target="#wish"><span class="glyphicon glyphicon-heart"></span> Wish List <span class="badge btn-primary">0</span> </a></li>
        <li><a data-toggle ="modal" href="cart.html" data-target="#cart"><span class="glyphicon glyphicon-shopping-cart"></span> Cart <span class="badge btn-primary">0</span></a></li>
          <li><a  data-toggle="modal" href="register.html" data-target="#register"><span class="glyphicon glyphicon-user"></span> Register</a></li>
         <!--  <li><a data-toggle="modal" href="login.html" data-target="#login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
          <li><a data-toggle="modal" href="../php/loginex.php" data-target="#login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>


         </ul>
       </div>

     </div>
    </nav>

  </header>


<!-- Products Nagahiro -->
<hr>
        <div id="myScrollspy" class=" column-3 ">
             <div  class=" col-sm-2 bs-sidebar ">
                    <ul class="nav bs-sidenav">
                       <li class="treeview">
                        <h4 class="text-center "><b>PERIPHERALS</b></h4>
                        <ul class="nav treeview-menu">
                          <li><a href="#mouse">GAMING MOUSE</a></li>
                          <li><a href="#keyboard">KEYBOARD</a></li>
                          <li><a href="#pad">MOUSE PAD</a></li>
                        </ul>
                       </li>
                    </ul>
             </div>
        </div>
 <div class="container">
        <section>


        <div class="row">
        <div class="col-sm-3">
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
  <!-- Navbar
    ================================================== -->

<!-- ======================================================================================================================== -->

<!-- ==================================================Header End====================================================================== -->
           <section>
             <div class="row text-center">
                  <div class="col-sm-3">
                  </div>
                  <!-- Unang Row -->
                   <div class="col-sm-9">
                       <div id="mouse">
                        <div class="row">


<?php
include('connection.php');
      $res = $conn->query("SELECT * from product");
      $getprodloop = 0;
           while($row = $res->fetch_assoc())
           {

             $prod_id = $row['product_id'];
            // $cat_id = $row['category_id'];


            if ($row['product_image']=="") {
                $prod_image = "noimage.jpg";
            }
            else {
                $prod_image = $row['product_image'];
            }

             ?>
               <div class="col-sm-4 col-xs-9">
                                <div class="panel panel-primary text-center">
                                        <div class="panel-heading">
                                         <h4><?php echo $row['product_name']; ?></h4>
                                        </div>
                                        <div class="panel-body">
                                           <div>

                                            <a data-toggle="modal" href="#updateimage<?php echo $row['product_id']; ?>">
                                            <img src="../img/products/mouse/<?php echo $row['product_image']; ?>" class="img-rounded" alt="<?php echo $row['product_name']; ?>" width="230" height="200"/>
                                            </a>
                                           </div>

                                            <h4>&#x20B1; <?php echo $row['Quantity']; ?></h4>
                                            <button class="btn btn-warning">Add to Cart</button>
                                         </div>
                                 </div>
              </div>

              <div class="modal fade" id="updateimage<?php echo $row['product_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title pull-left"><?php echo $row['product_name']; ?></h4>
                    </div>
                    <div class="modal-body">
<div class="row">
      <div class="col-sm-6">
           <div id="myCarousel" class="carousel slide" data-ride="carousel">
             <!-- Indicators -->
             <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>

             </ol>

             <!-- Wrapper for slides -->
             <div class="carousel-inner">
               <div class="item active">
                                            <img src="../img/products/mouse/<?php echo $row['product_image']; ?>" class="img-rounded" alt="<?php echo $row['product_name']; ?>" width="550" height="450"/>
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
  </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>



        <?php $getprodloop++; } ?>

                        </div>
                      </div>
                    </div>
                </div>
             </section>
             </div>
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
                                <a href="../php/returnpol.php #return">Return Policy</a>
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
    <form action="php/register.php" method="POST" class="form-horizontal" role="form">
        <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <!-- Register -->
    </form>
    <!-- Login -->
    <form action="../php/login.php" method="POST" class="form-horizontal" role="form">
        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </form>
    <a>

<a>
<img src="../img/to-top.png" id="back-to-top" href="#" height="50" width="50" title="" data-toggle="tooltip" data-placement="top" role="button" class="back-to-top"/>
</a>
<script src="../bootstrap/js/dataTables.bootstrap.min.js"></script>
<script src="../bootstrap/js/jquery-2.1.4.min.js"></script>
<script src="../bootstrap/js/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../bootstrap/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="../bootstrap/plugins/fastclick/fastclick.min.js"></script>
<script type="text/javascript">

$('[rel=tooltip]').tooltip({container: 'body'});

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

$('#register').on('shown.bs.modal', function () {
  $('#inputEmail').focus();
})

$('#login').on('shown.bs.modal', function () {
  $('#inputEmaillogin').focus();
})

$('#register').on('hidden.bs.modal', function (e) {
  $(this)
    .find("input,textarea,select")
       .val('')
       .end()
    .find("input[type=checkbox], input[type=radio]")
       .prop("checked", "")
       .end();
});

$('#login').on('hidden.bs.modal', function (e) {
  $(this)
    .find("input,textarea,select")
       .val('')
       .end()
    .find("input[type=checkbox], input[type=radio]")
       .prop("checked", "")
       .end();
});

$(document).on('click','.navbar-collapse.in',function(e) {
    if( $(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle' ) {
        $(this).collapse('hide');
    }
});




$(document).ready(function(){
   $(window).scroll(function() {
       if ($('body').height() <= ($(window).height() + $(window).scrollTop())) {
           $('.bs-sidebar').fadeOut('slow');
       }
       else if ($('body').height() >= ($(window).height() + $(window).scrollTop())) {
           $('.bs-sidebar').fadeIn('slow');
       }
    });
});
</script>

</body>
</html>