<?php

namespace App\Models;

use CodeIgniter\Model;

class PenugasanUserModel extends Model
{
    protected $table = 'penugasan_user';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id', 'penugasan_id', 'nim', 'bidang_tugas', 'ditambahkan_pada',];

    public function relasiUser($id)
    {
        $query = $this->where('penugasan_id', $id)
            ->join('user', 'user.nim = penugasan_user.nim')
            ->findAll();

        return $query;
    }
}
