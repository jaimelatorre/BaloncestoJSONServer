<?php

/*  Formato JSON esperado */

$arrEsperado = array();
$arrJugadorEsperado = array();

$arrEsperado["peticion"] = "add";

$arrJugadorEsperado["nombre"] = "Lorenzo (Un string)";
$arrJugadorEsperado["equipo"] = "2 (Un int)";
$arrJugadorEsperado["numero"] = "2 (Un int)";

$arrEsperado["jugador"] = $arrJugadorEsperado;


/* Funcion para comprobar si el recibido es igual al esperado */

function JSONCorrectoAnnadir($recibido){

	$auxCorrecto = false;

	if(isset($recibido["peticion"]) && $recibido["peticion"] =="add" && isset($recibido["jugador"])){

		$auxJugador = $recibido["jugador"];
		if(isset($auxJugador["nombre"]) && isset($auxJugador["equipo"]) && isset($auxJugador["numero"])){
			$auxCorrecto = true;
		}
	}
	return $auxCorrecto;
}

function JSONCorrectoModificar($recibido){

	$auxCorrecto = false;

	if(isset($recibido["peticon"]) && $recibido["peticion"] =="update" && isset($recibido["jugadorModificar"])){

		$auxJugador = $recibido["jugadorModificar"];
		if(isset($auxJugador["id"]) && isset($auxJugador["nombre"]) && isset($auxJugador["equipo"]) && isset($auxJugador["numero"])){
			$auxCorrecto = true;
		}
	}

	return $auxCorrecto;
}
