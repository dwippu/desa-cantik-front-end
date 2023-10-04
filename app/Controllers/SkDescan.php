<?php

namespace App\Controllers;

use CodeIgniter\Cookie\Cookie;

class SkDescan extends BaseController
{
    public function index()
    {
        return $this->cekCookie('/skdescan');
    }

    public function skdescan($kode_desa)
    {
        helper(['desa','response']);
        if (!descan($kode_desa)){
            er406(view('errors/error_406'));
            return;
        };
        $this->aturCookieDesa($kode_desa);
        return view('content/sk_descan', ['nama_desa'=>full_info_desa($kode_desa)]);
    }
}