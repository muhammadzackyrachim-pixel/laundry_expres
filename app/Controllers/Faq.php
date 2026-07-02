<?php

namespace App\Controllers;

class Faq extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'F.A.Q - Fresh Laundry'
        ];
        return view('faq', $data);
    }
}