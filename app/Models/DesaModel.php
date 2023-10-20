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

    public function distinctKec($kab){
        return $this->builder()->where(['kab'=>$kab])->select(['kec', 'nama_kec'])->distinct()->get()->getResultArray();
    }

    public function findDescanByKec($kab, $kec){
        return $this->where(['kab'=>$kab,'kec'=>$kec])->where(['descan'=>1])->findAll();
    }

    public function findDescanByKab($kab){
        return $this->where(['kab'=>$kab])->where(['descan'=>1])->findAll();
    }

    // kabupaten berdasarkan kode kab (4 DIGIT)
    public function namaKab($kab){
        return $this->builder()->where(['prov'=>substr($kab,0,2),'kab'=>substr($kab,2,2)])->select(['kab', 'nama_kab'])->distinct()->get()->getResultArray();
    }
}
