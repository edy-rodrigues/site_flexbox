<?php
require_once "environment.php";

$config = [];

if(ENVIRONMENT == 'development') {
    define("BASE_URL", "http://phpzeroaoprofissional.pc:8080/phpsuperAvancado/projetoNotificacaoInterna/");
    $config["dbname"] = "db_projetonotificacao";
    $config["host"] = "localhost";
    $config["dbuser"] = "root";
    $config["dbpass"] = "";
} else {
    
}

global $db;
try {
    $db = new PDO("mysql:dbname=".$config["dbname"].";host=".$config["host"], $config["dbuser"], $config["dbpass"]);
} catch(PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
}
?>