<?php
$url = $_GET['u'];


//Crea una variable con el tiempo inicial
$tiempo_inicial = microtime(true);



// Coloca en este espacio tu
// PHP
// HTML
// JavaScript
// CSS
// etc,
$html = file_get_contents($url); //Convierte la información de la URL en cadena
echo $html;



//Crea una variable con el tiempo final
$tiempo_final = microtime(true);
//Restamos los dos tiempos
$tiempo_ejecucion = $tiempo_final - $tiempo_inicial;

echo 'La página '.$url. ' tardó '.round($tiempo_ejecucion,4).' segundos en ejecutarse';
?>