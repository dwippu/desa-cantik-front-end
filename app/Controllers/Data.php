<?php

namespace App\Controllers;

class Data extends BaseController
{
    public function index(): string
    {
        return view('content/data');
    }
}