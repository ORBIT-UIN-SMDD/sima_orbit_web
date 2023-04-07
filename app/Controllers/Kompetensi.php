<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BidangModel;
use App\Models\KompetensiModel;

class Kompetensi extends BaseController
{
    public function index()
    {
        $kompetensi = new KompetensiModel();
        $config = [
            "active" => "kompetensi",
            "kompetensi" => $kompetensi->relasi(),
        ];
        return view('admin/kompetensi/v_kompetensi', $config);
    }

    public function tambah()
    {
        $bidang = new BidangModel();
        $config = [
            "active" => "kompetensi",
            "bidang" => $bidang->findAll()
        ];
        return view('admin/kompetensi/v_kompetensi_tambah', $config);
    }

    public function save()
    {
        if (!$this->validate([
            'sertifkat_no' => 'required',
            'nim' => 'required',
            'bidang_id' => 'required',
            'kompetensi_nama' => 'required',
            'kompetensi_untuk' => 'required',
            'kompetensi_diverifikasi_oleh' => 'required',
            'kompetensi_tanggal' => 'required',
            'kompetensi_sertifikat' => 'uploaded[file_upload]|mime_in[file_upload,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/pdf,image/jpg,image/jpeg,image/png]',

        ])) {
            $validation = \Config\Services::validation();
            dd($validation);
            return redirect()->to("/kompetensi/tambah")->with("validation", $validation)->withInput();
        }

        $sk = $this->request->getFile("file_upload");
        $sk->move("file/sertifikat");

        $penugasan = new KompetensiModel();
        $penugasan->save([
            'sertifkat_no' => $this->request->getVar("sertifkat_no"),
            'nim' => $this->request->getVar("nim"),
            'bidang_id' => $this->request->getVar("bidang_id"),
            'kompetensi_nama' => $this->request->getVar("kompetensi_nama"),
            'kompetensi_untuk' => $this->request->getVar("kompetensi_untuk"),
            'kompetensi_diverifikasi_oleh' => $this->request->getVar("kompetensi_diverifikasi_oleh"),
            'kompetensi_tanggal' => $this->request->getVar("kompetensi_tanggal"),
            'kompetensi_sertifikat' => $sk->getName(),
        ]);

        return redirect()->to("/kompetensi");
    }
    public function delete($sertifkat_no)
    {
        $kompetensi = new KompetensiModel();
        $kompetensi->delete($sertifkat_no);
        return redirect()->to("/kompetensi");
    }
}
