<?php

//AVANCE EN PHP
/*
$valorInicial = 892;
$valorPorcentaje = 100;
$valorParcial = 186;
*/

//AVANCE EN HTML
$valorInicial = 656;
$valorPorcentaje = 100;
$valorParcial = 128;

$resultado = ($valorParcial * $valorPorcentaje) / $valorInicial;

echo 'Regla de tres<hr>';
echo 'Del Valor de '.$valorInicial.' al '.$valorPorcentaje.'%<br>';
echo 'El porcentaje de '.$valorParcial.' es ';
echo round($resultado, 2).'%';