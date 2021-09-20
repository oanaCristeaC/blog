<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;

class SessionController extends Controller
{
    public function destroy()
    {
        auth()->logout();

        return redirect(RouteServiceProvider::HOME)->with('success', 'Goodbye!');
    }
}
