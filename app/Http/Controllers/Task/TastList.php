<?php

namespace App\Http\Controllers\Task;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TaskModel;
class TastList extends Controller
{
    public function tasks(){
        header("Access-Control-Allow-Origin: *");
        return response()->json(TaskModel::get(), 200);
    }
    public function taskByID($task_id){
        header("Access-Control-Allow-Origin: *");
        $task = TaskModel::find($task_id);
        if(is_null($task)){
            return response()->json('task not found!', 404);
        }
        return response()->json($task, 200);
    }

    public function addTask(Request $request){
        header("Access-Control-Allow-Origin: *");
        header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
        $tasks = TaskModel::create($request->all());
        return response()->json($tasks, 201);
    } 
    public function editTask(Request $request, TaskModel $tasks){
        header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
        $tasks->update($request->all());
        return response()->json($tasks, 200);
    }
    public function deleteTask(Request $request, TaskModel $tasks){
        header("Access-Control-Allow-Origin: *");
        $tasks->delete($request->all());
        return response()->json(null, 204);
    }
}

