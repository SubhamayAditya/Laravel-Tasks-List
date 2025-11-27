<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tasks;


class TaskController extends Controller
{

    //Addtask
    public function addtask()
    {
        return view('addtask');
    }

    //Create task
    public function create(Request $request)
    {
        $data = $request->validate([
            'task_name' => 'required'
        ]);

        Tasks::create([
            'task_name' => $request->task_name,
            'status' => $request->has('status') ? 1 : 0
        ]);
        return redirect('/')->with('success', 'Task added successfully');
    }


    // edit task
    public function edit()
    {
        return view('edit');
    }
}
