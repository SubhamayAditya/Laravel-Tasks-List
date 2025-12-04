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

        Tasks::create([
            'task_name' => $request->task_name,
            'task_date' => $request->task_date,
            'status' => $request->has('status') ? 1 : 0
        ]);
        return redirect('/')->with('success', 'Task added successfully');
    }


    // edit task
    public function edit(Tasks $task)
    {
        return view('edit', [
            'task' => $task
        ]);
    }

    //Update
    public function update(Request $request, Tasks $task)
    {
        $request->validate([
            'task_name' => 'required',
            'task_date' => 'required|date',
        ]);

        $task->update([
            'task_name' => $request->task_name,
            'task_date' => $request->task_date,
            'status'    => $request->has('status') ? 1 : 0,
        ]);

        return redirect('/')->with('success', 'Task updated successfully');
    }


    //Delete
    public function delete(Tasks $task)
    {
      
        $task->delete();

        return redirect('/')->with('success', 'Task deleted successfully');
    }


    //Show
    public function show(Tasks $task){
       return view('show', [
            'task' => $task
        ]);
    }
}
