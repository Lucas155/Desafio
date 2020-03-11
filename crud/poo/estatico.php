<?php

class Validacao{

    static public $tamanho;

    static public function max($valor, $max = 0)
    {
        if(static::$tamanho != null)
        {
            $max = static::$tamanho;
        }

        if(mb_strlen($valor)> $max)
        {
            return false;
        }
        return true;

    }
}

Validacao::$tamanho = 10;
// Chamada de metodo estático
//var_dump(Validacao::max('leo'));

class value{

    static public function nomeSobrenome($nomeCompleto)
    {
        $separado = explode(' ', $nomeCompleto);

        $primeiroNome = array_shift($separado);

        $sobreNome = implode(' ', $separado);

        return[
            'nome' => $primeiroNome,
            'sobrenome' => $sobreNome
        ];

    }
}

echo'<pre>';
var_dump(Value::nomeSobrenome('Lucas Santos'));

$cliente = Value::nomeSobrenome('Lucas Santos')

echo 'Primeiro nome: ' . $cliente['nome'];
echo '<br> Sobrenome Completo:' . $cliente['sobrenome'];