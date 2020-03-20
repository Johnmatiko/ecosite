<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>POS</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Add Product</h2>
  </div>
	
  <form method="post" action="add.php">
	  <div class="input-group">
  	  <label>Barcode</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Product Name</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Price</label>
  	  <input type="password" name="password_1">
  	</div>
  	
	<div class="input-group">
  	  <label>Stocks</label>
  	  <input type="password" name="password_2">
  	</div>
	<div class="input-group">
  	  <label>Unit</label>
  	  <input type="password" name="password_2">
  	</div>
	<div class="input-group">
  	  <label>Minimum Stocks</label>
  	  <input type="password" name="password_2">
  	</div>
	<div class="input-group">
  	  <label>Actions</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>
product_no	product_name	sell_price	quantity	unit	min_stocks	images