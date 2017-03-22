<!DOCTYPE html>
<html>
<head>
	<title>Future Value Calculator</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<div id="content">
	<h1>Future Value Calculator</h1>
	<?php if(!empty($error_message)) { ?>
		<p class="error"><?php echo $error_message; ?></p>
	<?php } ?>
	<form action="display_results.php" method="post">
		<div>
			<label>Investment Amount:</label>
			<input type="text" name="investment" value="<?= $investment; ?>"><br>
			<label>Yearly Interest Rate:</label>
			<input type="text" name="interest_rate" value="<?= $interest_rate; ?>"><br>
			<label>Number of Years:</label>
			<input type="text" name="years" value="<?= $years; ?>"><br>
		</div>
		<div class="buttons">
			<label>&nbsp;</label>
			<input type="submit" name="Calculate">
		</div>		
	</form>
	</div>
</body>
</html>