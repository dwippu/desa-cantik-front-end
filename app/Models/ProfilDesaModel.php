<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfilDesaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'profil_desa';
    protected $primaryKey       = 'kode_desa';

    function nowProfil($kode_desa){
		$data = $this->db->table('profil_desa')->where(['kode_desa'=>$kode_desa, 'approval'=>'disetujui'])->orderBy('id ASC')->get();
        if (is_null($data)) {
            return null;
        } else {
            return $data->getLastRow('array');
        }
	}

}
