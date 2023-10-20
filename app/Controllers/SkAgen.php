<?php

namespace App\Controllers;
use App\Models\SkAgenModel;

class SkAgen extends BaseController
{
    public function index()
    {
        return $this->cekCookie('/skagen');
    }

    public function skagen($kode_desa)
    {
        helper(['desa','response']);
        if (!descan($kode_desa)){
            er406(view('errors/error_406'));
            return;
        };
        $this->aturCookieDesa($kode_desa);

        $sk = new SkAgenModel();
        $list = $sk->getSkAgen($kode_desa);
        for ($i = 0; $i < sizeof($list); $i++){
            $list[$i]['nama_desa'] = nama_desa($list[$i]['kode_desa']);
        }

        return view('content/sk_agen', ['nama_desa'=>full_info_desa($kode_desa), 'sk'=>$list]);
    }
}