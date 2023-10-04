<?php

namespace App\Controllers;

class SkPembina extends BaseController
{
    public function index()
    {
        return $this->cekCookie('/skpembina');
    }
}