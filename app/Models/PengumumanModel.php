<?php

namespace App\Models;

use CodeIgniter\Model;

class PengumumanModel extends Model
{
    protected $table = 'pengumuman';
    protected $primaryKey       = 'pengumuman_id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['pengumuman_id', 'pengumuman_judul', 'pengumuman_deskripsi', 'pengumuman_tanggal', 'pengumuman_pembuat'];
}
