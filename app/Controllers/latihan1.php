<?php

namespace App\Controllers;

use App\Models\model_latihan1;
use CodeIgniter\Controller;

class Latihan1 extends Controller
{
    public function index()
    {
        echo "<b><h2>Pemrograman Web dengan Framework CodeIgniter !!!</h2></b>";
    }

    public function penjumlahan($n1, $n2)
    {
       // $model = new model_latihan1();

       // $hasil = $model->jumlah($n1, $n2);

      //  echo "Hasil Penjumlahan dari ".$n1." + ".$n2." = ".$hasil;

       $model = new Model_latihan1();

        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $model->jumlah($n1,$n2);

        return view('view_latihan1', $data);
    }
}