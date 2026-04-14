<?php

namespace App\Controllers;

class Feedback extends BaseController
{
    public function index()
    {
        return view('admin/feedback');
    }
}