<?php

namespace App\Http\Controllers;

use App\Task;
use App\Logo;
use Storage;
use Illuminate\Http\Request;
use ImageIntervention;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function create(Request $request)
    {
        $path = $request->file('image')->store('public');
        $tasks = new Task;
        $tasks->titre = $request->leTitre;
        $tasks->image = $path;
        $tasks->description = $request->laDescription;
        $tasks->save();
        return redirect('/adminHome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    public function edit(Task $task, $id)
    {
        $tasks=Task::find($id);
        return view('admin/edit', compact('tasks'));
    }

    public function update(Request $request, Task $task, $id)
    {
        $tasks=Task::find($id);
        $tasks->titre = $request->leTitre;
        $tasks->description = $request->laDescription;

        if ($request->image){
            Storage::delete($tasks->image);
            $tasks->image = $request->file('image')->store('public');
        }

        $tasks->save();
        return redirect('/adminHome');
    }

    public function destroy(Task $task,$id)
    {
        $tasks=Task::find($id);
        $tasks->delete();
        return redirect('/adminHome');
    }
}
