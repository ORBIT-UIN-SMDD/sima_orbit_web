<?php

namespace App\Controllers;

use App\Controllers\BaseController;
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
        return view('admin/v_kompetensi', $config);
    }
}
