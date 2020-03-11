<?php

class Conta
{
    protected $saldo;

    public function __construct()
    {
        $this->saldo = 200;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function retiraSaldo(float $valor): void
    {
        $this->saldo -= $valor;
    }

    public function retiraMensalidade()
    {
        $this->retiraSaldo(20);
    }

    public function isNegative($valor)
    {
        return ($this->saldo - $valor) < 0;
    }
}

////////////////////////////////////////////

class ContaPremium extends Conta
{
    public function retiraMensalidade()
    {
        $this->retiraSaldo(50);
    }

    public function retiraSaldo(float $valor): void
    {
        if($this->isNegative($valor))
        {
            exit('ops saldo não suficiente');
        }
       parent::retiraSaldo($valor);
    }

}

$conta = new ContaPremium();

//$conta->retiraSaldo(50.33);

$conta->retiraMensalidade();


echo $conta->getSaldo();
