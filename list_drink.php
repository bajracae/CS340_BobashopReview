<!DOCTYPE html>
<meta charset="utf-8"/>
<?php
		$currentpage="List Drinks";
?>
<html>
	<head>
		<title>List Drinks</title>
		<link rel="stylesheet" href="index.css">
	</head>
<body>

<?php
	if(isset($_POST['submit'])){
		$data_missing = array();
		
		if(empty($_POST['Flavor'])){
	       	// Adds name to array
	        $data_missing[] = 'Flavor';
	    } 
		else {
	        // Trim white space from the name and store the name
	        $Flavor = trim($_POST['Flavor']);
	    }
		
		if(empty($_POST['Temperature'])){
	       	// Adds name to array
	        $data_missing[] = 'Temperature';
	    } 
		else {
	        // Trim white space from the name and store the name
	        $Temperature = trim($_POST['Temperature']);
	    }
		
		if(empty($_POST['Price'])){
	       	// Adds name to array
	        $data_missing[] = 'Price';
	    } 
		else {
	        // Trim white space from the name and store the name
	        $Price = trim($_POST['Price']);
	    }
		
		if(empty($data_missing)){
			require_once('connectvars.php');
			
			$query = "INSERT INTO `a.Drink` (DrinkID, Temperature, Flavor,
	        Price, ) VALUES (NULL, ?, ?, ?)";
			
	        $stmt = mysqli_prepare($dbc, $query);
			
	        d Doubles
	        s Everything Else
	         
	        mysqli_stmt_bind_param($stmt, "ssd", $Temperature,
									$Flavor, $Price);
									
	        mysqli_stmt_execute($stmt);
			
	        $affected_rows = mysqli_stmt_affected_rows($stmt);
			
			if($affected_rows == 1){ 
	            echo 'Drink Entered';
	            mysqli_stmt_close($stmt);
	            mysqli_close($dbc);
	        }
			else {
	            echo 'Error Occurred<br />';
	            echo mysqli_error();
	            mysqli_stmt_close($stmt);
	            mysqli_close($dbc);
	        }
		}
		else {
			echo 'You need to enter the following data<br />';
	        foreach($data_missing as $missing){
	            echo "$missing<br />";
	        }
		}
	}
?>

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

	
