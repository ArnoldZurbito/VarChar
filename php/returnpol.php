
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Varchar | Return Policy</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="shortcut icon" href="../img/logo.png">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="../css/style.css">
<script src="../bootstrap/js/jquery-1.11.3.min.js"></script>
<link rel="stylesheet" href="../bootstrap/css/font-awesome.css">
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

<body>

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
          <ul class="nav navbar-nav ">
            <li><a href="../html/home.html #home"><i class="fa fa-home fa-lg"></i> Home</a></li>
      <li><a href="../html/product.html"> <span class="glyphicon glyphicon-briefcase"></span> Products</a></li>
      <li><a href="../html/faq.html #faq"><i class="fa fa-question-circle  fa-lg"></i> FAQ</a></li>
      <li class="active"><a href="../php/returnpol.php "><i class="fa fa-info-circle fa-lg"></i> Return Policy</a></li>
    </ul>

     <ul class ="nav navbar-nav navbar-right">
    <li><a data-toggle ="modal" href="wishlist.html" data-target="#wish"><span class="glyphicon glyphicon-heart"></span> Wish List <span class="badge btn-primary">0</span> </a></li>
    <li><a data-toggle ="modal" href="cart.html" data-target="#cart"><span class="glyphicon glyphicon-shopping-cart"></span> Cart <span class="badge btn-primary">0</span></a></li>
      <li><a  data-toggle="modal" href="../html/register.html" data-target="#register"><span class="glyphicon glyphicon-user"></span> Register</a></li>
     <!--  <li><a data-toggle="modal" href="login.html" data-target="#login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
      <li><a data-toggle="modal" href="../php/loginex.php" data-target="#login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
           </ul>
        </div>
</nav>

    </nav>

  </header>

  <hr>


<!-- RETURN POLICY -->
<hr>
<div class="container">

	<section>
		<div class="page-header" id ="return">
          <h2>Return Policy</h2>
		</div>
			<div class="alert alert-warning fade in" role="alert">
			<p class="text-warning ">
			<h4><i class="fa fa-warning fa-lg"></i> &nbsp Please Note!</h4>
			Please read our Warranty terms for following products carefully, including the scope of Limited Warranty, Terms of Warranty and Non-warrantable Conditions. The content is important information related to your right. Once you start requesting VARCHAR Warranty Service, means you fully understood and agreed with the Warranty Term. Thank you!
			</p>
			</div>

		<div class="row">
			<div class="col-lg-12">
			<p >Varchar product is assurance the “Quality”, “Performance” and “Reliability” of the components to meet the highest standard. We provide our customer 1-2 years product limited Warranty Service differs from product category.
        </p><br></div>
		</div>
	</section>
</div>

<div class="container">
<section>
	<div class="row">
		<div class="col-sm-12">
    	   <div class="box-body">
              <table id="product" class="table table-bordered table-hover">
				<thead>
				<tr>
				<th colspan = "3" class="text-center black"><strong>VARCHAR</strong><small> &nbsp &nbsp <a href="product.html #mouse">Mouse</a></small>&nbsp &nbsp <small>product warranty period</small></th>

				</tr>
				  <tr >
					<th  class="text-center">Product</th>
					<th  class="text-center">Warranty</th>
					<th  class="text-center">Remark</th>
				  </tr>
				</thead>
					<tbody>
                        <?php
                            include('connection.php');
                            $res = $conn->query("SELECT * FROM `product`");
                          while($row = $res->fetch_assoc()){
                            ?>
                                <tr>
                                    <td><?php echo $row['product_name']; ?></td>
                                    <td class="text-center"><?php echo $row['warranty']; ?></td>
                                    <td class="text-center"><p>Apply from February 4, 2016</p></td>
                                </tr>
                            <?php
                          }
                          ?>
                    </tbody>
			</table>
		  </div>
		</div>
	</div>
</section>
</div>

<hr>

