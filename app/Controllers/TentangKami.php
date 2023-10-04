<?php

namespace App\Controllers;
use App\Models\ProfilDesaModel;
use CodeIgniter\Cookie\Cookie;

class TentangKami extends BaseController
{
    public function index()
    {   
        return $this->cekCookie('/tentang');
    }
    
    public function tentang($kode_desa): string
    {
        helper(['desa','response']);
        if (!descan($kode_desa)){
            return er406(view('errors/error_406'));
        };
        $this->aturCookieDesa($kode_desa);
        $profil = new ProfilDesaModel();

        $profil = $profil->nowProfil($kode_desa);
        if ($profil){
            $profil['html_tag'] = explode(' ',$profil['html_tag'])[1];    
        };
        return view('content/tentang_kami',['nama_desa' => full_info_desa($kode_desa), 'profil'=>$profil]);
    }
}
