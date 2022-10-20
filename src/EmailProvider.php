<?php

namespace App;

interface EmailProvider
{
    public function connect(Email $email);
    public function get();
    public function send(Email $email);
}