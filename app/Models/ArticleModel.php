<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model
{
    protected $table = 'article';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'title', 'slug', 'content', 'draft'
    ];

    // Ambil semua data
    public function getAll()
    {
        return $this->findAll();
    }

    // Ambil hanya yang published (draft = false)
    public function getPublished($limit = null, $offset = null)
    {
        return $this->where('draft', 'false')
                    ->findAll($limit, $offset);
    }

    // Cari berdasarkan slug
    public function findBySlug($slug)
    {
        if (!$slug) {
            return null;
        }

        return $this->where('slug', $slug)->first();
    }

    // Cari berdasarkan ID
    public function findById($id)
    {
        if (!$id) {
            return null;
        }

        return $this->find($id);
    }

    // Insert data
    public function insertArticle($data)
    {
        return $this->insert($data);
    }

    // Update data
    public function updateArticle($data)
    {
        if (!isset($data['id'])) {
            return false;
        }

        return $this->update($data['id'], $data);
    }

    // Delete data
    public function deleteArticle($id)
    {
        if (!$id) {
            return false;
        }

        return $this->delete($id);
    }
}