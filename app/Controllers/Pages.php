<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [

            'title' => 'Home | Hanif Computer', 'tes' => ['satu', 'dua', 'tiga']
        ];
        echo view('Pages/Home', $data);
    }
    public function about()
    {
        $data = [

            'title' => 'Tentang saya | Hanif Computer'
        ];
        echo view('Pages/About', $data);
    }
    public function layanan()
    {
        $data = [
            'title' => 'Layanan Kami | Hanif Computer'
        ];
        echo view('Pages/Layanan', $data);
    }
}
