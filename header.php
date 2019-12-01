 <?php		
	$user = $_GET['user'];
	//$content holds a 2D array with keys being menu names and values being an array with a subtitle, and content
	$content = array(
		"Add Shop" => "addShop.php",
		"Add Drink" => "addDrink.php",
		"Add Customer" => "addCustomer.php",
		"Add Manager" => "addManager.php",
		"List Shops" => "listShops.php",
		"List Drinks" => "listDrinks.php",
		"List Customers" => "listCustomers.php",
		"List Managers" => "listManagers.php");
?>
<header> 
	My Site - <em>Welcome <span id="username"><?php echo $user;?></span>!</em>
</header>
<nav>
	<ul>
	<?php
		foreach ($content as $page => $location){
			echo "<li><a href='$location?user=".$user."' ".($page==$currentpage?" class='active'":"").">".$page."</a></li>";			
		}
	?>
	</ul>
</nav>
