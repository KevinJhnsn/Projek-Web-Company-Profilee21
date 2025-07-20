<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\TestimonialModel;

class Testimonial extends BaseController
{
    public function index()
    {
        $testimonialModel = new TestimonialModel();
        $data['testimonials'] = $testimonialModel->findAll();
        return view('admin/testimonials/index', $data);
    }

    public function create()
    {
        return view('admin/testimonials/create');
    }

    public function store()
    {
        $testimonialModel = new TestimonialModel();

        // Upload image jika ada
        $imageFile = $this->request->getFile('image');
        $imageName = null;
        if ($imageFile && $imageFile->isValid()) {
            $imageName = $imageFile->getRandomName();
            $imageFile->move('uploads/testimonials/', $imageName);
        }

        $testimonialModel->save([
            'name' => $this->request->getPost('name'),
            'position' => $this->request->getPost('position'),
            'message' => $this->request->getPost('message'),
            'image' => $imageName
        ]);

        return redirect()->to('/admin/testimonials')->with('success', 'Testimonial created successfully.');
    }

    public function edit($id)
    {
        $testimonialModel = new TestimonialModel();
        $data['testimonial'] = $testimonialModel->find($id);
        return view('admin/testimonials/edit', $data);
    }

    public function update($id)
    {
        $testimonialModel = new TestimonialModel();

        $imageFile = $this->request->getFile('image');
        $imageName = $this->request->getPost('old_image');

        if ($imageFile && $imageFile->isValid()) {
            $imageName = $imageFile->getRandomName();
            $imageFile->move('uploads/testimonials/', $imageName);
        }

        $testimonialModel->update($id, [
            'name' => $this->request->getPost('name'),
            'position' => $this->request->getPost('position'),
            'message' => $this->request->getPost('message'),
            'image' => $imageName
        ]);

        return redirect()->to('/admin/testimonials')->with('success', 'Testimonial updated successfully.');
    }

    public function delete($id)
    {
        $testimonialModel = new TestimonialModel();
        $testimonial = $testimonialModel->find($id);

        if ($testimonial['image'] && file_exists('uploads/testimonials/' . $testimonial['image'])) {
            unlink('uploads/testimonials/' . $testimonial['image']);
        }

        $testimonialModel->delete($id);
        return redirect()->to('/admin/testimonials')->with('success', 'Testimonial deleted successfully.');
    }
}
