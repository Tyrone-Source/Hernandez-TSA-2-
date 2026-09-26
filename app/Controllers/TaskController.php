<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;

class TaskController extends BaseController
{

    public function index()
    {
        $taskModel = new TaskModel();
        $today = date('Y-m-d'); 
        
        $data['tasks'] = $taskModel->getTodayTasks($today);
        $data['today'] = $today;

        return view('welcome', $data);
    }

    public function tasks()
    {
        $taskModel = new TaskModel();
        $data['tasks'] = $taskModel->getAllTasksOrdered();

        return view('tasks', $data);
    }

    public function profile()
    {
        $userModel = new UserModel();
        $data['user'] = $userModel->getDemoUser();

        return view('profile', $data);
    }


    public function about()
    {
        return view('about');
    }
}