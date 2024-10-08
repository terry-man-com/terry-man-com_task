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

    // タスク編集ページへ移動
    public function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.edit', ['task' => $task]);
    }

    // update(更新)処理
    public function update(Request $request, $id)
    {
        $task = Task::find($id);

        $task->title = $request->title;
        $task->body  = $request->body;

        $task->save();

        return redirect('/tasks');
    }

    // Create Task
    public function store(Request $request)
    {
        $task = new Task;

        $task->title = $request->title;
        $task->body = $request->body;

        $task->save();

        return redirect('/tasks');
    }

    // 削除機能
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();

        return redirect('/tasks');

    }
}
