<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;

class Tasks extends BaseController
{
    protected $taskModel;
    protected $userModel;

    public function __construct()
    {
        $this->taskModel = new TaskModel();
        $this->userModel = new UserModel();
    }


    public function welcome()
    {
        
    date_default_timezone_set('Asia/Manila');
    $todayDate = date('Y-m-d');

        $tasks = $this->taskModel->where('task_date', $todayDate)->findAll();


        foreach ($tasks as &$task) {
            if ($task['task_date'] > $todayDate) {
                $task['status'] = 'pending';
            }
        }

        $data = [
            'today_date' => $todayDate,
            'tasks'      => $tasks,
            'user'       => $this->userModel->first()
        ];

        return view('welcome_tasks', $data);
    }

    public function index()
    {
        date_default_timezone_set('Asia/Manila');
        $todayDate = date('Y-m-d');

        $tasks = $this->taskModel->orderBy('task_date', 'DESC')->findAll();

        foreach ($tasks as &$task) {
            if ($task['task_date'] > $todayDate) {
                $task['status'] = 'pending';
            }
        }

        $data = [
            'tasks' => $tasks,
            'user'  => $this->userModel->first()
        ];

        return view('tasks_index', $data);
    }
}