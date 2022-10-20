<?php

namespace App;

class GmailAdapter extends GmailService implements EmailProvider
{

    public function connect()
    {
        $this->oAuth();
    }

    public function get()
    {
        $this->getLastWeekInbox();
    }

    public function send(Email $email)
    {
        $this->sendForNextWeek($email);
    }
}