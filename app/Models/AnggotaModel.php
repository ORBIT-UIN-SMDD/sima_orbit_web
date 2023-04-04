<?php

namespace App\Models;

use CodeIgniter\Model;

class AnggotaModel extends Model
{
    protected $table = 'anggota';
    protected $primaryKey       = 'nim';
    protected $useAutoIncrement = false;
    protected $allowedFields = ['nim', 'foto', 'nama', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'alamat', 'fakultas_id', 'prodi_id', 'bidang_id', 'no_telp', 'email', 'password', 'tanggal_mendaftar', 'active'];
}
