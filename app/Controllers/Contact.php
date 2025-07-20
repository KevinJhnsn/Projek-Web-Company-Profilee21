<?php

namespace App\Controllers;

use App\Models\ContactModel;
use CodeIgniter\Controller;

class Contact extends BaseController
{
    public function index()
    {
        return view('frontend/contact');
    }

    public function send()
    {
        $contactModel = new ContactModel();

        $data = [
            'name'       => $this->request->getPost('name'),
            'email'      => $this->request->getPost('email'),
            'message'    => $this->request->getPost('message'),
            'created_at' => date('Y-m-d H:i:s')
        ];

        if ($contactModel->insert($data)) {
            return redirect()->to('/contact')->with('success', 'Pesan berhasil dikirim!');
        } else {
            return redirect()->to('/contact')->with('error', 'Gagal mengirim pesan.');
        }
    }
}
