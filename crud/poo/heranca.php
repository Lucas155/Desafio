<?php

//
//Não deixa o PHP instanciar essa classe
//ela serve somente de base para outros(sozinha não funciona)
class Cliente
{
    public $nome;
    public $endereco;
    public $email;
    public $contato;
    protected $saldo = 0;
    private $status = 1;


    public function addSaldo($valor)
    {
        $this->saldo += $valor;
    }

}

class PJ extends Cliente
{
    public $cnpj;

}

class PF extends Cliente
{
    public $cpf;
}

$pessoa_juridica = new PJ;

$pessoa_juridica->addSaldo(1000000);

$pessoa_fisica = new PF();

$pessoa_fisica->addSaldo(10);



echo '<pre>';


var_dump($pessoa_juridica, $pessoa_fisica);

