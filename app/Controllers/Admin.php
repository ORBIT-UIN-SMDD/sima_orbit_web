<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class Admin extends BaseController
{
    public function index()
    {
        $admin = new AdminModel();
        $config = [
            "active" => "admin",
            "admin" => $admin->findAll()
        ];
        return view("admin/v_admin", $config);
    }

    public function create()
    {
        $admin = new AdminModel();
        $admin->save([
            "admin_name" => $this->request->getVar("admin_name"),
            "admin_email" => $this->request->getVar("admin_email"),
            "admin_password" => password_hash($this->request->getVar("admin_password"), PASSWORD_DEFAULT),
            "admin_level" => $this->request->getVar("admin_level"),
            "admin_status" => 1,

        ]);
        return redirect()->to("/admin");
    }

    public function delete($admin_id)
    {
        $admin = new AdminModel();
        $admin->delete($admin_id);
        return redirect()->to("/admin");
    }
}
