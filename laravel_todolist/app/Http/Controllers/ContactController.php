<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Http\Requests\LoginRequest;

class ContactController extends Controller
{
    public function submit(LoginRequest $req)
    {
        // Mass Assignment
        $data = $req->validated();
        Login::create($data);

        return redirect()->route('index')->with('success', 'Рады видеть Вас снова:)');
    }

    public function showOneLogin(Login $login) // Implicit Binding
    {
        return view('one-login', ['login' => $login]);
    }
}
