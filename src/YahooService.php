<?php

namespace App;

class YahooService implements EmailProvider
{

    public function connect()
    {
        $message = "welcome to yahoo";
        return $message;
    }

    public function get()
    {
        $message = "inbox is empty";
        return $message;
    }

    public function send(Email $email)
    {
        $message = "this message sent.";
        return $message;
    }
}