<div class="container">
	<div class="section">
      <div class="row">
	   <div class="col-sm-12">
	   <div class="box-body">
	        <table id="product" class="table table-bordered table-hover">
				<thead>
				<tr>
				<th colspan = "3" class="text-center black"><strong>VARCHAR</strong><small> &nbsp &nbsp <a href="product.html #keyboard">Keyboard</a></small>&nbsp &nbsp <small>product warranty period</small></th>

				</tr>
				  <tr >
					<th  class="text-center">Product</th>
					<th  class="text-center">Warranty</th>
					<th  class="text-center">Remark</th>
				  </tr>
				</thead>

				<tbody>
				<tr>
					<td>Admiral</td>
					<td class="text-center">1 year</td>
					<td class="text-center">Apply from January 3, 2016</td>
				</tr>
				<tr>
					<td>Commander</td>
					<td  class="text-center">2 year</td>
					<td class="text-center">Apply from January 3, 2016</td>
				</tr>
				<tr>
					<td>Horus</td>
					<td class="text-center">2 years</td>
					<td class="text-center">Apply from January 3, 2016</td>
				</tr>
				<tr>
					<td>Persassius</td>
					<td class="text-center">1 year</td>
					<td class="text-center">Apply from January 3, 2016</td>
				</tr>
				<tr>
					<td>Meka G1</td>
					<td class="text-center">1 year</td>
					<td class="text-center">Apply from January 3, 2016</td>
				</tr>
				<tr>
					<td>Hyperion</td>
					<td class="text-center">1 year</td>
					<td class="text-center">Apply from January 3, 2016</td>
				</tr>

				</tbody>
			</table>
	   </div>
	   </div>
	  </div>
	</div>
</div>
<hr>

<div class="container">
	<div class="section">
      <div class="row">
	   <div class="col-sm-12">
	   <div class="box-body">
	        <table id="product" class="table table-bordered table-hover">
				<thead>
				<tr>
				<th colspan = "3" class="text-center black"><strong>VARCHAR</strong><small> &nbsp &nbsp <a href="product.html #mousepad">Mouse Pad</a></small>&nbsp &nbsp <small>product warranty period</small></th>

				</tr>
				  <tr >
					<th  class="text-center">Product</th>
					<th  class="text-center">Warranty</th>
					<th  class="text-center">Remark</th>
				  </tr>
				</thead>

				<tbody>
				<tr>
					<td>Conkor</td>
					<td class="text-center">6 months</td>
					<td class="text-center">Apply from December 1, 2015</td>
				</tr>
				<tr>
					<td>Dasher</td>
					<td  class="text-center">6 months</td>
					<td class="text-center">Apply from December 2, 2015</td>
				</tr>
				<tr>
					<td>Drakkon</td>
					<td class="text-center">6 months</td>
					<td class="text-center">Apply from December 19, 2015</td>
				</tr>
				<tr>
					<td>Ladon</td>
					<td class="text-center">6 months</td>
					<td class="text-center">Apply from December 1, 2015</td>
				</tr>
				<tr>
					<td>Tortuga</td>
					<td class="text-center">6 months</td>
					<td class="text-center">Apply from December 1, 2015</td>
				</tr>
				<tr>
					<td>Sparrow</td>
					<td class="text-center">6 months</td>
					<td class="text-center">Apply from December 1, 2015</td>
				</tr>
				<tr>
					<td>White - Ra</td>
					<td class="text-center">6 months</td>
					<td class="text-center">Apply from December 1, 2015</td>
				</tr>

				</tbody>
			</table>
	   </div>
	   </div>
	  </div>
	</div>
</div>

<hr>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
		<div class="alert alert-danger fade in" role="alert">
			<p class="text-danger ">
			<strong><i class="fa fa-warning fa-sm"></i> &nbsp Please Note!</strong><br>
			</p>
	    </div>
		<div>
			<p>
				<ol type="1">
				<li>Warranty period depends on different region, please consult it with your product purchase place if you have question about the warranty period.</li>
				<li>In order to speed up the RMA procedures, please provide purchase invoice while repair and replacement.</li>
				<li>The period of warranty may vary depending on where you purchased your product; please verify the return policy with the retailer where you purchased your product. Any warranty claims that cannot be processed through your original point of purchase should be addressed directly to <strong>VARCHAR Corp</strong>. <small>Email :</small> <a href="www.google.com">www.varchar.com</a></li>
				</ol>
            </p>
	   </div>
	</div>
  </div>
</div>

<hr>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
		<div class="alert alert-warning fade in" role="alert">
			<p class="text-warning ">
			<strong>1. Terms of Limited Warranty</strong><br>
			</p>
	    </div>
		<div>
			<p>
				<ol type="1">
				<li> 	&nbsp  VARCHAR Corp. will provide a repair or replace same grades with a defect-free product of the same grades. If the product is out of production, the defective product will be replace with same or similar grades which in event that any defect related to the materials or manufacturing of product is found within the limited warranty period.</li>
				<li> &nbsp 	VARCHAR Corp. will provide a free repair service within limited warranty period. The buyer shall pay for the materials and repair if out of the limited warranty period.</li>
				<li>  &nbsp 	The limited warranty period is running from the date of invoice or bill .If Buyer lose the invoice or bill , the warranty period will be running from the date of product delivery order by searching from product series.</li>
				</ol>
		   </p>
	   </div>
	</div>
  </div>
