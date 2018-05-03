/*
Vanilla JavaScript

window.onload = function(){
	function showAlert(){
		alert("Clicked");
	}
	document.getElementById("btn").addEventListener("click", showAlert);

	function changeColor(color, div){
		div.style.backgroundColor = color;
	}
	document.getElementById("firstColorBtn").addEventListener("click", function(e){
		changeColor(document.getElementById("firstColorVal").value, document.getElementById('first'));
	});
}
*/

$(function(){
	$("#btn").click(function(e){
		alert("Clicked");
	});
	$("#firstColorBtn").click(function(e){
		$("#first").css("background-color",$("#firstColorVal").val());
	});
	$("#hideThird").click(function(e){
		$("#third").toggle('200');
		if ($("#hideThird").val() == "Hide third div")
			$("#hideThird").val("Show third div");
		else
			$("#hideThird").val("Hide third div");
	});
});