<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Requests\TaskRequest;


class TaskApiController extends Controller
{
    public function index()
    {
        return Task::all();
    }

    public function index_single($id){
        $task = Task::find($id);

        return $task;
    }

    public function store(TaskRequest $request){
        $task = Task::create($request->input());

        return [
            $task, 
            "message" => 'Successfully added task'
        ];
    }

    public function update(TaskRequest $request, $id){
        Task::whereId($id)->update($request->input());
        $updated_task = Task::find($id);

        return [
            'task' => $updated_task,
            "message" => 'Successfully updated task'
        ];
    }

    public function destroy($id)
    {
        Task::find($id)->delete();
        return [
            "message" => "Successfully deleted task"
        ];
    }
}
