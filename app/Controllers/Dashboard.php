<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $config = [
            "active" => "dashboard"
        ];
        return view('admin/v_dashboard', $config);
    }
}
