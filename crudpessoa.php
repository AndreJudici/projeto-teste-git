<?php

declare(strict_types=1);

require 'pessoa.php';

$pessoa = new Pessoa();

$operacao = $_GET['operacao'];

switch ($operacao) {
    case 'insert':
        $resultado = $pessoa->insert($_GET['documento'], $_GET['nome'], (int)$_GET['idade']);

        if ($resultado)
            echo 'Inserido com sucesso';
        else
            echo 'Ocorreu um erro ao tentar inserir dados';
        break;

    case 'update':
        $resultado = $pessoa->update($_GET['documento'], $_GET['nome'], (int)$_GET['idade']);

        if ($resultado)
            echo 'Atualizado com sucesso';
        else
            echo 'Ocorreu um erro ao tentar atualizar dados';
        break;

    case 'delete':
        $resultado = $pessoa->delete($_GET['documento']);

        if ($resultado)
            echo 'Deletado com sucesso';
        else
            echo 'Ocorreu um erro ao deletar dados';
        break;

    case 'list':
        foreach ($pessoa->list() as $pessoa) {
            echo 'Documento: ' . $pessoa['documento'] . PHP_EOL;
            echo 'Nome: ' . $pessoa['nome'] . PHP_EOL;
            echo 'Idade: ' . $pessoa['idade'] . PHP_EOL;
            echo ' --------- ';
        }        
        break;
            
    
    default:
        echo 'Operaçao desconhecida';
        break;
}