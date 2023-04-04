<?php

namespace App\Models;

use CodeIgniter\Model;

class BidangModel extends Model
{
    protected $table = 'bidang';
    protected $primaryKey       = 'bidang_id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['bidang_id', 'bidang_nama'];
}
