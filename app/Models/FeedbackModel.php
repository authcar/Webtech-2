<?php

namespace App\Models;

use CodeIgniter\Model;

class FeedbackModel extends Model
{
    protected $table = 'feedback';
    protected $allowedFields = ['nama', 'email', 'pesan']; // sesuaikan kolom

    public function insertFeedback($data)
    {
        if (!$data) {
            return false;
        }

        return $this->insert($data);
    }
}