<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrRequest;
use App\Models\Login;
use Illuminate\Support\Facades\Hash;

class RegistrController extends Controller
{
    public function registration(RegistrRequest $req)
    {
        $data = $req->validated();

        // Хэширую пароль для безопасности
        $data['password'] = Hash::make($data['password']);

        Login::create($data);// Mass Assigment

        return redirect()->route('index');
    }

    // Implicit Binding
    public function show(Login $login)
    {
        return view('logins.show', compact('login'));
    }
}
