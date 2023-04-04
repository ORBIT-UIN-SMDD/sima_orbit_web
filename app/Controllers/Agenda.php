<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AgendaModel;

class Agenda extends BaseController
{
    public function index()
    {
        $agenda = new AgendaModel();
        $config = [
            "active" => "agenda",
            "agenda" => $agenda->findAll(),
        ];
        return view('admin/v_agenda', $config);
    }
}
