<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Http\Requests\UserIdRequest;
use App\Models\Task;
use App\Models\Login;

class TaskController extends Controller
{
    public function submit(TaskRequest $req)
    {
        // Mass Assignment
        $data = $req->validated();
        Task::create($data);

        return redirect()->route('index')->with('success', 'Задача успешно создана');
    }

    public function allData()
    {
        $tasks = Task::orderBy('user_id', 'desc')->get();
        return view('tasks.messages', ['data' => $tasks]);
    }


    public function showOneTask(Task $task) //используется Implicit Binding
        // показывает задачу
    {
        return view('tasks.one-task', ['data' => $task]);
    }

    public function updateTask($id) // редактирование записи
    {
        $contact = new Task();
        return view('tasks.update-task', ['data' => $contact->find($id)]);
    }

    public function updateTaskSubmit($id, TaskRequest $req)
    {
        $contact = Task::find($id);
        $data = $req->validated();
        $contact->update($data); // используется Mass Assignment

        return redirect()->route('task-show-one', $id)->with('success', 'Задача успешно обнавлена');
    }

    public function deletetask($id)
    {
        // Implicit Binding
        $task = Task::findOrFail($id);

        // Mass Assignment.
        $task->delete();

        return redirect()->route('index')->with('success', 'Задача удалена');
    }

    public function showIdForm()
    {
        return view('tasks.idForm');
    }

    public function showTasksByUserId(UserIdRequest $request)
    {

        $userId = $request->input('user_id');
        // Поиск задач по user_id
        //Implicit Binding
        // Модель Login используется вместо модели User
        $user = Login::find($userId);

        if (!$user) {
            return back()->withErrors(['user_id' => 'Пользователь с указанным ID не найден.'])->withInput();
        }

        $tasks = Task::where('user_id', $userId)->get();

        if ($tasks->isEmpty()) {
            return back()->withErrors(['user_id' => 'Задачи для указанного ID пользователя не найдены.'])->withInput();
        }

        return view('tasks.user-tasks', ['tasks' => $tasks, 'user_id' => $userId]);
    }
}
