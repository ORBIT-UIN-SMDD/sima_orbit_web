<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey       = 'nim';
    protected $useAutoIncrement = false;
    protected $allowedFields = ['nim', 'foto', 'nama', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'alamat', 'fakultas_id', 'prodi_id', 'bidang_id', 'no_telp', 'email', 'password', 'tipe', 'pengurus_periode', 'alumni_pekerjaan', 'alumni_golongan_darah', 'alumni_domisili', 'active'];

    public function relasi()
    {
        $query = $this->db->table('user')
            ->join('bidang', 'user.bidang_id=bidang.bidang_id')
            ->join('fakultas', 'user.fakultas_id=fakultas.fakultas_id')
            ->join('prodi', 'user.prodi_id=prodi.prodi_id')
            ->get()->getResultArray();

        return $query;
    }
    public function relasiAnggota()
    {
        $query = $this->db->table('user')->where("tipe", "anggota")
            ->join('bidang', 'user.bidang_id=bidang.bidang_id')
            ->join('fakultas', 'user.fakultas_id=fakultas.fakultas_id')
            ->join('prodi', 'user.prodi_id=prodi.prodi_id')
            ->get()->getResultArray();

        return $query;
    }
    public function relasiPengurus()
    {
        $query = $this->db->table('user')->where("tipe", "pengurus")
            ->join('bidang', 'user.bidang_id=bidang.bidang_id')
            ->join('fakultas', 'user.fakultas_id=fakultas.fakultas_id')
            ->join('prodi', 'user.prodi_id=prodi.prodi_id')
            ->get()->getResultArray();

        return $query;
    }
}
