<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class OrangSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nama' => 'efraim urel',
            'alamat'    => 'JL. kepoyaaanda No.3',
            'create_at' => Time::now(),
            'updated_at' => Time::now(),
        ];

        // Simple Queries
        // $this->db->query('INSERT INTO orang (nama, alamat, create_at, updated_at) VALUES(:nama:, :alamat:, :create_at:, :updated_at:)', $data);

        // Using Query Builder
        $this->db->table('orang')->insert($data);

    }
}
