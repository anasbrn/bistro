<?php

namespace App\Http\Controllers;

use App\Models\User;
// use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create(){
        return view('users.register');
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required'
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        //create user
        $user = User::create($formFields);

        //login
        auth()->login($user);

        //redirection
        return redirect('/')->with('message', 'User created successfully');
    }
}