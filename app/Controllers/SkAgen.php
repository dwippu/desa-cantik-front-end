<?php

namespace App\Controllers;

class SkAgen extends BaseController
{
    public function index(): string
    {
        return view('content/sk_agen');
    }
}