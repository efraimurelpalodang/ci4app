<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        echo 'ini controller coba method index';
    }
    public function about($nama)
    {
        echo "Hallo nama saya $nama";
    }
}
