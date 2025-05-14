<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Login;

class ContactController extends Controller
{
    public function submit(LoginRequest $req)
    {
        $data = $req->validated();
        $contact = Login::create($data);
        return redirect()->route('index');
    }
}
