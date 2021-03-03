<?php

$mongoClient = new \MongoDB\Client("mongodb://localhost");
$presupuesto = $mongoClient->Presupuesto->presupuestos;
$gasto = $mongoClient->Presupuesto->gastos;
$ingreso = $mongoClient->Presupuesto->ingreso;

return [
    // Container Test
    \Src\Controllers\TestController::class =>
            \DI\autowire()
];