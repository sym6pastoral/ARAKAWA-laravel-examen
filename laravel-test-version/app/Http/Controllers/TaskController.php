<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        return view('task.index', [
            'tasks' => \App\Models\Task::all(),
        ]);
    }

    /**
     * Show tasks
     * @param int $id
     * @return view
     */

    public function detail(Request $request){
        $task = Task::find($request->id);

        if(is_null($task)){
            \Session::flash('err_msg','La page que vous cherchez nexiste pas');
            return redirect(route('index'));

        }

        return view('task.detail',['task' => $task]);
    }

    public function delete(Request $request){
        $task = Task::find($request->id);
        $task->delete();



        return view ('task.delete',['task'=>$task]);
    }

    public function alphabet()
    {
        $task = Task::paginate(3);

        $tasks = Task::orderBy('title')->get();        
    
        return view('task.alphabet', compact(['task', 'tasks']));
    
    }
}