<?php

namespace App\Models;

use CodeIgniter\Model;

class PengurusModel extends Model
{
    protected $table = 'pengurus';
    protected $primaryKey       = 'nim';
    protected $useAutoIncrement = false;
    protected $allowedFields = ['nim', 'foto', 'nama', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'alamat', 'fakultas_id', 'prodi_id', 'bidang_id', 'no_telp', 'email', 'password', 'periode', 'active'];

    public function relasi()
    {
        $query = $this->db->table('pengurus')
            ->join('bidang', 'pengurus.bidang_id=bidang.bidang_id')
            ->join('fakultas', 'pengurus.fakultas_id=fakultas.fakultas_id')
            ->join('prodi', 'pengurus.prodi_id=prodi.prodi_id')
            ->get()->getResultArray();

        return $query;
    }
}
