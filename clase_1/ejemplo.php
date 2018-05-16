<?php

/*METODO 1: Levantamos el XML con un string 


$xml = file_get_contents('menu.xml');

$menu = simplexml_load_string($xml);

echo "<pre>";
var_dump($menu);
echo "</pre>";

*/

/*METODO 2: Levantamos el XML con un archivo xml.
	

$xml = simplexml_load_file('menu.xml');

echo "<pre>";
var_dump($xml);
echo "</pre>";

*/


/*METODO 3: Objetos

$xml = file_get_contents('menu.xml');

$menu = new simpleXMLElement($xml);

foreach ($menu->food as $comida) {
	
	echo $comida->name . "<br>";
	echo "----------------<br>";
}

*/

$xml = new simpleXMLElement("menu.xml", NULL, true);

$comida = $xml->addChild('food');
$comida->addChild('name', 'choripan');
$comida->addChild('price', '$62.95');
$comida->addChild('calories', 'over 9000');
$comida->addChild('description', 'chorizo entre panes');

header('Content-type: text/xml');
echo $xml->asXML();
