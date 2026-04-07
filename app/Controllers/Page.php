<?php

namespace App\Controllers;
use App\Models\FeedbackModel;

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

        // Cek request POST
        if ($this->request->getMethod() === 'POST') {

            $model = new \App\Models\FeedbackModel();

            // Ambil input
            $feedback = [
                'id' => uniqid('', true),
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'message' => $this->request->getPost('message'),
            ];

            // Insert ke database
            $saved = $model->insert($feedback);

            if ($saved) {
                return view('contact_thanks');
            }
        }

        return view('contact', $data);
    }
}