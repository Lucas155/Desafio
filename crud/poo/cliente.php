<?php

class Cliente
{
    public $nome;
    public $sobrenome;
    public $cpf; 
    public $nomeCompleto;

    //construtor e recurso para inicializar seus atributos de forma direta

    function __construct($nome, $sobrenome, $cpf)
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->cpf = $cpf;
        $this->nomeCompleto = "$nome $sobrenome";

    }

    
    public function salvar()
    {
        $sql = "INSERT INTO clientes (nome, sobrenome, cpf) VALUES ('$this->nome', '$this->sobrenome', '$this->cpf')";
        
        echo $sql;
    }

}



//$cliente = new Cliente();

//$cliente->nome = 'Lucas';
//$cliente->sobrenome = 'Santos';


//$cliente2->nome = "Joao";
//$cliente2->sobrenome = "Siva";

//echo $cliente->nomeCompleto;


//var_dump($cliente);



