<?php

namespace App;

class EmailClient
{
    public function __construct(private Email $email)
    {
    }

    public function connect()
    {
        $message = "welcome to email system";
        return $message;
    }

    public function get()
    {
        $message = "inbox is empty";
        return $message;
    }

    public function send(EmailProvider $email)
    {
        $message = "this message sent.";
        return $message;
    }
}