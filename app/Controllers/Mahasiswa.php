<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Mahasiswa extends Controller
{
    public function index()
    {
        $data['mahasiswa'] = [
            [
                'nim' => '50240318',
                'nama' => 'Audrey Theresia Carmanto',
                'jurusan' => 'Teknik Informatika',
                'alamat' => 'Jakarta',
                'telepon' => '081234567890'
            ],
            [
                'nim' => '50240319',
                'nama' => 'Stephanie Wijaya Wie',
                'jurusan' => 'Teknik Informatika',
                'alamat' => 'Jakarta',
                'telepon' => '082345678901'
            ],
            [
                'nim' => '50240320',
                'nama' => 'Jonas Febrilian Dani',
                'jurusan' => 'Sistem Informasi',
                'alamat' => 'Bandung',
                'telepon' => '083456789012'
            ]
        ];

        return view('mahasiswa_view', $data);
    }
}