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
        return view('admin/agenda/v_agenda', $config);
    }

    public function tambah()
    {
        $config = [
            "active" => "agenda",
        ];
        return view('admin/agenda/v_agenda_tambah', $config);
    }

    public function save()
    {
        $agenda = new AgendaModel();
        $agenda->save([
            "agenda_nama" => $this->request->getVar("agenda_nama"),
            "agenda_deskripsi" => $this->request->getVar("agenda_deskripsi"),
            "agenda_mulai" => $this->request->getVar("agenda_mulai"),
            "agenda_selesai" => $this->request->getVar("agenda_selesai"),
            "agenda_tempat" => $this->request->getVar("agenda_tempat"),
            "agenda_waktu" => $this->request->getVar("agenda_waktu"),
            "agenda_keterangan" => $this->request->getVar("agenda_keterangan"),
            "agenda_pembuat" => session()->get("admin_name"),
        ]);
        return redirect()->to("/agenda");
    }

    public function delete($id)
    {
        $agenda = new AgendaModel();
        $agenda->delete($id);
        return redirect()->to("/agenda");
    }
}
