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
    // jika komik tidak ada di table
    if(empty($data['komik'])) {
      throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul komik ' . $slug . ' tidak ditemukan');
    }
    return view('komik/detail', $data);
  }

  public function create()
  {
    $data = [
      'tittle' => 'Tambah Data Komik'
    ];

    return view('komik/create', $data);
  }

  public function save()
  {
    $slug = url_title($this->request->getVar('judul'),'-',true);
    $this->komikModel->save([
      'judul' => $this->request->getVar('judul'),
      'slug' => $slug,
      'penulis' => $this->request->getVar('penulis'),
      'penerbit' => $this->request->getVar('penerbit'),
      'sampul' => $this->request->getVar('sampul'),
      'deskripsi' => $this->request->getVar('deskripsi')
    ]);
    session()->setFlashdata('pesan','Data berhasil ditambahkan');
    return redirect()->to('komik');
  }
}
