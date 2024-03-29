<?php

namespace App\Controllers;
use App\Models\DesaModel;

class Home extends BaseController
{
    public function index()
    {   
        return $this->cekCookie('');
    }
    
    public function home($kode_desa)
    {
        helper(['desa', 'response']);
        
        if (!descan($kode_desa)){
            er406(view('errors/error_406'));
            return;
        };
        
        $this->aturCookieDesa($kode_desa);
        $desa = new DesaModel();
        $kab = $desa->distinctKab();
        return view('content/beranda',['nama_desa' => full_info_desa($kode_desa), 'kab' => $kab]);
    }

    public function ubah(){
        $post = $this->request->getPost();
        return redirect()->to($post['desa']);
    }

    public function kec($kab){
        $desa = new DesaModel();
        $kec = $desa->distinctKec($kab);
        return $this->response->setJSON($kec);
    }

    public function desa($kab, $kec){
        $desa = new DesaModel();
        $descan = $desa->findDescanByKec($kab, $kec);
        return $this->response->setJSON($descan);
    }
}
