<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ContactModel;

class Contact extends BaseController
{
    public function index()
    {
        $contactModel = new ContactModel();
        $data['contacts'] = $contactModel->orderBy('created_at', 'DESC')->findAll();
        return view('admin/contact/index', $data);
    }

    public function delete($id)
    {
        $contactModel = new ContactModel();
        $contactModel->delete($id);
        return redirect()->to('/admin/contact')->with('success', 'Pesan berhasil dihapus.');
    }
}
