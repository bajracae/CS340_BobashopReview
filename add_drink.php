<!DOCTYPE html>
<!-- Add Part Info to Table Part -->
<?php
		$currentpage="Add Drink";
?>
<html>
	<head>
		<title>Add Drink</title>
		<link rel="stylesheet" href="index.css">
		<script type = "text/javascript"  src = "verifyInput.js" > </script> 
	</head>
<body>



    <h2> <?php echo $msg; ?> </h2>

	<form method="post" id="addForm">
		<legend>Drink Info:</legend>
		<p>
			<label for="Name">Drink Name:</label>
			<input type="text" class="required" name="pname" id="pname">
        </p>
        
		<p>
			<label for="Color">Color:</label>
			<input type="text" class="required" name="color" id="color">
        <p>
		<input type = "submit"  value = "Submit" />
        <input type = "reset"  value = "Clear Form" />
    </p>
	</form>
</body>
</html>
