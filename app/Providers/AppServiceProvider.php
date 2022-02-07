<?php

namespace App\Providers;

use App\Models\User;
use App\Services\MailchimpNewsletters;
use App\Services\Newsletters;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use MailchimpMarketing\ApiClient;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind(Newsletters::class, function() {
            $client = (new ApiClient())->setConfig([
                'apiKey' => config('services.mailchimp.key'), // this could also be injected in constructor
                'server' => 'us20'
            ]);

            return new MailchimpNewsletters($client);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('admin', function(User $user) {
           return $user->username == 'ionelacristea';
        });
    }
}
