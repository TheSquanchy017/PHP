<?php

$pessoas = array();
    
    array_push($pessoas, array(
        'nome' => 'Lucas',
        'idade' => 21
    ));
    
    array_push($pessoas, array(
        'nome' => 'Glaucio',
        'idade' => 25
    ));

    echo json_encode($pessoas);

?>