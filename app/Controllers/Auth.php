<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function processLogin()
    {
        $role = $this->request->getPost('role');

        session()->set([
            'logged_in' => true,
            'username' => $this->request->getPost('username'),
            'role' => $role
        ]);

        // Redirect by role
        if ($role === 'customer') {
            return redirect()->to('/customer/dashboard');
        } elseif ($role === 'owner') {
            return redirect()->to('/owner/dashboard');
        } elseif ($role === 'admin') {
            return redirect()->to('/admin/dashboard');
        } else {
            return redirect()->to('/');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
