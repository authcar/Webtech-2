<?php

namespace App\Controllers\Admin;

class Feedback extends \App\Controllers\BaseController
{
    public function index()
    {
        return view('admin/feedback_list');
    }
}