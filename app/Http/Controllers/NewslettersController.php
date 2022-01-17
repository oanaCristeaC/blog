<?php

namespace App\Http\Controllers;

use App\Services\Newsletters;
use Illuminate\Validation\ValidationException;


class NewslettersController extends Controller
{
    /**
     * @throws ValidationException
     */
    public function create(Newsletters $newsletters)
    {
        request()->validate(['email' => 'required|email']);

        try {
            $newsletters->subscribe(request('email'));

        } catch (\Exception $e) {
            throw ValidationException::withMessages(['email' => 'Please provide a valid email address!']);
        }

        return redirect('/')->with('success', 'You are now subscribed to our newsletters');
    }
}
