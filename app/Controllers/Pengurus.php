<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PengurusModel;

class Pengurus extends BaseController
{
    public function index()
    {
        $pengurus = new PengurusModel();
        $config = [
            "active" => "keanggotaan",
            "pengurus" => $pengurus->findAll(),
        ];
        return view('admin/v_pengurus', $config);
    }
}