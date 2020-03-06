<?php

require 'cliente.php';

//instancia
echo '<pre>';

$cliente1 = new Cliente('lucas', 'santos', '123.123.133.12');


$cliente1->salvar();
var_dump($cliente1);

$cliente2 = new Cliente('Joao','Siva','123.123.123.12');


$cliente2->salvar();

var_dump($cliente2);


echo "$cliente1->nomeCompleto";
