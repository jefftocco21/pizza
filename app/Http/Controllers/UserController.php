<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

class UserController extends Controller
{
    //Show Registration/Create Form
    public function create(){
        return view('users.register');
    }

    public function store(Request $request){
        $fields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:6']
        ]);

        //Hash
        $fields['password'] = bcrypt($fields['password']);

        //Create user
        $user = User::create($fields);

        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in.');
    }
}