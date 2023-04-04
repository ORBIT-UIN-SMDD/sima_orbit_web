<?php

namespace App\Models;

use CodeIgniter\Model;

class AlumniModel extends Model
{
    protected $table = 'alumni';
    protected $primaryKey       = 'nim';
    protected $useAutoIncrement = false;
    protected $allowedFields = ['nim', 'foto', 'nama', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'alamat', 'no_telp', 'email', 'password', 'periode', 'pekerjaan', 'golongan_darah'];
}
