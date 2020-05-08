<?php

// $data = new DateTime();

// echo $data->format('d/m/y H:i:s') . PHP_EOL;

// $intervalo = new DateInterval('P1Y');

// $data->add($intervalo);
// echo $data->format('d/m/y H:i:s') . PHP_EOL;

// $intervalo = new DateInterval('P1D');

// $data->add($intervalo);
// echo $data->format('d/m/y H:i:s') . PHP_EOL;

// $intervalo = new DateInterval('P2M');

// $data->add($intervalo);
// echo $data->format('d/m/y H:i:s') . PHP_EOL;

// $intervalo = new DateInterval('P1Y2M3DT1H2M3S');

// $data->add($intervalo);
// echo $data->format('d/m/y H:i:s') . PHP_EOL;

$data1 = new DateTime();
$data2 = new DateTime();
$intervalo = new DateInterval('PT5M');
//$data1->add($intervalo);

//$intervaloCalculado = $data1->diff($data2);

// echo $intervaloCalculado->format('Diferença em minutos %im.');

if ($data1 > $data2)
    echo 'Data 1 superior';
else 
    echo 'Data 2 superior';
