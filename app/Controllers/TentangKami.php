<?php

namespace App\Controllers;
use App\Models\ProfilDesaModel;
use CodeIgniter\Cookie\Cookie;

class TentangKami extends BaseController
{
    public function index()
    {   
        helper('cookie');
        if (! get_cookie('x')){
            return redirect()->to('/3201010003/tentang');
        }
        return redirect()->to(get_cookie('x').'/tentang');
    }
    
    public function tentang($kode_desa): string
    {
        helper(['cookie','desa', 'response']);
        if (!descan($kode_desa)){
            er406(view('errors/error_406'));
            return '';
        };
        
        $cookie = new Cookie(
            'x',
            $kode_desa,
            [
                'max-age' => 3600 * 12, // Expires in 2 hours
            ]
        );

        set_cookie($cookie);
        $profil = new ProfilDesaModel();

        $profil = $profil->nowProfil($kode_desa);
        $profil['html_tag'] = explode(' ',$profil['html_tag'])[1];
        return view('content/tentang_kami',['nama_desa' => full_info_desa($kode_desa), 'profil'=>$profil]);
    }
}
