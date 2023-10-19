<?php

namespace App\Controllers;
use App\Models\ProfilDesaModel;
use App\Models\PerangkatDesaModel;
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
        $perangkat_desa = new PerangkatDesaModel();

        $profil = $profil->nowProfil($kode_desa);
        if ($profil){
            $profil['html_tag'] = explode(' ',$profil['html_tag'])[1];    
        };
        $kepala =  $perangkat_desa->getPerangkat($kode_desa, 'Kepala Desa');
        $sekretaris =  $perangkat_desa->getPerangkat($kode_desa, 'Sekretaris Desa');
        $pembina =  $perangkat_desa->getPerangkat($kode_desa, 'Pembina Desa Cantik');
        $agen =  $perangkat_desa->getPerangkat($kode_desa, 'Agen Statistik');
        return view('content/tentang_kami',['nama_desa' => full_info_desa($kode_desa), 'profil'=>$profil, 'kepala'=>$kepala[0], 'sekretaris'=>$sekretaris[0], 'pembina'=>$pembina[0], 'agen'=>$agen]);
    }
}
