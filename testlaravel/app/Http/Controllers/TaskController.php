<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index(){

      $tasks = Task::all();
      return view('tasks.index', ['tabTasks'=>$tasks]);


  }

    public function saveTache(Request $request)
   {
       $this->validate($request, ['name' => 'required|max:255']);
       $task = new Task();
       $task->name = $request->input('name');

       $task->save();
       return redirect('/tasks');
 }
    public function supTache(Request $request)
  {
       $task_id = $request->input('id');
       $task = Task::find($task_id);
       $task->delete();
       return redirect('/tasks');
  }
 }
