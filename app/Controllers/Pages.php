<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
      $data = [
        'tittle' => 'Home',
        'tes' => ['satu','dua','tiga']
      ];
      return view('pages/home', $data);
    }

    public function about()
    {
      $data = [
        'tittle' => 'About Me'
      ];
      return view('pages/about', $data);
    }

    public function contact()
    {
      $data = [
        'tittle' => 'contact',
        'alamat' => [
          [
            'tipe' => 'rumah',
            'alamat' => 'jl A.Yani No.67',
            'kota' => 'Banjarbaru'
          ],
          [
            'tipe' => 'kantor',
            'alamat' => 'jl Manggis No.10',
            'kota' => 'Banjarmasin'
          ]
        ]
      ];
      return view('pages/contact', $data);
    }
}
