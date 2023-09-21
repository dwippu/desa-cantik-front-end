<?php

namespace App\Controllers;

class LaporanPembinaan extends BaseController
{
    public function index(): string
    {
        return view('content/laporan_pembinaan');
    }
}