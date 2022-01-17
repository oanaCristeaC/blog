<?php
declare(strict_types=1);

namespace App\Services;

use MailchimpMarketing\ApiClient;

class MailchimpNewsletters implements Newsletters
{
    private ApiClient $client;

    public function __construct(ApiClient $client)
    {
        $this->client = $client;
    }

    public function subscribe(string $mail, string $list = null): object
    {
        $list ??= config('services.mailchimp.subscribed_key');

        return $this->client->lists->addListMember($list, [
            "email_address" => $mail,
            "status" => "subscribed",
        ]);

    }
}
