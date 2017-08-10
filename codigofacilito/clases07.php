<?php

class Pagina {

	//atributos
	public $nombre = "Sitio RoyalReservations";
	public static $url = "https://royalreservations.com";

	//metodos
	public function bienvenida(){
		echo "bienvenido a <b>".$this->nombre."</b> la pagina es <b>".self::$url."</b>";
	}

}


$sitio = new Pagina();
$sitio->bienvenida();