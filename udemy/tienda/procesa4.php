<?php

$validaciones = [];

if(!empty($_POST)){

	function is_date($value) {
		$value = explode('/', $value);
		if(count($value) !== 3) return false;
		return checkdate($value[1], $value[0], $value[2]);
	};
	
	if(empty($_POST['nombre'])) {
		$validaciones['nombre'] = 'el campo nombre es requerido';
	} else if(strlen($_POST['nombre']) < 3) {
		$validaciones['nombre'] = 'el campo nombre requiere como minimo 3 caracteres';
	}

	if(empty($_POST['correo'])) {
		$validaciones['correo'] = 'el campo correo es requerido';
	} else if(!filter_input(INPUT_POST, 'correo', FILTER_VALIDATE_EMAIL)) {
		$validaciones['correo'] = 'el campo correo requiere que sea correo valido';
	}

	// dd/mm/yyyy
	if(!empty($_POST['fecha'])) {
		if(!is_date($_POST['fecha'])) {
			$validaciones['fecha'] = 'el campo fecha requiere una fecha valida dd/mm/yyyy';
		}
	}

	if(!empty($_POST['web'])) {
		if(!filter_input(INPUT_POST, 'web', FILTER_VALIDATE_URL)) {
			$validaciones['web'] = 'el campo web requiere una direccion valida';
		}
	}

	if(empty($_POST['acepto'])) {
		$validaciones['acepto'] = 'Debe de aceptar los terminos y condiciones';
	}

	//echo 'segun instruccion esta vacio';
	//var_dump($validaciones);

	echo json_encode([
		'response' => count($validaciones) === 0,
		'errors' => $validaciones
	]);

};