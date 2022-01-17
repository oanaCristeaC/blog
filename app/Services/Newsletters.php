<?php
declare(strict_types=1);

namespace App\Services;

use MailchimpMarketing\ApiClient;

class Newsletters
{

    public function subscribe($mail, string $list = null): object
    {
        $list ??= config('services.mailchimp.subscribed_key');

        return $this->client()->lists->addListMember($list, [
            "email_address" => $mail,
            "status" => "subscribed",
        ]);

    }

    private function client(): ApiClient
    {
        return (new ApiClient())->setConfig([
            'apiKey' => config('services.mailchimp.key'), // this could also be injected in constructor
            'server' => 'us20'
        ]);
    }
}
