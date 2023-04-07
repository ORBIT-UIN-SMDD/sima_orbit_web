<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PenugasanAnggota;
use App\Models\PenugasanAnggotaModel;
use App\Models\PenugasanModel;
use App\Models\PenugasanPengurusModel;

class Penugasan extends BaseController
{
    public function index()
    {
        $penugasan = new PenugasanModel();
        $config = [
            "active" => "penugasan",
            "penugasan" => $penugasan->findAll()
        ];
        return view("admin/penugasan/v_penugasan", $config);
    }
    public function tambah()
    {
        $config = [
            "active" => "penugasan",
        ];
        return view("admin/penugasan/v_penugasan_tambah", $config);
    }

    public function save()
    {
        if (!$this->validate([
            'penugasan_nama' => 'required',
            'penugasan_deskripsi' => 'required',
            'penugasan_mulai' => 'required',
            'penugasan_selesai' => 'required',
            'penugasan_tempat' => 'required',
            'penugasan_waktu' => 'required',
            'penugasan_oleh' => 'required',
            'penugasan_no_surat' => 'required',
            'penugasan_sk' => 'uploaded[file_upload]|mime_in[file_upload,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/pdf,image/jpg,image/jpeg,image/png]',

        ])) {
            $validation = \Config\Services::validation();
            // dd($validation);
            return redirect()->to("/penugasan/tambah")->with("validation", $validation)->withInput();
        }

        $sk = $this->request->getFile("file_upload");
        $sk->move("file/sk");

        $penugasan = new PenugasanModel();
        $penugasan->save([
            'penugasan_nama' => $this->request->getVar("penugasan_nama"),
            'penugasan_deskripsi' => $this->request->getVar("penugasan_deskripsi"),
            'penugasan_mulai' => $this->request->getVar("penugasan_mulai"),
            'penugasan_selesai' => $this->request->getVar("penugasan_selesai"),
            'penugasan_tempat' => $this->request->getVar("penugasan_tempat"),
            'penugasan_waktu' => $this->request->getVar("penugasan_waktu"),
            'penugasan_oleh' => $this->request->getVar("penugasan_oleh"),
            'penugasan_no_surat' => $this->request->getVar("penugasan_no_surat"),
            'penugasan_sk' => $sk->getName(),
        ]);

        return redirect()->to("/penugasan");
    }

    public function detail($penugsan_id)
    {
        $penugasan = new PenugasanModel();
        $penugasanAnggota = new PenugasanAnggotaModel();
        $penugasanPengurus = new PenugasanPengurusModel();
        $config = [
            "active" => "penugasan",
            "penugasan" => $penugasan->find($penugsan_id),
            "penugasan_anggota" => $penugasanAnggota->relasiAnggota(),
            "penugasan_pengurus" => $penugasanPengurus->relasiPengurus()
        ];
        // dd($config);
        return view("admin/penugasan/v_penugasan_detail", $config);
    }
}
