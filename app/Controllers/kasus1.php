<?php

namespace App\Controllers;

class Kasus1 extends BaseController
{
    public function index()
    {
        return view('biodata');
    }

    public function hasil()
    {
        $data = [
            'nim' => $this->request->getPost('nim'),
            'nama' => $this->request->getPost('nama'),
            'jurusan' => $this->request->getPost('jurusan'),
            'alamat' => $this->request->getPost('alamat'),
            'telpon' => $this->request->getPost('telpon')
        ];

        return view('biodata', $data);
    }
}