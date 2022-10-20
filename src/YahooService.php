<?php

namespace App;

class YahooService implements EmailProvider
{

    public function connect(Email $email)
    {
        return $email;
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