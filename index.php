<?php
require 'consultas_controller.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <!-- Style -->
    <link rel="stylesheet" href="/css/style.css">
    <title>Consultas SQL Server</title>
</head>
<body>
    <div class="container">
        <h1 class="display-6 fw-bold mt-3">Execução de consultas no SQLServer</h1>
        <!-- Enviar para o backend o form  -->
        <form action="index.php?pag=index&acao=consultar" method="post">
            <textarea class="form-control" name="consulta" id="consulta" cols="100" rows="15"></textarea>
            <input class="btn btn-primary mt-3 mb-4" type="submit" value="Consultar">
        </form>

        <!-- Tabela de exibição -->
        <table id="queryResults" class="table table-bordered table-hover" style="width:100%">
            
            <!-- Cabeçalho -->
            <thead>
                <tr>

                </tr>
            </thead>

            <!-- Conteúdo -->
            <tbody>
                
            </tbody>

            <!-- Rodapé -->
            <tfoot>
            </tfoot>
        </table>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Script -->
    <script src="/js/script.js"></script>
</body>
</html>