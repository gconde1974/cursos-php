<?php

//var_dump($_POST);

echo json_encode([
	'response' => 'conexion completada',
	'data' => $_POST
]);