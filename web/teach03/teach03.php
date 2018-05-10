<!DOCTYPE html>
<html>
<head>
	<title>Teach03</title>
</head>
<body>
	<h1>Teach03</h1>
	
	<form action="send.php" method="post">
		<p>name:</p><input type="text" name="name" /><br />
		<p>E-Mail:</p><input type="text" name="email" /><br />
		<p>Major:</p><br />
		

		
		<p>Comments:</p><br />
		<textarea name="comments" rows="4" cols="40"></textarea><br />
			
			
		<p>Continents You've Visited:</p><br />
		<p>North America</p><input type="checkbox" name="continents[]" value="na"><br />
		<p>South America</p><input type="checkbox" name="continents[]" value="sa"><br />
		<p>Europe</p><input type="checkbox" name="continents[]" value="eu"><br />
		<p>Asia</p><input type="checkbox" name="continents[]" value="as"><br />
		<p>Africa</p><input type="checkbox" name="continents[]" value="af"><br />
		<p>Antarctica</p><input type="checkbox" name="continents[]" value="an"><br />
    </form>
	
</body>
</html>