<?php 
	session_start();
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Confirm</title>
</head>
<body>
	<h1>Thanks for your purchase</h1>
	<h3>Please review the details</h3>
	<div class="main_content">
	
		<div id="cartDiv">
			<h1>Cart</h1>
			<div class="cartItem">
				<span class="itemQty" ><?php echo $_SESSION["homeQty"] ?>x</span>
				<span>Google Home</span>
				<span class="price"></span>
			</div>
			<div class="cartItem">
				<span class="itemQty"><?php echo $_SESSION["miniQty"] ?>x </span>
				<span>Google Mini</span>
				<span class="price"></span>
			</div>
			<div class="cartItem">
				<span class="itemQty"><?php echo $_SESSION["echoQty"] ?>x </span>
				<span>Google Echo</span>
				<span class="price"></span>
			</div>
			<div class="cartItem">
				<span class="itemQty"><?php echo $_SESSION["dotQty"] ?>x </span>
				<span>Google Dot</span>
				<span class="price"></span>
			</div>
		</div>
		<div id="addressDiv">
			<h1>Address</h1>
			<span id="streetDis"> <?php echo test_input($_POST["street"]) ?></span><br />
			<span id="citystate"> <?php echo test_input($_POST["city"]) . ", " . test_input($_POST["state"]) ?> </span>
			<span id="zip"> <?php test_input($_POST["zip"]) ?> </span>
		</div>
	</div>
	<script>
		//write script to update price on change
		//will have to work on page load as well 
		
		let qtyBtns = document.querySelectorAll(".itemQty");
		for (let i = 0; i < qtyBtns.length; i++){
			updateVal(qtyBtns[i], i);
		}
		
		function updateVal(qtyHTML, ind){
			let priHTML = qtyHTML.nextElementSibling.nextElementSibling;
			let prices = ["89.99", "49.99", "99.99", "49.99"];
			let qty = parseInt(qtyHTML.innerHTML);
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