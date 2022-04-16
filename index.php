<?php
require 'consultas_controller.php';
require_once '../consultas_sqlserver/includes/header.php';

// Vars
$consultaResultado;
$colunas;
?>


<body>
    <div class="main-container">
        <h1 class="display-6 fw-bold mt-3">Execução de consultas no SQLServer</h1>
        <form action="index.php?pag=index&acao=consultar" method="post">
            <textarea class="form-control" name="consulta" id="consulta" cols="100" rows="15"></textarea>
            <input class="btn btn-primary mt-3 mb-4" type="submit" value="Consultar">
        </form>

        <?php 
            if(isset($colunas)) {
        ?>
            <!-- Tabela de exibição -->
            <table id="queryResults" class="table table-bordered table-hover" style="width:100%">
                
                <!-- Cabeçalho -->
                <thead>
                    <tr>
                        <?php foreach($colunas as $i => $valor) { ?>
                                <th><?= $valor ?></th>
                        <?php } ?>                                 
                    </tr>
                </thead>

                <!-- Conteúdo -->
                <tbody>
                    <?php foreach($consultaResultado as $i => $valor) { ?> 
                        <tr>
                        <?php for($i = 0 ; $i < count($colunas); $i++) {  ?> 
                                <td><?= $valor[$colunas[$i]] ?></td>           
                        <?php
                            }
                        } ?>
                        </tr>         
                </tbody>

                <!-- Rodapé -->
                <tfoot>
                </tfoot>
            </table>
        <?php } ?>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Script -->
    <script src="/js/script.js"></script>
</body>
</html>