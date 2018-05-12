<!DOCTYPE html>
<html>
<head>
	<title>Checkout</title>
	<link rel="stylesheet" href="base.css" /> 
</head>
<body>
	<h1>Cart</h1>
	<div class="nav_box" >
		<a href="cart03.php">Cart</a>
	</div>
	<div class="main_content">
		<form id="checkoutForm" method="POST" action="<?php echo htmlspecialchars("confirm03.php") ?>">
               <h3>Checkout</h3>
               <div class="form-group">
                  <input type="text" class="form-control" id="street" name="street" oninput="validateStreet(this)" placeholder="Street" />
                  <div class="invalid-feedback">Street required</div>
               </div>
               <div class="form-group">
                  <input type="" class="form-control" id="city" name="city" oninput="validateCity(this)" placeholder="City" />
                  <div class="invalid-feedback">City required</div>
               </div>
               <label for="state">State</label>
               <select class="custom-select" id="state" name="state" oninput="validateState(this)">
                  <option value="false" selected="selected">Select a State</option>
                  <option value="AL">Alabama</option>
                  <option value="AK">Alaska</option>
                  <option value="AZ">Arizona</option>
                  <option value="AR">Arkansas</option>
                  <option value="CA">California</option>
                  <option value="CO">Colorado</option>
                  <option value="CT">Connecticut</option>
                  <option value="DE">Delaware</option>
                  <option value="DC">District Of Columbia</option>
                  <option value="FL">Florida</option>
                  <option value="GA">Georgia</option>
                  <option value="HI">Hawaii</option>
                  <option value="ID">Idaho</option>
                  <option value="IL">Illinois</option>
                  <option value="IN">Indiana</option>
                  <option value="IA">Iowa</option>
                  <option value="KS">Kansas</option>
                  <option value="KY">Kentucky</option>
                  <option value="LA">Louisiana</option>
                  <option value="ME">Maine</option>
                  <option value="MD">Maryland</option>
                  <option value="MA">Massachusetts</option>
                  <option value="MI">Michigan</option>
                  <option value="MN">Minnesota</option>
                  <option value="MS">Mississippi</option>
                  <option value="MO">Missouri</option>
                  <option value="MT">Montana</option>
                  <option value="NE">Nebraska</option>
                  <option value="NV">Nevada</option>
                  <option value="NH">New Hampshire</option>
                  <option value="NJ">New Jersey</option>
                  <option value="NM">New Mexico</option>
                  <option value="NY">New York</option>
                  <option value="NC">North Carolina</option>
                  <option value="ND">North Dakota</option>
                  <option value="OH">Ohio</option>
                  <option value="OK">Oklahoma</option>
                  <option value="OR">Oregon</option>
                  <option value="PA">Pennsylvania</option>
                  <option value="RI">Rhode Island</option>
                  <option value="SC">South Carolina</option>
                  <option value="SD">South Dakota</option>
                  <option value="TN">Tennessee</option>
                  <option value="TX">Texas</option>
                  <option value="UT">Utah</option>
                  <option value="VT">Vermont</option>
                  <option value="VA">Virginia</option>
                  <option value="WA">Washington</option>
                  <option value="WV">West Virginia</option>
                  <option value="WI">Wisconsin</option>
                  <option value="WY">Wyoming</option>
               </select>
               <div class="invalid-feedback">Select your state</div>
               <div class="form-group">
                  <label for="zipcodeInput">Zip Code</label>
                  <input type="" class="form-control" name="zip" id="zipcodeInput" oninput="validateZipcode(this)" placeholder="xxxxx" />
                  <div class="invalid-feedback">Invalid Format xxxxx</div>
               </div>             
               <button type="submit" id="formSubmit" class="btn btn-primary">Confirm Purchase</button>
               <button type="reset" class="btn btn-danger">Reset</button>
            </form>
		</form>
	</div>
	<script src="validation.js"></script>
</body>
</html>