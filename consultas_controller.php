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
        // Medição de tempo
        $started = microtime(true);

        $stmt = $conexao->prepare($query);
        $stmt->execute();

        // Popula o array associativo
        $consultaResultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $colunas = array_keys($consultaResultado[0]);
        // echo '<pre>',print_r($consultaResultado),'</pre>';
        // printr($consultaResultado);

        // Final da medição
        $end = microtime(true);
        
        // Cálculo da diferença
        $difference = $end - $started;
        $queryTime = number_format($difference, 10);

        
    }
}

// Simple debug function
function printr($data) {
    echo "<pre>";
       print_r($data);
    echo "</pre>";
 }

?>