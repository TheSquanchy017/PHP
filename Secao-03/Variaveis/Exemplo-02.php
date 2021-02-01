<?php

// 
$nome1 = "Lucas";
$sobrenomet = "Melo";

$nomeCompleto = $nome1 . " " . $sobrenome;

echo $nomeCompleto;

exit;

echo $nome1;

echo "<br>";

unset($nome1);

if(isset($nome1)){
    echo $nome1;
}


?>