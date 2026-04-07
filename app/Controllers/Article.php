<?php

namespace App\Controllers;

use App\Models\ArticleModel;

class Article extends BaseController
{
    public function index()
    {
        $model = new ArticleModel();

        // ambil artikel yang bukan draft
        $data['articles'] = $model->getPublished();

        if (!empty($data['articles'])) {
            return view('articles/list_article', $data);
        } else {
            return view('articles/empty_article');
        }
    }

    public function show($slug = null)
    {
        if (!$slug) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $model = new ArticleModel();
        $data['article'] = $model->findBySlug($slug);

        if (!$data['article']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('articles/show_article', $data);
    }
}