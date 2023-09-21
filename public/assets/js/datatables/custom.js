$(document).ready(function(){

    var table = $('#example').DataTable({
        buttons:[{ extend: 'copy',
                   text: '',
                   className: 'fa fa-copy',
                   titleAttr: 'Copy to Clipboard'
                 },
                 { extend: 'csv',
                   text: '',
                   className: 'fas fa-file-csv',
                   titleAttr: 'Export to CSV'
                 },
                 { extend: 'excel',
                   text: '',
                   className: 'fa fa-file-excel-o',
                   titleAttr: 'Export to Excel'
                 },
                 { extend: 'pdf',
                  text: '',
                  className: 'fa fa-file-pdf-o',
                  titleAttr: 'Export to PDF'
                 },
                 { extend: 'print',
                  text: '',
                  className: 'fa fa-print',
                  titleAttr: 'Print'
                 }],
        "scrollX": true,
        "scrollY": "27em",
        "scrollCollapse": true
    });

    table.buttons().container()
    .appendTo('#example_wrapper');
});