<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    protected $table = 'tasks';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'status', 'task_date', 'created_at'];

    public function getTodayTasks($today)
    {
        return $this->where('task_date', $today)->findAll();
    }

    public function getAllTasksOrdered()
    {
        return $this->orderBy('task_date', 'DESC')->findAll();
    }
}