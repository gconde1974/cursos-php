<?php

//GET THE CATEGORY DATA
$categoryName = filter_input(INPUT_POST, 'categoryName');

//VALIDATE INPUTS
if ($categoryName == null) {
	$error = 'Invalid Category data. Check the field and try again.';
	include('error.php');
} else {
	require_once('database.php');

	//ADD THE CATEGORY TO THE DATABASE
	$query = "INSERT INTO categories (categoryName)
			  VALUES (:categoryName)";
	$statement = $db -> prepare($query);
	$statement -> bindValue(':categoryName', $categoryName);
	$statement -> execute();
	$statement -> closeCursor();

	//DISPLAY THE CATEGORY LIST PAGE
	include('category_list.php');
}

?>