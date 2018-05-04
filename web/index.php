<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="home.css" />
	<script src="home.js"></script>
</head>
<body>
	<div class="jumbotron">
		<h1>Jonathan Sirrine</h1>
		<h3>CS 313 Web Engineering II</h3><h3><a href="links.php">Assignment Links</a></h3>
	</div>
	<div id="carousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel" data-slide-to="0" class="active"></li>
			<li data-target="#carousel" data-slide-to="1"></li>
			<li data-target="#carousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
			  <img src="pics/jon.jpg" alt="Jonathan in Washington">
			</div>

			<div class="item">
			  <img src="pics/colombia.jpg" alt="Paragliding in Columbia">
			</div>

			<div class="item">
			  <img src="pics/colombia2.jpg" alt="Paragliding in Columbia">
			</div>
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#carousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</body>
</html>
