<?php

namespace App\Controllers\Admin;

class Dashboard extends \App\Controllers\BaseController
{
    public function index()
    {
        return view('admin/dashboard');
    }
}