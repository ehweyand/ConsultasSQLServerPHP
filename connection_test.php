<?php

$serverName = "DESKTOP-SUF6OC5\SQLEXPRESS";

try {
    $db = new PDO(
        "sqlsrv:server=$serverName ;
        Database=oficinadb", "", "");

    echo "Conectado com sucesso ao SQLServer!";
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (Exception $e) {
    die(print_r($e->getMessage()));
}

?>