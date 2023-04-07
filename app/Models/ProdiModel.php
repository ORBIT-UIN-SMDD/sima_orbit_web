<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdiModel extends Model
{
    protected $table = 'prodi';
    protected $primaryKey       = 'prodi_id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['prodi_id', 'fakultas_id', 'prodi_nama'];

    public function relasi()
    {
        $query = $this->db->table('prodi')
            ->join('fakultas', 'prodi.fakultas_id=fakultas.fakultas_id')
            ->get()->getResultArray();

        return $query;
    }

    public function relasiAnggota()
    {
        $query = $this->select('prodi.*, COUNT(anggota.prodi_id) as anggota_count')
            ->join('anggota', 'anggota.prodi_id = prodi.prodi_id', 'left')
            ->groupBy('prodi.prodi_id')
            ->findAll();

        return $query;
    }
}
