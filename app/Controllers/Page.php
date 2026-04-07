<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function home()
    {
        $data['meta'] = [
            'title' => 'Home'
        ];

        return view('home', $data);
    }

    public function pribadi()
    {
        $data['meta'] = [
            'title' => 'Pribadi'
        ];

        return view('pribadi', $data);
    }

    public function pendidikan()
    {
        $data['meta'] = [
            'title' => 'Pendidikan'
        ];

        return view('pendidikan', $data);
    }

    public function hobby()
    {
        $data['meta'] = [
            'title' => 'Hobby'
        ];

        return view('hobby', $data);
    }

    public function about()
    {
        $data['meta'] = [
            'title' => 'About beritakoding'
        ];

        return view('about', $data);
    }

    public function contact()
    {
        $data['meta'] = [
            'title' => 'Contact Us'
        ];

        // hanya proses kalau POST
        if ($this->request->getMethod() === 'post') {
            $post = $this->request->getPost();

            // debug (sementara)
            dd($post);
        }

        return view('contact', $data);
    }
}