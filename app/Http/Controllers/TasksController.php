<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\tasks;

class TasksController extends Controller
{
    // getでmessages/にアクセスされた場合の「一覧表示処理」
    public function index()
    {
        $tasks = tasks::all();
        
        return view('tasks.index', [
            'tasks' => $tasks,
            ]);
    }

    // getでmessages/createにアクセスされた場合の「新規登録画面表示処理」
    public function create()
   {
        $task = new Tasks;

        return view('tasks.create', [
            'task' => $task,
        ]);
    }

    // postでmessages/にアクセスされた場合の「新規登録処理」
    public function store(Request $request)
    {
        $task = new tasks;
        $task->deadline = $request->deadline;
        $task->content = $request->content;
        $task->save();

        return redirect('/');
    }
    
    // getでmessages/idにアクセスされた場合の「取得表示処理」
    public function show($id)
    {
        $task = tasks::find($id);

        return view('tasks.show', [
            'task' => $task,
        ]);
    }

    // getでmessages/id/editにアクセスされた場合の「更新画面表示処理」
    public function edit($id)
    {
        $task = tasks::find($id);

        return view('tasks.edit', [
            'task' => $task,
        ]);
    }

    // putまたはpatchでmessages/idにアクセスされた場合の「更新処理」
    
    public function update(Request $request, $id)
    {
        $task = tasks::find($id);
        $task->content = $request->content;
        $task->deadline = $request->deadline;
        $task->save();

        return redirect('/');
    }

    // deleteでmessages/idにアクセスされた場合の「削除処理」
   public function destroy($id)
    {
        $task = tasks::find($id);
        $task->delete();

        return redirect('/');
    }
}