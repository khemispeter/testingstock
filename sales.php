<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>suplier</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
<div class="content">
  <!-- <h1>Sliding Diagonals Background Effect</h1> -->
</div>



	
<div class="topcont">
<a class="topcont" href="product.php">product</a>
<a class="topcont" href="sales.php">sales</a><!-- 
<a class="topcont" href="#">sales</a> -->
<a class="topcont" href="category.php">categories</a>
<a class="topcont" href="login.php" class="getout">SignOut</a>
<a class="topcont" href="index.php">dashboard</a>
</div>



<div class="suplydiv">
	<form method="POST" action="addsales.php" id="suplyform">
<label>FullName</label>
<input type="text" placeholder="FullName" name="fullname" value="" size="20" required="required"><br>
<label>CompanyName</label><br>
<input type="text" placeholder="CompanyName" name="companyname" value="" size="20" required="required"><br>
<label>ProductName</label><br>
<input type="text" placeholder="ProductName" name="productname" value="" size="20" required="required"><br>
<label>Category</label><br>
<input type="text" placeholder="Category" name="category" value="" size="20" required="required"><br>
<label>Quantity</label><br>
<input type="number" placeholder="Quantity" name="quantity" value="" size="20" required="required"><br>
<label>OrderDate</label><br>
<input type="date" name="orderdate" value=""><br>
<label>DeliveryDate</label><br>
<input type="date" name="deliverydate" value=""><br>
<input type="button" value="AddSales" name="" class="adding-pro">
	</form>

</div>
<img src="images/electronic.jpg" alt="electronics">


<!--  <div class="panel-footerss" style="text-align:center; margin-top:310px">
        		Powered by <a href="https://www.linkedin.com/in/khemis-peter-95b81412b/" target="_blank">ENGINEER PETER on behalf of O.U.C</a> | <a href="https://business.facebook.com/latest/home?asset_id=1888039608119929&nav_ref=pages_classic_isolated_section" target="_blank">Follow our Facebook </a><br>
				OkochKene University of computing(O.U.C) Juba South Sudan {Mission 2035}
   </div> -->

<div class="bottomfooter">
	<a href="#">FaceBook</a>
	<a href="#">LinkedIn</a>
	<a href="#">Twiter</a>
	<a href="#">Instagram</a>
	<!--<p class="copyright">© 2022 Engineer Peter.</p>-->
	
</div>
</body>
</html>