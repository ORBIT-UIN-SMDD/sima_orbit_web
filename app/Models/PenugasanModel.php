<?php

namespace App\Models;

use CodeIgniter\Model;

class PenugasanModel extends Model
{
    protected $table = 'penugasan';
    protected $primaryKey       = 'penugasan_id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['penugasan_id', 'penugasan_nama', 'penugasan_deskripsi', 'penugasan_mulai', 'penugasan_selesai', 'penugasan_tempat', 'penugasan_waktu', 'penugasan_oleh', 'penugasan_no_surat', 'penugasan_sk', 'penugasan_dibuat'];
}
