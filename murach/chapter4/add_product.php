<?php 

//GET THE PRODUCT DATA
$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
$code = filter_input(INPUT_POST, 'code');
$name = filter_input(INPUT_POST, 'name');
$price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_INT);

//VALIDATE INPUTS
if ($category_id == null || $category_id == false || $code == null || $name == null || $price == null || $price == false) {
	$error = 'Invalid product data. Check all fields and try again.';
	include('error.php');
} else {
	require_once('database.php');

	//ADD THE PRODUCT TO THE DATABASE
	$query = "INSERT INTO products (categoryID, productCode, productName, listPrice)
			  VALUES (:category_id, :code, :name, :price)";
	$statement = $db -> prepare($query);
	$statement -> bindValue(':category_id', $category_id);
	$statement -> bindValue(':code', $code);
	$statement -> bindValue(':name', $name);
	$statement -> bindValue(':price', $price);
	$statement -> execute();
	$statement -> closeCursor();

	//DISPLAY THE PRODUCT LIST PAGE
	include('index.php');
}