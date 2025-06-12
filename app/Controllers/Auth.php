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
        // ini nanti kamu isi logic login beneran
        $role = $this->request->getPost('role');

        if ($role == 'customer') {
            session()->set(['logged_in' => true, 'role' => 'customer']);
            return redirect()->to('/customer/dashboard');
        } elseif ($role == 'owner') {
            session()->set(['logged_in' => true, 'role' => 'owner']);
            return redirect()->to('/owner/dashboard');
        } elseif ($role == 'admin') {
            session()->set(['logged_in' => true, 'role' => 'admin']);
            return redirect()->to('/admin/dashboard');
        }

        return redirect()->back()->with('error', 'Role tidak valid.');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
