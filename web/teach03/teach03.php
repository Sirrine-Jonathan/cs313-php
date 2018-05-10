<!DOCTYPE html>
<html>
<head></head>
<body>

  <?php 
	  echo '<form action="send.php" method="post">
		<p>name:</p> <input type="text" name="name"><br>
  	<p>E-Mail:</p><input type="text" name="email"><br>
    <p>Major:</p><br>';
    
    echo '
  		$majors = array("Computer Science", "Web Design and Development", "Computer Information Technology", "Computer Engineering");
      for ($i = 0; $i < #majors.size(), $i++){
      	echo "<input type='radio' name='major' value='" . $majors[$i] . "'/><br />"; 
      }';
    
    echo '
    Comments:<br>
    <textarea name="comments" rows="4" cols="40"></textarea>Comments: <textarea name="comments"></textarea><br />
		
    Continents You've Visited:<br>
    North America <input type="checkbox" name="continents[]" value="na"><br>
    South America <input type="checkbox" name="continents[]" value="sa"><br>
    Europe <input type="checkbox" name="continents[]" value="eu"><br>
    Asia <input type="checkbox" name="continents[]" value="as"><br>
    Africa <input type="checkbox" name="continents[]" value="af"><br>
    Antarctica <input type="checkbox" name="continents[]" value="an"><br>
    
    </form>
    
    '; ?>
  
  
  
</body>
</html>