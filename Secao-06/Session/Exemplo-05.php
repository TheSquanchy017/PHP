<?php

require_once("config.php");

echo session_save_path();

echo "<br>";

var_dump(session_status());

switch(session_status()){
    
    case PHP_SESSION_DISABLED;
    echo "As sessões estiverem desabilitadas.";
    break;

    case PHP_SESSION_NONE;
    echo "A sessão está habilitada, mas não foi iniciada.";
    break;

    case PHP_SESSION_ACTIVE;
    echo "A sessão está habilitada e uma sessão existe.";
    break;
}
?>