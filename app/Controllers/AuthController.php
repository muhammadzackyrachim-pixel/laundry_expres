<?php

namespace App\Controllers;

class AuthController extends BaseController
{
    // Data user statis (SOAL 04)
    private $users = [
        'admin' => [
            'password' => 'admin123',
            'name'     => 'Administrator Kampus',
            'role'     => 'admin'
        ],
        'dosen' => [
            'password' => 'dosen123',
            'name'     => 'Dosen Tetap',
            'role'     => 'dosen'
        ]
    ];

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

        // Cek username ada di array
        if (isset($this->users[$username])) {
            // Cek password cocok
            if ($this->users[$username]['password'] === $password) {
                // Set session
                session()->set([
                    'isLoggedIn' => true,
                    'username'   => $username,
                    'name'       => $this->users[$username]['name'],
                    'role'       => $this->users[$username]['role']
                ]);

                return redirect()->to('/')->with('success', 'Selamat datang ' . $this->users[$username]['name']);
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