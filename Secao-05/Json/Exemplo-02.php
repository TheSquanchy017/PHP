<?php

$json = '[{"nome":"Lucas","idade":21},{"nome":"Glaucio","idade":25}]';
    
  $data = json_decode($json, true);

  var_dump($data);


  //json_encode : Transforma array em json
  //json_decode : Transforma o json em um array
?>