<?php

class Pessoa{

    public $nome = "Rasmus Lerdorf";
    protected $idade = 48;
    private $senha = "12345";

    public function verDados(){

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";

    }

}

$objeto = new Pessoa();

// echo $objeto->idade . "<br>";

$objeto-> verDados();


//Diferença entre encapsulamento:
    //public: todos podem ver
    //protected: so pode ser visto na mesma classe e na classe extendida 
    //private: so pode ser visto na mesma clase
?>