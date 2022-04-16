
 // Aplica o datatable
$(document).ready( function () {
    $('#queryResults').DataTable({
        "language": {
            "lengthMenu": "Mostrando _MENU_ registros por página.",
            "zeroRecords": "Não foi encontrado nenhum registro.",
            "info": "Mostrando a página _PAGE_ de _PAGES_",
            "infoEmpty": "Sem registros disponíveis",
            "infoFiltered": "(Filtrando de _MAX_ registros totais)",
            "search": "Buscar:"
        }
    });
} ); 