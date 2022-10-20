<?php

namespace App;

class YahooService implements EmailProvider
{

    public function connect()
    {
        $message = "welcome to yahoo";
        echo $message;
    }

    public function get()
    {
        $message = "inbox is empty";
        echo $message;
    }

    public function send(Email $email)
    {
        $message = "this message sent with yahoo service";
        echo $message;
    }
}