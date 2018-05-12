<?php
	session_start();
			/*
			<div class="product">
				<h3>Google Home</h3>
				<h5><?php ?></h5>
				<img src="product_pics/gHome.png" alt="Google Home" />
				<input type="number" class="itemQty" name="homeQty" value="<?php 
					if (isset($_SESSION["homeQty"])) { 
						echo $_SESSION["homeQty"];
					} else { 
						echo 0;
					}
				?>" /><label>In Cart</label>
			</div>
			*/
	function buildProduct($index){
		
		$products = array("Google Home", "Google Mini", "Amazon Echo", "Amazon Dot");
		$prices = array("89.99", "49.99", "99.99", "49.99");
		$images = array("gHome.png","gMini.png","aEcho.png","aDot.png");
		$qtyIndeces = array("homeQty", "miniQty", "echoQty", "dotQty");
		
		if (isset($_SESSION[$qtyIndeces[$index]])) { 
			$qty =  $_SESSION[$qtyIndeces[$index]];
		} else { 
			$qty = 0;
		};
		
		echo "<div class='product'>" .
				"<h3>" . $products[$index] . "</h3>" .
				"<p>" . $prices[$index] . "</p>" .
				"<img src='product_pics/" . $images[$index] . "' alt='" . $products[$index] . " image' /><br />" .
				"Quantity <input type='number' class='itemQty' name='" . $qtyIndeces[$index] . "' value='" . $qty . "' />" .
				"</div>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Browse</title>
	<link rel="stylesheet" href="base.css" />
</head>
<body>
<div>
	<h1>Assistant Device Online Store</h1>
	<div class="nav_box">
		<a href="../links.php">Back to Assignments</a>		
	</div>
	<div class="main_content">
		<form method="post" action="cart03.php">
		<div class="containerRow">
			<?php buildProduct(0); ?>
			<?php buildProduct(1); ?>
		</div>
		<div class="containerRow">
			<?php buildProduct(2); ?>
			<?php buildProduct(3); ?>
		</div>
		<input type="submit" value="View Cart" />
		</form>
	</div>
</div>
<script src="update.js"></script>
</body>
</html>