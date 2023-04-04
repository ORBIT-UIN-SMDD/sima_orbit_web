<?php

namespace App\Models;

use CodeIgniter\Model;

class FakultasModel extends Model
{
    protected $table = 'fakultas';
    protected $primaryKey       = 'fakultas_id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['fakultas_id', 'fakultas_nama'];
}
