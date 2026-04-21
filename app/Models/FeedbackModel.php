<?php

namespace App\Models;

use CodeIgniter\Model;

class FeedbackModel extends Model
{
    protected $table = 'feedback';
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'email', 'message'];

    // Insert data
    public function insertFeedback($data)
    {
        if (!$data) {
            return false;
        }

        return $this->insert($data);
    }

    // Get semua data
    public function getFeedback()
    {
        return $this->findAll();
    }

    // Delete berdasarkan ID
    public function deleteFeedback($id)
    {
        if (!$id) {
            return false;
        }

        return $this->where('id', $id)->delete();
    }
}