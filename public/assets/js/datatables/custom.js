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

    var sk_descan = $('#sk_descan').DataTable({
        "scrollX": true,
        "scrollY": "27em",
        "scrollCollapse": true
    });

    sk_descan.buttons().container()
    .appendTo('#example_wrapper');


    var sk_agen = $('#sk_agen').DataTable({
        "scrollX": true,
        "scrollY": "27em",
        "scrollCollapse": true
    });

    sk_agen.buttons().container()
    .appendTo('#example_wrapper');

    var sk_pembina = $('#sk_pembina').DataTable({
        "scrollX": true,
        "scrollY": "27em",
        "scrollCollapse": true
    });

    sk_pembina.buttons().container()
    .appendTo('#example_wrapper');

    var laporan_pembinaan = $('#laporan_pembinaan').DataTable({
        "scrollX": true,
        "scrollY": "27em",
        "scrollCollapse": true
    });

    laporan_pembinaan.buttons().container()
    .appendTo('#example_wrapper'); 

    var laporan_bulanan = $('#laporan_bulanan').DataTable({
        "scrollX": true,
        "scrollY": "27em",
        "scrollCollapse": true
    });

    laporan_bulanan.buttons().container()
    .appendTo('#example_wrapper'); 
});