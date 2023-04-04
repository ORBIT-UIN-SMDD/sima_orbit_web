<?php

namespace App\Models;

use CodeIgniter\Model;

class KompetensiModel extends Model
{
    protected $table = 'kompetensi';
    protected $primaryKey       = 'sertifkat_no';
    protected $useAutoIncrement = false;
    protected $allowedFields = ['sertifkat_no', 'nim', 'bidang_id', 'kompetensi_nama', 'kompetensi_untuk', 'kompetensi_diverifikasi_oleh', 'kompetensi_tanggal', 'kompetensi_sertifikat'];

    public function relasi()
    {
        $query = $this->db->table('kompetensi')
            ->join('bidang', 'kompetensi.bidang_id=bidang.bidang_id')
            ->get()->getResultArray();

        return $query;
    }
}
