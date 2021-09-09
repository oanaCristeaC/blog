<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('user.register');
    }

    public function store(Request $request)
    {
       $attributes = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|min:2|unique:users,username', //Rule::unique('users', 'username')-> ... for more complex validations
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:7|max:255'
        ]);



       User::create($attributes);

       return redirect('/');
    }
}
