<?php

namespace App\Http\Controllers;

use App\Services\MailchimpNewsletters;
use App\Services\Newsletters;
use Illuminate\Validation\ValidationException;


class NewslettersController extends Controller
{
    /**
     * @throws ValidationException
     */
    public function create(Newsletters $newsletters)
    {
        request()->validate(['email_subscription' => 'required|email']);

        try {
            $newsletters->subscribe(request('email_subscription'));

        } catch (\Exception $e) {
            throw ValidationException::withMessages(['email.subscription' => 'Please provide a valid email address!']);
        }

        return redirect('/')->with('success', 'You are now subscribed to our newsletters');
    }
}
