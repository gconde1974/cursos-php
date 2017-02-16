<?php

$valorInicial = 892;
$valorPorcentaje = 100;
$valorParcial = 176;

$resultado = ($valorParcial * $valorPorcentaje) / $valorInicial;

echo 'Regla de tres<hr>';
echo 'Del Valor de '.$valorInicial.' al '.$valorPorcentaje.'%<br>';
echo 'El porcentaje de '.$valorParcial.' es ';
echo round($resultado, 2).'%';