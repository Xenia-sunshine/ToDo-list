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

        Login::create($data);

        return redirect()->route('index');
    }
}
