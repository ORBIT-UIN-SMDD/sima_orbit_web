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
}
