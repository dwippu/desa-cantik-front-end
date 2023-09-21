<?php

namespace App\Controllers;

class LaporanBulanan extends BaseController
{
    public function index(): string
    {
        return view('content/laporan_bulanan');
    }
}