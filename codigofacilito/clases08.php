<?php

interface Auto{

	public function encender();
	public function apagar();

}


interface gasolina extends Auto{

	public function vaciarTanque();
	public function llenarTanque($cant);

}


class Deportivo implements gasolina{

	//atributos
	private $estado = false;
	private $tanque = 0;

	//metodos
	public function estado(){
		if($this->estado){
			echo "el auto esta <b>prendido</b> y tiene ".$this->tanque." de litros en el tanque<br>";
		} else {
			echo "el auto esta <b>apagado</b><br>";
		}
	}


	public function encender(){
		if($this->estado){
			echo "el auto YA ESTA PRENDIDO<br>";
		} else {
			if($this->tanque <= 0){
				echo "sin gasolina no puede prender el auto<br>";
			} else {
				echo "encendemos el auto<br>";
			$this->estado = true;	
			}
			
		}
	}

	public function apagar(){
		if($this->estado){
			echo "apagamos el carro<br>";
			$this->estado = false;
		} else {
			echo "el auto ya estaba <b>apagado</b><br>";
		}
	}

	public function vaciarTanque(){
		$this->tanque = 0;
	}

	public function llenarTanque($cant){
		echo "el auto tiene ".$this->tanque = $cant." litros de gasolina<br>";
	}

	public function usar($km){
		if($this->estado){
			$reducir = $km / 3;
			$this->tanque = $this->tanque - $reducir;
			$distancia = $km + $km;
			echo "me quedan " .$this->tanque. " litros y avanzamos ".$distancia. " kilometros<br>";
		} else {
			echo "el auto esta apagado y no se puede usar<br>";
		}
	}

}

$objeto = new Deportivo;
$objeto->estado();
$objeto->encender();
$objeto->estado();
$objeto->llenarTanque(100);
$objeto->estado();
$objeto->encender();
$objeto->usar(30);
$objeto->usar(20);
$objeto->estado();