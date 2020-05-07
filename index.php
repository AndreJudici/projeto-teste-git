<?php

declare(strict_types=1); /* força validaçao dos tipos das variaveis */

class ContaBancaria
{
    private $banco;
    private $agencia;
    private $nomeCliente;
    private $saldo;
    
    public function __construct(int $banco, string $agencia, string $nomeCliente, float $saldo)
    {   
       $this->banco = $banco;
       $this->agencia = $agencia;
       $this->nomeCliente = $nomeCliente;
       $this->saldo = $saldo;
    }   
}

$conta = new ContaBancaria(341, '8046', 'André Luiz Ramiro Judici', 100.60);
// $conta->banco = '341';
// $conta->agencia = '8046';
// $conta->nomeCliente = 'André Luiz Ramiro Judici';
// $conta->saldo = 100.60;

var_dump($conta);