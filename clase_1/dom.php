<?php

$dom = new DomDocument();
$dom->load('menu.xml');

$dom->save('/home/matias/Descargas/informacion.xml');