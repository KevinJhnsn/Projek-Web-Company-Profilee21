<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\PortfolioModel;

class Portfolio extends BaseController
{
    public function index()
    {
        $portfolioModel = new PortfolioModel();
        $data['portfolio'] = $portfolioModel->findAll();
        return view('admin/portfolio/index', $data);
    }

    public function create()
    {
        return view('admin/portfolio/create');
    }

    public function store()
    {
        $portfolioModel = new PortfolioModel();

        // Upload image jika ada
        $imageFile = $this->request->getFile('image');
        $imageName = null;
        if ($imageFile && $imageFile->isValid()) {
            $imageName = $imageFile->getRandomName();
            $imageFile->move('uploads/portfolio/', $imageName);
        }

        $portfolioModel->save([
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'image' => $imageName
        ]);

        return redirect()->to('/admin/portfolio')->with('success', 'Portfolio created successfully.');
    }

    public function edit($id)
    {
        $portfolioModel = new PortfolioModel();
        $data['portfolio'] = $portfolioModel->find($id);
        return view('admin/portfolio/edit', $data);
    }

    public function update($id)
    {
        $portfolioModel = new PortfolioModel();

        $imageFile = $this->request->getFile('image');
        $imageName = $this->request->getPost('old_image');

        if ($imageFile && $imageFile->isValid()) {
            $imageName = $imageFile->getRandomName();
            $imageFile->move('uploads/portfolio/', $imageName);
        }

        $portfolioModel->update($id, [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'image' => $imageName
        ]);

        return redirect()->to('/admin/portfolio')->with('success', 'Portfolio updated successfully.');
    }

    public function delete($id)
    {
        $portfolioModel = new PortfolioModel();
        $portfolio = $portfolioModel->find($id);

        // Hapus gambar dari folder
        if ($portfolio['image'] && file_exists('uploads/portfolio/' . $portfolio['image'])) {
            unlink('uploads/portfolio/' . $portfolio['image']);
        }

        $portfolioModel->delete($id);
        return redirect()->to('/admin/portfolio')->with('success', 'Portfolio deleted successfully.');
}
}