<?php

namespace App\Controllers;

use App\Models\UserModel;

class LoginController extends BaseController
{
    public function index()
    {
        // Tampilkan form login
        return view('login');
    }

    public function authenticate()
    {
        // Ambil data dari form
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Load UserModel
        $userModel = new UserModel();

        // Cari pengguna berdasarkan username
        $user = $userModel->where('username', $username)->first();

        if ($user) {

            // Validasi password
            if (password_verify($password, $user['password'])) {
                // Jika login berhasil, arahkan ke halaman dashboard
                return redirect()->to('/');
            } else {
                // Jika password tidak cocok
                return view('login', ['error' => 'Password salah!']);
            }
        } else {
            // Jika username tidak ditemukan
            return view('login', ['error' => 'Username tidak ditemukan!']);
        }
    }
    // logout
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
