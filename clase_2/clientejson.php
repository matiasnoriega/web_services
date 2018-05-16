<?php
/**


**/


//error_reporting(0); <-- Si queremos apagar el reporte de errores

define('URL', 'http://127.0.0.1/web_services/clase_2/paises.php');

$informacion = file_get_contents(URL);


if($informacion !== false){

	$paises = json_decode($informacion, true);

	foreach($paises['paises'] as $pais){	
		echo "El nombre del pais: " . $pais['nombre'] . "</br>";
		echo "El ID del pais: " . $pais['id'] . "</br>";
		echo "-------------------------" . "</br>";
	}

	

}else{

	$fp = fopen('error.log', 'a+');
	$datetime = new Datetime();
	$ahora = $datetime->format("Y-m-d H:i:s");

	$string = "[ ".$ahora."] URL no encontrada: ".URL." ".__LINE__.PHP_EOL;

	fwrite($fp, $string);
	fclose($fp);
}