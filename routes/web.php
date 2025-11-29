<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Models\Tasks;

Route::get('/', function () {

$tasks = Tasks::orderBy("created_at", "ASC")->get();
    return view('index', [
            'tasks' => $tasks
        ]); 
});

Route::get('/addtask', [TaskController::class,'addtask'])->name('addtask');
Route::post('/addtask', [TaskController::class, 'create'])->name('task.store');

Route::get('/edit/{task}', [TaskController::class, 'edit'])->name('task.edit');
Route::put('/edit/{task}', [TaskController::class, 'update'])->name('task.update');



Route::delete('/delete/{task}', [TaskController::class, 'delete'])->name('task.delete');

