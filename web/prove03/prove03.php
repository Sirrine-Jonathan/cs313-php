<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Browse</title>
	<link rel="stylesheet" href="base.css" />
</head>
<body>
<div>
	<h1>Browse</h1>
	<div>
		<a href="../links.php">Back to Assignments</a>		
	</div>
	<div class="main_content">
		<form method="post" action="cart03.php">
		<div class="containerRow">
			<div class="product">
				<h3>Google Home</h3>
				<img src="product_pics/gHome.png" alt="Google Home" />
				<input type="number" class="itemQty" name="homeQty" value="<?php 
					if (isset($_SESSION["homeQty"])) { 
						echo $_SESSION["homeQty"];
					} else { 
						echo 0;
					}
				?>" /><label>In Cart</label>
			</div>
			<div class="product">
				<h3>Google Mini</h3>
				<img src="product_pics/gMini.png" alt="Google Mini" />
				<input type="number" class="itemQty" name="miniQty" value="<?php 
					if (isset($_SESSION["miniQty"])) { 
						echo $_SESSION["miniQty"];
					} else { 
						echo 0;
					}
				?>" /><label>In Cart</label>
			</div>
		</div>
		<div class="containerRow">
			<div class="product">
				<h3>Amazon Echo</h3>
				<img src="product_pics/aEcho.png" alt="Amazon Echo" />
				<input type="number" class="itemQty" name="echoQty" value="<?php 
					if (isset($_SESSION["echoQty"])) { 
						echo $_SESSION["echoQty"];
					} else { 
						echo 0;
					}
				?>" /><label>In Cart</label>
			</div>
			<div class="product">
				<h3>Amazon Dot</h3>
				<img src="product_pics/aDot.png" alt="Amazon Dot" />
				<input type="number" class="itemQty" name="dotQty" value="<?php 
					if (isset($_SESSION["dotQty"])) { 
						echo $_SESSION["dotQty"];
					} else { 
						echo 0;
					}
				?>" /><label>In Cart</label>
			</div>
		</div>
		<input type="submit" value="View Cart" />
		</form>
	</div>
</div>
<script>
	var boxes = document.querySelectorAll(".cartBox");
	boxes.forEach(function(b){
		b.addEventListener("click", function(e){
			updateCheck(b);
		})
		updateCheck(b);
	})
	
	function updateCheck(box){
		if (box.checked)
			box.nextSibling.innerHTML = "Added to Cart";
		else 
			box.nextSibling.innerHTML = "Add to Cart";
	}
</script>
</body>
</html>