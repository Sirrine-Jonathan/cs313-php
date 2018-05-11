<?php
	session_start();
	$products = array("Google Home", "Google Mini", "Amazon Echo", "Amazon Dot");
	$amounts = array("89.99", "49.99", "99.99", "49.99");
	
	if (isset($_POST["homeQty"])) { $_SESSION["homeQty"] = $_POST["homeQty"]; };
	if (isset($_POST["miniQty"])) { $_SESSION["miniQty"] = $_POST["miniQty"]; };
	if (isset($_POST["echoQty"])) { $_SESSION["echoQty"] = $_POST["echoQty"]; };
	if (isset($_POST["dotQty"]))  { $_SESSION["dotQty"]  = $_POST["dotQty"]; };
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
</head>
<body>
	<h1>Cart</h1>
	<div>
		<ul>
			<li><a href="prove03.php">Browse</a></li>
			<li><a href="checkout03.php">Checkout</a></li>			
		</ul>
	</div>
	<div class="main_content">
		<div>
			<input class="itemQty" name="homeQty" type="number" value="<?php echo $_SESSION["homeQty"] ?>" /><span>Google Home</span></div>
			<input class="itemQty" name="miniQty" type="number" value="<?php echo $_SESSION["miniQty"] ?>" /><span>Google Mini</span></div>
			<input class="itemQty" name="echoQty" type="number" value="<?php echo $_SESSION["echoQty"] ?>" /><span>Google Echo</span></div>
			<input class="itemQty" name="dotQty" type="number" value="<?php echo $_SESSION["dotQty"] ?>" /><span>Google Dot</span></div>
		</div>
	</div>
	<script>
		let inputs = document.querySelectorAll("input.itemQty");
		inputs.forEach(function (input){
			input.addEventListener("change", function(e){
				e.preventDefault();
				let name = e.target.name;
				var xhr = new XMLHttpRequest();
				xhr.open("POST", "update.php", true);
				xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xhr.onreadystatechange = function(){
					if (xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200) {
						console.log("sent?");
					}
				}
				console.log(name);
				console.log(input.value);
				xhr.send(name + "=" + input.value);
				
			})
		});
	</script>
</body>
</html>