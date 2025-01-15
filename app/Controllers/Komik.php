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
    // $komik = $this->komikModel->findAll();
    $data = [
      'tittle' => 'Daftar Komik',
      'komik' => $this->komikModel->getKomik()
    ];
    return view('Komik/index', $data);
  }

  public function detail($slug)
  {
    $data = [
      'tittle' => 'Detail Komik',
      'komik' =>  $this->komikModel->getKomik($slug)
    ];
    return view('komik/detail', $data);
  }
}
