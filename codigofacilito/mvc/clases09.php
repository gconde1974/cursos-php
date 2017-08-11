<?php

abstract class Molde{

	abstract public function ingresaNombre($nombre);
	abstract public function obtenerNombre();

}

class Person extends Molde{
	//atributo
	private $mensaje = "hola mundo 1";

	//metodo
	public function mostrar(){
		echo $this->mensaje;
	}

	public function ingresaNombre($nombre){
		echo $this->nombre = $nombre;
	}
	public function obtenerNombre(){
		echo $this->nombre;
	}

}

$obj = new Person();
$obj->mostrar();
$obj->ingresaNombre("gabriel");
$obj->obtenerNombre();