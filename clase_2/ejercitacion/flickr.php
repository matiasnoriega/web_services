<?php

define('URL', 'https://api.flickr.com/services/rest/?method=flickr.photos.getRecent&name=value');
define('API_KEY', '&api_key=df82fb9934d7d38eb6b095d0dafe26b3');
define('PER_PAGE', '&per_page=50');

$informacion = file_get_contents(URL.API_KEY.PER_PAGE);

//$fotos = simplexml_load_string($informacion);

$fotos = new simpleXMLElement($informacion);

// Ejemplo de construccion: https://farm{farm-id}.staticflickr.com/{server-id}/{id}_{secret}_[mstzb].jpg

foreach ($fotos->photos->photo as $foto) {

	$url_imagen = "https://farm" . $foto['farm'] . ".staticflickr.com/" . $foto['server'] . "/" . $foto['id'] . "_" . $foto['secret'] . "_n.jpg";

	echo "<div style='background: grey; border-radius: 5px; padding: 10px; vertical-align: middle; width: 30%'>";

	echo "<img src='" . $url_imagen . "'><h4>" . $foto['title'] . "</h4>";

	echo "</div></br></br>";

}

