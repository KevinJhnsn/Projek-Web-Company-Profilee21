<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ServiceModel;

class Service extends BaseController
{
    public function index()
    {
        $serviceModel = new ServiceModel();
        $data['services'] = $serviceModel->findAll();
        return view('admin/services/index', $data);
    }

    public function create()
    {
        return view('admin/services/create');
    }

    public function store()
    {
        $serviceModel = new ServiceModel();
        $serviceModel->save([
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description')
        ]);
        return redirect()->to('/admin/services')->with('success', 'Service created successfully.');
    }

    public function edit($id)
    {
        $serviceModel = new ServiceModel();
        $data['service'] = $serviceModel->find($id);
        return view('admin/services/edit', $data);
    }

    public function update($id)
    {
        $serviceModel = new ServiceModel();
        $serviceModel->update($id, [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description')
        ]);
        return redirect()->to('/admin/services')->with('success', 'Service updated successfully.');
    }

    public function delete($id)
    {
        $serviceModel = new ServiceModel();
        $serviceModel->delete($id);
        return redirect()->to('/admin/services')->with('success', 'Service deleted successfully.');
    }
}
