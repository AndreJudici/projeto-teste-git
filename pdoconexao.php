<?php

declare(strict_types=1);

class Conexao
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = new PDO('mysql:host=localhost; dbname=pdo', 'root', '');
    }

    public function getConexao(): PDO
    {
        return $this->conexao;
    }
}