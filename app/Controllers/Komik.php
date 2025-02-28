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
    ];

    return view('komik/create', $data);
  }

  public function save()
  {
    // Validasi input
    if(!$this->validate([
      "judul" => [
        'rules' => 'required|is_unique[komik.judul]',
        'errors' => [
          'required' => '{field} komik harus diisi tidak boleh kosong.',
          'is_unique' => '{field} komik sudah ada, silahkan pilih {field} komik yang lain.'
        ]
      ],
      "sampul" => [
        'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
        'errors' => [
          'max_size' => 'maximal ukuran gambar 1MB',
          'is_image' => 'yang anda pilih bukan gambar',
          'mime_in' => 'yang anda pilih bukan gambar'
        ]
      ]
    ])) {
      return redirect()->to('create')->withInput();
    }

    // mengambil file sampul
    $fileSampul = $this->request->getFile('sampul');
    // cek apakah tidak ada gambar yang di upload 
    if($fileSampul->getError() == 4) {
      $namaSampul = 'index.png';
    } else {
      // generate nama sampul random agar lebih aman
      $namaSampul = $fileSampul->getRandomName();
      // pindahkan file ke folder img
      $fileSampul->move('img', $namaSampul);
    }

    $slug = url_title($this->request->getVar('judul'),'-',true);
    $this->komikModel->save([
      'judul' => $this->request->getVar('judul'),
      'slug' => $slug,
      'penulis' => $this->request->getVar('penulis'),
      'penerbit' => $this->request->getVar('penerbit'),
      'sampul' => $namaSampul,
      'deskripsi' => $this->request->getVar('deskripsi')
    ]);
    session()->setFlashdata('pesan','Data berhasil ditambahkan');
    return redirect()->to('komik');
  }

  public function delete($id) {
    // mencari gambar berdasarkan id
    $komik = $this->komikModel->find($id);

    // cek jikan file gambarnya default
    if($komik["sampul"] != 'index.png') {
      // menghapus gambar
      unlink('img/'.$komik["sampul"]);
    }


    $this->komikModel->delete($id);
    session()->setFlashdata('pesan','Data berhasil dihapus');
    return redirect()->to('komik');
  }

  public function edit($slug) {
    $data = [
      'tittle' => 'Form Ubah Data Komik',
      'komik' =>  $this->komikModel->getKomik($slug),
      'komik' => $this->komikModel->getKomik($slug)
    ];

    return view('komik/edit', $data);
  }

  public function update($id) 
  {
    // cek judul
    $komikLama = $this->komikModel->getKomik($this->request->getVar('slug'));
    if($komikLama['judul'] == $this->request->getVar('judul')) {
      $rule_judul = 'required';
    } else {
      $rule_judul = 'required|is_unique[komik.judul]';
    }
    
    // Validasi input
    if(!$this->validate([
      "judul" => [
        'rules' => $rule_judul,
        'errors' => [
          'required' => '{field} komik harus diisi tidak boleh kosong.',
          'is_unique' => '{field} komik sudah ada, silahkan pilih {field} komik yang lain.'
        ]
      ]
    ])) {
      return redirect()->to('/edit/'. $this->request->getVar('slug'))->withInput();
    }

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
