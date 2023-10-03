<?php

namespace App\Models;

use CodeIgniter\Model;

class DesaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'wilayah';
    protected $primaryKey       = 'kode_desa';
}
