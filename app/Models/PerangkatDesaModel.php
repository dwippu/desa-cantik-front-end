<?php

namespace App\Models;

use CodeIgniter\Model;

class PerangkatDesaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'perangkat_desa';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['id', 'user_id', 'kode_desa', 'nama', 'email', 'instagram', 'jabatan', 'aktif', 'gambar', 'approval', 'tanggal_pengajuan', 'tanggal_konfirmasi', 'edit_from'];

    function getPerangkat($kode_desa, $jabatan){
        $data = $this->db->table('perangkat_desa')->where(['kode_desa'=>$kode_desa, 'jabatan'=>$jabatan, 'aktif'=>'aktif'])->get();
        if (is_null($data)) {
            return null;
        } else {
            return $data->getResultArray();
        }
    }
    
}
