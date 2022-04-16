<?php
// Importação da classe de conexão com o banco
require "conexao_sqlserver.php";

// Recupera a ação desejada
if(isset($_GET['acao'])) {
    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

    /* Busca os dados da consulta inserida */
    if($acao == "consultar") {
        $query = $_POST['consulta'];

        // Com a query em mãos de consulta, buscar a conexão e validar
        $conexao = (new Conexao())->conectar();
        





    }
}

?>