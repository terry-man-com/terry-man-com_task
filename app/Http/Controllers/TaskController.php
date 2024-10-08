<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // indexページへ移動
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', ['tasks' => $tasks]);
    }

    // showページへ移動
    public function show($id)
    {
        $task = Task::find($id);
        return view('tasks.show', ['task' => $task]);
    }

    public function store(Request $request)
    {
        $task = new Task;

        $task->title = $request->title;
        $task->body = $request->body;

        $task->save();

        return redirect('/tasks');
    }
}
