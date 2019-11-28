<!DOCTYPE html>
<meta charset="utf-8"/>
<!-- Add Part Info to Table Part -->
<?php
		$currentpage="Add Drinks";
?>
<html>
	<head>
		<title>Add Drinks</title>
		<link rel="stylesheet" href="index.css">
		<script type = "text/javascript"  src = "verifyInput.js" > </script> 
	</head>
<body>
	<form method="post" id="addForm">
		<b>Add a New Drink</b>
		<p>Flavor:
		<input type="text" name="Flavor" size="30" value="" />
		</p>
	        
		<p>Temperature:
		<input type="text" name="Temperature" size="30" value="" />
		</p>
		
		<p>Price:
		<input type="text" name="Price" size="30" value="" />
		</p>
		
		<p>
			<input type = "submit" name="submit" value = "Send" />
		</p>
	</form>
</body>
</html>
