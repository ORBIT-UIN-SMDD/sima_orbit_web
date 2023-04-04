<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AnggotaModel;

class Anggota extends BaseController
{
    public function index()
    {
        $anggota = new AnggotaModel();
        $config = [
            "active" => "keanggotaan",
            "anggota" => $anggota->findAll(),
        ];
        return view('admin/v_anggota', $config);
    }
}
