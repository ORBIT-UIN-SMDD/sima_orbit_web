<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdiModel;

class Prodi extends BaseController
{
    public function index()
    {
        $prodi = new ProdiModel();
        $config = [
            "active" => "konfigurasi",
            "prodi" => $prodi->relasi(),
        ];
        return view('admin/v_prodi', $config);
    }
}
