<?php 


$paises = array('paises' => 	
					array( 0 => 

						array(	"id" => 1,
								"nombre" => "Argentina"
						),
						array( 	"id" => 2,
								"nombre" => "Brasil"
						),
						array(	"id" => 3,
								"nombre" => "Peru"
						),
						array(	"id" => 4,
								"nombre" => "Uruguay"
						),
						array(	"id" => 5,
								"nombre" => "Chile"
						),
						array(	"id" => 6,
								"nombre" => "Bolivia"
						)
					)
				);


header("Content-Type: application/json");
echo json_encode($paises);



