<?php

namespace App\Models;

use CodeIgniter\Model;

class PenugasanAnggotaModel extends Model
{
    protected $table = 'penugasan_anggota';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id', 'penugasan_id', 'nim', 'bidang_tugas', 'ditambahkan_pada',];

    public function relasiAnggota()
    {
        $query = $this->join('anggota', 'anggota.nim = penugasan_anggota.nim')
            ->findAll();

        return $query;
    }
}
