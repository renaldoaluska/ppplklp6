<?php

namespace App\Controllers;

class Customer extends BaseController
{
    public function dashboard()
    {
        // Cek apakah sudah login dan role-nya customer
        if (!session()->get('logged_in') || session()->get('role') !== 'customer') {
            return redirect()->to('/');
        }

        return view('customer/dashboard');
    }
}
