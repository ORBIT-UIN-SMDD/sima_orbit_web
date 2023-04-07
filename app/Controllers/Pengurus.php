<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BidangModel;
use App\Models\FakultasModel;
use App\Models\PengurusModel;
use App\Models\ProdiModel;

class Pengurus extends BaseController
{
    public function index()
    {
        $pengurus = new PengurusModel();
        $config = [
            "active" => "keanggotaan",
            "pengurus" => $pengurus->relasi(),
        ];
        // dd($config);
        return view('admin/v_pengurus', $config);
    }

    public function delete($nim)
    {
        $pengurus = new PengurusModel();
        $pengurus->delete($nim);
        return redirect()->to("/pengurus");
    }

    public function tambah()
    {
        session();
        $fakultas = new FakultasModel();
        $prodi = new ProdiModel();
        $bidang = new BidangModel();
        $config = [
            "active" => "keanggotaan",
            "fakultas" => $fakultas->findAll(),
            "prodi" => $prodi->findAll(),
            "bidang" => $bidang->findAll(),
            'validation' => \Config\Services::validation()
        ];
        // dd($config);
        return view('admin/v_pengurus_tambah', $config);
    }

    public function save()
    {
        if (!$this->validate([
            'nim' => 'required|is_unique[alumni.nim]',
            'foto' => 'uploaded[profile]|mime_in[profile,image/jpg,image/jpeg,image/png]|max_size[profile,4096]|is_image[profile]',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'fakultas_id' => 'required',
            'prodi_id' => 'required',
            'bidang_id' => 'required',
            'no_telp' => 'required',
            'email' => 'required',
        ])) {
            $validation = \Config\Services::validation();
            dd($validation);
            return redirect()->to("/pengurus/tambah")->with("validation", $validation)->withInput();
        }

        $profile = $this->request->getFile("profile");
        $profile->move("profile/pengurus");

        $pengurus = new PengurusModel();
        $pengurus->save([
            "nim" => $this->request->getVar("nim"),
            "foto" => $profile->getName(),
            "nama" => $this->request->getVar("nama"),
            "tempat_lahir" => "",
            "tanggal_lahir" => 0000 - 00 - 00,
            "jenis_kelamin" => $this->request->getVar("jenis_kelamin"),
            "alamat" => "",
            "fakultas_id" => $this->request->getVar("fakultas_id"),
            "prodi_id" => $this->request->getVar("prodi_id"),
            "bidang_id" => $this->request->getVar("bidang_id"),
            "no_telp" => $this->request->getVar("no_telp"),
            "email" => $this->request->getVar("email"),
            "password" => password_hash($this->request->getVar("nim"), PASSWORD_DEFAULT),
            "periode" => 2023,
            "active" => 1,
        ]);

        return redirect()->to("/pengurus");
    }
}
