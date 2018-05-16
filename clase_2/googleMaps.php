<?php

/*
* Consumimos API de Google Maps Geocode
* Importante: ES necesario obtener un key para poder acceder de la URL.
*/

define('URL', 'https://maps.googleapis.com/maps/api/geocode/json?&key=AIzaSyDnoF8vGxmMBo348wggVhUY0kWBat_Qbdg&address=');

$direccion = $_GET['direccion'];

$info = file_get_contents(URL.urlencode($direccion));

var_dump(URL.urlencode($direccion));


if($info !== false){

	$resultado = json_decode($info, true);

	if($resultado['status'] == "OK"){

		echo "Latitud: ".$resultado["results"][0]["geometry"]["location"]["lat"];
		echo "</br>";
		echo "Longitud: ".$resultado["results"][0]["geometry"]["location"]["lng"];
	}

}