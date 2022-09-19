<?php 

include("class_lib.php");

//instancias
$cliente1 = new Cliente("Pepe", 1);
$cliente2 = new Cliente("Roberto", 564);

echo "<br> El identificador del cliente 1 es: " . $cliente1->dame_numero();
echo "<br> El identificador del cliente 2 es: " . $cliente2->dame_numero();

?>