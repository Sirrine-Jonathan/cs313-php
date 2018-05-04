<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	
	<!-- JQuery to use with Bootstrap js -->
	<script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>
	
	<!-- Bootstrap js for courosel, requires JQuery -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
	<!-- Bootstrap css -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<!-- style and script -->
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
			  <div class="carousel-caption">
				<h3>Camano Island</h3>
				<p>This is me on a small island by close to where I'm living</p>
			  </div>
			</div>

			<div class="item">
			  <img src="pics/colombia.jpg" alt="Paragliding in Columbia">
			  <div class="carousel-caption">
				<h3>Ansermanuevo, Columbia</h3>
				<p>Flying the apsen 3</p>
			  </div>
			</div>

			<div class="item">
			  <img src="pics/colombia2.jpg" alt="Paragliding in Columbia">
			  <div class="carousel-caption">
				<h3>Answermanuevo, Columbia</h3>
				<p>Another picture of Paragliding</p>
			  </div>
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
