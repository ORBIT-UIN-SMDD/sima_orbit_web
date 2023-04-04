<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PenugasanModel;

class Penugasan extends BaseController
{
    public function index()
    {
        $penugasan = new PenugasanModel();
        $config = [
            "active" => "penugasan",
            "penugasan" => $penugasan->findAll()
        ];
        return view("admin/v_penugasan", $config);
    }
}
