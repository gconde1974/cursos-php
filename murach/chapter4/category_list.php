<?php

require('database.php');

//Get all categories
$queryAllCategories = "SELECT * FROM categories
		  			   ORDER BY categoryID";
$statement2 = $db -> prepare($queryAllCategories);
$statement2 -> execute();
$categories = $statement2 -> fetchAll();
$statement2 -> closeCursor();
//var_dump($categories);


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
		<h1>Category List</h1>
		<table>
			<tr>
				<th>Name</th>
				<th>&nbsp;</th>
			</tr>
			<?php foreach($categories as $category) { ?>
			<tr>
				<td><?= $category['categoryName']; ?></td>
				<td>
					<form action="delete_category.php" method="post" id="delete_category_form">
						<input type="hidden" name="category_id" value="<?= $category['categoryID'] ;?>">
						<input type="submit" name="Delete" value="Borrar">
					</form>
				</td>
			</tr>
			<?php } ?>
		</table>
		<br>
		<h2>Add Category</h2>
		<form action="add_category.php" method="post" id="add_category_form">
			<label>Name:</label>
			<input type="text" name="categoryName">
			<input type="submit" name="Add Category">
		</form>			
		<p><a href="index.php">Product List</a></p>
		</section>
	</main>
	<footer>
		<p>&copy; <?= date('Y'); ?> My Guitar Shop, Inc.</p>
	</footer>
</body>
</html>