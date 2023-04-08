<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PengumumanModel;

class Pengumuman extends BaseController
{
    public function index()
    {
        $pengumuman = new PengumumanModel();
        $config = [
            "active" => "pengumuman",
            "pengumuman" => $pengumuman->findAll(),
        ];
        return view('admin/pengumuman/v_pengumuman', $config);
    }

    public function delete($pengumuman_id)
    {
        $pengumuman = new PengumumanModel();
        $pengumuman->delete($pengumuman_id);
        return redirect()->to("/pengumuman");
    }

    public function broadcast()
    {

        $apiURL = 'http://54.255.24.46:3000/api/pengumuman/post';
        $client = \Config\Services::curlrequest();

        $postData = array(
            'pengumuman_judul' => $this->request->getVar("pengumuman_judul"),
            'pengumuman_deskripsi' => $this->request->getVar("pengumuman_deskripsi"),
            'pengumuman_pembuat' => session()->get("admin_name"),
        );

        // Send request
        $response = $client->post($apiURL, ['debug' => true, 'json' => $postData]);

        // Read response
        $code = $response->getStatusCode();

        if ($code == 200) { // Success

            // Read data 
            $body = json_decode($response->getBody());
            echo "body : " + $body;

            return redirect()->to("/pengumuman");
        } else {
            return "failed";
        }
    }
}
