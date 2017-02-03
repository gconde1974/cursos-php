<?php

require('database.php');

//Get category ID
$category_id = filter_input(INPUT_GET, 'category_id', FILTER_VALIDATE_INT);
if($category_id == NULL || $category_id == FALSE) {
	$category_id = 1;
}

//Get name for current category
$queryCategory = "SELECT * FROM categories
				  WHERE categoryID = $category_id";
$statement1 = $db -> prepare($queryCategory);
$statement1 -> bindValue(':category_id', $category_id);
$statement1 -> execute();
$category = $statement1 -> fetch();
$category_name = $category['categoryName'];
$statement1 -> closeCursor();
//var_dump($category_name);

//Get all categories
$query = "SELECT * FROM categories
		  ORDER BY categoryID";
$categories = $db -> query($query);
//var_dump($categories);

//Get products for selected category
$query = "SELECT * FROM products
		  WHERE categoryID = $category_id
		  ORDER BY productID";
$products = $db -> query($query);
//var_dump($products);

?>
<!DOCTYPE html>
<html>
<head>
	<title>My Guitar Shop</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<div id="page">
	<div id="main">
		<h1>Product List</h1>
		<aside>
			<h2>Categories</h2>
			<ul class="nav">
				<?php foreach($categories as $category) { ?>
					<li>
						<a href="?category_id=<?php echo $category['categoryID'];?>">
							<?php echo $category['categoryName']; ?>
						</a>
					</li>
				<?php } ?>
			</ul>
		</aside>
		<div id="content">
			<h2><?= $category_name ?></h2>
			<table>
				<tr>
					<th>Code</th>
					<th>Name</th>
					<th class="right">Price</th>
				</tr>
				<?php foreach($products as $product) { ?>
				<tr>
					<td><?= $product['productCode']; ?></td>
					<td><?= $product['productName']; ?></td>
					<td class="right"><?= $product['listPrice']; ?></td>
				</tr>
				<?php } ?>
			</table>
		</div>
	</div>
</div>
</body>
</html>