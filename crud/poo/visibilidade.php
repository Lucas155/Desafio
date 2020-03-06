<?php

//visibilidade

//public
//protected
//private

class Produto{
    
    public $nome;
    protected $preco;
    private $descricao;

    public function setPreco(float $preco){
        
        if($preco < 0){
            exit('preço não pode ser menor que 0');
        }

        $this->preco = $preco;
    }

    protected function formataPreco($preco)
    {
        return 'R$ ' . number_format($preco,2, '.', ',');
    }

    public function salvar(){
        $saldo = $this->formataPreco($this->preco);
    }

}

$prod = new Produto;

$prod->nome = 'monitor gamer de 49 polegadas ultrawide';

$prod->setPreco(50);