</div>

<hr>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
		<div class="alert alert-warning fade in" role="alert">
			<p class="text-warning ">
			<strong>2. Inapplicable Limited Warranty Conditions</strong><br>
			</p>
	    </div>
		<div>
			<p>
				<ol type="1">
						<li>	&nbsp    	The damage of product is due to negligent act of user.</li>
						<li> &nbsp 	The limited warranty shall be deemed invalid if it has been altered, amended or modified without prior approval of Seller.</li>
						<li>  &nbsp 	The date of sale and/or information of buyer is discovered to be fake.</li>
						<li> &nbsp   	The damage of product is due to carriage of user.</li>
						<li> &nbsp   	Any fault or damage caused by natural wear and tear, disasters, earthquake, thunder, unusual voltage or environmental factors is not warranted.</li>
						<li> &nbsp   		Re-labeling, forging or changing the product serial number, bar code, or if the bar code is illegible due to serious damage,it is not warranted.</li>
						<li> &nbsp   		Any fault or damage caused by the removal, modification or changing of VARCHAR’s original parts or components by the buyer or any manufacturer without authorization from the original manufacturer is not warranted.</li>
						<li> &nbsp   		Any damage caused by improper use or failure to operate in accordance with the manual is not warranted.</li>
						<li> &nbsp   		Consumables other than the product: thermal grease, coolant booster or tube consumables is not warranted.</li>
						<li> &nbsp   	Accessories: paper carton, instructions and other accessories are not warranted.</li>
						<li> &nbsp   	The normal physical reaction of the product including oxidation and a color change in the copper water block due to lengthy storage is not warranted.</li>
						<li> &nbsp   		The warranty covers the hardware of storage devices and products, but any damage caused by improper operation of software is not within the warranty.</li>
						<li> &nbsp   		This warranty does not cover the storage of data saved by the user. Please make a copy of your data before
						maintenance or repair.</li>
						<li> &nbsp     	Improper connection as a result of the negligence of foolproof designs is not warranted.</li>
						<li> &nbsp   	  	Any adjustment or modification, for the purpose of improving the functionality and efficiency of the products specified in the manual, made to the product without prior written consent from VARCHAR is not within the scope of this warranty.</li>
						<li> &nbsp   	 	Any damage to the system caused by failure to change the coolant booster according to the instructions is not within the scope of this warranty.</li>
						<li> &nbsp   		  	VARCHAR Corp. hereby denies any other services guarantee not specified in this warranty, either expressed or implied. Any implied guarantee for commercial or specific purposes outside the limitation of applicable law is not within the scope of this warranty.</li>
						<li>&nbsp Other improper use is not warranted.</li>
               </ol>
		   </p>
	   </div>
	</div>
  </div>
</div>

<hr>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
		<div class="alert alert-warning fade in" role="alert">
			<p class="text-warning ">
			<strong>3. Statement</strong><br>
			</p>
	    </div>
		<div>
			<p>
				<ol type="1">
						<li>&nbsp  VARCHAR product is not authorized to use as the life-maintain machine or its parts, or any others using which will cause personal damage or death by defect of product.</li>
						<li>&nbsp VARCHAR is not liable for anyone’s death or damage or any object’s damage when product is using as, include but not limited, military equipment, traffic equipment and medical equipment .Please connect VARCHAR with written notice for further search for adequately parts. This covenant is not to limit or eliminate the liability for personal death or damage caused by VARCHAR’s negligence.</li>
						<li>&nbsp VARCHAR is only liable for limited warranty service of VARCHAR product. VARCHAR is not liable for other damage or loss of time, interest, commercial opportunity due to using defect product of VARCHAR.</li>
               </ol>
		   </p>
		   <br>

		   <hr style="height:3px; border:none; color:rgb(60,90,180); background-color:#bdc2d4;">
			<p>
				Thank you for purchasing Thermaltake product again ! If you have any question about the Warranty, please feel free to contact us. Thermaltake will spare no effort to provide the best service.
			</p>
	   </div>
	</div>
  </div>
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
<form action="php/login.php" method="POST" class="form-horizontal"  role="form">
  <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">

          </div> <!-- /.modal-content -->
      </div> <!-- /.modal-dialog -->
  </div> <!-- /.modal -->
</form>


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

<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();
});
</script>

  <script type="text/javascript" class="init">
    $(document).ready(function() {
      $('#product').DataTable();
    } );
  </script>

    <script src="../bootstrap/js/jquery-2.1.4.min.js"></script>
    <script src="../bootstrap/js/jquery.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script></body>
  </html>