<?php

namespace App\Controllers;
use CodeIgniter\Cookie\Cookie;

class Home extends BaseController
{
    public function index()
    {   
        helper('cookie');
        if (! get_cookie('x')){
            return redirect()->to('/3201010003');
        }
        return redirect()->to(get_cookie('x'));
    }
    
    public function home($kode_desa)
    {
        helper(['cookie', 'desa', 'response']);
        
        if (!descan($kode_desa)){
            er406(view('errors/error_406'));
            return;
        };
        
        $cookie = new Cookie(
            'x',
            $kode_desa,
            [
                'max-age' => 3600 * 12, // Expires in 2 hours
            ]
        );
        set_cookie($cookie);

        return view('content/beranda',['nama_desa' => full_info_desa($kode_desa)]);
    }
}
