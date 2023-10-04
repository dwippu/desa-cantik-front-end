<?php

namespace App\Controllers;

class Data extends BaseController
{
    public function index()
    {
        return $this->cekCookie('/data');
    }

    public function data($kode_desa)
    {
        helper(['desa','response']);
        if (!descan($kode_desa)){
            er406(view('errors/error_406'));
            return;
        };
        $this->aturCookieDesa($kode_desa);
        return view('content/data', ['nama_desa'=>full_info_desa($kode_desa)]);
    }
}