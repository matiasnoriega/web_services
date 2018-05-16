<?php 


$paises = array( "paises" => array( 
									"id" => 1,
									"nombre" => "Argentina")
);


header("Content-Type: application/json");
echo json_encode($paises);



 ?>