<?php

namespace App\Models;

use CodeIgniter\Model;

class SkPembinaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'sk_pembina';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';

    public function getSkPembina($kode_kab){
        $data = $this->builder()->where(['kode_kab'=>$kode_kab])->get()->getResultArray();
        return $data;
    }
}
