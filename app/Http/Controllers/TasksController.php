<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Task; /* index追加時追加 */

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* 一覧表示(index)の追加 */
        $tasks = Task::all();
        
        return view('tasks.index', [
            'tasks' => $tasks
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /* 新規作成ページ追加 */
        $task = new Task;

        return view('tasks.create', [
            'task' => $task,
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* createから送信されたページを保存するアクション追加 */
        $task = new Task;
        $task->content = $request->content;
        $task->save();

        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /* 詳細ページ表示 */
        $task = Task::find($id);
        
        return view('tasks.show', [
            'task' => $task,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /* 既存レコード編集画面追加 */
        $task = Task::find($id);

        return view('tasks.edit', [
            'task' => $task,  
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /* editされたページのupdateアクションを追加 */
        $task = Task::find($id);
        $task->content = $request->content;
        $task->save();

        return redirect('/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /* 削除ページのアクションを追加 */
        $task = Task::find($id);
        $task->delete();

        return redirect('/');

    }
}
