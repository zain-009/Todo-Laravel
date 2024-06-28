<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaskModel;


class TaskController extends Controller
{
    public function showTasks () {
        $tasks = TaskModel::orderBy('completed_at')->orderBy('id','DESC')->get();
        return view ('tasks.tasks',['tasks' => $tasks]);
    }

    public function showCreateTasks () {
        return view ('tasks.create');
    }

    public function store () {
        request()->validate([
            'description' => 'required | max:255',
        ]);

        TaskModel::create([
            'description' => request('description'),
        ]);
        return redirect('/');
    }

    public function update ($id) {
        $task = TaskModel::where('id', $id)->first();
        $task->completed_at = now();
        $task->save();
        return redirect('/');
    }

    public function delete ($id) {
        $task = TaskModel::where('id', $id)->first();
        $task->delete();
        return redirect('/');
    }
}
