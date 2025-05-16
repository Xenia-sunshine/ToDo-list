<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // главная страница входа
})->name('home');

Route::get('/login', function () {
    return view('authentication.login');
})->name('login'); //вход

Route::get('/registration', function () {
    return view('authentication.registration'); //регистрация
})->name('registration-form');

Route::get('/contact', function () {
    return view('tasks.contact'); // создание задачи
})->name('contact');

Route::get('/index', function () {
    return view('main_page_task.index'); // главная страница создания задач
})->name('index');

Route::get(
    '/logins/{login}',
    [\App\Http\Controllers\ContactController::class, 'showOneLogin']
)->name('logins.show');

Route::get(
    '/logins/{login}',
    [\App\Http\Controllers\RegistrController::class, 'show']
)->name('logins.show');

Route::post(
    '/contact/submit',
    [\App\Http\Controllers\ContactController::class, 'submit']
)->name('contact-form');

Route::post(
    '/contact/store',
    [\App\Http\Controllers\RegistrController::class, 'registration']
)->name('reg-form');

// вывод всех заданий
Route::get(
    '/task/all',
    [\App\Http\Controllers\TaskController::class, 'allData']
)->name('task-all');

// создание задания
Route::get(
    '/task/create',
    [\App\Http\Controllers\TaskController::class, 'submit']
)->name('task-form');

Route::get(
    '/tasks/{task}',
    [\App\Http\Controllers\TaskController::class, 'showOneTask']
)->name('task-show-one');

// редактирование
Route::get(
    '/task/all/{id}/update',
    [\App\Http\Controllers\TaskController::class, 'updateTask']
)->name('task-update');

Route::get(
    '/task/{id}/update',
    [\App\Http\Controllers\TaskController::class, 'updateTaskSubmit']
)->name('task-update-submit');

// удаление
Route::get(
    '/task/all/{id}/delete',
    [\App\Http\Controllers\TaskController::class, 'deleteTask']
)->name('task-delete');

Route::get('/idForm', function () {
    return view('tasks.idForm'); // форма user
})->name('id-form-task');

Route::post(
    '/idForm',
    [\App\Http\Controllers\TaskController::class, 'showTasksByUserId']
)->name('id-form');

Route::get(
    '/idForm/SHOW',
    [\App\Http\Controllers\TaskController::class, 'showIdForm']
)->name('id-form-task');

Route::get('/instruction', function () {
    return view('manual.instruction'); //инструкция
})->name('instruction');
