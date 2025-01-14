<?php

namespace App\Controllers;

class Komik extends BaseController
{
  protected $komikModel;

  public function __construct()
  {
    $this->komikModel = new \App\Models\KomikModel();
  }

  public function index()
  {
    $komik = $this->komikModel->findAll();
    $data = [
      'tittle' => 'Daftar Komik',
      'komik' => $komik
    ];


    return view('comic/index', $data);
  }
}
