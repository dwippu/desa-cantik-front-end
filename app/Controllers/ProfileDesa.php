<?php

namespace App\Controllers;

class ProfileDesa extends BaseController
{
    public function index(): string
    {
        return view('content/profile_desa');
    }
}
