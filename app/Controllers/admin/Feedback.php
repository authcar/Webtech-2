<?php

namespace App\Controllers\Admin;

use App\Models\FeedbackModel;
use CodeIgniter\Controller;

class Feedback extends Controller
{
    protected $feedbackModel;

    public function __construct()
    {
        $this->feedbackModel = new FeedbackModel();
    }

    // Tampilkan data
    public function index()
    {
        $data['feedbacks'] = $this->feedbackModel->getFeedback();

        return view('admin/feedback_list', $data);
    }

    // Delete data
    public function delete($id = null)
    {
        if (!$id) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        }

        $this->feedbackModel->deleteFeedback($id);

        return redirect()->to('/admin/feedback')
                         ->with('message', 'Data was deleted');
    }
}