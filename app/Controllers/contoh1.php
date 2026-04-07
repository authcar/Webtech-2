<?php

namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;

class contoh1 extends Controller
{
    public function index()
    {
        $db = \Config\Database::connect();
        echo "<h1>Perkenalkan</h1>";
        echo "Nama saya Audrey";
    }
}