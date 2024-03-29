<?php

namespace App\Controllers;
use App\Models\LaporanBulananModel;

class LaporanBulanan extends BaseController
{
    public function index()
    {
        return $this->cekCookie('/laporanbulanan');
    }

    public function laporanbulanan($kode_desa)
    {
        helper(['desa','response']);
        if (!descan($kode_desa)){
            er406(view('errors/error_406'));
            return;
        };
        $this->aturCookieDesa($kode_desa);
        $laporan = new LaporanBulananModel();
        $laporan_bulanan = $laporan->getLaporanBulanan($kode_desa);
        return view('content/laporan_bulanan', ['nama_desa'=>full_info_desa($kode_desa), 'laporan'=>$laporan_bulanan]);
    }
}