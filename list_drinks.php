﻿<!DOCTYPE html>
<?php
		$currentpage="List Drinks";
		$shop = $_GET['shop'];
?>
<html>
	<head>
		<title>List Drinks</title>
		<link rel="stylesheet" href="index.css">
	</head>
<body>


<?php
// change the value of $dbuser and $dbpass to your username and password
	include 'connectvars.php';
	include 'header.php';

echo"<div class=\"mainbody\">";
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if (!$conn) {
		die('Could not connect: ' . mysql_error());
	}

// query to select all information from supplier table

	$query = "SELECT * FROM Drink, Shop
		WHERE Drink.ShopID=Shop.ShopID
		AND Shop.ShopID= $shop";

// Get results from query
	$result = mysqli_query($conn, $query);
	if (!$result) {
		die("Query to show fields from table failed");
	}



	if(mysqli_num_rows($result) > 0){
        echo "<h1>Drinks</h1>";
		echo "<table id='t01' border='1'>";

		echo "<thead>";
			echo "<tr>";
			echo "<th>DrinkID</th>";
			echo "<th>Flavor</th>";
			echo "<th>Temperature</th>";
			echo "<th>Price</th>";
			echo "</tr>";
        echo "</thead>";
        echo "<tbody>";


		while($row = mysqli_fetch_array($result)){


		    echo "<tr>";
				echo "</tr>";
				echo "<td><a class='drinks' href = 'listRatings?user=".$user."&shop=".$shop
				."&drink=".$row['DrinkID']."' >".$row['DrinkID'] . "</td>";
				echo "<td>" . $row['Flavor'] . "</td>";
        echo "<td>" . $row['Temperature'] . "</td>";
				echo "<td>" . $row['Price'] . "</td>";
        echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
		// Free result set
        mysqli_free_result($result);
    } else{
		echo "<p class='lead'>No drinks yet for this shop! Would you like to</p>";
    }

	mysqli_close($conn);



echo "<bottom>";
echo "<input id=\"addButton\" type=\"Button\" value=\"Add a Drink\" onclick=\"window.location='add_drinks?user=".$user."&shop=".$shop."'\">";
echo "<input id=\"addButton\" type=\"Button\" value=\"Add a Rating\" onclick=\"window.location='addRating?user=".$user."&shop=".$shop."'\">";
// echo "Add a drink";
echo "</input>";
echo "</bottom>";
echo "</div>";
?>

</body>
</html>
