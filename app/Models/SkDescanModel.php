<?php

namespace App\Models;

use CodeIgniter\Model;

class SkDescanModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'sk_descan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';

    // public function findingAll(){
    //     return $this->where(['kab'=>$kab,'kec'=>$kec])->where(['descan'=>1])->findAll();
    // }
}
