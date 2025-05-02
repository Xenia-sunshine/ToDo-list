<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use App\Models\task;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
class taskcontroller extends Controller
{
    public function submit(TaskRequest $req)
    {
        $contact=new task();
        $contact->title=$req->input('title');
        $contact->description=$req->input('description');
        $contact->user_id=$req->input('user_id');

        $contact->save();
        return redirect()->route('index')->with('success','Задача успешно создана');

    }
    public function allData()
    {
        $contact=new task();
        return view('messages',['data'=>$contact->orderBy('user_id','desc')->get()]);
    }
    public function showOneTask($id)
    {
        $contact=new task();
        return view('one-task',['data'=>$contact->find($id)]);
    }
    public function updateTask($id)//редактирование записи
    {
        $contact=new task();
        return view('update-task',['data'=>$contact->find($id)]);
    }
    public function updateTaskSubmit($id,TaskRequest $req)
    {
        $contact=task::find($id);
        $contact->user_id=$req->input('user_id');
        $contact->title=$req->input('title');
        $contact->description=$req->input('description');


        $contact->save();
        return redirect()->route('task-show-one',$id)->with('success','Задача успешно обнавлена');

    }
    public function deleteTask($id)
    {
        task::find($id)->delete();
        return redirect()->route('index')->with('success','Задача удалена');
    }


    public function showIdForm()
    {
        return view('user_id.idForm'); // Отображаем форму
    }

    public function showTasksByUserId(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|integer|min:1', // user_id обязательно, целое число и больше 0
        ], [
            'user_id.required' => 'Пожалуйста, введите ID пользователя.',
            'user_id.integer' => 'ID пользователя должен быть целым числом.',
            'user_id.min' => 'ID пользователя должен быть больше 0.',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $userId = $request->input('user_id');

        // Поиск задач по user_id
        $tasks = task::where('user_id', $userId)->get();

        if ($tasks->isEmpty()) {
            return back()->withErrors(['user_id' => 'Задачи для указанного ID пользователя не найдены.'])->withInput();
        }


        return view('user_id.user-tasks', ['tasks' => $tasks, 'user_id' => $userId])->with('success', 'Задачи успешно найдены');
    }


}
