<?php

namespace App\Models;

use CodeIgniter\Model;

class BidangModel extends Model
{
    protected $table = 'bidang';
    protected $primaryKey       = 'bidang_id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['bidang_id', 'bidang_nama'];

    public function relasiAnggota()
    {
        $query = $this->select('bidang.*, COUNT(anggota.bidang_id) as anggota_count')
            ->join('anggota', 'anggota.bidang_id = bidang.bidang_id', 'left')
            ->groupBy('bidang.bidang_id')
            ->findAll();

        return $query;
    }
}
