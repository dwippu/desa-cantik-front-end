<?php

namespace App\Models;

use CodeIgniter\Model;

class DesaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'wilayah';
    protected $primaryKey       = 'kode_desa';

    public function findDescan(){
        return $this->where(['descan'=>1])->findAll();
    }

    public function distinctKab(){
        return $this->builder()->select(['kab', 'nama_kab'])->distinct()->get()->getResultArray();
    }

    public function findDescanByKab($kab){
        return $this->where(['kab'=>$kab])->where(['descan'=>1])->findAll();
    }
}
