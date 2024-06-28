<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class, 'showTasks']);

Route::get('/create', [TaskController::class,'showCreateTasks']);

Route::post('/tasks', [TaskController::class,'store']);

Route::patch('/tasks/{id}', [TaskController::class,'update']);

Route::delete('/tasks/{id}', [TaskController::class,'delete']);