<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public $task;

    public function __construct(Task $task) {
        $this->task = $task;
    }

    public function index() {
        return $this->task->getTaskAll();
    }

    public function show(Task $task) {
        return $task;
    }

    public function store(Request $request) {
        return $this->task->storeTask($request);
    }
}
