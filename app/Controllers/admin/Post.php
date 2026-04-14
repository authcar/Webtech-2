<?php

namespace App\Controllers\Admin;

class Post extends \App\Controllers\BaseController
{
    public function index()
    {
        return view('admin/post_list');
    }
}