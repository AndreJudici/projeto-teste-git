<?php

declare(strict_types=1);

require 'pdoconexao.php';

class Pessoa 
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = new Conexao();        
    }

    public function list(): array
    {
        $stm = $this->conexao->getConexao()->prepare('select * from pessoa');
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert(string $documento, string $nome, int $idade): bool
    {
        $stm = $this->conexao->getConexao()->prepare('insert into pessoa values (:documento, :nome, :idade)');
        $stm->bindParam(':documento', $documento);
        $stm->bindParam(':nome', $nome);
        $stm->bindParam('idade', $idade);
        $stm->execute();
        return $stm->rowCount() > 0;
    }

    public function update(string $documento, string $nome, int $idade): bool
    {
        $stm = $this->conexao->getConexao()->prepare('update pessoa set nome = :nome, idade = :idade
                                                       where documento = :documento');
        $stm->bindParam(':documento', $documento);
        $stm->bindParam(':nome', $nome);
        $stm->bindParam('idade', $idade);
        $stm->execute();
        return $stm->rowCount() > 0;
    }

    public function delete(string $documento): bool
    {
        $stm = $this->conexao->getConexao()->prepare('delete from pessoa where documento = :documento');
        $stm->bindParam(':documento', $documento);
        $stm->execute();
        return $stm->rowCount() > 0;
    }

}


