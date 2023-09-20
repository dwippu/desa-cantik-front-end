<?php

namespace App\Controllers;

class Regulasi extends BaseController
{
    public function index(): string
    {
        return view('content/regulasi');
    }
}