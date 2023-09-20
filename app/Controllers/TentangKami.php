<?php

namespace App\Controllers;

class TentangKami extends BaseController
{
    public function index(): string
    {
        return view('content/tentang_kami');
    }
}
