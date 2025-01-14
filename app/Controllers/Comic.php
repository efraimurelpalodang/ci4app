<?php

namespace App\Controllers;

class Comic extends BaseController
{
    public function index()
    {
      $data = [
        'tittle' => 'Daftar Komik'
      ];
      return view('comic/index', $data);
    }
}
