<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BidangModel;

class Bidang extends BaseController
{
    public function index()
    {
        $bidang = new BidangModel();
        $config = [
            "active" => "konfigurasi",
            "bidang" => $bidang->findAll(),
        ];
        return view('admin/v_bidang', $config);
    }
}
