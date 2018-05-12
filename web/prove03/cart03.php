<?php
	session_start();
	$products = array("Google Home", "Google Mini", "Amazon Echo", "Amazon Dot");
	$amounts = array("89.99", "49.99", "99.99", "49.99");
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
	<link rel="stylesheet" href="base.css" />
</head>
<body>
	<h1>Cart</h1>
	<div class="nav_box">
		<a href="prove03.php">Browse</a>		
	</div>
	<div class="main_content">
	
		<div id="cartDiv">
			<div class="cartItem">
				<input class="itemQty" name="homeQty" type="number" value="<?php echo $_SESSION["homeQty"] ?>" />
				<span>Google Home</span>
				<span class="price"></span>
			</div>
			<div class="cartItem">
				<input class="itemQty" name="miniQty" type="number" value="<?php echo $_SESSION["miniQty"] ?>" />
				<span>Google Mini</span>
				<span class="price"></span>
			</div>
			<div class="cartItem">
				<input class="itemQty" name="echoQty" type="number" value="<?php echo $_SESSION["echoQty"] ?>" />
				<span>Google Echo</span>
				<span class="price"></span>
			</div>
			<div class="cartItem">
				<input class="itemQty" name="dotQty" type="number" value="<?php echo $_SESSION["dotQty"] ?>" />
				<span>Google Dot</span>
				<span class="price"></span>
			</div>
			<a href="checkout03.php" style="float: right">Checkout</a>	
		</div>
	</div>
	<script src="update.js"></script>
	<script>
		//write script to update price on change
		//will have to work on page load as well 
		
		let qtyBtns = document.querySelectorAll(".itemQty");
		for (let i = 0; i < qtyBtns.length; i++){
			updateVal(qtyBtns[i], i);
			qtyBtns[i].addEventListener("change", function(e){
				updateVal(this, i);
			});
		}
		
		function updateVal(qtyHTML, ind){
			let priHTML = qtyHTML.nextElementSibling.nextElementSibling;
			let prices = ["89.99", "49.99", "99.99", "49.99"];
			let qty = qtyHTML.value;
			let priceF = Intl.NumberFormat('en-US', {
				style: 'currency', 
				currency: 'USD',
				minimumFractionDigits: 2 
			});
			let price = priceF.format(qty * prices[ind]);

			priHTML.innerHTML = price;
		}
	</script>
</body>
</html>