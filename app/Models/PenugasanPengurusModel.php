<?php

namespace App\Models;

use CodeIgniter\Model;

class PenugasanPengurusModel extends Model
{
    protected $table = 'penugasan_pengurus';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id', 'penugasan_id', 'nim', 'bidang_tugas', 'ditambahkan_pada',];

    public function relasiPengurus()
    {
        $query = $this->join('pengurus', 'pengurus.nim = penugasan_pengurus.nim')
            ->findAll();

        return $query;
    }
}
