<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>product</title>
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
<a class="topcont" href="sales.php">sales</a>
<!-- <a class="topcont" href="#">sales</a> -->
<a class="topcont" href="category.php">categories</a>
<a class="topcont" href="login.php" class="getout">SignOut</a>
<a class="topcont" href="index.php">dashboard</a>
</div>


	<div>
		<form class="producting" method="POST" action="addproduct.php">
			<label>ProductName</label><br>
			<input type="text" name="productname" value="" required="required" placeholder="productname eg computer"><br>
			<label>Category</label><br>
			<input type="text" name="category" value="" required="required" placeholder="category eg laptop or desktop"><br>
			<label>Quantity</label><br>
<input type="number" name="quantity" value="" required="required" placeholder="eg 10 or 20 or 5"><br>


<label>Brand</label><br>
<input type="text" name="brand" value="" required="required" placeholder="Brand"><br>

<label>Price</label><br>
<input type="number" name="price" value="" placeholder="amount to be sold to customer" size="50"><br>
<button class="adding-pro">Add Product</button>
<!-- <button class="adding-pro">Search Product</button>
<button class="adding-pro">View Product</button> -->
		</form>
	</div>


 <!-- <div class="panel-footers" style="text-align:center; margin-top:310px">
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





