<?php

// include "inc/Exemplo-01.php";
require_once "inc/Exemplo-01.php";
require_once "inc/Exemplo-01.php";

//Diferença de include e require: 
    //O Require obriga que o arquivo exista ou esteja funcionando, do contrario, da um erro fatal;
    //O Include tenta funcionar mesmo quando houver um problema

$resultado = somar(40, 20);

echo $resultado;

?>