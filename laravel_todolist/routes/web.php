<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');//главная страница входа
})->name('home');
Route::get('/login', function () {//страница входа
    return view('login');
})->name('login');
Route::get('/registration', function () {//страница регистрации
    return view('registration');
})->name('registration-form');


Route::get('/contact', function () {
    return view('contact'); // создание задачи
})->name('contact');

Route::get('/index', function () {
    return view('task.index');//главная страница задания
})->name('index');



Route::post('/contact/submit', [\App\Http\Controllers\ContactController::class ,'submit'] )->name('contact-form');
Route::post('/contact/store', [\App\Http\Controllers\registrcontroller::class ,'registration'] )->name('reg-form');

//вывод всех заданий
Route::get('/task/all', [\App\Http\Controllers\taskcontroller::class ,'allData'] )->name('task-all');
//создание задания
Route::get('/task/create', [\App\Http\Controllers\taskcontroller::class ,'submit'] )->name('task-form');
Route::get('/task/all/{id}', [\App\Http\Controllers\taskcontroller::class ,'showOneTask'] )
    ->name('task-show-one');
//редактирование
Route::get('/task/all/{id}/update', [\App\Http\Controllers\taskcontroller::class ,'updateTask'] )
    ->name('task-update');
Route::get('/task/{id}/update', [\App\Http\Controllers\taskcontroller::class ,'updateTaskSubmit'] )
    ->name('task-update-submit');
//удаление
Route::get('/task/all/{id}/delete', [\App\Http\Controllers\taskcontroller::class ,'deleteTask'] )
    ->name('task-delete');


Route::get('/idForm', function () {
    return view('user_id.idForm'); // форма user
})->name('id-form-task');

Route::post('/idForm', [\App\Http\Controllers\taskcontroller::class, 'showTasksByUserId'])->name('id-form');
Route::get('/idForm/SHOW', [\App\Http\Controllers\taskcontroller::class, 'showIdForm'])->name('id-form-task');
Route::get('/instruction', function () {
    return view('user_id.instruction');
})->name('instruction');
