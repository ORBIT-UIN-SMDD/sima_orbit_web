<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PengumumanModel;

class Pengumuman extends BaseController
{
    public function index()
    {
        $pengumuman = new PengumumanModel();
        $config = [
            "active" => "pengumuman",
            "pengumuman" => $pengumuman->findAll(),
        ];
        return view('admin/v_pengumuman', $config);
    }

    public function delete($pengumuman_id)
    {
        $pengumuman = new PengumumanModel();
        $pengumuman->delete($pengumuman_id);
        return redirect()->to("/pengumuman");
    }
}
