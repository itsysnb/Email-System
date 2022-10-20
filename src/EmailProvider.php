<?php

namespace App;

interface EmailProvider
{
    public function connect();
    public function get();
    public function send(Email $email);
}