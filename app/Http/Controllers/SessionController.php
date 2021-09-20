<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Validation\ValidationException;
class SessionController extends Controller
{

    public function create()
    {
        return view('user.login');
    }

    /**
     * @throws ValidationException
     */
    public function store()
    {

        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);


        if (auth()->attempt($attributes)) {
            return redirect(RouteServiceProvider::HOME)->with('success', 'Welcome back!');
        }

        throw ValidationException::withMessages(['email' => 'Your provided credentials could not be verified']);

//        return back()
//            ->withInput()
//            ->withErrors(['email' => 'Your provided credentials could not be verified']);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect(RouteServiceProvider::HOME)->with('success', 'Goodbye!');
    }
}
