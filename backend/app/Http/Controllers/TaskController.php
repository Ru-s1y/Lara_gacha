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

    public function show(Request $request) {
        return $this->task->show($request->id);
    }

    public function store(Request $request) {
        $inputs = $request->input();
        return $this->task->store($inputs);
    }

    public function update(Request $request) {
        return $this->task->updateTask($request);
    }

    public function destroy(Request $request) {
        return $this->task->destroyTask($request->id);
    }
}
