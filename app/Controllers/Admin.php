<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Admin extends BaseController
{
    public function index(): string
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/admin/login');
        }
        return view('admin/dashboard');
    }

    public function login(): string
    {
        return view('admin/login');
    }

    public function authenticate()
    {
        $session = session();
        $userModel = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $userModel->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            $session->set([
                'user_id' => $user['id'],
                'username' => $user['username'],
                'logged_in' => true
            ]);
            return redirect()->to('/admin');
        } else {
            return redirect()->to('/admin/login')->with('error', 'Invalid username or password');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/admin/login');
    }
}
