<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AlumniModel;
use App\Models\BidangModel;
use App\Models\FakultasModel;
use App\Models\PengurusModel;
use App\Models\ProdiModel;

class Pendataan extends BaseController
{
    public function index()
    {
    }

    public function alumni()
    {
        session();
        $config = [
            "active" => "pendataan",
            'validation' => \Config\Services::validation()
        ];
        // dd($config);
        return view('pendataan/alumni_form', $config);
    }

    public function alumniPost()
    {

        if (!$this->validate([
            'nim' => 'required|is_unique[alumni.nim]',
            'foto' => 'uploaded[profile]|mime_in[profile,image/jpg,image/jpeg,image/png]|max_size[profile,4096]|is_image[profile]',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'no_telp' => 'required',
            'email' => 'required',
            'periode' => 'required',
        ])) {
            $validation = \Config\Services::validation();
            // dd($validation);
            return redirect()->to("/pendataan/alumni")->with("validation", $validation)->withInput();
        }

        $profile = $this->request->getFile("profile");
        $profile->move("profile/alumni");

        $alumni = new AlumniModel();
        $alumni->save([
            "nim" => $this->request->getVar("nim"),
            "foto" => $profile->getName(),
            "nama" => $this->request->getVar("nama"),
            "tempat_lahir" => "",
            "tanggal_lahir" => 0000 - 00 - 00,
            "jenis_kelamin" => $this->request->getVar("jenis_kelamin"),
            "alamat" => "",
            "no_telp" => $this->request->getVar("no_telp"),
            "email" => $this->request->getVar("email"),
            "password" => password_hash($this->request->getVar("nim"), PASSWORD_DEFAULT),
            "periode" => $this->request->getVar("periode"),
            "pekerjaan" => "",
            "golongan_darah" => "",
        ]);

        return redirect()->to("/pendataan/alumni_success");
    }

    public function alumni_success()
    {
        $config = [
            "active" => "pendataan",
        ];
        return view('pendataan/alumni_redirect', $config);
    }


    public function pengurus()
    {
        session();
        $fakultas = new FakultasModel();
        $prodi = new ProdiModel();
        $bidang = new BidangModel();
        $config = [
            "active" => "pendataan",
            "fakultas" => $fakultas->findAll(),
            "prodi" => $prodi->findAll(),
            "bidang" => $bidang->findAll(),
            'validation' => \Config\Services::validation()
        ];
        // dd($config);
        return view('pendataan/pengurus_form', $config);
    }

    public function pengurusPost()
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
            return redirect()->to("/pendataan/pengurus")->with("validation", $validation)->withInput();
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

        return redirect()->to("/pendataan/pengurus_success");
    }

    public function pengurus_success()
    {
        $config = [
            "active" => "pendataan",
        ];
        return view('pendataan/pengurus_redirect', $config);
    }
}
