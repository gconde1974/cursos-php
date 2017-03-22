<?php

// INSERT STATEMENT
$category_id = 1;
$code = 'start';
$name = 'Fender Stratocaster';
$price = 699.99;

$query = "INSERT INTO products (categoryID, productsCode, productName, listPrice
		  VALUES (:category_id, ':code', ':name', :price)";

$statement = $db -> prepare($query);
$statement -> bindValue(':category_id', $category_id);
$statement -> bindValue(':code', $code);
$statement -> bindValue(':name', $name);
$statement -> bindValue(':price', $price);
$statement -> execute();
$statement -> closeCursor();

//UPDATE STATEMENT
$product_id = 4;
$price = 599.99;

$query = "UPDATE products
		  SET listPrice = :price
		  WHERE productID = :product_id";

$statement = $db -> prepare($query);
$statement -> bindValue(':price', $price);
$statement -> bindValue(':product_id', $product_id);
$statement -> execute();
$statement -> closeCursor();


//DELETE STATEMENT
$product_id = 4;

$query = "DELETE FROM products
		  WHERE productID = :product_id";

$statement = $db -> prepare($query);
$statement -> bindValue(':product_id', $product_id);
$statement -> execute();
$statement -> closeCursor();