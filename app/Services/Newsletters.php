<?php


namespace App\Services;


interface Newsletters
{
    public function subscribe(string $mail, string $list = null);

}
