<?php

namespace App\Models;

use CodeIgniter\Model;

class SkAgenModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'sk_agen';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';

    public function getSkAgen($kode_desa){
        $data = $this->builder()->where(['kode_desa'=>$kode_desa])->get()->getResultArray();
        return $data;
    }
}
