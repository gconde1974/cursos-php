<?php

spl_autoload_register(function($clase){

	//print_r($clase);
	$ruta = str_replace("\\", "/", $clase) . ".php";

	//print_r($ruta);
	if (is_readable($ruta)){
		require_once $ruta;
	} else {
		echo "el archivo no existe";
	};

});

/*
require_once"model-12/Persona.php";
require_once"controller-12/PersonasController.php";
*/

Modelando\Persona::Hola();
Controlador\PersonasController::Hola();