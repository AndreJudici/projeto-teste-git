<?php

declare(strict_types=1); /* força validaçao dos tipos das variaveis */

class ContaBancaria
{
    /**
     * @var string
     */
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
    
    public function depositar(float $valor)
    {
        $this->saldo += $valor;
    }

    public function obterSaldo(): float
    {
        return $this->saldo;
    }

    public function sacar(float $valor): bool
    {
        if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
            return true;
        }

        return false;
    }
}

$conta = new ContaBancaria(341, '8046', 'André Luiz Ramiro Judici', 100.60);

echo 'Saldo atual: '.$conta->obterSaldo() . PHP_EOL;
$conta->depositar(100);
echo 'Saldo atual: '.$conta->obterSaldo() . PHP_EOL;

if ($conta->sacar(200.59))
    echo 'Saldo atual: '.$conta->obterSaldo() . PHP_EOL;
else
    echo 'Saldo insuficiente';