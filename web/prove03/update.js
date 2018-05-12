let inputs = document.querySelectorAll("input.itemQty");
inputs.forEach(function (input){
	input.addEventListener("change", function(e){
		let name = e.target.name;
		var xhr = new XMLHttpRequest();
		xhr.open("POST", "update.php", true);
		xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhr.onreadystatechange = function(){
			if (xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200) {
				console.log("sent: " + name + " " + input.value);
			}
		}

		xhr.send(name + "=" + input.value);
	})
});