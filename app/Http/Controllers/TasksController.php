<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    //

    public function index() {
        $tasks = Task:: orderBy('complete_at','ASC') -> orderBy('created_at', 'DESC') -> get();
        return view('tasks.index', ['tasks' => $tasks,]);
    }
    
    public function create(){
        return view('tasks.create');
    }

    public function store(){

        request()->validate([
            'description' => 'required|max:255',
            'title' => 'required'
            ]);

        $task = Task::create([
            'title' => request('title'),
            'description' => request('description'),
        ]);

        return redirect('/');
    }

    public function update($id){
        $task = Task::where('id', $id)-> first();
        $task-> complete_at = now();
        $task->save();

        return redirect('/');
    }

    public function delete($id){
        $task = Task::where('id', $id)-> first();
        $task -> delete();

        return redirect('/');
    }

}
