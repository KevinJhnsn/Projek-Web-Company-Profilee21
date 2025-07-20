<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class Product extends BaseController
{
    public function index()
    {
        $productModel = new ProductModel();
        $data['products'] = $productModel->findAll();
        return view('admin/products/index', $data);
    }

    public function create()
    {
        return view('admin/products/create');
    }

    public function store()
    {
        $productModel = new ProductModel();

        $productModel->save([
            'name'        => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price'       => $this->request->getPost('price')
        ]);

        return redirect()->to('/admin/products')->with('success', 'Product created successfully.');
    }

    public function edit($id)
    {
        $productModel = new ProductModel();
        $data['product'] = $productModel->find($id);
        return view('admin/products/edit', $data);
    }

    public function update($id)
    {
        $productModel = new ProductModel();
        $productModel->update($id, [
            'name'        => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price'       => $this->request->getPost('price')
        ]);

        return redirect()->to('/admin/products')->with('success', 'Product updated successfully.');
    }

    public function delete($id)
    {
        $productModel = new ProductModel();
        $productModel->delete($id);
        return redirect()->to('/admin/products')->with('success', 'Product deleted successfully.');
    }
}
