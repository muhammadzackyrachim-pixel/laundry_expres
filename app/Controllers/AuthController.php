<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        // Jika sudah login, redirect ke home
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/');
        }
        
        return view('login');
    }

    public function loginProcess()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Cari user berdasarkan username
        $user = $this->userModel->where('username', $username)->first();

        if ($user) {
            // Verifikasi password
            if (password_verify($password, $user['password'])) {
                // Set session
                session()->set([
                    'isLoggedIn' => true,
                    'user_id'    => $user['id'],
                    'username'   => $user['username'],
                    'nama'       => $user['nama'],
                    'role'       => $user['role'],
                ]);

                return redirect()->to('/')->with('success', 'Selamat datang ' . $user['nama']);
            }
        }

        // Jika gagal login
        return redirect()->back()->with('error', 'Username atau password salah!');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login')->with('success', 'Anda telah logout');
    }
}