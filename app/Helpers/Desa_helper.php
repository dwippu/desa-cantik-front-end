<?php

use App\Models\DesaModel;

function full_info_desa($kode_desa){
    $desa = new DesaModel();
    if (empty($desa->find($kode_desa))){
        return false;
    };
    return $desa->find($kode_desa);
}

function nama_desa($kode_desa){
    $desa = full_info_desa($kode_desa);
    if ($desa){
        return $desa['nama_desa'];
    }
    return false;
    
}

function nama_kec($kode_desa){
    $desa = full_info_desa($kode_desa);
    if ($desa){
        return $desa['nama_kec'];
    }
    return false;
}

function nama_kab($kode_desa){
    $desa = full_info_desa($kode_desa);
    if ($desa){
        return $desa['nama_kab'];
    }
    return false;
}

function nama_prov($kode_desa){
    $desa = full_info_desa($kode_desa);
    if ($desa){
        return $desa->find($kode_desa)['nama_prov'];
    }
    return false;
}

function descan($kode_desa): bool{
    $desa = full_info_desa($kode_desa);
    if ($desa){ 
        if ($desa['descan'] == 1) {return true;}
        else {return false;}
    }
    return false;
}