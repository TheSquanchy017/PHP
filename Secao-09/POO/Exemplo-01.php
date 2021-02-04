<?php

class Pessoa{

    public $nome; //atributo

    public function falar(){//Método

        return "O meu nome é " . $this -> nome;

    }

}


$Lucas = new Pessoa();
$Lucas->nome = "Lucas Melo";
echo $Lucas->falar();


?>