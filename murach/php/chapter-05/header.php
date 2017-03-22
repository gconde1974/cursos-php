<?php

//header function
header('Location: .')

//how to redirect a request
if ($action == 'delete_product'){
	$product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
	if ($product_id != NULL || $product_id != false) {
		delete_product($product_id);
		header('LOCATION: .');
	}
}

//HOW TO REDIRECT A REQUEST THAT INCLUDES A PARAMETER
if ($action == 'delete_product'){
	$product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
	$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
	if ($category_id != NULL || $category_id != false || $product_id != NULL || $product_id != false){
		delete_product($product_id);
		header('LOCATION: .?category_id=$category_id');
	}
}