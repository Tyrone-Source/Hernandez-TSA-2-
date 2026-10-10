<?php

namespace App\Controllers;

use App\Models\TaskModel;

class TaskController extends BaseController
{
    public function index()
    {
        $model = new TaskModel();
        // Exclude archived tasks from the list
        $data['tasks'] = $model->where('is_archived', 0)->findAll();
        return view('tasks', $data);
    }

    public function new()
    {
        helper(['form']);
        return view('new');
    }

    public function create()
    {
        helper(['form']);
        
        // Validate required fields
        $rules = [
            'title'     => 'required',
            'task_date' => 'required'
        ];

        if (!$this->validate($rules)) {
            return view('tasks/new', [
                'validation' => $this->validator
            ]);
        }

        $model = new TaskModel();
        $model->save([
            'title'       => $this->request->getVar('title'),
            'task_date'   => $this->request->getVar('task_date'),
            'is_archived' => 0
        ]);

        return redirect()->to('/tasks');
    }

    public function edit($id = null)
    {
        helper(['form']);
        $model = new TaskModel();
        $data['task'] = $model->find($id);

        if (empty($data['task'])) {
            return redirect()->to('/tasks');
        }

        return view('edit', $data);
    }

    public function update($id = null)
    {
        helper(['form']);
        
        $rules = [
            'title'     => 'required',
            'task_date' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput();
        }

        $model = new TaskModel();
        $model->update($id, [
            'title'     => $this->request->getVar('title'),
            'task_date' => $this->request->getVar('task_date')
        ]);

        return redirect()->to('/tasks');
    }

    public function delete($id = null)
{
    $model = new TaskModel();
    
    // Perform soft-delete by setting is_archived = 1
    $model->update($id, ['is_archived' => 1]);

    return redirect()->to('/tasks');
}
}