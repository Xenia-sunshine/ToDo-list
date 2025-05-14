<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Http\Requests\UserIdRequest;
use App\Models\Task;

class TaskController extends Controller
{
    public function submit(TaskRequest $req)
    {
        $contact = new Task();
        $contact->title = $req->input('title');
        $contact->description = $req->input('description');
        $contact->user_id = $req->input('user_id');

        $contact->save();
        return redirect()->route('index')->with('success', 'Задача успешно создана');
    }

    public function allData()
    {
        $contact = new Task();
        return view('messages', ['data' => $contact->orderBy('user_id', 'desc')->get()]);
    }

    public function showOneTask(Task $task) //используется Implicit Binding
        // показывает задачу
    {
        return view('one-task', ['data' => $task]);
    }

    public function updateTask($id) // редактирование записи
    {
        $contact = new Task();
        return view('update-task', ['data' => $contact->find($id)]);
    }

    public function updateTaskSubmit($id, TaskRequest $req)
    {
        $contact = Task::find($id);
        $data = $req->validated();
        $contact->update($data); // используется Mass Assignment

        return redirect()->route('task-show-one', $id)->with('success', 'Задача успешно обнавлена');
    }

    public function deleteTask($id)
    {
        Task::find($id)->delete();
        return redirect()->route('index')->with('success', 'Задача удалена');
    }

    public function showIdForm()
    {
        return view('user_id.idForm'); // Отображаем форму
    }

    public function showTasksByUserId(UserIdRequest $request)
    {
        $userId = $request->input('user_id');

        // Поиск задач по user_id
        $tasks = Task::where('user_id', $userId)->get();

        if ($tasks->isEmpty()) {
            return back()->withErrors(['user_id' => 'Задачи для указанного ID пользователя не найдены.'])->withInput();
        }

        return view('user_id.user-tasks', ['tasks' => $tasks, 'user_id' => $userId])->with('success', 'Задачи успешно найдены');
    }
}
