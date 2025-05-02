<?php

namespace App\Http\Controllers;
use App\Models\Login;
use Illuminate\Http\Request;
use App\Http\Requests\loginrequest;
use Illuminate\Support\Facades\Auth;
class ContactController extends Controller
{

    public function submit(loginrequest $req)
    {
        $contact=new Login ();
        $contact->name=$req->input('name');
        $contact->email=$req->input('email');
        $contact->phone=$req->input('phone');
        $contact->password=$req->input('password');

        $contact->save();
        return redirect()->route('index');
        }
        public function allData()
        {
            $contact = new Login();
            return view('messages', ['data' => $contact->inRandomOrder()->get()]);
        }
        public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


}

