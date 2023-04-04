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
}
