<?php

$usuario = $_GET['usuario'];

try {
    if ($usuario != 'andre')
        throw new Exception('Usuário sem acesso', 1);
        
    echo 'Bem-vindo, andre' . PHP_EOL;
        
} catch (\Throwable $th) {
    echo 'Erro capturado: ' . $th->getMessage();
    die();
    //throw $th;
}

echo 'FIM';
