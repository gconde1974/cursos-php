<?php

//SYNTAX
function nombreFuncion ([parametro]) {
	//statements that are executed bu the function
}

//FUNCTION WITH ONE PARAMETER
function get_products_by_category ($category_id) {
	global $db;
	$query = 'SELECT *
			  FROM products.categoryID = :category_id
			  ORDER BY productID';
	$statement = $db -> prepare($query);
	$statement -> bindValue("category_id", $category_id);
	$statement -> execute();
	$products = $statement -> fetchaAll();
	$statement -> closeCursor();
	return $products;
}

//FUNCTION WITH FOUR PARAMETERS
function add_product($category_id, $code, $name, $price){
	global $db;
	$query = 'INSERT INTO products (categoryID, productCode, productName, listPrice)
			  VALUES (:category_id, :code, :name, :price)';
	$query = $db -> prepare($query);
	$statement -> bindValue(':category_id', $category_id);
	$statement -> bindValue(':code', $code);
	$statement -> bindValue(':name', $name);
	$statement -> bindValue(':price',$price);
	$statement -> execute();
	$statement -> closeCursor();
}

//COMO LLAMAR A UNA FUNCION
$products = get_products_by_category($category_id);
add_product($category_id, $code, $name, $price);



