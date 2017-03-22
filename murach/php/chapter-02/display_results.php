<?php
	//get the data from the form
	$investment = $_POST['investment'];
	$interest_rate = $_POST['interest_rate'];
	$years = $_POST['years'];

	//validate investment entry
	if (empty($investment)) {
		$error_message = 'Investment is a required field.';
	} elseif (!is_numeric($investment)) {
		$error_message = 'Investment must be a valid number';
	} elseif ($investment <= 0) {
		$error_message = 'Investment must be a greater than zero';
	//validate interest rate entry
	} elseif (empty($interest_rate)) {
		$error_message = 'Interest rate is a required field';
	} elseif (!is_numeric($interest_rate)) {
		$error_message = 'Interest rate must be a valid number';
	} elseif ($interest_rate <= 0) {
		$error_message = 'Interest rate must be greater than zero';
	//set error message to empty string if no invalid entries
	} else {
		$error_message = '';
	}

	//if an error message exists, go to the index page
	if ($error_message != '') {
		include('index.php');
		exit();
	}

	//calculate the future value
	$future_value = $investment;
	for ($i = 1; $i <= $years; $i++) {
		$future_value = ($future_value + ($future_value * $interest_rate * .01));
	}

	//apply currency and percent formatting
	$investment_f = '$'.number_format($investment, 2);
	$yearly_rate_f = $interest_rate.'%';
	$future_value_f = '$'.number_format($future_value, 2);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Future Value Calculator</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<div id="content">
		<h1>Future Value Calculator</h1>
		<label>Investment Amount:</label>
		<span><?= $investment_f; ?></span><br>
		<label>Yearly Interest Rate:</label>
		<span><?= $yearly_rate_f; ?></span><br>
		<label>Number of Years:</label>
		<span><?= $years; ?></span><br>
		<label>Future Value:</label>
		<span><?= $future_value_f; ?></span><br>
		<a href="index.php">Inicio</a>
	</div>
</body>
</html>