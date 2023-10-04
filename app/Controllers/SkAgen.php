<?php

namespace App\Controllers;

use CodeIgniter\Cookie\Cookie;

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
        return view('content/sk_agen', ['nama_desa'=>full_info_desa($kode_desa)]);
    }
}