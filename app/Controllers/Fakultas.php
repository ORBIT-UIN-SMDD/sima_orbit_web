<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FakultasModel;

class Fakultas extends BaseController
{
    public function index()
    {
        $fakultas = new FakultasModel();
        $config = [
            "active" => "konfigurasi",
            "fakultas" => $fakultas->findAll(),
        ];
        return view('admin/v_fakultas', $config);
    }
}
