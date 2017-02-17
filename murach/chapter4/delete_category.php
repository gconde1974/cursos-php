<?php

require_once('database.php');

$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);

//DELETE CATEGORY TO THE DATABASE
if ($category_id != false) {
	$query = "DELETE FROM categories
			  WHERE categoryID = :category_id";
	$statement = $db -> prepare($query);
	$statement -> bindValue(':category_id', $category_id);
	$success = $statement -> execute();
	$statement -> closeCursor();	
}

//DISPLAY THE CATEGORY LIST PAGE
include('category_list.php');

?>