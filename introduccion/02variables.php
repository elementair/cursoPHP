<?php

#Variables Numericas
$numero = 5;
echo "Esto es una variable Numero: $numero<br>";
var_dump($numero);
echo "<br><br>";

#Variables Numericas
$palabra = "palabra";
echo "Esto es una variable texto: $palabra<br>";
var_dump($palabra);
echo "<br><br>";

#Variables Numericas
$boleana = true;
echo "Esto es una variable boleana: $boleana<br>";
var_dump($boleana);
echo "<br><br>";

#Variables Arreglo
$colores = array("rojo","amarillo","verde");
echo "Esto es una variable arreglo: $colores[1]<br>";
var_dump($colores);
echo "<br><br>";

#Variables Arreglo con propiedades
$verduras = array("verdura1"=>"lechuga","verdura2"=>"cebolla");
echo "Esto es una variable arreglo con propiedades: $verduras[verdura2]<br>";
var_dump($verduras);
echo "<br><br>";

#Variables Arreglo con propiedades
$frutas = (object)["fruta1"=>"pera","fruta2"=>"manzana"];
echo "Esto es una variable objeto: $frutas->fruta1<br>";
var_dump($frutas);
echo "<br><br>";

 ?>