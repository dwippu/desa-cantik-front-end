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
    
    // Modal
    $(document).on('click', '#btnFilter', function(){
        $('#modalFilter').modal('show');
    });

    // Modal Close
    $('.closeModal').click(function(e) {
        $('#modalCancel').modal('hide');
        $('#modalView').modal('hide');
        $('#modalInValid').modal('hide');
        $('#modalHapusSk').modal('hide');
    });

    // Menu ubah Desa
    $('#pilih_kabupaten').change(function(){
        let idkab = $('#pilih_kabupaten :selected').val();
        $.ajax({url: "/kec/"+idkab, success: function(result){
            $('#pilih_kecamatan option').not(':disabled').remove();
            if(! (result === undefined || result.length == 0)){
                for (var key in result){
                    $('#pilih_kecamatan').append($('<option>', {value:result[key]['kec'], text:result[key]['kec']+' - '+result[key]['nama_kec']}));
                }
            }
            $('#pilih_kecamatan').prop("disabled", false);
        }})
        $('#submitFilter').prop("disabled", false);
    });

    $('#pilih_kecamatan').change(function(){
        let idkab = $('#pilih_kabupaten :selected').val();
        let idkec = $('#pilih_kecamatan :selected').val();
        $.ajax({url: "/desa/"+idkab+'/'+idkec, success: function(result){
            $('#pilih_desa option').not(':disabled').remove();
            if(! (result === undefined || result.length == 0)){
                for (var key in result){
                    $('#pilih_desa').append($('<option>', {value:result[key]['kode_desa'], text:result[key]['desa']+' - '+result[key]['nama_desa']}));
                }
            }
            $('#pilih_desa').prop("disabled", false);
        }})
        $('#submitFilter').prop("disabled", false);
    });

    // View SK
    $(document).on('click', '#btnViewSk', function(){
        var url = window.location.href;
        var endurl = url.split("/").pop();
        var file = $(this).attr('data-file');
        var no_sk = $(this).attr('data-sk');
        var source = $('#source').text();
        console.log(source+"/SK Agen/"+file);
        if (endurl == 'skagen'){
            document.getElementById("fileSkAgen").src = source+"/SK%20Agen/"+file;
        } else if (endurl == 'skdescan'){
            document.getElementById("fileSkAgen").src = source+"/SK%20Descan/"+file;
        } else if (endurl == 'skpembina'){
            document.getElementById("fileSkAgen").src = source+"/SK%20Pembina/"+file;
        }
        $('#namaSK').text(no_sk);
        $('#modalView').modal('show');
    });
});