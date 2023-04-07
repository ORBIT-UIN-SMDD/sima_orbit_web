<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AlumniModel;

class Alumni extends BaseController
{
    protected $Alumni;
    public function __construct()
    {
        $this->Alumni = new AlumniModel();
    }
    public function index()
    {

        $alumni = $this->Alumni->findAll();
        $config = [
            "active" => "keanggotaan",
            "alumni" => $alumni
        ];
        return view('admin/v_alumni', $config);
    }

    public function delete($nim)
    {
        $this->Alumni->delete($nim);
        return redirect()->to("/alumni");
    }

    public function tambah()
    {
        session();
        $config = [
            "active" => "pendataan",
            'validation' => \Config\Services::validation()
        ];
        // dd($config);
        return view('admin/v_alumni_tambah', $config);
    }

    public function save()
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
            return redirect()->to("/alumni/tambah")->with("validation", $validation)->withInput();
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

        return redirect()->to("/alumni");
    }
}
