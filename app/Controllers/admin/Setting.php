<?php

namespace App\Controllers\Admin;

class Setting extends \App\Controllers\BaseController
{
    public function index()
    {
        return view('admin/setting');
    }
}