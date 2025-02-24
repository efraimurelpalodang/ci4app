<?php

namespace App\Controllers;

class Komik extends BaseController
{
  protected $komikModel;
  protected $helpers = ['form'];

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
    session();
    $data = [
      'tittle' => 'Tambah Data Komik',
      'validation' => \config\Services::validation()
    ];

    return view('komik/create', $data);
  }

  public function save()
  {
    // Validasi input
    if(!$this->validate([
      "judul" => "required|is_unique[komik.judul]"
    ])) {
      $validation = \config\Services::validation();
      return redirect()->to('create')->withInput();
    }


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

  public function delete($id) {
    $this->komikModel->delete($id);
    session()->setFlashdata('pesan','Data berhasil dihapus');
    return redirect()->to('komik');
  }

  public function edit($slug) {
    $data = [
      'tittle' => 'Ubah Data Komik',
      'komik' =>  $this->komikModel->getKomik($slug)
    ];

    return view('komik/edit', $data);
  }

  public function update($id) 
  {
    if (!$this->validate([
      
    ]));

    $slug = url_title($this->request->getVar('judul'),'-',true);
    $this->komikModel->save([
      'id' => $id,
      'judul' => $this->request->getVar('judul'),
      'slug' => $slug,
      'penulis' => $this->request->getVar('penulis'),
      'penerbit' => $this->request->getVar('penerbit'),
      'sampul' => $this->request->getVar('sampul'),
      'deskripsi' => $this->request->getVar('deskripsi')
    ]);
    session()->setFlashdata('pesan','Data berhasil diubah');
    return redirect()->to('komik');
  }


}
