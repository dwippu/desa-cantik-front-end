<?php

namespace App\Controllers;

use App\Models\SkPembinaModel;

class SkPembina extends BaseController
{
    public function index()
    {
        return $this->cekCookie('/skpembina');
    }

    public function skpembina($kode_desa)
    {
        helper(['desa','response']);
        if (!descan($kode_desa)){
            er406(view('errors/error_406'));
            return;
        };
        $this->aturCookieDesa($kode_desa);

        $kode_kab = substr($kode_desa, 0, 4);
        $sk = new SkPembinaModel();
        $list = $sk->getSkPembina($kode_kab);
        for ($i = 0; $i < sizeof($list); $i++){
            $list[$i]['nama_kab'] = nama_kabupaten($list[$i]['kode_kab']);
        }

        return view('content/sk_pembina', ['nama_desa'=>full_info_desa($kode_desa), 'sk'=>$list]);
    }
}