<?php

namespace App\Models;

use CodeIgniter\Model;

class AnggotaModel extends Model
{
    protected $table = 'anggota';
    protected $primaryKey       = 'nim';
    protected $useAutoIncrement = false;
    protected $allowedFields = ['nim', 'foto', 'nama', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'alamat', 'fakultas_id', 'prodi_id', 'bidang_id', 'no_telp', 'email', 'password', 'tanggal_mendaftar', 'active'];

    public function relasi()
    {
        $query = $this->db->table('anggota')
            ->join('bidang', 'anggota.bidang_id=bidang.bidang_id')
            ->join('prodi', 'anggota.prodi_id=prodi.prodi_id')
            ->join('fakultas', 'anggota.fakultas_id=fakultas.fakultas_id')
            ->get()->getResultArray();

        return $query;
    }
}
