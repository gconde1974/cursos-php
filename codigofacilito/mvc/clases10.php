<?php

function autoload($clase){
	include "clases/".$clase.".php";
}

spl_autoload_register("autoload");

Persona::mostrar('gabriel');
Actividad::mostrar('diseñador');