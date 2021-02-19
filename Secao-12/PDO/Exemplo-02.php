<?php
//Criar as constantes com as credencias de acesso ao banco de dados

define('HOST', '127.0.0.1');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'dbphp7');

//Criar a conexão com banco de dados usando o PDO

try {

    $conn = new pdo('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    echo "Conexão com banco de dados realizada com sucesso.";
} catch (PDOException $e) {

    echo "Erro: Conexão com banco de dados não foi realizada com sucesso. Erro gerado " . $e->getMessage();
}


$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:Deslogin, :Dessenha)");


$deslogin = "Teste";
$dessenha = "123456";


$stmt ->bindValue(':Deslogin',$deslogin);
$stmt ->bindValue(':Dessenha',$dessenha);


$stmt->execute();

?>