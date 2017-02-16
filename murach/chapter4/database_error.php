<!DOCTYPE html>
<html>
<head>
	<title>My Guitar Shop</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<div id="page">
	<div id='main'>
		<h1>DataBase Error</h1>
		<p>There was an error connecting to the database.</p>
		<p>The database must be installed as described in appendix A.</p>
		<p>The database must be running as described in chapter 1.</p>
		<p>Error message: <?= $error_message; ?>
	</div>
</div>
</body>
</html>