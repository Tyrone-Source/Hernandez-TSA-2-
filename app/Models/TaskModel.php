<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    protected $table          = 'tasks';
    protected $primaryKey     = 'id';
    protected $allowedFields  = ['title', 'task_date', 'is_archived'];

    public function getTodayTasks($today)
    {
        return $this->where('task_date', $today)->where('is_archived', 0)->findAll();
    }

    public function getAllTasksOrdered()
    {
        return $this->where('is_archived', 0)->orderBy('task_date', 'DESC')->findAll();
    }
}