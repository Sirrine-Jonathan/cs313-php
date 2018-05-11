<?php
	session_start();
	
	if (isset($_POST["homeQty"])) { $_SESSION["homeQty"] = $_POST["homeQty"]; };
	if (isset($_POST["miniQty"])) { $_SESSION["miniQty"] = $_POST["miniQty"]; };
	if (isset($_POST["echoQty"])) { $_SESSION["echoQty"] = $_POST["echoQty"]; };
	if (isset($_POST["dotQty"]))  { $_SESSION["dotQty"]  = $_POST["dotQty"]; };
?>