<?php

namespace App\Controllers;

class SkDescan extends BaseController
{
    public function index(): string
    {
        return view('content/sk_descan');
    }
}