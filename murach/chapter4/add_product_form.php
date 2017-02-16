<?php

require('database.php');

$query = "SELECT *
		  FROM categories
		  ORDER BY categoryID";
$statement = $db -> prepare($query);
$statement -> execute();
$categories = $statement -> fetchAll();
$statement -> closeCursor();

?>

<!DOCTYPE html>
<html>
<head>
	<title>My Guitar Shop</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<header><h1>Product Manager</h1></header>
	<main>
		<h1>Add Product</h1>
		<form action="add_product.php" method="post" id="add_product_form">
			<label>Category</label>
			<select name="category_id">
			<?php foreach ($categories as $category) { ?>
				<option value="<?= $category['categoryID'] ;?>"><?= $category['categoryName'] ;?></option>
			<?php } ?>
			</select><br>
			<label>Code:</label>
			<input type="text" name="code"><br>
			<label>Name:</label>
			<input type="text" name="name"><br>
			<label>List Price:</label>
			<input type="text" name="price"><br>
			<label>&nbsp;</label>
			<input type="submit" name="Add Product"><br>
		</form>
		<p><a href="index.php">View Product List</a></p>
	</main>
	<footer>
		<p>&copy; <?= date('Y'); ?> My guitar Shop, Inc.</p>
	</footer>
</body>
</html>