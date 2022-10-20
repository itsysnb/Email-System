<?php

namespace App;

class GmailService
{
    public function oAuth()
    {
        $message = "welcome to gmail service";
        echo $message;
    }

    public function sendForNextWeek(Email $email)
    {
        $message = "send message next week";
        echo $message;
    }

    public function getLastWeekInbox()
    {
        $message = "get all message in last week";
        echo $message;
    }
}