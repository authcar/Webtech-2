<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model
{
    protected $table = 'article';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'slug', 'content', 'draft'];

    // ambil artikel yang publish
    public function getPublished($limit = null, $offset = null)
    {
        return $this->where('draft', 'false')
                    ->findAll($limit, $offset);
    }

    // cari berdasarkan slug
    public function findBySlug($slug)
    {
        if (!$slug) {
            return null;
        }

        return $this->where('slug', $slug)
                    ->first();
    }
}