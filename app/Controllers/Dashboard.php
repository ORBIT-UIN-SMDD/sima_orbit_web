<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AlumniModel;
use App\Models\AnggotaModel;
use App\Models\BidangModel;
use App\Models\PengurusModel;
use App\Models\ProdiModel;
use CodeIgniter\API\ResponseTrait;

class Dashboard extends BaseController
{
    use ResponseTrait;

    protected $anggota, $alumni, $pengurus, $prodi, $bidang, $configH;
    public function __construct()
    {
        $this->anggota = new AnggotaModel();
        $this->alumni = new AlumniModel();
        $this->pengurus = new PengurusModel();
        $this->prodi = new ProdiModel();
        $this->bidang = new BidangModel();

        $this->configH = [
            "jumlah_anggota_active" =>  $this->anggota->where("active", 1)->countAllResults(),
            "jumlah_anggota_nonactive" =>  $this->anggota->where("active", 0)->countAllResults(),
            "jumlah_alumni" =>  $this->alumni->countAllResults(),
            "jumlah_pengurus" =>  $this->pengurus->countAllResults(),

            "bidang_programming" =>  $this->anggota->where("bidang_id", 1)->countAllResults(),
            "bidang_multimedia" =>  $this->anggota->where("bidang_id", 2)->countAllResults(),
            "bidang_networking" =>  $this->anggota->where("bidang_id", 3)->countAllResults(),
            "bidang_robotik" =>  $this->anggota->where("bidang_id", 4)->countAllResults(),

            "alumni_goldar" => $this->alumni->findAll(),
            "prodi" => $this->prodi->relasiAnggota(),
            "bidang" => $this->bidang->relasiAnggota(),
            "active" => "dashboard"
        ];
    }



    public function index()
    {
        // dd($this->configH);
        return view('admin/v_dashboard', $this->configH);
    }

    public function dataDashboard()
    {
        return $this->respond($this->configH, 200);
    }
}
