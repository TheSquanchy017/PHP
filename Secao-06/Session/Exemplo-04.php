<?php

session_id('djdb18lile55g25l0v5fdfq42r');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>