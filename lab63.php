<?php 

include("class_lib.php");

$soporte = new Soporte("The soccer Game", 22, 3);
echo "<br> " . $soporte->titulo;
echo "<br> Precio: " . $soporte->dame_precio_sin_itbm() . " dolares";
echo "<br> Precio ITBM incluido: " . $soporte->dame_precio_con_itbm();


$miVideo = new Video("Los Otros", 22, 4.5, "115 minutos");
echo "<br>";
echo "<br>";
echo "<br>" . $miVideo->titulo;
echo "<br> Precio: " . $miVideo->dame_precio_sin_itbm() . " dolares";
echo "<br> Precio ITBM incluido: " . $miVideo->dame_precio_con_itbm();


$miJuego = new Juego("Pes 18", 21, 2.5, "Xbox 360", 1, 2);
$miJuego->imprime_caracteristicas();
$miJuego->imprime_jugadores_posibles();
echo "<br>";
$miJuego2 = new Juego("Fifa 18", 27, 3, "PS 4", 1, 2);
echo "<b>" . $miJuego2->titulo . "</b> <br>";
$miJuego2->imprime_jugadores_posibles();


?>